@extends('layouts.layout-system')

@section('contenido')
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><em data-feather="user" class="icons-main"></em></div>
                            Dashboard
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">Tablero Principal</div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-4  mb-4">
                <div class="card ">
                    <div class="card-header">Pagos registrados</div>
                    <div class="card-block p-4">
                        $ {{ number_format(12500,2) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js_custom')

    
@endsection
