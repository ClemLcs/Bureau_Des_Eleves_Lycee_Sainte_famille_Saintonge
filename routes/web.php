<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Home Page*/
Route::get('/', function () {
    
    if(empty($users)){
        $users = [
            'name' => '',
            'prenom' => '',
            'img_profil' => '',
            'email' => '',
        ];
    }else{
        $users = Auth::user();
    }
    return view('welcome',[
        'users' => $users,
    ]);
});

Route::get('/mail', function () {
    Mail::send('bda.email.create', ['username' => 'test'], function($message){
        $message->to('contactjdhtfrance@gmail.com')->subject('TEST')->from('gerants@bde-saintonge.com');
    });

});
Route::get('/index.html', function () {
    if(empty($users)){
        $users = [
            'name' => '',
            'prenom' => '',
            'img_profil' => '',
            'email' => '',
        ];
    }else{
        $users = Auth::user();
    }
    return view('welcome',[
        'users' => $users,
    ]);
});
Route::get('/mentions-legales', function () {
    return view('mention');
});

/* Google */


/* Login Page */

Auth::routes();

/* Dashboard Page*/

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/dashboard/index/posts', 'Dashboard\PostController@index');
Route::get('/dashboard/view/{post}', function(Request $request){
    $users = Auth::user();
    $data = $request->input('azerty');
    $posts= App\Post::find($users->id);
    /*$posts = App\Post::find($users->id);*/
    return view('dashboard.post', [
        'posts' => $posts,
        'users' => $users,
        'data' => $data,
    ]);

});
Route::get('/dashboard/eleve', function(){
    return view('dashboard.eleve.index');
});
Route::get('/dashboard/create/posts', 'Dashboard\PostController@create');
Route::post('/dashboard/store/posts', 'Dashboard\PostController@store');
Route::get('/activity', 'HomeController@index');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'SearchController@index');

/* Bd Page */ 

Route::get('/bda','Bd\BdaController@index');
Route::get('/bda-create','Bd\BdaController@create');
Route::get('/bda-list','Bd\BdaController@list');
Route::post('/bda-validate','Bd\BdaController@validation');
Route::post('/sql/bda','Bd\BdaController@sql');
Route::get('/bda-edit','Bd\BdaController@edit');
Route::post('/sql/bda-update','Bd\BdaController@update');
Route::get('/bda/{slug}','Bd\BdaController@slug');

Route::get('/bds','Bd\BdsController@index');
Route::get('/bds-create','Bd\BdsController@create');
Route::get('/bds-validate','Bd\BdsController@validation');
Route::post('/sql/bds','Bd\BdsController@sql');
Route::get('/bds-edit','Bd\BdsController@edit');
Route::post('/sql/bds-update','Bd\BdsController@update');
Route::get('/bds/{slug}','Bd\BdsController@slug');

Route::get('/bdc','Bd\BdcController@index');
Route::get('/bdc-create','Bd\BdcController@create');
Route::get('/bdc-validate','Bd\BdcController@validation');
Route::post('/sql/bdc','Bd\BdcController@sql');
Route::get('/bdc-edit','Bd\BdcController@edit');
Route::post('/sql/bdc-update','Bd\BdcController@update');
Route::get('/bdc/WhiteEagleDance/{slug}','Bd\BdcController@patrick');
Route::get('/bdc/{slug}','Bd\BdcController@slug');


Route::get('/', function () {
    return view('welcome');
});
