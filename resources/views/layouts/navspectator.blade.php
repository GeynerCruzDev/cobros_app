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
    @yield('crsf_token')
    <style>

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

        .overlay-background{
            height: 500px;
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

        .overlay-background-footer{
            height: 500px;
            background-image: linear-gradient(#efeff3, #cdcdd2), url("{{ asset('/assets/img/logos/circles_footer.png') }}");
            background-attachment: fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
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

        /* Dispositivos extra pequeños (teléfonos, 600px y menos. Dispositivos pequeños (tabletas verticales y teléfonos grandes, 600 px y más) */
        @media only screen and (max-width: 600px) {
            a.navbar-brand img{
                width: 100px !important;
                height: 100px !important;
            }
        }
        /* Dispositivos pequeños (tabletas verticales y teléfonos grandes, 600 px y más) */
        @media only screen and (min-width: 600px) {
            a.navbar-brand img{
                width: 100px !important;
                height: 100px !important;
            }

        }
        /* Dispositivos medianos (tabletas horizontales, 768 px y más). */
        @media only screen and (min-width: 768px) {
            a.navbar-brand img{
                width: 100px !important;
                height: 100px !important;
            }

        }
        /* Dispositivos grandes (laptops/desktops, 992px y más) */
        @media only screen and (min-width: 992px) {
            a.navbar-brand img{
                width: 18% !important;
                height: 10% !important;
            }

        }
        /* Dispositivos extragrandes (portátiles y equipos de escritorio grandes, 1200 px y más) */
        @media only screen and (min-width: 1200px) {
            a.navbar-brand img{
                width: 18% !important;
                height: 10% !important;
            }
        }

    </style>
</head>
<body>
    <div class="navbar-container pb-0">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #2e4999;padding: 0px; height: auto;">
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
                <a class="btn btn-sm border-0  text-white font-weight-600 mr-2 text-menu-navbar menu-option-navbar" id="navbarDropdownAboutUs" href="#section-aboutUs" role="button">{{_('Nosotros')}}</a>
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
                <a class="btn btn-sm border-0 text-white font-weight-600 mr-2 text-menu-navbar menu-option-navbar" id="navbarDropdownContactUs" href="#section-contactUs" role="button">{{_('Contacto')}}</a>
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
</div>
    <main class="pb-3">
        @yield('especter_landing')
    </main>
    <div class="btn-whatsapp lift-sm" >
        <a id="icon-ws" class="m-auto" href="https://wa.me/5636360454" type="button" target="_blank" data-toggle="tooltip" data-placement="top" title="Contáctanos por WhatsApp">
            <img class="img-fluid" src="{{ asset('img/whatsapp_logo.png') }}" alt="" style="width: 80%">
        </a>
    </div>

    @include('layouts.components-system.message-preload')

    <script src="{{ asset('assets/Jquery/jquery-3.5.1.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('/assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('/assets/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('assets/Bootstrap4.5.3/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/Axios/axios.min.js') }}"></script>
    <script src="{{ asset('assets/Alertify/js/alertify.min.js') }}"></script>
    <script src="{{ asset('custom/js/custom.js') }}"></script>
{{--    <script src="{{ asset('custom/js/boundle.js') }}"></script>--}}
    <script src="{{ asset('custom/js/axios_interceptor.js') }}"></script>
    <script type = "text/javascript" src = "{{ asset('/assets/select2/js/select2.min.js') }}"></script>
    <script type = "text/javascript" src = "{{ asset('/assets/js/js-custom/lib/plugin%20js/jquery.mask.min.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function(){
/*            $('input[type="file"]').on('change',function(){
                let element = this;
                let input = $(this);
                let size = element.files[0].size;
                if (size >= parseInt({{ env('MAX_FILE_SIZE') }} )) {
                    input.val('');
                    alertify.error('El archivo no puede ser mayor a 10 MB');
                }
            });*/
        })
    </script>
@yield('scripts_specter')
@extends('layouts.footerspecter')
