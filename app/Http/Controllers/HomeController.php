<?php

namespace App\Http\Controllers;

use App\post_add;
use App\rentACar;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $top = post_add::where('status',1)->where('add_type',1)->limit(15)->get();
        $vip = post_add::where('status',1)->where('add_type',2)->limit(15)->get();
        $ordinary = post_add::where('status',1)->where('add_type',3)->limit(15)->get();
        return view('welcome',compact('top','vip','ordinary'));
    }


    public function contact(){
        return view('contact');
    }

    public function single_add_view($id)
    {

        $top = post_add::where('status',1)->where('add_type',1)->limit(15)->get();
        $post = post_add::find($id);
        return view('Single_view',compact('top','post'));
    }

    public function dealerRegistration()
    {
        return view('diller.dealer_registration');
    }


    public function dillerLogin()
    {
        return view('diller.login');
    }

    public function diller()
    {
        return view('diller_page.diller');
    }


    public function car_diller()
    {
        $user = User::where('role_id',3)->get();
        return view('diller_page.car_diller',compact('user'));
    }

    public function byke_diller()
    {
        $user = User::where('role_id',3)->get();
        return view('diller_page.bike_diller',compact('user'));
    }

    public function diller_all_post($id,$category)
    {

        $user = User::find($id);
        $post = post_add::where('user_id',$id)->where('category',$category)->orderBy('add_type')->get();
        return view('diller_page.diller_post',compact('user','post'));
    }


    public function search()
    {
        $category = $_GET['category'];
        $post = post_add::where([
            ['category', 'LIKE', '%' . $category . '%'],
        ])->whereRaw('expiry_date <=  curdate()')->orderBy('add_type')->get();

        return view('search',compact('post'));
    }

    public function rent(){
        $posts = rentACar::all();
        return view('rent.index',compact('posts'));
    }

    public function rent_show($id){
        $post = rentACar::find($id);
        return view('rent.show',compact('post'));
    }
    public function servise(){
        return view('servise');
    }

    public function all_car(){
        $post = post_add::whereRaw('expiry_date <=  curdate()')->orderBy('add_type')->get();
        return view('all_car',compact('post'));
    }

}
