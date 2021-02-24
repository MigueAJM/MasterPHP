<h1>Insertar una fruta</h1>

<form action="{{ action('FrutaController@save') }}" method="POST">
    {{ csrf_field() }}

     <label for="name">Nombre</label>
     <input type="text" name="name"><br/>

     <label for="description">Description</label>
     <input type="text" name="description" id=""><br/>
     
     <label for="price">Precio</label>
     <input type="text" name="price" id=""><br/>

     <input type="submit" value="Guardar">

</form>