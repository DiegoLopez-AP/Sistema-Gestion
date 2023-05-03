@extends('layouts.user_type.auth')

@section('content')
    <h5 class="m-2">RRHH/Ficha personal trabajador</h5>
    <div class="row">
        <div class="col-12">
            <div class="card mb-2 mx-2 cartacolor p-5">
                <div class="card-header mb-1">
                    <div class="d-flex flex-row">

                        <input id="buscar" type="search" placeholder="Buscar Cliente" class="form-control1 my-2 py-1">
                        <span class="py-1 px-2 my-2">
                            <i class="fas fa-search"></i>
                        </span>
                        <a href="{{ url('formulario-ftrabajador') }}"
                            class="btn bg-gradient-primary btn-sm m-2 px-4 justify-content-end{{ Request::is('formulario-ftrabajador') ?: '' }} justify-content-end"
                            type="button">Nuevo
                        </a>

                    </div>

                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center table-striped table-hover mb-0 " width="100%">
                            <thead class="colortabla">
                                <tr class="colorletratabla">
                                    <th class="text-uppercase text-white text-xxs font-weight-bolder ps-2">
                                        Nombre
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Rut
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        F.Contrato
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Celular
                                    </th>

                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Mail
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Cargo
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Vigencia
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Acción
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">ACEVEDO FLORES MIGUEL ANGEL</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">10.253.468-9</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">01/09/2019</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">978251502</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">m.acevedoflores@yahoo.com</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Digitador Junior</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Vigente</p>
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ url('formulario-ftrabajador') }}" class="{{ Request::is('formulario-ftrabajador') ?: '' }}" 
                                             type="">
                                            <i class="fas fa-user"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">96.839.120-8</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">U.F</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">30</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">ALQUIMIA S.A</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Alquimia S.A</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Doctor Garcia<br> Guerrero 1192</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Servicios<br>, Industria, Quimíca</p>
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ url('formulario-ftrabajador') }}" class="{{ Request::is('formulario-ftrabajador') ?: '' }}" 
                                             type="">
                                            <i class="fas fa-user"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">89.121.400-6</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">U.F</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">30</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">ALUMINIOS EL <br> ROBLE</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Aluminios El Roble</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">El Roble 0242</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Manufactura</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('formulario-ftrabajador') }}" class="{{ Request::is('formulario-ftrabajador') ?: '' }}" 
                                             type="">
                                            <i class="fas fa-user"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">96.612.400-8</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">U.F</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">30</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">ANGUITA COMERCIAL <br> DIPLAS</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Anguita Comercial <br> Diplas</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Av. Matta #1150</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Manufactura <br> Industria</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('formulario-ftrabajador') }}" class="{{ Request::is('formulario-ftrabajador') ?: '' }}" 
                                             type="">
                                            <i class="fas fa-user"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">78.122.390-5</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">U.F</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">30</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">ARREQUIP</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Arrequip</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Nataniel Cox <br>1607</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Servicio <br> Construcción</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('formulario-ftrabajador') }}" class="{{ Request::is('formulario-ftrabajador') ?: '' }}" 
                                             type="">
                                            <i class="fas fa-user"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
