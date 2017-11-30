<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Evaluación 360</title> 
    
    <!-- Styles -->    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        Evaluación 360
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authenticatio n Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>                            
                        @else
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-empire fa-lg" aria-hidden="true"></i> Entidades <b class="caret"></b></a>         
                                <ul class="dropdown-menu">                       
                                    <li ><a href="{{ route('empresa.index') }}">Lista de Entidades</a></li>
                                    <li ><a href="{{ route('empresa.create') }}">Crear Entidad</a></li> 
                                    <li ><a href="">Creación de Usuarios</a></li>                               
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog fa-lg" aria-hidden="true"></i> Configuración <b class="caret"></b></a>         
                                <ul class="dropdown-menu">                       
                                    <li ><a href="{{ url('config.carga_lotes') }}">Carga en Lote</a></li>
                                    <li ><a href="">Items a Evaluar</a></li> 
                                    <li ><a href="">Cargos a Items</a></li>
                                    <li ><a href="">Asignación de Pesos</a></li>            
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=" fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i> Asignación <b class="caret"></b></a>         
                                <ul class="dropdown-menu">                       
                                              
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=" fa fa-list-alt fa-lg" aria-hidden="true"></i> Reportes <b class="caret"></b></a>         
                                <ul class="dropdown-menu">                       
                                   
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user fa-lg" aria-hidden="true"></i>    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-1.11.2.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>   
    
    <!---Riot -->
    <script src="{{asset('bower_components/riot/riot.min.js')}}"></script>

    @yield('bottom')

</body>
</html>
