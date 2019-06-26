@extends('layouts.backend.app')
@section('title'.'dashbord')
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
                            All post
                            <span class="badge bg-blue"></span>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>

                                <tr>
                                    <th>Id</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>Action</th>

                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($customers as $key=>$customer)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->email}}</td>

                                    <td class="text-center">
                                        <a href="" class="btn btn-info waves-effect">
                                            <i class="material-icons">visibility</i>
                                        </a>

                                        <a href="" class="btn btn-info waves-effect">
                                            <i class="material-icons">edit</i>
                                        </a>

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
