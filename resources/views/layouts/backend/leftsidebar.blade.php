<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
            <div class="email">{{Auth::user()->email}}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="}"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                            <i class="material-icons">input</i>Log Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>


                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>

            @if(Request::is('admin*'))
                <li class="{{Request::is('admin/dashbord')?'active': ''}}">
                    <a href="{{route('admin.dashbord')}}">
                        <i class="material-icons">home</i>
                        <span>Profile</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/addpos*')?'active': ''}}">
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">face</i>
                        <span>Advertise setting</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li>
                            <a href="{{route('admin.addpost.index')}}" class=" waves-effect waves-block">All advertise
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.addpost.create')}}" class=" waves-effect waves-block">Post a new advertise
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="{{Request::is('admin/pending_add*')?'active': ''}}">
                    <a href="{{route('admin.pending_add')}}">
                        <i class="material-icons">home</i>
                        <span>Pending Add</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/expiry_post*')?'active': ''}}">
                    <a href="{{route('admin.expiry_post')}}">
                        <i class="material-icons">home</i>
                        <span>Expired Add</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/dealer*')?'active': ''}}">
                    <a href="{{route('admin.dealer.index')}}">
                        <i class="material-icons">home</i>
                        <span>All Dealers</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/customer*')?'active': ''}}">
                    <a href="{{route('admin.customer.index')}}">
                        <i class="material-icons">home</i>
                        <span>All Customers</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/byke_diller*')?'active': ''}}">
                    <a href="{{route('admin.byke_diller')}}">
                        <i class="material-icons">home</i>
                        <span>Byke Dealers</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/car_diller*')?'active': ''}}">
                    <a href="{{route('admin.car_diller')}}">
                        <i class="material-icons">home</i>
                        <span>Car Dealers</span>
                    </a>
                </li>
             @endif



            @if(Request::is('diller*'))
                <li class="{{Request::is('diller/dashbord')?'active': ''}}">
                    <a href="{{route('diller.dashbord')}}">
                        <i class="material-icons">home</i>
                        <span>Profile</span>
                    </a>
                </li>


                <li class="{{Request::is('diller/diller*')?'active': ''}}">
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">face</i>
                        <span>Advertise setting</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li>
                            <a href="{{route('diller.All_post')}}" class=" waves-effect waves-block">All advertise
                            </a>
                        </li>

                        <li>
                            <a href="{{route('diller.diller.create')}}" class=" waves-effect waves-block">Post a new advertise
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="{{Request::is('diller/expiry_post')?'active': ''}}">
                    <a href="{{route('diller.expiry_post')}}">
                        <i class="material-icons">home</i>
                        <span>Expired Add</span>
                    </a>
                </li>

                <li class="{{Request::is('diller/setting')?'active': ''}}">
                    <a href="{{route('diller.setting')}}">
                        <i class="material-icons">home</i>
                        <span>Setting</span>
                    </a>
                </li>

            @endif




            @if(Request::is('author*'))
                <li class="{{Request::is('author/dashbord')?'active': ''}}">
                    <a href="{{route('diller.dashbord')}}">
                        <i class="material-icons">home</i>
                        <span>Profile</span>
                    </a>
                </li>


                <li class="{{Request::is('diller/diller*')?'active': ''}}">
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">face</i>
                        <span>Advertise setting</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li>
                            <a href="{{route('author.All_post')}}" class=" waves-effect waves-block">All advertise
                            </a>
                        </li>

                        <li>
                            <a href="{{route('author.post.create')}}" class=" waves-effect waves-block">Post a new advertise
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="{{Request::is('author/expiry_post')?'active': ''}}">
                    <a href="{{route('author.expiry_post')}}">
                        <i class="material-icons">home</i>
                        <span>Expired Add</span>
                    </a>
                </li>

                <li class="{{Request::is('author/setting')?'active': ''}}">
                    <a href="{{route('author.setting')}}">
                        <i class="material-icons">home</i>
                        <span>Setting</span>
                    </a>
                </li>
            @endif


        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>
