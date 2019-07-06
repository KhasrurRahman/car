<?php

namespace App\Http\Controllers\Admin;

use App\post_add;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class expiredAddController extends Controller
{
    public function show($id){
        $post = post_add::find($id);
        $user = User::find($post->user_id);
        return view('admin.expiry_add.show_expired_add',compact('post','user'));
    }

    public function notify($id){
        $post = post_add::find($id);
        $user = User::find($post->user_id);

        if ($user->role_id == 2){
            if ($post->)
        }
    }

}
