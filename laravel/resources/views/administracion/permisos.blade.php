@extends('layouts.user_type.auth')

@section('content')
    <h5>Administración <i class="fas fa-caret-right"></i> Permisos</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card mb-2 cartacolor p-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <!-- SELECCIONAR USUARIO -->
                    <div class="d-flex flex-row justify-content-between pb-3">
                        <select id="usuario" class="form-select p-1 me-2" aria-label="Seleccione Usuario">
                            <option selected>Seleccione Usuario</option>
                            <option value="cliente1">Usuario 1</option>
                            <option value="cliente2">Usuario 2</option>
                            <option value="cliente3">Usuario 3</option>
                            <option value="cliente4">Usuario 4</option>
                        </select>
                        <a href="{{ url('#') }}"
                            class="btn bg-gradient-primary btn-sm mb-0 px-4 py-2 {{ Request::is('#') ?: '' }} justify-content-end"
                            type="button">Guardar Cambios</a>
                    </div>
                    <!-- INICIO TABLA PERMISOS---
                        ----------------------------->
                    <div class="table-responsive p-0">
                        <table class="table align-items-center table-striped table-hover mb-0">
                            <!-- TITULOS TABLA -->
                            <thead class="colortabla">
                                <tr>
                                    <th class=" text-left text-uppercase text-black text-xxs font-weight-bolder ps-2">
                                        Menu
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Aplicacion
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Ver
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Inserta
                                    </th>

                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Modifica
                                    </th>

                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Elimina
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- INICIO ITEM 1 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">Comercial</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Clientes</p>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 2 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">Comercial</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Cotizaciones</p>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 3 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">Operaciones</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Proyectos</p>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 4 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">Finanzas</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Fechas de pago</p>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 5 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">Informes</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Rentailidad</p>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
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
