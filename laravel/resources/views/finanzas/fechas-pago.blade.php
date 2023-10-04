@extends('layouts.user_type.auth')

@section('content')
    <h5>Finanzas <i class="fas fa-caret-right"></i> Fechas de pago</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card mb-2 cartacolor p-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="text-center pb-2">
                        <h6 class="fecha-actual">{fecha Actual}</h6>
                    </div>
                    <!-- INICIO TABLA FECHA DE PAGO---
                    ---------------------------------->
                    <div class="table-responsive p-0">
                        <table class="table align-items-center table-striped table-hover mb-0">
                            <!-- TITULOS TABLA -->
                            <thead class="colortabla">
                                <tr>
                                    <th class=" text-left text-uppercase text-black text-xxs font-weight-bolder ">
                                        Cliente
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Días
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Fecha Probable
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <!-- INICIO ITEM 1 -->
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
                                </tr>
                                <!-- INICIO ITEM 2 -->
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

                                </tr>
                                <!-- INICIO ITEM 3 -->
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

                                </tr>
                                <!-- INICIO ITEM 4 -->
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

                                </tr>
                                <!-- INICIO ITEM 5 -->
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

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
