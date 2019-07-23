@extends('layouts.fontend.app')
@section('title','Home')
@push('css')
@endpush
@section('content')

    <!-- start contact us top -->
    <div class="contact_us_top_area">
        <div class="contact_us_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact_top_text">
                            <h2>Rent A Car</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start contact us top -->
    <!-- start box type contact us -->
    <div class="contact_top_box_area">
        <div class="container">
            <div class="row text-center">
@foreach($posts as $post)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{route('rent_show',$post->id)}}">
                        <div class="single_boxtype">
                            <div class="boxtype_icon">
                                <img class="img-responsive thumbnail"
                                     src="{{ url('storage/app/public/company_logo/'.$post->company_logo) }}" style="height: 150px">
                            </div>
                            <div class="boxtype_textx">
                                <p>{{$post->company_name}}</p>
                            </div>
                        </div>
                    </a>

                </div>
 @endforeach
            </div>
        </div>
    </div>
    <!-- start box type contact us -->

@endsection

@push('js')

@endpush
