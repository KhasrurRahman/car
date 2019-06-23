@extends('layouts.backend.app')
@section('title'.'dashbord')
@endsection
    @push('css')
    @endpush
@section('content')



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <form action="{{route('admin.addpost.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
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
                        <label for="inputPassword" class="col-sm-4 col-form-label">Make</label>
                        <div class="col-sm-8 float-left d-flex">
                            <select class="custom-select form-control" name="make">
                                <option selected="">choose</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
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
                        <label for="inputPassword" class="col-sm-4 col-form-label"> Price in Euro</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" name="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">VAT rate</label>
                        <div class="col-sm-8 float-left d-flex">
                            <select class="custom-select form-control" name="VAT_rate">
                                <option selected="">choose</option>
                                <option value="1">19%</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <h2>Weight &amp; Mass</h2><hr><br>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Perm. GVW</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" placeholder="kg" name="GVW">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Admissible haulage weight</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" placeholder="kg" name="Admissible_haulage_weight">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Payload</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" placeholder="kg" name="Payload">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Empty weight</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" placeholder="kg" name="Empty_weight">
                        </div>
                    </div>
                    <h2>Power &amp; Environment</h2><hr><br>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Gearing type</label>
                        <div class="col-sm-8 float-left d-flex">
                            <select class="custom-select form-control" name="Gearing_type">
                                <option selected="">please select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label"> Brakes </label>
                        <div class="col-sm-8 float-left d-flex">
                            <select class="custom-select form-control" name="Brakes">
                                <option selected="">please select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label"> Suspension </label>
                        <div class="col-sm-8 float-left d-flex">
                            <select class="custom-select form-control" name="Suspension">
                                <option selected="">please select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Axle configuration</label>
                        <div class="col-sm-8 float-left d-flex">
                            <select class="custom-select form-control" name="Axle_configuration">
                                <option selected="">please select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
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
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Emission standard</label>
                        <div class="col-sm-8 float-left d-flex">
                            <select class="custom-select form-control" name="Emission_standard">
                                <option selected="">please select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Fuel type</label>
                        <div class="col-sm-8 float-left d-flex">
                            <select class="custom-select form-control" name="Fuel_type">
                                <option selected="">please select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">CO2-Emmision combined</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" placeholder="g/km" name="co2_emmision">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Fuel consumption combined</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" placeholder="i/100km" name="Fuel">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">urban</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" placeholder="i/100km" name="urban">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">rural</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" placeholder="i/100km" name="rural">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">TÜV certified</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="inputPassword" name="tuv">
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
                        <label for="inputPassword" class="col-sm-4 col-form-label">  Cab  </label>
                        <div class="col-sm-8 float-left d-flex">
                            <select class="custom-select form-control" name="Cab">
                                <option selected="">please select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">  Attachment parts / Accessory  </label>
                        <div class="col-sm-8 float-left d-flex">
                            <div class="row">
                                <div class="col-6">
                                    <div class="left_check">
                                        <input type="checkbox" id="Crane" class="filled-in" name="attachment_parts[]" value="Crane">
                                        <label for="Crane">Crane</label>

                                        <input type="checkbox" id="Trailer_coupling" class="filled-in" name="attachment_parts[]" value="Trailer coupling">
                                        <label for="Trailer_coupling">Trailer coupling</label>

                                        <input type="checkbox" id="Compressor" class="filled-in" name="attachment_parts[]" value="Compressor">
                                        <label for="Compressor">Compressor</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="left_check">
                                        <input type="checkbox" id="Compressor2" class="filled-in" name="attachment_parts[]" value="Compressor">
                                        <label for="Compressor2">Compressor2</label>

                                        <input type="checkbox" id="Spoiler" class="filled-in" name="attachment_parts[]" value="Spoiler">
                                        <label for="Spoiler">Spoiler</label>

                                        <input type="checkbox" id="Additional_headlights" class="filled-in" name="attachment_parts[]" value="Additional headlights">
                                        <label for="Additional_headlights">Additional headlights</label>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">  Other features  </label>
                        <div class="col-sm-8 float-left d-flex">
                            <div class="row">
                                <div class="col-6">
                                    <div class="left_check">
                                        <input type="checkbox" id="ABS" class="filled-in" name="other_features[]" value="ABS">
                                        <label for="ABS">ABS</label>

                                        <input type="checkbox" id="All wheel drive" class="filled-in" name="other_features[]" value="All wheel drive">
                                        <label for="All wheel drive">All wheel drive</label>

                                        <input type="checkbox" id="Air Conditioning" class="filled-in" name="other_features[]" value="Air Conditioning">
                                        <label for="Air Conditioning">Air Conditioning</label>

                                        <input type="checkbox" id="Navigation system" class="filled-in" name="other_features[]" value="Navigation system">
                                        <label for="Navigation system">Navigation system</label>

                                        <input type="checkbox" id="Traction control" class="filled-in" name="other_features[]" value="Traction control">
                                        <label for="Traction control">Traction control</label>

                                        <input type="checkbox" id="Hydraulics" class="filled-in" name="other_features[]" value="Hydraulics">
                                        <label for="Hydraulics">Hydraulics</label>

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="left_check">
                                        <input type="checkbox" id="Parking heater" class="filled-in" name="other_features[]" value="Parking heater">
                                        <label for="Parking heater">Parking heater</label>

                                        <input type="checkbox" id="Onboard computer" class="filled-in" name="other_features[]" value="Onboard computer">
                                        <label for="Onboard computer">Onboard computer</label>

                                        <input type="checkbox" id="Differential lock" class="filled-in" name="other_features[]" value="Differential lock">
                                        <label for="Onboard computer">Differential lock</label>

                                        <input type="checkbox" id="Low noise" class="filled-in" name="other_features[]" value="Low noise">
                                        <label for="Low noise">Low noise</label>

                                        <input type="checkbox" id="Cruise control" class="filled-in" name="other_features[]" value="Cruise control">
                                        <label for="Low noise">Cruise control</label>

                                    </div>
                                </div>
                            </div>
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
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                </form>
        </div>



@endsection
@push('js')
@endpush
