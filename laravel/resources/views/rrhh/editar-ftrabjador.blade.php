@extends('layouts.user_type.auth')

@section('content')
<h5> <a href="{{ url('ficha-ptrabajador') }}">Ficha Personal Trabajador</a> <i class="fas fa-caret-right"></i> Trabajador ACEVEDO FLORES MIGUEL ANGEL</h5>
    <div class="line_title"></div>
    <div class="boton">
        <a href="{{ url('ficha-ptrabajador') }}" class="btn bg-gradient-primary btn-sm px-4 py-2" type="button">Volver</a>
    </div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <form class="form bg-white" id="formulario" method="post">
                <!-- PAGINA 1 -->
                <div id="pagina1" class="pagina activa">
                    <div class="position-relative m-4">
                        <div class="progress" style="height: 1px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <button type="button"
                            class="position-absolute top-1 start-0 translate-middle btn btn-sm bg-gradient-primary rounded-pill">1</button>
                        <button type="button"
                            class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-secondary rounded-pill">2</button>
                        <button type="button"
                            class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill">3</button>
                    </div>
                    <div class="paso_header p-0 mb-2 pt-2">
                        <h4 class="paso_title">Información personal</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label" for="">Cod. Trabajador</label>
                            <input class="form-control" type="text" id="cod-trabajador" name="cod-trabajador">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="">Vigencia</label>
                            <select class="form-select" name="vigencia" id="vigencia">
                                <option value="1">Vigente</option>
                                <option value="2">No Vigente</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label class="form-label" for="">Nombre</label>
                            <input class="form-control" type="text" id="cod-trabajador" name="cod-trabajador">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="">Ap. Paterno</label>
                            <input class="form-control" type="text" id="nombre" name="nombre">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="">Ap. Materno</label>
                            <input class="form-control" type="text" id="nombre" name="nombre">
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
                                <option value="0">Seleccione comuna</option>
                                <option value="1">Comuna 1</option>
                                <option value="2">Comuna 2</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="">Ciudad</label>
                            <input class="form-control" type="text" id="rut" name="rut">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label class="form-label" for="">Fono Particular</label>
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
                            <input class="form-control" type="text" id="nacionalidad" name="nacionalidad">
                        </div>
                    </div>
                    <!-- BOTON SIGUIENTE -->
                    <div class="paso_footer">
                        <button class="btn bg-gradient-primary mt-4 px-4" type="button"
                            onclick="mostrarPagina(2)">Siguiente</button>
                    </div>
                </div>
                <!-- PAGINA 2 -->
                <div id="pagina2" class="pagina">
                    <div class="position-relative m-4">
                        <div class="progress" style="height: 1px;">
                            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%;"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <button type="button"
                            class="position-absolute top-1 start-0 translate-middle btn btn-sm bg-gradient-primary rounded-pill">1</button>
                        <button type="button"
                            class="position-absolute top-0 start-50 translate-middle btn btn-sm bg-gradient-primary rounded-pill">2</button>
                        <button type="button"
                            class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill">3</button>
                    </div>
                    <div class="paso_header pt-2">
                        <h4 class="paso_title">Información trabajador</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label class="form-label" for="">Cargo</label>
                            <input size="16" type="text" class="form-control" id="cargo">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="">Gerencia o Unidad</label>
                            <input class="form-control" type="text" id="gerencia" name="gerencia">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="">F. Contrato Inicio</label>
                            <input type="date" id="start" name="trip-start" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="">F. Contrato Término</label>
                            <input type="date" id="start" name="trip-start" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <label class="form-label" for="">AFP</label>
                            <select class="form-select" name="vigencia" id="vigencia">
                                <option value="0">Seleccione</option>
                                <option value="1">Valor 1</option>
                                <option value="2">Valor 2</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label" for="">Salud</label>
                            <select class="form-select" name="vigencia" id="vigencia">
                                <option value="0">Seleccione</option>
                                <option value="1">Valor 1</option>
                                <option value="2">Valor 2</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="">N° de Cuenta</label>
                            <input class="form-control" type="text" id="e-civil" name="e-civil">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label" for="">Tipo Cuenta</label>
                            <select class="form-select" name="vigencia" id="vigencia">
                                <option value="0">Seleccione</option>
                                <option value="1">Valor 1</option>
                                <option value="2">Valor 2</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="">Banco</label>
                            <select class="form-select" name="vigencia" id="vigencia">
                                <option value="0">Seleccione</option>
                                <option value="1">Valor 1</option>
                                <option value="2">Valor 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <label class="form-label" for="">Seguro Cesantía</label>
                            <select class="form-select" name="s-cesantia" id="s-cesantia">
                                <option value="0">Seleccione</option>
                                <option value="1">SI</option>
                                <option value="2">NO</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label" for="">Fecha 1° Cot.AFP</label>
                            <input type="date" id="start" name="trip-start" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="">Mail G-talent</label>
                            <input class="form-control" type="text" id="m-gtalent" name="m-gtalent">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="">Mail Personal</label>
                            <input class="form-control" type="text" id="m-personal" name="m-personal">
                        </div>
                    </div>
                    <!-- BOTONES ANTERIOR Y SIGUIENTE -->
                    <div class="paso_footer">
                        <button class="btn btn-secondary mt-4 px-4" type="button"
                            onclick="mostrarPagina(1)">Anterior</button>
                        <button class="btn bg-gradient-primary mt-4 px-4" type="button"
                            onclick="mostrarPagina(3)">Siguiente</button>
                    </div>
                </div>
                <!-- PAGINA 3 -->
                <div id="pagina3" class="pagina">
                    <div class="position-relative m-4">
                        <div class="progress" style="height: 1px;">
                            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 100%;"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <button type="button"
                            class="position-absolute top-1 start-0 translate-middle btn btn-sm bg-gradient-primary rounded-pill">1</button>
                        <button type="button"
                            class="position-absolute top-0 start-50 translate-middle btn btn-sm bg-gradient-primary rounded-pill">2</button>
                        <button type="button"
                            class="position-absolute top-0 start-100 translate-middle btn btn-sm bg-gradient-primary rounded-pill">3</button>
                    </div>
                    <div class="paso_header">
                        <h4 class="paso_title pt-2">Emergencias</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <label class="form-label" for="">Avisar a</label>
                            <input size="16" type="text" class="form-control" id="aviso">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="">Parentesco</label>
                            <input class="form-control" type="text" id="parentesco" name="parentesco">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="">Fono Emergencia</label>
                            <input class="form-control" type="text" id="parentesco" name="parentesco">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="formFile" class="form-label">Foto</label>
                            <input class="form-control" type="file" id="foto-eme">
                        </div>
                    </div>
                    <!-- BOTONES ANTERIOR Y ENVIAR -->
                    <div class="paso_footer">
                        <button class=" btn btn-secondary mt-4 px-4" type="button"
                            onclick="mostrarPagina(2)">Anterior</button>
                        <button class=" btn bg-gradient-primary mt-4 px-4" type="button">Enviar</button>
                    </div>

                </div>
            </form>
        </div>
    </main>
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
