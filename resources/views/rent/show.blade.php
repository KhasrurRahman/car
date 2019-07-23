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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start contact us top -->

    <!-- start single car view -->
    <div class="single_car_view_area">
        <div class="single_car_view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="single_car_view_title">
                                    <h2>{{$post->category}}</h2>
                                    <div class="single_car_view_image">
                                        <img src="{{ url('storage/app/public/rent/'.$post->image_1) }}" width="100%" alt="">
                                    </div>
                                </div>
                                <div class="car_discription">
                                    <h2> Product Description</h2>
                                    <div class="discription_text">
                                        <ul>
                                            <li>ENGINE</li>
                                            <li>Engine Capacity</li>
                                        </ul>
                                        <ul>
                                            <li>1,991 cc</li>
                                            <li>Engine Configuration</li>
                                        </ul>
                                        <ul>
                                            <li>4-cylinder in-line Turbocharged</li>
                                            <li>Compression Ratio</li>
                                        </ul>
                                        <ul>
                                            <li>8.6</li>
                                            <li>Bore x Stroke</li>
                                        </ul>
                                        <ul>
                                            <li>unknown</li>
                                            <li>Fuel Type</li>
                                        </ul>
                                        <ul>
                                            <li>Petrol</li>
                                            <li>PERFORMANCE</li>
                                            <li>Power</li>
                                        </ul>
                                        <ul>
                                            <li>284kW (381 bhp)</li>
                                            <li>Torque</li>
                                        </ul>
                                        <ul>
                                            <li>475 Nm</li>
                                            <li>Acceleration (0-100km/h)</li>
                                        </ul>
                                        <ul>
                                            <li>4.2 s (0-100 km/h)</li>
                                            <li>Top Speed</li>
                                        </ul>
                                        <ul>
                                            <li>270 km/h</li>
                                            <li>Fuel Consumption</li>
                                        </ul>
                                        <ul>
                                            <li>13.7 km/l</li>
                                            <li>CO2 emission</li>
                                        </ul>
                                        <ul>
                                            <li>Spring strut and control arm</li>
                                            <li>Suspension (Rear)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="single_side_card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="single_car_buy">
                                        <h2>{{$post->price}}</h2>
                                        <p>Ford Eco Sport</p>
                                        <a href="{{route('contact')}}">contact</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start single car view -->



@endsection

@push('js')

@endpush
