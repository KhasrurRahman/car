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
                                    <th>Category</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Date of first registration</th>
                                    <th>Power</th>
                                    <th>Kilometer</th>
                                    <th>vehicle NO.</th>
                                    <th>My vehicle</th>
                                    <th>Price</th>
                                    <th>VAT rate</th>
                                    <th>Perm. GVW</th>
                                    <th>Admissible haulage weight</th>
                                    <th>Payload</th>
                                    <th>Empty weight</th>
                                    <th>Gearing type</th>
                                    <th>Brakes</th>
                                    <th>Suspension</th>
                                    <th>Axle configuration</th>
                                    <th>Wheels distance</th>
                                    <th>Tyre size</th>
                                    <th>Fuel type</th>
                                    <th>CO2-Emmision combined</th>
                                    <th>Fuel consumption combined</th>
                                    <th>urban</th>
                                    <th>Colour</th>
                                    <th>Attachment parts</th>
                                    <th>Other features</th>
                                    <th>Further information</th>
                                    <th>image-1</th>
                                    <th>image-2</th>
                                    <th>image-3</th>
                                    <th>image-4</th>
                                    <th>image-5</th>
                                    <th>Action-6</th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Category</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Date of first registration</th>
                                    <th>Power</th>
                                    <th>Kilometer</th>
                                    <th>vehicle NO.</th>
                                    <th>My vehicle</th>
                                    <th>Price</th>
                                    <th>VAT rate</th>
                                    <th>Perm. GVW</th>
                                    <th>Admissible haulage weight</th>
                                    <th>Payload</th>
                                    <th>Empty weight</th>
                                    <th>Gearing type</th>
                                    <th>Brakes</th>
                                    <th>Suspension</th>
                                    <th>Axle configuration</th>
                                    <th>Wheels distance</th>
                                    <th>Tyre size</th>
                                    <th>Fuel type</th>
                                    <th>CO2-Emmision combined</th>
                                    <th>Fuel consumption combined</th>
                                    <th>urban</th>
                                    <th>Colour</th>
                                    <th>Attachment parts</th>
                                    <th>Other features</th>
                                    <th>Further information</th>
                                    <th>image-1</th>
                                    <th>image-2</th>
                                    <th>image-3</th>
                                    <th>image-4</th>
                                    <th>image-5</th>
                                    <th>Action-6</th>

                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($posts as $key=>$post)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{$post->category}}</td>
                                        <td>{{$post->make}}</td>
                                        <td>{{$post->model}}</td>
                                        <td>{{$post->date_of_first_registration}}</td>
                                        <td>{{$post->power}}</td>
                                        <td>{{$post->kilometer}}</td>
                                        <td>{{$post->vehicle_no}}</td>
                                        <td>{{$post->vehicle}}</td>
                                        <td>{{$post->price}}</td>
                                        <td>{{$post->vat}}</td>
                                        <td>{{$post->Perm_gvw}}</td>
                                        <td>{{$post->Admissible_haulage_weight}}</td>
                                        <td>{{$post->payload}}</td>
                                        <td>{{$post->empty_weight}}</td>
                                        <td>{{$post->gearing_type}}</td>
                                        <td>{{$post->brakes}}</td>
                                        <td>{{$post->suspension}}</td>
                                        <td>{{$post->axle_configuration}}</td>
                                        <td>{{$post->wheels_distance}}</td>
                                        <td>{{$post->tyre_size}}</td>
                                        <td>{{$post->CO2_Emmision_combined}}</td>
                                        <td>{{$post->Fuel_consumption_combined}}</td>
                                        <td>{{$post->Colour}}</td>
                                        <td>{{$post->Attachment_parts}}</td>
                                        <td>{{$post->Other_features}}</td>
                                        <td>{{$post->Other_features}}</td>
                                        <td>{{$post->Other_features}}</td>
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
                                            <a href="{{route('admin.addpost.show',$post->id)}}" class="btn btn-info waves-effect">
                                                <i class="material-icons">visibility</i>
                                            </a>

                                            <a href="{{route('admin.addpost.edit',$post->id)}}" class="btn btn-info waves-effect">
                                                <i class="material-icons">edit</i>
                                            </a>

                                            <button class="btn btn-danger waves-effect" type="button" onclick="deletepost({{ $post->id }})">
                                                <i class="material-icons">delete</i>
                                            </button>
                                            <form id="delete-form-{{$post->id}}" action="{{route('admin.addpost.destroy',$post->id)}}" method="post" style="display: none">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.all.min.js"></script>

    <script type="text/javascript">
        function deletepost(id) {
            const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            })

            swalWithBootstrapButtons({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>


@endpush
