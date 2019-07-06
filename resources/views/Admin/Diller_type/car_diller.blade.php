
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
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>

                                </tr>
                                </tfoot>
                                <tbody>

                     @foreach ($user as $users)
                    @php $post = App\post_add::where('user_id',$users->id)->where('category','car')->limit(1)->get();
                    $key =0;
                    @endphp
                                @foreach($post as $key=>$lll)
                                <tr>
                                    <td>{{ $key +1 }}</td>
                                    <td>{{$lll->user->name}}</td>
                                    <td>{{$lll->user->email}}</td>

                                    <td class="text-center">
                                        <a href="" class="btn btn-info waves-effect">
                                            <i class="material-icons">visibility</i>
                                        </a>

                                        <a href="{{route('admin.single_diller_post',$lll->user->id)}}" class="btn btn-info waves-effect">
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




