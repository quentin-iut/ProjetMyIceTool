<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Ice Tool</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo.png')}}" alt="My Ice Tool" class="brand">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="#">Devenir admin</a></li>
                            <li><a href="{{ route('login') }}">Connexion</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->prenom }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        
    </div>

    <!-- Scripts -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD98FXPoiMBf85KTc2IszcA6Zj0L9x9Ids&libraries=geometry,places,drawing"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    <script src="{{ asset('js/Marker.js') }}"></script>
    <script src="{{ asset('js/Zone.js') }}"></script>
    <script src="{{ asset('js/Cascade.js') }}"></script>
    <script src="{{ asset('js/Autocompletion.js') }}"></script>
    <script src="{{ asset('js/Map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    

    @auth
        @if(Auth::user()->isAdmin == 1)
            <script src="{{ asset('js/Tooltip.js') }}"></script>
            <script src="{{ asset('js/Drawing.js') }}"></script>
            <script src="{{ asset('js/admin.js') }}"></script>
        @endif
    @endauth


    <div>
        <nav class="navbar navbar-default navbar-static-top footer">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo.png')}}" alt="My Ice Tool" class="brand">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left side of navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="#">© My Ice Tool</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Conditions</a></li>
                        <li><a href="#">Politique de confidentialité</a></li>
                        <li><a href="#">Plan du site</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</body>
</html>
