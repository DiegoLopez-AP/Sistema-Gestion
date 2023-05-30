@extends('layouts.user_type.auth')

@section('content')
    <h5 class="m-2">RRHH/Curriculum</h5>
    <div class="row">
        <div class="col-12">
            <div class="card mb-2 mx-2 cartacolor p-5">
                <div class="card-header mb-1">
                    <div class="d-flex flex-row">

                        <input id="buscar" type="search" placeholder="Buscar Cliente" class="form-control1 my-2 py-1">
                        <span class="py-1 px-2 my-2">
                            <i class="fas fa-search"></i>
                        </span>
                        <button type="button" class="btn bg-gradient-primary m-2 px-4 py-2" data-bs-toggle="modal"
                            data-bs-target="#curriculum">
                            Nuevo
                        </button>

                    </div>

                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center table-striped table-hover mb-0 " width="100%">
                            <thead class="colortabla">
                                <tr class="colorletratabla">
                                    <th class="text-left text-uppercase text-white text-xxs font-weight-bolder ps-2">
                                        Paterno
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Materno
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Nombres
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Rut
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Fecha de Nac.
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Celular
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Mail
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Accion
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">ACEVEDO</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">ABARCA</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">CARLOS ROBERTO</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">13.720.988-8</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">09/02/1987</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">955802332</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">azevedo.carlitos@gmail.com, <br>
                                            carlos.acevedo@outlook.cl</p>
                                    </td>

                                    <td class="text-center">
                                        <!-- Button trigger modal -->
                                        
                                        <a href="{{ url('#') }}" class="" data-bs-toggle="modal"
                                            data-bs-target="#curriculum" type=""><i class="fas fa-file-invoice"></i>
                                        </a>
                                        

                                        <!-- Modal -->
                                        <div class="modal fade bd-example-modal-lg" id="curriculum" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content ">
                                                    <div class="modal-header bg-fondo">
                                                        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Curriculum</h1>
                                                        <button type="button" class="btn-close cerrar-modal" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body modal-curriculum">
                                                        <div class="container">

                                                            <form class="form bg-white" action="#" method="post">


                                                                <div class="form-register_body">
                                                                    <div class="paso active" id="paso-1">
                                                                        <div class="paso_header">
                                                                            <h4 class="paso_title curriculum">Información
                                                                                personal</h4>
                                                                        </div>
                                                                        <div class="paso_body text-start">
                                                                            <div class="row ">
                                                                                <div class="col-md-3 ">
                                                                                    <label class="form-label"
                                                                                        for="">Nombre</label>
                                                                                    <input class="form-control"
                                                                                        type="text" id="nombre"
                                                                                        name="nombre">
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label class="form-label"
                                                                                        for="">Ap. Paterno</label>
                                                                                    <input class="form-control"
                                                                                        type="text" id="ap-paterno"
                                                                                        name="ap-materno">
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label class="form-label"
                                                                                        for="">Ap. Materno</label>
                                                                                    <input class="form-control"
                                                                                        type="text" id="ap-materno"
                                                                                        name="ap-materno">
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label class="form-label"
                                                                                        for="">Rut</label>
                                                                                    <input class="form-control"
                                                                                        type="text" id="rut"
                                                                                        name="rut">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-2">
                                                                                <div class="col-md-3">
                                                                                    <label class="form-label"
                                                                                        for="">Fecha de Nacimiento</label>
                                                                                            <input type="date" id="start"
                                                                                            name="trip-start" class="form-control">
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label class="form-label"
                                                                                        for="">Dirección</label>
                                                                                    <input class="form-control"
                                                                                        type="text" id="nombre"
                                                                                        name="nombre">
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label class="form-label"
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
                                                                                    <label class="form-label"
                                                                                        for="">Ciudad</label>
                                                                                    <input class="form-control"
                                                                                        type="text" id="rut"
                                                                                        name="rut">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-2">
                                                                                <div class="col-md-3">
                                                                                    <label class="form-label"
                                                                                        for="">Fono
                                                                                        Particular</label>
                                                                                    <input size="16" type="number"
                                                                                        class="form-control"
                                                                                        id="fono-parti">
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label class="form-label"
                                                                                        for="">Celular</label>
                                                                                    <input class="form-control"
                                                                                        type="number" id="celular"
                                                                                        name="celular">
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label class="form-label"
                                                                                        for="">Estado Civil</label>
                                                                                    <input class="form-control"
                                                                                        type="text" id="e-civil"
                                                                                        name="e-civil">
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label class="form-label"
                                                                                        for="">Nacionalidad</label>
                                                                                    <input class="form-control"
                                                                                        type="text" id="nacionalidad"
                                                                                        name="nacionalidad">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-2">
                                                                                <div class="col-md-5">
                                                                                    <label class="form-label"
                                                                                        for="">Mail</label>
                                                                                    <input class="form-control"
                                                                                        type="text" id="mail"
                                                                                        name="mail">
                                                                                </div>
                                                                                <div class="col-md-7">
                                                                                    <label for="formFile"
                                                                                        class="form-label text-left">Foto</label>
                                                                                    <input class="form-control"
                                                                                        type="file" id="foto-eme">
                                                                                </div>
                                                                            </div>

                                                                            <div class="paso_footer">
                                                                                <button type="button"
                                                                                    class="btn btn-danger mt-4 px-4"
                                                                                    data-to_step="1"
                                                                                    data-step="2">Regresar</button>
                                                                                <button type="button"
                                                                                    class=" btn btn-secondary mt-4 px-4"
                                                                                    data-to_step="2"
                                                                                    data-step="1">Siguiente</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-success mt-4 px-4">Crear</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="paso" id="paso-2">
                                                                        <div class="paso_header">
                                                                            <h4 class="paso_title">Profesión</h4>
                                                                        </div>
                                                                        <div class="paso_body">
                                                                            <div class="row mt-2">
                                                                                ...
                                                                            </div>



                                                                        </div>
                                                                        <div class="paso_footer">
                                                                            <button type="button"
                                                                                class="btn btn-danger mt-4 px-4"
                                                                                data-to_step="1"
                                                                                data-step="2">Regresar</button>
                                                                            <button type="button"
                                                                                class=" btn btn-secondary mt-4 px-4"
                                                                                data-to_step="2"
                                                                                data-step="1">Siguiente</button>
                                                                            {{-- <button type="submit" class="step_button mt-4 px-4">Crear</button> --}}
                                                                        </div>
                                                                    </div>

                                                                    <div class="paso" id="paso-3">
                                                                        <div class="paso_header">
                                                                            <h4 class="paso_title curriculum">Resumen</h4>
                                                                        </div>
                                                                        <div class="paso_body">
                                                                            <div class="row mt-2">
                                                                                <div class="col-md-12">
                                                                                    <textarea class="form-control" name="" id="textarea" cols="30" rows="10"
                                                                                        placeholder="Escriba sus datos..."></textarea>
                                                                                </div>
                                                                            </div>

                                                                            <div class="paso_footer">
                                                                                <button type="button"
                                                                                    class="btn btn-danger mt-4 px-4"
                                                                                    data-to_step="1"
                                                                                    data-step="2">Regresar</button>
                                                                                <button type="button"
                                                                                    class=" btn btn-secondary mt-4 px-4"
                                                                                    data-to_step="2"
                                                                                    data-step="1">Siguiente</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-success mt-4 px-4">Crear</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="paso" id="paso-4">
                                                                        <div class="paso_header">
                                                                            <h4 class="paso_title curriculum">Experiencia
                                                                            </h4>
                                                                        </div>
                                                                        <div class="paso_body">
                                                                            <div class="row mt-2">
                                                                                <div class="col-md-12">

                                                                                    <textarea class="form-control" name="" id="textarea" cols="30" rows="10"
                                                                                        placeholder="Escriba sus datos..."></textarea>
                                                                                </div>
                                                                            </div>

                                                                            <div class="paso_footer">
                                                                                <button type="button"
                                                                                    class="btn btn-danger mt-4 px-4"
                                                                                    data-to_step="1"
                                                                                    data-step="2">Regresar</button>
                                                                                <button type="button"
                                                                                    class=" btn btn-secondary mt-4 px-4"
                                                                                    data-to_step="2"
                                                                                    data-step="1">Siguiente</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-success mt-4 px-4">Crear</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="paso" id="paso-5">
                                                                        <div class="paso_header">
                                                                            <h4 class="paso_title curriculum">Formación
                                                                                Académica</h4>
                                                                        </div>
                                                                        <div class="paso_body">
                                                                            <div class="row mt-2">
                                                                                <div class="col-md-12">

                                                                                    <textarea class="form-control" name="" id="textarea" cols="30" rows="10"
                                                                                        placeholder="Escriba sus datos..."></textarea>
                                                                                </div>
                                                                            </div>

                                                                            <div class="paso_footer">
                                                                                <button type="button"
                                                                                    class="btn btn-danger mt-4 px-4"
                                                                                    data-to_step="1"
                                                                                    data-step="2">Regresar</button>
                                                                                <button type="button"
                                                                                    class=" btn btn-secondary mt-4 px-4"
                                                                                    data-to_step="2"
                                                                                    data-step="1">Siguiente</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-success mt-4 px-4">Crear</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="paso" id="paso-6">
                                                                        <div class="paso_header">
                                                                            <h4 class="paso_title curriculum">Conocimientos
                                                                            </h4>
                                                                        </div>
                                                                        <div class="paso_body">
                                                                            <div class="row mt-2">
                                                                                <div class="col-md-12">

                                                                                    <textarea class="form-control" name="" id="textarea" cols="30" rows="10"
                                                                                        placeholder="Escriba sus datos..."></textarea>
                                                                                </div>
                                                                            </div>

                                                                            <div class="paso_footer">
                                                                                <button type="button"
                                                                                    class="btn btn-danger mt-4 px-4"
                                                                                    data-to_step="1"
                                                                                    data-step="2">Regresar</button>
                                                                                <button type="button"
                                                                                    class=" btn btn-secondary mt-4 px-4"
                                                                                    data-to_step="2"
                                                                                    data-step="1">Siguiente</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-success mt-4 px-4">Crear</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="paso" id="paso-7">
                                                                        <div class="paso_header">
                                                                            <h4 class="paso_title curriculum">Idiomas</h4>
                                                                        </div>
                                                                        <div class="paso_body">
                                                                            <div class="row mt-2">
                                                                                <div class="col-md-12">

                                                                                    <textarea class="form-control" name="" id="textarea" cols="30" rows="10"
                                                                                        placeholder="Escriba sus datos..."></textarea>
                                                                                </div>
                                                                            </div>

                                                                            <div class="paso_footer">
                                                                                <button type="button"
                                                                                    class="btn btn-danger mt-4 px-4"
                                                                                    data-to_step="1"
                                                                                    data-step="2">Regresar</button>
                                                                                <button type="button"
                                                                                    class=" btn btn-secondary mt-4 px-4"
                                                                                    data-to_step="2"
                                                                                    data-step="1">Siguiente</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-success mt-4 px-4">Crear</button>
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
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">BARRERA</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">SIERRALTA</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">PEDRO</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">52.004.665-8</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">09/02/1987</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">9219 2009</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">barrerasierralta@gmail.com</p>
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ url('#') }}" class="" data-bs-toggle="modal"
                                            data-bs-target="#curriculum" type=""><i class="fas fa-file-invoice"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">CERDA</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">VIDAL</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">LAURA PAZ</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"> 17.079.071-5</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">569 98310966 / <br> 569 93447419</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">lpcerda@uc.cl</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('#') }}" class="" data-bs-toggle="modal"
                                            data-bs-target="#curriculum" type=""><i class="fas fa-file-invoice"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">GATICA</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">MUÑOZ</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">ENRIQUE</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">11.750.178-7</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">09/02/1987</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">85476621</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">jamorale@fen.uchile.cl</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('#') }}" class="" data-bs-toggle="modal"
                                            data-bs-target="#curriculum" type=""><i class="fas fa-file-invoice"></i>
                                        </a>
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
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        {{-- <a class="btn bg-gradient-secondary m-2 px-4 py-2" href=""
                                            type="button"></i></a> --}}
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
