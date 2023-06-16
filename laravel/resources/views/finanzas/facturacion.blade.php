@extends('layouts.user_type.auth')

@section('content')
    <h5>Finanzas <i class="fas fa-caret-right"></i> Facturación</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card mb-2 cartacolor p-4">
                <div class="card-body px-0 pt-0 pb-2">
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
                                data-bs-target="#nueva-factura">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- INICIO TABLA FACTURACION--
                        ----------------------------->
                    <div class="table-responsive">
                        <table class="table align-items-center table-striped table-hover table-cotizacion mb-0 ">
                            <!-- TITULOS TABLA -->
                            <thead class="colortabla">
                                <tr class="colorletratabla">
                                    <th class="text-uppercase text-white text-xxs font-weight-bolder ps-2">
                                        N° Factura
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Tipo
                                    </th>
                                    <th class="text-uppercase text-white text-xxs font-weight-bolder ps-2">
                                        N° Cotización
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Cliente
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Contacto
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        F. Emisión
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        F. Vencimiento
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Neto
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        IVA
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Total
                                    </th>
                                    <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                        Estado
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
                                        <td class="ps-2 text-left" >
                                            <p class="text-xs font-weight-bold mb-0">4479</p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">Factura Exenta</p>
                                        </td>
                                        <td class="ps-2 text-left" >
                                            <p class="text-xs font-weight-bold mb-0">4479</p>
                                        </td>
                                        <td class="ps-2 text-left" >
                                            <p class="text-xs font-weight-bold mb-0">COPEC</p>
                                        </td>
                                        <td class="text-left" >
                                            <p class="text-xs font-weight-bold mb-0">02/06/2023</p>
                                        </td>
                                        <td class="text-left" >
                                            <p class="text-xs font-weight-bold mb-0">07/07/2023</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">16/05/2023</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">3863513</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">0</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">3863513</p>
                                        </td>
                                        <td class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">Pendiente</p>
                                        </td>
                                        <!-- ACCIONES -->
                                        <td class="text-center text-sm sticky">
                                            <!-- EDITAR PREVENTA -->
                                            <a class="py-1" href="{{ url('editar-factura') }}">
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
                </div>
            </div>
        </div>
    </main>

    <!-- MODAL-----
    --------------->

    <!-- MODAL AGREGAR FACTURA -->
    <div class="modal fade" id="nueva-factura" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Nueva Factura</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-color">
                    <div class="card">
                        <div class="card-body py-0">
                            <form class="formulario mt-3">
                                <div class="row mb-3">
                                    <div class="col-md-4 ">
                                        <label for="" class="form-label">Cliente</label>
                                        <input type="text" class="form-control" placeholder="" id="cliente-fact">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Tipo Documento</label>
                                        <select class="form-select" name="" id="tipo-fact">
                                            <option value="1" selected>Factura Afecta</option>
                                            <option value="2">Factura Extenta</option>
                                            <option value="3">Nota de Credito</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">N°Factura</label>
                                        <input type="number" class="form-control" placeholder="" id="num-fact">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Fecha Emisión</label>
                                        <input class="form-control" type="date" id="femision-fact" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Fecha Vencimiento</label>
                                        <input class="form-control" type="date" id="fvencimiento-fact" placeholder="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Neto</label>
                                        <input class="form-control" type="number" id="neto-fact" placeholder="">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">IVA</label>
                                        <input class="form-control" type="number" id="iva-fact" placeholder="">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Total</label>
                                        <input class="form-control" type="number" id="total-fact" placeholder="">
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
                            <h6 class="text-success">La Factura se ha creado correctamente.
                                <span>
                                    <i class="far fa-check-circle"></i>
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn bg-gradient-primary" onclick="nuevapre()">Guardar
                        Cambios</button>
                </div>
            </div>
        </div>
    </div>
@endsection
