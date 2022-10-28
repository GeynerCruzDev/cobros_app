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
                        Nuevo alumno
                    </h1>
                </div>
                <div class="col-12 col-xl-auto mb-3">Alumnos</div>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid mt-2">

    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h3><em class="fas fa-user text-dark"></em> Agregar Alumno</h3>
                </div>
                <form action="{{ route('guardar-alumno') }}" method="post">
                @csrf
                    <div class="card-body">
                            <div class="form-group">
                                <label for="formNameStudent">Nombre</label>
                                <input type="text" name="name_student" class="form-control" id="formNameStudent" placeholder="Ingrese el nombre">
                            </div>
                            <div class="form-group">
                                <label for="formSurname">Apellidos</label>
                                <input type="text" name="surname_student" class="form-control" id="formSurname" placeholder="Ingrese el apellido">
                            </div>
                            <div class="form-group">
                                <label for="formControlNumberStudent">Matrícula</label>
                                <input type="text" name="control_number_student" class="form-control" id="formControlNumberStudent" placeholder="Ingrese la matrícula">
                            </div>
                            <div class="form-group">
                                <label for="formControlNumberStudent">Sede</label>
                                <select name="sede" id="sede" class="form-control select2" style="width: 100% !important;">
                                    <option value="-1">Seleccione una sede</option>
                                    <option value="1">Campeche</option>
                                </select>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-default m-2 float-right"><em class="fas fa-undo mr-2"></em> Regresar</button>
                        <button class="btn m-2 text-white float-right" style="background-color: #A61C41;"><em class="fas fa-save mr-2"></em> Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection

@section('js_custom')
    <script type="text/javascript">
        $(document).ready(function(){
            alertify.success('<em class="fas fa-check text-primary mr-2"></em> Hola soy un mensaje');
        });
    </script>
@endsection