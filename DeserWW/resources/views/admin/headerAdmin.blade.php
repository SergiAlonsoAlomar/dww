<head>
<link href="{{ asset('css/headerAdmin.css') }}" rel="stylesheet">
</head>
<header>
        <div id="header" class="d-flex align-items-center justify-content-between px-3 py-2 ">
        <a href="{{ route('menuadmin') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Icono" class="me-3">
            </a>
            <h2 class="m-0">CONTROL DE ADMINISTRACIÓN</h2>
            <div class="profile-dropdown">
                    <a href="{{ route('logout') }}"><span>Cerrar sesión</span></a>
            </div>
        </div>
    </header>