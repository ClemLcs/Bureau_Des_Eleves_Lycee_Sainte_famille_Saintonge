<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /* 'img_profil' => 'string|max:1025', */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:191'],
            'prenom' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    /* 'img_profil' => $data['img_profil'], */
    protected function create(array $data)
    {
        return User::create([
            'role' => "élève",
            'name' => $data['name'],
            'prenom' => $data['prenom'],
            'classe' => $data['classe'],
            'email' => $data['email'],
	        'img_profil' => "https://www.lyceesaintefamille.com/wp-content/uploads/sites/115/2018/06/Logo-2016.jpg",
            'password' => Hash::make($data['password']),
            'created_at' => now()->timestamp,
            'updated_at' => now()->timestamp,
        ]);
    }
}
