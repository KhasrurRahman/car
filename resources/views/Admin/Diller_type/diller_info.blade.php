@extends('layouts.backend.app')
@section('title'.'Show')
@endsection
@push('css')
@endpush
@section('content')

    <div class="container-fluid">


        <a href="{{ URL::previous() }}" class="btn btn-danger waves-effect">Back</a>
        <br>
        <br>
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            {{ $user->company_name }}
                        </h2>
                    </div>
                    <div class="body">
                                    <ul class="list-group">
                                        <li class="list-group-item">street:-> {{$user->street}}</li>
                                        <li class="list-group-item">postal code:-> {{$user->postal_code}}</li>
                                        <li class="list-group-item">country:-> {{$user->country}}</li>
                                        <li class="list-group-item">website:-> {{$user->website}}</li>
                                        <li class="list-group-item">website:-> {{$user->created_at->addDays(5)->diffForHumans()}}</li>
                                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
