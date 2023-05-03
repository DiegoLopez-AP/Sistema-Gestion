@extends('layouts.user_type.auth')

@section('content')
    <h5 class="m-2">Comercial/Clientes</h5>
    <div class="row">
        <div class="col-12">
            <div class="card mb-2 mx-2 cartacolor p-5">
                <div class="card-header mb-1">
                    <div class="d-flex flex-row">

                        <input id="buscar" type="search" placeholder="Buscar Cliente" class="form-control1 my-2 py-1">
                        <span class="py-1 px-2 my-2">
                            <i class="fas fa-search"></i>
                        </span>
                        <a href="{{ url('#') }}"
                            class="btn bg-gradient-primary  m-2 px-4 justify-content-end{{ Request::is('#') ?: '' }} justify-content-end"
                            type="button">Excel<i class="fas fa-file-excel ps-1 py-1 "></i>
                        </a>

                    </div>

                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center table-striped table-hover mb-0 " width="100%">
                            <thead class="colortabla">
                                <tr class="colorletratabla">
                                    <th class="text-uppercase text-white text-xxs font-weight-bolder ps-2">
                                        Rut
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Indic.
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Dias de Pago
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Nombre Fantasia
                                    </th>

                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Razón Social
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Dirección
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Giro
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Telefono
                                    </th>
                                    <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                        Pag. Web
                                    </th>
                                    <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                        Vigencia
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">78.956.120-6</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">U.F</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">30</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">AGROMERCIAL VERDE <br> ANDES LTDA.</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Agromercial Verde <br> Andes Ltda.</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Enrique Foster <br> sur 150-A</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">No hay <br> información</p>
                                    </td>

                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">3345622</span>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">Agricola,<br> Industria,
                                            Servicios</span>
                                    </td>

                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">No Vigente</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">96.839.120-8</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">U.F</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">30</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">ALQUIMIA S.A</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Alquimia S.A</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Doctor Garcia<br> Guerrero 1192</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Servicios<br>, Industria, Quimíca</p>
                                    </td>

                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">7730000</span>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">www.aguasalquimia.cl</span>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">No Vigente</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">89.121.400-6</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">U.F</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">30</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">ALUMINIOS EL <br> ROBLE</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Aluminios El Roble</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">El Roble 0242</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Manufactura</p>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">6216400</span>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">www.aluminioselroble.cl</span>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">No Vigente</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">96.612.400-8</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">U.F</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">30</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">ANGUITA COMERCIAL <br> DIPLAS</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Anguita Comercial <br> Diplas</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Av. Matta #1150</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Manufactura <br> Industria</p>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">5569420</span>
                                    </td>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">www.diplas.cl</span>
                                    </td>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">No Vigente</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">78.122.390-5</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">U.F</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">30</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">ARREQUIP</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Arrequip</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Nataniel Cox <br>1607</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Servicio <br> Construcción</p>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">5552214</span>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">www.arrequip.cl</span>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">No Vigente</span>
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
