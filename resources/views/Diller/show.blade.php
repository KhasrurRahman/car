@extends('layouts.backend.app')
@section('title'.'Show')
@endsection
@push('css')
@endpush
@section('content')

    <div class="container-fluid">


        <a href="{{route('diller.All_post')}}" class="btn btn-danger waves-effect">Back</a>

        <br>
        <br>
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            {{ $post->category }}
                            <small>Posted By <strong><a href="">{{ $post->user->name }}</a></strong> on {{ $post->created_at->toFormattedDateString() }}</small>
                        </h2>
                    </div>
                    <div class="body">

                                    <ul class="list-group">
                                        <li class="list-group-item">Category:-> {{$post->category}}</li>
                                        <li class="list-group-item">Make:-> {{$post->make}}</li>
                                        <li class="list-group-item">Model:-> {{$post->model}}</li>
                                        <li class="list-group-item">Date of first registration:-> {{$post->date_of_first_registration}}</li>
                                        <li class="list-group-item">Power:-> {{$post->power}}</li>
                                        <li class="list-group-item">Kilometer:-> {{$post->kilometer}}</li>
                                        <li class="list-group-item">vehicle NO.:-> {{$post->vehicle_no}}</li>
                                        <li class="list-group-item">My vehicle:-> {{$post->vehicle}}</li>
                                        <li class="list-group-item">Price:-> {{$post->price}}</li>
                                        <li class="list-group-item">VAT rate:-> {{$post->vat}}</li>
                                        <li class="list-group-item">Perm. GVW:-> {{$post->Perm_gvw}}</li>
                                        <li class="list-group-item">Admissible haulage weight:-> {{$post->Admissible_haulage_weight}}</li>
                                        <li class="list-group-item">Payload:-> {{$post->payload}}</li>
                                        <li class="list-group-item">Empty weight:-> {{$post->empty_weight}}</li>
                                        <li class="list-group-item">Gearing type:-> {{$post->gearing_type}}</li>
                                        <li class="list-group-item">Brakes:-> {{$post->brakes}}</li>
                                        <li class="list-group-item">Suspension:-> {{$post->suspension}}</li>
                                        <li class="list-group-item">Axle configuration:-> {{$post->axle_configuration}}</li>
                                        <li class="list-group-item">Wheels distance:-> {{$post->wheels_distance}}</li>
                                        <li class="list-group-item">Tyre size:-> {{$post->tyre_size}}</li>
                                        <li class="list-group-item">CO2-Emmision combined:-> {{$post->CO2_Emmision_combined}}</li>
                                        <li class="list-group-item">Fuel consumption combined:-> {{$post->Fuel_consumption_combined}}</li>
                                        <li class="list-group-item">urban:-> {{$post->urban}}</li>
                                        <li class="list-group-item">Colour:-> {{$post->Colour}}</li>
                                        <li class="list-group-item">Attachment parts:-> {{$post->Attachment_parts}}</li>
                                        <li class="list-group-item">Other features:-> {{$post->Other_features}}</li>
                                        <li class="list-group-item">Further information:-> {{$post->Further_information}}</li>
                                    </ul>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="header bg-amber">
                        <h2>
                            Image-1
                        </h2>
                    </div>
                    <div class="body">

                        <img class="img-responsive thumbnail"
                             src="{{ url('storage/app/public/post/'.$post->image_1) }}">

                    </div>
                </div>
                <div class="card">
                    <div class="header bg-amber">
                        <h2>
                            Image-2
                        </h2>
                    </div>
                    <div class="body">

                        <img class="img-responsive thumbnail"
                             src="{{ url('storage/app/public/post/'.$post->image_2) }}">

                    </div>
                </div>
                <div class="card">
                    <div class="header bg-amber">
                        <h2>
                            Image-3
                        </h2>
                    </div>
                    <div class="body">

                        <img class="img-responsive thumbnail"
                             src="{{ url('storage/app/public/post/'.$post->image_3) }}">

                    </div>
                </div>
                <div class="card">
                    <div class="header bg-amber">
                        <h2>
                            Image-4
                        </h2>
                    </div>
                    <div class="body">

                        <img class="img-responsive thumbnail"
                             src="{{ url('storage/app/public/post/'.$post->image_4) }}">

                    </div>
                </div>
                <div class="card">
                    <div class="header bg-amber">
                        <h2>
                            Image-5
                        </h2>
                    </div>
                    <div class="body">

                        <img class="img-responsive thumbnail"
                             src="{{ url('storage/app/public/post/'.$post->image_5) }}">

                    </div>
                </div>
            </div>
        </div>

    </div>




@endsection
@push('js')

@endpush
