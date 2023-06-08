@extends('layouts.user_type.auth')

@section('content')
    <h5>Operaciones <i class="fas fa-caret-right"></i> Proyectos</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <!-- BOARD -->
            <div class="card">
                <div class="card-header bg-fondo p-3">
                    <form id="todo-form">
                        <input type="text" placeholder="Agregar por iniciar..." id="todo-input" />
                        <button type="submit">Agregar +</button>
                    </form>
                </div>
                <div class="card-body board px-0">
                    <div class="container ">
                        <div class="lanes d-flex">
                            <div class="swim-lane" id="todo-lane">
                                <h3 class="heading">Por iniciar</h3>
                            </div>

                            <div class="swim-lane">
                                <h3 class="heading">En curso</h3>
                            </div>

                            <div class="swim-lane">
                                <h3 class="heading">Stand by</h3>
                            </div>
                            <div class="swim-lane">
                                <h3 class="heading">QA cliente</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TABLA COLUMNA SEMANAL -->
            <div class="card mt-3">
                <div class="card-header  p-2 titulo-proy">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <p class="text-sm mb-0">
                                <i class="fa fa-percent text-info" aria-hidden="true"></i>
                                <span class="font-weight-bold text-white ms-1">Avance / </span>semanal
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <!-- INICIO TABLA AVANCE--- 
                    ---------------------------->
                    <div class="table-responsive">
                        <table class="table table-hover align-items-center mb-0">
                            <!-- TITULOS TABLA -->
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Persona</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Semana 1</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Semana 2</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Semana 3</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Semana 4</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Semana 5</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Semana 6</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- INICIO PERSONA 1 -->
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/team-1.jpg" class="avatar avatar-sm me-3"
                                                    alt="xd">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a class="mb-0 text-sm " href="#" data-bs-toggle="modal"
                                                    data-bs-target="#persona1">{Nombre persona}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=" text-center text-sm">
                                        60%
                                    </td>
                                    <td class=" text-center text-sm">
                                        80%
                                    </td>
                                    <td class=" text-center text-sm">
                                        20%
                                    </td>
                                    <td class=" text-center text-sm">
                                        38%
                                    </td>
                                    <td class=" text-center text-sm">
                                        73%
                                    </td>
                                    <td class=" text-center text-sm">
                                        91%
                                    </td>
                                </tr>
                                <!-- INICIO PERSONA 2 -->
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3"
                                                    alt="atlassian">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a class="mb-0 text-sm " href="#">{Nombre persona}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>

                                    </td>
                                    <td class="align-middle text-center text-sm">

                                    </td>
                                    <td class="align-middle">

                                    </td>
                                    <td class="align-middle">

                                    </td>
                                    <td class="align-middle">

                                    </td>
                                    <td class="align-middle">

                                    </td>
                                </tr>
                                <!-- INICIO PERSONA 3 -->
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                    alt="atlassian">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <a class="mb-0 text-sm" href="#">{Nombre persona}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>

                                    </td>
                                    <td class="align-middle text-center text-sm">

                                    </td>
                                    <td class="align-middle">

                                    </td>
                                    <td class="align-middle">

                                    </td>
                                    <td class="align-middle">

                                    </td>
                                    <td class="align-middle">

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

    <!-- MODAL PERSONA 1 -->
    <div class="modal fade" id="persona1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title text-white" id="exampleModalLabel">{Persona 1}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-color">
                    <div class="card">
                        <div class="card-body">
                            <div class="identificacion-cli">
                                <h6 class="text-secondary font-weight-bold text-center ">
                                    Identificación Usuario</h6>
                                <hr>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 text-center">
                                    <label for="" class="form-label fw-bold" style="font-size: 13px">{Nombre
                                        persona}
                                </div>
                                <div class="col-md-6 text-center">
                                    <label for="" class="form-label fw-bold" style="font-size: 13px">Fecha:
                                        <span>{fecha}</span></label>
                                </div>
                            </div>
                            <div class="identificacion-cli">
                                <h6 class="text-dark font-weight-bold text-left ">
                                    Proyecto actual</h6>
                            </div>
                            <div class="d-flex position-relative  bg-light proyecto">
                                <span class="ps-3 pb-3 pt-3">
                                    <img src="../assets/img/small-logos/logo-slack.svg"
                                        class="flex-shrink-0 me-3  bg-white rounded-3" alt="...">
                                </span>
                                <div class="pt-3 px-2">
                                    <h6 class="text-dark fw-bold mt-0">{Nombre del proyecto}</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Minus quidem soluta repellendus optio maiores perspiciatis
                                        dolore consequatur inventore adipisci voluptate aperiam
                                        quaerat accusamus perferendis dolorum animi, id facilis.
                                        Delectus, quae?</p>
                                </div>
                            </div>
                            <div class="identificacion-cli pt-3">
                                <h6 class="text-dark font-weight-bold text-left ">
                                    Tabla de horas de carga (proyectos)</h6>
                            </div>
                            <div class="table-responsive pt-2">
                                <table class="table table-hover">
                                    <thead>
                                        <th class="text-dark text-xs fw-bold">Proyectos</th>
                                        <th class="text-center text-dark text-xs fw-bold">Horas de carga</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-xd.svg"
                                                            class="avatar avatar-sm me-3" alt="xd">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm text-black-50">Proyecto 1</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                {Horas}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-atlassian.svg"
                                                            class="avatar avatar-sm me-3" alt="xd">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm text-black-50">Proyecto 1</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                {Horas}
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn bg-gradient-primary">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL PERSONA 2 -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL PERSONA 3 -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
