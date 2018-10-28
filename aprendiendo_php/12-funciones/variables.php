<?php
// Variables locales: Las que se definen dentro de una funcion y no pueden
// ser usuadas fuera de la funcion y solo estan disponibles dentros. A no ser 
// que hagamos un return.
// Variables globales: Las que se declaran fuera de una funcion y estan
// disponibles dentro y fuera de las funciones.

$frase="Ni los genios son tan genios ni los mediocres tan mediocres";
echo $frase;

function holaMundo(){
	global $frase;
	echo '<h1>'.$frase.'<h1>';
	$year= 2018;
	echo "<h1>$year</h1>";
	return $year;
}
echo holaMundo();

// Funciones variables
function buenosDias(){
	return "Hola buenos dias";
}
function buenasTardes(){
	return "Hey buenas tardes";
}
function buenasNoches(){
	return "Buenas noches";
}
echo "<br>";
$horario= "buenasNoches";
$horario();
echo $horario();
?>