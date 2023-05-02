<!-- Navbar -->
<nav class="navbar px-0 py-3 shadow-none colornav" id="navbarBlur" style="height: 80px;">    
    <div class="container-fluid">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end" id="navbar">
            <div class="nav-item d-flex align-self-end">
    
            </div>
            <ul class="navbar-nav justify-content-end d-flex z-index-3">
                <li class="nav-item d-xl-none ps-3 align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown pe-2">
                    <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-2">Bienvenido {user}</span>
                        <img src="../assets/img/user.png" width="45px" height="45px">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md hover-menu {{ Request::is('user-profile') ?: '' }} "
                                href="{{ url('user-profile') }}">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <i class="fas fa-user me-3 text-white"></i>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1 text-white">
                                            <span class="font-weight-bold">User Profile</span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ url('/logout') }}" class="dropdown-item border-radius-md hover-menu">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <i class="fas fa-sign-out-alt me-3 text-white"></i>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">Salir</span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--End Navbar -->
