<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Auth::routes(['verify' => true]);
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');

//admin route
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin','verified']],function(){
    Route::get('dashbord','DashbordController@index')->name('dashbord');
    Route::resource('addpost','AddPostController');
});

//customer route
Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author','verified']],function(){
    Route::get('dashbord','DashbordController@index')->name('dashbord');
});

//dealer route
Route::group(['as'=>'diller.','prefix'=>'diller','namespace'=>'Diller','middleware'=>['auth','diller','verified']],function(){
    Route::get('dashbord','DashbordController@index')->name('dashbord');
});
