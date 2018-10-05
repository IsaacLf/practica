@extends('layout.chess')

@section('name', 'Otras imágenes')

@section('stylesInclude')
@endsection

@section('content')
<section class="section js-section u-category-gallery is-shown">
    <header class="section-header">
        <div class="section-wrapper">
            <h1>Otras imágenes</h1>
            <p>
                Actualmente se encuentra en desarrollo una extensión para Visual Studio Code de nuestro lenguaje, por el momento sólo pinta las palabras reservadas
                pero en un futuro tendra IntelliSense que nos ayudará a desarrollar programas más fácilmente.
            </p>
            <h3>Capturas del editor de Chess++</h3>
            <div class="img-container">
                <img data-desc="Editor de Chess++ Parte 1" src="{{ asset('img/editor/chesseditor1.png') }}" class="img-item" onclick="showModal(this)">
                <img data-desc="Editor de Chess++ Parte 2" src="{{ asset('img/editor/chesseditor2.png') }}" class="img-item" onclick="showModal(this)">
            </div>
        </div>
    </header>
</section>
@endsection

@section('outofmain')
<div id="myModal" class="my-modal">
    <span class="close">×</span>
    <img class="my-modal-content" id="img">
    <div id="caption"></div>
</div>
@endsection

@section('scriptsInclude')
@endsection