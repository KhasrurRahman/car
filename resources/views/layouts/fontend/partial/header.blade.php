<!-- back top button -->
<div class="scroll_top">
    <i class="fa fa-arrow-up"></i>
</div>
<!-- back top button -->

<!-- start header one -->
<nav class="navbar navbar-expand-lg navbar-light bg-light py-0">
    <div class="container">
        <div class="d-md-flex custom_nav_select navbar-collapse">
            <ul class="navbar-nav custom_padding_nav  mr-md-auto flex-row justify-content-center">
                <li class="nav-item  dropdown">
                    @if (!\Illuminate\Support\Facades\Auth::check())
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dealers
                    </a>
                    <div class="dropdown-menu position-absolute">

                        <a class="dropdown-item" href="{{route('dillerLogin')}}">login</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('dealerRegistration')}}">Become a dealer with autos24 </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                @elseif (\Illuminate\Support\Facades\Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                @endif
            </ul>
            <div class="login_register text-right">
                <a class="border_border" href="#"><i class="fa fa-envelope-o"></i>infocarsinghana@gmail.com
                </a>
                <a href="#"><i class="fa fa-envelope-o"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                @if (!\Illuminate\Support\Facades\Auth::check())
                <a href="#" data-toggle="modal"
                   data-target="#login" class="login">login</a>
                <a href="#"data-toggle="modal"
                   data-target="#registration" class="login">register</a>

                    @elseif (\Illuminate\Support\Facades\Auth::check())
                <a href="#" class="login">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                 <a href="{{route('admin.dashbord')}}" class="login">Dashboard</a>
                 <a href="{{route('logout')}}" class="login">logout</a>
                @endif
            </div>
        </div>
    </div>
</nav>

<!-- end  header one -->

<!-- apply now modal-->
<div
    class="modal fade"
    id="login"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal_heading">
                <h5 class="modal-title text-center" id="exampleModalCenterTitle">
                    Fill out the form to login
                </h5>
            </div>
            <div class="modal-header">
                <div class="logo_fest">
                    <a href="{{route('home')}}"><img src="{{asset('public/assets/fontend/img/logo.png')}}" width="50%" alt=""/></a>
                </div>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact_right">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- apply now modal-->

<!-- apply now modal-->
<div
    class="modal fade"
    id="registration"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal_heading">
                <h5 class="modal-title top_title_mode text-center" id="exampleModalCenterTitle">
                    Fill out the form to registration
                </h5>
            </div>
            <div class="modal-header">
                <div class="logo_fest">
                    <a href="{{route('home')}}"><img src="{{asset('public/assets/fontend/img/logo.png')}}" width="50%" alt=""/></a>
                </div>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact_right">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <input value="2" type="hidden" name="role_id">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- apply now modal-->

<!-- start header area -->
<div class="header_area">
    <nav class="navbar navbar-expand-md py-3" id="navbar-example">
        <div class="container">
            <div class="logo">
                <a href="{{route('home')}}"><img src="{{asset('public/assets/fontend/img/logo.png')}}" alt="logo"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon icon_bar"><i class="fa fa-bars" ></i></span>
            </button>
            <div class="collapse navbar-collapse" id="mynav">
                <ul class="navbar-nav nav nav-pills ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('diller')}}">Dealers<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('servise')}}"> service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('rent')}}">Rent a car</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('all_car')}}">All Advertise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>
<!-- end header area -->
