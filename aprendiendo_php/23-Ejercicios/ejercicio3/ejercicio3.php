<?php
/**
 * Ejercicio 3
 * Hacer una interfaz de usuario(formulario) con 2 inputs y 4 botones
 * sumar, restar,dividir y multiplicar
 */
$resultado=false;
if(isset($_POST['valor1']) && isset($_POST['valor2'])){
    echo "hola";
    if(isset($_POST['sumar'])){
        $resultado="El resultado es: ".($_POST['valor1'] + $_POST['valor2']);
    }
    if(isset($_POST['restar'])){
        $resultado="El resultado es: ".($_POST['valor1'] - $_POST['valor2']);
    }
    if(isset($_POST['multiplicar'])){
        $resultado="El resultado es: ".($_POST['valor1'] * $_POST['valor2']);
    }
    if(isset($_POST['dividir'])){
        $resultado="El resultado es: ".($_POST['valor1'] / $_POST['valor2']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>
    <form action="" method="POST">
        <label for="valor1">Valor 1</label>
        <p><input type="number" name="valor1"></p>
        <label for="valor2">Valor 2</label>
        <p><input type="number" name="valor2"></p>
        <p><input type="submit" name="sumar" value="Sumar"></p>
        <p><input type="submit" name="restar" value="Restar"></p>
        <p><input type="submit" name="multiplicar" value="Multiplicar"></p>
        <p><input type="submit" name="dividir" value="Dividir"></p>
    </form>
    <?php
        if($resultado!=false):
            echo '<h2>'.$resultado.'</h2>';
        endif;
    ?>
</body>
</html>
