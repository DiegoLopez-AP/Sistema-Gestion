@extends('layouts.user_type.guest')

@section('content')
    <main class="login mt-0 bg-fondo">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-5 col-md-5 d-flex flex-column mx-auto ">
                            <div class="card card-plain mt-5 bg-white">
                                <div class="card-header pb-0 text-center bg-transparent mt-5">
                                    <img src="../assets/img/logo-white.png" alt="">
                                    <h4 class="font-weight-bolder text-info text-gradient pt-2">¿Olvidaste tu
                                        contraseña? <h6 class="text-secondary">
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
                                            <button type="submit" class="btn bg-gradient-info w-60 mt-2 mb-0">Recuperar
                                                Contraseña</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <small class="text-muted">
                                        <a href="/logout" class=" font-weight-bold"
                                            style="color: #0e50d7;">Volver al Inicio</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
@endsection
