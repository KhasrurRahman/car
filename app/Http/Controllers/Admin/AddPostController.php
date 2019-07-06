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
        $posts = post_add::all();
        return view('Admin.Add.all_add',compact('posts'));
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
        $post->tyre_size = $request->Tyre_size;
        $post->Colour = $request->Colour;
        $post->Further_information = $request->information;
        $post->add_type = $request->add_type;

        $image_1 = $request->file('image_1');
        $image_2 = $request->file('image_2');
        $image_3 = $request->file('image_3');
        $image_4 = $request->file('image_4');
        $image_5 = $request->file('image_5');

        if (isset($image_1))
        {
            //make uniqe name for image
            $correntDate = Carbon::now()->toDateString();
            $imagename_1 =$correntDate.'-'.uniqid().'.'.$image_1->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }

            $postimage_1 = Image::make($image_1)->resize(500,400)->stream();
            Storage::disk('public')->put('post/'.$imagename_1,$postimage_1);
        }else{
            $imagename_1 = 'default.png';
        }

        if (isset($image_2))
        {
            //make uniqe name for image
            $correntDate = Carbon::now()->toDateString();
            $imagename_2 =$correntDate.'-'.uniqid().'.'.$image_2->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }

            $postimage_2 = Image::make($image_2)->resize(500,400)->stream();
            Storage::disk('public')->put('post/'.$imagename_2,$postimage_2);
        }else{
            $imagename_2 = 'default.png';
        }

        if (isset($image_3))
        {
            //make uniqe name for image
            $correntDate = Carbon::now()->toDateString();
            $imagename_3 =$correntDate.'-'.uniqid().'.'.$image_3->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }

            $postimage_3 = Image::make($image_3)->resize(500,400)->stream();
            Storage::disk('public')->put('post/'.$imagename_3,$postimage_3);
        }else{
            $imagename_3 = 'default.png';
        }

        if (isset($image_4))
        {
            //make uniqe name for image
            $correntDate = Carbon::now()->toDateString();
            $imagename_4 =$correntDate.'-'.uniqid().'.'.$image_4->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }

            $postimage_4 = Image::make($image_4)->resize(500,400)->stream();
            Storage::disk('public')->put('post/'.$imagename_4,$postimage_4);
        }else{
            $imagename_4 = 'default.png';
        }

        if (isset($image_5))
        {
            //make uniqe name for image
            $correntDate = Carbon::now()->toDateString();
            $imagename_5 =$correntDate.'-'.uniqid().'.'.$image_5->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }

            $postimage_5 = Image::make($image_5)->resize(500,400)->stream();
            Storage::disk('public')->put('post/'.$imagename_5,$postimage_5);
        }else{
            $imagename_5 = 'default.png';
        }
        $post->image_1 = $imagename_1;
        $post->image_2 = $imagename_2;
        $post->image_3 = $imagename_3;
        $post->image_4 = $imagename_4;
        $post->image_5 = $imagename_5;
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
        $post = post_add::find($id);
        return view('Admin.Add.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post_add::find($id);
        return view('admin.add.edit',compact('post'));
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
        $post = post_add::find($id);
        if (Storage::disk('public')->exists('/post/'.$post->image_1))
        {
            Storage::disk('public')->delete('/post/'.$post->image_1);
        }

        if (Storage::disk('public')->exists('/post/'.$post->image_2))
        {
            Storage::disk('public')->delete('/post/'.$post->image_2);
        }

        if (Storage::disk('public')->exists('/post/'.$post->image_3))
        {
            Storage::disk('public')->delete('/post/'.$post->image_3);
        }

        if (Storage::disk('public')->exists('/post/'.$post->image_4))
        {
            Storage::disk('public')->delete('/post/'.$post->image_4);
        }

        if (Storage::disk('public')->exists('/post/'.$post->image_5))
        {
            Storage::disk('public')->delete('/post/'.$post->image_5);
        }

        $post->delete();

        Toastr::success('Post delete successfully','Success');
        return redirect()->back();
    }

    public function approve($id)
    {
        $post = post_add::find($id);
        if($post->status == false)
        {
            $post->status = true;
            $post->save();
        }else{
            Toastr::info('This post already approved');
        }
        return redirect()->back();
    }

    public function expiry_post()
    {
        $userid = Auth::id();
        $posts = post_add::where('user_id', '!=' ,$userid)->whereRaw('expiry_date <=  curdate()')->get();
        return view('admin.expiry_add.expiry_post',compact('posts'));
    }
}
