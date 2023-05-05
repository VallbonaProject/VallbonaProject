

<div id="navbar" class="flex-column flex-shrink-0 p-3 text-custom bg-2" style="width: 200px; height: 100vh; display:flex">
    <a id="navbar-header" href="{{ route('empresa_list') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-custom text-decoration-none">
        <span class="fs-3 logo">
            <img src=" {{ asset ('/img/logo-vallbona.png' )}}" alt="Vallbona" height="85px">
        </span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            @if (route('empresa_list') == url()->full())
            <a href="{{ route('empresa_list') }}" class="nav-link text-custom actual-page" aria-current="page">
                Empreses
            </a>
            @else
            <a href="{{ route('empresa_list') }}" class="nav-link text-custom" aria-current="page">
                Empreses
            </a>
            @endif
        </li>
        <li>
            @if (route('contacte_list') == url()->full())
            <a href="{{ route('contacte_list') }}" class="nav-link text-custom actual-page">
                Contactes
            </a>
            @else
            <a href="{{ route('contacte_list') }}" class="nav-link text-custom">
                Contactes
            </a>
            @endif
        </li>
        <li>
            @if (route('estada_list') == url()->full())
            <a href="{{ route('estada_list') }}" class="nav-link text-custom actual-page">
                Estades
            </a>
            @else
            <a href="{{ route('estada_list') }}" class="nav-link text-custom">
                Estades
            </a>
            @endif
        </li>
        @if (Auth::user()->rol_id == 5076)
        <li>
            @if (route('user_list') == url()->full())
            <a href="{{ route('user_list') }}" class="nav-link text-custom actual-page">
                Usuaris
            </a>
            @else
            <a href="{{ route('user_list') }}" class="nav-link text-custom">
                Usuaris
            </a>
            @endif
        </li>
        <li>
            @if (route('rol_list') == url()->full())
            <a href="{{ route('rol_list') }}" class="nav-link text-custom actual-page">
                Rols
            </a>
            @else
            <a href="{{ route('rol_list') }}" class="nav-link text-custom">
                Rols
            </a>
            @endif
        </li>
        <li>
            @if (route('curs_list') == url()->full())
            <a href="{{ route('curs_list') }}" class="nav-link text-custom actual-page">
                Cursos
            </a>
            @else
            <a href="{{ route('curs_list') }}" class="nav-link text-custom">
                Cursos
            </a>
            @endif
        </li>
        <li>
            @if (route('cicle_list') == url()->full())
            <a href="{{ route('cicle_list') }}" class="nav-link text-custom actual-page">
                Cicles
            </a>
            @else
            <a href="{{ route('cicle_list') }}" class="nav-link text-custom">
                Cicles
            </a>
            @endif
        </li>
        <li>
            @if (route('comarca_list') == url()->full())
            <a href="{{ route('comarca_list') }}" class="nav-link text-custom actual-page">
                Comarques
            </a>
            @else
            <a href="{{ route('comarca_list') }}" class="nav-link text-custom">
                Comarques
            </a>
            @endif
        </li>
        <li>
            @if (route('poblacio_list') == url()->full())
            <a href="{{ route('poblacio_list') }}" class="nav-link text-custom actual-page">
                Poblacions
            </a>
            @else
            <a href="{{ route('poblacio_list') }}" class="nav-link text-custom">
                Poblacions
            </a>
            @endif
        </li>
        @endif
    </ul>
    <hr>
    <div id="userContainer" class="dropdown">
        <a href="#" class="d-flex align-items-center text-custom text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <strong id="profilename">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</strong>
            <i class="bi bi-caret-down-fill"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow login-dropdown" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="{{ route('user_profile') }}">Perfil</a></li>
            <input type="hidden" id="userid" value="{{ Auth::id() }}">
            <li>
                <div class="dropdown-item">
                    @if (Auth::user()->darkmode == 0)
                    <button id="darkmode" class="lightmode" value="0"><i class='bi bi-sun-fill'></i> Mode dia</button>
                    @else
                    <button id="darkmode" class="darkmode" value="1">Mode nit <i class="bi bi-moon-fill"></i></button>
                    @endif
                </div>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <form method="POST" id="logout" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                </form>
            </li>
        </ul>
    </div>
</div>

<button id="toggleButton" class="btn" onclick="toggleDiv()"><i class="bi bi-arrow-bar-left"></i></button>
