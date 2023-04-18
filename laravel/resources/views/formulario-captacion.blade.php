@extends('layouts.user_type.auth')

@section('content')
    <div class="container">
        <form class="form" action="#" method="post">
            <h2 class="form__title">Captacion Clientes</h2>
            <div class="form__group">
                <label class="form__label" for="nombre">Nombre</label>
                <input class="form__input" type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form__group">
                <label class="form__label" for="giro">Giro</label>
                <input class="form__input" type="text" id="giro" name="giro" required>
            </div>
            <div class="form__group">
                <label class="form__label" for="fono">Fono</label>
                <input class="form__input" type="tel" id="fono" name="fono" required>
            </div>
            <div class="form__group">
                <label class="form__label" for="mail">Correo electrónico</label>
                <input class="form__input" type="email" id="mail" name="mail" required>
            </div>
            <div class="form__group">
                <label class="form__label" for="pagina">Página web</label>
                <input class="form__input" type="url" id="pagina" name="pagina" required>
            </div>
            <button class="form__button" type="submit">Crear</button>
        </form>

    </div>
@endsection
