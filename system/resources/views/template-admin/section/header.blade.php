<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link"></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->


        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            @if(Auth::check())
                    {{request()->user()->nama}}
                    @else
                    Silahkan Login
                    @endif
                <img src="  {{ url('public/assets-admin') }}/dist/img/user1-128x128.jpg" alt="User Avatar"
                    style="height: 140% " class="img-circle">



                <span class="badge badge-danger navbar-badge"></span>
            </a>
            <div class="dropdown-menu dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <i class="fa fa-user"> Profile</i>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <div class="media">
                            <i class="fa fa-cog"> Seting</i>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ url('logout') }}" class="dropdown-item">
                    <i class="fa fa-cog"> Logout</i>
            </div>
            </a>
            <div class="dropdown-divider"></div>
            </div>
        </li>
    </ul>
</nav>
