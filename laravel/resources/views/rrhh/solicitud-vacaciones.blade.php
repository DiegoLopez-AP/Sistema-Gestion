@extends('layouts.user_type.auth')

@section('content')
    <h3 class="m-2">RRHH/Solicitud de Vacaciones</h3>
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
                                            data-bs-target="#vacaciones" type=""><i class="fa fa-user"></i>
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="vacaciones" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl" role="dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modulo solicitud de vacaciones</h5>
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
                                                                        <h4 class="paso_title tit-vaca">Control Solicitud Vacaciones</h4>
                                                                        <p class="des-vaca">Para empleados con más de un contrato activo, debe repetir operación para todos los contratos del empleado</p>
                                                                    </div>
                                                                    <div class="datos p-2">
                                                                        <h6 class="text-black-50">ID: </h6>
                                                                        <h6 class="text-black-50">RUT: </h6>
                                                                        <h6 class="text-black-50">NOMBRE: </h6>
                                                                    </div>
                                                                    <div class="paso_body p-3">
                                                                        
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <label class="form__label"
                                                                                    for="">Cod. Trabajador</label>
                                                                                <input class="form__input" type="text"
                                                                                    id="cod-trabajador"
                                                                                    name="cod-trabajador">
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="form__label"
                                                                                    for="">Vigencia</label>
                                                                                <select class="form-select" name="vigencia"
                                                                                    id="vigencia">
                                                                                    {{-- <option value="0">seleccione vigencia</option> --}}
                                                                                    <option value="1">Vigente</option>
                                                                                    <option value="2">No Vigente
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-md-3">
                                                                                <label class="form__label"
                                                                                    for="">Nombre</label>
                                                                                <input class="form__input" type="text"
                                                                                    id="cod-trabajador"
                                                                                    name="cod-trabajador">
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="form__label"
                                                                                    for="">Ap. Paterno</label>
                                                                                <input class="form__input" type="text"
                                                                                    id="nombre" name="nombre">
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="form__label"
                                                                                    for="">Ap. Materno</label>
                                                                                <input class="form__input" type="text"
                                                                                    id="nombre" name="nombre">
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="form__label"
                                                                                    for="">Rut</label>
                                                                                <input class="form__input" type="text"
                                                                                    id="rut" name="rut">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mt-2">
                                                                            <div class="col-md-3">
                                                                                <label class="form__label"
                                                                                    for="">Fecha de Nacimiento <i
                                                                                        class="fa fa-calendar"></i></label>
                                                                                <input class="form__input" type="text"
                                                                                    id="datepicker">
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="form__label"
                                                                                    for="">Dirección</label>
                                                                                <input class="form__input" type="text"
                                                                                    id="nombre" name="nombre">
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="form__label"
                                                                                    for="">Comuna</label>
                                                                                <select class="form-select"
                                                                                    name="vigencia" id="vigencia">
                                                                                    <option value="0">Seleccione
                                                                                        comuna</option>
                                                                                    <option value="1">Comuna 1
                                                                                    </option>
                                                                                    <option value="2">Comuna 2
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="form__label"
                                                                                    for="">Ciudad</label>
                                                                                <input class="form__input" type="text"
                                                                                    id="rut" name="rut">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mt-2">
                                                                            <div class="col-md-3">
                                                                                <label class="form__label"
                                                                                    for="">Fono Particular</label>
                                                                                <input size="16" type="number"
                                                                                    class="form-control" id="fono-parti">
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="form__label"
                                                                                    for="">Celular</label>
                                                                                <input class="form__input" type="number"
                                                                                    id="celular" name="celular">
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="form__label"
                                                                                    for="">Estado Civil</label>
                                                                                <input class="form__input" type="text"
                                                                                    id="e-civil" name="e-civil">
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="form__label"
                                                                                    for="">Nacionalidad</label>
                                                                                <input class="form__input" type="text"
                                                                                    id="nacionalidad" name="nacionalidad">
                                                                            </div>
                                                                        </div>

                                                                        <div class="paso_footer">
                                                                            {{-- <button class="btn btn-danger volver-pag1 volver">Volver</button> --}}
                                                                            <button type="button"
                                                                                class=" btn btn-secondary step_button step_button--next mt-4 px-4"
                                                                                data-to_step="2"
                                                                                data-step="1">Siguiente</button>
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
