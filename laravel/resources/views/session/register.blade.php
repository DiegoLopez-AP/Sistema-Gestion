@extends('layouts.user_type.guest')

@section('content')
    <main class="main-content  mt-0  bg-fondo">
        <section>
            <div class="page-header min-vh_p">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-7 col-md-7 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-0 bg-white py-2 mt-4 h-1">
                                <div class="card-header pb-0 text-center bg-transparent mt-5">
                                    <img src="../assets/img/logo-white.png" alt="">
                                    <h4 class="font-weight-bolder text-info text-gradient pt-4 ">Sistema de Gestión</h4>
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="row justify-content-center align-items-center g-2">
                                            <div class="col-md-4 ps-2">
                                                <label for="" class="text-dark">Nombre</label>
                                                <input type="text" class=" form-control" id="nombre">
                                            </div>
                                            <div class="col-md-4 ps-2">
                                                <label for="" class="text-dark">Apellidos</label>
                                                <input type="text" class=" form-control" id="apellidos">
                                            </div>
                                            <div class="col-md-4 ps-2">
                                                <label for="" class="text-dark">Rut</label>
                                                <input type="text" class=" form-control" id="rut">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center align-items-center g-2 pt-3">
                                            <div class="col-md-6 ps-2">
                                                <label for="" class="text-dark">Correo Personal</label>
                                                <input type="email" class=" form-control" id="mail-perso">
                                            </div>
                                            <div class="col-md-6 ps-2">
                                                <label for="" class="text-dark">Correo G-Talent</label>
                                                <input type="email" class=" form-control" id="mail-gtalent">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center align-items-center g-2 pt-3">
                                            <div class="col-md-6 ps-2">
                                                <label for="" class="text-dark">Cód. Trabajador</label>
                                                <input type="number" class=" form-control" id="cod-trabjador">
                                            </div>
                                            <div class="col-md-6 ps-2">
                                                <label for="" class="text-dark">Cargo</label>
                                                <input type="text" class=" form-control" id="cargo">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center align-items-center g-2 pt-3">
                                            <div class="col-md-12 ps-2">
                                                <label for="" class="text-dark">Contraseña</label>
                                                <input type="password" class=" form-control" id="contrasena">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center align-items-center g-2 pt-3">
                                            <div class="col-md-12 ps-2">
                                                <label for="" class="text-dark">Confirmar contraseña</label>
                                                <input type="password" class=" form-control" id="confir-contra">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-info w-50 mt-4 mb-0">Registrarme</button>
                                          </div>
                                        <div class="text-center">
                                          <button type="reset" class="btn bg-gradient-secondary w-50 mt-2 mb-0">Limpiar Todo</button>
                                        </div>
                                        
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="text-sm mx-auto">
                                        ¿Ya tienes cuenta?
                                        <a href="/logout" class=" font-weight-bold" style="color: #0e50d7;">Inicia
                                            sesión</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
