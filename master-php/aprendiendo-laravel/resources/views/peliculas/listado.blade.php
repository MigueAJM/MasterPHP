<!--IMPRIMIR POR PANTALLA-->
<h1>{{$titulo}}</h1>
<h2>{{$listado[2]}}</h2>
<p>{{ date('Y') }}</p>
<!--COMENTARIOS-->
<!-- Esto es un comentario -->
<?php
// Esto es un comentario
?>

{{-- Esto es un comentario --}}

<!--MOSTRAR SI EXISTE-->
<!--?= isset($director) ? $director : 'No hay director'; -->

{{ $director or 'No hay ningun director' }}

<!--CONDICIONALES-->
@if($titulo && count($listado) >= 5)
    <h1>El titulo existe y es este: {{$titulo}}</h1>
@elseif($titulo)
    <h1>El titulo existe y el listado NO ES MAYOR A 5</h1>
@else
    <h1>El titulo no existe</h1>
@endif

<!--BUCLES-->
@for($i=0; $i<=20; $i++)
    El numero es: {{$i}} <br/> 
@endfor
<hr/>
<?php $contador = 1; ?>
@while($contador < 50)
    @if($contador % 2 == 0)
        NUMERO PAR: {{$contador}} <br/>
    @endif
        <?php $contador++; ?>
@endwhile

<hr/>

@foreach($listado as $pelicula)
    <p>{{$pelicula}}</p>
@endforeach