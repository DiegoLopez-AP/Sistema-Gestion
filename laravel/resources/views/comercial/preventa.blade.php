@extends('layouts.user_type.auth')

@section('content')
    <h5>Comercial <i class="fas fa-caret-right"></i> Preventa</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card mb-2 cartacolor p-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <!-- FILTROS -->
                    <div class="d-flex flex-row pb-3 justify-content-between">
                        <input id="buscar" type="search" placeholder="Buscar Cliente" class="form-control1 my-2 py-1">
                        <div class="icono agregar px-2 my-2 pt-1">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#nueva-preventa">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <!-- INICIO TABLA PREVENTA--
                                ----------------------------->
                    <div class="table-responsive">
                        <table class="table align-items-center table-striped table-hover mb-0 ">
                            <!-- TITULOS TABLA -->
                            <thead class="colortabla">
                                <tr class="colorletratabla">
                                    <th class="text-uppercase text-white text-xxs font-weight-bolder ps-2">
                                        ID
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Cliente
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Contacto
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Tema
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Fecha
                                    </th>
                                    <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                        Estado
                                    </th>
                                    <th class="text-center text-uppercase text-white text-xxs font-weight-bolder">
                                        Archivo
                                    </th>
                                    <th class="text-center text-uppercase text-white text-xxs font-weight-bolder">
                                        EDT
                                    </th>
                                    <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                        Preventa
                                    </th>
                                    <th class="text-center text-uppercase text-white text-xxs font-weight-bolder">
                                        Cotización
                                    </th>
                                    <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                        Comercial
                                    </th>
                                    <th class="text-center text-uppercase text-white text-xxs font-weight-bolder sticky">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- INICIO ITEM 1 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">5334</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">LIPIGAS</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Francisco
                                            Bergeret</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Lorem ipsum dolor.</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">16/05/2023</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">En proceso</p>
                                    </td>
                                    <!-- ARCHIVO -->
                                    <td class="text-center text-sm">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#-preventa">
                                            <i class="fa fa-paperclip"></i>
                                        </a>
                                    </td>
                                    <!-- EDT -->
                                    <td class="text-center text-sm">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edt-preventa">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Enrique Gatica</p>
                                    </td>
                                    <!-- COTIZACIÓN -->
                                    <td class="text-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#cotizacion-preventa">
                                            <i class="fa fa-dollar-sign"></i>
                                        </a>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Iñaki Alaba</p>
                                    </td>
                                    <!-- ACCIONES -->
                                    <td class="text-center text-sm sticky">
                                        <!-- EDITAR PREVENTA -->
                                        <a class="py-1" href="#" data-bs-toggle="modal"
                                            data-bs-target="#editar-preventa">
                                            <i class="fa fa-pen mx-2"></i>
                                        </a>
                                        <!-- ENVIAR PREVENTA -->
                                        <a class="py-1" href="#" data-bs-toggle="modal"
                                            data-bs-target="#enviar-preventa">
                                            <i class="fa fa-envelope-open mx-2"></i>
                                        </a>
                                        <!-- GENERAR PDF -->
                                        <a class="py-1" href="#">
                                            <i class="fa fa-file-pdf mx-2 "></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 2 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">5375</p>
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
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <!-- ACCIONES -->
                                    <td class="text-center text-sm sticky">
                                        <!-- EDITAR PREVENTA -->
                                        <a class="py-1" href="#" data-bs-toggle="modal"
                                            data-bs-target="#editar-preventa">
                                            <i class="fa fa-pen mx-2"></i>
                                        </a>
                                        <!-- ENVIAR PREVENTA -->
                                        <a class="py-1" href="#" data-bs-toggle="modal"
                                            data-bs-target="#editar-preventa">
                                            <i class="fa fa-envelope-open mx-2"></i>
                                        </a>
                                        <!-- GENERAR PDF -->
                                        <a class="py-1" href="#">
                                            <i class="fa fa-file-pdf mx-2 "></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 3 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">5350</p>
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
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <!-- ACCIONES -->
                                    <td class="text-center text-sm sticky">
                                        <!-- EDITAR PREVENTA -->
                                        <a class="py-1" href="#" data-bs-toggle="modal"
                                            data-bs-target="#editar-preventa">
                                            <i class="fa fa-pen mx-2"></i>
                                        </a>
                                        <!-- ENVIAR PREVENTA -->
                                        <a class="py-1" href="#" data-bs-toggle="modal"
                                            data-bs-target="#editar-preventa">
                                            <i class="fa fa-envelope-open mx-2"></i>
                                        </a>
                                        <!-- GENERAR PDF -->
                                        <a class="py-1" href="#">
                                            <i class="fa fa-file-pdf mx-2 "></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 4 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">5349</p>
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
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <!-- ACCIONES -->
                                    <td class="text-center text-sm sticky">
                                        <!-- EDITAR PREVENTA -->
                                        <a class="py-1" href="#" data-bs-toggle="modal"
                                            data-bs-target="#editar-preventa">
                                            <i class="fa fa-pen mx-2"></i>
                                        </a>
                                        <!-- ENVIAR PREVENTA -->
                                        <a class="py-1" href="#" data-bs-toggle="modal"
                                            data-bs-target="#editar-preventa">
                                            <i class="fa fa-envelope-open mx-2"></i>
                                        </a>
                                        <!-- GENERAR PDF -->
                                        <a class="py-1" href="#">
                                            <i class="fa fa-file-pdf mx-2 "></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 5 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">5336</p>
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
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <!-- ACCIONES -->
                                    <td class="text-center text-sm sticky">
                                        <!-- EDITAR PREVENTA -->
                                        <a class="py-1" href="#" data-bs-toggle="modal"
                                            data-bs-target="#editar-preventa">
                                            <i class="fa fa-pen mx-2"></i>
                                        </a>
                                        <!-- ENVIAR PREVENTA -->
                                        <a class="py-1" href="#" data-bs-toggle="modal"
                                            data-bs-target="#editar-preventa">
                                            <i class="fa fa-envelope-open mx-2"></i>
                                        </a>
                                        <!-- GENERAR PDF -->
                                        <a class="py-1" href="#">
                                            <i class="fa fa-file-pdf mx-2 "></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- MODALS -----
                ------------------>

    <!-- MODAL EDT -->
    <div class="modal fade" id="edt-preventa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">EDT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-color">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-dark" scope="col">#</th>
                                            <th class="text-dark" scope="col">Servicio</th>
                                            <th class="text-dark" scope="col">Horas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Front</td>
                                            <td>{Horas}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Back-oficce</td>
                                            <td>{Horas}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Jp</td>
                                            <td>{Horas}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button type="button" class=" btn bg-gradient-primary step_button step_button--next mt-1"
                                onclick="mostrar()"><i class="fa fa-plus"> </i></button>
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
                            <h6 class="text-success">Los cambios se han guardado correctamente. <span><i
                                        class="far fa-check-circle"></i></span></h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn bg-gradient-primary" onclick="guardar()">Guardar
                        Cambios</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL COTIZACIÓN -->
    <div class="modal fade" id="cotizacion-preventa" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Cotización / <span>N°5334</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-color">
                    <div class="card">
                        <div class="card-body py-0 py-3">
                            <div class="identificacion-cli">
                                <h6 class="text-secondary font-weight-bold text-center ">Identificación Cliente</h6>
                                <hr>
                            </div>
                            <div class="tema p-2 rounded mb-2 mt-0">
                                <div class="row">
                                    <div class="col-md-6 "><label for="" class="form-label">Estado: <span>En
                                                proceso</span></label></div>
                                    <div class="col-md-6 text-end">
                                        <label for="" class="form-label">Fecha:
                                            <span>{fecha}</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="tema bg-light mb-3 p-2 pb-0 rounded">
                                <div class="row ">
                                    <div class="col-md-4 text-center">
                                        <label for="" class="form-label">Cliente:
                                            <span class="text-black">
                                                LIPIGAS
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <label for="" class="form-label">Contacto: 
                                            <span class="text-black">
                                                Francisco Bergeret
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <label for="" class="form-label">Preventa: 
                                            <span>
                                                Enrique Gatica
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="tema p-2 rounded mb-3" style="background-color: #f2f2f2">
                                <h6 class="text-dark fw-bold">Tema:</h6>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt voluptatem non
                                    porro temporibus cumque vel, cum omnis provident fugiat culpa animi minima,
                                    exercitationem ipsam dicta eveniet ratione id, optio ab.</p>
                            </div>
                            <div class="accordion " id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne" style="background-color: #f2f2f2">
                                        <button class="accordion-button collapsed text-dark fw-bold" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Estimación de tiempo
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body mt-2">
                                            <div class="table-responsive ">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-dark" scope="col">#</th>
                                                            <th class="text-dark" scope="col">Servicio</th>
                                                            <th class="text-dark" scope="col">Horas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Front</td>
                                                            <td>{Horas}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Back-oficce</td>
                                                            <td>{Horas}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Jp</td>
                                                            <td>{Horas}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp">
                                <div class="row pt-3">
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Jefe proyecto</label>
                                        <select class="form-select" name="jproyecto" id="jproyecto">
                                            <option value="0">Seleccione jefe de proyecto</option>
                                            <option value="1">Nombre jefe de proyecto</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="datos-coti text-left pt-4">
                                <h6 class="text-secondary font-weight-bold">Ingresar cotización</h6>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Servicios</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Hora</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Valor</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Total</label>
                                    <input class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="form-label">Hitos de pago</label>
                                    <input class="form-control">
                                </div>
                            </div>
                            <div class="ingresar-cotizacion pt-3  float-start">
                                <a href="#" type="button" class="btn bg-gradient-primary" onclick="ingresar()"><i
                                        class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="ingresar-datos px-4" id="ingresar-datos" style="display: none;">
                            <script>
                                function ingresar() {
                                    var x = document.getElementById("ingresar-datos");
                                    if (x.style.display === "none") {
                                        x.style.display = "block";
                                    } else {
                                        x.style.display = "none";
                                    }
                                }
                            </script>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Servicios</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Hora</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Valor</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Total</label>
                                    <input class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="form-label">Hitos de pago</label>
                                    <input class="form-control">
                                </div>
                            </div>
                            <div class="ingresar-cotizacion pt-3  float-start">
                                <a href="#" type="button" class="btn bg-gradient-primary" onclick="ingresar()">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="guardar p-2 text-center" id="guardar1" style="display: none;">
                            <script>
                                function guardarcamb() {
                                    var x = document.getElementById("guardar1");
                                    if (x.style.display === "none") {
                                        x.style.display = "block";
                                    } else {
                                        x.style.display = "none";
                                    }
                                }
                            </script>
                            <h6 class="text-success">Los cambios se han guardado correctamente. 
                                <span>
                                    <i class="far fa-check-circle"></i>
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn bg-gradient-primary" onclick="guardarcamb()">Guardar
                        Cambios</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL EDITAR PREVENTA -->
    <div class="modal fade" id="editar-preventa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Editar preventa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-color">
                    <div class="card">
                        <div class="card-body py-0">
                            <form class="formulario mt-3 ">
                                <div class="row mb-3">
                                    <div class="col-md-4 ">
                                        <label for="" class="form-label">Rut</label>
                                        <input type="text" class="form-control" placeholder="96.839.120-8"
                                            id="rut-cli">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Moneda</label>
                                        <select class="form-select" name="" id="indica-cli">
                                            <option value="2">U.F</option>
                                            <option value="3">Dolar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Dias de
                                            pago</label>
                                        <input class="form-control" id="diapago-cli" type="number" placeholder="30">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Nombre
                                            Fantasia</label>
                                        <input class="form-control" type="text" id="nomfanta-cli"
                                            placeholder="ALQUIMIA S.A">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Razón
                                            Social</label>
                                        <input type="text" class="form-control" placeholder="Alquimia S.A"
                                            id="razonsoci-cli">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Dirección</label>
                                        <input type="text" class="form-control"
                                            placeholder="Doctor Garcia Guerrero 1192"
                                            id="direc-contac">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Giro</label>
                                        <input type="text" class="form-control"
                                            placeholder="Servicios, Industria, Quimíca"
                                            id="giro-cli">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Telefono</label>
                                        <input type="number" class="form-control" placeholder="7730000"
                                            id="telefono-cli">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Pag.
                                            Web</label>
                                        <input type="url" class="form-control" placeholder="www.aguasalquimia.cl"
                                            id="pagweb-cli">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Vigencia</label>
                                        <select class="form-select" name="" id="vigen-cli">
                                            <option value="2">Vigente</option>
                                            <option value="3">No Vigente</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="editar p-2 text-center" id="editar" style="display: none">
                            <script>
                                function preedit() {
                                    var x = document.getElementById("editar");
                                    if (x.style.display === "none") {
                                        x.style.display = "block";
                                    } else {
                                        x.style.display = "none";
                                    }
                                }
                            </script>
                            <h6 class="text-success">Los datos se han editado correctamente. 
                                <span>
                                    <i class="far fa-check-circle"></i>
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn bg-gradient-primary" onclick="preedit()">Guardar
                        Cambios</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AÑADIR PREVENTA -->
    <div class="modal fade" id="nueva-preventa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Nueva preventa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-color">
                    <div class="card">
                        <div class="card-body py-0">
                            <form class="formulario mt-3 ">
                                <div class="row mb-3">
                                    <div class="col-md-4 ">
                                        <label for="" class="form-label">Rut</label>
                                        <input type="text" class="form-control" placeholder="" id="rut-cli">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Moneda</label>
                                        <select class="form-select" name="" id="indica-cli">
                                            <option value="1">Seleccione Indicador</option>
                                            <option value="2">U.F</option>
                                            <option value="3">Dolar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Dias de
                                            pago</label>
                                        <input class="form-control" id="diapago-cli" type="number" placeholder="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Nombre
                                            Fantasia</label>
                                        <input class="form-control" type="text" id="nomfanta-cli" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Razón
                                            Social</label>
                                        <input type="text" class="form-control" placeholder="" id="razonsoci-cli">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" placeholder="" id="direc-contac">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Giro</label>
                                        <input type="text" class="form-control" placeholder="" id="giro-cli">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Telefono</label>
                                        <input type="number" class="form-control" placeholder="" id="telefono-cli">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Pag.
                                            Web</label>
                                        <input type="url" class="form-control" placeholder="" id="pagweb-cli">
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
                        <div class="nueva p-2 text-center" id="nueva" style="display: none">
                            <script>
                                function nuevapre() {
                                    var x = document.getElementById("nueva");
                                    if (x.style.display === "none") {
                                        x.style.display = "block";
                                    } else {
                                        x.style.display = "none";
                                    }
                                }
                            </script>
                            <h6 class="text-success">La preventa se ha creado correctamente. 
                                <span>
                                    <i class="far fa-check-circle"></i>
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn bg-gradient-primary" onclick="nuevapre()">Guardar
                        Cambios</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL ENVIAR COTIZACIÓN -->
    <div class="modal fade" id="enviar-preventa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <h6 class="text-success">La preventa se ha enviado correctamente.</h6>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
@endsection
