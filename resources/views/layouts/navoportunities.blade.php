<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="theme-color" content="#4285f4">
    <title>{{ config('app.name', 'NABU') }}</title>
    <!-- StylesCore -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <!-- Fin StyleCore -->
    <!-- DataTable -->
    <link href="{{asset('assets/DataTable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" crossorigin="anonymous" />
    <!-- Fin DataTable-->
    <!-- DateRangePicker -->
    <link href="{{asset('assets/DateRangePicker/css/daterangepicker.css')}}" rel="stylesheet" crossorigin="anonymous" />
    <!-- Fin DateRangePicker -->
    <!-- FavIcon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/img/logos/favicon-nabu.png') }}">
    <!-- Fin FavIcon-->
    <!-- FontAwesome-->
    <script data-search-pseudo-elements defer src="{{ asset('assets/FontAwesome/all.min.js') }}" crossorigin="anonymous"></script>
    <!-- Fin FontAwesome-->
    <!-- Icon Feather-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
    <!-- Fin Icon Feather-->
    <!-- Themes Alertify-->
    <link rel="stylesheet" href="{{ asset('assets/Alertify/css/alertify.min.css') }}"/>
        <!-- Default theme -->
    <link rel="stylesheet" href="{{ asset('assets/Alertify/themes/default.min.css') }}"/>
        <!-- Semantic UI theme -->
    <link rel="stylesheet" href="{{ asset('assets/Alertify/themes/semantic.min.css') }}"/>
    <!-- Fin Themes Alertify-->
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="{{ asset('assets/Alertify/css/themes/bootstrap.min.css') }}"/>
    <!-- Fin Bootstrap theme -->
    <link rel="stylesheet" href="{{ asset('assets/animatecss/animate.min.css') }}"/>
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('/assets/bootstrap-fileinput/themes/explorer-fa/theme.css') }}" />
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('/assets/bootstrap-fileinput/css/fileinput.css') }}" />
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('/assets/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('custom/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/nprogress/nprogress.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/landing/styles.css') }}">

    <script type="module" src="{{ asset('/vendor/ckeditor/build/ckeditor.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/translations/es.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    @yield('crsf_token')
    <style>

        @supports ((-webkit-hyphens:auto) or (hyphens:auto)) {
            .text-paragraph-item{
                -webkit-hyphens: auto; /* A día de hoy aún es necesario el prefijo para soportar a Safari */
                hyphens: auto;
            }

            .justify-text-custom{
                -webkit-hyphens: auto; /* A día de hoy aún es necesario el prefijo para soportar a Safari */
                hyphens: auto;
                text-align: justify;
                letter-spacing: -1px;
            }
        }

        .circulo {
            width: 5rem;
            height: 5rem;
            border-radius: 50%;
            background: #dfd7d7;
            display: flex;
            justify-content: center !important;
            align-items: center !important;
            text-align: center !important;
            border: 2px solid #2e4999 !important;
        }
        .circulo > p {
            /*color: white;*/
            /*font-size: 1rem;*/
            font-weight: bold;
        }

        .btn-items-options-landing{
            background-color: #2e4999;
            color: white;
        }

        .menu-option-navbar:hover{
            border-style: outset !important;
            border: 8px solid #ffcd39 !important;
            border-top: none !important;
            border-left: none !important;
            border-right: none !important;
        }

        .text-menu-navbar{
            font-weight: bolder !important;
            color: #FFFFFF !important;
            font-size: 15px !important;
        }

        .labels-group-input{
            background-color: #3e589f;
            color: white;
        }

        .btn-items-options-landing-secondary{
            background-color: #afafb5;
            color: #f8f4f4;
        }

        .head-nav-sections{
            background-color: #2e4999;
            color: white;
        }

        .items-options-landing:hover{
            background-color: #2e4999;
            color: white;
        }

        .btn-load-more{
            background-color: #2e4999;
            color: white;
        }

        .btn-load-more:hover{
            background-color: #3e589f;
            color: white;
        }

        .btn-action-proposal{
            font-weight: bold;
            background-color: #f6ae2d;
            color: white;
        }

        .btn-action-proposal:hover{
            font-weight: bold;
            background-color: #bb7d0d;
            color: white;
        }

        .call-to-action{
            font-weight: bold;
            background-color: #f6ae2d;
            color: #050505;
        }

        .call-to-action:hover{
            font-weight: bold;
            background-color: #bb7d0d;
            color: #000000;
        }

        .items-container-landing{
            background-color:#efeff3;
        }

        .items-oportunities{
            background-color : #efeff3;
        }

        .background-brand-heading{
            background-color: #3c508c;
            color: white;
        }

        .row-items-landing {
            display: flex;
            flex-wrap: wrap;
            margin-right: -1.75rem;
            margin-left: -1.75rem;
        }

        .wave {
            height: 100%;
            width: 100%;
            background: #16222A;
            background: -webkit-linear-gradient(to right, #efeff3,#efeff3);
            background: linear-gradient(to right,#efeff3,#efeff3);
        }

        .img-avatar-sector{
            padding: 0;
            justify-content: center;
            overflow: hidden;
            border-radius: 100%;
            flex-shrink: 0;
        }


        .icon-image-resp{
            position: relative;
            float: left;
            width: 150px;
            height: 150px;
            align-content: center;
            border: 4px double #bcbcbc !important;
        }

        .fa-2x {
            font-size: 9em;
        }
        .text-icon-sector {
            color: #a7b7b2 !important;
        }
        .pt-5, .py-5 {
            padding-top: 3rem !important;
        }
        .ml-5, .mx-5 {
            margin-left: 6px!important
        }

        .resaltado {
            box-shadow: inset 0 25px 20px 0px rgb(20 19 7 / 80%);
            transform: translateY(-10px) scale(0.02);
        }

        .btn-social-nabu{
            color:#ffffff;
            background-color:  #2e4999;
            border-color: #ffffff;
        }

        .shadow-social {
            box-shadow: 0 0.15rem 0rem 2px rgb(33 40 50 / 15%) !important;
        }

        .parrafo-contact{
            margin-top: 0 !important;
            margin-bottom: 0rem !important;
        }

        .avatar-lg {
            height: 10.5rem;
            width: 10.5rem;
        }

        .avatar {
            display: inline-flex;
            height: 10rem;
            width: 10rem;
            border-radius: 50%;
            position: relative;
            align-items: center;
            justify-content: center;
        }

        .items-help-land{
            display: inline-flex;
            margin-right: 3rem;
            background-color: #bb7d0d;
            height: 15rem;
            width: 15rem;
            border-radius: 50%;
            position: relative !important;
            align-items: center !important;
            justify-content: center !important;
        }

        .items-because-list{
            display: inline-flex;
            border-radius: 12%;
            position: relative !important;
            align-items: center !important;
            justify-content: center !important;
        }

        .btn-whatsapp {
            display:block;
            width:70px;
            height:70px;
            color: #fff;
            position: fixed;
            right:20px;
            bottom:20px;
            border-radius:50%;
            line-height:80px;
            text-align:center;
            z-index:999;
        }

        .nav-wizard .nav-link {
            display: flex;
            align-items: center;
            padding: 1rem;
        }

        .price-input{
            width: 100%;
            display: flex;
            margin: 30px 0 35px;
        }
        .price-input .field{
            display: flex;
            width: 100%;
            height: 45px;
            align-items: center;
        }
        .field input{
            width: 50%;
            height: 70%;
            outline: none;
            font-size: 19px;
            margin-left: 12px;
            border-radius: 5px;
            text-align: center;
            border: 1px solid #999;
            -moz-appearance: textfield;
        }
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }
        .price-input .separator{
            width: 130px;
            display: flex;
            font-size: 19px;
            align-items: center;
            justify-content: center;
        }
        .slider{
            height: 5px;
            position: relative;
            background: #ddd;
            border-radius: 5px;
        }
        .slider .progress{
            height: 100%;
            left: 0%;
            right: 0%;
            position: absolute;
            border-radius: 5px;
            background: #69707a;
        }
        .range-input{
            position: relative;
        }
        .range-input input{
            position: absolute;
            width: 100%;
            height: 5px;
            top: -5px;
            background: none;
            pointer-events: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }
        input[type="range"]::-webkit-slider-thumb{
            height: 17px;
            width: 17px;
            border-radius: 50%;
            background: #2e4999;
            pointer-events: auto;
            -webkit-appearance: none;
            box-shadow: 0 0 6px rgba(0,0,0,0.05);
        }
        input[type="range"]::-moz-range-thumb{
            height: 17px;
            width: 17px;
            border: none;
            border-radius: 50%;
            background: #2e4999;
            pointer-events: auto;
            -moz-appearance: none;
            box-shadow: 0 0 6px rgba(0,0,0,0.05);
        }

        .icon-sector{
            background-color:#f8f2f2;
            height: auto;
            font-weight: bolder;
            font-size: 2.25rem;
            border-radius: 100% !important;
            padding: 1.3rem !important;
            border: 2px solid #2e4999 !important;
        }

        /* Dispositivos extra pequeños (teléfonos, 600px y menos. Dispositivos pequeños (tabletas verticales y teléfonos grandes, 600 px y más) */
        @media only screen and (max-width: 600px) {

            .nav-fixed #layoutSidenav #layoutSidenav_nav {
                width: 0px;
            }

            .order-sm-2 {
                order: -1;
                text-align: center;
            }

            .font-icon-card{
                font-size: 3em;
            }

            .encabezado-card >.w-25{
                width: 50% !important;
            }

            .nav-wizard .nav-link {
                display: flex;
                align-items: center;
                padding: .2rem;
            }

            #cardTabContent{
                height: 45vh;
            }

        }
        /* Dispositivos pequeños (tabletas verticales y teléfonos grandes, 600 px y más) */
        @media only screen and (min-width: 600px) {

        }
        /* Dispositivos medianos (tabletas horizontales, 768 px y más). */
        @media only screen and (min-width: 768px) {
            .nav-fixed #layoutSidenav #layoutSidenav_nav {
                width: 0px;
            }

            .font-icon-card{
                font-size: 3em;
            }

            .nav-wizard .nav-link {
                display: flex;
                align-items: center;
                padding: .2rem;
            }

            #cardTabContent{
                height: 45vh;
            }
        }
        /* Dispositivos grandes (laptops/desktops, 992px y más) */
        @media only screen and (min-width: 992px) {
            .nav-fixed #layoutSidenav #layoutSidenav_nav {
                width: 20rem;
            }

            .font-icon-card{
                font-size: 3em;
            }

            .nav-wizard .nav-link {
                display: flex;
                align-items: center;
                padding: 1rem;
            }

            #cardTabContent{
                height: 65vh;
            }
        }
        /* Dispositivos extragrandes (portátiles y equipos de escritorio grandes, 1200 px y más) */
        @media only screen and (min-width: 1200px) {
            .nav-fixed #layoutSidenav #layoutSidenav_nav {
                width: 20rem;
            }

            .font-icon-card{
                font-size: 3em;
            }

            .modal-xl {
                max-width: 85%;
            }
        }

        @media (min-width: 992px) {
            .nav-fixed #layoutSidenav #layoutSidenav_nav {
                width: 20rem;
            }

            .nav-fixed #layoutSidenav #layoutSidenav_nav .sidenav {
                padding-top: 7rem;
            }

            .nav-fixed #layoutSidenav #layoutSidenav_content {
                padding-left: 20rem;
                top: 6.625rem;
            }

            .font-icon-card{
                font-size: 3em;
            }
        }

        .nav-item.nav-link:not(.active):hover {
            background-color: #e5f0ff;
        }
    </style>
