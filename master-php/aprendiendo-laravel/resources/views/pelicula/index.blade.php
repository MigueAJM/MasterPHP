<h1>{{$title}}</h1>
<p>(Acción index del controlador PeliculaController)</p>

@if(isset($page))
    <h3>The page is {{$page}}</h3>
@endif

<a href="{{ action('PeliculaController@detalle') }}">Ir al detalle</a>
<a href="{{ route('detalle.pelicula') }}">Ir al detalle</a>