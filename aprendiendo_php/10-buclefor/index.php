<?php
$resultado=0;
for ($i=0; $i <=100 ; $i++) { 
	# code...
	$resultado+=$i;
	echo $resultado.'<br>';
}
echo "<h1>El resultado es: $resultado </h1>";

echo "<hr>";
	// Ejemplo
	if(isset($_GET['numero'])){
		// Cambiar tipo de dato
		$numero=(int) $_GET['numero'];
	}else{
		$numero=1;
	}

	echo "<h1>Tabla de multiplicar del número $numero </h1>";
	for ($i=1; $i <= 10; $i++) { 
		# code...
		// Salir del bucle desesperadamente :'v
		if ($numero==45) {
			# code...
			echo "No se pueden mostrar estas operaciones";
			break;
		}
		echo "$numero x $i = ".($numero*$i).'<br>';
	}
	echo "<hr>";
?>