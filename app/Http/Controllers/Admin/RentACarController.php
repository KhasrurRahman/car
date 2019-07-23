<?php

namespace App\Http\Controllers\Admin;

use App\post_add;
use App\rentACar;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class RentACarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = rentACar::all();
        return view('admin.rent.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rent.post_a_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new rentACar();
        $post->category = $request->category;
        $post->make =   $request->make;
        $post->model = $request->model;
        $post->Date_of_first_registration = $request->Date_of_first_registration;
        $post->power =  $request->Power;
        $post->kilometer = $request->Kilometer;
        $post->vehicle_no = $request->vehicle_NO;
        $post->vehicle = implode(",",$request->my_vehicle);
        $post->price =  $request->price;
        $post->tyre_size = $request->Tyre_size;
        $post->Colour = $request->Colour;
        $post->Further_information = $request->information;
        $post->company_name = $request->company_name;
        $post->company_information = $request->company_information;

        $company_logo = $request->file('company_logo');
        $image_1 = $request->file('image_1');
        $image_2 = $request->file('image_2');
        $image_3 = $request->file('image_3');
        $image_4 = $request->file('image_4');
        $image_5 = $request->file('image_5');

        if (isset($company_logo))
        {
            $correntDate = Carbon::now()->toDateString();
            $logo =$correntDate.'-'.uniqid().'.'.$company_logo->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('company_logo'))
            {
                Storage::disk('public')->makeDirectory('company_logo');
            }

            $logo_1 = Image::make($company_logo)->resize(500,400)->stream();
            Storage::disk('public')->put('company_logo/'.$logo,$logo_1);
        }else{
            $logo = 'default.png';
        }



        if (isset($image_1))
        {
            //make uniqe name for image
            $correntDate = Carbon::now()->toDateString();
            $imagename_1 =$correntDate.'-'.uniqid().'.'.$image_1->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('rent'))
            {
                Storage::disk('public')->makeDirectory('rent');
            }

            $postimage_1 = Image::make($image_1)->resize(500,400)->stream();
            Storage::disk('public')->put('rent/'.$imagename_1,$postimage_1);
        }else{
            $imagename_1 = 'default.png';
        }

        if (isset($image_2))
        {
            //make uniqe name for image
            $correntDate = Carbon::now()->toDateString();
            $imagename_2 =$correntDate.'-'.uniqid().'.'.$image_2->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('rent'))
            {
                Storage::disk('public')->makeDirectory('rent');
            }

            $postimage_2 = Image::make($image_2)->resize(500,400)->stream();
            Storage::disk('public')->put('rent/'.$imagename_2,$postimage_2);
        }else{
            $imagename_2 = 'default.png';
        }

        if (isset($image_3))
        {
            //make uniqe name for image
            $correntDate = Carbon::now()->toDateString();
            $imagename_3 =$correntDate.'-'.uniqid().'.'.$image_3->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('rent'))
            {
                Storage::disk('public')->makeDirectory('rent');
            }

            $postimage_3 = Image::make($image_3)->resize(500,400)->stream();
            Storage::disk('public')->put('rent/'.$imagename_3,$postimage_3);
        }else{
            $imagename_3 = 'default.png';
        }

        if (isset($image_4))
        {
            //make uniqe name for image
            $correntDate = Carbon::now()->toDateString();
            $imagename_4 =$correntDate.'-'.uniqid().'.'.$image_4->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('rent'))
            {
                Storage::disk('public')->makeDirectory('rent');
            }

            $postimage_4 = Image::make($image_4)->resize(500,400)->stream();
            Storage::disk('public')->put('rent/'.$imagename_4,$postimage_4);
        }else{
            $imagename_4 = 'default.png';
        }

        if (isset($image_5))
        {
            //make uniqe name for image
            $correntDate = Carbon::now()->toDateString();
            $imagename_5 =$correntDate.'-'.uniqid().'.'.$image_5->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('rent'))
            {
                Storage::disk('public')->makeDirectory('rent');
            }

            $postimage_5 = Image::make($image_5)->resize(500,400)->stream();
            Storage::disk('public')->put('rent/'.$imagename_5,$postimage_5);
        }else{
            $imagename_5 = 'default.png';
        }



        $post->image_1 = $imagename_1;
        $post->image_2 = $imagename_2;
        $post->image_3 = $imagename_3;
        $post->image_4 = $imagename_4;
        $post->image_5 = $imagename_5;
        $post->company_logo = $logo;
        $post->save();

        Toastr::success('add successfully save','Success');
        return redirect()->back();
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
}
