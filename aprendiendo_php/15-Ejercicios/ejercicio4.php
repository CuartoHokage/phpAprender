<?php
/**
 * Ejercicio 4:
 * Crear un script en php que tenga 4 variables, una tipo array
 * otra de tipo string, otra int y otra booleana y imprima un mensaje segun
 * el tipo 
 */
$var1=[];
$var2='Gatitos';
$var3=5;
$var4=false;

function tipo($tipo){
    echo '<h3>La variable es de tipo: '.gettype($tipo).'</h3><br>';
}

echo tipo($var1);
echo tipo($_GET['tipo']) 
?>