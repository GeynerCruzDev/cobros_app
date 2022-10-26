<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name', 'NABU') }}</title>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet" crossorigin="anonymous" />
    <!--<link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />-->
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('/assets/bootstrap-fileinput/themes/explorer-fa/theme.css') }}" />
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('/assets/bootstrap-fileinput/css/fileinput.css') }}" />
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('/assets/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('custom/css/custom.css') }}">
    <style>

        .btn-items-options-landing{
            background-color: #2e4999;
            color: white;
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

        .overlay-background{
            background-image: linear-gradient(rgb(69, 95, 171),rgba(0,0,0,0.5)), url("{{ asset('/assets/img/logos/visitar-rascacielos.jpeg') }}");
            background-attachment: fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .overlay-background-about{
            height: 500px;
            background-image: linear-gradient(rgb(69, 95, 171),rgba(0,0,0,0.5)), url("{{ asset('/assets/img/logos/business-intelligence.jpeg') }}");
            background-attachment: fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .icon-image-resp{
            position: relative;
            float: left;
            width: 200px;
            height: 200px;
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

        #image-logo{
            display: inline-flex;
            height: 6rem;
            width: 6rem;
            border-radius: 50%;
            position: relative;
            align-items: center;
            justify-content: center;
        }

        .background-aux-primary{
            background-color: #2e4999 !important;
        }

    </style>
</head>
<body>
<div class="navbar-container" style="min-height: 74.9531px; margin-bottom: -74.9531px;">
    <nav class="navbar fixed-top navbar-expand-lg justify-content-between" style="background-color: #2e4999; opacity: 0.9">
        <button class="navbar-toggler order-2" type="button" data-toggle="collapse" data-target="#navbar-list-9" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 1.5rem">
            <i class="fas fa-sliders-h text-white"></i>
        </button>

        <a class="navbar-brand text-white" href="{{ url('/') }}">
            <img id="image-logo" class="" src="{{asset('img/logo_nabu.png')}}" alt="logo_del_sistema">
        </a>
        <div class="collapse navbar-collapse" id="navbar-list-9">
            <ul class="navbar-nav align-items-center ml-auto">
                <a class="btn btn-sm border-0  text-white font-weight-600 mr-2" id="navbarDropdownAboutUs" href="javascript:void(0);" role="button">{{_('Nosotros')}}</a>
                <li class="nav-item dropdown no-caret mr-3 mr-lg-0 dropdown-user" >
                    <a class="btn btn-sm border-0  text-white dropdown-toggle btn-sm border-0 text-white font-weight-600 mr-2" id="navbarDropdownAboutUs" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{_('Oportunidades')}}</a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAboutUs" style="background-color: #36529f">
                        <a class="dropdown-item btn-sm border-0 text-dark font-weight-600 text-white items-options-landing" href="{{ route('new-application') }}">
                            <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                            Publicar una solicitud de financiamiento
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item btn-sm border-0 text-dark font-weight-600 text-white items-options-landing" href="{{ route('oportunities') }}">
                            <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                            Ver oportunidades de financiamiento
                        </a>
                    </div>
                </li>
                <a class="btn btn-sm border-0 text-white font-weight-600 mr-2" id="navbarDropdownContactUs" href="javascript:void(0);" role="button">{{_('Contacto')}}</a>
                @auth
                    <li class="nav-item dropdown no-caret mr-3 mr-lg-0 dropdown-user mr-3">
                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="{{ asset('assets/img/illustrations/profiles/profile-0.png') }}" /></a>
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                            <h6 class="dropdown-header d-flex align-items-center">
                                <img class="dropdown-user-img" src="{{ asset('assets/img/illustrations/profiles/profile-0.png') }}" />
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
                    <a class="btn btn-sm rounded-3 call-to-action mr-3" id="navbarDropdownLogin" href="{{ url('/') }}" role="button">{{_('Iniciar sesión')}}</a>
                @endauth
            </ul>
        </div>
    </nav>
</div>
<main class="">
    @yield('especter_landing')
</main>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="{{ asset('custom/js/custom.js') }}"></script>
<script type = "text/javascript" src = "{{ asset('/assets/select2/js/select2.min.js') }}"></script>
@yield('scripts_specter')
</body>
</html>
