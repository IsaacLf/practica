@extends('layout.chess')

@section('name', 'Métodos')

@section('stylesInclude')
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/chess/demo.css') }}" />
@endsection

@section('content')
<section class="section js-section u-category-doc is-shown">
    <header class="section-header">
        <div class="section-wrapper">
            <h1>Métodos</h1>
            <p>
                Un <strong>método</strong> es una subrutina cuyo código es definido en una clase y puede pertenecer tanto a una clase, como es el caso de los métodos de clase o estáticos, como a un objeto, como es el caso de los métodos de instancia. Análogamente a los procedimientos en lenguajes imperativos, un método consiste generalmente de una serie de sentencias para llevar a cabo una acción, un juego de parámetros de entrada que regularán dicha acción o, posiblemente, un valor de salida (o valor de retorno) de algún tipo.
            </p>
            <p>
                La diferencia entre un procedimiento (generalmente llamado función si devuelve un valor) y un método es que este último, al estar asociado con un objeto o clase en particular, puede acceder y modificar los datos privados del objeto correspondiente de forma tal que sea consistente con el comportamiento deseado para el mismo. Así, es recomendable entender a un método no como una secuencia de instrucciones sino como la forma en que el objeto es útil (el método para hacer su trabajo). Por lo tanto, podemos considerar al método como el pedido a un objeto para que realice una tarea determinada o como la vía para enviar un mensaje al objeto y que éste reaccione acorde a dicho mensaje 
            </p>
        </div>
    </header>
    <div class="demo">
      <div class="demo-wrapper is-open">
        
        <div class="demo-box">
           <p>
               La definición del método consiste en un modificador de acceso (al igual que la clase), que puede faltar (por lo que por defecto tendrá el modificador de acceso <code>Public</code>), la palabra reservada <code>Move</code> 
               (que expresa que es un método), un nombre de clase <code>MethodID</code>, los correspondientes parámetros y un tipo de dato devuelto: <code>Int</code>,<code>String</code>,<code>Void</code>, etc.
            </p>
            <p>
                Dentro del método podemos definir variables, otros objetos, etc. y se verá finalizado con una sentencia <code>Return</code> si devolviese algún tipo de dato.
            </p>
          <h5>Definición de métodos</h5>
          <pre>
<code class="hljs">/*[ ModDeAcceso ] Move [ Nombre ]([ Parametros ]):[ Tipo de dato ]*/
...
Public Move SumarAyB ( Int:A, Int:B): Int
    /* El proceso va aquí */
    Return A + B;
End : Move
...</code></pre>
        </div>
      </div>
    </div>
</section>
@endsection

@section('scriptsInclude')
@endsection