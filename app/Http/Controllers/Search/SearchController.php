<?php

namespace App\Http\Controllers\Search;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use PDO;

class SearchController extends Controller
{
    //
    public function index(){
        $search = htmlspecialchars($_POST['search']);
        if(!empty($search)){
            
            $connection_db = new PDO("mysql:host=127.0.0.1;dbname=laravel", "laravel", "zKj6-bqX0tZODd7PFfQ6vdELHQDYd7");

           /* $req = "SELECT * FROM search)";
            $query = $connection_db->prepare($req);
            //$query->bindParam(1, $search);
            $query->execute(); */

            /*$select = DB::select('SELECT * from search where search = ?', [
                'search' => $search,
            ]);*/

            $query = $connection_db->prepare("SELECT * FROM search");
            $query->execute();
            $result = $query->fetch(PDO::FETCH_LAZY);
            if ($result['search'] == $search){
                echo "ok";
            }else{
                $error = "Aucun mot clé correspond à votre recherche";
                return view('search.error', [
                    'error' => $error,
                ]);
            }
        }else{
            return redirect()->action('Dashboard\HomeController@index');
        }
    }
}
