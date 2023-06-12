@extends('layouts.user_type.auth')

@section('content')
    <h5>RRHH <i class="fas fa-caret-right"></i> Ficha personal trabajador</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card mb-2 cartacolor p-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="d-flex flex-row pb-3">
                        <input id="buscar" type="search" placeholder="Buscar Cliente"
                            class="form-control1 my-2 py-1">
                        <span class="py-1 px-2 my-2">
                            <i class="fas fa-search"></i>
                        </span>
                        <a href="{{ url('formulario-ftrabajador') }}"
                            class="btn bg-gradient-primary btn-sm m-2 px-4 justify-content-end{{ Request::is('formulario-ftrabajador') ?: '' }} justify-content-end"
                            type="button">Nuevo
                        </a>
                    </div>
                    <!-- INICIO TABLA FICHA PERSONAL TRABAJADOR--- 
                    ---------------------------------------------->
                    <div class="table-responsive">
                        <table class="table align-items-center table-striped table-hover mb-0 " width="100%">
                            <!-- TITULOS TABLA -->
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
                                <!-- INICIO ITEM 1 -->
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
                                        <a href="{{ url('formulario-ftrabajador') }}"
                                            class="{{ Request::is('formulario-ftrabajador') ?: '' }}"
                                            type="">
                                            <i class="fas fa-user"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 2 -->
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
                                        <a href="{{ url('formulario-ftrabajador') }}"
                                            class="{{ Request::is('formulario-ftrabajador') ?: '' }}"
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
    </main>
@endsection
