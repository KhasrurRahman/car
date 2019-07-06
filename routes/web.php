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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('single_add_view/{id}', 'HomeController@single_add_view')->name('single_add_view');
Route::get('dealerRegistration', 'HomeController@dealerRegistration')->name('dealerRegistration');
Route::get('dillerLogin', 'HomeController@dillerLogin')->name('dillerLogin');
Route::get('search', 'HomeController@search')->name('search');

//all dealers
Route::get('diller', 'HomeController@diller')->name('diller');
Route::get('car_diller', 'HomeController@car_diller')->name('car_diller');
Route::get('byke_diller', 'HomeController@byke_diller')->name('byke_diller');
Route::get('diller_all_post/{id}/{category}', 'HomeController@diller_all_post')->name('diller_all_post');
Route::post('rrr', 'HomeController@rrr')->name('rrr');

//admin route
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin','verified']],function(){
    Route::get('dashbord','DashbordController@index')->name('dashbord');
    Route::get('pending_add','DashbordController@pending_add')->name('pending_add');
    Route::resource('addpost','AddPostController');
    Route::put('/post/{id}/approve','AddPostController@approve')->name('post.approve');
    Route::resource('dealer','DealerController');
    //diller type
    Route::get('byke_diller','DealerController@byke_diller')->name('byke_diller');
    Route::get('single_diller_post/{id}','DealerController@single_diller_post')->name('single_diller_post');
    Route::get('single_diller_info/{id}','DealerController@single_diller_info')->name('single_diller_info');
    Route::get('car_diller','DealerController@car_diller')->name('car_diller');

    Route::resource('customer','CustomerController');
    //expiry add
    Route::get('expiry_post','AddPostController@expiry_post')->name('expiry_post');
    Route::get('view_expiry_post/{id}','expiredAddController@show')->name('view_expiry_post');
    Route::put('/notify/{id}','expiredAddController@notify')->name('notify');
});


//customer route
Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author','verified']],function(){
    Route::get('dashbord','DashbordController@index')->name('dashbord');
    Route::resource('post','AuthorPostController');
    Route::get('All_post','AuthorPostController@All_post')->name('All_post');
    Route::get('expiry_post','AuthorPostController@expiry_post')->name('expiry_post');
    Route::get('setting','DashbordController@setting')->name('setting');
});

//dealer route
Route::group(['as'=>'diller.','prefix'=>'diller','namespace'=>'Diller','middleware'=>['auth','diller','verified']],function(){
    Route::get('dashbord','DashbordController@index')->name('dashbord');
    Route::resource('diller','DillerController');
    Route::get('All_post','DillerController@All_post')->name('All_post');
    Route::get('expiry_post','DillerController@expiry_post')->name('expiry_post');
    Route::get('setting','DashbordController@setting')->name('setting');
});
