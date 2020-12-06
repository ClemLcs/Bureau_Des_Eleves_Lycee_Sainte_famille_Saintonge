<?php

namespace App\Http\Controllers\Bd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Bda;


class BdaController extends Controller
{
    //

    public function list(){
        $users = Auth::user();
        $posts = Bda::where('validate', '=', '0')->get();
        if(!empty($users)){
            return view('bda.list',['users' => $users,])->withPosts($posts);
        }else{
            return view('auth.login');
        }
    }


    public function validation(Request $request){
        $users = Auth::user();
        $post = $request->all();
        if(!empty($users)){
            return view('bda.validate',[
                'users' => $users,
                'post' => $post,
            ]);
        }else{
            return view('auth.login');
        }
    }

    public function create(){
        $users = Auth::user();
        return view('bda.create',[
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
            Mail::send('bda.email.create', ['username' => 'test'], function($message) use ($users){
                $message->to($users->email)->subject("Création d\'un Article sur le BDA")->from('gerants@bde-saintonge.com');
            });
        }
        }
        $str = strip_tags(stripslashes($request->input('body')),$allowedTags);
        return Bda::create([
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
        $posts = Bda::where('validate', '=', '1')->get();
        if(!empty($users)){
            return view('bda.index',[
                'users' => $users,
                'posts' => $posts,
            ]);
        }else{
            return view('auth.login');
        }
    }
    
    public function edit($id = 2){
        $user = Auth::user();
        $posts = Bda::find($id);
        return view('bda.edit',['users' => $user,])->withPosts($posts);
    }

    public function update(Request $request){
        $request->all();
        Bda::where('title', '=', $request->input('title'))->delete();
        return Bda::create([
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
        $posts = Bda::where('slug', '=', $slug)->first();
        if(empty($posts)){
            abort(404);
        }else{
            return view('bda.single',['users' => $user,])->withPosts($posts);
        }
    }
}
