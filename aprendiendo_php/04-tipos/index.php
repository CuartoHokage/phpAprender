<?php
/*
Tipos de datos:
Entero (int / integer) 99
Coma flotante / decimales (float / double) = 1.45
cadenas (string)= "galleta galleta metralleta"
booleano (bool)= true false
Nulo = null
array (coleccion de datos)
Objetos (conjunto de datos y funciones)
*/
$numero= 4;
$decimal= 27.5;
$cadena= 'naruto';

//gettype() es un metodo o función obtener el tipo de variable
// echo gettype($cadena).'<br>';
// Debugear variable con var_dump();
// $mi_nombre[]= "Jaime Paz";
// $mi_nombre[]= "Michelle Ramírez";
//var_dump($mi_nombre);
$salto= 'hola '.$cadena;
echo "$salto";
// imprimir una comilla doble
$comilla = ' " ';
// Imprimir variable string de otra variable
$copia= 'El numero es'.$numero;
echo $comilla;
?>