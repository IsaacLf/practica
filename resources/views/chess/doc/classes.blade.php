@extends('layout.chess')

@section('name', 'Clases')

@section('stylesInclude')
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/chess/demo.css') }}" />
@endsection

@section('content')
<section class="section js-section u-category-doc is-shown">
    <header class="section-header">
        <div class="section-wrapper">
            <h1>Clases</h1>
            <p>
                Una <strong>clase</strong> es una plantilla para la creación de objetos de datos según un modelo predefinido. Las clases se utilizan para representar entidades o conceptos, como los sustantivos en el lenguaje. Cada clase es un modelo que define un conjunto de variables -el estado, y métodos apropiados para operar con dichos datos -el comportamiento. Cada objeto creado a partir de la clase se denomina instancia de la clase.
            </p>
            <p>
                Las clases de objetos son un pilar fundamental de la programación orientada a objetos. Permiten abstraer los datos y sus operaciones asociadas al modo de una caja negra. Los lenguajes de programación que soportan clases difieren sutilmente en su soporte para diversas características relacionadas con clases. La mayoría soportan diversas formas de herencia. Muchos lenguajes también soportan características para proporcionar encapsulación, como especificadores de acceso.
            </p>
            <p>
                Una clase también puede tener una representación (metaobjeto) en tiempo de ejecución, que proporciona apoyo en tiempo de ejecución para la manipulación de los metadatos relacionados con la clase. 
            </p>
        </div>
    </header>
    <div class="demo">
      <div class="demo-wrapper is-open">
        
        <div class="demo-box">
           <p>
               Podemos ver que nuestra forma de definir clases consiste en un modificador de acceso: <code>Public</code>, <code>Private</code>, etc., seguido de la palabra reservada
               <code>Round</code> (que expresa que es una clase) y un nombre identificador <code>ClassID</code>
            </p>
            <p>
                Dentro de la clase podemos definir atributos (tales como variables, otros objetos, etc.) y también podemos definir métodos, como podemos ver en el apartado
                <a href="{{ url('chess/doc/methods')}}">métodos</a> de la documentación, así también como la definición de un método <code>Main</code>.
            </p>
          <h5>Definición de clases</h5>
          <pre>
<code class="hljs">/* [ ModDeAcceso ] Round [ Nombre ] */
Public Round Clase
    Int abc ;
    /* Todas los atributos van aquí */
    /* Todos los métodos después */
    Begin : Main ()
        /* El programa principal va aquí */
    CheckMate
End: Round</code></pre>
        </div>
      </div>
    </div>
</section>
@endsection

@section('scriptsInclude')
@endsection