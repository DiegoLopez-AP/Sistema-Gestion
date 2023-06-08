@extends('layouts.user_type.auth')

@section('content')
    <h5 class="m-2">RRHH <i class="fas fa-caret-right"></i> Curriculum</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card mb-2 cartacolor p-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="d-flex flex-row pb-2">
                        <input id="buscar" type="search" placeholder="Buscar Cliente" class="form-control1 my-2 py-1">
                        <span class="py-1 px-2 my-2">
                            <i class="fas fa-search"></i>
                        </span>
                        <button type="button" class="btn bg-gradient-primary m-2 px-4 py-2" data-bs-toggle="modal"
                            data-bs-target="#curriculum">
                            Nuevo
                        </button>
                    </div>
                    <!-- INICIO TABLA CURRICULUM---
                                ------------------------------->
                    <div class="table-responsive">
                        <table class="table align-items-center table-striped table-hover mb-0 " width="100%">
                            <!-- TITULOS TABLA -->
                            <thead class="colortabla">
                                <tr class="colorletratabla">
                                    <th class="text-left text-uppercase text-white text-xxs font-weight-bolder ps-2">
                                        Paterno
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Materno
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Nombres
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Rut
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Fecha de Nac.
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Celular
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Mail
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Accion
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- INICIO ITEM 1 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">ACEVEDO</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">ABARCA</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">CARLOS ROBERTO</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">13.720.988-8</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">09/02/1987</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">955802332</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">azevedo.carlitos@gmail.com, <br>
                                            carlos.acevedo@outlook.cl</p>
                                    </td>

                                    <td class="text-center">
                                        <!-- BOTON ABRIR CURRICULUM -->
                                        <a href="{{ url('#') }}" class="" data-bs-toggle="modal"
                                            data-bs-target="#curriculum" type=""><i class="fas fa-file-invoice"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 2 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">BARRERA</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">SIERRALTA</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">PEDRO</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">52.004.665-8</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">09/02/1987</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">9219 2009</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">barrerasierralta@gmail.com</p>
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ url('#') }}" class="" data-bs-toggle="modal"
                                            data-bs-target="#curriculum" type=""><i class="fas fa-file-invoice"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 3 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">CERDA</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">VIDAL</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">LAURA PAZ</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"> 17.079.071-5</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">569 98310966 / <br> 569 93447419</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">lpcerda@uc.cl</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('#') }}" class="" data-bs-toggle="modal"
                                            data-bs-target="#curriculum" type=""><i class="fas fa-file-invoice"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 4 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">GATICA</p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">MUÑOZ</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">ENRIQUE</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">11.750.178-7</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">09/02/1987</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">85476621</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">jamorale@fen.uchile.cl</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('#') }}" class="" data-bs-toggle="modal"
                                            data-bs-target="#curriculum" type=""><i
                                                class="fas fa-file-invoice"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 5 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
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
                                    <td class="text-center">
                                        {{-- <a class="btn bg-gradient-secondary m-2 px-4 py-2" href=""
                                            type="button"></i></a> --}}
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

    <!-- MODAL CURRICULUM -->
    <div class="modal fade bd-example-modal-lg" id="curriculum" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content ">
                <div class="modal-header bg-fondo">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Curriculum</h1>
                    <button type="button" class="btn-close cerrar-modal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body modal-curriculum">
                    <div class="container">
                        <form class="form bg-white" action="#" method="post">
                            <div class="paso active" id="paso-1">
                                <div class="paso_header">
                                    <h4 class="paso_title curriculum">Información
                                        personal</h4>
                                </div>
                                <div class="paso_body text-start">
                                    <div class="row ">
                                        <div class="col-md-3 ">
                                            <label class="form-label" for="">Nombre</label>
                                            <input class="form-control" type="text" id="nombre" name="nombre">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="">Ap. Paterno</label>
                                            <input class="form-control" type="text" id="ap-paterno"
                                                name="ap-materno">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="">Ap. Materno</label>
                                            <input class="form-control" type="text" id="ap-materno"
                                                name="ap-materno">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="">Rut</label>
                                            <input class="form-control" type="text" id="rut" name="rut">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-3">
                                            <label class="form-label" for="">Fecha de Nacimiento</label>
                                            <input type="date" id="start" name="trip-start" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="">Dirección</label>
                                            <input class="form-control" type="text" id="nombre" name="nombre">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="">Comuna</label>
                                            <select class="form-select" name="vigencia" id="vigencia">
                                                <option value="0">Seleccione
                                                    comuna</option>
                                                <option value="1">Comuna 1
                                                </option>
                                                <option value="2">Comuna 2
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="">Ciudad</label>
                                            <input class="form-control" type="text" id="rut" name="rut">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-3">
                                            <label class="form-label" for="">Fono
                                                Particular</label>
                                            <input size="16" type="number" class="form-control" id="fono-parti">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="">Celular</label>
                                            <input class="form-control" type="number" id="celular" name="celular">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="">Estado Civil</label>
                                            <input class="form-control" type="text" id="e-civil" name="e-civil">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="">Nacionalidad</label>
                                            <input class="form-control" type="text" id="nacionalidad"
                                                name="nacionalidad">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-5">
                                            <label class="form-label" for="">Mail</label>
                                            <input class="form-control" type="text" id="mail" name="mail">
                                        </div>
                                        <div class="col-md-7">
                                            <label for="formFile" class="form-label text-left">Foto</label>
                                            <input class="form-control" type="file" id="foto-eme">
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion pt-4" id="accordionExample" >
                                    <div class="accordion-item">
                                      <h2 class="accordion-header bg-dark" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Profesión
                                        </button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header bg-dark" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Resumen
                                        </button>
                                      </h2>
                                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header bg-dark" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Experiencia
                                        </button>
                                      </h2>
                                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn bg-gradient-primary">Guardar
                            Cambios</button>
                    </div>
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
