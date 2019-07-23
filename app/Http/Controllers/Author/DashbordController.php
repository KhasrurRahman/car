<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashbordController extends Controller
{
    public function index(){
        return view('author.dashbord');
    }

    public function setting(){
        return view('author.setting');
    }

    public function post_form_fontend(){
        $post = Auth::user()->post;
        return view('author.post_from_fontend',compact('post'));
    }
}
