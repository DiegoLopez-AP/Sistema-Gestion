@extends('layouts.user_type.auth')

@section('content')
    <h5>Comercial <i class="fas fa-caret-right"></i> Clientes</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card mb-2 cartacolor p-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <!-- FILTROS -->
                    <div class="filtros d-flex justify-content-between pb-1">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername"></label>
                        <div class="input-group w-30">
                            <input type="text" class="form-control" style="height: 35px;" placeholder="Buscar"
                                aria-label="Recipient's username" aria-describedby="button-addon2"
                                id="inputGroup-sizing-sm">
                            <button class="btn bg-gradient-primary py-2" type="button" id="button-addon2"
                                style="height: 35px;"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="boton-agregar text-end align-items-center pt-2">
                            <button class="btn bg-gradient-primary btn-circle" data-bs-toggle="modal"
                                data-bs-target="#agregar-cliente">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- INICIO TABLA CLIENTE--- 
                    ---------------------------->
                    <div class="table-responsive ">
                        <table class="table align-items-center table-striped table-hover mb-0 " width="100%">
                            <!-- TITULOS TABLA -->
                            <thead class="colortabla">
                                <tr class="colorletratabla">
                                    <th class="text-uppercase text-white text-xxs font-weight-bolder ps-2">
                                        Rut
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
                                        Telefono
                                    </th>
                                    <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                        Pag. Web
                                    </th>
                                    <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                        Vigencia
                                    </th>
                                    <th class="text-center text-uppercase text-white text-xxs font-weight-bolder">
                                        Acción
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- INICIO ITEM 1 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">78.956.120-6</p>
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
                                        <span class="text-secondary text-xs font-weight-bold">3345622</span>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">Agricola,<br> Industria,
                                            Servicios</span>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">No Vigente</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#editar-cliente"><i
                                                class="fas fa-pen text-warning"></i></a>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 2 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">96.839.120-8</p>
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
                                        <span class="text-secondary text-xs font-weight-bold">7730000</span>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">www.aguasalquimia.cl</span>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">Vigente</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#editar-cliente"><i
                                                class="fas fa-pen text-warning"></i></a>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 3 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">89.121.400-6</p>
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
                                        <span class="text-secondary text-xs font-weight-bold">6216400</span>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">www.aluminioselroble.cl</span>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">No Vigente</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#editar-cliente"><i
                                                class="fas fa-pen text-warning"></i></a>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 4 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">96.612.400-8</p>
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
                                        <span class="text-secondary text-xs font-weight-bold">5569420</span>
                                    </td>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">www.diplas.cl</span>
                                    </td>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">Vigente</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#editar-cliente"><i
                                                class="fas fa-pen text-warning"></i></a>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 5 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">78.122.390-5</p>
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
                                        <span class="text-secondary text-xs font-weight-bold">5552214</span>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">www.arrequip.cl</span>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">No Vigente</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#editar-cliente"><i
                                                class="fas fa-pen text-warning"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="boton float-end pt-3">
                            <button href="#" class="btn bg-gradient-primary btn-sm px-4 py-2" style="background: #01723a;" type="button">Excel<i class="fas fa-file-excel text-xs ms-1"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- MODALS -----
    ------------------>

    <!-- MODAL AGREAGAR CLIENTE  -->
    <div class="modal fade" id="agregar-cliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Agregar Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-color">
                    <div class="card">
                        <div class="card-body py-0">
                            <form class="formulario mt-3 ">
                                <div class="row mb-3">
                                    <div class="col-md-4 ">
                                        <label for="" class="form-label">Rut</label>
                                        <input type="text" class="form-control" 
                                            id="rut-cli">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Indicador</label>
                                        <select class="form-select" name="" id="indica-cli">
                                            <option value="1">Seleccione Indicador</option>
                                            <option value="2">U.F</option>
                                            <option value="3">Dolar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Dias de pago</label>
                                        <input class="form-control" id="diapago-cli"
                                            type="number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Nombre Fantasia</label>
                                        <input class="form-control" type="text"
                                            id="nomfanta-cli">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Razón Social</label>
                                        <input type="text" class="form-control"
                                            id="razonsoci-cli">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Dirección</label>
                                        <input type="text" class="form-control"
                                            id="direc-contac">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Giro</label>
                                        <input type="text" class="form-control"
                                            id="giro-cli">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Telefono</label>
                                        <input type="number" class="form-control"
                                            id="telefono-cli">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Pag. Web</label>
                                        <input type="url" class="form-control"
                                            id="pagweb-cli">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Vigencia</label>
                                        <select class="form-select" name="" id="vigen-cli">
                                            <option value="1">Seleccione Vigencia</option>
                                            <option value="2">Vigente</option>
                                            <option value="3">No Vigente</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn bg-gradient-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>

    <!-- TODO MODAL EDITAR CLIENTE -->
    <div class="modal fade" id="editar-cliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Editar
                        Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-color">
                    <div class="card">
                        <div class="card-body py-0">
                            <form class="formulario mt-3 ">
                                <div class="row mb-3">
                                    <div class="col-md-4 ">
                                        <label for="" class="form-label">Rut</label>
                                        <input type="text" class="form-control" value="96.839.120-8"
                                            id="rut-cli" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Indicador</label>
                                        <select class="form-select" name="" id="indica-cli">
                                            <option value="1">Seleccione</option>
                                            <option value="2">U.F</option>
                                            <option value="3">Dolar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Dias de
                                            pago</label>
                                        <input class="form-control" id="diapago-cli" type="number" value="30">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Nombre
                                            Fantasia</label>
                                        <input class="form-control" type="text" id="nomfanta-cli"
                                            value="ALQUIMIA S.A">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Razón
                                            Social</label>
                                        <input type="text" class="form-control" value="Alquimia S.A"
                                            id="razonsoci-cli">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Dirección</label>
                                        <input type="text" class="form-control"
                                            value="Doctor Garcia
                                            Guerrero 1192"
                                            id="direc-contac">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Giro</label>
                                        <input type="text" class="form-control"
                                            value="Servicios
                                            , Industria, Quimíca"
                                            id="giro-cli">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Telefono</label>
                                        <input type="number" class="form-control" value="7730000"
                                            id="telefono-cli">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Pag.
                                            Web</label>
                                        <input type="url" class="form-control" value="www.aguasalquimia.cl"
                                            id="pagweb-cli">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Vigencia</label>
                                        <select class="form-select" name="" id="vigen-cli">
                                            <option value="1">Seleccione</option>
                                            <option value="2">Vigente</option>
                                            <option value="3">No Vigente</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn bg-gradient-primary">Guardar
                        Cambios</button>
                </div>
            </div>
        </div>
    </div>

@endsection