</head>
<body class="nav-fixed">
<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light" id="sidenavAccordion" style="background-color: #2e4999; padding: 0px; height: auto;">
    <a class="navbar-brand text-white" href="{{ url('/') }}" style="padding: 0px; margin: 0px">
        <img src="{{ asset('/assets/img/logos/LOGO-NABU-BLANCO.png') }}" alt="" style="width: 100px; height: 100px">
    </a>
    <button class="navbar-toggler btn-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 10px;">
        <!--<span class="navbar-toggler-icon text-white"></span>-->
        <em class="fas fa-bars text-white"></em>
    </button>

    <div class="collapse navbar-collapse text-white" id="navbarSupportedContent" style="margin-right: 15px">
        <ul class="navbar-nav align-items-center ml-auto">
            <!-- Documentation Dropdown-->
            <!-- Navbar Search Dropdown-->
            <!-- * * Note: * * Visible only below the md breakpoint-->
            <!-- User Dropdown-->
            @if(Auth::check())
                <a class="btn btn-sm border-0  text-white font-weight-600 mr-2 text-menu-navbar menu-option-navbar" id="" href="{{ url('/') }}" role="button">{{ _('Mi Tablero')}}</a>
            @endif
            <li class="nav-item dropdown no-caret mr-3 mr-lg-0 dropdown-user" >
                <a class="btn btn-sm border-0  text-white dropdown-toggle btn-sm border-0 text-white font-weight-600 mr-2 text-menu-navbar menu-option-navbar" id="navbarDropdownAboutUs" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{_('Oportunidades')}}</a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAboutUs" style="background-color: #36529f">
                    <a class="dropdown-item btn-sm border-0 text-dark font-weight-600 text-white items-options-landing text-menu-navbar menu-option-navbar" href="{{ route('new-application') }}">
                        <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                        Publicar una solicitud de financiamiento
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item btn-sm border-0 text-dark font-weight-600 text-white items-options-landing text-menu-navbar menu-option-navbar" href="{{ route('oportunities') }}">
                        <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                        Ver oportunidades de financiamiento
                    </a>
                </div>
            </li>
            @auth
                <li class="nav-item dropdown no-caret mr-3 mr-lg-0 dropdown-user">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" alt="" src="{{ asset('assets/img/illustrations/profiles/profile-0.png') }}" /></a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <img class="dropdown-user-img" alt="" src="{{ asset('assets/img/illustrations/profiles/profile-0.png') }}" />
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name">{{ \Illuminate\Support\Facades\Auth::user()->name.' '.\Illuminate\Support\Facades\Auth::user()->lastname }}</div>
                                <div class="dropdown-user-details-email">{{ \Illuminate\Support\Facades\Auth::user()->email }}</div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/dashboard') }}">
                            <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                            Mi dashboard
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                            {{ __('Salir') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @else
                <a class="btn btn-sm rounded-3 call-to-action rounded-pill subtitle-normal" id="navbarDropdownLogin" href="{{ url('/login') }}" role="button" style="font-size: 15px; color: #2e4999">{{_('Iniciar sesión')}}</a>
            @endauth
        </ul>
    </div>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center" style="font-size: 1.5em"><em class="fas fa-filter text-primary mr-2"></em>Filtros</p>
                        </div>
                    </div>
                    <form id="form-oportunities-lp" method="get" action="{{ route('oportunities') }}">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <label for="">Sectores</label>
                                <select name="sector" class="form-control select2 form-control-sm" id="sector" style="width: 100%">
                                    <option selected value="">Todos</option>
                                    @foreach(\App\Models\CatActivitie::all() as $kact => $activity)
                                        <option value="{{ $activity->id }}" @if($activity->id == request('sector')) selected @endif >{{ $activity->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-10">
                                <label for="">Destino financiamiento</label>
                                <select name="destiny" class="form-control select2 form-control-sm" id="destiny" style="width: 100%">
                                    <option selected value="">Todos</option>
                                    @foreach(\App\Models\CatFundingDestination::all() as $kf => $fundinDestination)
                                        <option value="{{ $fundinDestination->id }}" @if($fundinDestination->id == request('destiny')) selected @endif>{{ $fundinDestination->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-10">
                                <label for="">Estado</label>
                                <select name="state" class="form-control select2 form-control-sm" id="state" style="width: 100%">
                                    <option selected value="">Todos</option>
                                    @foreach(\App\Models\CatState::all()  as $kcat => $state)
                                        <option value="{{ $state->id }}" @if($state->id === request('state')) selected @endif>{{$state->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <div class="wrapper col-md-10">
                                <header>
                                    <p style="font-size: 1em;" class="mb-1"><em class="fas fa-coins text-primary"></em> Monto por solicitud</p>
                                </header>
                                <div class="price-input pt-0 mt-0">
                                    <div class="form-group">
                                        <span>Minimo</span>
                                        <input id="limit" type="text" name="limit" class="input-min form-control form-control-sm" value="{{(request('limit') != '') ?   request('limit') : number_format($statistic['max_amount'] / 2,'2','.',',') }}">
                                    </div>
                                    <div class="form-group">
                                        <span>Máximo</span>
                                        <input id="limit2" type="text" class="input-max form-control form-control-sm" name="limit2" value="{{ request('limit2') != '' ? request('limit2') : number_format($statistic['max_amount'],'2','.',',') }}">
                                    </div>
                                </div>
                                <div class="slider" data-html="true" data-toggle="tooltip" data-placement="right" title="Máximo: {{ number_format($statistic['max_amount']) }} MXN">
                                    <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                    <input id="amount-min-range" type="range" class="range-min"  min="0" max="{{ $statistic['max_amount'] }}" value="{{(request('limit') != '') ?  str_replace(array('$','.',','),'', request('limit') ) :$statistic['max_amount'] / 2 }}" >
                                    <input id="max-amount-db" type="range" class="range-max" min="0"  max="{{ $statistic['max_amount'] }}" value="{{request('limit2') != '' ? str_replace(array('$','.',','),'', request('limit2') ) : $statistic['max_amount'] }}">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-2">
                            <div class="col-md-10 m-1">
                                <button type="submit" class="btn btn-block btn-primary btn-sm"><i class="fas fa-search-dollar"></i> Buscar oportunidades</button>
                            </div>
                            <div class="col-md-10 m-1">
                                <button id="cleanFilter" class="btn btn-block btn-light border border-dark btn-sm"><i class="fas fa-brush mr-2"></i> Limpiar filtros</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <!-- Main page content-->
            <div class="container mt-4">
                <!-- Knowledge base home header option-->
                <header class="card card-waves">
                    <div class="card-body px-5 pt-5">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-10">
                                <h2 class="text-center" style="font-size: 2em;">Oportunidades de financiamiento</h2>
                                <p class="text-center" style="font-size: 1.4em;color: #2e4999"><strong>Acercamos empresarios con instituciones financieras, para un <span class="" style="background-color: #f6ae2d; color: #FFFFFF">financiamiento oportuno</span>.</strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="" style="font-size: 1.4em;color: #050505">Filtra las solicitudes de crédito publicadas, de acuerdo con el perfil de prospectos que buscas.</p>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="d-flex justify-content-between">
                    <div class="w-50">
                        <h3 class="mb-0 mt-5" style="color: #2e4999">Mostrando <span class="" style="color: #f6ae2d;"><strong>{{ $oportunities->count() }}</strong> resultado @if($oportunities->count() > 1)(s)@endif</span></h3>
                    </div>
                    <div class="w-50 mt-5">
                        {!! $oportunities->appends(
                            array(
                                'limit' => request('limit') ,
                                'limit2' => request('limit2'),
                                'sector' => request('sector'),
                                'destiny' => request('destiny'),
                                'state' => request('state')
                                 )
                        )->links() !!}
                    </div>
                </div>
                <hr class="mt-2 mb-4" />
                <div class="row">
                    @foreach($oportunities as $opportunity)
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
                        <!-- Knowledge base category card 1-->
                        <div class="card lift lift-sm h-100" style="background-color:#f8f2f2;">
                            <div class="card-body" style="padding: 1em;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex mb-2">
                                            @php
                                                $color = '#000';
                                                $application = \App\Models\CreditApplication::query()->where('id','=',$opportunity->app_id)->get();
                                                if ($application->isEmpty()) {
                                                    $calif = 'N/D';
                                                } else {
                                                    $application = $application->first();
                                                    $extension = \App\Models\AnalysisExtension::query()->where('credit_applications_id','=',$application->id)->get();
                                                    if ($extension->isEmpty()) {
                                                        $calif = 'N/D';
                                                    } else {
                                                        $extension = $extension->first();
                                                        $score = \App\Models\CatScore::query()->where('id','=',$extension->cat_scores_id)->get();
                                                        if ($score->isEmpty()) {
                                                            $calif = 'N/D';
                                                        } else {
                                                            $score = $score->first();
                                                            $calif = $score->score;
                                                            $color = $score->color;
                                                        }
                                                    }
                                                }
                                            @endphp
                                            <div class="w-25 align-self-center">
                                                <div class="circulo">
                                                    <p class="text-truncate" style="color: {{$color}}; font-size: 2em">{{$calif}}</p>
                                                </div>
                                            </div>
                                            <div class="w-full align-self-end justify-content-end ml-2 text-wrap">
                                                <p class="text-dark" style="font-size: 1.3em">Monto: <span class="rounded text-primary font-weight-bold rounded-0 p-2">$ {{ number_format($opportunity->amount_financing,2,'.',',') }}</span></p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-1 encabezado-card">
                                            <div class="w-25">
                                                <p class="text-dark text-wrap">Fecha límite:</p>
                                            </div>
                                            <div class="w-full m-auto">
                                                <p class="text-dark text-wrap"><strong>{{ \App\Logic\ProcessApplicationLogic::getSlashDate($opportunity->fecha_limite, true) }}</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-0 p-0">
                                        <div class="border border-primary"></div>
                                        <div class="d-flex justify-content-between bd-highlight">
                                            <div class="p-2 bd-highlight"><small class="text-dark" style="font-size: 13px; font-weight: bold">Destino de financiamiento: </small></div>
                                            <div class="p-2 bd-highlight justify-text-custom"><small class="" style="font-size: 13px; font-weight: bold; color: #2e4999;">{{$opportunity->destination_name}} para {{ lcfirst($opportunity->entrepreneur_activity) }}</small></div>
                                        </div>
                                        <div class="d-flex justify-content-between bd-highlight">
                                            <div class="p-2 bd-highlight"><small class="text-dark" style="font-size: 13px; font-weight: bold">Empresa en: </small></div>
                                            <div class="p-2 bd-highlight"><small class="" style="font-size: 13px; font-weight: bold; color: #2e4999;"><span>{{ $opportunity->where_funding }}</span></small></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 align-self-center order-sm-2 p-0">
                                        @if(!empty($opportunity->icon))
                                            <em class="{{ $opportunity->icon }} fa-1x" style="color: #2e4999;font-size: 46px; margin: auto"></em>
                                        @else
                                            <em class="fas-fa-question fa-1x" style="color: #2e4999;font-size: 46px; margin: auto"></em>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0">
                                <div class="d-flex flex-wrap bd-highlight">
                                    <a class="p-2 flex-fill bd-highlight btn btn-action-proposal rounded-0 text-dark w-50" href="{{ url('/spectator/proposals/'.$opportunity->credit_application_id.'/new') }}"><em class="fas fa-paper-plane mr-1"></em> {{ _('Enviar propuesta') }}</a>
                                    <div class="p-2 flex-fill bd-highlight btn btn-load-more rounded-0 w-50" self-url="{{ url('/spectator/proposals/'.$opportunity->credit_application_id.'/new') }}" id-db="{{ $opportunity->credit_application_id }}"><em class="fas fa-eye mr-1"></em>{{ _('Ver detalles') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </main>
        <footer class="footer mt-auto footer-light">
            <div class="btn-whatsapp lift-sm" >
                <a id="icon-ws" class="m-auto" href="https://wa.me/5636360454" type="button" target="_blank" data-toggle="tooltip" data-placement="top" title="Contáctanos por WhatsApp">
                    <img class="img-fluid" src="{{ asset('img/whatsapp_logo.png') }}" alt="" style="width: 80%">
                </a>
            </div>
        </footer>
    </div>
</div>

<style>
    #scrollbox {
        /*border: 1px solid red;*/
        overflow-y: auto;
        max-height: calc(100vh - 300px);
    }

    #scrollbox::-webkit-scrollbar {
        width: 7px;
    }

    /* Track */
    #scrollbox::-webkit-scrollbar-track {
        background: none;
    }

    /* Handle */
    #scrollbox::-webkit-scrollbar-thumb {
        background: rgba(38, 38, 38, 0.5);
        border-radius: 10px;
    }

    /* Handle on hover */
    #scrollbox::-webkit-scrollbar-thumb:hover {
        background: rgba(10, 10, 10, 0.5);
    }
</style>
<div class="modal fade" id="ModalDetailsOportunities" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-list-alt mr-2"></i><span id="staticBackdropTitle">Detalles de la oportunidad de financiamiento</span></h5>
                <button type="button" class="close cerrar" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="nav nav-pills px-sm-5 nav-justified flex-column flex-xl-row nav-wizard" id="cardTab" role="tablist">
                            <!-- Wizard navigation item 1-->
                            <a class="nav-item nav-link active border border-primary" id="wizard1-tab" href="#wizard1" data-toggle="tab" role="tab" aria-controls="wizard1" aria-selected="true">
                                <div class="wizard-step-icon">1</div>
                                <div class="wizard-step-text">
                                    <div class="wizard-step-text-name">Información General</div>
                                </div>
                            </a>
                            <!-- Wizard navigation item 2-->
                            <a class="nav-item nav-link border border-primary" id="wizard2-tab" href="#wizard2" data-toggle="tab" role="tab" aria-controls="wizard2" aria-selected="true">
                                <div class="wizard-step-icon">2</div>
                                <div class="wizard-step-text">
                                    <div class="wizard-step-text-name">Información Financiera</div>
                                </div>
                            </a>
                            <!-- Wizard navigation item 3-->
                            <a class="nav-item nav-link border border-primary" id="wizard3-tab" href="#wizard3" data-toggle="tab" role="tab" aria-controls="wizard3" aria-selected="true">
                                <div class="wizard-step-icon">3</div>
                                <div class="wizard-step-text">
                                    <div class="wizard-step-text-name">Experiencia Crediticia</div>
                                </div>
                            </a>
                            <!-- Wizard navigation item 4-->
                            <a class="nav-item nav-link border border-primary" id="wizard4-tab" href="#wizard4" data-toggle="tab" role="tab" aria-controls="wizard4" aria-selected="true">
                                <div class="wizard-step-icon">4</div>
                                <div class="wizard-step-text">
                                    <div class="wizard-step-text-name">Riesgos y Mitigantes</div>
                                </div>
                            </a>
                            <!-- Wizard navigation item 5-->
                            <a class="nav-item nav-link border border-primary" id="wizard4-tab" href="#wizard5" data-toggle="tab" role="tab" aria-controls="wizard5" aria-selected="true">
                                <div class="wizard-step-icon">5</div>
                                <div class="wizard-step-text">
                                    <div class="wizard-step-text-name">Calificación y Recomendaciones</div>
                                </div>
                            </a>
                            <a class="btn btn-action-proposal rounded-0 text-dark" id="expres-send" href="#">
                                <div class="wizard-step-icon"><em class="fas fa-paper-plane mr-1"></em></div>
                                <div class="wizard-step-text">
                                    <div class="wizard-step-text-name">Enviar propuesta</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" id="scrollbox">
                    <div class="col-md-12">
                        <div class="tab-content" id="cardTabContent">
                            <div class="tab-pane fade show active" id="wizard1" role="tabpanel" aria-labelledby="wizard1-tab">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Descripción de la compañia</label>
                                        <div id="companyDescriptionEditor" style="height: auto;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Descripción de la solicitud</label>
                                        <div id="applicationDescriptionEditor" style="height: auto;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="wizard2" role="tabpanel" aria-labelledby="wizard2-tab">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h3>Ventas</h3>
                                        <hr class="border border-primary">
                                        <div class="row pb-2">
                                            <div class="col-md-4">
                                                <div class="chart-bar"><canvas id="salesAnalitycChart" width="100%" height="30"></canvas></div>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="">Descripción del análisis de ventas</label>
                                                <div id="saleAnalyticDescription" style="height: 350px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h3>Utilidad Operación</h3>
                                        <hr class="border border-primary">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="chart-bar"><canvas id="utilityAnalitycChart" width="100%" height="30"></canvas></div>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="">Descripción del análisis de Utilidad de Operación (EBITDA)</label>
                                                <div id="utilityOperationalDescription" style="height: 350px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h3>Capacidad de Pago</h3>
                                        <hr class="border border-primary">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h2 style="font-size: 2em; font-weight: bolder"><strong id="paymentCapacityBadge">$ {{ number_format(50000,2,'.',',') }}</strong></h2>
                                                <small class="text-dark badge badge-transparent-dark text-white">Mensualidades Disponibles</small>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="">Descripción de la Capacidad de Pago</label>
                                                <div id="capacityPaymentDescription" style="height: 350px;">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <h3>Estructura Financiera</h3>
                                        <hr class="border border-primary">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-lg-8">
                                                <ul class="list-group d-flex list-group-horizontal-md" id="financialStructureEditor">
                                                    <li class="list-group-item flex-fill">
                                                        Activo
                                                        <span class="badge badge-light badge-pill text-dark" style="font-weight: bolder; font-size: 2em;"><strong id="company_active_badge">$ {{ number_format(200000,2,'.',',') }}</strong></span></li>
                                                    <li class="list-group-item flex-fill">
                                                        Pasivo
                                                        <span class="badge badge-light badge-pill text-dark" style="font-weight: bolder; font-size: 2em;"><strong id="company_passive_badge">$ {{ number_format(400000,2,'.',',') }}</strong></span>
                                                    </li>
                                                    <li class="list-group-item flex-fill">
                                                        Capital
                                                        <span class="badge badge-light badge-pill text-dark" style="font-weight: bolder; font-size: 2em;"><strong id="company_capital_badge">$ {{ number_format(600000,2,'.',',') }}</strong></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h3>Liquidez</h3>
                                        <hr class="border border-primary">
                                        <div class="row justify-content-center">
                                            <div class="col-md-2">
                                                <span class="badge badge-light badge-pill text-success" style="font-weight: bolder; font-size: 2em;"><strong id="liquidityBadge">10x</strong></span>
                                            </div>
                                            <div class="col-md-10">
                                                <label for="">Descripción de la Liquidez</label>
                                                <div id="liquidityDescription" style="height: 350px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h3>Apalancamiento</h3>
                                        <hr class="border border-primary">
                                        <div class="row justify-content-center">
                                            <div class="col-md-2">
                                                <span class="badge badge-light badge-pill text-success" style="font-weight: bolder; font-size: 2em;" ><strong id="leverageBadge">8x</strong></span>
                                            </div>
                                            <div class="col-md-10">
                                                <label for="">Descripción de Apalancamiento</label>
                                                <div id="leverageDescription" style="height: 350px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h3>Horizonte de Deuda</h3>
                                        <hr class="border border-primary">
                                        <div class="row justify-content-center">
                                            <div class="col-md-2">
                                                <span class="badge badge-light badge-pill text-primary" style="font-weight: bolder; font-size: 2em;"><strong id="debtHorizonBadge">12 años</strong></span>
                                            </div>
                                            <div class="col-md-10">
                                                <label for="">Descripción del Horizonte de Deuda</label>
                                                <div id="debHorizonDescription" style="height: 350px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h3>Ciclo Financiero</h3>
                                        <hr class="border border-primary">
                                        <div class="row justify-content-center">
                                            <div class="col-md-2">
                                                <span class="badge badge-light badge-pill text-dark" style="font-weight: bolder; font-size: 2em;"><strong id="financialCycleBadge">Ágil</strong></span>
                                            </div>
                                            <div class="col-md-10">
                                                <label for="">Descripción del Ciclo Financiero</label>
                                                <div id="financialCycleDescription" style="height: 350px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="wizard3" role="tabpanel" aria-labelledby="wizard3-tab">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h3>Comportamiento de Pago</h3>
                                        <hr class="border border-primary">
                                        <div class="row pb-2">
                                            <div class="col-md-4">
                                                <span class="badge badge-light badge-pill text-dark" style="font-weight: bolder; font-size: 2em;"><strong id="paymentBehaviorBadge">Puntual</strong></span>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="">Descripción del Comportamiento de Pago</label>
                                                <div id="paymentBehaviorDescription" style="height: 350px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h3>Solicitud Vs Historial en Buró</h3>
                                        <hr class="border border-primary">
                                        <div class="row pb-2">
                                            <div class="col-md-4">
                                                <span class="badge badge-light badge-pill text-dark" style="font-weight: bolder; font-size: 2em;"><strong id="applicationVsBadge">80 %</strong></span>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="">Descripción Solicitud Vs Historial en Buró</label>
                                                <div id="creditBureauDescription" style="height: 350px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="wizard4" role="tabpanel" aria-labelledby="wizard4-tab">
                                <div class="card-body form-group">
                                    <div class="row" id="risksMitigantsEditor">
                                        <div class="col" id="risks_div">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col" class="text-center">#</th>
                                                        <th scope="col" class="text-center">Riesgo</th>
                                                        <th scope="col" class="text-center">Mitigante</th>
                                                        <th scope="col" class="text-center">Nivel de riesgo</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="risk_table_body">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="wizard5" role="tabpanel" aria-labelledby="wizard5-tab">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h3>Calificación</h3>
                                        <hr class="border border-primary">
                                        <div class="row pb-2">
                                            <div class="col-md-4">
                                                <span id="score_badge" class="badge badge-light badge-pill" style="font-weight: bolder; font-size: 2em;"><strong>AA+</strong></span>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="">Recomendaciones</label>
                                                <div id="recommendationsDescription" style="height: 350px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light cerrar" data-dismiss="modal"><i class="fas fa-times mr-2"></i> Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/Jquery/jquery-3.5.1.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('/assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('/assets/nprogress/nprogress.js') }}"></script>
<script src="{{ asset('assets/Bootstrap4.5.3/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/Axios/axios.min.js') }}"></script>
<script src="{{ asset('assets/Alertify/js/alertify.min.js') }}"></script>
<script src="{{ asset('custom/js/custom.js') }}"></script>
<script src="{{ asset('custom/js/axios_interceptor.js') }}"></script>
<script type = "text/javascript" src = "{{ asset('/assets/select2/js/select2.min.js') }}"></script>
<script type = "text/javascript" src = "{{ asset('/assets/js/js-custom/lib/plugin%20js/jquery.mask.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script type="module">
    import {RenderComponentChart,RenderNumberFormatCurrency} from "{{ asset('/vendor/CharJsModule/RenderComponentChartJs.js') }}";
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip({ boundary: 'window' });
        $('[type="range"]').on('mouseenter mouseleave', function(e) {
            $('.slider').trigger(e.type);
        })
        $('.select2').select2();

        let selectors = {
            textAreaAnalytics: {
                companyDescriptionEditor: $('#companyDescriptionEditor'),
                applicationDescriptionEditor: $('#applicationDescriptionEditor'),
                saleAnalyticDescription: $('#saleAnalyticDescription'),
                utilityOperationalDescription: $('#utilityOperationalDescription'),
                capacityPaymentDescription: $('#capacityPaymentDescription'),
                liquidityDescription: $('#liquidityDescription'),
                leverageDescription: $('#leverageDescription'),
                debHorizonDescription: $('#debHorizonDescription'),
                financialCycleDescription: $('#financialCycleDescription'),
                paymentBehaviorDescription: $('#paymentBehaviorDescription'),
                creditBureauDescription: $('#creditBureauDescription'),
                recommendationsDescription: $('#recommendationsDescription'),
            }
        };
        let quills = [];
        let QuillBuilder = {
            initEditor: function (key, object) {
                // defaultValue = (defaultValue !== undefined) ? defaultValue: false;
                let options = {
                    modules: {
                        toolbar: false
                    },
                    readOnly: true,
                    theme: 'snow'
                };
                let id = '#'+object.attr('id');
                quills[key] = new Quill(id, options);
                // if (defaultValue) {
                //     quills[key].setContents(defaultValue);
                // }
            },
        };
        function getAnalysis(appId, callback) {
            axios
                .get('{{ route('obtener_analisis') }}', {
                    params: {
                        db_id: appId,
                    }
                })
                .then(function (response) {
                    callback(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
        function fillAnalytics(target) {
            let savedAnalysis;
            getAnalysis(target.attr('id-db'), function (response) {
                let analysisTracking = [];
                savedAnalysis = response;
                $.each(selectors.textAreaAnalytics, function (key, object) {
                    QuillBuilder.initEditor(key, object);
                });
                $.each(savedAnalysis, function (keyAn, analysis) {
                    if (analysis.required) {
                        quills[analysis.editor_identifier].setContents(JSON.parse(analysis.contents))
                    } else {
                        $('#'+analysis.editor_identifier).closest('.form-group').hide(0);
                        analysisTracking.push(analysis.editor_identifier);
                    }
                });
                if (analysisTracking.includes('companyDescriptionEditor')
                    && analysisTracking.includes('applicationDescriptionEditor')) {
                    $('#collapseGeneral').prev().css('background-color','#8395cc').hide();
                }
                if (analysisTracking.includes('saleAnalyticDescription') && analysisTracking.includes('utilityOperationalDescription')
                    && analysisTracking.includes('capacityPaymentDescription') && analysisTracking.includes('liquidityDescription')
                    && analysisTracking.includes('leverageDescription') && analysisTracking.includes('debHorizonDescription')
                    && analysisTracking.includes('financialCycleDescription') && analysisTracking.includes('financialStructureEditor')) {
                    $('#collapseInformationFinancial').prev().css('background-color','#8395cc').hide();
                }
                if (analysisTracking.includes('paymentBehaviorDescription')
                    && analysisTracking.includes('creditBureauDescription')) {
                    $('#collapseCreditExperience').prev().css('background-color','#8395cc').hide();
                }
                if (analysisTracking.includes('risksMitigantsEditor')
                    && analysisTracking.includes('risksMitigantsEditor')) {
                    $('#collapseRiskMitigant').prev().css('background-color','#8395cc').hide();
                }
                if (analysisTracking.includes('recommendationsDescription')) {
                    $('#collapseScore').prev().css('background-color','#8395cc').hide();
                }
            });
        }
        function resetAnalytics() {
            $.each(selectors.textAreaAnalytics, function (key, object) {
                let div = object.closest('.form-group');
                div.show(0);
            });
            $('#financialStructureEditor').show(0);
            $('#risksMitigantsEditor').show(0);
            $('#collapseGeneral').prev().css('background-color','#2e4999').show(0);
            $('#collapseInformationFinancial').prev().css('background-color','#2e4999').show(0);
            $('#collapseCreditExperience').prev().css('background-color','#2e4999').show(0);
            $('#collapseRiskMitigant').prev().css('background-color','#2e4999').show(0);
            $('#collapseScore').prev().css('background-color','#2e4999').show(0);
        }
        function getExtensions(appId, callback) {
            axios
                .get('{{ route('obtener_extensiones') }}', {
                    params: {
                        db_id: appId,
                    }
                })
                .then(function (response) {
                    callback(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
        function fillExtensions(target) {
            getExtensions(target.attr('id-db'), function (response) {
                $('#paymentCapacityBadge').html('$ '+Intl.NumberFormat('es-MX').format((response.payment_capacity || 0))+' MXN');
                $('#company_active_badge').html('$ '+Intl.NumberFormat('es-MX').format((response.company_active || 0))+' MXN');
                $('#company_passive_badge').html('$ '+Intl.NumberFormat('es-MX').format((response.company_passive || 0))+' MXN');
                $('#company_capital_badge').html('$ '+Intl.NumberFormat('es-MX').format((response.company_capital || 0))+' MXN');
                $('#liquidityBadge').html(Intl.NumberFormat('es-MX').format(response.liquidity)+'x');
                $('#leverageBadge').html(Intl.NumberFormat('es-MX').format(response.leverage)+'x');
                if (parseInt(response.debt_horizon) == 1) {
                    $('#debtHorizonBadge').html(Intl.NumberFormat('es-Mx').format(response.debt_horizon)+' año');
                } else {
                    $('#debtHorizonBadge').html(Intl.NumberFormat('es-Mx').format(response.debt_horizon)+' años');
                }
                $('strong#debtHorizonBadge').html(Intl.NumberFormat('es-Mx').format(response.debt_horizon)+' años');
                $('#financialCycleBadge').html(response.financial_cycle.toUpperCase());
                $('#paymentBehaviorBadge').html(response.payment_behavior.toUpperCase());
                $('#applicationVsBadge').html(Intl.NumberFormat('es-MX').format(response.application_vs)+'%');
                $('#score_badge').css('color',response.score.color);
                $('#score_badge').children('strong').text(response.score.score);
            });
        }
        function getUtilities(appId, callback) {
            axios
                .get('{{ route('obtener_utilidades') }}', {
                    params: {
                        db_id: appId,
                    }
                })
                .then(function (response) {
                    callback(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
        let months = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
        function fillUtilities(target) {
            getUtilities(target.attr('id-db'), function (response) {
                let sales = response.find((obj) => {
                    return obj.type === 1;
                });
                let utilities = response.find((obj) => {
                    return obj.type === 2;
                });
                let salesLabels;
                let salesValues;
                let utilitiesLabels;
                let utilitiesValues;
                if (sales !== undefined) {
                    salesLabels = [];
                    salesValues = [];
                    if (sales.year_1 !== '') {
                        sales.year_1 = (sales.month_1 === 'all' || sales.month_1 === '') ? sales.year_1 : ''+sales.year_1+' - '+months[sales.month_1 - 1];
                        salesLabels.push(sales.year_1);
                        salesValues.push(sales.value_1);
                    }
                    if (sales.year_2 !== '') {
                        sales.year_2 = (sales.month_2 === 'all' || sales.month_2 === '') ? sales.year_2 : ''+sales.year_2+' - '+months[sales.month_2 - 1];
                        salesLabels.push(sales.year_2);
                        salesValues.push(sales.value_2);
                    }
                    if (sales.year_3 !== '') {
                        sales.year_3 = (sales.month_3 === 'all' || sales.month_3 === '') ? sales.year_3 : ''+sales.year_3+' - '+months[sales.month_3 - 1];
                        salesLabels.push(sales.year_3);
                        salesValues.push(sales.value_3);
                    }
                }
                if (utilities !== undefined) {
                    utilitiesLabels = [];
                    utilitiesValues = [];
                    if (utilities.year_1 !== '') {
                        utilities.year_1 = (utilities.month_1 === 'all' || utilities.month_1 === '') ? utilities.year_1 : ''+utilities.year_1+' - '+months[utilities.month_1 - 1];
                        utilitiesLabels.push(utilities.year_1);
                        utilitiesValues.push(utilities.value_1);
                    }
                    if (utilities.year_2 !== '') {
                        utilities.year_2 = (utilities.month_2 === 'all' || utilities.month_2 === '') ? utilities.year_2 : ''+utilities.year_2+' - '+months[utilities.month_2 - 1];
                        utilitiesLabels.push(utilities.year_2);
                        utilitiesValues.push(utilities.value_2);
                    }
                    if (utilities.year_3 !== '') {
                        utilities.year_3 = (utilities.month_3 === 'all' || utilities.month_3 === '') ? utilities.year_3 : ''+utilities.year_3+' - '+months[utilities.month_3 - 1];
                        utilitiesLabels.push(utilities.year_3);
                        utilitiesValues.push(utilities.value_3);
                    }
                }

                if (sales !== undefined) {
                    chartBarsOportunities.ventas =  RenderComponentChart.renderComponentChartBarOportunities('#salesAnalitycChart', salesLabels,salesValues);
                }
                if (utilities !== undefined) {
                    chartBarsOportunities.utilidadOperacion = RenderComponentChart.renderComponentChartBarOportunities('#utilityAnalitycChart',utilitiesLabels,utilitiesValues);
                }
            });
        }
        function getRisksById(appId, callback) {
            axios
                .get('{{ route('obtener_riesgos_publico') }}', {
                    params: {
                        db_id: appId,
                    }
                })
                .then(function (response) {
                    callback(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
        function riskTableBuild(risks) {
            let riskBody = $('#risk_table_body');
            riskBody.empty();
            if (risks.length > 0) {
                $.each(risks, function (key, risk) {
                    let tr = $('<tr></tr>');
                    let td1 = $('<td class="text-center"></td>');
                    let td2 = $('<td class="text-center"></td>');
                    let td3 = $('<td class="text-center"></td>');
                    let td4 = $('<td class="text-center"></td>');
                    td1.attr('scope','row').html(key+1);
                    tr.append(td1);
                    td2.html(risk.title+' - '+risk.risk);
                    tr.append(td2);
                    td3.html(risk.mitigant);
                    tr.append(td3);
                    td4.append($('<span class="badge '+risk.status_class+'">'+risk.status_name+'</span>'));
                    tr.append(td4);
                    riskBody.append(tr);
                });
            } else {
                let tr = $('<tr></tr>');
                let td1 = $('<td class="text-center" colspan="4">No hay riesgos registrados para esta solicitud.</td>');
                tr.append(td1);
                riskBody.append(tr);
            }
        }
        function riskTableInit(target) {
            getRisksById(target.attr('id-db'), riskTableBuild);
        }
        // ================================================================================

        const rangeInput = document.querySelectorAll(".range-input input"),
            priceInput = document.querySelectorAll(".price-input input"),
            range = document.querySelector(".slider .progress");
        let priceGap = 1000;

        function formatCurrencyAmmount(amount)
        {
            return amount.replace(/\D/g, "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
        }

        rangeInput.forEach(input =>{
            input.addEventListener("input", e =>{
                var minVal = rangeInput[0].value;
                var maxVal = rangeInput[1].value;

                var minValDef = minVal.replace(/[$.]/g,'');
                var maxValDef = maxVal.replace(/[$.]/g,'');

                minValDef = parseInt(minValDef);
                maxValDef = parseInt(maxValDef);

                if((maxValDef - minValDef) < priceGap){
                    if(e.target.className === "range-min"){
                        rangeInput[0].value = maxVal - priceGap
                    }else{
                        rangeInput[1].value = minVal + priceGap;
                    }
                }else{
                    priceInput[0].value = "$"+ImplementCurrency.number_format(minVal,'.',',');
                    priceInput[1].value = "$"+ImplementCurrency.number_format(maxVal,'.',',');
                    range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
                    range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
                }
            });
        });

        function loadPercentRangeAmount()
        {
            let minVal = parseInt(rangeInput[0].value),
                maxVal = parseInt(rangeInput[1].value);

            priceInput[0].value = "$"+ImplementCurrency.number_format(minVal,'.',',');
            priceInput[1].value = "$"+ImplementCurrency.number_format(maxVal,'.',',');
            range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
            range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
        }

        loadPercentRangeAmount();

        var body = $('body');
        //var ctx = document.getElementById("myBarChart");

        var chartBarsOportunities = {
            ventas : null,
            utilidadOperacion : null
        }

        function createSectionDetails( target ,callbock)
        {
            try {

                resetAnalytics();
                fillAnalytics(target);
                fillExtensions(target);
                fillUtilities(target);
                riskTableInit(target);

                callbock();

            }catch (e) {
                console.log(e);
            }
        }

        function returnSectionOportunities( target )
        {
            let parentContainer = $(target).parent().parent();
            let containerDetails = $(parentContainer).prev();
            $(parentContainer).hide();
            // resets variable that keeps track of Quill objects
            quills = [];
            $(containerDetails).show();
        }


        body.on('click','.btn-load-more',function(e){
            e.preventDefault();
            //console.log($(this).parent().parent().parent());
            var urlParent = $(this).attr('self-url');
            createSectionDetails( $(this) ,function(){
                $('#expres-send').attr('href',urlParent);
                $('#ModalDetailsOportunities').modal('show');
            });

        });

        body.on('click','#return-view',function(e){
            e.preventDefault();
            //console.log($(this).parent().parent().parent());
            returnSectionOportunities( $(this) );
        })

        body.on('click','#cleanFilter',function(e){
            e.preventDefault();

            alertify.success('Has dado clic en limpiar filtros');

            //var amountMax = parseInt( $('input#max-amount-db').val() );

            $('select#sector').val("").select2();
            $('select#destiny').val("").select2();
            $('select#state').val("").select2();
            //$('input#limit').val( amountMax / 2 );

            $('#form-oportunities-lp').submit();

        });

        $('.select2').select2();

        $('body').on('keyup','.price-input input',function(event){
            $(event.target).val(function (index, value ) {
                return '$'+formatCurrencyAmmount(value);
            });
        })

        //$('.price-input input').mask("#,##0.00", {reverse: true})
    });
</script>

{{--<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        $('.select2').select2();

        $('body').on('click','.btn-load-more',function(e){
            e.preventDefault();
            $('#ModalDetailsOportunities').modal('show');
        })

    });
</script>--}}
</body>
@yield('scripts_specter')
