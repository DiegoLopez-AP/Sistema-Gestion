@extends('layouts.user_type.auth')

@section('content')
    <div class="container">
        <h5 class="m-2">Ficha personal trabajador</h5>
        <form class="form" action="#" method="post">


            <div class="form-register_body">
                <div class="paso active" id="paso-1">
                    <div class="paso_header">
                        <h4 class="paso_title">Información personal</h4>
                    </div>
                    <div class="paso_body">
                        <div class="step active" id="paso-1">

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form__label" for="">Cod. Trabajador</label>
                                <input class="form__input" type="text" id="cod-trabajador" name="cod-trabajador">
                            </div>
                            <div class="col-md-3">
                                <label class="form__label" for="">Vigencia</label>
                                <select class="form-select" name="vigencia" id="vigencia">
                                    {{-- <option value="0">seleccione vigencia</option> --}}
                                    <option value="1">Vigente</option>
                                    <option value="2">No Vigente</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <label class="form__label" for="">Nombre</label>
                                <input class="form__input" type="text" id="cod-trabajador" name="cod-trabajador">
                            </div>
                            <div class="col-md-3">
                                <label class="form__label" for="">Ap. Paterno</label>
                                <input class="form__input" type="text" id="nombre" name="nombre">
                            </div>
                            <div class="col-md-3">
                                <label class="form__label" for="">Ap. Materno</label>
                                <input class="form__input" type="text" id="nombre" name="nombre">
                            </div>
                            <div class="col-md-3">
                                <label class="form__label" for="">Rut</label>
                                <input class="form__input" type="text" id="rut" name="rut">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-3">
                                <label class="form__label" for="">Fecha de Nacimiento <i
                                        class="fa fa-calendar"></i></label>
                                <input class="form__input" type="text" id="datepicker">
                            </div>
                            <div class="col-md-3">
                                <label class="form__label" for="">Dirección</label>
                                <input class="form__input" type="text" id="nombre" name="nombre">
                            </div>
                            <div class="col-md-3">
                                <label class="form__label" for="">Comuna</label>
                                <select class="form-select" name="vigencia" id="vigencia">
                                    <option value="0">Seleccione comuna</option>
                                    <option value="1">Comuna 1</option>
                                    <option value="2">Comuna 2</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form__label" for="">Ciudad</label>
                                <input class="form__input" type="text" id="rut" name="rut">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-3">
                                <label class="form__label" for="">Fono Particular</label>
                                <input size="16" type="number" class="form-control" id="fono-parti">
                            </div>
                            <div class="col-md-3">
                                <label class="form__label" for="">Celular</label>
                                <input class="form__input" type="number" id="celular" name="celular">
                            </div>
                            <div class="col-md-3">
                                <label class="form__label" for="">Estado Civil</label>
                                <input class="form__input" type="text" id="e-civil" name="e-civil">
                            </div>
                            <div class="col-md-3">
                                <label class="form__label" for="">Nacionalidad</label>
                                <input class="form__input" type="text" id="nacionalidad" name="nacionalidad">
                            </div>
                        </div>

                        <div class="paso_footer">
                            {{-- <button class="btn btn-danger volver-pag1 volver">Volver</button> --}}
                            <button type="button" class=" btn btn-secondary step_button step_button--next mt-4 px-4"
                                data-to_step="2" data-step="1">Siguiente</button>
                        </div>
                    </div>
                </div>

                <div class="paso" id="paso-2">
                    <div class="paso_header">
                        <h4 class="paso_title">Información trabajador</h4>
                    </div>
                    <div class="paso_body">
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <label class="form__label" for="">Cargo</label>
                                <input size="16" type="text" class="form-control" id="cargo">
                            </div>
                            <div class="col-md-3">
                                <label class="form__label" for="">Gerencia o Unidad</label>
                                <input class="form__input" type="text" id="gerencia" name="gerencia">
                            </div>
                            <div class="col-md-3">
                                <label class="form__label" for="">F. Contrato Inicio <i
                                        class="fa fa-calendar"></i></label>
                                <input class="form__input" type="text" id="datepicker">
                            </div>
                            <div class="col-md-3">
                                <label class="form__label" for="">F. Contrato Término<i
                                        class="fa fa-calendar"></i></label>
                                <input class="form__input" type="text" id="datepicker">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label class="form__label" for="">AFP</label>
                                <select class="form-select" name="vigencia" id="vigencia">
                                    <option value="0">Seleccione</option>
                                    <option value="1">Valor 1</option>
                                    <option value="2">Valor 2</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form__label" for="">Salud</label>
                                <select class="form-select" name="vigencia" id="vigencia">
                                    <option value="0">Seleccione</option>
                                    <option value="1">Valor 1</option>
                                    <option value="2">Valor 2</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form__label" for="">N° de Cuenta</label>
                                <input class="form__input" type="text" id="e-civil" name="e-civil">
                            </div>
                            <div class="col-md-2">
                                <label class="form__label" for="">Tipo Cuenta</label>
                                <select class="form-select" name="vigencia" id="vigencia">
                                    <option value="0">Seleccione</option>
                                    <option value="1">Valor 1</option>
                                    <option value="2">Valor 2</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form__label" for="">Banco</label>
                                <select class="form-select" name="vigencia" id="vigencia">
                                    <option value="0">Seleccione</option>
                                    <option value="1">Valor 1</option>
                                    <option value="2">Valor 2</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label class="form__label" for="">Seguro Cesantía</label>
                                <select class="form-select" name="s-cesantia" id="s-cesantia">
                                    <option value="0">Seleccione</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form__label" for="">Fecha 1° Cot.AFP <i
                                        class="fa fa-calendar"></i></label>
                                <input class="form__input" type="text" id="datepicker">
                            </div>
                            <div class="col-md-4">
                                <label class="form__label" for="">Mail G-talent</label>
                                <input class="form__input" type="text" id="m-gtalent" name="m-gtalent">
                            </div>
                            <div class="col-md-4">
                                <label class="form__label" for="">Mail Personal</label>
                                <input class="form__input" type="text" id="m-personal" name="m-personal">
                            </div>

                        </div>
                    </div>
                    <div class="paso_footer">
                        <button type="button" class="btn btn-danger mt-4 px-4" data-to_step="1"
                            data-step="2">Regresar</button>
                        <button type="button" class=" btn btn-secondary mt-4 px-4" data-to_step="2"
                            data-step="1">Siguiente</button>
                        {{-- <button type="submit" class="step_button mt-4 px-4">Crear</button> --}}
                    </div>
                </div>

                <div class="paso" id="paso-3">
                    <div class="paso_header">
                        <h4 class="paso_title">Emergencias</h4>
                    </div>
                    <div class="paso_body">
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label class="form__label" for="">Avisar a</label>
                                <input size="16" type="text" class="form__input" id="aviso">
                            </div>
                            <div class="col-md-4">
                                <label class="form__label" for="">Parentesco</label>
                                <input class="form__input" type="text" id="parentesco" name="parentesco">
                            </div>
                            <div class="col-md-4">
                                <label class="form__label" for="">Fono Emergencia</label>
                                <input class="form__input" type="text" id="parentesco" name="parentesco">
                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="formFile" class="form__label">Foto</label>
                                <input class="form-control" type="file" id="foto-eme">
                            </div>
                        </div>

                        <div class="paso_footer">
                            <button type="button" class="btn btn-danger mt-4 px-4" data-to_step="1"
                                data-step="2">Regresar</button>
                            <button type="button" class=" btn btn-secondary mt-4 px-4" data-to_step="2"
                                data-step="1">Siguiente</button>
                            <button type="submit" class="btn btn-success mt-4 px-4">Crear</button>
                        </div>
                    </div>
                </div>






        </form>
    </div>
@endsection
