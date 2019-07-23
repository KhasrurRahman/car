@extends('layouts.backend.app')
@section('title'.'Show')
@endsection
@push('css')
@endpush
@section('content')

    <div class="container-fluid">


        <a href="{{route('admin.pending_add')}}" class="btn btn-danger waves-effect">Back</a>

            <button type="button" class="btn btn-success pull-right waves-effect" onclick="approvepost({{ $post->id }})">
                <i class="material-icons">done</i>
                <span>Send A notification</span>
            </button>

            <form action="{{ route('admin.notify',$post->id)}}"  id="approval-form" method="post"  style="display: none">
                @csrf
                @method('PUT')
            </form>
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
                                        <li class="list-group-item">Brakes:-> {{$post->brakes}}</li>
                                        <li class="list-group-item">Tyre size:-> {{$post->tyre_size}}</li>
                                        <li class="list-group-item">Colour:-> {{$post->Colour}}</li>
                                        <li class="list-group-item">Further information:-> {{$post->Further_information}}</li>
                                    </ul>

                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <p>This Post is Expired In {{$post->expiry_date}}</p>
                        @if ($user->role_id == 2)
                           <p style="color: #0f9d58">This is a General Customer Post named '{{$user->name}}' and Email                                        '{{$user->email}}'</p>
                            @if ($post->add_type == 3)
                                <p style="color: red">It Was in Ordinary type,Now Send A notification to user for update                                                his add</p>
                             @elseif ($post->add_type == 2)
                                <p style="color: red">It Was in Vip Category,Now Send A notification to user for update                                     his add and This Add goes to LifeTime ordinary Package</p>
                            @elseif ($post->add_type == 3)
                                <p style="color: red">It Was in Top Category,Now Send A notification to user for update                                        his add and This Add goes to LifeTime ordinary Package</p>
                            @endif

                        @elseif($user->role_id == 3)
                            <p style="color: #0f9d58">This is a Dealer Post named '{{$user->name}}' and Email                                        '{{$user->email}}'</p>
                            @if ($post->add_type == 3)
                                <p style="color: red">It Was in Ordinary type,Now Send A notification to user for update                                                his add</p>
                            @elseif ($post->add_type == 2)
                                <p style="color: red">It Was in Vip Category,Now Send A notification to user for update                                     his add and This Add goes to ordinary Package for 30 days</p>
                            @elseif ($post->add_type == 3)
                                <p style="color: red">It Was in Top Category,Now Send A notification to user for update                                        his add and This Add goes to ordinary Package for 30 days </p>
                            @endif
                        @endif
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.all.min.js"></script>

    <script type="text/javascript">
        function approvepost(id) {
            const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            })

            swalWithBootstrapButtons({
                title: 'Are you sure?',
                text: "You what to approve this post!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, approve it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('approval-form').submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons(
                        'Cancelled',
                        'The post remain pending :)',
                        'info'
                    )
                }
            })
        }


    </script>
@endpush
