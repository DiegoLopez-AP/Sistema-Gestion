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
            <a class="" href="{{ route('dashboard') }}">
                <i class="fas fa-tachometer-alt"></i>
                <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
                <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}"><a class="link_name" href="{{ route('dashboard') }}">Dashboard</a></li>
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
                <li class="text-white">Comercial</li>
                <li class="{{ (request()->is('indicador-com')) ? 'active' : '' }}"><a href="{{ route('indicador-com') }}">Indicadores</a></li>
                <li class="{{ (request()->is('preventa')) ? 'active' : '' }}"><a href="{{ route('preventa') }}">Preventa</a></li>
                <li class="{{ (request()->is('cotizaciones')) ? 'active' : '' }}"><a href="{{ route('cotizaciones') }}">Cotizaciones</a></li>
                <li class="{{ (request()->is('clientes')) ? 'active' : '' }}"><a href="{{ route('clientes') }}">Clientes</a></li>
                <li class="{{ (request()->is('contactos')) ? 'active' : '' }}"><a href="{{ route('contactos') }}">Contactos</a></li>
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
                <li class="text-white">Operaciones</li>
                <li class="{{ (request()->is('indicador-op')) ? 'active' : '' }}"><a href="{{ route('indicador-op') }}">Indicadores</a></li>
                <li class="{{ (request()->is('proyectos')) ? 'active' : '' }}"><a href="{{ route('proyectos') }}">Proyectos</a></li>
                <li class="{{ (request()->is('costos')) ? 'active' : '' }}"><a href="{{ route('costos') }}">Costos</a></li>
                <li class="{{ (request()->is('carta-gantt')) ? 'active' : '' }}"><a href="{{ route('carta-gantt') }}">Cartas gantt</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class="fas fa-coins"></i>
                    <span class="link_name ps-1">Finanzas</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu wrapper">
                <li class="text-white">Finanzas</li>
                <li class="{{ (request()->is('indicador-fin')) ? 'active' : '' }}"><a href="{{ route('indicador-fin') }}">Indicadores</a></li>
                <li class="{{ (request()->is('fechas-pago')) ? 'active' : '' }}"><a href="{{ route('fechas-pago') }}">Fechas de pago</a></li>
                <li class="{{ (request()->is('facturacion')) ? 'active' : '' }}"><a href="{{ route('facturacion') }}">Facturación</a></li>
                <li class="{{ (request()->is('proveedores')) ? 'active' : '' }}"><a href="{{ route('proveedores') }}">Proveedores</a></li>
                <li class="{{ (request()->is('flujo-caja')) ? 'active' : '' }}"><a href="{{ route('flujo-caja') }}">Flujos de caja</a></li>
                <li class="{{ (request()->is('orden-compra-cli')) ? 'active' : '' }}"><a href="{{ route('orden-compra-cli') }}">OC Clientes</a></li>
                <li class="{{ (request()->is('orden-compra-int')) ? 'active' : '' }}"><a href="{{ route('orden-compra-int') }}">OC Internas</a></li>
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
                <li class="text-white">RRHH</li>
                <li class="{{ (request()->is('indicador-rrhh')) ? 'active' : '' }}"><a href="{{ route('indicador-rrhh') }}">Indicadores</a></li>
                <li class="{{ (request()->is('ficha-ptrabajador')) ? 'active' : '' }}"><a href="{{ route('ficha-ptrabajador') }}">Ficha trabajador</a></li>
                <li class="{{ (request()->is('ap-rech-vaca')) ? 'active' : '' }}"><a href="{{ route('ap-rech-vaca') }}">Apr.Rech.Vacaciones</a></li>
                <li class="{{ (request()->is('curriculum')) ? 'active' : '' }}"><a href="{{ route('curriculum') }}">Curriculum</a></li>
                <li class="{{ (request()->is('solicitud-vacaciones')) ? 'active' : '' }}"><a href="{{ route('solicitud-vacaciones') }}">Solicitud de Vacaciones</a></li>
                <li class="{{ (request()->is('evaluacion-desemp')) ? 'active' : '' }}"><a href="{{ route('evaluacion-desemp') }}">Evaluación de Desempeño</a></li>
                <li class="{{ (request()->is('organigrama')) ? 'active' : '' }}"><a href="{{ route('organigrama') }}">Organigrama</a></li>
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
                <li class="text-white">Informes</li>
                <li class="{{ (request()->is('indicador-inf')) ? 'active' : '' }}" ><a href="{{ route('indicador-inf') }}">Indicadores</a></li>
                <li class="{{ (request()->is('rentabilidad')) ? 'active' : '' }}"><a href="{{ route('rentabilidad') }}">Rentabilidad</a></li>
                <li class="{{ (request()->is('capacites')) ? 'active' : '' }}"><a href="{{ route('capacites') }}">Capacites</a></li>
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
                <li class="text-white">Administración</li>
                <li class="{{ (request()->is('usuarios')) ? 'active' : '' }}"><a href="{{ route('usuarios') }}">Usuarios</a></li>
                <li class="{{ (request()->is('permisos')) ? 'active' : '' }}"><a href="{{ route('permisos') }}">Permisos</a></li>
                <li class="{{ (request()->is('indicadores-adm')) ? 'active' : '' }}"><a href="{{ route('indicadores-adm') }}">Indicadores</a></li>
                <li class="{{ (request()->is('valores')) ? 'active' : '' }}"><a href="{{ route('valores') }}">Valores</a></li>
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
                <li class="text-white">Editar</li>
            </ul>
        </li>
    </ul>
</aside>

<!-- SCRIPT ------------
------------------------>

