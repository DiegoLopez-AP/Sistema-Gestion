<head>
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<aside class="sidebar close bg-fondo">
    <div class="logo-details px-3 pt-2">
        <img src="../assets/img/iso_logo.png" alt="">
        <img class="logo_name" src="../assets/img/texto_logo.png" alt="">
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{ route('dashboard') }}">
                <i class="fas fa-tachometer-alt"></i>
                <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Dashboard</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class="fas fa-business-time"></i>
                    <span class="link_name">Comercial</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Comercial</a></li>
                <li><a class="active" href="{{ route('indicador-com') }}">Indicadores</a></li>
                <li><a href="{{ route('preventa') }}">Preventa</a></li>
                <li><a href="{{ route('cotizaciones') }}">Cotizaciones</a></li>
                <li><a href="{{ route('clientes') }}">Clientes</a></li>
                <li><a href="{{ route('contactos') }}">Contactos</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class="fas fa-cogs"></i>
                    <span class="link_name">Operaciones</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu wrapper">
                <li><a class="link_name" href="#">Operaciones</a></li>
                <li><a href="{{ route('indicador-op') }}">Indicadores</a></li>
                <li><a href="{{ route('proyectos') }}">Proyectos</a></li>
                <li><a href="{{ route('costos') }}">Costos</a></li>
                <li><a href="{{ route('carta-gantt') }}">Cartas gantt</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class="fas fa-coins"></i>
                    <span class="link_name">Finanzas</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu wrapper">
                <li><a class="link_name" href="#">Finanzas</a></li>
                <li><a href="{{ route('indicador-fin') }}">Indicadores</a></li>
                <li><a href="{{ route('fechas-pago') }}">Fechas de pago</a></li>
                <li><a href="{{ route('facturacion') }}">Facturación</a></li>
                <li><a href="{{ route('proveedores') }}">Proveedores</a></li>
                <li><a href="{{ route('flujo-caja') }}">Flujos de caja</a></li>
                <li><a href="{{ route('orden-compra-cli') }}">Ordenes de compra Clientes</a></li>
                <li><a href="{{ route('orden-compra-int') }}">Ordenes de compra Internas</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class="fas fa-user-friends"></i>
                    <span class="link_name">RRHH</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu wrapper">
                <li><a class="link_name" href="#">RRHH</a></li>
                <li><a href="{{ route('indicador-rrhh') }}">Indicadores</a></li>
                <li><a href="{{ route('ficha-ptrabajador') }}">Ficha trabajador</a></li>
                <li><a href="{{ route('ap-rech-vaca') }}">Apr.Rech.Vacaciones</a></li>
                <li><a href="{{ route('curriculum') }}">Curriculum</a></li>
                <li><a href="{{ route('solicitud-vacaciones') }}">Solicitud de Vacaciones</a></li>
                <li><a href="{{ route('evaluacion-desemp') }}">Evaluación de Desempeño</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class="fas fa-chart-pie"></i>
                    <span class="link_name">Informes</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu wrapper">
                <li><a class="link_name" href="#">Informes</a></li>
                <li><a href="{{ route('indicador-inf') }}">Indicadores</a></li>
                <li><a href="{{ route('rentabilidad') }}">Rentabilidad</a></li>
                <li><a href="{{ route('capacites') }}">Capacites</a></li>
            </ul>
        </li>
        <hr class="horizontal light mt-3">
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class="fas fa-tools"></i>
                    <span class="link_name">Administración</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu wrapper">
                <li><a class="link_name" href="#">Administración</a></li>
                <li><a href="{{ route('usuarios') }}">Usuarios</a></li>
                <li><a href="{{ route('permisos') }}">Permisos</a></li>
                <li><a href="{{ route('indicadores-adm') }}">Indicadores</a></li>
                <li><a href="{{ route('valores') }}">Valores</a></li>
                <li><a href="{{ route('charts') }}">Graficos</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class="fas fa-brush"></i>
                    <span class="link_name">Editar</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu wrapper blank">
                <li><a class="link_name" href="#">Editar</a></li>
            </ul>
        </li>
    </ul>
</aside>
