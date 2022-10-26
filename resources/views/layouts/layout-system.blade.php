@php
use Illuminate\Support\Facades\Auth;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name', 'NABU') }}</title>
    <script src="{{ asset('assets/Jquery/jquery-3.5.1.min.js') }}" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/img/logos/favicon-nabu.png') }}">
    <link href="{{asset('assets/DataTable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{asset('assets/DataTables/Responsive-2.3.0/css/responsive.bootstrap.css')}}" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{asset('assets/DateRangePicker/css/daterangepicker.css')}}" rel="stylesheet" crossorigin="anonymous" />
    <!--<link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />-->
    <script data-search-pseudo-elements defer src="{{ asset('assets/FontAwesome/all.min.js') }}" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>

    <!-- Default theme -->
    <link rel="stylesheet" href="{{ asset('assets/Alertify/themes/default.min.css') }}"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="{{ asset('assets/Alertify/themes/semantic.min.css') }}"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="{{ asset('assets/Alertify/css/themes/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/animatecss/animate.min.css') }}"/>
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('/assets/bootstrap-fileinput/themes/explorer-fa/theme.css') }}" />
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('/assets/bootstrap-fileinput/css/fileinput.css') }}" />
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('/assets/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('custom/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/nprogress/nprogress.css') }}">
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('/assets/css/alertify.css') }}" />
    @yield('crsf_token')
    @yield('styles_system')
    @yield('styles_tasks')
    <style>
        .call-to-action {
            font-weight: bold;
            background-color: #f6ae2d;
            color: #050505;
        }

        .call-to-action:hover {
            font-weight: bold;
            background-color: #bc8523;
            color: #f8f4f4;
        }

        .icons-main{
            color: #2e4999;
            height: 28px !important;
            width: 25px !important;
        }
    </style>
</head>
<body class="nav-fixed {{ Auth::check() ? 'sidenav-toggled' : '' }}">
<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light" id="sidenavAccordion" style="background-color: #A61C41;">
    <!-- Sidenav Toggle Button-->
    <button class="btn btn-icon text-white order-0 mr-lg-2 ml-lg-3" id="sidebarToggle"><i data-feather="menu" style="height: 25px;width: 25px;"></i></button>
    <!-- Navbar Brand-->
    <!-- * * Tip * * You can use text or an image for your navbar brand.-->
    <!-- * * * * * * When using an image, we recommend the SVG format.-->
    <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
    <a class="text-white mt-1 d-inline mr-3" href="{{ url('/') }}">
        <img src="" alt="LOGOTIPO" style="width: 65px; height: 65px; padding: 2px !important;">
    </a>
    <!-- Navbar Items-->
    <ul class="navbar-nav align-items-center ml-auto order-2 order-lg-3">
        <!-- Documentation Dropdown-->
        <!-- Navbar Search Dropdown-->
        <!-- * * Note: * * Visible only below the md breakpoint-->
        <!-- Alerts Dropdown-->
        <li class="nav-item dropdown no-caret d-none d-sm-block mr-3 dropdown-notifications">
            <a class="btn btn-icon btn-transparent-light" id="navbarDropdownAlerts" href="" role="button"><i data-feather="bell" style="height: 25px;width: 25px;"></i> <span class="badge badge-success hide" id="notifications" ></span></a>
        </li>
        <!-- Messages Dropdown-->
        <!-- User Dropdown-->
        <li class="nav-item dropdown no-caret mr-3 mr-lg-0 dropdown-user">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="{{ asset('assets/img/illustrations/profiles/profile-0.png') }}" /></a>
            <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="dropdown-user-img" src="{{ asset('assets/img/illustrations/profiles/profile-0.png') }}" />
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name">{{ Auth::user()->name }}</div>
                        <div class="dropdown-user-details-email">{{ Auth::user()->email }}</div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">
                    <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                    Cuenta
                </a>
                <a class="dropdown-item" href="">
                    <div class="dropdown-item-icon"><i data-feather="lock"></i></div>
                    Cambiar contraseña
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
    </ul>
</nav>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                @include('layouts.sidebar')
            </div>
            <!-- Sidenav Footer-->
            <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="sidenav-footer-subtitle">Sesión iniciada como:</div>
                    <div class="sidenav-footer-title"> {{ Auth::guard()->user()->name }}</div>
                </div>
            </div>
        </nav>
    </div>

    <div id="layoutSidenav_content">
        <main class="h-100">
            @yield('contenido')
        </main>
        <footer class="footer mt-auto footer-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 small">Copyright &copy; {{ config('app.name', 'Cobros') }} {{ date('Y') }}</div>
                    <div class="col-md-6 text-md-right small">
                        <a href="#!">Politicas de privacidad</a>
                        &middot;
                        <a href="#!">Términos &amp; Condiciones</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script type = "text/javascript" src = "{{ asset('/assets/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('/assets/nprogress/nprogress.js') }}"></script>
<script src="{{ asset('assets/Bootstrap4.5.3/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/Axios/axios.min.js') }}"></script>
<script src="{{ asset('assets/Alertify/js/alertify.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('custom/js/boundle.js') }}"></script>
<script src="{{ asset('custom/js/axios_interceptor.js') }}"></script>
<script src="{{ asset('assets/js/custom_web.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('assets/DataTable/js/jquery.dataTables.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('assets/DataTable/js/dataTables.bootstrap4.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('assets/DataTables/Responsive-2.3.0/js/dataTables.responsive.js') }}" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('.select2').select2();
    });
</script>
@yield('task_js')
@yield('js_custom')
</body>
</html>
