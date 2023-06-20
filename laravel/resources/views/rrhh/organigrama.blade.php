@extends('layouts.user_type.auth')

@section('content')
    <h5>RRHH <i class="fas fa-caret-right"></i> Organigrama</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card mb-2 cartacolor p-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="row align-items-center justify-content-center">
                        <div id="organigrama" name="organigrama" class="organigrama">
                            <ul id="ul1" name="ul1">
                                <li>
                                    <a href="#"><label class="text-dark">Junta Directiva</label></a>
                                    <ul>
                                        <li>
                                            <a href="#"><label class="text-dark">Gerente General</br></label></a>
                                            <ul>
                                                <li>
                                                    <a href="#"><label class="text-dark">Área
                                                            Comercial</br></br></label></a>
                                                    <ul>
                                                        <li>
                                                            <a href="#"><label class="text-dark">Subgerente Comercial</br></label></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#"><label class="text-dark">Área
                                                            Operaciones</br></br></label></a>
                                                    <ul>
                                                        <li>
                                                            <a href="#"><label class="text-dark">Subgerente Operaciones
                                                                    </br></label></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#"><label class="text-dark">Área
                                                            Finanzas</br></br></label></a>
                                                    <ul>
                                                        <li>
                                                            <a href="#"><label class="text-dark">Administración</br></label></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#"><label class="text-dark">Área RRHH</br></br></label></a>
                                                    <ul>
                                                        <li>
                                                            <a href="#"><label class="text-dark"></br></label></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
