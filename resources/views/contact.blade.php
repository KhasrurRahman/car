@extends('layouts.fontend.app')
@section('title','Contact')
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
                            <h2>Contact us</h2>
                            <p>You are Here in: home/contact</p>
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
                    <div class="single_boxtype">
                        <div class="boxtype_icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="boxtype_textx">
                            <h2>Address</h2>
                            <p>Hatso, Accra</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single_boxtype">
                        <div class="boxtype_icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="boxtype_textx">
                            <h2>Email</h2>
                            <p>infocarsinghana@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single_boxtype">
                        <div class="boxtype_icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="boxtype_textx">
                            <h2>Phone</h2>
                            <p>07883825133, 07969 074386, 07956 967778</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single_boxtype">
                        <div class="boxtype_icon">
                            <i class="fa fa-fax"></i>
                        </div>
                        <div class="boxtype_textx">
                            <h2>Fax</h2>
                            <p>5345345112</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start box type contact us -->

    <!-- start contact -->
    <div class="contact_area1">
        <div class="contact1">
            <div class="container">
                <div class="row all_get_in1 ">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="right_contact1 justify-content-center">
                            <h2>Send Message Us</h2>
                            <form>
                                <div class="row mx-0">
                                    <div class="col-md-6 name ">
                                        <div class="form-group">
                                            <input type="text" class="form-control email1" id="name1"  placeholder="NAME"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6  padding_left">
                                        <div class="form-group">
                                            <input type="email" class="form-control email1" id="email1" placeholder="EMAIL"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control email1" id="pass" placeholder="Phone Number"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control email1" id="pass" placeholder="SUBJECT"/>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control area_text email1" name="message2" id="message1" cols="30" rows="10" placeholder="MESSAGE"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact_contact_btn">
                                    <button type="submit" class="btn btn_btnbtn1 justify-content-center">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="left_contact1">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.98377350289!2d7.003797515456155!3d51.44009187962412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8c3b05e8ac8a5%3A0x7642e4758fa7f901!2sautos24.de!5e0!3m2!1sen!2sbd!4v1559405934196!5m2!1sen!2sbd" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->


@endsection

@push('js')

@endpush
