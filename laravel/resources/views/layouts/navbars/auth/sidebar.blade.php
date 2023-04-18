<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start  colorsidenav" id="sidenav-main">
    <!-- Logo Sidebar-->
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
            <img src="../assets/img/footer-logo.png" class="navbar-brand-img h-100">
        </a>
    </div>

    <hr class="horizontal light mt-0">    

    <!-- Menú Sidebar-->
    <div class="ps-3 pe-2">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button">
                        <i class="fas fa-tachometer-alt me-2"></i> <a href="{{ route('dashboard') }}"> Dashboard</a>
                    </button>
                </h2>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseComercial" aria-expanded="false" aria-controls="flush-collapseComercial">
                    <i class="fas fa-business-time me-2"></i> Comercial
                </button>
                </h2>
                <div id="flush-collapseComercial" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="menu_sidebar">
                            <li><a href="#">Indicadores</a></li>
                            <li><a href="#">Cotizaciones</a></li>
                            <li><a href="#">Clientes</a></li>
                            <li><a href="#">Contactos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOperaciones" aria-expanded="false" aria-controls="flush-collapseOperaciones">
                    <i class="fas fa-cogs me-2"></i> Operaciones
                </button>
                </h2>
                <div id="flush-collapseOperaciones" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="menu_sidebar">
                            <li><a href="#">Indicadores</a></li>
                            <li><a href="#">Proyectos</a></li>
                            <li><a href="#">Costos</a></li>
                            <li><a href="#">Cartas gantt</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFinanzas" aria-expanded="false" aria-controls="flush-collapseFinanzas">
                    <i class="fas fa-coins me-2"></i> Finanzas
                </button>
                </h2>
                <div id="flush-collapseFinanzas" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="menu_sidebar">
                            <li><a href="#">Indicadores</a></li>
                            <li><a href="#">Fechas de pago</a></li>
                            <li><a href="#">Facturación</a></li>
                            <li><a href="#">Cobranzas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseRRHH" aria-expanded="false" aria-controls="flush-collapseRRHH">
                    <i class="fas fa-user-friends me-2"></i> RRHH
                </button>
                </h2>
                <div id="flush-collapseRRHH" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="menu_sidebar">
                            <li><a href="#">Indicadores</a></li>
                            <li><a href="#">Enlace 1</a></li>
                            <li><a href="#">Enlace 2</a></li>
                            <li><a href="#">Enlace 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInformes" aria-expanded="false" aria-controls="flush-collapseInformes">
                    <i class="fas fa-chart-pie me-2"></i>Informes
                </button>
                </h2>
                <div id="flush-collapseInformes" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="menu_sidebar">
                            <li><a href="#">Indicadores</a></li>
                            <li><a href="#">Rentabilidad</a></li>
                            <li><a href="#">Capacites</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="horizontal light mt-3">

    <!-- Menú ADM -->
    <div class="ps-3 pe-2">
        <div class="accordion accordion-flush" id="accordionFlushExample2">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseADM" aria-expanded="false" aria-controls="flush-collapseADM">
                    <i class="fas fa-tools me-2"></i> Administración
                </button>
                </h2>
                <div id="flush-collapseADM" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                    <div class="accordion-body">
                        <ul class="menu_sidebar">
                            <li><a href="#">Usuarios</a></li>
                            <li><a href="#">Permisos</a></li>
                            <li><a href="#">Indicadores</a></li>
                            <li><a href="#">Valores</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
