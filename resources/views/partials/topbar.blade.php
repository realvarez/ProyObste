<div class="headerbar">
    <div class="headerbar-left">
        <a href="/" class="logo"><img alt="Logo" src="{{asset('images/logo.png')}}" /> <span>ADMIN</span></a>
    </div>
    <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0">
                @auth
                <a href="/forms-upload" id="subirarchivo" class="button"><i class="fas fa-upload"></i> Subir Archivo</a>
                <a href="/forms-upload" id="subirarchivo" class="button"><i class="fas fa-folder-plus"></i> Nueva categoría</a>
                
            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('images/avatars/'.Auth::user()->id.'.png')}}" alt="Profile image" class="avatar-rounded">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <div class="dropdown-item noti-title">
                        <p class="text-overflow"><small>Bienvenid@, {{Auth::user()->name}}</small> </p>
                    </div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                </div>
            </li>
           
            @endauth
        </ul>
    </nav>




</div>
