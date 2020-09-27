<?php
/*
    EJERCICIO 3.
    Hacer una interfaz de usuario(formulario) con dos input y 4 botones
    (suma, resta, multiplicación y division).
*/
$resultado = false;
if(isset($_POST['n1']) && isset($_POST['n2'])){
   
    if(isset($_POST['sumar'])){
        $resultado = 'El resultado  es: '.($_POST['n1'] + $_POST['n2']);
    }
    if(isset($_POST['restar'])){
        $resultado = 'El resultado  es: '.($_POST['n1'] - $_POST['n2']);
    }
    if(isset($_POST['multiplicar'])){
        $resultado = 'El resultado  es: '.($_POST['n1'] * $_POST['n2']);
    }
    if(isset($_POST['dividir'])){
        $resultado = 'El resultado  es: '.($_POST['n1'] / $_POST['n2']);
    }
    //  NOTA: Separar los operadores para que no nos de ningun conlicto
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora con PHP</title>
</head>
<body>
    <h1>Calculadora con PHP</h1>
    <form action="" method="POST">
        <label for="n1">Numero 1</label><br/>
        <input type="number" name="n1" /><br/>

        <label for="n2">Numero 2</label><br/>
        <input type="number" name="n2" /><br/>

        <input type="submit" value="sumar" name="sumar" />
        
        <input type="submit" value="restar" name="restar" />
        
        <input type="submit" value="multiplicar" name="multiplicar" />
        
        <input type="submit" value="dividir" name="dividir" />
    </form>
</body>
<?php
//  RESULTADO
if($resultado != false):
    echo '<h2>'.$resultado.'<h2>';
endif;
?>
</html>