@extends('layout.chess')

@section('name', 'Lenguaje')

@section('stylesInclude')
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/chess/demo.css') }}" />
@endsection

@section('content')
<section class="section js-section u-category-language is-shown">
    <header class="section-header">
        <div class="section-wrapper">
            <h1>Características del languaje</h1>
            <p>
                La razón por la que usamos y relacionamos las piezas de ajedrez con las diferentes
                estructuras de programación es debido a que comparten cierta similitud
                si se hace una análisis y se compara con una buena analogía.
            </p>
            <p>
                Como hemos explicado anteriormente, el objetivo principal en el diseño de
                este lenguaje de programación es introducir a aquellos con un conocimiento de
                ajedrez hacia actividades de programación.
            </p>
            <p>
                De igual forma no es totalmente necesario tener conocimientos del ajedrez
                pues el lenguaje se diseña con el objetivo de ser universal y en el caso de que
                el usuario tenga conocimiento nulo acerca del ajedrez, obtendrá las bases e
                incluso una idea de cómo se desempeña y los tecnicismos que se usan a lo
                largo de unas partida. 
            </p>
            <p>
                Inmersos en la estructura del lenguaje, utilizamos las
                piezas de ajedrez para declarar ciertas estructuras con las que comparten cierta
                similitud, ayudando al reconocimiento y razonamiento de procesos. De igual
                forma utilizamos términos ajedrecísticos para referirnos a ciertas sentencias que
                ayudan a la comprensión del comportamiento de las estructuras de programación
                que a continuación se explicarón. 
            </p>
        </div>
    </header>
    <div class="demo">
        <div class="demo-wrapper is-open">
        <p>
            En la siguiente tabla mostraremos la relación
            de las piezas de ajedrez con las estructuras de datos más simples y sencillas
            conocidas en cualquier lenguaje de programación.
        </p>
            <div class="demo-controls">
                <table>
                    <thead>
                        <td><strong>Pieza</strong></td>
                        <td><strong>Palabra</strong></td>
                        <td><strong>Estructura</strong></td>
                    </thead>
                    <tbody style="color: black;">
                        <tr>
                            <td>
                                <img src="{{ asset('img/chess-icons/chess-pawn-solid.svg') }}" class="nav-icon">
                            </td>
                            <td>Pawn</td>
                            <td><code>If(...)</code></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('img/chess-icons/chess-bishop-solid.svg') }}" class="nav-icon">
                            </td>
                            <td>Bishop</td>
                            <td><code>If(...) Else</code></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('img/chess-icons/chess-knight-solid.svg') }}" class="nav-icon">
                            </td>
                            <td>Knight</td>
                            <td><code>If(...) Else If(...)</code></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('img/chess-icons/chess-queen-solid.svg') }}" class="nav-icon">
                            </td>
                            <td>Queen</td>
                            <td><code>Switch(...) case:</code></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('img/chess-icons/chess-rook-solid.svg') }}" class="nav-icon">
                            </td>
                            <td>Rook</td>
                            <td><code>For(...)</code></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('img/chess-icons/chess-king-solid.svg') }}" class="nav-icon">
                            </td>
                            <td>King</td>
                            <td><code>While(...)</code></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p>
                Tomando como referencia la tabla anterior, podemos decir que las estructuras
                se relacionaron con las piezas según su relevancia y comportamiento en el
                tablero de ajedrez
            </p>
            <ul style="color:black;">
                    <li>
                        El peón (<em>Pawn</em> en inglés), al ser la pieza más sencilla del tablero se
                        relaciona y comparte una similitud con el condicional simple <code>if()</code>, desempeñando 
                        solo una tarea en el tablero, capturar o avanzar.
                    </li>
                    <li>
                        El alfil (<em>Bishop</em> en inglés), según su comportamiento en el tablero, se asocia
                        a la estructura <code>if() else</code>, esto debido a que el all solo puede desplazarse
                        en 2 direcciones, de izquierda a derecha o de derecha a izquierda, dando
                        referencia a que la estructura <code>if() else</code> simplemente realiza 2 acciones.
                    </li>
                    <li>
                        El caballo (<em>Knight</em> en inglés) tiene la particularidad de ir a 8 direcciones
                        completamente distintas según su posición en el tablero, es por esto que la
                        estructura <code>if() else if() else</code> comparte una similitud enorme con esta pieza
                        en particular, puesto que el caballo puede ir a una casilla o a cualquiera
                        de las otras 7 según le convenga.
                    </li>
                    <li>
                        La dama (<em>Queen</em> en inglés), por su parte al ser la pieza con más movilidad
                        en el tablero, (alcanzando hasta 27 casillas según su posición) se le atribuyó
                        la estructura <code>switch()</code>, siendo este el multicondicional que está presente
                        en casi todos los lenguajes de programación.
                    </li>
                    <li>
                        La torre (<em>Rook</em> en inglés) según su comportamiento solo se mueve por
                        las y columnas en el tablero de ajedrez, que a su vez, si se analiza a
                        fondo este movimiento, puede compararse al comportamiento de un ciclo
                        <code>for()</code>, esto debido a que en un concepto que explicaremos más adelante, el
                        recorrido de un arreglo se hace de con el uso de esta estructura, formando
                        un arreglo bidimensional que hace alusión a un tablero de ajedrez al ser
                        bidimensional de igual manera.
                    </li>
                    <li>
                        Una partida de ajedrez no puede jugarse sin el rey (<em>King</em> en inglés), ya
                        que es la pieza más importante en el tablero, es por esto que mientras
                        el monarca siga con vida en el tablero, la partida seguiría su curso hasta
                        encontrar su final y así compartiendo similitud con la estructura <code>while()</code>.
                    </li>
                </ul>
        </div>
    </div>
</section>
@endsection

@section('scriptsInclude')
@endsection