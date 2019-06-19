@extends('layouts.backend.app')
@section('title','')
@push('css')
    <!-- Bootstrap Select Css -->
    <link href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <div class="container-fluid">


        <!-- Vertical Layout | With Floating Label -->
        <form action="{{route('admin.post.update',$post->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add New Post
                            </h2>
                        </div>
                        <div class="body">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="title" class="form-control" name="title" value="{{ $post->title }}">
                                    <label class="form-label">Title</label>
                                </div>
                            </div>
                            <div>
                                <label for="image">Feature Image</label>
                                <input type="file" name="image">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="checkbox" id="publish" class="filled-in" name="status" value="1" {{ $post->status == true ? 'checked' : '' }}>
                                <label for="publish">Update</label>

                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Categories and Tags
                            </h2>
                        </div>
                        <div class="body">

                            <div class="form-group form-float">
                                <div class="form-line" {{ $errors->has('categories') ? 'focused error' : '' }}>
                                    <label for="category">select Category</label>
                                    <select name="categories[]" id="category" class="form-control show-tick" data-live-search="true" multiple>
                                        @foreach($categories as $category)
                                            <option @foreach($post->categories as $postcategory)
                                                    {{ $postcategory->id == $category->id ? 'selected' : '' }}
                                                    @endforeach
                                                    value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line" {{ $errors->has('tags') ? 'focused error' : '' }}>
                                    <label for="category">Select Tag</label>
                                    <select name="tags[]" id="category" class="form-control show-tick" data-live-search="true" multiple>
                                        @foreach($tag as $tg)
                                            <option @foreach($post->tag as $postag)
                                                    {{ $postag->id == $tg->id ? 'selected' : '' }}
                                                    @endforeach
                                                    value="{{ $tg->id }}">
                                                {{ $tg->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <a type="button" class="btn btn-danger m-t-15 waves-effect" href="{{route('admin.post.create')}}">Back</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Body
                            </h2>
                        </div>
                        <div class="body">
                            <textarea id="tinymce" name="body">
                                {{ $post->body }}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>

@endsection



@push('js')
    <!-- Select Plugin Js -->
    <script src="{{asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
    <!-- TinyMCE -->
    <script src="{{ asset('assets/backend/plugins/tinymce/tinymce.js') }}"></script>
    <script>
        $(function () {
            //TinyMCE
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{asset('assets/backend/plugins/tinymce')}}';
        });
    </script>
@endpush