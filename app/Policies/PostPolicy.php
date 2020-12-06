<?php

namespace App\Policies;

use App\User;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function before(User $user, $ability)
    {
        if($user->isAdmin()){
            return true;
        }
    }

    public function view (User $users, Post $post){
        return true;
    }

    public function create(User $users, Post $post)
    {
        return $users->id === $post->user_id; 
    }

    public function delete(User $users, Post $post)
    {
        return $users->id === $post->user_id; 
    }
}
