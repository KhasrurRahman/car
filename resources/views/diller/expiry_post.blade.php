@extends('layouts.backend.app')
@section('title'.'show add')
@endsection
@push('css')
@endpush
@section('content')


    <div class="container-fluid">

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            All Adds -
                            <span class="badge bg-blue">{{ $posts->count() }}</span>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Status</th>
                                    <th>Category</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Date of first registration</th>
                                    <th>Power</th>
                                    <th>Kilometer</th>
                                    <th>vehicle NO.</th>
                                    <th>My vehicle</th>
                                    <th>Price</th>
                                    <th>Brakes</th>
                                    <th>Tyre size</th>
                                    <th>Colour</th>
                                    <th>Further information</th>
                                    <th>image-1</th>
                                    <th>image-2</th>
                                    <th>image-3</th>
                                    <th>image-4</th>
                                    <th>image-5</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Status</th>
                                    <th>Category</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Date of first registration</th>
                                    <th>Power</th>
                                    <th>Kilometer</th>
                                    <th>vehicle NO.</th>
                                    <th>My vehicle</th>
                                    <th>Price</th>
                                    <th>Brakes</th>
                                    <th>Tyre size</th>
                                    <th>Colour</th>
                                    <th>Further information</th>
                                    <th>image-1</th>
                                    <th>image-2</th>
                                    <th>image-3</th>
                                    <th>image-4</th>
                                    <th>image-5</th>
                                    <th>Action</th>

                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($posts as $key=>$post)
                                    <tr >
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            @if($post->status == true )
                                                <span class="badge bg-blue">Approved</span>
                                            @else
                                                <span class="badge bg-pink">Pending</span>
                                            @endif
                                        </td>
                                        <td>{{$post->category}}</td>
                                        <td>{{$post->make}}</td>
                                        <td>{{$post->model}}</td>
                                        <td>{{$post->date_of_first_registration}}</td>
                                        <td>{{$post->power}}</td>
                                        <td>{{$post->kilometer}}</td>
                                        <td>{{$post->vehicle_no}}</td>
                                        <td>{{$post->vehicle}}</td>
                                        <td>{{$post->price}}</td>
                                        <td>{{$post->brakes}}</td>
                                        <td>{{$post->tyre_size}}</td>
                                        <td>{{$post->Colour}}</td>
                                        <td>{{$post->Other_features}}</td>
                                        <td><img class="img-responsive thumbnail"
                                                 src="{{ url('storage/app/public/post/'.$post->image_1) }}"></td>
                                        <td><img class="img-responsive thumbnail"
                                                 src="{{ url('storage/app/public/post/'.$post->image_2) }}"></td>
                                        <td><img class="img-responsive thumbnail"
                                                 src="{{ url('storage/app/public/post/'.$post->image_3) }}"></td>
                                        <td><img class="img-responsive thumbnail"
                                                 src="{{ url('storage/app/public/post/'.$post->image_4) }}"></td>
                                        <td><img class="img-responsive thumbnail"
                                                 src="{{ url('storage/app/public/post/'.$post->image_5) }}"></td>

                                        <td class="text-center">
                                            <a href="{{route('diller.diller.show',$post->id)}}" class="btn btn-info waves-effect">
                                                <i class="material-icons">visibility</i>
                                            </a>

                                            @if($post->status == false )
                                                <a href="" class="btn btn-info waves-effect">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                            @else

                                            @endif

                                            <button class="btn btn-danger waves-effect" type="button" onclick="">
                                                <i class="material-icons">delete</i>
                                            </button>
                                            <form id="delete-form-" action="" method="post" style="display: none">
                                                @csrf
                                                @method('DELETE')

                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>




@endsection
@push('js')
@endpush
