<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $users = Auth::user();
        $users_all = DB::table('users')->get();
        if($users->role === "responsable"){
            return view('dashboard.resp.index', [
                'posts' => $posts,
                'users' => $users,
                'users_all' => $users_all,
            ]);
        }
        if($users->role === "responsable_direction"){
            return view('dashboard.resp.index', [
                'posts' => $posts,
                'users' => $users,
                'users_all' => $users_all,
            ]);
        }
        if($users->role === "responsable_bds"){
            return view('dashboard.resp.index', [
                'posts' => $posts,
                'users' => $users,
                'users_all' => $users_all,
            ]);
        }
        if($users->role === "responsable_bde"){
            return view('dashboard.resp.index', [
                'posts' => $posts,
                'users' => $users,
                'users_all' => $users_all,
            ]);
        }
        if($users->role === "responsable_bda"){
            return view('dashboard.resp.index', [
                'posts' => $posts,
                'users' => $users,
                'users_all' => $users_all,
            ]);
        }
        if($users->role === "élève"){
            return view('dashboard.eleve.index', [
                'posts' => $posts,
                'users' => $users,
                'users_all' => $users_all,
            ]);
        }
        
        
    }
}
