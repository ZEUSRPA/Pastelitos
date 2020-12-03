{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <meta http-equiv="Expires" content="0">--}}
{{--    <meta http-equiv="Last-Modified" content="0">--}}
{{--    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">--}}
{{--    <meta http-equiv="Pragma" content="no-cache">--}}
{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--    <!-- Scripts -->--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
{{--    <!-- Fonts -->--}}
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
{{--<link rel="shortcut icon" href="" type="image/x-icon"> --}}

<!-- Bootstrap -->
{{--<link rel="stylesheet" type="text/css"  href="assets/css/bootstrap.css">--}}
{{--<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.css">--}}

<!-- Nivo Lightbox
================================================== -->
{{--<link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >--}}
{{--<link rel="stylesheet" href="assets/css/nivo_lightbox_themes/default/default.css">--}}


<!-- Slider
================================================== -->
{{--<link href="assets/css/owl.carousel.css" rel="stylesheet" media="screen">--}}
{{--<link href="assets/css/owl.theme.css" rel="stylesheet" media="screen">--}}

<!-- Stylesheet
================================================== -->
{{--<link rel="stylesheet" type="text/css"  href="assets/css/style.css">--}}
{{--<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">--}}

<!-- Google Fonts
================================================== -->
{{--<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>--}}
{{--<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>--}}

{{--    <!-- Styles -->--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('css/master.css') }}" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">--}}
</head>
{{--<body>--}}
{{--<div id="app">--}}
{{--    <el-container>--}}
{{--        @if(Illuminate\Support\Facades\Auth::check())--}}
{{--            <sidebar-menu-component-guest></sidebar-menu-component-guest>--}}

{{--        @else--}}
{{--            <sidebar-menu-component></sidebar-menu-component>--}}
{{--        @endif--}}
{{--        <el-container>--}}
{{--            <el-header style="text-align: right; font-size: 12px; background-color: #e10127" class="d-flex align-items-center justify-content-end">--}}
{{--                <el-row class="d-flex justify-items-end  align-items-center">--}}
{{--                    @if(Illuminate\Support\Facades\Auth::check())--}}
{{--                        <span class="text-white">{{Illuminate\Support\Facades\Auth::user()->name}} &nbsp;</span>--}}
{{--                        <el-avatar shape="square" size="small"--}}
{{--                                   src="https://cube.elemecdn.com/9/c2/f0ee8a3c7c9638a54940382568c9dpng.png"></el-avatar>--}}
{{--                        <el-dropdown>--}}
{{--                            <i class="el-icon-arrow-down text-white" style="margin-right: 15px"></i>--}}
{{--                            <el-dropdown-menu slot="dropdown" >--}}
{{--                                <el-dropdown-item onclick="window.location.href='home'">Inicio</el-dropdown-item>--}}
{{--                                <el-dropdown-item onclick=" document.getElementById('logout-form').submit()"> Cerrar--}}
{{--                                    sesión--}}
{{--                                </el-dropdown-item>--}}
{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
{{--                                      style="display: none;">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                                <!--el-dropdown-item>Delete</el-dropdown-item-->--}}
{{--                            </el-dropdown-menu>--}}
{{--                        </el-dropdown>--}}
{{--                    @else--}}
{{--                        <a class="text-white" href="{{ route('login') }}">Iniciar sesión &nbsp;&nbsp;</a>--}}
{{--                        <a class="text-white" href="{{ route('register') }}">Registrarse</a>--}}
{{--                    @endif--}}
{{--                </el-row>--}}
{{--            </el-header>--}}

{{--            <el-main>--}}
{{--                @yield('content')--}}
{{--            </el-main>--}}
{{--        </el-container>--}}
{{--    </el-container>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap_template.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts/fontawesome-all.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">


</head>
<body id="page-top">
<div id="app">
    <div id="wrapper">
        @if(Illuminate\Support\Facades\Auth::check())
            <sidebar-menu-component></sidebar-menu-component>
        @endif
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-pasteleria shadow mb-4 topbar static-top">
        <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
            <!-- <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                    <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                </div>
            </form> -->
            <ul class="nav navbar-nav flex-nowrap ml-auto">
                <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                    <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto navbar-search w-100">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                            <h6 class="dropdown-header">alerts center</h6>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="mr-3">
                                    <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                </div>
                                <div><span class="small text-gray-500">December 12, 2019</span>
                                    <p>A new monthly report is ready to download!</p>
                                </div>
                            </a>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="mr-3">
                                    <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                </div>
                                <div><span class="small text-gray-500">December 7, 2019</span>
                                    <p>$290.29 has been deposited into your account!</p>
                                </div>
                            </a>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="mr-3">
                                    <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                </div>
                                <div><span class="small text-gray-500">December 2, 2019</span>
                                    <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                </div>
                            </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                            <h6 class="dropdown-header">alerts center</h6>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="/images/avatars/avatar4.jpeg">
                                    <div class="bg-success status-indicator"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                    <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                </div>
                            </a>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="/images/avatars/avatar2.jpeg">
                                    <div class="status-indicator"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                    <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                </div>
                            </a>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="/images/avatars/avatar3.jpeg">
                                    <div class="bg-warning status-indicator"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                    <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                </div>
                            </a>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="/images/avatars/avatar5.jpeg">
                                    <div class="bg-success status-indicator"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                    <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                </div>
                            </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                    </div>
                    <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                </li>
                <li>
                @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li class="nav-item">
                        <a  class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                        </li>
                    @endguest

                </li>
                
            </ul>
        </div>
    </nav>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>


    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/chart.min.js')}}"></script>
<script src="{{asset('js/bs-init.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="{{asset('js/theme.js')}}"></script>
</body>
</html>
