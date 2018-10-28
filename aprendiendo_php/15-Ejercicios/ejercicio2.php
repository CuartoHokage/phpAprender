<?php
/**
 *  Ejercicio 2
 *  Escribir un programa en php que añada valores a un array mientras su longitud
 * sea menor a 120 y luego mostrarlo por pantalla.
 *
 */
$largoArray=[];
for ($i=0; $i < 120 ; $i++) { 
    # code...
    array_push($largoArray, 'Elemento: '.$i);
    echo $largoArray[$i].'<br>';
}
echo '<h2>'.count($largoArray).'</h2>';
?>