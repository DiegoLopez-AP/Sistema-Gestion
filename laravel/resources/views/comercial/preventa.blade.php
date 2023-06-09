@extends('layouts.user_type.auth')

@section('content')
    <h5>Comercial <i class="fas fa-caret-right"></i> Preventa</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card mb-2 cartacolor p-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <!-- Filtro ---
                    <form action="">
                        <div class="row align-items-center g-2">
                            <div class="col-4">
                                <label for="form-label" class="form-label">Proveedor</label>
                                <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example">
                                    <option selected>Proveedor</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-4 float-start">
                                <label for="form-label" class="form-label">Atención</label>
                                <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example">
                                    <option selected>Atención</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <hr>
                    -------->
                    <div class="filtros d-flex justify-content-between pb-1">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                        <div class="input-group w-30">
                            <input type="text" class="form-control" style="height: 35px;" placeholder="Buscar"
                                aria-label="Recipient's username" aria-describedby="button-addon2"
                                id="inputGroup-sizing-sm">
                            <button class="btn bg-gradient-primary py-2" type="button" id="button-addon2"
                                style="height: 35px;"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="boton-agregar text-end align-items-center pt-2">
                            <button class="btn bg-gradient-primary btn-circle" data-bs-toggle="modal"
                                data-bs-target="#nueva-preventa">
                                <i class="fas fa-plus"></i>
                            </button>
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
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Tipo
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Diseño
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        NC o COT
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
                                    <th class="text-center text-uppercase text-white text-xxs font-weight-bolder">
                                        Hitos de pago
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
                                    <a href="#">
                                        <td class="ps-2 text-left" onclick="distrib()">
                                            <p class="text-xs font-weight-bold mb-0">5334</p>
                                        </td>
                                        <td class="text-left" onclick="distrib()">
                                            <p class="text-xs font-weight-bold mb-0">LIPIGAS</p>
                                        </td>
                                        <td class="text-left" onclick="distrib()">
                                            <p class="text-xs font-weight-bold mb-0">Francisco
                                                Bergeret</p>
                                        </td>
                                        <td class="text-left" onclick="distrib()">
                                            <p class="text-xs font-weight-bold mb-0">Lorem ipsum dolor.</p>
                                        </td>
                                        <td class="text-center" onclick="distrib()">
                                            <p class="text-xs font-weight-bold mb-0">16/05/2023</p>
                                        </td>
                                        <td class="text-center" onclick="distrib()">
                                            <p class="text-xs font-weight-bold mb-0">Nuevo</p>
                                        </td>
                                        <td class="text-center" onclick="distrib()">
                                            <p class="text-xs font-weight-bold mb-0">Sin diseño</p>
                                        </td>
                                        <td class="text-center" onclick="distrib()">
                                            <p class="text-xs font-weight-bold mb-0">Cotización</p>
                                        </td>
                                        <td class="text-left" onclick="distrib()">
                                            <p class="text-xs font-weight-bold mb-0">En proceso</p>
                                        </td>
                                        <!-- ARCHIVO -->
                                        <td class="text-center text-sm" onclick="distrib()">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#-preventa">
                                                <i class="fa fa-paperclip"></i>
                                            </a>
                                        </td>
                                        <!-- EDT -->
                                        <td class="text-center text-sm" onclick="distrib()">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edt-preventa">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </td>
                                        <td class="text-left" onclick="distrib()">
                                            <p class="text-xs font-weight-bold mb-0">Enrique Gatica</p>
                                        </td>
                                        <!-- COTIZACIÓN -->
                                        <td class="text-center" onclick="distrib()">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#cotizacion-preventa">
                                                <i class="fa fa-dollar-sign"></i>
                                            </a>
                                        </td>
                                        <!-- HITOS DE PAGO -->
                                        <td class="text-center" onclick="distrib()">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#hito-preventa">
                                                <i class="fas fa-history"></i>
                                            </a>
                                        </td>
                                        <td class="text-left" onclick="distrib()">
                                            <p class="text-xs font-weight-bold mb-0">Iñaki Alaba</p>
                                        </td>
                                        <!-- ACCIONES -->
                                        <td class="text-center text-sm sticky" onclick="distrib()">
                                            <!-- EDITAR PREVENTA -->
                                            <a class="py-1" href="#" data-bs-toggle="modal"
                                                data-bs-target="#editar-preventa">
                                                <i class="fa fa-pen mx-2 text-warning"></i>
                                            </a>
                                            <!-- ENVIAR PREVENTA -->
                                            <a class="py-1" href="#" data-bs-toggle="modal"
                                                data-bs-target="#enviar-preventa">
                                                <i class="fa fa-envelope-open mx-2 " style="color: #0e50d7;"></i>
                                            </a>
                                            <!-- GENERAR PDF -->
                                            <a class="py-1" href="#">
                                                <i class="fa fa-file-pdf mx-2 text-danger"></i>
                                            </a>
                                        </td>
                                    </a>
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
                                            <i class="fa fa-pen mx-2 text-warning"></i>
                                        </a>
                                        <!-- ENVIAR PREVENTA -->
                                        <a class="py-1" href="#" data-bs-toggle="modal"
                                            data-bs-target="#enviar-preventa">
                                            <i class="fa fa-envelope-open mx-2 " style="color: #0e50d7;"></i>
                                        </a>
                                        <!-- GENERAR PDF -->
                                        <a class="py-1" href="#">
                                            <i class="fa fa-file-pdf mx-2 text-danger"></i>
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
                                            <i class="fa fa-pen mx-2 text-warning"></i>
                                        </a>
                                        <!-- ENVIAR PREVENTA -->
                                        <a class="py-1" href="#" data-bs-toggle="modal"
                                            data-bs-target="#enviar-preventa">
                                            <i class="fa fa-envelope-open mx-2 " style="color: #0e50d7;"></i>
                                        </a>
                                        <!-- GENERAR PDF -->
                                        <a class="py-1" href="#">
                                            <i class="fa fa-file-pdf mx-2 text-danger"></i>
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
                                            <i class="fa fa-pen mx-2 text-warning"></i>
                                        </a>
                                        <!-- ENVIAR PREVENTA -->
                                        <a class="py-1" href="#" data-bs-toggle="modal"
                                            data-bs-target="#enviar-preventa">
                                            <i class="fa fa-envelope-open mx-2 " style="color: #0e50d7;"></i>
                                        </a>
                                        <!-- GENERAR PDF -->
                                        <a class="py-1" href="#">
                                            <i class="fa fa-file-pdf mx-2 text-danger"></i>
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
                                            <i class="fa fa-pen mx-2 text-warning"></i>
                                        </a>
                                        <!-- ENVIAR PREVENTA -->
                                        <a class="py-1" href="#" data-bs-toggle="modal"
                                            data-bs-target="#enviar-preventa">
                                            <i class="fa fa-envelope-open mx-2 " style="color: #0e50d7;"></i>
                                        </a>
                                        <!-- GENERAR PDF -->
                                        <a class="py-1" href="#">
                                            <i class="fa fa-file-pdf mx-2 text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mostrar" id="distrib" style="display: none">
                        <!-- FUNCION MOSTRAR -->
                        <script>
                            function distrib() {
                                var x = document.getElementById("distrib");
                                if (x.style.display === "none") {
                                    x.style.display = "block";
                                } else {
                                    x.style.display = "none";
                                }
                            }
                        </script>
                        <!-- INICIO TABLA DISTRIBUCION PREVENTA--
                        ----------------------------------------->
                        <div class="table-responsive pt-4">
                            <div class="filtros d-flex justify-content-between ">
                                <h6 class="text-dark fw-bold pt-3 pb-0">Distribución de la preventa</h6>
                                <div class="boton-agregar text-end align-items-center pt-2">
                                    <button class="btn bg-gradient-primary btn-circle" data-bs-toggle="modal"
                                        data-bs-target="#distrib-preventa">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <table class="table align-items-center table-striped table-hover mb-0 ">
                                <!-- TITULOS TABLA -->
                                <thead class="colortabla">
                                    <tr class="colorletratabla">
                                        <th class="text-uppercase text-white text-xxs font-weight-bolder ps-2">
                                            Descripción
                                        </th>
                                        <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                            Tipo
                                        </th>
                                        <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                            Valor
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- INICIO ITEM 1 -->
                                    <tr>
                                        <td class="ps-2 text-left">
                                            <p class="text-xs font-weight-bold mb-0">100%</p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">%</p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">100.00</p>
                                        </td>
                                    </tr>
                                    <!-- INICIO ITEM 2 -->
                                    <tr>
                                        <td class="ps-2 text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                    </tr>
                                    <!-- INICIO ITEM 3 -->
                                    <tr>
                                        <td class="ps-2 text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                    </tr>
                                    <!-- INICIO ITEM 4 -->
                                    <tr>
                                        <td class="ps-2 text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                    </tr>
                                    <!-- INICIO ITEM 5 -->
                                    <tr>
                                        <td class="ps-2 text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-left">
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
                                            Estimación de tiempo /<span class="text-black-50 ps-2">{Horas}</span>
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
    <!-- MODAL HITOS DE PAGO -->
    <div class="modal fade" id="hito-preventa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Hitos de pago</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-color">
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
                                            <th scope="row">1</th>
                                            <td>Documentación de Sistema de Gestión</td>
                                            <td>08/06/2023</td>
                                            <td>{Horas}</td>
                                            <td>20%</td>
                                            <td>Finalizado</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Diseño de Sistema de Gestión</td>
                                            <td>08/06/2023</td>
                                            <td>{Horas}</td>
                                            <td>40%</td>
                                            <td>Finalizado</td>
                                        </tr>
                                        <tr>
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
                            <form class="formulario mt-3">
                                <div class="row mb-3">
                                    <div class="col-md-4 ">
                                        <label for="" class="form-label">Rut</label>
                                        <input type="text" class="form-control" placeholder="" id="rut-pre">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Razón
                                            Social</label>
                                        <input type="text" class="form-control" placeholder="" id="razonsoci-pre">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Telefono</label>
                                        <input type="number" class="form-control" placeholder="" id="telefono-pre">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Nombre
                                            Contacto</label>
                                        <input class="form-control" type="text" id="nomb-pre" placeholder="">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Correo</label>
                                        <input type="text" class="form-control" placeholder="" id="correo-pre">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Nombre
                                            Proyecto</label>
                                        <input class="form-control" type="text" id="nomb-proy" placeholder="">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Fecha</label>
                                        <input class="form-control" type="text" id="fecha-pre" placeholder="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Descripción:</label>
                                        <textarea class="form-control" name="" id="textarea" cols="30" rows="3"
                                            placeholder="Escriba una breve descripción..."></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-8">
                                        <label for="formFileSm" class="form-label">Documentación</label>
                                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Preventa</label>
                                        <select class="form-select" name="" id="vigen-pre">
                                            <option value="1" selected>Seleccione Preventa</option>
                                            <option value="2">Vigente</option>
                                            <option value="3">No Vigente</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Tipo</label>
                                        <select class="form-select" name="" id="vigen-pre">
                                            <option value="1" selected>Nuevo</option>
                                            <option value="2">Control de cambio</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Diseño</label>
                                        <select class="form-select" name="" id="vigen-pre">
                                            <option value="1" selected>Con Diseño</option>
                                            <option value="2">Sin Diseño</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">NC o COT</label>
                                        <select class="form-select" name="" id="vigen-pre">
                                            <option value="1" selected>Cotización</option>
                                            <option value="2">Nota de Cobro</option>
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
                            <form class="formulario mt-3">
                                <div class="row mb-3">
                                    <div class="col-md-4 ">
                                        <label for="" class="form-label">Rut</label>
                                        <input type="text" class="form-control" placeholder="" id="rut-pre">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Razón
                                            Social</label>
                                        <input type="text" class="form-control" placeholder="" id="razonsoci-pre">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Telefono</label>
                                        <input type="number" class="form-control" placeholder="" id="telefono-pre">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Nombre
                                            Contacto</label>
                                        <input class="form-control" type="text" id="nomb-pre" placeholder="">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Correo</label>
                                        <input type="text" class="form-control" placeholder="" id="correo-pre">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Nombre
                                            Proyecto</label>
                                        <input class="form-control" type="text" id="nomb-proy" placeholder="">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Fecha</label>
                                        <input class="form-control" type="text" id="fecha-pre" placeholder="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Descripción:</label>
                                        <textarea class="form-control" name="" id="textarea" cols="30" rows="3"
                                            placeholder="Escriba una breve descripción..."></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-8">
                                        <label for="formFileSm" class="form-label">Documentación</label>
                                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Preventa</label>
                                        <select class="form-select" name="" id="vigen-pre">
                                            <option value="1" selected>Seleccione Preventa</option>
                                            <option value="2">Vigente</option>
                                            <option value="3">No Vigente</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Tipo</label>
                                        <select class="form-select" name="" id="vigen-pre">
                                            <option value="1" selected>Nuevo</option>
                                            <option value="2">Control de cambio</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Diseño</label>
                                        <select class="form-select" name="" id="vigen-pre">
                                            <option value="1" selected>Con Diseño</option>
                                            <option value="2">Sin Diseño</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">NC o COT</label>
                                        <select class="form-select" name="" id="vigen-pre">
                                            <option value="1" selected>Cotización</option>
                                            <option value="2">Nota de Cobro</option>
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
    <!-- MODAL AÑADIR DESCRIPCIÓN PREVENTA -->
    <div class="modal fade" id="distrib-preventa" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Distribución Preventa</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body modal-color">
                    <div class="card">
                        <div class="card-body py-0">
                            <form class="formulario mt-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Descripción:</label>
                                        <textarea class="form-control" name="" id="textarea" cols="30" rows="3"
                                            placeholder="Escriba una breve descripción..."></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4 ">
                                        <label for="" class="form-label">Rut</label>
                                        <select class="form-select" name="" id="" disabled>
                                            <option value="1" selected>%</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="" class="form-label">Valor</label>
                                        <input type="number" class="form-control" placeholder="" id="">
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
