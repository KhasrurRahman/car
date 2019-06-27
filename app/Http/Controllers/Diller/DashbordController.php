<?php

namespace App\Http\Controllers\Diller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashbordController extends Controller
{
    public function index(){
        return view('diller.dashbord');
    }
}
