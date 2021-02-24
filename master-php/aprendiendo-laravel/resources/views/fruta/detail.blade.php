<h1>{{$fruta->nombre}}</h1>

<p>{{$fruta->descripcion}}</p>

<a href="{{ action('FrutaController@index') }}">Home</a>
<a href="{{ action('FrutaController@delete', ['id' => $fruta->id]) }}">Eliminar</a>
<a href="{{ action('FrutaController@index') }}">Actualizar</a>
