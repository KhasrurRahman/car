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

    <!-- start  rent a car -->
    <div class="renta_car_area">
        <div class="container-fluid">
            <div class="card custom_border">
                <div class="card-body">
                    <div class="row">

                        @foreach ($user as $users)
                            @php $post = App\post_add::where('user_id',$users->id)->where('category','byke')->limit(1)->get();
                    $key =0;
                            @endphp
                            @foreach($post as $key=>$lll)

                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="single_left_renta_car">
                                <h2 style="margin: 0px">{{$lll->user->diller_info->company_name}}</h2>
                                <p style="padding: 0pc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis quia debitis soluta delectus, voluptatibus eos quasi tenetur quae nisi facere rem architecto veniam sit totam voluptas fugiat iusto. Earum, rerum.</p>
                            </div>
                            <div class="midel_view">
                                <ul>
                                    <li style="padding: 0px">Company Name:{{$lll->user->diller_info->company_name}}</li>
                                    <li style="padding: 0px">Country: {{$lll->user->diller_info->country}}</li>
                                    <li style="padding: 0px">Website:{{$lll->user->diller_info->website}}</li>
                                    <li style="padding: 0px">street:{{$lll->user->diller_info->street}}</li>
                                </ul>
                                <a href="#" class="rent_contact" style="padding: 0px;float: right">Contact</a>
                                <a href="{{route('diller_all_post',[$lll->user->id,$lll->category])}}" class="rent_contact" style="padding: 0px;float: right">View All Add</a>
                            </div>
                        </div>

                            @endforeach
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end rent a car -->


@endsection

@push('js')

@endpush
