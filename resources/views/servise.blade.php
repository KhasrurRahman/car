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
                            <h2>Service</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start contact us top -->
    <div class="contact_contact_btn col-lg-12">
       <a href="{{route('all_car')}}"> <button type="submit" class="btn btn_btnbtn1 justify-content-center" style="    width: 100%;
    margin-top: 30px;
    height: 110px;
    background: #00abff;">Car Advertise</button></a>
    </div>

    <div class="contact_contact_btn col-lg-12">
       <a href="{{route('rent')}}"> <button type="submit" class="btn btn_btnbtn1 justify-content-center" style="    width: 100%;
    margin-top: 30px;
    height: 110px;
    background: #00abff;">Rent A Car Advertise</button></a>
    </div>
@endsection

@push('js')

@endpush
