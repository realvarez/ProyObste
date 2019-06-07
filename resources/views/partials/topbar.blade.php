<div class="headerbar">
    <div class="headerbar-left">
        <a href="/" ><img alt="Logo" src="{{asset('images/Escudo_USACH.svg')}}" style="height: 50px; margin-left: 10px;" /> <span class="titulo">ESCUELA DE OBSTETRICIA Y PUERICULTURA</span></a>
    </div>
    <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0">
            @auth
                <a data-toggle="modal" data-target="#fileModal" style="cursor: pointer; color: white !important; margin-right: 15px;" class="button"><i class="fas fa-upload"></i> Subir Archivo</a>
                <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        {{-- <img src="{{asset('images/avatars/'.Auth::user()->id.'.png')}}" alt="Profile image" class="avatar-rounded"> --}}
                        <i class="fas fa-user" style="margin-left: 20px;"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                    </div>
                </li>
            @endauth
        </ul>
    </nav>




</div>
