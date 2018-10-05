<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chess++ | @yield('name')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('metaInclude')
    <link rel="shortcut icon" href="{{ asset('img/icons/chesspp.svg') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/chess/variables.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/chess/global.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/chess/main.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/chess/nav.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/chess/section.css') }}" />
    @yield('stylesInclude')
</head>
<body>
    <nav class="nav js-nav is-shown" id="main-navbar">
        <header class="nav-header">
            <h1 class="nav-title">
                Chess++ <br>
                <strong>The new learning language</strong>
            </h1>
            <img class="nav-header-icon" src="{{ asset('img/icons/chesspp.svg')}}"></img>
        </header>
        <div class="nav-item u-category-main">
            <h5 class="nav-category">
                <img src="{{ asset('img/icons/home-solid.svg') }}" class="nav-icon">
                Principal
            </h5>
            <button 
            type="button" 
            id="button-main" 
            class="nav-button {{ Request::is('chess/main') ? 'is-selected' : '' }}" 
            onclick="{{ Request::is('chess/main') ? '' : 'goTo("'.url('chess/main').'");'}}">
                Vistazo al <em>lenguaje</em>
            </button>
            <button 
            type="button" 
            id="button-info" 
            class="nav-button {{ Request::is('chess/info') ? 'is-selected' : '' }}" 
            onclick="{{ Request::is('chess/info') ? '' : 'goTo("'.url('/chess/info').'");'}}">
                Más información
            </button>
        </div>
        <div class="nav-item u-category-language">
            <h5 class="nav-category">
                <img src="{{ asset('img/icons/chess-solid.svg') }}" class="nav-icon">
                Lenguaje
            </h5>
            <button 
            type="button" 
            id="button-main" 
            class="nav-button {{ Request::is('chess/language') ? 'is-selected' : '' }}" 
            onclick="{{ Request::is('chess/language') ? '' : 'goTo("'.url('/chess/language').'");'}}">
                Características del <em>lenguaje</em>
            </button>
            <button 
            type="button" 
            id="button-info" 
            class="nav-button {{ Request::is('chess/language/info') ? 'is-selected' : '' }}" 
            onclick="{{ Request::is('chess/language/info') ? '' : 'goTo("'.url('/chess/language/info').'");'}}">
                Más información
            </button>
        </div>
        <div class="nav-item u-category-doc">
            <h5 class="nav-category">
                <img src="{{ asset('img/icons/book-solid.svg') }}" class="nav-icon">
                Documentación
            </h5>
            <button 
            type="button" 
            id="button-main" 
            class="nav-button {{ Request::is('chess/doc/helloworld') ? 'is-selected' : '' }}" 
            onclick="{{ Request::is('chess/doc/helloworld') ? '' : 'goTo("'.url('/chess/doc/helloworld').'");'}}">
                Hola Mundo en Chess++
            </button>
            <button 
            type="button" 
            id="button-info" 
            class="nav-button {{ Request::is('chess/doc/classes') ? 'is-selected' : '' }}" 
            onclick="{{ Request::is('chess/doc/classes') ? '' : 'goTo("'.url('/chess/doc/classes').'");'}}">
                Clases
            </button>
            <button 
            type="button" 
            id="button-info" 
            class="nav-button {{ Request::is('chess/doc/methods') ? 'is-selected' : '' }}" 
            onclick="{{ Request::is('chess/doc/methods') ? '' : 'goTo("'.url('/chess/doc/methods').'");'}}">
                Métodos
            </button>
        </div>
        <div class="nav-item u-category-gallery">
            <h5 class="nav-category">
                <img src="{{ asset('img/icons/images-solid.svg') }}" class="nav-icon">
                Galería
            </h5>
            <button 
            type="button" 
            id="button-main" 
            class="nav-button {{ Request::is('chess/gallery/images') ? 'is-selected' : '' }}" 
            onclick="{{ Request::is('chess/gallery/images') ? '' : 'goTo("'.url('/chess/gallery/images').'");'}}">
                Imágenes
            </button>
            <button 
            type="button" 
            id="button-info" 
            class="nav-button {{ Request::is('chess/gallery/other') ? 'is-selected' : '' }}" 
            onclick="{{ Request::is('chess/gallery/other') ? '' : 'goTo("'.url('/chess/gallery/other').'");'}}">
                Otro
            </button>
        </div>
        <div class="nav-item u-category-about">
            <h5 class="nav-category">
                <img src="{{ asset('img/icons/info-circle-solid.svg') }}" class="nav-icon">
                Acerca de
            </h5>
            <button 
            type="button" 
            id="button-main" 
            class="nav-button {{ Request::is('chess/about') ? 'is-selected' : '' }}" 
            onclick="{{ Request::is('chess/about') ? '' : 'goTo("'.url('/chess/about').'");'}}">
                <em>Lenguaje</em>
            </button>
            <button 
            type="button" 
            id="button-info" 
            class="nav-button {{ Request::is('chess/about/team') ? 'is-selected' : '' }}" 
            onclick="{{ Request::is('chess/about/team') ? '' : 'goTo("'.url('/chess/about/team').'");'}}">
                <em>Equipo</em> 
            </button>
        </div>
    </nav>
    <main class="content js-content">
        @yield('content')
    </main>
    @yield('outofmain')
    <script src="{{ asset('js/chess/main.js') }}"></script>
    @yield('scriptsInclude')
</body>
</html>