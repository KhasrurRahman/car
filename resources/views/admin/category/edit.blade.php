@extends('layouts.backend.app')
@section('title','edit Category')
@push('css')
    @endpush
@section('content')
    <div class="container-fluid">


        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <form action="{{route('admin.category.update',$category->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="name" class="form-control" name="name" value="{{ $category->name }}">
                                    <label class="form-label">Category Name</label>
                                </div>
                            </div>
                            <div>
                                <input type="file" name="image">
                            </div>
                            <a type="button" class="btn btn-danger m-t-15 waves-effect" href="{{route('admin.category.index')}}">Back</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection



@push('js')
    @endpush