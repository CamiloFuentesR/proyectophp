<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @can('products.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
                        </li>
                        @endcan
                        @can('users.index') <!-- nombre de permiso-->
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a> <!-- nombre de ruta-->
                         </li>
                         @endcan
                        @can('roles.index')
                         <li class="nav-item">
                                <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                         </li>
                         @endcan
                         <li class="nav-item"><a class="nav-link">busqueda</a> </li>


                                {{ Form::open(['route'=>'products.index','method'=>'GET','class'=>'form-inline pull-right']) }}
                                <div  class="form-group">
                                    {{ Form::text('name',null,['class'=>'form-control form-control-sm','placeholder'=>'Nombre']) }}
                                </div>
                                <div  class="form-group">
                                        {{ Form::text('email',null,['class'=>'form-control form-control-sm','placeholder'=>'Email']) }}
                                    </div>
                                    <div  class="form-group">
                                        <button type="submit" class="btn btn-sm btn-default">
                                                <span class="fa fa-search"></span>
                                        </button>
                                    </div>
                                {{ form::close() }}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if(session('info'))
            <div class="container ">
                <div class="row justify-content-center">
                <div class="col-md-12 col-md-offset-2">
                    <div class="alert alert-success">
                        {{ session('info') }}

                    </div>
                </div>
            </div>
            </div>

            @endif
                @if(count($errors))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-2">
                            <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>

                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @yield('content')
        </main>
    </div>
</body>
</html>
