<?php

namespace App\Http\Controllers\Diller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashbordController extends Controller
{
    public function index(){
        return view('diller.dashbord');
    }

    public function setting(){
        return view('diller.setting');
    }
    public function post_form_fontend(){
        $post = Auth::user()->post;
        return view('diller.post_from_fontend',compact('post'));
    }
}
