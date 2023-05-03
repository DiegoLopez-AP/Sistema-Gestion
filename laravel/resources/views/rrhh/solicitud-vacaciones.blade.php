@extends('layouts.user_type.auth')

@section('content')
    <h5 class="m-2">RRHH/Solicitud de Vacaciones</h5>
    <div class="row">
        <div class="col-12">
            <div class="card mb-2 mx-2 cartacolor p-5">
                <div class="card-header mb-1">
                    <div class="d-flex flex-row">
                        <h5>Informe Solicitud de Vacaciones</h5>
                    </div>

                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center table-striped table-hover mb-0 " width="100%">
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

                                        <!-- Modal -->
                                        <div class="modal fade" id="vacaciones" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl" role="dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modulo solicitud de
                                                            vacaciones</h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5 class="m-2"></h5>
                                                        <form class="form p-0" action="#" method="post">
                                                            <div class="form-register_body">
                                                                <div class="paso active" id="paso-1">
                                                                    <div class="paso_header p-3">
                                                                        <h4 class="paso_title tit-vaca">Control Solicitud
                                                                            Vacaciones</h4>
                                                                        <p class="des-vaca">Para empleados con más de un
                                                                            contrato activo, debe repetir operación para
                                                                            todos los contratos del empleado.</p>
                                                                    </div>
                                                                    <div class="datos p-2">
                                                                        <h6>ID: </h6>
                                                                        <h6>RUT: </h6>
                                                                        <h6>NOMBRE: </h6>
                                                                    </div>
                                                                    <div class="paso_body">

                                                                        <div class="row p-3">
                                                                            <div class="col-md-6">
                                                                                <label class="form__label"
                                                                                    for="">Fecha de Ingreso</label>
                                                                                <input type="date" id="start"
                                                                                    name="trip-start" class="form-control">
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="form__label"
                                                                                    for="">Fecha de
                                                                                    Solicitud</label>
                                                                                <input type="date" id="start"
                                                                                    name="trip-start" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        {{-- SUBTITULOS --}}
                                                                        <div class="d-habiles py-1 my-2">
                                                                            <h5 class="">Días Hábiles</h5>
                                                                        </div>

                                                                        <div class="row mt-2 p-3">
                                                                            <div class="col-md-4">
                                                                                <label class="form__label"
                                                                                    for="">Días hábiles ganados
                                                                                    acumulados</label>
                                                                                <input class="form__input" type="number"
                                                                                    id="dg-acumulados" name="dg-acumulados">
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="form__label"
                                                                                    for="">(-) Días progresivos
                                                                                    tomados acumulados</label>
                                                                                <input class="form__input" type="number"
                                                                                    id="dp-acumulados" name="nombre">
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="form__label"
                                                                                    for="">Días progresivos
                                                                                    disponibles</label>
                                                                                <input class="form__input" type="number"
                                                                                    id="dp-dispo" name="dp-dispo">
                                                                            </div>

                                                                        </div>
                                                                        {{-- SUBTITULOS --}}
                                                                        <div class="d-habiles py-1 my-2">
                                                                            <h5 class="">Saldos Acumulados</h5>
                                                                        </div>

                                                                        <div class="row mt-2 p-3">
                                                                            <div class="col-md-6">
                                                                                <label class="form__label"
                                                                                    for="">Periodos
                                                                                    Acumulados</label>
                                                                                <input class="form__input" type="number"
                                                                                    id="per-acumulado"
                                                                                    name="per-acumulado">
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <label class="form__label"
                                                                                    for="">Saldo de días
                                                                                    acumulados</label>
                                                                                <input class="form__input" type="number"
                                                                                    id="saldo-acum" name="saldo-acum">
                                                                            </div>
                                                                        </div>
                                                                        {{-- SUBTITULOS --}}
                                                                        <div class="d-habiles py-1 my-2">
                                                                            <h5 class="">Solicitud</h5>
                                                                        </div>

                                                                        <div class="row mt-2 p-3">
                                                                            <div class="col-md-3">
                                                                                <label class="form__label"
                                                                                    for="">N°Comprobante</label>
                                                                                <input class="form__input" type="number"
                                                                                    id="n-comprobante"
                                                                                    name="n-comprobante">
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="form__label"
                                                                                    for="">Fecha Inicio</label>
                                                                                <input type="date" id="start"
                                                                                    name="trip-start"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="form__label"
                                                                                    for="">Fecha Termino</label>
                                                                                <input type="date" id="start"
                                                                                    name="trip-start"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row px-3 pb-3">
                                                                            <div class="col-md-4">
                                                                                <label class="form__label"
                                                                                    for="">Días Hábiles</label>
                                                                                <input class="form__input" type="number"
                                                                                    id="d-habil" name="d-habil">
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="form__label"
                                                                                    for="">Días Inhábiles</label>
                                                                                <input class="form__input" type="number"
                                                                                    id="d-inhabil" name="d-inhabil">
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="form__label"
                                                                                    for="">Días Progresivos
                                                                                    (hábiles)</label>
                                                                                <input class="form__input" type="number"
                                                                                    id="d-habil" name="d-habil">
                                                                            </div>

                                                                        </div>
                                                                        <div class="row px-3 pb-3">
                                                                            <div class="col-md-12">
                                                                                <label class="form__label"
                                                                                    for="">Saldo Final</label>
                                                                                <input class="form__input" type="number"
                                                                                    id="sal-final" name="sal-final">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cerrar</button>
                                                        <button type="button" class="btn btn-primary">Guardar
                                                            Cambios</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
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
    </div>
@endsection
