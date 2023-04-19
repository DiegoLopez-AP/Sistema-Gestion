@extends('layouts.user_type.auth')

@section('content')
    <h3 class="m-2">Operaciones/Proyectos</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 mx-2 cartacolor">
                {{-- <div class="card-header py-2 colorhead">
                    <h5 class="text-white">Pendiente</h5>
                </div> --}}
                <h4 class="text-black px-2 py-2 progreso">Incompleto</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 mx-2 cartacolor">
                <div class="card-header py-2 colorhead">
                    <h5 class="text-white">En progreso</h5>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 mx-2 cartacolor">
                <div class="card-header py-2 colorhead">
                    <h5 class="text-white">En progreso</h5>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                </div>
            </div>
        </div>
    </div>
@endsection
