@extends('layouts.user_type.auth')

@section('content')
    <h5>RRHH <i class="fas fa-caret-right"></i> Solicitud de Vacaciones</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card mb-2 cartacolor p-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="d-flex flex-row pb-2">
                        <h5>Informe Solicitud de Vacaciones</h5>
                    </div>
                    <!-- INICIO TABLA SOLICITUD VACACIONES---
                            ----------------------------------------->
                    <div class="table-responsive">
                        <table class="table align-items-center table-striped table-hover mb-0 " width="100%">
                            <!-- TITULOS TABLA -->
                            <thead class="colortabla">
                                <tr class="colorletratabla">
                                    <th class="text-uppercase text-white text-xxs font-weight-bolder ps-2">
                                        N°Comprobante
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Periodo Gen.
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Feha Término
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Días hábiles
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Días inhábiles
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Días Progresivos
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Total Días
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Estado
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Comprobante
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- INICIO ITEM 1 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">3</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">112021</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">07/01/2022</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">10</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">2</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">0</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">12</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Aprobada</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('#') }}" class="" data-bs-toggle="modal"
                                            data-bs-target="#vacaciones" type=""><i class="fas fa-file-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 2 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 3 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 4 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 5 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- MODALS -----
        ------------------>

    <!-- MODAL COMPROBANTE SOLICITUD -->
    <div class="modal fade" id="vacaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="dialog">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Modulo solicitud de
                        vacaciones</h5>
                    <button type="button" class="btn-close cerrar-modal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <h5 class="m-2"></h5>
                    <form class="form p-0 bg-white" action="#" method="post">
                        <div class="form-register_body">
                            <div class="paso active" id="paso-1">
                                <!-- TITULOS -->
                                <div class="paso_header p-3">
                                    <h4 class="paso_title tit-vaca text-dark">Control Solicitud
                                        Vacaciones</h4>
                                    <p class="des-vaca">Para empleados con más de un
                                        contrato activo, debe repetir operación para
                                        todos los contratos del empleado.</p>
                                </div>
                                <!-- DATOS PERSONALES -->
                                <div class="row ps-2">
                                    <div class="col-md-4">
                                        <label class="form-label" for="">ID: <span></span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="">Rut: <span></span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="">Nombre: <span></span></label>
                                    </div>
                                </div>
                                <hr>
                                <div class="paso_body text-start">
                                    <!-- FECHAS INGRESO Y SOLICITUD -->
                                    <div class="row p-3">
                                        <div class="col-md-6">
                                            <label class="form-label" for="">Fecha de Ingreso</label>
                                            <input type="date" id="start" name="trip-start" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="">Fecha de
                                                Solicitud</label>
                                            <input type="date" id="start" name="trip-start" class="form-control">
                                        </div>
                                    </div>
                                    <!-- DIAS HABILES -->
                                    <div class="d-habiles py-1 pt-2 my-2 bg-light">
                                        <h6 class="text-dark fw-bold text-start ps-2">Días Hábiles</h6>
                                    </div>
                                    <div class="row mt-2 p-3">
                                        <div class="col-md-4">
                                            <label class="form-label" for="">Días hábiles ganados
                                                acumulados</label>
                                            <input class="form-control" type="number" id="dg-acumulados"
                                                name="dg-acumulados">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="">(-) Días progresivos
                                                tomados acumulados</label>
                                            <input class="form-control" type="number" id="dp-acumulados"
                                                name="nombre">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="">Días progresivos
                                                disponibles</label>
                                            <input class="form-control" type="number" id="dp-dispo" name="dp-dispo">
                                        </div>
                                    </div>
                                    <!-- SALDOS ACUMULADOS -->
                                    <div class="d-habiles py-1 pt-2 my-2 bg-light">
                                        <h6 class="text-dark fw-bold text-start ps-2">Saldos Acumulados</h6>
                                    </div>
                                    <div class="row mt-2 p-3">
                                        <div class="col-md-6">
                                            <label class="form-label" for="">Periodos
                                                Acumulados</label>
                                            <input class="form-control" type="number" id="per-acumulado"
                                                name="per-acumulado">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="">Saldo de días
                                                acumulados</label>
                                            <input class="form-control" type="number" id="saldo-acum" name="saldo-acum">
                                        </div>
                                    </div>
                                    <!-- SOLICITUD -->
                                    <div class="d-habiles py-1 pt-2 my-2 bg-light">
                                        <h6 class="text-dark fw-bold text-start ps-2">Solicitud</h6>
                                    </div>
                                    <div class="row mt-2 p-3">
                                        <div class="col-md-4">
                                            <label class="form-label" for="">N°Comprobante</label>
                                            <input class="form-control" type="number" id="n-comprobante"
                                                name="n-comprobante">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="">Fecha Inicio</label>
                                            <input type="date" id="start" name="trip-start" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="">Fecha Termino</label>
                                            <input type="date" id="start" name="trip-start" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row px-3 pb-3">
                                        <div class="col-md-4">
                                            <label class="form-label" for="">Días Hábiles</label>
                                            <input class="form-control" type="number" id="d-habil" name="d-habil">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="">Días Inhábiles</label>
                                            <input class="form-control" type="number" id="d-inhabil" name="d-inhabil">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="">Días Progresivos
                                                (hábiles)</label>
                                            <input class="form-control" type="number" id="d-habil" name="d-habil">
                                        </div>
                                    </div>
                                    <div class="row px-3 pb-3">
                                        <div class="col-md-12">
                                            <label class="form-label" for="">Saldo Final</label>
                                            <input class="form-control" type="number" id="sal-final" name="sal-final">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn bg-gradient-primary">Guardar
                        Cambios</button>
                </div>
            </div>
        </div>
    </div>
@endsection
