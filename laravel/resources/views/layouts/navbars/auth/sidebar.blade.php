<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start  colorsidenav" id="sidenav-main">
    <div class="sidenav-header">

        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
            <img src="../assets/img/footer-logo.png" class="navbar-brand-img h-100" alt="...">
        </a>
    </div>
    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse  w-auto me-1" id="sidenav-collapse-main">
        <div class="accordion accordion-flush ms-2" id="accordionFlushExample">


            <div class="accordion-item hover-dashboard">
                <h2 class="accordion-header font-weight-500">
                    <a href="{{ url('dashboard') }}" type="button" class="accordion-button collapsed {{ Request::is('dashboard') ?: '' }}">
                        Dashboard
                    </a>
                </h2>
            </div>


            <div class="accordion-item ">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Clientes
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <ul class="px-1 py-2 me-sm-n4" style="list-style: none;" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2 ">
                                <a class="dropdown-item border-radius-md hover-menu {{ Request::is('plantilla') ?: '' }} "
                                    href="{{ url('plantilla') }}">
                                    <div class="d-flex ">
                                        <div class="my-auto">
                                            <i class="fas fa-search me-3 text-white"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1 text-white">
                                                <span class="font-weight-bold">Captación de Clientes</span>
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="mb-2">
                                <a href="{{ url('clienterut') }}" class="dropdown-item border-radius-md hover-menu {{ Request::is('clienterut') ?: '' }} ">
                                    <div class="d-flex ">
                                        <div class="my-auto">
                                            <i class="fas fa-handshake me-2 text-white"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">Cliente Rut Asociados</span>
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="mb-2">
                                <a href="{{ url('cliente') }}" class="dropdown-item border-radius-md hover-menu {{ Request::is('cliente') ?: '' }}">
                                    <div class="d-flex ">
                                        <div class="my-auto">
                                            <i class="fas fa-user-tie me-2 text-white"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">Clientes</span>
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="mb-2">
                                <a href="{{ url('/contacto') }}" class="dropdown-item border-radius-md hover-menu {{ Request::is('contacto') ?: '' }}">
                                    <div class="d-flex ">
                                        <div class="my-auto">
                                            <i class="fas fa-envelope me-2 text-white"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">Contactos</span>
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="mb-2">
                                <a href="{{ url('/fecha-pago') }}" class="dropdown-item border-radius-md hover-menu {{ Request::is('fecha-pago') ?: '' }}">
                                    <div class="d-flex ">
                                        <div class="my-auto">
                                            <i class="fas fa-calendar-alt me-2 text-white"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">Fecha Prob. Pago</span>
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Documentos
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="px-1 py-2 me-sm-n4" style="list-style: none;"
                            aria-labelledby="dropdownMenuButton">

                            <li class="mb-2 ">
                                <a class="dropdown-item border-radius-md hover-menu {{ Request::is('carpeta-documentos') ?: '' }} "
                                    href="{{ url('carpeta-documentos') }}">
                                    <div class="d-flex ">
                                        <div class="my-auto">
                                            <i class="fas fa-copy me-2 text-white"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1 text-white">
                                                <span class="font-weight-bold">Carpeta</span>
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="mb-2">
                                <a href="{{ url('/logout') }}" class="dropdown-item border-radius-md hover-menu">
                                    <div class="d-flex ">
                                        <div class="my-auto">
                                            <i class="fas fa-folder-open me-2 text-white"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">Documentos</span>
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="mb-2">
                                <a href="{{ url('/logout') }}" class="dropdown-item border-radius-md hover-menu">
                                    <div class="d-flex ">
                                        <div class="my-auto">
                                            <i class="fas fa-users me-2 text-white"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">Grupos</span>
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                        aria-controls="flush-collapseThree">
                        General
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="px-1 py-2 me-sm-n4" style="list-style: none;"
                            aria-labelledby="dropdownMenuButton">

                            <li class="mb-2 ">
                                <a class="dropdown-item border-radius-md hover-menu {{ Request::is('user-profile') ?: '' }} "
                                    href="{{ url('user-profile') }}">
                                    <div class="d-flex ">
                                        <div class="my-auto">
                                            <i class="fas fa-user-lock me-2 text-white"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1 text-white">
                                                <span class="font-weight-bold">Permiso Aplicaciones</span>
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
