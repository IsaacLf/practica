@extends('layout.chess')

@section('name', 'Galería de imágenes')

@section('stylesInclude')
@endsection

@section('content')
<section class="section js-section u-category-gallery is-shown">
    <header class="section-header">
        <div class="section-wrapper">
            <h1>Galería de imágenes</h1>
            <h3>Equipo desarrollador</h3>
            <div class="img-container">
                <img data-desc="Jesús Alejandro Sosa Salazar" src="{{ asset('img/team/yisus.jpg') }}" class="img-item" onclick="showModal(this)">
                <img data-desc="Victor Isaac Lopez Fernandez" src="{{ asset('img/team/victor.jpg') }}" class="img-item" onclick="showModal(this)">
                <img data-desc="Alvaro Mas Perez" src="{{ asset('img/team/vallo.jpg') }}" class="img-item" onclick="showModal(this)">
            </div>
            <br>
            <h3>Ayudante</h3>
            <div class="img-container">
                <img data-desc="Ruth Betsaida Martinez Dominguez" src="{{ asset('img/team/betsaida.jpg') }}" class="img-item" onclick="showModal(this)">
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