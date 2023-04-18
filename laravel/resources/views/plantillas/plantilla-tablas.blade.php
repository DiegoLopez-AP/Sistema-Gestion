@extends('layouts.user_type.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-2 cartacolor">
                    <div class="card-header pb-3 colorhead">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-1 text-white">Captación de Clientes</h5>
                            </div>
                            <a href="{{ url('#') }}"
                                class="btn bg-gradient-primary btn-sm mb-0 {{ Request::is('#') ?: '' }} "
                                type="button">EXCEL</a>
                        </div>
                        <label for="cliente">Seleccionar cliente:</label>
                                <select id="cliente">
                                    <option value="cliente1">Cliente 1</option>
                                    <option value="cliente2">Cliente 2</option>
                                    <option value="cliente3">Cliente 3</option>
                                    <option value="cliente4">Cliente 4</option>
                                </select>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead class="colortabla">
                                    <tr>
                                        <th class="text-uppercase text-black text-xxs font-weight-bolder ">
                                            Codigo
                                        </th>
                                        <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                            Nombre
                                        </th>
                                        <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                            Mail
                                        </th>
                                        <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                            Telefono
                                        </th>

                                        <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                            Cargo
                                        </th>
                                        <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                            Dirección
                                        </th>
                                        <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                            Clave
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="ps-4">
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
                                        <td class="ps-4">
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
                                        <td class="ps-4">
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
                                        <td class="ps-4">
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
                                        <td class="ps-4">
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
    </div>
@endsection
