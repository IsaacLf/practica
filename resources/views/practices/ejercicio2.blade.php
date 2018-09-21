@extends('layout.master')

@section('name', '2')

@section('stylesInclude')
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/practices/style2.css')}}" />
@endsection

@section('content')
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="#">Project Name</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class="box">
        <section>
            <h1>La programación</h1>
            <article id="programacion">
                <p>
                La programación es un proceso que se utiliza para idear y ordenar las acciones que se realizarán en el marco de un proyecto; al anuncio de las partes que componen un acto o espectáculo; 
                a la preparación de máquinas para que cumplan con una cierta tarea en un momento determinado; a la elaboración de programas para la resolución de problemas mediante ordenadores; 
                y a la preparación de los datos necesarios para obtener una solución de un problema.
                En la actualidad, la noción de programación se encuentra muy asociada a la creación de aplicaciones informáticas y videojuegos; 
                es el proceso por el cual una persona desarrolla un programa valiéndose de una herramienta que le permita escribir el código (el cual puede estar en uno o varios lenguajes, tales como C++, Java, Python entre otros) y de otra que sea capaz de “traducirlo” a lo que se conoce como lenguaje de máquina, el cual puede ser entendido por un microprocesador. 
                </p>
            </article>
        </section>
        <aside class="float-right">
            <ul>
                <li><a href="#programación">La programación</a></li>
                <li><a href="#historia">Historia</a></li>
                <li><a href="#léxico">Léxico y programación</a></li>
                <li><a href="#programas">Programas y algoritmos</a></li>
            </ul>
        </aside>
    </main>
    <section style="padding-top: 1em;">
        <div class="summary-grid">
            <div class="summary-item" id="historia">
                <h1>Historia</h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nihil, quis in aliquid suscipit sint eum? Ea sequi ratione sint consectetur. Id aliquid sed itaque reiciendis, excepturi placeat tempore corporis.
                Quis, aperiam odit! Dicta quisquam, aspernatur explicabo, distinctio ipsa laudantium ullam sapiente deleniti, tempore veniam nobis non omnis minima doloribus suscipit nemo ratione adipisci corrupti molestias porro. Laborum, aut non!
                Soluta fugit, enim adipisci aliquam suscipit tenetur possimus iste, accusantium animi dolor inventore alias nulla aut officiis neque. Dolorum iure, quasi accusantium magni voluptatum quia dicta vitae saepe alias dolore!
                <br>
                <a href="https://es.wikipedia.org/wiki/Programación#Historia" class="button">Más detalles >></a>
            </div>
            <div class="summary-item" id="léxico">
                <h1>Léxico y programación</h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, soluta aut dolore debitis molestias alias blanditiis corporis hic fugit repudiandae accusamus in libero sapiente ratione officiis officia at ut cupiditate!
                Odio laborum accusamus dicta quas? Deleniti ipsam id delectus eveniet quam doloremque dicta, cum veniam perspiciatis voluptate debitis, ipsa eligendi ullam quos voluptates sapiente consectetur tempora. Dolores ex iste dicta!
                Nesciunt voluptates reprehenderit doloribus ullam rerum nostrum! Perferendis, voluptate. Dolores non rem adipisci. Vero porro maiores odio rerum rem autem repellat, iste doloribus? Maxime illum cupiditate doloremque ipsa.
                <br>
                <a href="https://es.wikipedia.org/wiki/Programación#Léxico_y_programación" class="button">Más detalles >></a>
            </div>
            <div class="summary-item" id="programas">
                <h1>Programas y algoritmos</h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem atque, quae quos vel quisquam reprehenderit qui, iusto, corporis ipsam dicta iste! Nemo culpa beatae eius dolor dolores nulla nam illo.
                Quod, saepe nisi dolores eveniet nobis accusantium excepturi ad facilis voluptatem labore assumenda quas iste tenetur autem optio odit commodi repellendus facere inventore nam libero voluptas ipsam quae sint. Nostrum!
                Deserunt commodi ex aperiam alias iusto optio molestias blanditiis illo architecto ad, recusandae labore necessitatibus exercitationem reiciendis. Officiis ducimus, laudantium minima, reprehenderit aliquid iste sequi modi sed quisquam ut suscipit?
                <br>
                <a href="https://es.wikipedia.org/wiki/Programación#Programas_y_algoritmos" class="button">Más detalles >></a>
            </div>
        </div>
    </section>
    <footer>
        <span>Elementos básicos-Semana 3 Sesión 13/40</span>
    </footer>
@endsection