@extends('layouts.user_type.guest')

@section('content')

  <main class="main-content mt-0 bg-fondo">
    <section>
      <div class="page-header min-vh_p">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-5 col-md-5 d-flex flex-column mx-auto">
              <div class="card card-plain mt-5 bg-white">
                <div class="card-header pb-0 text-center bg-transparent mt-5">
                  <img src="../assets/img/logo-white.png" alt="">
                  <h4 class="font-weight-bolder text-info text-gradient pt-2 ">Sistema de Gestión</h4>
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="/session">
                    @csrf
                    <label class="text-dark">Correo</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="admin@softui.com" aria-label="Email" aria-describedby="email-addon">
                      @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <label class="text-dark">Contraseña</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="secret" aria-label="Password" aria-describedby="password-addon">
                      @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Iniciar Sesión</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1 ">
                <small class="text-muted">
                  <a href="/login/forgot-password" class=" font-weight-bold" style="color: #0e50d7;" >¿Olvidaste tu contraseña?</a>
                </small>
                  {{-- <p class="mb-4 text-sm mx-auto">
                    ¿No tienes cuenta?
                    <a href="/register" class=" font-weight-bold" style="color: #0e50d7;">Registrate</a>
                  </p> --}}
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
