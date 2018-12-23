<!--*******************
        Preloader start
    ********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
            Preloader end
        ********************-->
<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">
    <!--**********************************
            Nav header start
        ***********************************-->
    <div class="nav-header">
        <div class="brand-logo"><a href="#"><b><img src="{{  asset('images/webzool-logo.png')  }}" style="width: 60px;" alt=""></b>
                <span class="brand-title"><img src="{{  asset('images/webzool-logo-text.png')  }}" style="width: 150px;" alt=""></span></a>
        </div>
        <div class="nav-control">
            <div class="hamburger"><span class="line"></span> <span class="line"></span> <span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <div class="header-left">
                <ul>
                    <li class="icons position-relative"><a href="javascript:void(0)"><i class="icon-magnifier f-s-16"></i></a>
                        <div class="drop-down animated bounceInDown">
                            <div class="dropdown-content-body">
                                <div class="header-search" id="header-search">
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-append"><span class="input-group-text"><i class="icon-magnifier"></i></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-right">
                <ul>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    <li class="icons">
                        <a href="javascript:void(0)" class="log-user">
                            <img src="{{  asset('images/avatar/1.jpg')  }}" alt="">
                            {{ Auth::user()->name }}
                            <span>
                            </span> <i class="fa fa-caret-down f-s-14"
                                       aria-hidden="true"></i>
                        </a>
                        <div class="drop-down dropdown-profile animated bounceInDown">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li><a href="javascript:void()"><i class="icon-user"></i> <span>My Profile</span></a>
                                    </li>
                                    <li><a href="javascript:void()"><i class="icon-wallet"></i> <span>My Wallet</span></a>
                                    </li>
                                    <li><a href="javascript:void()"><i class="icon-envelope"></i> <span>Inbox</span></a>
                                    </li>
                                    <li><a href="javascript:void()"><i class="fa fa-cog"></i> <span>Setting</span></a>
                                    </li>
                                    <li><a href="javascript:void()"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                            <i class="icon-power"></i>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
    <!--**********************************
        Header end
    ***********************************-->
