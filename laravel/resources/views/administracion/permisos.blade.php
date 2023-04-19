@extends('layouts.user_type.auth')

@section('content')

    <h3 class="m-2">Administración/Permisos</h3>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-2 cartacolor p-5">
                <div class="card-header py-3">
                    <div class="d-flex flex-row justify-content-between">

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
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center table-striped table-hover mb-0">
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

                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">Comercial</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Cotizaciones</p>
                                    </td>

                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>

                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>

                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>

                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">Operaciones</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Proyectos</p>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>

                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">Finanzas</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Fechas de pago</p>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">Informes</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Rentailidad</p>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input1" type="checkbox" id="check1" name="option1"
                                            value="something" >
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
