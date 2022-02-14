<!doctype html>
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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">                          
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
                        <ul>
                            <li class="{{request()->routeIs('home') ? 'active' : ''}}"><a href="{{route('home')}}">Início</a></li>
                            <li ><a href="#">Pedidos</a></li>
                            <li class="{{request()->routeIs('cliente.*') ? 'active' : ''}}"><a href="{{route('cliente.index')}}">Clientes</a></li>
                            <li class="{{request()->routeIs('produto.*') ? 'active' : ''}}"><a href="{{route('produto.index')}}">Produtos</a></li>
                        </ul>
                        <ul>
                            <li><a href="">Configuração</a></li>
                            <li><a class="logout" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form></li>
                        </ul>                                                              
                @endguest
            </nav>
        </header>
        @yield('content') 
    </div>
</body>
</html>
