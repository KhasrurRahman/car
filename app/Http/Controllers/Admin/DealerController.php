<?php

namespace App\Http\Controllers\Admin;

use App\Diller_info;
use App\post_add;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dealers  = User::all()->where('role_id','3');
        return view('admin.Dealers.index',compact('dealers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function byke_diller(){
        $user = User::where('role_id',3)->get();
        return view('admin.diller_type.byke_diller',compact('user'));
    }

    public function single_diller_post($id){
            $posts = post_add::where('user_id',$id)->get();
            return view('admin.Diller_type.single_diller_post',compact('posts'));


    }

    public function single_diller_info($id){
            $user = Diller_info::where('user_id',$id)->first();
            return view('admin.diller_type.diller_info',compact('user'));
    }

    public function car_diller(){
        $user = User::where('role_id',3)->get();
        return view('admin.diller_type.car_diller',compact('user'));
    }


}
