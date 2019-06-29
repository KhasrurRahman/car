<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashbordController extends Controller
{
    public function index(){
        return view('Author.dashbord');
    }

    public function setting(){
        return view('Author.setting');
    }
}
