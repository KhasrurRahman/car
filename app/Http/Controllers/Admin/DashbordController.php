<?php

namespace App\Http\Controllers\Admin;

use App\post_add;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashbordController extends Controller
{
    public function index(){
        return view('admin.dashbord');
    }

    public function pending_add(){
        $posts = post_add::where('status',0)->get();
        return view('admin.pending_add',compact('posts'));
    }
}
