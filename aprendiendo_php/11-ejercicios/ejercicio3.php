<?php
// Ejercicio 3: 
// Escribir un programa que imprima en pantalla los cuadrados de los números del 1 al 40
// pd: utilizar bucle while.
echo "<h2>Bucle while:</h2>";
$contador=1;
while ($contador <= 40) {
	# code...
	echo "$contador<sup>2</sup> =".($contador*$contador).'<br>';
	$contador++;
}
echo "<hr>";
// Ejercicio 3: 
// Escribir un programa que imprima en pantalla los cuadrados de los números del 1 al 40
// pd: utilizar bucle for.
echo "<h2>Bucle for:</h2>";
for ($i=1; $i <= 40 ; $i++) { 
	# code...
	echo "$i<sup>2</sup> =".($i*$i).'<br>';
}
?>