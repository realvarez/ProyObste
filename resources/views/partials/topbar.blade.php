<div class="headerbar">
    <div class="headerbar-left">
        <a href="index.html" class="logo"><img alt="Logo" src="{{asset('images/logo.png')}}" /> <span>Admin</span></a>
    </div>
    <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0">
                @auth
            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('images/avatars/'.Auth::user()->id.'.png')}}" alt="Profile image" class="avatar-rounded">
                </a>
                <a href="{{ url('/logout') }}"> logout </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <div class="dropdown-item noti-title">
                    <h5 class="text-overflow"><small>Bienvenid@, {{Auth::user()->name}}</small> </h5>
                    </div>
                </div>
            </li>
            @endauth
        </ul>
    </nav>
</div>
