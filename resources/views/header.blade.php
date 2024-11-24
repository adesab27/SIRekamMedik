<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <!-- Logo dengan latar belakang yang seragam -->
        <a class="navbar-brand" style="background-color: rgba(0,82,204,1); color: white;" href="#">
            <img alt="Logo Rumah Terapi Pelangi Insan" src="assets/img/logo-klinik.png" />
        </a>

        <!-- Navbar Toggler -->
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="background-color: rgba(0,82,204,1); color: white;"
                        href="#" id="navbarDropdown" data-toggle="dropdown">
                        <img alt="User Profile Picture" class="rounded-circle"
                            src="{{ asset('assets/img/profile-klinik.png')}}" />
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
