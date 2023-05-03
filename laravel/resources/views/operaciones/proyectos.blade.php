@extends('layouts.user_type.auth')

@section('content')
    <h5 class="m-2">Operaciones/Proyectos</h5>


    <div class="card">
        <div class="card-header  p-2 titulo-proy">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <p class="text-sm mb-0">
                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                        <span class="font-weight-bold text-white ms-1">Proyectos</span> del mes
                    </p>
                </div>

            </div>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive">
                <table class="table table-hover align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Proyectos</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Equipo</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Estado</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Progreso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3"
                                                alt="xd">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm text-black-50">Proyecto 1</h6>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="avatar-group mt-2">
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                                            <img src="../assets/img/team-1.jpg" alt="team1">
                                        </a>
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                                            <img src="../assets/img/team-2.jpg" alt="team2">
                                        </a>
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                                            <img src="../assets/img/team-3.jpg" alt="team3">
                                        </a>
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                                            <img src="../assets/img/team-4.jpg" alt="team4">
                                        </a>
                                    </div>
                                </a>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <span class="text-xs font-weight-bold text-danger"> Pendiente </span>
                                </a>
                            </td>
                            <td class="align-middle">
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="progress-wrapper w-75 mx-auto">
                                        <div class="progress-info">
                                            <div class="progress-percentage">
                                                <span class="text-xs font-weight-bold">60%</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-danger w-60" role="progressbar"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="../assets/img/small-logos/logo-atlassian.svg"
                                                class="avatar avatar-sm me-3" alt="atlassian">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm text-black-50">Proyecto 2</h6>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="avatar-group mt-2">
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                                            <img src="../assets/img/team-2.jpg" alt="team5">
                                        </a>
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                                            <img src="../assets/img/team-4.jpg" alt="team6">
                                        </a>
                                    </div>
                                </a>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <span class="text-xs font-weight-bold text-dark-50"> Cotizado </span>
                                </a>
                            </td>
                            <td class="align-middle">
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="progress-wrapper w-75 mx-auto">
                                        <div class="progress-info">
                                            <div class="progress-percentage">
                                                <span class="text-xs font-weight-bold ">10%</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-dark w-10" role="progressbar"
                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="../assets/img/small-logos/logo-slack.svg"
                                                class="avatar avatar-sm me-3" alt="team7">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm text-black-50">Proyecto 3</h6>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="avatar-group mt-2">
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                                            <img src="../assets/img/team-3.jpg" alt="team8">
                                        </a>
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                                            <img src="../assets/img/team-1.jpg" alt="team9">
                                        </a>
                                    </div>
                                </a>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <span class="text-xs font-weight-bold text-success"> Finalizado </span>
                                </a>
                            </td>
                            <td class="align-middle">
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="progress-wrapper w-75 mx-auto">
                                        <div class="progress-info">
                                            <div class="progress-percentage">
                                                <span class="text-xs font-weight-bold">100%</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success w-100" role="progressbar"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="../assets/img/small-logos/logo-spotify.svg"
                                                class="avatar avatar-sm me-3" alt="spotify">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm text-black-50">Proyecto 4</h6>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="avatar-group mt-2">
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                                            <img src="../assets/img/team-4.jpg" alt="user1">
                                        </a>
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                                            <img src="../assets/img/team-3.jpg" alt="user2">
                                        </a>
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                                            <img src="../assets/img/team-4.jpg" alt="user3">
                                        </a>
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                                            <img src="../assets/img/team-1.jpg" alt="user4">
                                        </a>
                                    </div>
                                </a>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <span class="text-xs font-weight-bold text-success"> Finalizado </span>
                                </a>
                            </td>
                            <td class="align-middle">
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="progress-wrapper w-75 mx-auto">
                                        <div class="progress-info">
                                            <div class="progress-percentage">
                                                <span class="text-xs font-weight-bold">100%</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success w-100" role="progressbar"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="../assets/img/small-logos/logo-jira.svg"
                                                class="avatar avatar-sm me-3" alt="jira">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm text-black-50">Proyecto 5</h6>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="avatar-group mt-2">
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                                            <img src="../assets/img/team-4.jpg" alt="user5">
                                        </a>
                                    </div>
                                </a>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <span class="text-xs font-weight-bold text-dark-50"> Cotizado </span>
                                </a>
                            </td>
                            <td class="align-middle">
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="progress-wrapper w-75 mx-auto">
                                        <div class="progress-info">
                                            <div class="progress-percentage">
                                                <span class="text-xs font-weight-bold">5%</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-dark w-5" role="progressbar"
                                                aria-valuenow="5" aria-valuemin="0" aria-valuemax="5"></div>
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="../assets/img/small-logos/logo-invision.svg"
                                                class="avatar avatar-sm me-3" alt="invision">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm text-black-50">Proyecto 6</h6>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="avatar-group mt-2">
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                                            <img src="../assets/img/team-1.jpg" alt="user6">
                                        </a>
                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                                            <img src="../assets/img/team-4.jpg" alt="user7">
                                        </a>
                                    </div>
                                </a>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <span class="text-xs font-weight-bold text-danger"> Pendiente </span>
                                </a>
                            </td>
                            <td class="align-middle">
                                <a class="{{ Request::is('user-profile') ?: '' }}" href="{{ url('user-profile') }}">
                                    <div class="progress-wrapper w-75 mx-auto">
                                        <div class="progress-info">
                                            <div class="progress-percentage">
                                                <span class="text-xs font-weight-bold">40%</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-danger w-40" role="progressbar"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
