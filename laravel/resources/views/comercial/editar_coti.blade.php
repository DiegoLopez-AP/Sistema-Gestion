@extends('layouts.user_type.auth')

@section('content')
    <h5> <a href="{{ url('cotizaciones') }}">Cotizaciones</a> <i class="fas fa-caret-right"></i> Cotización GT-DS-5373 SISTEMA
        COTIZACIONES ALUPROF</h5>
    <div class="line_title"></div>
    <div class="boton">
        <a href="{{ url('cotizaciones') }}" class="btn bg-gradient-primary btn-sm px-4 py-2" type="button">Volver</a>
    </div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card cartacolor">
                <div class="card-body">
                    <!--FORMULARIO EDITAR COTIZACION-->
                    <form id="formulario" class="pb-0">
                        <div class="pagina activa p-2 " id="pagina1">
                            <h6 class="text-dark text-left fw-bold">Cotización: 5373
                                <span class="float-end text-success">Terminada</span>
                            </h6>
                            <hr>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="" class="form-label">NC o Cot</label>
                                    <input type="text" class="form-control " value="Nota de cobro" disabled>
                                </div>
                                <div class="col-md-1">
                                    <label for="" class="form-label">I.V.A %</label>
                                    <input type="text" class="form-control " placeholder="">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Cliente:</label>
                                    <input type="text" class="form-control " value="ALUPROF" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Tema</label>
                                    <input type="text" class="form-control " value="SISTEMA COTIZACIONES">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">N° Cotización:</label>
                                    <input type="text" class="form-control " value="5373" disabled>
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Estado:</label>
                                    <input type="text" class="form-control " value="Terminada" disabled>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-2">
                                    <label for="" class="form-label">Estado de la cotización:</label>
                                    <select class="form-select" name="" id="">
                                        <option value="1" selected>Aprobada</option>
                                        <option value="2">Rechazada</option>
                                    </select>
                                </div>
                                <div class="col-md-10">
                                    <label class="form-label" for="">Descripción Estado:</label>
                                    <textarea class="form-control" name="" id="textarea" cols="30" rows="3"
                                        placeholder="La cotización ha sido aprobada..."></textarea>
                                </div>
                            </div>
                            <h6 class="text-dark pt-4">Datos</h6>
                            <div class="line_separation"></div>
                            <div class="row ">
                                <div class="col-md-2">
                                    <label for="" class="form-label">Rut cliente:</label>
                                    <input type="text" class="form-control " value="99.520.000-7" disabled>
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Fecha Comprometida</label>
                                    <input type="date" class="form-control " placeholder="">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Jefe de Proyecto:</label>
                                    <input type="text" class="form-control " value="Tamara Ureta" disabled>
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Fecha Cotización:</label>
                                    <input type="date" class="form-control " value="08/06/2023" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Responsable:</label>
                                    <input type="text" class="form-control" value="Tamara Valeria Ureta Peralta">
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Fecha de Envío:</label>
                                    <input type="text" class="form-control " value="--" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Fecha OC compra:</label>
                                    <input type="text" class="form-control " value="--" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Fecha Facturación:</label>
                                    <input type="text" class="form-control " value="--" disabled>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Nº Orden Compra:</label>
                                    <input type="text" class="form-control " value="--" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Nº Factura Asociada:</label>
                                    <input type="text" class="form-control " value="--" disabled>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-3">
                                    <label for="" class="form-label">Total Horas:</label>
                                    <input type="text" class="form-control " value="568" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Total U.F:</label>
                                    <input type="text" class="form-control " value="568.00" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Total Pesos:</label>
                                    <input type="text" class="form-control fw-normal" value="20482506.00">
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Valor U.F:</label>
                                    <input type="text" class="form-control " value="36060.75" disabled>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Info Anexa:</label>
                                    <textarea class="form-control" name="" id="textarea" cols="30" rows="3"
                                        placeholder="Escriba una breve descripción..."></textarea>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Archivo: <span class="fw-bold ps-2"
                                            style="color: #0e50d7;">(20Mb. Máx.)</span></label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            <div class="boton pt-4 text-end">
                                <button href="#" class="btn btn-secondary btn-sm " type="button"
                                    onclick="distrib()">Modificar
                                </button>
                            </div>
                            <div class="mostrar" id="distrib" style="display: none">
                                <!-- FUNCION MODIFICAR -->
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
                                <div class=" mb-3 py-2 ps-2 rounded" style="background: rgba(0, 186, 0, 0.089)">
                                    <h6 class="text-success">Los datos han sido modificados con exito. <span><i
                                                class="fas fa-check-circle text-success"></i></span></h6>
                                </div>
                            </div>
                            <!-- BOTON SIGUIENTE -->
                            <div class="paso_footer pt-4">
                                <hr class="pb-0">
                                <button class="btn bg-gradient-primary mb-0 px-4" type="button"
                                    onclick="mostrarPagina(2)">Siguiente</button>
                            </div>
                        </div>
                    </form>
                    <!--PAGINA 2-->
                    <div class="pagina " id="pagina2">
                        <div class="mostrar" id="distrib" style="display: none">
                            <!-- FUNCION MODIFICAR -->
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
                            <div class=" mb-3 py-2 ps-2 rounded" style="background: rgba(0, 186, 0, 0.089)">
                                <h6 class="text-success">Los datos han sido modificados con exito. <span><i
                                            class="fas fa-check-circle text-success"></i></span></h6>
                            </div>
                        </div>
                        <div class="enviar" id="enviar" style="display: none">
                            <!-- FUNCION ENVIAR -->
                            <script>
                                function enviar() {
                                    var x = document.getElementById("enviar");
                                    if (x.style.display === "none") {
                                        x.style.display = "block";
                                    } else {
                                        x.style.display = "none";
                                    }
                                }
                            </script>
                            <div class=" mb-3 py-2 ps-2 rounded" style="background: rgba(0, 186, 0, 0.089)">
                                <h6 class="text-success">Enviado exitosamente. <span><i
                                            class="fas fa-check-circle text-success"></i></span></h6>
                            </div>
                        </div>
                        <div class="d-flex flex-row  justify-content-between pb-3">
                            <div class="boton">
                                <!--<button href="#" class="btn bg-gradient-primary btn-sm " type="button"
                                    onclick="distrib()">Modificar
                                </button>-->
                                <button href="#" class="btn bg-gradient-primary btn-sm" type="button"
                                    onclick="enviar()">Enviar
                                </button>
                                <button href="#" class="btn btn-danger btn-sm" type="button">PDF
                                </button>
                            </div>
                            <div class="boton">
                                <button class="btn bg-gradient-primary btn-circle" data-bs-toggle="modal"
                                    data-bs-target="#nuevo">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- INICIO TABLA EDITAR COTIZACIÓN--
                                ------------------------------------->
                        <div class="table-responsive">
                            <table class="table align-items-center table-striped table-hover mb-0 ">
                                <!-- TITULOS TABLA -->
                                <thead class="colortabla">
                                    <tr class="colorletratabla">
                                        <th class="text-uppercase text-white text-xxs font-weight-bolder ps-2">
                                            N°
                                        </th>
                                        <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                            Titulo
                                        </th>
                                        <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                            Tarifa
                                        </th>
                                        <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                            Valor
                                        </th>
                                        <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                            T.Horas
                                        </th>
                                        <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                            Total
                                        </th>
                                        <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                            Desarrollador
                                        </th>
                                        <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                            F. Inicio
                                        </th>
                                        <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                            F. Fin
                                        </th>
                                        <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                            Estado
                                        </th>
                                        <th class="text-center text-uppercase text-white text-xxs font-weight-bolder">
                                            Acción
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- INICIO ITEM 1 -->
                                    <tr>
                                        <a href="#">
                                            <td class="ps-2 text-left">
                                                <p class="text-xs font-weight-bold mb-0">1</p>
                                            </td>
                                            <td class="text-left">
                                                <p class="text-xs font-weight-bold mb-0">Asesoria Soporte Mayo
                                                    2023.</p>
                                            </td>
                                            <td class="text-left">
                                                <p class="text-xs font-weight-bold mb-0">Soporte</p>
                                            </td>
                                            <td class="text-left">
                                                <p class="text-xs font-weight-bold mb-0">1.00</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">568.00</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">568.00</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">G-Talent</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">01/05/2023</p>
                                            </td>
                                            <td class="text-left">
                                                <p class="text-xs font-weight-bold mb-0">31/05/2023</p>
                                            </td>
                                            <td class="text-left">
                                                <p class="text-xs font-weight-bold mb-0">Cerrado</p>
                                            </td>
                                            <!-- ACCIONES -->
                                            <td class="text-center text-sm sticky">
                                                <!-- EDITAR PREVENTA -->
                                                <a class="py-1" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#editar-re">
                                                    <i class="fa fa-pen mx-2 text-warning"></i>
                                                </a>
                                            </td>
                                        </a>
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
                                                data-bs-target="#editar-re">
                                                <i class="fa fa-pen mx-2 text-warning"></i>
                                            </a>
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
                                                data-bs-target="#editar-re">
                                                <i class="fa fa-pen mx-2 text-warning"></i>
                                            </a>
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
                                                data-bs-target="#editar-re">
                                                <i class="fa fa-pen mx-2 text-warning"></i>
                                            </a>
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
                                                data-bs-target="#editar-re">
                                                <i class="fa fa-pen mx-2 text-warning"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="editar text-center pt-5" id="editar" style="display: none">
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
                            <div class=" py-2 ps-2 rounded" style="background: rgba(0, 186, 0, 0.089)">
                                <h6 class="text-success">La Cotización ha sido editada exitosamente. <span><i
                                            class="fas fa-check-circle text-success"></i></span></h6>
                            </div>
                        </div>
                        <!-- BOTONES ANTERIOR Y SIGUIENTE -->
                        <div class="paso_footer pt-5">
                            <button class="btn btn-secondary" type="button" onclick="mostrarPagina(1)">Anterior</button>
                            <button class=" btn bg-gradient-primary" type="submit" onclick="editar()">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- MODALS -----
        ------------------>

    <!-- MODAL NUEVO REGISTRO -->
    <div class="modal fade" id="nuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Agregar Detalles</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <div class="card">
                        <div class="card-body">
                            <form class="formulario">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="" class="form-label">Titulo</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Tarifa</label>
                                        <select name="" id="" class="form-select">
                                            <option value="1" selected>Seleccione</option>
                                            <option value="2">Soporte</option>
                                            <option value="3">Analisis AWS</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Valor</label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">T. Horas</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Desarrollador</label>
                                        <select name="" id="" class="form-select">
                                            <option value="1" selected>Seleccione</option>
                                            <option value="2"></option>
                                            <option value="3"></option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">F. Inicio</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">F.Fin</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Detalle</label>
                                        <textarea class="form-control" name="" id="textarea" cols="30" rows="3"
                                            placeholder="Escriba una breve descripción..."></textarea>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Estado</label>
                                        <input type="text" class="form-control">
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
                            <h6 class="text-success">El registro se ha creado correctamente.
                                <span>
                                    <i class="far fa-check-circle"></i>
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-0">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn bg-gradient-primary" onclick="nueva()">Guardar
                        Cambios</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL EDITAR REGISTRO -->
    <div class="modal fade" id="editar-re" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Editar Detalles</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <div class="card">
                        <div class="card-body">
                            <form class="formulario">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="" class="form-label">Titulo</label>
                                        <input type="text" class="form-control" value="Asesoria Soporte Mayo 2023.">
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Tarifa</label>
                                        <select name="" id="" class="form-select">
                                            <option value="1">Seleccione</option>
                                            <option value="2" selected>Soporte</option>
                                            <option value="3">Analisis AWS</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Valor</label>
                                        <input type="number" class="form-control" value="1.00">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">T. Horas</label>
                                        <input type="text" class="form-control" value="568.00">
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Desarrollador</label>
                                        <select name="" id="" class="form-select">
                                            <option value="1">Seleccione</option>
                                            <option value="2" selected>G-Talent</option>
                                            <option value="3"></option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">F. Inicio</label>
                                        <input type="text" class="form-control" value="01/05/2023" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">F.Fin</label>
                                        <input type="text" class="form-control" value="31/05/2023" disabled>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Detalle</label>
                                        <textarea class="form-control" name="" id="textarea" cols="30" rows="3"
                                            placeholder="Escriba una breve descripción..."></textarea>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Estado</label>
                                        <input type="text" class="form-control" value="Cerrado" disabled>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="edit_re p-2 text-center" id="edit_re" style="display: none">
                            <script>
                                function edit_re() {
                                    var x = document.getElementById("edit_re");
                                    if (x.style.display === "none") {
                                        x.style.display = "block";
                                    } else {
                                        x.style.display = "none";
                                    }
                                }
                            </script>
                            <h6 class="text-success">El registro se ha editado correctamente.
                                <span>
                                    <i class="far fa-check-circle"></i>
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-0">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn bg-gradient-primary" onclick="edit_re()">Guardar
                        Cambios</button>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- FUNCIONES JS ----
---------------------->

<!-- FUNCION PAGINA SIGUIENTE -->
<script>
    function mostrarPagina(numeroPagina) {
        var paginas = document.querySelectorAll('.pagina');

        // Ocultar todas las páginas
        paginas.forEach(function(pagina) {
            pagina.classList.remove('activa');
        });

        // Mostrar la página seleccionada
        paginas[numeroPagina - 1].classList.add('activa');
    }

    // Configurar el envío del formulario
    document.getElementById('formulario').addEventListener('submit', function(event) {
        // Evitar el envío del formulario por defecto
        event.preventDefault();

        // Realizar las acciones necesarias al enviar el formulario
        // ...

        // Opcional: redireccionar a una página de confirmación
        // window.location.href = "confirmacion.html";
    });
</script>
