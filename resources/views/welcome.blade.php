@extends('layouts.fontend.app')
@section('title','Home')
@push('css')
@endpush
@section('content')

    <!-- start slider area -->
    <div class="slider_area">
        <div class="full_slide">
            <div class="slider_item">
                <div class="slider" style="background:url({{asset('public/assets/fontend/img/slide-5.jpg')}})no-repeat;background-size: cover;background-position:center;height:600px;">
                </div>
                <div class="slider" style="background:url({{asset('public/assets/fontend/img/slide-6.jpg')}})no-repeat;background-size: cover;background-position:center;height:600px;">
                </div>
                <div class="slider" style="background:url({{asset('public/assets/fontend/img/slide-8.jpg')}})no-repeat;background-size: cover;background-position:center;height:600px;">
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8 col-sm-10 main_search">
                        <div class="new_tabpen">
                            <ul class="nav nav-tabs new_custom justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active custom_tab" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Buy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab custom_tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">sell</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-2 mb-4" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="top_car_image text-center">
                                        <ul class="nav nav-tabs" style="margin-left: 60px">
                                            <li class="active"><a data-toggle="tab" href="#car" class="active"><img src="{{asset('public/assets/fontend/img/car.png')}}" title="car" alt=""></a></li>
                                            <li><a data-toggle="tab" href="#bike"><img src="{{asset('public/assets/fontend/img/bike.png')}}" title="bike" alt=""></a></li>
                                            <li><a data-toggle="tab" href="#truck"><img src="{{asset('public/assets/fontend/img/truck.png')}}" title="truck" alt=""></a></li>
                                            <li><a data-toggle="tab" href="#cycle"><img src="{{asset('public/assets/fontend/img/cycle.png')}}" title="cycle" alt=""></a></li>
                                            <li class="border1"><a data-toggle="tab" href="#motor"><img src="{{asset('public/assets/fontend/img/motor.png')}}" title="motor" alt=""></a></li>
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div  id="car" class="tab-pane fade in active">
                                            <form action="search" method="get">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="filter_left">
                                                        <input type="hidden" name="category" value="car">
                                                        <div class="form-group custion_option">
                                                            <label for="exampleFormControlSelect1">Brand</label>
                                                            <select class="form-control custom_options" id="exampleFormControlSelect1">
                                                                <option select="selected">select</option>
                                                                <option>toyota</option>
                                                                <option>korola</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-check custion_option">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                purchase price
                                                            </label>
                                                        </div>
                                                        <div class="form-check custion_option">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                monthly rate
                                                            </label>
                                                        </div>
                                                        <div class="form-group custion_option ">
                                                            <label for="exampleFormControlSelect1">registration date from</label>
                                                            <select class="form-control custom_options" id="exampleFormControlSelect1">
                                                                <option select="selected">seletect</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="filter_left">
                                                        <div class="form-group custion_option">
                                                            <label for="exampleFormControlSelect1">model</label>
                                                            <select class="form-control custom_options " id="exampleFormControlSelect1">
                                                                <option select="selected">All model Type</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group custion_option ">
                                                            <label for="exampleFormControlSelect1">price unite</label>
                                                            <select class="form-control custom_options" id="exampleFormControlSelect1">
                                                                <option select="selected">Price  unite</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group custion_option">
                                                            <label for="exampleFormControlSelect1">Miles to</label>
                                                            <select class="form-control custom_options " id="exampleFormControlSelect1">
                                                                <option select="selected">Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search_btn">
                                                <a><button type="submit">Search</button></a>
                                            </div>
                                            </form>
                                        </div>
                                        <div  id="bike" class="tab-pane fade">
                                            <form action="search" method="get">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="filter_left">

                                                        <input type="hidden" name="category" value="byke">
                                                        <div class="form-group custion_option">
                                                            <label for="exampleFormControlSelect1">Brand</label>
                                                            <select class="form-control custom_options" id="exampleFormControlSelect1">
                                                                <option select="selected">select</option>
                                                                <option>toyota</option>
                                                                <option>korola</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-check custion_option">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                purchase price
                                                            </label>
                                                        </div>
                                                        <div class="form-check custion_option">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                monthly rate
                                                            </label>
                                                        </div>
                                                        <div class="form-group custion_option ">
                                                            <label for="exampleFormControlSelect1">registration date from</label>
                                                            <select class="form-control custom_options" id="exampleFormControlSelect1">
                                                                <option select="selected">seletect</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="filter_left">
                                                        <div class="form-group custion_option">
                                                            <label for="exampleFormControlSelect1">model</label>
                                                            <select class="form-control custom_options " id="exampleFormControlSelect1">
                                                                <option select="selected">All model Type</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group custion_option ">
                                                            <label for="exampleFormControlSelect1">price unite</label>
                                                            <select class="form-control custom_options" id="exampleFormControlSelect1">
                                                                <option select="selected">Price  unite</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group custion_option">
                                                            <label for="exampleFormControlSelect1">Miles to</label>
                                                            <select class="form-control custom_options " id="exampleFormControlSelect1">
                                                                <option select="selected">Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search_btn">
                                                <a><button type="submit">Search</button></a>
                                            </div>
                                            </form>
                                        </div>
                                        <div  id="motor" class="tab-pane fade">
                                            <form method="get" action="search">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="filter_left">
                                                        <input type="hidden" name="category" value="motor">
                                                        <div class="form-group custion_option">
                                                            <label for="exampleFormControlSelect1">Brand</label>
                                                            <select class="form-control custom_options" id="exampleFormControlSelect1">
                                                                <option select="selected">select</option>
                                                                <option>toyota</option>
                                                                <option>korola</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-check custion_option">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                purchase price
                                                            </label>
                                                        </div>
                                                        <div class="form-check custion_option">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                monthly rate
                                                            </label>
                                                        </div>
                                                        <div class="form-group custion_option ">
                                                            <label for="exampleFormControlSelect1">registration date from</label>
                                                            <select class="form-control custom_options" id="exampleFormControlSelect1">
                                                                <option select="selected">seletect</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="filter_left">
                                                        <div class="form-group custion_option">
                                                            <label for="exampleFormControlSelect1">model</label>
                                                            <select class="form-control custom_options " id="exampleFormControlSelect1">
                                                                <option select="selected">All model Type</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group custion_option ">
                                                            <label for="exampleFormControlSelect1">price unite</label>
                                                            <select class="form-control custom_options" id="exampleFormControlSelect1">
                                                                <option select="selected">Price  unite</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group custion_option">
                                                            <label for="exampleFormControlSelect1">Miles to</label>
                                                            <select class="form-control custom_options " id="exampleFormControlSelect1">
                                                                <option select="selected">Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search_btn">
                                                <a href="service.html">search</a>
                                            </div>
                                            </form>
                                        </div>
                                        <div  id="truck" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="filter_left">
                                                        <div class="form-group custion_option">
                                                            <label for="exampleFormControlSelect1">Brand</label>
                                                            <select class="form-control custom_options" id="exampleFormControlSelect1">
                                                                <option select="selected">select</option>
                                                                <option>toyota</option>
                                                                <option>korola</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-check custion_option">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                purchase price
                                                            </label>
                                                        </div>
                                                        <div class="form-check custion_option">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                monthly rate
                                                            </label>
                                                        </div>
                                                        <div class="form-group custion_option ">
                                                            <label for="exampleFormControlSelect1">registration date from</label>
                                                            <select class="form-control custom_options" id="exampleFormControlSelect1">
                                                                <option select="selected">seletect</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="filter_left">
                                                        <div class="form-group custion_option">
                                                            <label for="exampleFormControlSelect1">model</label>
                                                            <select class="form-control custom_options " id="exampleFormControlSelect1">
                                                                <option select="selected">All model Type</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group custion_option ">
                                                            <label for="exampleFormControlSelect1">price unite</label>
                                                            <select class="form-control custom_options" id="exampleFormControlSelect1">
                                                                <option select="selected">Price  unite</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group custion_option">
                                                            <label for="exampleFormControlSelect1">Miles to</label>
                                                            <select class="form-control custom_options " id="exampleFormControlSelect1">
                                                                <option select="selected">Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search_btn">
                                                <a href="service.html">search</a>
                                            </div>
                                        </div>
                                        <div  id="cycle" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="filter_left">
                                                        <div class="form-group custion_option">
                                                            <label for="exampleFormControlSelect1">Brand</label>
                                                            <select class="form-control custom_options" id="exampleFormControlSelect1">
                                                                <option select="selected">select</option>
                                                                <option>toyota</option>
                                                                <option>korola</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-check custion_option">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                purchase price
                                                            </label>
                                                        </div>
                                                        <div class="form-check custion_option">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                monthly rate
                                                            </label>
                                                        </div>
                                                        <div class="form-group custion_option ">
                                                            <label for="exampleFormControlSelect1">registration date from</label>
                                                            <select class="form-control custom_options" id="exampleFormControlSelect1">
                                                                <option select="selected">seletect</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="filter_left">
                                                        <div class="form-group custion_option">
                                                            <label for="exampleFormControlSelect1">model</label>
                                                            <select class="form-control custom_options " id="exampleFormControlSelect1">
                                                                <option select="selected">All model Type</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group custion_option ">
                                                            <label for="exampleFormControlSelect1">price unite</label>
                                                            <select class="form-control custom_options" id="exampleFormControlSelect1">
                                                                <option select="selected">Price  unite</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group custion_option">
                                                            <label for="exampleFormControlSelect1">Miles to</label>
                                                            <select class="form-control custom_options " id="exampleFormControlSelect1">
                                                                <option select="selected">Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search_btn">
                                                <a href="service.html">search</a>
                                            </div>
                                        </div>
                                    </div>


                                </div>





                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="top_car_image text-center">
                                        <ul>
                                            <li ><a href=""><img src="{{asset('public/assets/fontend/img/car.png')}}" title="car" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('public/assets/fontend/img/bike.png')}}" title="bike" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('public/assets/fontend/img/truck.png')}}" title="truck" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('public/assets/fontend/img/cycle.png')}} " title="cycle" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('public/assets/fontend/img/motor.png')}}" title="motor" alt=""></a></li>
                                            <li class="border1"><a href=""><img src="{{asset('public/assets/fontend/img/parts.png')}}" title="parts" alt=""></a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="filter_left">
                                                <div class="form-group custion_option ">
                                                    <label for="exampleFormControlSelect1">Brand</label>
                                                    <select class="form-control custom_options " id="exampleFormControlSelect1">
                                                        <option select="selected">select</option>
                                                    </select>
                                                </div>
                                                <div class="form-group custion_option ">
                                                    <label for="exampleFormControlSelect1">Select Date</label>
                                                    <input type="date" class="form-control" placeholder="Date email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="filter_left">
                                                <div class="form-group custion_option ">
                                                    <label for="exampleFormControlSelect1">model</label>
                                                    <select class="form-control custom_options " id="exampleFormControlSelect1">
                                                        <option select="selected">All Model Typs</option>
                                                    </select>
                                                </div>
                                                <div class="form-group custion_option ">
                                                    <label for="exampleFormControlSelect1">miles to</label>
                                                    <input type="number" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search_btn">
                                        <a href="
                    @if (!\Illuminate\Support\Facades\Auth::check())
                                    {{route('login')}}
                                   @else
                                            @if (\Illuminate\Support\Facades\Auth::user()->role_id == 2)
                                            {{route('author.post_form_fontend')}}

                                            @elseif(\Illuminate\Support\Facades\Auth::user()->role_id == 3)

                                        {{route('diller.post_form_fontend')}}
                                            @endif
                                 @endif
                                        ">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider area -->

    <!-- vip business seller -->
    <div class="vipseller_area" id="vip">
        <div class="vipseller">
            <div class="container-fluid">
                <div class="card custom_border">
                    <i class="fa fa-long-arrow-left prevbtn" aria-hidden="true"></i>
                    <i class="fa fa-long-arrow-right  nxtbtn" aria-hidden="true"></i>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="top_seller custom_seller">
                                    <h5>Top Seller </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center all_cars">

                            @foreach($top as $add)
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="full_single_car">
                                    <div class="top_position_top">
                                        <h4>Top</h4>
                                    </div>
                                    <div class="single_car">
                                        <img src="{{ url('storage/app/public/post/'.$add->image_1) }}" width="100%" alt="">
                                    </div>
                                    <div class="single_car_text">
                                        <h2><a href="{{route('single_add_view',$add->id)}}">{{$add->category}}</a></h2>
{{--                                        <del>kč1,600.00</del>--}}
                                        <p>{{$add->price}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end vip business seller -->

    <!-- vip  seller -->
    <div class="vipseller_area" id="about">
        <div class="vipseller">
            <div class="container-fluid">
                <div class="card custom_border2 ">
                    <i class="fa fa-long-arrow-left prevbtn1" aria-hidden="true"></i>
                    <i class="fa fa-long-arrow-right  nxtbtn1" aria-hidden="true"></i>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="top_seller custom_seller custom_red">
                                    <h5>VIP Seller </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center all_carss">
                            @foreach($vip as $add)
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="full_single_car">
                                    <div class="top_position_vip">
                                        <h4>Vip</h4>
                                    </div>
                                    <div class="single_car">
                                        <img src="{{ url('storage/app/public/post/'.$add->image_1) }}" width="100%" alt="">
                                    </div>
                                    <div class="single_car_text">
                                        <h2><a href="{{route('single_add_view',$add->id)}}">{{$add->category}}</a></h2>
{{--                                        <del>kč1,600.00</del>--}}
                                        <p>{{$add->price}}</p>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end vip seller -->

    <!-- vip ordinary seller -->
    <div class="vipseller_area" id="about">
        <div class="vipseller">
            <div class="container-fluid">
                <div class="card custom_borders">
                    <i class="fa fa-long-arrow-left prevbtn2" aria-hidden="true"></i>
                    <i class="fa fa-long-arrow-right  nxtbtn2" aria-hidden="true"></i>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="top_seller custom_seller">
                                    <h5>ordinary Seller </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center all_carsr">
                            @foreach($ordinary as $add)
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="full_single_car">
                                    <div class="top_position_ordinary">
                                        <h4>Ordinary</h4>
                                    </div>
                                    <div class="single_car">
                                        <img src="{{ url('storage/app/public/post/'.$add->image_1) }}" width="100%" alt="">
                                    </div>
                                    <div class="single_car_text">
                                        <h2><a href="{{route('single_add_view',$add->id)}}">{{$add->category}}</a></h2>
{{--                                        <del>kč1,600.00</del>--}}
                                        <p>{{$add->price}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end vip ordinary seller -->

@endsection

@push('js')

@endpush
