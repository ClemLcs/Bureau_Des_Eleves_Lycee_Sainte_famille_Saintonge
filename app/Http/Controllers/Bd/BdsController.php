<?php

namespace App\Http\Controllers\Bd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Bds;
use App\Post;


class BdsController extends Controller
{
    //

    public function list(){
        $users = Auth::user();
        $posts = Bds::where('validate', '=', '0')->get();
        if(!empty($users)){
            return view('bds.list',['users' => $users,])->withPosts($posts);
        }else{
            return view('auth.login');
        }
    }


    public function validation(Request $request){
        $users = Auth::user();
        $post = $request->all();
        if(!empty($users)){
            return view('bds.validate',[
                'users' => $users,
                'post' => $post,
            ]);
        }else{
            return view('auth.login');
        }
    }
    public function create(){
        $users = Auth::user();
        return view('bds.create',[
            'users' => $users,
        ]);
    }

    public function sql(Request $request){
        $request->all();
        $allowedTags='<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
        $allowedTags.='<li><ol><ul><span><div><br><ins><del>';  
        $users = Auth::user();
        for( $i=1; $i<=15; $i++) {
            if($users->role === "responsable_direction"){
            Mail::send('bds.email.create', ['username' => 'test'], function($message) use ($users){
                $message->to($users->email)->subject("Création d\'un Article sur le BDS")->from('gerants@bde-saintonge.com');
            });
        }
        }
        $str = strip_tags(stripslashes($request->input('body')),$allowedTags);
        return Bds::create([
            'body' => $request->input('body'),
            'validate' => '0',
            'resum' => $request->input('resum'),
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'email' => $request->input('email'),
            'img' => $request->input('img'),
            'slug' => $request->input('slug'),
        ]);
    }

    public function index(){
        $users = Auth::user();
        $posts = Bds::where('validate', '=', '1')->get();
        if(!empty($users)){
            return view('bds.index',[
                'users' => $users,
                'posts' => $posts,
            ]);
        }else{
            return view('auth.login');
        }
    }

    public function edit($id = 2){
        $user = Auth::user();
        $posts = Bds::find($id);
        return view('bds.edit',['users' => $user,])->withPosts($posts);
    }

    public function update(Request $request){
        $request->all();
        Bds::where('title', '=', $request->input('title'))->delete();
        return Bds::create([
            'body' => $request->input('body'),
            'resum' => $request->input('resum'),
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'email' => $request->input('email'),
            'img' => $request->input('img'),
            'slug' => $request->input('slug'),
            'validate' => "1",
        ]);
    }
    public function slug($slug){
        $user = Auth::user();
        $posts = Bds::where('slug', '=', $slug)->first();
        if(empty($posts)){
            abort(404);
        }else{
            return view('bds.single',['users' => $user,])->withPosts($posts);
        }
    }
}
