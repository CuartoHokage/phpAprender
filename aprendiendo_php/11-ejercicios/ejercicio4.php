<?php
// Ejercicio 4:
// Recoger 2 números por la url con get y hacer todas las operaciones de calculadora
// con ellos
if (isset($_GET['numero1'])&& isset($_GET['numero2'])) {
	# code...
	$numero1= $_GET['numero1'];
	$numero2= $_GET['numero2'];
	echo "$numero1 + $numero2 =".($numero1 + $numero2).'<br>';
	echo "$numero1 - $numero2 =".($numero1 - $numero2).'<br>';
	echo "$numero1 x $numero2 =".($numero1 * $numero2).'<br>';
	echo "$numero1 / $numero2 =".($numero1 / $numero2).'<br>';
}else{
	echo "<h1>Introduce los valores por la url</h1>";
}

?>