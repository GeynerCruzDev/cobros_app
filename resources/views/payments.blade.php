@extends('layouts.layout-system')

@section('crsf_token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('contenido')
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><em data-feather="user" class="icons-main"></em></div>
                            Lista de alumnos
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">Alumnos</div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12  mb-4">
                <div class="card ">
                    <div class="card-header">Lista de usuarios</div>
                    <div class="row m-3">
                        <div class="col-md-6">
                            <a href="{{ route('nuevo-alumno') }}" class="btn btn-danger"><em class="fas fa-plus mr-2"></em> Agregar alumno</a>
                        </div>
                    </div>
                    <div class="card-block p-4 mt-3">
                        <div class = "table-responsive">
                        <table id="tbl-students" class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Matricula</th>
                            <th scope="col">Sede</th>
                            <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumnos as $key => $alumno)
                            <tr>
                                <td>{{ $key }}</td>
                                <td>{{ $alumno->name }}</td>
                                <td>125812</td>
                                <td>Campeche</td>
                                <td>
                                    <button class="btn btn-icon text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar alumno"><em class="fas fa-edit"></em></button>
                                    <button class="btn btn-icon text-dark new_payment" data-toggle="tooltip" data-placement="top" title="" data-original-title="Registrar pago"><em class="fas fa-money-bill"></em></button>
                                </td>
                            </tr>
                            @endforeach
                            <!-- <tr>
                                <td>1</td>
                                <td>Geyner de jesus</td>
                                <td>125812</td>
                                <td>
                                    <button class="btn btn-icon text-primary"><em class="fas fa-edit"></em></button>
                                </td>
                            </tr> -->
                        </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalNuevoPago" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar nuevo pago</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nombre del alumno</label>
                                <input type="text" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Fecha de aplicación</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Forma de pago</label>
                                <input type="text" class="form-control" placeholder="Ingresa la forma de pago">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Concepto</label>
                                <input type="text" class="form-control" placeholder="Ingresa el concepto">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Importe</label>
                                <input type="text" class="form-control" placeholder="Ingresa el importe">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Cantidad</label>
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Folio</label>
                                <input type="text" class="form-control" placeholder="Ingresa el folio">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">No. Autorización</label>
                                <input type="text" class="form-control" placeholder="Ingresa el No. de autorizacion">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Fecha de operación</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Comentario</label>
                                <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Ingresa un comentario"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary cerrar" >Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js_custom')

    <script>
        $(document).ready(function(){
            var body = $('body');
            var modalPago = $('#modalNuevoPago');
            RenderTable.applyCustomStyleTo('#tbl-students');

            body.on('click','.cerrar',function(e){
                e.preventDefault();
                modalPago.modal('hide');
            });

            body.on('click','.new_payment',function(e){
                e.preventDefault();
                modalPago.modal('show');
            });

        });
    </script>

@endsection
