@extends('layouts.user_type.auth')

@section('content')
    <h5>RRHH <i class="fas fa-caret-right"></i> Aprob/Rech Vacaciones</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card mb-2 cartacolor p-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="d-flex flex-row pb-3">
                        <input id="buscar" type="search" placeholder="Buscar Cliente" class="form-control1 my-2 py-1">
                        <span class="py-1 px-2 my-2">
                            <i class="fas fa-search"></i>
                        </span>
                        <a href="{{ url('#') }}"
                            class="btn bg-gradient-primary btn-sm m-2 px-4 {{ Request::is('#') ?: '' }}"
                            type="button">Guardar Cambios
                        </a>
                    </div>
                    <!-- INICIO TABLA APROB/RECH VACACIONES--- 
                    ---------------------------->
                    <div class="table-responsive">
                        <table class="table align-items-center table-striped table-hover mb-0 " width="100%">
                            <!-- TITULOS TABLA -->
                            <thead class="colortabla">
                                <tr class="colorletratabla">
                                    <th class="text-uppercase text-white text-xxs font-weight-bolder ps-2">
                                        Nombre
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Fecha Inicio
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Feha Termino
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Fecha Reintegro
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Dias
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Aprobar
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Rechazar
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- INICIO ITEM 1 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">JUAN DANIEL BARRERA CARRASCO</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">27/10/2014</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">30/10/2014</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">31/10/2014</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">4</p>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something">
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 2 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">MARCELA ALICIA VARGAS TRONCOSO</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">17/03/2015</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">17/03/2015</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">18/03/2015</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">1</p>
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
                                        <p class="text-xs font-weight-bold mb-0">MARÍA INÉS REIMAN INZUNZA</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">23/03/2015</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">23/03/2015</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">24/03/2015</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">1</p>
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
                                        <p class="text-xs font-weight-bold mb-0">JONATHAN ALFREDO VALENZUELA TORRES</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">06/04/2015</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">20/04/2015</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">21/04/2015</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">11</p>
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
                                        <p class="text-xs font-weight-bold mb-0">ARIEL EDUARDO CARO INOSTROZA</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">06/02/2017</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">10/02/2017</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">13/02/2017</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">5</p>
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
