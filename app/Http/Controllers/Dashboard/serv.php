<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Cookie\Middleware\EncryptCookies;
use DateTime;
use DateTimeZone;
use PDO;

class serv extends Controller
{
    //


    public function create() {
        return view('auth.dashboard.task.loggin');
    }

    public function verify(Request $request){
            
        if (isset($_POST['email'])) { 
            $email = htmlspecialchars($_POST['email']);
        } 
        if (isset($_POST['password'])) { 
            $password = htmlspecialchars($_POST['password']);
        } 

        $password_encode = Hash::make($password);


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('task/create_vererify');
        }else{
            return redirect()->route('task/create');
        }  
    }

    public function create_vererify(){
        $users = Auth::user();
            

            return view('auth.dashboard.serv', [
                'users' => $users,
            ]);
    }

    public function insert(){
        if (!empty(Auth::user())){

            $users = Auth::user();
            $users_fonction = $users->fonction;
            $users = $users->name;
            //dd($users_fonction);

            $msg = htmlspecialchars($_POST['msg']);

            $timestamp = new DateTime();
            $timestamp->setTimezone(new DateTimeZone('Europe/Paris'));
            $time = date_format($timestamp, 'd-m-Y H:i:s');

            if (!empty($_POST['pb_reboot'])){
                $pb = "reboot";
                $i_class = "fa fa-upload fa-fw";
            }
            if (!empty($_POST['pb_mt'])){
                $pb = "maintenance"; 
                $i_class = "fa fa-tasks fa-fw";
            }
            if (!empty($_POST['pb_crash'])){
                $pb = "crash";
                $i_class = "fa fa-bolt fa-fw";
            }
            if (!empty($_POST['pb_serv_res'])){
                $pb = "le serveur ne répond pas";
                $i_class = "fa fa-warning fa-fw";
            }
            

            $connection_db = new PDO("mysql:host=127.0.0.1;dbname=laravel", env('DB_USERNAME'), env('DB_PASSWORD'));


            $req = "INSERT INTO pb_serv (users, msg, pb, i_class, heure, fonction) VALUES (?, ?, ?, ?, ?, ?)";
            $query = $connection_db->prepare($req);
            $query->bindParam(1, $users);
            $query->bindParam(2, $msg);
            $query->bindParam(3, $pb);
            $query->bindParam(4, $i_class);
            $query->bindParam(5, $time);
            $query->bindParam(6, $users_fonction);
            $query->execute();
            return redirect()->action('Dashboard\HomeController@index');
        }
    }
}
