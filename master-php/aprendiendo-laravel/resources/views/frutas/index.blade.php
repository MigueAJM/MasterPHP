<h1>Listado de frutas</h1>

<ul>
    @foreach($frutas as $fruta)
        <li>{{$fruta->nombre}}</li>
    @endforeach
</ul>