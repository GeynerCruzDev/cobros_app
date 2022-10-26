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
                            <button class="btn btn-danger"><em class="fas fa-plus mr-2"></em> Agregar alumno</button>
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
                            <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumnos as $key => $alumno)
                            <tr>
                                <td>{{ $key }}</td>
                                <td>{{ $alumno->name }}</td>
                                <td>125812</td>
                                <td>
                                    <button class="btn btn-icon text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar alumno"><em class="fas fa-edit"></em></button>
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

@endsection

@section('js_custom')

    <script>
        $(document).ready(function(){
            RenderTable.applyCustomStyleTo('#tbl-students');
        });
    </script>

@endsection
