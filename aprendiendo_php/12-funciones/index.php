<?php
/*
Funciones:
Es un conjunto de instrucciones agrupadas bajo un nombre concreto y 
que pueden ser reutilizadas invocando a dicha función

function nombreFuncion($parametro){
	// bloque de instrucciones

}
nombreFuncion($mi_parametro);
*/

function imprimir(){
	echo "Jaime Paz Mero <br>";
	echo "Michelle Ramirez <br>";
	echo "Jaime Paz Mero <br>";
	echo "Jaime Paz Mero <br>";
	echo "<hr>";
}
imprimir();

// Ejemplo 2
function tabla($numero){
	echo "<h3>Tabla de multiplicar de $numero </h3>";
	for ($i=1; $i <= 12 ; $i++) { 
		# code...
		echo "<h4>$numero x $i =".($numero*$i).'</h4>';
	}
}
/*if (isset($_GET['numero'])){
	# code...
	tabla($_GET['numero']);
}else{
	echo "Ingrese un valor por la url GET";
}*/
for ($i=1; $i <=1 ; $i++) { 
	# code...
	tabla($i);
}
echo "<hr>";
// Ejemplo 3
// Si le pongo igual a un parametro este parametro sera opcional cuando se invoque a la 
// funcion
function calculadora($numero1, $numero2, $negrita=false){
	// Conjuto de instrucciones
	$suma=$numero1+$numero2;
	$resta=$numero1-$numero2;
	$multiplicion=$numero1*$numero2;
	$division=$numero1/$numero2;

	$cadena_texto="";

	if ($negrita!=false) {
		# code...
		$cadena_texto .= "<h1>";
	}
	$cadena_texto .= "Suma: ".$suma.'<br>';
	$cadena_texto .= "Resta: ".$resta.'<br>';
	$cadena_texto .= "Multiplicación: ".$multiplicion.'<br>';
	$cadena_texto .= "División: ".$division.'<br>';
	if ($negrita!=false) {
		# code...
		$cadena_texto .= "</h1>";
	}
	return $cadena_texto;
}
echo calculadora(4, 5,true);
// 
// Ejemplo 4 Return y llamar funciones funciones dentro de otras
function getNombre($nombre){
	$texto="El nombre es ".$nombre;
	return $texto;
}
function getApellidos($apellidos){
	$texto="Los apellidos son ".$apellidos;
	return $texto;
}

function devuelveNombre($nombre, $apellidos){
	$texto = getNombre($nombre)
				.'<br>'.
				getApellidos($apellidos);
	return $texto;
}
echo devuelveNombre("Jaime", "Paz Mero");
echo "<br>";
echo getNombre("Michelle");

?>