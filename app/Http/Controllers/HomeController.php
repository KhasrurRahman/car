<?php

namespace App\Http\Controllers;

use App\post_add;
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
        $top = post_add::where('status',1)->where('add_type',1)->get();
        return view('welcome',compact('top'));
    }

    public function dealerRegistration()
    {
        return view('Diller.dealer_registration');
    }


    public function dillerLogin()
    {
        return view('Diller.login');
    }

}
