<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\post_add;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AddPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Add.all_add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Add.post_a_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return post_add
     */
    public function store(Request $request)
    {
        $post = new post_add();
        $post->user_id = Auth::id();
        $post->category = $request->category;
        $post->make =   $request->make;
        $post->model = $request->model;
        $post->Date_of_first_registration = $request->Date_of_first_registration;
        $post->power =  $request->Power;
        $post->kilometer = $request->Kilometer;
        $post->vehicle_no = $request->vehicle_NO;
        $post->vehicle = implode(",",$request->my_vehicle);
        $post->price =  $request->price;
        $post->vat = $request->VAT_rate;
        $post->Perm_gvw = $request->GVW;
        $post->Admissible_haulage_weight = $request->Admissible_haulage_weight;
        $post->Payload = $request->Payload;
        $post->empty_weight = $request->Empty_weight;
        $post->Gearing_type = $request->Gearing_type;
        $post->brakes = $request->Brakes;
        $post->suspension = $request->Suspension;
        $post->axle_configuration = $request->Axle_configuration;
        $post->wheels_distance = $request->wheels;
        $post->tyre_size = $request->Tyre_size;
        $post->Fuel_consumption_combined = $request->Fuel_type;
        $post->CO2_Emmision_combined = $request->co2_emmision;
        $post->urban = $request->urban;
        $post->rural = $request->rural;
        $post->tuv_certified = $request->tuv;
        $post->Colour = $request->Colour;
        $post->Cab =  $request->Cab;
        $post->Attachment_parts = implode(",",$request->attachment_parts);
        $post->Other_features = implode(",",$request->other_features);
        $post->Further_information = $request->information;

        $image_1 = $request->file('image_1');
        $image_2 = $request->file('image_2');
        $image_3 = $request->file('image_3');
        $image_4 = $request->file('image_4');
        $image_5 = $request->file('image_5');

        if (isset($image_1))
        {
            //make uniqe name for image
            $correntDate = Carbon::now()->toDateString();
            $imagename =$correntDate.'-'.uniqid().'.'.$image_1->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }

            $postimage = Image::make($image_1)->resize(500,400)->stream();
            Storage::disk('public')->put('post/'.$imagename,$postimage);
        }else{
            $imagename = 'default.png';
        }

        if (isset($image_2))
        {
            //make uniqe name for image
            $correntDate = Carbon::now()->toDateString();
            $imagename =$correntDate.'-'.uniqid().'.'.$image_2->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }

            $postimage = Image::make($image_2)->resize(500,400)->stream();
            Storage::disk('public')->put('post/'.$imagename,$postimage);
        }else{
            $imagename = 'default.png';
        }

        if (isset($image_3))
        {
            //make uniqe name for image
            $correntDate = Carbon::now()->toDateString();
            $imagename =$correntDate.'-'.uniqid().'.'.$image_3->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }

            $postimage = Image::make($image_3)->resize(500,400)->stream();
            Storage::disk('public')->put('post/'.$imagename,$postimage);
        }else{
            $imagename = 'default.png';
        }

        if (isset($image_4))
        {
            //make uniqe name for image
            $correntDate = Carbon::now()->toDateString();
            $imagename =$correntDate.'-'.uniqid().'.'.$image_4->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }

            $postimage = Image::make($image_4)->resize(500,400)->stream();
            Storage::disk('public')->put('post/'.$imagename,$postimage);
        }else{
            $imagename = 'default.png';
        }

        if (isset($image_5))
        {
            //make uniqe name for image
            $correntDate = Carbon::now()->toDateString();
            $imagename =$correntDate.'-'.uniqid().'.'.$image_5->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }

            $postimage = Image::make($image_5)->resize(500,400)->stream();
            Storage::disk('public')->put('post/'.$imagename,$postimage);
        }else{
            $imagename = 'default.png';
        }
        $post->image_1 = $imagename;
        $post->image_2 = $imagename;
        $post->image_3 = $imagename;
        $post->image_4 = $imagename;
        $post->image_5 = $imagename;
        $post->save();

        Toastr::success('Add successfully save','Success');
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
