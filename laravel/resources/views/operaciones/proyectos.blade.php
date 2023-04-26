@extends('layouts.user_type.auth')

@section('content')
    <h3 class="m-2">Operaciones/Proyectos</h3>
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4 mx-2 cartacolor">
                <div class="card-body1 py-2 ps-4 ">
                    <h5 class="text-black">Cotizado</h5>
                </div>
                {{-- <h4 class="text-black px-2 py-2 progreso">Incompleto</h4> --}}
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4 mx-2 cartacolor">
                <div class="card-body2 py-2 ps-4 ">
                    <h5 class="text-black">Aprobado</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4 mx-2 cartacolor">
                <div class="card-body3 py-2 ps-4 ">
                    <h5 class="text-black">En proceso</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4 mx-2 cartacolor">
                <div class="card-body4 py-2 ps-4 ">
                    <h5 class="text-black">Finalizado</h5>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4 mx-2 cartacolor">
                <div class="card-body py-2 ps-4 ">
                    <h5 class="text-black">Proyecto</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus cum perspiciatis quaerat, illo
                        doloremque accusamus laborum dolorum atque iusto quasi commodi velit magnam cupiditate laudantium
                        eum fugiat molestiae debitis saepe.</p>
                </div>
                {{-- <h4 class="text-black px-2 py-2 progreso">Incompleto</h4> --}}
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4 mx-2 cartacolor">
                <div class="card-body py-2 ps-4 colorhead">
                    <h5 class="text-black">Proyecto</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4 mx-2 cartacolor">
                <div class="card-body py-2 ps-4 colorhead">
                    <h5 class="text-black">Proyecto</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4 mx-2 cartacolor">
                <div class="card-body py-2 ps-4 colorhead">
                    <h5 class="text-black">Proyecto</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
