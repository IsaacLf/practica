@extends('layout.master')

@section('name', '1')

@section('stylesInclude')
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/practices/style1.css')}}" />
@endsection

@section('content')
    <main>
        <section>
            <article id="principal" class="box">
                <h1>La programación</h1>
                <p>
                La programación es un proceso que se utiliza para idear y ordenar las acciones que se realizarán en el marco de un proyecto; al anuncio de las partes que componen un acto o espectáculo; 
                a la preparación de máquinas para que cumplan con una cierta tarea en un momento determinado; a la elaboración de programas para la resolución de problemas mediante ordenadores; 
                y a la preparación de los datos necesarios para obtener una solución de un problema.
                En la actualidad, la noción de programación se encuentra muy asociada a la creación de aplicaciones informáticas y videojuegos; 
                es el proceso por el cual una persona desarrolla un programa valiéndose de una herramienta que le permita escribir el código (el cual puede estar en uno o varios lenguajes, tales como C++, Java, Python entre otros) y de otra que sea capaz de “traducirlo” a lo que se conoce como lenguaje de máquina, el cual puede ser entendido por un microprocesador. 
                </p>
            </article>
            <article id="historia" class="box secondary">
                <h1>Historia</h1>
                <p>
                Para crear un programa, y que la computadora lo interprete y ejecute las instrucciones escritas en él, debe escribirse en un lenguaje de programación. En sus inicios las computadoras interpretaban solo instrucciones en un lenguaje específico, del más bajo nivel, conocido como código máquina, siendo éste excesivamente complicado para programar. 
                De hecho solo consiste en cadenas de números 1 y 0 (sistema binario). Para facilitar el trabajo de programación, los primeros científicos, que trabajaban en el área, decidieron reemplazar las instrucciones, secuencias de unos y ceros, por palabras o abreviaturas provenientes del inglés; 
                las codificaron y crearon así un lenguaje de mayor nivel, que se conoce como Assembly o lenguaje ensamblador. 
                Por ejemplo, para sumar se podría usar la letra A de la palabra inglesa add (sumar). Etc., etc...
                </p>
            </article>
            <article id="programas" class="box secondary">
                <h1>Programas y algoritmos</h1>
                <p>
                Un algoritmo es una secuencia no ambigua, finita y ordenada de instrucciones que han de seguirse para resolver un problema. Un programa normalmente implementa (traduce a un lenguaje de programación concreto) uno o más algoritmos. Un algoritmo puede expresarse de distintas maneras: en forma gráfica, como un diagrama de flujo, 
                en forma de código como en pseudocódigo o un lenguaje de programación, en forma explicativa.
                Los programas suelen subdividirse en partes menores, llamadas módulos, de modo que la complejidad algorítmica de cada una de las partes sea menor que la del programa completo, lo cual ayuda al desarrollo del programa. Esta es una práctica muy utilizada y se conoce como "refino progresivo".
                Según Niklaus Wirth, un programa está formado por los algoritmos y la estructura de datos. 
                </p>
            </article>
        </section>
        <section>
            <div class="summary-grid">
                <div class="summary-item">
                    <h1>La programación</h1>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, soluta aut dolore debitis molestias alias blanditiis corporis hic fugit repudiandae accusamus in libero sapiente ratione officiis officia at ut cupiditate!
                    Odio laborum accusamus dicta quas? Deleniti ipsam id delectus eveniet quam doloremque dicta, cum veniam perspiciatis voluptate debitis, ipsa eligendi ullam quos voluptates sapiente consectetur tempora. Dolores ex iste dicta!
                    Nesciunt voluptates reprehenderit doloribus ullam rerum nostrum! Perferendis, voluptate. Dolores non rem adipisci. Vero porro maiores odio rerum rem autem repellat, iste doloribus? Maxime illum cupiditate doloremque ipsa, assumenda excepturi?
                    <br>
                    <a href="#principal" class="button">Más detalles >></a>
                </div>
                <div class="summary-item">
                    <h1>Historia</h1>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nihil, quis in aliquid suscipit sint eum? Ea sequi ratione sint consectetur. Id aliquid sed itaque reiciendis, excepturi placeat tempore corporis.
                    Quis, aperiam odit! Dicta quisquam, aspernatur explicabo, distinctio ipsa laudantium ullam sapiente deleniti, tempore veniam nobis non omnis minima doloribus suscipit nemo ratione adipisci corrupti molestias porro. Laborum, aut non!
                    Soluta fugit, enim adipisci aliquam suscipit tenetur possimus iste, accusantium animi dolor inventore alias nulla aut officiis neque. Dolorum iure, quasi accusantium magni voluptatum quia dicta vitae saepe alias dolore!
                    <br>
                    <a href="#historia" class="button">Más detalles >></a>
                </div>
                <div class="summary-item">
                    <h1>Programas y algoritmos</h1>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem atque, quae quos vel quisquam reprehenderit qui, iusto, corporis ipsam dicta iste! Nemo culpa beatae eius dolor dolores nulla nam illo.
                    Quod, saepe nisi dolores eveniet nobis accusantium excepturi ad facilis voluptatem labore assumenda quas iste tenetur autem optio odit commodi repellendus facere inventore nam libero voluptas ipsam quae sint. Nostrum!
                    Deserunt commodi ex aperiam alias iusto optio molestias blanditiis illo architecto ad, recusandae labore necessitatibus exercitationem reiciendis. Officiis ducimus, laudantium minima, reprehenderit aliquid iste sequi modi sed quisquam ut suscipit?
                    <br>
                    <a href="#programas" class="button">Más detalles >></a>
                </div>
            </div>
        </section>
    </main>
    <footer>
            <span>Elementos básicos-Semana 3 Sesión 12/40</span>
    </footer>
@endsection