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

//Route::get('/', function () {
//    return view('welcome');
//});



Auth::routes(['verify' => true]);
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/', 'HomeController@index')->name('home');
Route::get('dealerRegistration', 'HomeController@dealerRegistration')->name('dealerRegistration');
Route::get('dillerLogin', 'HomeController@dillerLogin')->name('dillerLogin');
Route::post('rrr', 'HomeController@rrr')->name('rrr');

//admin route
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin','verified']],function(){
    Route::get('dashbord','DashbordController@index')->name('dashbord');
    Route::get('pending_add','DashbordController@pending_add')->name('pending_add');
    Route::resource('addpost','AddPostController');
    Route::put('/post/{id}/approve','AddPostController@approve')->name('post.approve');
    Route::resource('dealer','DealerController');
    Route::resource('customer','CustomerController');
});

//customer route
Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author','verified']],function(){
    Route::get('dashbord','DashbordController@index')->name('dashbord');
    Route::resource('post','AuthorPostController');
    Route::get('All_post','AuthorPostController@All_post')->name('All_post');
    Route::get('setting','DashbordController@setting')->name('setting');
});

//dealer route
Route::group(['as'=>'diller.','prefix'=>'diller','namespace'=>'Diller','middleware'=>['auth','diller','verified']],function(){
    Route::get('dashbord','DashbordController@index')->name('dashbord');
    Route::resource('diller','DillerController');
    Route::get('All_post','DillerController@All_post')->name('All_post');
});
