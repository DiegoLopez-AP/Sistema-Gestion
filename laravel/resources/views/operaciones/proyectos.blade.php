@extends('layouts.user_type.auth')

@section('content')
    <style>
        /* NUEVO */
        :root {
            --bg: #ebf0f7;
            --header: #fbf4f6;
            --text: #2e2e2f;
            --white: #ffffff;
            --light-grey: #c4cad3;
            --tag-1: #ceecfd;
            --tag-1-text: #2e87ba;
            --tag-2: #d6ede2;
            --tag-2-text: #13854e;
            --tag-3: #ceecfd;
            --tag-3-text: #2d86ba;
            --tag-4: #f2dcf5;
            --tag-4-text: #a734ba;
            --purple: #7784ee;
        }

        .app {
            background-color: var(--bg);
            width: 100%;
            min-height: 100vh;
        }

        h1 {
            font-size: 30px;
        }

        .project {
            padding: 2rem;
            max-width: 75%;
            width: 100%;
            display: inline-block;
        }

        .project-info {
            padding: 2rem 0;
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
        }

        .project-participants {
            display: flex;
            align-items: center;
        }

        .project-participants span,
        .project-participants__add {
            width: 30px;
            height: 30px;
            display: inline-block;
            background: var(--purple);
            border-radius: 100rem;
            margin: 0 0.2rem;
        }

        .project-participants__add {
            background: transparent;
            border: 1px dashed #969696;
            font-size: 0;
            cursor: pointer;
            position: relative;
        }

        .project-participants__add:after {
            content: "+";
            font-size: 15px;
            color: #969696;
        }

        .project-tasks {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            width: 100%;
            grid-column-gap: 1.5rem;
        }

        .project-column-heading {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .project-column-heading__title {
            font-size: 20px;
        }

        .project-column-heading__options {
            background: transparent;
            color: var(--light-grey);
            font-size: 18px;
            border: 0;
            cursor: pointer;
        }

        .task {
            cursor: move;
            background-color: var(--white);
            padding: 1rem;
            border-radius: 8px;
            width: 100%;
            box-shadow: rgba(99, 99, 99, 0.1) 0px 2px 8px 0px;
            margin-bottom: 1rem;
            border: 3px dashed transparent;
        }

        .task:hover {
            box-shadow: rgba(99, 99, 99, 0.3) 0px 2px 8px 0px;
            border-color: rgba(162, 179, 207, 0.2) !important;
        }

        .task p {
            font-size: 15px;
            margin: 1.2rem 0;
        }

        .task__tag {
            border-radius: 100px;
            padding: 2px 13px;
            font-size: 12px;
        }

        .task__tag--copyright {
            color: var(--tag-4-text);
            background-color: var(--tag-4);
        }

        .task__tag--design {
            color: var(--tag-3-text);
            background-color: var(--tag-3);
        }

        .task__tag--illustration {
            color: var(--tag-2-text);
            background-color: var(--tag-2);
        }

        .task__tags {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .task__options {
            background: transparent;
            border: 0;
            color: var(--light-grey);
            font-size: 17px;
        }

        .task__stats {
            position: relative;
            width: 100%;
            color: var(--light-grey);
            font-size: 12px;
        }

        .task__stats span:not(:last-of-type) {
            margin-right: 1rem;
        }

        .task__stats svg {
            margin-right: 5px;
        }

        .task__owner {
            width: 25px;
            height: 25px;
            border-radius: 100rem;
            background: var(--purple);
            position: absolute;
            display: inline-block;
            right: 0;
            bottom: 0;
        }

        .task-hover {
            border: 3px dashed var(--light-grey) !important;
        }

        .task-details {
            width: 24%;
            border-left: 1px solid #d9e0e9;
            display: inline-block;
            height: 100%;
            vertical-align: top;
            padding: 3rem 2rem;
        }

        .tag-progress {
            margin: 1.5rem 0;
        }

        .tag-progress h2 {
            font-size: 16px;
            margin-bottom: 1rem;
        }

        .tag-progress p {
            display: flex;
            width: 100%;
            justify-content: space-between;
        }

        .tag-progress p span {
            color: #b4b4b4;
        }

        .tag-progress .progress {
            width: 100%;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border: none;
            border-radius: 10px;
            height: 10px;
        }

        .tag-progress .progress::-webkit-progress-bar,
        .tag-progress .progress::-webkit-progress-value {
            border-radius: 10px;
        }

        .tag-progress .progress--copyright::-webkit-progress-bar {
            background-color: #ecd8e6;
        }

        .tag-progress .progress--copyright::-webkit-progress-value {
            background: #d459e8;
        }

        .tag-progress .progress--illustration::-webkit-progress-bar {
            background-color: #dee7e3;
        }

        .tag-progress .progress--illustration::-webkit-progress-value {
            background-color: #46bd84;
        }

        .tag-progress .progress--design::-webkit-progress-bar {
            background-color: #d8e7f4;
        }

        .tag-progress .progress--design::-webkit-progress-value {
            background-color: #08a0f7;
        }

        .task-activity h2 {
            font-size: 16px;
            margin-bottom: 1rem;
        }

        .task-activity li {
            list-style: none;
            margin: 1rem 0;
            padding: 0rem 1rem 1rem 3rem;
            position: relative;
        }

        .task-activity time {
            display: block;
            color: var(--light-grey);
        }

        .task-icon {
            width: 30px;
            height: 30px;
            border-radius: 100rem;
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .task-icon svg {
            font-size: 12px;
            color: var(--white);
        }

        .task-icon--attachment {
            background-color: #fba63c;
        }

        .task-icon--comment {
            background-color: #5dc983;
        }

        .task-icon--edit {
            background-color: #7784ee;
        }

        @media only screen and (max-width: 1300px) {
            .project {
                max-width: 100%;
            }

            .task-details {
                width: 100%;
                display: flex;
            }

            .tag-progress,
            .task-activity {
                flex-basis: 50%;
                background: var(--white);
                padding: 1rem;
                border-radius: 8px;
                margin: 1rem;
            }
        }

        @media only screen and (max-width: 1000px) {

            .project-column:nth-child(2),
            .project-column:nth-child(3) {
                display: none;
            }

            .project-tasks {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media only screen and (max-width: 600px) {
            .project-column:nth-child(4) {
                display: none;
            }

            .project-tasks {
                grid-template-columns: 1fr;
            }

            .task-details {
                flex-wrap: wrap;
                padding: 3rem 1rem;
            }

            .tag-progress,
            .task-activity {
                flex-basis: 100%;
            }

            h1 {
                font-size: 25px;
            }
        }
    </style>
    <h5>Operaciones <i class="fas fa-caret-right"></i> Proyectos</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <!-- TABLERO KANBAN -->
            <div class='app' style="background: #e4e9f7">
                <main class='project'>
                    <!-- FILTROS -->
                    <div class='project-info pt-0'>
                        <div class="input-group w-30">
                            <input type="text" class="form-control bg-white" style="height: 35px;" placeholder="Buscar"
                                aria-label="Recipient's username" aria-describedby="button-addon2"
                                id="inputGroup-sizing-sm">
                            <button class="btn bg-gradient-primary py-2" type="button" id="button-addon2"
                                style="height: 35px;"><i class="fas fa-search"></i></button>
                        </div>
                        <div class='project-participants'>
                            <span></span>
                            <span></span>
                            <span></span>
                            <button class='project-participants__add'>Add Participant</button>
                        </div>
                    </div>
                    <div class='project-tasks'>
                        <!-- COLUMNA POR INICIAR -->
                        <div class='project-column'>
                            <div class='project-column-heading'>
                                <h2 class='project-column-heading__title'>Por iniciar</h2><button
                                    class='project-column-heading__options' id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fas fa-ellipsis-h"></i></button>
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            <a href="" data-bs-toggle="modal" data-bs-target="#proyecto">
                                <div class='task pb-1 ' draggable='true'>
                                    <div class='task__tags'><span
                                            class='task__tag task__tag--copyright'>Fábrica</span><button
                                            class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                                    <p>Konsep hero title yang menarik</p>
                                    <div class='task__stats'>
                                        <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov
                                                24</time></span>
                                        <span><i class="fas fa-comment"></i>3</span>
                                        <span><i class="fas fa-paperclip"></i>7</span>
                                        <span class='task__owner'></span>
                                    </div>
                                </div>
                            </a>
                            <div class='task' draggable='true'>
                                <div class='task__tags'><span class='task__tag task__tag--design'>Infraestructura</span><button
                                        class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                                <p>Icon di section our services</p>
                                <div class='task__stats'>
                                    <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov
                                            24</time></span>
                                    <span><i class="fas fa-comment"></i>2</span>
                                    <span><i class="fas fa-paperclip"></i>5</span>
                                    <span class='task__owner'></span>
                                </div>
                            </div>
                            <div class='task' draggable='true'>
                                <div class='task__tags'><span
                                        class='task__tag task__tag--copyright'>Fábrica</span><button
                                        class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                                <p>Konsep hero title yang menarik</p>
                                <div class='task__stats'>
                                    <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov
                                            24</time></span>
                                    <span><i class="fas fa-comment"></i>2</span>
                                    <span><i class="fas fa-paperclip"></i>3</span>
                                    <span class='task__owner'></span>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNA EN CURSO -->
                        <div class='project-column'>
                            <div class='project-column-heading'>
                                <h2 class='project-column-heading__title'>En curso</h2><button
                                    class='project-column-heading__options'><i class="fas fa-ellipsis-h"></i></button>
                            </div>

                            <div class='task' draggable='true'>
                                <div class='task__tags'><span class='task__tag task__tag--design'>Infraestructura</span><button
                                        class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                                <p>Replace lorem ipsum text in the final designs</p>
                                <div class='task__stats'>
                                    <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov
                                            24</time></span>
                                    <span><i class="fas fa-comment"></i>5</span>
                                    <span><i class="fas fa-paperclip"></i>5</span>
                                    <span class='task__owner'></span>
                                </div>
                            </div>

                            <div class='task' draggable='true'>
                                <div class='task__tags'><span
                                        class='task__tag task__tag--illustration'>Outsourcing</span><button
                                        class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                                <p>Create and generate the custom SVG illustrations.</p>
                                <div class='task__stats'>
                                    <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov
                                            24</time></span>
                                    <span><i class="fas fa-comment"></i>8</span>
                                    <span><i class="fas fa-paperclip"></i>7</span>
                                    <span class='task__owner'></span>
                                </div>
                            </div>

                            <div class='task' draggable='true'>
                                <div class='task__tags'><span
                                        class='task__tag task__tag--copyright'>Fábrica</span><button
                                        class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                                <p>Proof read the legal page and check for and loopholes</p>
                                <div class='task__stats'>
                                    <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov
                                            24</time></span>
                                    <span><i class="fas fa-comment"></i>12</span>
                                    <span><i class="fas fa-paperclip"></i>11</span>
                                    <span class='task__owner'></span>
                                </div>
                            </div>

                            <div class='task' draggable='true'>
                                <div class='task__tags'><span
                                        class='task__tag task__tag--illustration'>Outsourcing</span><button
                                        class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                                <p>Create the landing page graphics for the hero slider.</p>
                                <div class='task__stats'>
                                    <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov
                                            24</time></span>
                                    <span><i class="fas fa-comment"></i>4</span>
                                    <span><i class="fas fa-paperclip"></i>8</span>
                                    <span class='task__owner'></span>
                                </div>
                            </div>

                        </div>
                        <!-- COLUMNA STAND BY -->
                        <div class='project-column'>
                            <div class='project-column-heading'>
                                <h2 class='project-column-heading__title'>Stand by</h2><button
                                    class='project-column-heading__options'><i class="fas fa-ellipsis-h"></i></button>
                            </div>

                            <div class='task' draggable='true'>
                                <div class='task__tags'><span
                                        class='task__tag task__tag--copyright'>Fábrica</span><button
                                        class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                                <p>Check the company we copied doesn't think we copied them.</p>
                                <div class='task__stats'>
                                    <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov
                                            24</time></span>
                                    <span><i class="fas fa-comment"></i>4</span>
                                    <span><i class="fas fa-paperclip"></i>0</span>
                                    <span class='task__owner'></span>
                                </div>
                            </div>
                            <div class='task' draggable='true'>
                                <div class='task__tags'><span class='task__tag task__tag--design'>Infraestructura</span><button
                                        class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                                <p>Design the about page.</p>
                                <div class='task__stats'>
                                    <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov
                                            24</time></span>
                                    <span><i class="fas fa-comment"></i>0</span>
                                    <span><i class="fas fa-paperclip"></i>5</span>
                                    <span class='task__owner'></span>
                                </div>
                            </div>
                            <div class='task' draggable='true'>
                                <div class='task__tags'><span
                                        class='task__tag task__tag--illustration'>Outsourcing</span><button
                                        class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                                <p>Move that one image 5px down to make Phil Happy.</p>
                                <div class='task__stats'>
                                    <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov
                                            24</time></span>
                                    <span><i class="fas fa-comment"></i>2</span>
                                    <span><i class="fas fa-paperclip"></i>2</span>
                                    <span class='task__owner'></span>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNA QA CLIENTE -->
                        <div class='project-column'>
                            <div class='project-column-heading'>
                                <h2 class='project-column-heading__title'>QA Cliente</h2><button
                                    class='project-column-heading__options'><i class="fas fa-ellipsis-h"></i></button>
                            </div>

                            <div class='task' draggable='true'>
                                <div class='task__tags'><span
                                        class='task__tag task__tag--illustration'>Outsourcing</span><button
                                        class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                                <p>Send Advert illustrations over to production company.</p>
                                <div class='task__stats'>
                                    <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov
                                            24</time></span>
                                    <span><i class="fas fa-comment"></i>12</span>
                                    <span><i class="fas fa-paperclip"></i>5</span>
                                    <span class='task__owner'></span>
                                </div>
                            </div>

                            <div class='task' draggable='true'>
                                <div class='task__tags'><span
                                        class='task__tag task__tag--illustration'>Infraestructura</span><button
                                        class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                                <p>Dawn wants to move the text 3px to the right.</p>
                                <div class='task__stats'>
                                    <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov
                                            24</time></span>
                                    <span><i class="fas fa-comment"></i>3</span>
                                    <span><i class="fas fa-paperclip"></i>7</span>
                                    <span class='task__owner'></span>
                                </div>
                            </div>

                            <div class='task' draggable='true'>
                                <div class='task__tags'><span
                                        class='task__tag task__tag--copyright'>Fábrica</span><button
                                        class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                                <p>Amend the contract details.</p>
                                <div class='task__stats'>
                                    <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov
                                            24</time></span>
                                    <span><i class="fas fa-comment"></i>8</span>
                                    <span><i class="fas fa-paperclip"></i>16</span>
                                    <span class='task__owner'></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </main>
                <aside class='task-details'>
                    <!-- PROGRESO DE LAS TAREAS -->
                    <div class='tag-progress'>
                        <h2>Progreso de las tareas</h2>
                        <div class='tag-progress'>
                            <p>Fábrica <span>3/8</span></p>
                            <progress class="progress progress--copyright" max="8" value="3"> 3 </progress>
                        </div>
                        <div class='tag-progress'>
                            <p>Outsourcing <span>6/10</span></p>
                            <progress class="progress progress--illustration" max="10" value="6"> 6
                            </progress>
                        </div>
                        <div class='tag-progress'>
                            <p>Infraestructura<span>2/7</span></p>
                            <progress class="progress progress--design" max="7" value="2"> 2 </progress>
                        </div>
                    </div>
                    <!-- ACTIVIDAD RECIENTE -->
                    <div class='task-activity'>
                        <h2>Actividad Reciente</h2>
                        <ul>
                            <li>
                                <span class='task-icon task-icon--attachment'><i class="fas fa-paperclip"></i></span>
                                <b>Andrea </b>Subió 3 documentos
                                <time datetime="2023-06-24T20:00:00">Jun 27</time>
                            </li>
                            <li>
                                <span class='task-icon task-icon--comment'><i class="fas fa-comment"></i></span>
                                <b>Karen </b> Dejó un comentario
                                <time datetime="2021-11-24T20:00:00">Jun 26</time>
                            </li>
                            <li>
                                <span class='task-icon task-icon--edit'><i class="fas fa-pencil-alt"></i></span>
                                <b>Karen </b>Subió 3 doumentos
                                <time datetime="2021-11-24T20:00:00">Jun 25</time>
                            </li>
                            <li>
                                <span class='task-icon task-icon--attachment'><i class="fas fa-paperclip"></i></span>
                                <b>Andrea </b>Dejó un comentario
                                <time datetime="2021-11-24T20:00:00">Jun 24</time>
                            </li>
                            <li>
                                <span class='task-icon task-icon--comment'><i class="fas fa-comment"></i></span>
                                <b>Karen </b> left a comment
                                <time datetime="2021-11-24T20:00:00">Jun 23</time>
                            </li>
                        </ul>
                    </div>
                </aside>
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

    <!--JS KANBAN-->
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {

            var dragSrcEl = null;

            function handleDragStart(e) {
                this.style.opacity = '0.1';
                this.style.border = '3px dashed #c4cad3';

                dragSrcEl = this;

                e.dataTransfer.effectAllowed = 'move';
                e.dataTransfer.setData('text/html', this.innerHTML);
            }

            function handleDragOver(e) {
                if (e.preventDefault) {
                    e.preventDefault();
                }

                e.dataTransfer.dropEffect = 'move';

                return false;
            }

            function handleDragEnter(e) {
                this.classList.add('task-hover');
            }

            function handleDragLeave(e) {
                this.classList.remove('task-hover');
            }

            function handleDrop(e) {
                if (e.stopPropagation) {
                    e.stopPropagation(); // stops the browser from redirecting.
                }

                if (dragSrcEl != this) {
                    dragSrcEl.innerHTML = this.innerHTML;
                    this.innerHTML = e.dataTransfer.getData('text/html');
                }

                return false;
            }

            function handleDragEnd(e) {
                this.style.opacity = '1';
                this.style.border = 0;

                items.forEach(function(item) {
                    item.classList.remove('task-hover');
                });
            }


            let items = document.querySelectorAll('.task');
            items.forEach(function(item) {
                item.addEventListener('dragstart', handleDragStart, false);
                item.addEventListener('dragenter', handleDragEnter, false);
                item.addEventListener('dragover', handleDragOver, false);
                item.addEventListener('dragleave', handleDragLeave, false);
                item.addEventListener('drop', handleDrop, false);
                item.addEventListener('dragend', handleDragEnd, false);
            });
        });
    </script>

    <!-- MODALS -----
    ------------------>

    <!-- MODAL PROYECTO -->
    <div class="modal fade" id="proyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-fondo">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Proyecto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex position-relative  bg-light proyecto">
                        <span class="ps-3 pt-2 pb-2">
                            <img src="../assets/img/small-logos/logo-slack.svg"
                                class="flex-shrink-0 me-3  bg-white rounded-3" alt="..." height="35px">
                        </span>
                        <div class="pt-3">
                            <h6 class="text-dark fw-bold">{Nombre proyecto}</h6>
                        </div>
                    </div>
                    <div class="row pt-3 pb-0">
                        <div class="col-md-12">
                            <label class="form-label" for=""><i class="fas fa-pen pe-1 text-xs"></i>Añadir
                                Descripción:</label>
                            <textarea class="form-control" style="border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;" name=""
                                id="textarea" cols="90" rows="3" placeholder="Añada una descrición del proyecto">El proyecto consiste en la creación de un sistema de gestión interactivo que tiene como objetivo facilitar las tareas diarias de las distintas áreas de la empresa...</textarea>
                        </div>
                        <!--
                                            <div class="text-end pt-3">
                                                <button type="button" class="btn btn-secondary btn-sm">Guardar</button>
                                            </div>
                                        ---->
                    </div>
                    <!-- TABLA MIEMBROS -->
                    <div class="accordion mt-3" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne" style="background-color: #f2f2f2">
                                <button class="accordion-button collapsed text-dark fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <i class="fas fa-users pe-1 text-xs"></i>Miembros /<span
                                        class="text-black-50 ps-2">{Grupo}</span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body mt-2">
                                    <!--
                                                                                <div class="filtros d-flex justify-content-between pb-1">http://127.0.0.1:8000/proyectos#
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
                                                                                --->
                                    <div class="table-responsive ">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-dark" scope="col">#</th>
                                                    <th class="text-dark" scope="col">Miembro</th>
                                                    <th class="text-dark" scope="col">Grupo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        Nombre
                                                    </td>
                                                    <td>Grupo 1</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>
                                                        Nombre
                                                    </td>
                                                    <td>Grupo 1</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>
                                                        Nombre
                                                    </td>
                                                    <td>Grupo 1</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn bg-gradient-primary">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>
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
                                        class="flex-shrink-0 me-3  bg-white rounded-3" alt="..." height="75px">
                                </span>
                                <div class="pt-3 px-2">
                                    <h6 class="text-dark fw-bold mt-0">{Nombre del proyecto}</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Minus quidem soluta repellendus optio maiores perspiciatis
                                        dolore.</p>
                                </div>
                            </div>
                            <div class="identificacion-cli pt-2 pb-1 bg-light mt-4"
                                style="border-top-left-radius: 5px; border-top-right-radius: 5px">
                                <h6 class="text-dark font-weight-bold text-left">
                                    <i class="fas fa-clock px-1"></i>Tabla de horas de carga /<span
                                        class="text-black-50 ps-2">Proyectos</span>
                                </h6>
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
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
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
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
