<h1>Listado de frutas</h1>

<ul>
    @foreach($frutas as $fruta)
        <a href="{{ action('FrutaController@detail', ['id' => $fruta->id]) }}">
            <li>{{$fruta->nombre}}</li>
        </a>
    @endforeach
</ul>