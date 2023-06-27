@extends('layouts.user_type.auth')

@section('content')
    <h5>Comercial <i class="fas fa-caret-right"></i> Cotizaciones</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card card mb-2 cartacolor p-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="contenido-coti">
                        <!-- INICIO FILTRO COTIZACIÓN -->
                        <div class="filtro-coti">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label" for="">Cliente</label>
                                    <select class="form-select" name="vigencia" id="cli-coti">
                                        <option value="1">Todos</option>
                                        <option value="2">Cliente</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="">Jefe Proyecto</label>
                                    <select class="form-select" name="vigencia" id="jefeproy-coti">
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
                            <div class="mt-2 float-end">
                                <button type="button" class=" btn bg-gradient-primary mt-4 px-4"
                                    onclick="myFunction()">Buscar</button>
                            </div>
                        </div>
                    </div>
                    <div class="buscar" id="myDIV" style="display: none">
                        <!-- FUNCION BUSCAR -->
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
                        <!-- INICIO TABLA COTIZACIÓN--
                        ----------------------------->
                        <div class="table-responsive" style="overflow-x: auto;">
                            <!-- INPUT BUSCAR -->
                            <div class="filtros d-flex justify-content-between pb-1">
                                <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group w-30">
                                    <input type="text" class="form-control" style="height: 35px;" placeholder="Buscar"
                                        aria-label="Recipient's username" aria-describedby="button-addon2"
                                        id="inputGroup-sizing-sm">
                                    <button class="btn bg-gradient-primary py-2" type="button" id="button-addon2"
                                        style="height: 35px;"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            <table class="table table-striped table-hover align-items-center table-cotizacion">
                                <thead class="colortabla">
                                    <!-- TITULOS TABLA -->
                                    <tr class="colorletratabla">
                                        <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                            N° Cotización
                                        </th>
                                        <th class="text-uppercase text-white text-xxs font-weight-bolder ps-2">
                                            Cliente
                                        </th>
                                        <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder tema">
                                            Tema
                                        </th>
                                        <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                            Responsable
                                        </th>
                                        <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                            Fecha Cotización
                                        </th>
                                        <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                            Fecha Comprometida
                                        </th>
                                        <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                            UF
                                        </th>
                                        <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                            Estado
                                        </th>
                                        <th class="text-center text-uppercase text-white text-xxs font-weight-bolder">
                                            Ver
                                        </th>
                                        <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                            Monto Facturado
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-white text-xxs font-weight-bolder sticky">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- INICIO ITEM 1 -->
                                    <tr>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">GT-DS-5317</p>
                                        </td>
                                        <td class="ps-2 text-left">
                                            <p class="text-xs font-weight-bold mb-0">LIPIGAS</p>
                                        </td>
                                        <td class="text-left" style="width: 50px">
                                            <p class="text-xs font-weight-bold mb-0 ">MODIFICAR INGRESO PORTAL CP <br> PARA
                                                INGRESO
                                                DE UNEMAIL VARIOS RUT</p>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">Rodrigo Banda
                                                Velasquez</span>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">13/04/2023</p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">44.80</span>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">En desarrollo</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold"><a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#ver-cotizacion"><i
                                                        class="fas fa-eye "></i>
                                                </a>
                                            </span>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">817.10</span>
                                        </td>
                                        <td class="text-center sticky text-sm">
                                            <a href="{{ url('editar_coti') }}">
                                                <i class="fas fa-pen me-2 text-warning"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#enviar-cotizacion">
                                                <i class="fas fa-envelope-open me-2" style="color: #0e50d7;"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#enviar-facturaciones">
                                                <i class="fas fa-dollar-sign text-success"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- INICIO ITEM 2 -->
                                    <tr>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">GT-DS-5375</p>
                                        </td>
                                        <td class="ps-2 text-left">
                                            <p class="text-xs font-weight-bold mb-0">COPEC</p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">Restricción de litros maxima diaria
                                                TCT-TAE
                                            </p>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">Dennys Espinoza</span>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">16/05/2023</p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">16.20</span>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">Cotizada</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold"><a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#ver-cotizacion"><i
                                                        class="fas fa-eye "></i>
                                                </a>
                                            </span>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">568.00</span>
                                        </td>
                                        <td class="text-center sticky text-sm">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#editar-cotizacion"><i class="fas fa-pen me-2 text-warning"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-envelope-open me-2" style="color: #0e50d7;"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#enviar-facturaciones">
                                                <i class="fas fa-dollar-sign text-success"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- INICIO ITEM 3 -->
                                    <tr>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">GT-DS-5373</p>
                                        </td>
                                        <td class="ps-2 text-left">
                                            <p class="text-xs font-weight-bold mb-0">ALUPROF</p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">SISTEMA COTIZACIONES ALUPROF</p>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">Patricio Horment</span>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">02/05/2023</p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">180.00</span>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">Terminada</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold"><a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#ver-cotizacion"><i
                                                        class="fas fa-eye "></i>
                                                </a>
                                            </span>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">21.60</span>
                                        </td>
                                        <td class="text-center sticky text-sm">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#editar-cotizacion"><i class="fas fa-pen me-2 text-warning"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-envelope-open me-2" style="color: #0e50d7;"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#enviar-facturaciones">
                                                <i class="fas fa-dollar-sign text-success"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- INICIO ITEM 4 -->
                                    <tr>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">GT-DS-5371</p>
                                        </td>
                                        <td class="ps-2 text-left">
                                            <p class="text-xs font-weight-bold mb-0">KILLSTORE</p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">ASESORÍA Y GESTION DE <br> INTEGRACIÓN
                                                PIG-T
                                                ABRIL
                                                2023</p>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">Nahuel Velasquez</span>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">10/05/2023</p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">1.00</span>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">Cotizada</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold"><a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#ver-cotizacion"><i
                                                        class="fas fa-eye "></i>
                                                </a>
                                            </span>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">16.20</span>
                                        </td>
                                        <td class="text-center sticky text-sm">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#editar-cotizacion"><i class="fas fa-pen me-2 text-warning"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-envelope-open me-2" style="color: #0e50d7;"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#enviar-facturaciones">
                                                <i class="fas fa-dollar-sign text-success"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- INICIO ITEM 5 -->
                                    <tr>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">GT-DS-5367</p>
                                        </td>
                                        <td class="ps-2 text-left">
                                            <p class="text-xs font-weight-bold mb-0">JETSMART</p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">ANALISTA FUNCIONAL JUNIOR ABRIL 2023
                                            </p>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">José Valenzuela</span>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">09/05/2023</p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">82.47</span>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">Terminada</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold"><a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#ver-cotizacion"><i
                                                        class="fas fa-eye "></i>
                                                </a>
                                            </span>
                                        </td>
                                        <td class="text-left">
                                            <span class="text-secondary text-xs font-weight-bold">10.00</span>
                                        </td>
                                        <td class="text-center sticky text-sm">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#editar-cotizacion"><i class="fas fa-pen me-2 text-warning"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-envelope-open me-2" style="color: #0e50d7;"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#enviar-facturaciones">
                                                <i class="fas fa-dollar-sign text-success"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- MODALS -----
    ------------------>

    <!-- MODAL NUEVA COTIZACIÓN -->
    <div class="modal fade" id="nueva-cotizacion" tabindex="-1" aria-labelledby="nueva-cotizacion" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Crear cotización
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
                                        <input type="number" class="form-control" placeholder="" id="ed.coti-n.coti">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Cliente</label>
                                        <input type="text" class="form-control" placeholder="" id="ed.coti-cli">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Contacto</label>
                                        <input type="text" class="form-control" placeholder="" id="ed.coti-cli">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4 ">
                                        <label for="" class="form-label">Fecha</label>
                                        <input type="text" class="form-control" placeholder="" id="ed.coti-fecha">
                                    </div>
                                    <div class="col-md-4 ">
                                        <label for="" class="form-label">Descripción
                                            Proyecto</label>
                                        <input type="text" class="form-control" placeholder="" id="ed.coti-tema">
                                    </div>
                                    <div class="col-md-4 ">
                                        <label for="" class="form-label">Comercial</label>
                                        <input type="text" class="form-control" placeholder="" id="ed.coti-respon">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3 ">
                                        <label for="" class="form-label">UF</label>
                                        <input type="number" class="form-control" placeholder="" id="ed.coti-uf">
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
                                        <input type="text" class="form-control" placeholder="" id="ed.coti-valorUF">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="nueva p-2 text-center" id="nueva" style="display: none">
                            <script>
                                function nueva() {
                                    var x = document.getElementById("nueva");
                                    if (x.style.display === "none") {
                                        x.style.display = "block";
                                    } else {
                                        x.style.display = "none";
                                    }
                                }
                            </script>
                            <h6 class="text-success">La cotización se ha realizado correctamente. <span><i
                                        class="far fa-check-circle"></i></span></h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn bg-gradient-primary" onclick="nueva()">Crear cotización</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL EDITAR COTIZACIÓN -->
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
                                        <input type="text" class="form-control" placeholder="Rodrigo Banda Velasquez"
                                            id="ed.coti-respon">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3 ">
                                        <label for="" class="form-label">UF</label>
                                        <input type="number" class="form-control" placeholder="44.80" id="ed.coti-uf">
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
                        <div class="editar p-2 text-center" id="editar" style="display: none">
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
    <!-- MODAL APROBAR COTIZACIÓN -->
    <div class="modal fade" id="aprobar-cotizacion" tabindex="-1" aria-labelledby="aprobar-cotizacion"
        aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Cotización aprobada
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
                        <div class="editar p-3 text-center" id="aprobar" style="display: none">
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
                    <button type="button" class="btn bg-gradient-primary" onclick="aprobar()">Aprobada</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL RECHAZAR COTIZACIÓN -->
    <div class="modal fade" id="rechazar-cotizacion" tabindex="-1" aria-labelledby="rechazar-cotizacion"
        aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Cotización rechazada
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
                        <div class="editar p-3 text-center" id="rechazar" style="display: none">
                            <script>
                                function rechazar() {
                                    var x = document.getElementById("rechazar");
                                    if (x.style.display === "none") {
                                        x.style.display = "block";
                                    } else {
                                        x.style.display = "none";
                                    }
                                }
                            </script>
                            <h6 class="text-danger">La cotización ha sido rechazada. <span><i
                                        class="fas fa-times-circle"></i></span></h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn bg-gradient-primary" onclick="rechazar()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL ENVIAR COTIZACIÓN -->
    <div class="modal fade" id="enviar-cotizacion" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Enviar cotización</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <div class="check text-center">
                        <span><i class="far fa-check-circle text-success"></i></span>
                        <h6 class="text-success fw-bold">La cotización se ha enviado correctamente.</h6>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!-- MODAL ENVIAR A FACTURACIONES -->
    <div class="modal fade" id="enviar-facturaciones" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Enviar a Facturaciones</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="row pt-2 rounded bg-light">
                                <div class="col-md-3">
                                    <label class="form-label" for="">Duración: 3 meses</label>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="">Horas: 480 horas</label>
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-dark" scope="col"></th>
                                            <th class="text-dark" scope="col">#</th>
                                            <th class="text-dark" scope="col">Descripción</th>
                                            <th class="text-dark" scope="col">Fecha</th>
                                            <th class="text-dark" scope="col">Horas</th>
                                            <th class="text-dark" scope="col">%</th>
                                            <th class="text-dark" scope="col">Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                              </div>
                                            </td>
                                            <th scope="row">1</th>
                                            <td>Documentación de Sistema de Gestión</td>
                                            <td>08/06/2023</td>
                                            <td>{Horas}</td>
                                            <td>20%</td>
                                            <td>Finalizado</td>
                                        </tr>
                                        <tr>
                                            <td><div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                              </div>
                                            </td>
                                            <th scope="row">2</th>
                                            <td>Diseño de Sistema de Gestión</td>
                                            <td>08/06/2023</td>
                                            <td>{Horas}</td>
                                            <td>40%</td>
                                            <td>Finalizado</td>
                                        </tr>
                                        <tr>
                                            <td><div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                              </div>
                                            </td>
                                            <th scope="row">3</th>
                                            <td>Back-oficce de Sistema de Gestión</td>
                                            <td>08/06/2023</td>
                                            <td>{Horas}</td>
                                            <td>40%</td>
                                            <td>Finalizado</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--<button type="button" class=" btn bg-gradient-primary step_button step_button--next mt-1"
                                onclick="mostrar()"><i class="fa fa-plus"> </i>
                            </button>-->
                            <div class="editar-edt" id="mostrar" style="display: none">
                                <script>
                                    function mostrar() {
                                        var x = document.getElementById("mostrar");
                                        if (x.style.display === "none") {
                                            x.style.display = "block";
                                        } else {
                                            x.style.display = "none";
                                        }
                                    }
                                </script>
                                <form action="">
                                    <h6>Horas</h6>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <label for="" class="form-label">Descripción del servicio</label>
                                            <textarea class="form-control" name="" id="textarea" cols="30" rows="2"
                                                placeholder="Escriba sus datos..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 horas mt-2 w-20">
                                        <label for="" class="form-label">Horas</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="guardar-cambios p-2 text-center" id="guardar-cambios" style="display: none">
                            <script>
                                function guardar() {
                                    var x = document.getElementById("guardar-cambios");
                                    if (x.style.display === "none") {
                                        x.style.display = "block";
                                    } else {
                                        x.style.display = "none";
                                    }
                                }
                            </script>
                            <h6 class="text-success">La Cotización ha sido enviada. <span><i
                                        class="far fa-check-circle"></i></span></h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn bg-gradient-primary" onclick="guardar()">Enviar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
