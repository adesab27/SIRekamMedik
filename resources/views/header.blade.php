<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img alt="Logo Rumah Terapi Pelangi Insan" src="{{ asset('assets/img/logo-klinik.png')}}" />
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="background-color: rgba(0,82,204,1); color: white;" href="#" id="navbarDropdown" data-toggle="dropdown">
                        <img alt="User Profile Picture" class="rounded-circle" src="{{ asset('assets/img/profile-klinik.png')}}" />
                        {{$username}}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
