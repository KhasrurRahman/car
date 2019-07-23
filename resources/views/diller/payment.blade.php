@extends('layouts.backend.app')
@section('title'.'Payment')
@endsection
@push('css')
@endpush
@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="body bg-red">
            For Publishing This Add You need to Payment

                                                    @if ($payment == 1)
                                                        $200
                                                            @elseif ($payment == 2)
                                                             $100
                                                            @elseif ($payment == 3)
                                                            $50
                                                        @endif ,

                                                        You Select
                                                        @if ($payment == 1)
                                                            Top
                                                        @elseif ($payment == 2)
                                                            Vip
                                                        @elseif ($payment == 3)
                                                            Odenary
                                                        @endif

            Type Add
        </div>
    </div>

    <button type="button" class="btn btn-block btn-lg btn-primary waves-effect">Payment</button>
</div>



@endsection
@push('js')
@endpush
