@extends('layouts.user_type.auth')

@section('content')
    <h5>Comercial/Cotizaciones</h5>

    <div class="card-body modal-color p-0">
        <form class="form bg-white p-4 " action="#" method="post">
            <div class="paso active" id="paso-1">
                {{-- TODO INICIO FILTRO COTIZACIÓN --}}
                <div class="paso_body">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label" for="">Cliente</label>
                            <select class="form-select" name="vigencia" id="cli-coti">
                                {{-- <option value="0">seleccione vigencia</option> --}}
                                <option value="1">Todos</option>
                                <option value="2">Cliente</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="">Jefe Proyecto</label>
                            <select class="form-select" name="vigencia" id="jefeproy-coti">
                                {{-- <option value="0">seleccione vigencia</option> --}}
                                <option value="1">Todos</option>
                                <option value="2">Nombre</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="" class="form-label">Año</label>
                            <select class="form-select" name="" id="ano-coti">
                                <option value="1">Seleccione Año</option>
                                <option value="">2023</option>
                                <option value="">2022</option>
                                <option value="">2021</option>
                                <option value="">2020</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="" class="form-label">Mes</label>
                            <select class="form-select" name="" id="mes-coti">
                                <option value="1">Seleccione Mes</option>
                                <option value="">Enero</option>
                                <option value="">Febrero</option>
                                <option value="">Marzo</option>
                                <option value="">Abril</option>
                                <option value="">Mayo</option>
                                <option value="">Junio</option>
                                <option value="">Julio</option>
                                <option value="">Agosto</option>
                                <option value="">Septiembre</option>
                                <option value="">Octubre</option>
                                <option value="">Noviembre</option>
                                <option value="">Diciembre</option>
                            </select>
                        </div>
                    </div>

                    <div class="paso_footer mt-2">
                        {{-- <button class="btn btn-danger volver-pag1 volver">Volver</button> --}}

                        <button type="button" class=" btn bg-gradient-primary step_button step_button--next mt-4 px-4"
                            data-to_step="2" data-step="1" onclick="myFunction()">Buscar</button>
                    </div>
                </div>
            </div>
            <div class="buscar" id="myDIV">
                {{-- TODO FUNCIÓN BUSCAR --}}
                <script>
                    function myFunction() {
                        var x = document.getElementById("myDIV");
                        if (x.style.display === "none") {
                            x.style.display = "block";
                        } else {
                            x.style.display = "none";
                        }
                    }
                </script>
                {{-- TODO INCIO TABLA COTIZACIONES --}}
                <div class="table-responsive">
                    <h5 class="text-center">Cotizaciones</h5>
                    <table class="table align-items-center table-striped table-hover mb-0 table-cotizacion" width="100%">
                        <thead class="colortabla">
                            {{-- TODO TITULOS TABLA --}}
                            <tr class="colorletratabla">
                                <th class="text-uppercase text-white text-xxs font-weight-bolder ps-2">
                                    Cliente
                                </th>
                                <th class="text-uppercase text-white text-xxs font-weight-bolder ps-2">
                                    Contacto
                                </th>
                                <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                    N° Cotización
                                </th>

                                <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder tema">
                                    Tema
                                </th>
                                <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                    Fecha
                                </th>
                                <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                    Responsable
                                </th>
                                <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                    UF
                                </th>
                                <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                    Estado
                                </th>
                                <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                    OC
                                </th>
                                <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                    Factura
                                </th>
                                <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                    Valor $
                                </th>
                                <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                    Valor UF
                                </th>
                                <th class="text-center text-uppercase text-white text-xxs font-weight-bolder sticky">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- TODO INICIO ITEM 1 --}}
                            <tr>
                                <td class="ps-2 text-left">
                                    <p class="text-xs font-weight-bold mb-0">LIPIGAS</p>
                                </td>
                                <td class="ps-2 text-left">
                                    <p class="text-xs font-weight-bold mb-0"> <span data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="+56 9 8527 0614 fbergeret@lipigas.cl">Francisco
                                            Bergeret</span>
                                    </p>
                                </td>
                                <td class="text-left">
                                    <p class="text-xs font-weight-bold mb-0">GT-DS-5317</p>
                                </td>
                                <td class="text-left" style="width: 50px">
                                    <p class="text-xs font-weight-bold mb-0 ">MODIFICAR INGRESO PORTAL CP <br> PARA INGRESO
                                        DE UNEMAIL VARIOS RUT</p>
                                </td>
                                <td class="text-left">
                                    <p class="text-xs font-weight-bold mb-0">13/04/2023</p>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">Rodrigo Banda Velasquez</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">44.80</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">En desarrollo</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">4502099343</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold"></span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">$ 0</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">0.00</span>
                                </td>
                                <td class="text-center sticky text-sm">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editar-cotizacion"><i
                                            class="fas fa-pen me-2"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#aprobar-cotizacion">
                                        <i class="fas fa-check me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Aprobar cotización"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#enviar-cotizacion">
                                        <i class="fas fa-envelope-open"></i>
                                    </a>
                                </td>
                            </tr>
                            {{-- TODO INICIO ITEM 2 --}}
                            <tr>
                                <td class="ps-2 text-left">
                                    <p class="text-xs font-weight-bold mb-0">COPEC</p>
                                </td>
                                <td class="ps-2 text-left">
                                    <p class="text-xs font-weight-bold mb-0"><span data-bs-toggle="popover"
                                            data-bs-placement="top"
                                            data-bs-content="telefono: 6907648 / correo: adiaz@copec.cl"
                                            title="Datos contacto">Alfedro
                                            Díaz</span>
                                    </p>
                                </td>
                                <td class="text-left">
                                    <p class="text-xs font-weight-bold mb-0">GT-DS-5375</p>
                                </td>

                                <td class="text-left">
                                    <p class="text-xs font-weight-bold mb-0">Restricción de litros maxima diaria
                                        TCT-TAE
                                    </p>
                                </td>

                                <td class="text-left">
                                    <p class="text-xs font-weight-bold mb-0">16/05/2023</p>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">Dennys Espinoza</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">16.20</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">Cotizada</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold"> </span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold"> </span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">$ 0</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">0.00</span>
                                </td>
                                <td class="text-center sticky text-sm">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editar-cotizacion"><i
                                            class="fas fa-pen  me-2"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#aprobar-cotizacion">
                                        <i class="fas fa-check me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Aprobar cotización"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fas fa-envelope-open"></i>
                                    </a>
                                </td>
                            </tr>
                            {{-- TODO INICIO ITEM 3 --}}
                            <tr>
                                <td class="ps-2 text-left">
                                    <p class="text-xs font-weight-bold mb-0">ALUPROF</p>
                                </td>
                                <td class="ps-2 text-left">
                                    <p class="text-xs font-weight-bold mb-0"><span data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="9 8470 9041 	vh@aluprof.cl">Eduardo
                                            Horment</span> </p>
                                </td>
                                <td class="text-left">
                                    <p class="text-xs font-weight-bold mb-0">GT-DS-5373</p>
                                </td>

                                <td class="text-left">
                                    <p class="text-xs font-weight-bold mb-0">SISTEMA COTIZACIONES ALUPROF</p>
                                </td>

                                <td class="text-left">
                                    <p class="text-xs font-weight-bold mb-0">02/05/2023</p>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">Patricio Horment</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">180.00</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">Terminada</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold"> </span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold"> </span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">$ 0</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">0.00</span>
                                </td>
                                <td class="text-center sticky text-sm">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editar-cotizacion"><i
                                            class="fas fa-pen  me-2"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#aprobar-cotizacion">
                                        <i class="fas fa-check me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Aprobar cotización"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fas fa-envelope-open"></i>
                                    </a>
                                </td>
                            </tr>
                            {{-- TODO INICIO ITEM 4 --}}
                            <tr>
                                <td class="ps-2 text-left">
                                    <p class="text-xs font-weight-bold mb-0">KILLSTORE</p>
                                </td>
                                <td class="ps-2 text-left">
                                    <p class="text-xs font-weight-bold mb-0"> <span data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Tooltip on top">Nahuel Velazquez</span>
                                    </p>
                                </td>
                                <td class="text-left">
                                    <p class="text-xs font-weight-bold mb-0">GT-DS-5371</p>
                                </td>
                                <td class="text-left">
                                    <p class="text-xs font-weight-bold mb-0">ASESORÍA Y GESTION DE <br> INTEGRACIÓN PIG-T
                                        ABRIL
                                        2023</p>
                                </td>
                                <td class="text-left">
                                    <p class="text-xs font-weight-bold mb-0">10/05/2023</p>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">Nahuel Velasquez</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">1.00</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">Cotizada</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">5371</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">4455 - 10/05/2023</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">$ 35.960</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">1.00</span>
                                </td>
                                <td class="text-center sticky text-sm">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editar-cotizacion"><i
                                            class="fas fa-pen  me-2"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#aprobar-cotizacion">
                                        <i class="fas fa-check me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Aprobar cotización"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fas fa-envelope-open"></i>
                                    </a>
                                </td>
                            </tr>
                            {{-- TODO INICIO ITEM 5 --}}
                            <tr>
                                <td class="ps-2 text-left">
                                    <p class="text-xs font-weight-bold mb-0">JETSMART</p>
                                </td>
                                <td class="ps-2 text-left">
                                    <p class="text-xs font-weight-bold mb-0"> <span data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Tooltip on top">Carlos Rojas</span></p>
                                </td>
                                <td class="text-left">
                                    <p class="text-xs font-weight-bold mb-0">GT-DS-5367</p>
                                </td>

                                <td class="text-left">
                                    <p class="text-xs font-weight-bold mb-0">ANALISTA FUNCIONAL JUNIOR ABRIL 2023</p>
                                </td>

                                <td class="text-left">
                                    <p class="text-xs font-weight-bold mb-0">09/05/2023</p>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">José Valenzuela</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">82.47</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">Terminada</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">5367</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">4451 - 09/05/2023</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">$ 2.965.322</span>
                                </td>
                                <td class="text-left">
                                    <span class="text-secondary text-xs font-weight-bold">82.47</span>
                                </td>
                                <td class="text-center sticky text-sm">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editar-cotizacion"><i
                                            class="fas fa-pen  me-2"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#aprobar-cotizacion">
                                        <i class="fas fa-check me-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Aprobar cotización"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fas fa-envelope-open"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- TODO BOTONES ARCHIVOS --}}
                <div class="archivos">
                    <button type="button" class=" btn excel mt-4 px-4">EXCEL <i class="fa fa-file-excel"></i></button>
                    <button type="button" class=" btn pdf mt-4 px-4">PDF <i class="fa fa-file-pdf"></i></button>
                </div>
            </div>
        </form>
        {{-- TODO MODALS --}}

        {{-- MODAL EDITAR COTIZACIÓN --}}
        <div class="modal fade" id="editar-cotizacion" tabindex="-1" aria-labelledby="editar-cotizacion"
            aria-hidden="true">
            <div class="modal-dialog modal-lg ">
                <div class="modal-content">
                    <div class="modal-header bg-fondo">
                        <h5 class="modal-title  text-white" id="exampleModalLabel">Editar
                            cotización
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body modal-color">
                        <div class="card">
                            <div class="card-body pb-0">
                                <form class="formulario mt-3 ">
                                    <div class="row mb-3">
                                        <div class="col-md-4 ">
                                            <label for="" class="form-label">N° Cotización</label>
                                            <input type="number" class="form-control" placeholder="GT-DS-5317"
                                                id="ed.coti-n.coti" disabled>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label">Cliente</label>
                                            <input type="text" class="form-control" placeholder="LIPIGAS"
                                                id="ed.coti-cli" disabled>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label">Contacto</label>
                                            <input type="text" class="form-control" placeholder="Francisco Bergeret"
                                                id="ed.coti-cli" disabled>
                                        </div>

                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-4 ">
                                            <label for="" class="form-label">Fecha</label>
                                            <input type="text" class="form-control" placeholder="13/04/2023"
                                                id="ed.coti-fecha" disabled>
                                        </div>
                                        <div class="col-md-4 ">
                                            <label for="" class="form-label">Descripción
                                                Proyecto</label>
                                            <input type="text" class="form-control"
                                                placeholder="MODIFICAR INGRESO PORTAL CP PARA INGRESO DE UN EMAIL VARIOS RUT."
                                                id="ed.coti-tema">

                                        </div>
                                        <div class="col-md-4 ">
                                            <label for="" class="form-label">Comercial</label>
                                            <input type="text" class="form-control"
                                                placeholder="Rodrigo Banda Velasquez" id="ed.coti-respon">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-3 ">
                                            <label for="" class="form-label">UF</label>
                                            <input type="number" class="form-control" placeholder="44.80"
                                                id="ed.coti-uf">
                                        </div>
                                        <div class="col-md-3 ">
                                            <label for="" class="form-label">Estado</label>
                                            <select class="form-select" name="ed.coti-estado" id="ed.coti-estado">
                                                <option value="2">Cotizada</option>
                                                <option value="3">Aprobada</option>
                                                <option value="4">En desarrollo</option>
                                                <option value="5">Terminada</option>
                                                <option value="5">Rechazada</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 ">
                                            <label for="" class="form-label">Valor $</label>
                                            <input type="number" class="form-control" placeholder="$ 0"
                                                id="ed.coti-valor$">
                                        </div>
                                        <div class="col-md-3 ">
                                            <label for="" class="form-label">Valor UF</label>
                                            <input type="text" class="form-control" placeholder="0.00"
                                                id="ed.coti-valorUF">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="editar p-2 text-center" id="editar">
                                <script>
                                    function editar() {
                                        var x = document.getElementById("editar");
                                        if (x.style.display === "none") {
                                            x.style.display = "block";
                                        } else {
                                            x.style.display = "none";
                                        }
                                    }
                                </script>
                                <h6 class="text-success">Los datos se han editado correctamente. <span><i
                                            class="far fa-check-circle"></i></span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn bg-gradient-primary" onclick="editar()">Guardar
                            Cambios</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- MODAL APROBAR COTIZACIÓN --}}
        <div class="modal fade" id="aprobar-cotizacion" tabindex="-1" aria-labelledby="aprobar-cotizacion"
            aria-hidden="true">
            <div class="modal-dialog modal-lg ">
                <div class="modal-content">
                    <div class="modal-header bg-fondo">
                        <h5 class="modal-title  text-white" id="exampleModalLabel">Aprobar cotización
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body modal-color">
                        <div class="card">
                            <div class="card-body ">
                                <form class="formulario ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="" class="form-label">Descripción:</label>
                                            <textarea class="form-control" name="" id="textarea" cols="30" rows="3"
                                                placeholder="Escriba una breve descripción..."></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="editar p-3 text-center" id="aprobar">
                                <script>
                                    function aprobar() {
                                        var x = document.getElementById("aprobar");
                                        if (x.style.display === "none") {
                                            x.style.display = "block";
                                        } else {
                                            x.style.display = "none";
                                        }
                                    }
                                </script>
                                <h6 class="text-success">La cotización ha sido aprobada. <span><i
                                            class="far fa-check-circle"></i></span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn bg-gradient-primary" onclick="aprobar()">Aprobar</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- MODAL ENVIAR COTIZACIÓN --}}
        <div class="modal fade" id="enviar-cotizacion" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-fondo">
                        <h5 class="modal-title  text-white" id="exampleModalLabel">Enviar preventa</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-white">
                        <div class="check text-center">
                            <span><i class="far fa-check-circle text-success"></i></span>
                            <h6 class="text-success">La cotización se ha enviado correctamente.</h6>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
