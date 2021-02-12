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
    <h1>El titulo existe y el listado no es MAYOR A 5</h1>
@else
    <h1>El titulo no existe</h1>
@endif