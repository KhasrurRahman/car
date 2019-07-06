@extends('layouts.backend.app')
@section('title'.'Place A Add')
@endsection
    @push('css')
    @endpush
@section('content')
    <div class="row clearfix">
        <form action="{{route('diller.diller.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Category</label>
                    <div class="col-sm-8 float-left d-flex">
                        <select class="form-control show-tick" data-live-search="true" name="category">
                            <option value="car">car</option>
                            <option value="byke">byke</option>
                            <option value="track">track</option>
                            <option value="volvo">volvo</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label"> Model / Type</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword" name="model">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label"> Date of first registration</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="inputPassword" name="Date_of_first_registration">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Power</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword" placeholder="kw" name="Power">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label"> Kilometer</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword" name="Kilometer">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">My vehicle NO.</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword" name="vehicle_NO">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">My vehicle</label>
                    <div class="col-sm-8 float-left d-flex">
                        <input type="checkbox" id="New vehicle" class="filled-in" name="my_vehicle[]" value="New vehicle">
                        <label for="New vehicle">New vehicle</label>

                        <input type="checkbox" id="Accidient vehicle" class="filled-in" name="my_vehicle[]" value="Accidient vehicle">
                        <label for="Accidient vehicle">Accidient vehicle</label>
                    </div>
                </div>
                <h6>Price</h6>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Price in Euro</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword" name="price">
                    </div>
                </div>
                <h2>Power &amp; Environment</h2><hr><br>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Gearing type</label>
                    <div class="col-sm-8 float-left d-flex">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Wheels distance</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword" placeholder="mm" name="wheels">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Tyre size</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword" name="Tyre_size">
                    </div>
                </div>
                <h2>Options</h2><hr><br>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label"> Colour </label>
                    <div class="col-sm-8 float-left d-flex">
                        <select class="custom-select form-control" name="Colour">
                            <option selected="">please select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Further information</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="information"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">pictures</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_1">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">pictures</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_2">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">pictures</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_3">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">pictures</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_4">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">pictures</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_5">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header bg-cyan">
                                    <h2>
                                        Advertise Type
                                    </h2>
                                </div>
                                <div class="form-line">
                                    <label for="category">select A type</label>
                                    <select name="add_type"  class="form-control show-tick" data-live-search="true">
                                        <option value="1">TOP - 2euro</option>
                                        <option value="2">VIP - 1.5euro</option>
                                        <option value="3">ordinary - 1euro</option>
                                    </select>
                                </div>
                </div>

            </div>

            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>


        </form>

    </div>
@endsection
@push('js')
@endpush
