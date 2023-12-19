<link rel="stylesheet" href="{{ asset('css/layout/header.css') }}">
<nav class="navbar navbar-expand">
    <div class="container-fluid">
        <div class="h4 title">
            <span onclick="openNav()">TERNAKU</span>
        </div>
        <div class="justify-content-end h5" id="navbarSupportedContent">
            <ul class="navbar-nav me-2">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profil') }}">Profil</a>
                </li>
                <li class="nav-item">
                    @method('POST')
                    <a class="nav-link" href="{{ url('/keluar') }}">Keluar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
