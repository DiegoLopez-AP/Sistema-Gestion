@extends('layouts.user_type.auth')

@section('content')
    <h5> <a href="{{ url('facturacion') }}">Facturación </a> <i class="fas fa-caret-right"></i> Factura 4479</h5>
    <div class="line_title"></div>
    <div class="boton">
        <a href="{{ url('facturacion') }}" class="btn bg-gradient-primary btn-sm px-4 py-2" type="button">Volver</a>
    </div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card cartacolor">
                <div class="card-body">
                    <form id="formulario" class="pb-0">
                        <div class="pagina activa p-2 " id="pagina1">
                            <h6 class="text-dark text-left fw-bold">Factura: 4479
                                <span class="float-end text-success"></span>
                            </h6>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Razón Social</label>
                                    <input type="text" class="form-control " value="Copec S.A" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Rut</label>
                                    <input type="text" class="form-control " placeholder="">
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Dirección</label>
                                    <input type="text" class="form-control text-truncate" value="El Bosque Norte N°0211 / Isidora Goyenechea N°2915, Piso 20" disabled>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Telefono</label>
                                    <input type="text" class="form-control " value="6907000">
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">N°Factura</label>
                                    <input type="text" class="form-control " value="4479" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Tipo Factura</label>
                                    <input type="text" class="form-control " value="Factura Exenta" disabled>
                                </div>
                            </div>
                            <h6 class="text-dark pt-4">Datos</h6>
                            <div class="line_separation"></div>
                            <div class="row ">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Fecha Emisión</label>
                                    <input type="text" class="form-control " value="02/06/2023">
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Fecha Vencimiento</label>
                                    <input type="text" class="form-control " value="07/07/2023">
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Neto</label>
                                    <input type="text" class="form-control " value="3863513" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">IVA</label>
                                    <input type="text" class="form-control " value="0" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Total</label>
                                    <input type="text" class="form-control " value="3863513" disabled>
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
                            <div class="paso_footer pt-5">
                                <hr class="pb-0">
                                <button class="btn bg-gradient-primary mb-0 px-4" type="button"
                                    onclick="mostrarPagina(2)">Siguiente</button>
                            </div>
                        </div>
                    </form>
                    <div class="pagina" id="pagina2">
                        <!-- FUNCION MODIFICAR 
                        <div class="mostrar" id="distrib" style="display: none">
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
                        ------->
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
                                            Orden Compra
                                        </th>
                                        <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                            N°Cot.
                                        </th>
                                        <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                            Cantidad
                                        </th>
                                        <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                            Precio Unitario
                                        </th>
                                        <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                            Valor
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
                                            <td class="text-left">
                                                <p class="text-xs font-weight-bold mb-0">9300105934</p>
                                            </td>
                                            <td class="text-left">
                                                <p class="text-xs font-weight-bold mb-0">5239</p>
                                            </td>
                                            <td class="text-left">
                                                <p class="text-xs font-weight-bold mb-0">108.00</p>
                                            </td>
                                            <td class="text-left">
                                                <p class="text-xs font-weight-bold mb-0">3863513.00</p>
                                            </td>
                                            <td class="text-left">
                                                <p class="text-xs font-weight-bold mb-0">3863513</p>
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
                                <h6 class="text-success">La Factura ha sido editada exitosamente. <span><i
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
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Agregar registro</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <div class="card">
                        <div class="card-body">
                            <form class="formulario">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Orden de Commpra</label>
                                        <select name="" id="" class="form-select">
                                            <option value="1" selected>Seleccione</option>
                                            <option value="2">9300105934</option>
                                            <option value="3"></option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">N°Cot.</label>
                                        <select name="" id="" class="form-select">
                                            <option value="1" selected>Seleccione</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Cantidad</label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Precio Unitario</label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Valor</label>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
                    <h5 class="modal-title  text-white" id="exampleModalLabel">Editar registro</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <div class="card">
                        <div class="card-body">
                            <form class="formulario">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Orden Compra</label>
                                        <input type="number" class="form-control" value="9300105934" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">N°Cot.</label>
                                        <input type="number" class="form-control" value="5239" disabled>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Cantidad</label>
                                        <input type="number" class="form-control" value="108.00">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Precio Unitario</label>
                                        <input type="number" class="form-control" value="3863513.00">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Valor</label>
                                        <input type="text" class="form-control" value="3863513">
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
