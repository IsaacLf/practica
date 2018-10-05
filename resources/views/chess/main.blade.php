@extends('layout.chess')

@section('name', 'Vistazo al lenguaje')

@section('stylesInclude')
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/chess/demo.css') }}" />
@endsection

@section('content')
<section class="section js-section u-category-main is-shown">
    <header class="section-header">
        <div class="section-wrapper">
            <h1>Vistazo al lenguaje</h1>
            <p>
                El lenguaje Chess++ fue ideado por unos compañeros de la carrera de Ingeniería en Sistemas Computacionales del Instituto Tecnológico Superior de Calkiní en el Estado de Campeche (<a target="_blank" href="http://itescam.edu.mx">ITESCAM</a>) para la materia Lenguajes y Autómatas I y II.                
            </p>
            <p>
                El objetivo del lenguaje era combinar los conocimientos del ajedrez con los conocimientos de la programación, dado que las habilidades requiridas para ambas actividades tienen ciertas similitudes.
                Ambos requieren de:
                <ul>
                    <li>Lógica general</li>
                    <li>Lógica matemática</li>
                    <li>Habilidad de resolución de problemas complejos</li>
                </ul>
            </p>
            <p>Entre otras habilidades.</p>
            <p>
                Originalmente el lenguaje estaba pensado para enfocarse en introducir a los ajedrecistas en la programación, dado que ellos tienen más aptitudes
                requeridas para la misma, como las mencionadas arriba.
            </p>
            <p>
                Actualmente se quiere que este lenguaje sea utilizado para fines educativos, tales como ayudar a introducir a los interesados al mundo de la programación de una manera 
                más sencilla y entendible que lo que comúnmente se enseña, teniendo como base el ajedrez, sin importar si tienen las bases o si son expertos.
            </p>
        </div>
    </header>
    <div class="demo">
      <div class="demo-wrapper is-open">
        <div class="demo-controls">
            <button class="demo-toggle-button">
                Programa de ejemplo
            </button>
        </div>
        <span class="demo-meta">Descripción del programa</span>
        <div class="demo-box">
            <p>
             El programa consiste en dejar entrar a los clientes siempre y cuando existan computadoras disponibles y el horario de atención esté activo .
            </p>
            <p>
                Máximo número de personas : 10 <br>
                Horario de atención : 12 pm a 8 pm (12:00 hrs a 20:00 hrs)
            </p>
          <h5>Cibercafé</h5>
          <pre>
<code>Public Round Cibercafe
    Int PersonasEnCiber = 8;
    Int Hora = 15;
        Public Move HayDisponible (): Boolean
        Begin : Bishop ( PersonasEnCiber <10)
            Return True ;
        Else
            Return False ;
        Check
    End : Move
    Public Move HorarioDisponible (): Boolean
        Begin : Bishop ( Hora >= 12 && Hora <= 20)
            Return True ;
        Else
            Return False ;
        Check
    End : Move
    Public Move LlegaPersona (): Void
        PersonasEnCiber += 1;
    End : Move
    Public Move SubeHorario (): Void
        Hora += 1;
    End : Move
    Begin : Main ()
        Boolean persona = True ;
        Boolean hora = True ;
        Cibercafe cc = New Cibercafe ();
        Begin : King (cc. HorarioDisponible &&
            cc. HayDisponible )
            Begin : Pawn ( persona )
              cc. LlegaPersona ();
            Tie
            Begin : Pawn ( hora )
            cc. SubeHorario ();
            Tie
        Check
    Checkmate
End: Round</code></pre>
        </div>
      </div>
    </div>
</section>
@endsection

@section('scriptsInclude')
@endsection