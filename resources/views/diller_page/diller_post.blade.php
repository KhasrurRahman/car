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
                            <h2>Dealers Posts</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start contact us top -->


    <!-- start  rent a car -->
    <div class="renta_car_area">
        <div class="container-fluid">
            @foreach($post as $key=>$lll)
            <div class="card custom_border">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                <div class="single_left_renta_car">
                                    <div class="single_top_heading">
                                        @if ($lll->add_type == 1)
                                            <h4>Top</h4>
                                            @elseif($lll->add_type == 2)
                                            <h4>Vip</h4>
                                        @elseif($lll->add_type == 3)
                                            <h4>Ordinary</h4>
                                        @endif

                                    </div>
                                    <div class="single_left_text">
                                        <img src="{{ url('storage/app/public/post/'.$lll->image_1) }}" width="100%" alt="">
                                    </div>
                                </div>
                            </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                            <div class="single_left_renta_car">
                                <h2 style="margin: 0px">{{$key+1}}. {{$lll->category}}</h2>
                                <p style="padding: 0pc">{{$lll->Further_information}}.</p>
                            </div>
                            <div class="midel_view">
                                <ul>
                                    <li style="padding: 0px">Price:{{$lll->price}}</li>
                                    <li style="padding: 0px">model: {{$lll->model}}</li>
                                    <li style="padding: 0px">vehicle no:{{$lll->vehicle_no}}</li>
                                    <li style="padding: 0px">date_of_first_registration:{{$lll->date_of_first_registration}}</li>
                                </ul>
                                <a href="#" class="rent_contact" style="padding: 0px;float: right">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- end rent a car -->


@endsection

@push('js')

@endpush
