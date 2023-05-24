@extends('layouts.user_type.auth')

@section('content')
    <h5 class="m-2">Comercial/Contactos</h5>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-1 cartacolor p-5 py-4">
                <div class="card-header py-3">

                    <div class="d-flex flex-row ">

                        <select id="cliente" class="form-select p-1 me-2" aria-label="Seleccione Contacto">
                            <option selected>Seleccione Cliente</option>
                            <option value="cliente1">Cliente 1</option>
                            <option value="cliente2">Cliente 2</option>
                            <option value="cliente3">Cliente 3</option>
                            <option value="cliente4">Cliente 4</option>
                        </select>

                        <a href="#" class="btn bg-gradient-primary btn-sm mb-0 px-4 py-2" type="button">Excel</a>

                        <button class="btn bg-gradient-primary btn-sm mb-0 px-4 py-2 ms-2" type="button"
                            data-bs-toggle="modal" data-bs-target="#modal-agregar">Agregar Contacto</button>
{{-- TODO MODAL AGREGAR CONTACTO ------------------------------------------------------------------------------------}}
                        <div class="modal fade" id="modal-agregar" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg ">
                                <div class="modal-content">
                                    <div class="modal-header bg-fondo">
                                        <h5 class="modal-title  text-white" id="exampleModalLabel">Agregar Contacto</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body modal-color">
                                        <div class="card">
                                            <div class="card-body py-0">
                                                <form class="formulario mt-3 ">
                                                    <div class="row mb-3">
                                                        <div class="col-md-6 ">
                                                            <label for="" class="form-label">Codigo</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Ingrese Codigo" id="codigo-contac">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="" class="form-label">Nombre</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Ingrese Nombre" id="nombre-contac">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-4">
                                                            <label for="" class="form-label">Mail</label>
                                                            <input class="form-control"
                                                                placeholder="Ingrese mail" type="email" id="mail-contac">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="" class="form-label">Telefono</label>
                                                            <input class="form-control"
                                                                placeholder="Ingrese Telefono" type="number" id="tel-contac">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="" class="form-label">Cargo</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Ingrese Cargo" id="cargo-contac">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <label for="" class="form-label">Dirección</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Ingrese Dirección" id="direc-contac">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="" class="form-label">Clave</label>
                                                            <input type="password" class="form-control"
                                                                placeholder="Ingrese Clave" id="clave-contac">
                                                        </div>
                                                    </div>
                                                    <div class="limpiar text-end mt-4">
                                                        <button type="reset" class="btn btn-danger">Limpiar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn bg-gradient-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn bg-gradient-primary">Guardar Cambios</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{-- TODO INICIO TABLA CONTACTOS ---------------------------------------------------------------------------------------------}}
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center table-striped table-hover mb-0">
                            <thead class="colortabla">
                                <tr>
                                    <th class=" text-left text-uppercase text-black text-xxs font-weight-bolder ">
                                        Codigo
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Nombre
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Mail
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Telefono
                                    </th>

                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Cargo
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Dirección
                                    </th>
                                    <th class="text-left text-uppercase  text-white text-xxs font-weight-bolder">
                                        Clave
                                    </th>
                                    <th class="text-center text-uppercase  text-white text-xxs font-weight-bolder">
                                        Acción
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">GP</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Gonzalo Paya Guzman</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">egatica@g-talant.cl</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">944674400</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">gonzalo.paya@agua-0.cl</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">María Luisa Bombal 2008 Colina</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">gp</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-editar"><i
                                                class="fas fa-pen text-xs"></i></a>
                                    </td>
{{-- TODO MODAL EDITAR CONTACTO -----------------------------------------------------------------------------------------------------}}
                                    <div class="modal fade" id="modal-editar" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header bg-fondo">
                                                    <h5 class="modal-title text-white" id="exampleModalLabel">Editar Contacto</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body modal-color">
                                                    <div class="card p-0">
                                                        <div class="card-body py-0">
                                                            <form class="formulario mt-3 ">
                                                                <div class="row mb-3">
                                                                    <div class="col-md-6 ">
                                                                        <label for="" class="form-label">Codigo</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="GP" id="codigo-contac">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="" class="form-label">Nombre</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Gonzalo Paya Guzman" id="nombre-contac">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="form-label">Mail</label>
                                                                        <input class="form-control"
                                                                            placeholder="egatica@g-talant.cl" type="email" id="mail-contac">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="" class="form-label">Telefono</label>
                                                                        <input class="form-control"
                                                                            placeholder="944674400" type="number" id="tel-contac">    
                                                                            
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="" class="form-label">Cargo</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="gonzalo.paya@agua-0.cl" id="cargo-contac">
                                                                    </div>
                                                                </div>
            
                                                                <div class="row mb-3">
                                                                    <div class="col-md-6">
                                                                        <label for="" class="form-label">Dirección</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="María Luisa Bombal 2008 Colina" id="direc-contac">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="" class="form-label">Clave</label>
                                                                        <input type="password" class="form-control text-left"
                                                                            placeholder="gp" id="clave-contac">	
                                                                            
                                                                    </div>
                                                                </div>
                                                                <div class="limpiar text-end mt-4">
                                                                    <button type="reset" class="btn btn-danger">Limpiar</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn bg-gradient-secondary"
                                                        data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="button" class="btn bg-gradient-primary">Guardar
                                                        cambios</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">
                                            fvera</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Felipe Vera</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">felipe.vera@abinsa.cl</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">56995595410</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Gerente de finanzas</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">sin dirección</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">sin clave</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-editar"><i
                                                class="fas fa-pen text-xs"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">lreboredo</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Lilian Reboredo</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">lilian.a.reboredo@accenture.com</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">(5411) 4705-6778</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">sin cargo</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">sin dirección</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">sin clave</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-editar"><i
                                                class="fas fa-pen text-xs"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">COchoa</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Carlos Ochoa</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">COchoa@brinks.cl</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">993261108/ 226802516</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Jefe de Proyecto</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Olivos 778</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">sin clave</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-editar"><i
                                                class="fas fa-pen text-xs"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">BChile</p>
                                    </td>

                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Banco Chile</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">bancochile_rec@artikos.cl</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">6006373838</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">sin cargo</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">Huerfanos 740</p>
                                    </td>
                                    <td class="text-left">
                                        <p class="text-xs font-weight-bold mb-0">sin clave</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-editar"><i
                                                class="fas fa-pen text-xs"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
