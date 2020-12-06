<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;

class serv extends Controller
{
    //

    public function __construct()
    {
        $this->test_auth = Auth::check();
    }

    public function create(User $users){
        
        
        dd($users);
        if ($this->test_auth == true){
            
            $users = Auth::user();
            

            return view('auth.dashboard.serv', [
                'users' => $users,
            ]);
        }else{
            return redirect()->route('login');
        }
    }

    public function insert(){
        
        if ($this->test_auth == true){

            $users = Auth::user();

            $msg = htmlspecialchars($_POST['msg']);

            $timestamp = new DateTime();
            $timestamp->setTimezone(new DateTimeZone('Europe/Paris'));
            $time = date_format($timestamp, 'd-m-Y H:i:s');

            if (!empty($_POST['pb_reboot'])){
                $pb = htmlspecialchars($_POST['pb_reboot']); 
                echo "ook";
            }
            if (!empty($_POST['pb_mt'])){
                $pb = htmlspecialchars($_POST['pb_mt']); 
            }
            if (!empty($_POST['pb_crash'])){
                $pb = htmlspecialchars($_POST['pb_crash']); 
            }
        }
    }
}
