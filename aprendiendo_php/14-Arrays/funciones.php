<?php
$cantantes= ['Naruto','Jaime','Sasuke','Andrea'];
$numeros= [1,2,3,4,5];
// Función para ordenar alfabeticamente array
asort($cantantes);
var_dump($cantantes);
echo "<br>";
// Función para ordenar alfabeticamente alrreves array
arsort($cantantes);
var_dump($cantantes);
echo "<br>";
// Función para ordenar alfabeticamente y numéricamente un array
sort($numeros);
var_dump($numeros);
echo "<br>";
// Función para añadir elementos en un array
array_push($cantantes, "Sakura");
var_dump($cantantes);
echo "<br>";
// Eliminar el ultimo elemento de un array
array_pop($cantantes);
// Especifica que elemento quieres eliminar atraves del indice
unset($cantantes[1]);
var_dump($cantantes);
echo "<br>";
// Sacar el indice elemento aleatorio de un array
$indiceRandom= array_rand($cantantes);
echo $cantantes[$indiceRandom].'<br>';
// Sacar orden inverso de un array
var_dump(array_reverse($numeros));
echo '<br>';
// Buscar en un array y ver en que indice esta
$resultado=array_search('Sasuke', $cantantes);
var_dump($resultado);
echo '<br>';
// Contrar numero de elementos
echo count($cantantes);

?>