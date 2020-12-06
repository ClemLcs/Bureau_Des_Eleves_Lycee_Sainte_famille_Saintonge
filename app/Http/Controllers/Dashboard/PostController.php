<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        $users = Auth::user();
        
        return view('home', [
            'posts' => $posts,
            'users' => $users
        ]);
    }

    public function content(){
        $posts = Post::all();
        return view('dashboard.post', [
            'posts' => $posts
        ]);
    }

    public function create(){
        $users = Auth::id();
        $post = Post::first();
        return view('dashboard.form', [
            'post' => $post,
            'users' => $users
        ]);
    }

    public function store(Request $request){
        
        $post = Post::create($request->all());
        $post->saveTags($request->get('tags'));
        $post->user_id = Auth::id();
        $post->save();
        return redirect('/dashboard/index/posts');
    }
}
