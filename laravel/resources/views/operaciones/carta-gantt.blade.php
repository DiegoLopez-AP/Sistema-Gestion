@extends('layouts.user_type.auth')

@section('content')
    <h5>Operaciones <i class="fas fa-caret-right"></i> Carta Gantt</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card mb-2 cartacolor p-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <!-- AQUI VA EL CONTENIDO -->
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="form-label">Subir Carta Gantt</label>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
