<!-- Navbar -->
<nav class=" navbar navbar-main navbar-expand-lg px-0 shadow-none colornav" id="navbarBlur" navbar-scroll="false" style="height: 80px;">
    <div class="container-fluid py-1 px-5">
        {{-- <nav aria-label="breadcrumb">
            <h6 class="font-weight-bolder mb-0 text-capitalize">{{ str_replace('-', ' ', Request::path()) }}</h6>
            <div class="card px-4 justify-content-between">
                <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Usuario</p>
                    <h5 class="font-weight-bolder mb-0">
                        Cargo
                    </h5>
                </div>
            </div>
        </nav> --}}

        <div class="card mx-3">
            <div class="card-body p-1 px-4">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold text-black-50">Usuario</p>
                            <h5 class="font-weight-bolder mb-0">
                                Cargo
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="fa fa-user text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mx-3">
            <div class="card-body p-1 px-4">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold text-black-50">UF Hoy</p>
                            <h5 class="font-weight-bolder mb-0">
                                2.300
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end" id="navbar">
            <div class="nav-item d-flex align-self-end">

            </div>
            <div class="ms-md-3 pe-md-3 d-flex align-items-center">

            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center text-white mr-3">
                    <span class="d-sm-inline d-none tamano-usuarionav">Bienvenido {user}</span>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/img/user.png" width="45px" height="45px" alt="">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2 ">
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
<!-- End Navbar -->
