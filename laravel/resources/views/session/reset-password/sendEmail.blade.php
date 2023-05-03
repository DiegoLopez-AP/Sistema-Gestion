@extends('layouts.user_type.guest')

@section('content')
    <main class="main-content  mt-0  bg-fondo">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-5 col-md-5 d-flex flex-column mx-auto ">
                            <div class="card card-plain mt-0 bg-white py-2">
                                <div class="card-header pb-0 text-center bg-transparent mt-4">
                                    <img src="../assets/img/logo-white.png" alt="">
                                    <h4 class="font-weight-bolder text-info text-gradient pt-4 mt-2 ">Olvidaste tu contraseña? <h6
                                            class="text-secondary">
                                            Introduzca su correo aquí</h6>
                                    </h4>
                                </div>
                                <div class="card-body pb-3">
                                    <form action="">
                                        <div class="row justify-content-center align-items-center g-2 mb-2">
                                            <div class="col-md-12 ps-2">
                                                <label for="" class="text-dark">Correo</label>
                                                <input type="text" class=" form-control" id="nombre">
                                            </div>
                                        </div>
                                        <div class="text-center pt-4 mt-0 ">
                                            <a href="{{ url('logout') }}"
                                                class="btn bg-gradient-secondary btn-sm mt-3 w-60 {{ Request::is('logout') ?: '' }}"
                                                type="button">Volver al Inicio
                                            </a>
                                            <a href=""
                                                class="btn bg-gradient-info btn-sm mt-2 w-60  "
                                                type="button">Recuperar contraseña
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
