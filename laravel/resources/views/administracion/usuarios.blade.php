@extends('layouts.user_type.auth')

@section('content')
    <h5 class="m-2">Administración <i class="fas fa-caret-right"></i> Usuarios</h5>
    <div class="line_title"></div>
    <main class="ct-docs-content-col" role="main">
        <div class="ct-docs-page-title">
            <div class="card mb-2 cartacolor p-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="filtros d-flex justify-content-between pb-1">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername"></label>
                        <div class="input-group w-30">
                            <input type="text" class="form-control" style="height: 35px;" placeholder="Buscar"
                                aria-label="Recipient's username" aria-describedby="button-addon2"
                                id="inputGroup-sizing-sm">
                            <button class="btn bg-gradient-primary py-2" type="button" id="button-addon2"
                                style="height: 35px;"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="boton-agregar text-end align-items-center pt-2">
                            <button class="btn bg-gradient-primary btn-circle">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- INICIO TABLA USUARIOS--- 
                    ---------------------------->
                    <div class="table-responsive p-0">
                        <table class="table align-items-center table-striped table-hover mb-0">
                            <!-- TITULOS TABLA -->
                            <thead class="colortabla">
                                <tr>
                                    <th class=" text-left text-uppercase text-black text-xxs font-weight-bolder">
                                        Usuario
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Tipo Usuario
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Rut
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Nombre 
                                    </th>

                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Cargo
                                    </th>

                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Mail
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Fecha Ingreso
                                    </th>
                                    <th class="text-left text-uppercase text-white text-xxs font-weight-bolder">
                                        Vigencia
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- INICIO ITEM 1 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">Administrador</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Administrador</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">1-9</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Administrador</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Administrador</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">administrador@gtalent.cl</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">13/09/2011</p>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">Vigente</span>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 2 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">aespina</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Desarrollador</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">17.752.032-2</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Alejandro Espina</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Analista Programador</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">aespina@g-talent.cl</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">02/01/2017</p>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">Vigente</span>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 3 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">arojo</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Jefe Proyecto</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">27.746.438-1</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Asier Rojo</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Gestor de Ventas</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">arojo@g-talent.cl</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">02/01/2023</p>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">Vigente</span>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 4 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">bperez</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Desarrollador</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">17.958.046-2</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Bastián Perez</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Analista Programador</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">bperez@g-talent.cl</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">06/01/2019</p>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">Vigente</span>
                                    </td>
                                </tr>
                                <!-- INICIO ITEM 5 -->
                                <tr>
                                    <td class="ps-2 text-left">
                                        <p class="text-xs font-weight-bold mb-0">FSoto</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Outsorcing</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">24.635.275-5</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Fabio Soto</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Operador Soporte</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">fsoto@g-talent.cl</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">08/07/2014</p>
                                    </td>
                                    <td class="text-left">
                                        <span class="text-secondary text-xs font-weight-bold">Vigente</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
