@extends('layout.chess')

@section('name', 'Hola Mundo en Chess++')

@section('stylesInclude')
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/chess/demo.css') }}" />
@endsection

@section('content')
<section class="section js-section u-category-doc is-shown">
    <header class="section-header">
        <div class="section-wrapper">
            <h1>Hola Mundo en Chess++</h1>
            <p>
                Sabemos lo importante que son las demostraciones de los lenguajes, sobre todo cuando se presenta un lenguaje nuevo.
                En la mayoría de los ejemplos no puede faltar el clásico "Hola Mundo", del cual estaremos mostrando en breve.
            </p>
        </div>
    </header>
    <div class="demo">
      <div class="demo-wrapper is-open">
        
        <div class="demo-box">
           <p>
               En esta demostración creamos una clase <code>Round</code> llamada "HolaMundo" y seguido hacemos la creación de un método <code>Main</code> 
               el cual se encargará de mostrar una salida en la <code>Console</code>.
            </p>
          <p>Esta es la manera más sencilla de hacer un programa, en el resto de la documentación mostramos la creación de <a href="{{ url('chess/doc/classes') }}">clases</a>, <a href="{{ url('chess/doc/methods') }}">métodos</a>, entre otras diferentes cosas posibles con nuestro lenguaje.</p>
          <h5>Hola Mundo en Chess++</h5>
          <pre>
<code class="hljs">Public Round HolaMundo
  Begin: Main()
    Console.Show("Hola Mundo");
  Checkmate
End: Round</code></pre>
        </div>
      </div>
    </div>
</section>
@endsection

@section('scriptsInclude')
@endsection