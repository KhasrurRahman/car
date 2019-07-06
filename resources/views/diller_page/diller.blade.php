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
                            <h2>Dealers</h2>
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

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{route('car_diller')}}">
                        <div class="single_boxtype">
                            <div class="boxtype_icon">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="boxtype_textx">
                                <h2>Car</h2>
                                <p>Dealers</p>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{route('byke_diller')}}">
                    <div class="single_boxtype">
                        <div class="boxtype_icon">
                            <i class="fa fa-motorcycle"></i>
                        </div>
                        <div class="boxtype_textx">
                            <h2>Bike</h2>
                            <p>Dealers</p>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="">
                    <div class="single_boxtype">
                        <div class="boxtype_icon">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="boxtype_textx">
                            <h2>Truck</h2>
                            <p>Dealers</p>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="">
                        <div class="single_boxtype">
                            <div class="boxtype_icon">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="boxtype_textx">
                                <h2>Motor</h2>
                                <p>Dealers</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- start box type contact us -->

@endsection

@push('js')

@endpush
