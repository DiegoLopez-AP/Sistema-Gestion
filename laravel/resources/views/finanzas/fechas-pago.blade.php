@extends('layouts.user_type.auth')

@section('content')
    <h3 class="m-2">Finanzas/Fechas de pago</h3>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-2 cartacolor p-5">
                    <div class="card-header pb-3">
                        <div class="d-flex flex-row justify-content-center">
                            <h6 class="fecha-actual">{fecha Actual}</h6>
                        </div>
                        
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center table-striped table-hover mb-0">
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
        </div>
@endsection
