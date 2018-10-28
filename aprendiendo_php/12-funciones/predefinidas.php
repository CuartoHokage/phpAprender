<?php
	$nombre= "Jaime";
	// Debugger
	var_dump($nombre);
	// Fechas
	echo date('d-m-Y').'<br>';
	echo time().'<br>';
	// Matemáticas
		//Sacar raíz cuadrada 
	echo "Raíz cuadradea de 10: ".sqrt(10).'<br>';
		// Numero aleatoreo
	echo "Número aleatorio 10 y 40: ".rand(10,40);
	echo "<br>";
		// Numero Pi
	echo "Número PI: ".pi();
		// Redondear valores
	echo '<br>';
	echo "Redondear: ".round(7.54).'<br>';
	echo "Redondear: ".round(7.546, 2);
	echo "<br>";
		// Ver el tipo de variable
	echo gettype($nombre).'<br>';
		// Condicion con is_
	if (is_string($nombre)) {
		# code...
		echo "Esa variable es un string";
	}else{
		if (is_float($nombre)) {
			# code...
			echo "Es decimal";
		}else{
			echo "Tampoco es float";
		}
	}
	echo "<br>";
		// Función isset para ver si una variable existe
		// devuelve true o false
	if (isset($edad)) {
		# code...
		echo "La variable existe";
	}else{
		echo "La variable no existe";
	}
	echo "<br>";
		// Eliminar variables o indices de arrays
	$year= 2018;
	unset($year);
	echo "<br>";
		// Comprobar variables vacias
	$texto= "";
	if (empty($texto)) {
		# code...
		echo "La variable texto esta vacía";
	}else{
		echo "La variable tiene contenido";
	}
	echo "<br>";
		// Calcular los carácteres de una cadena
	$cadena="12345";
	echo 'Tiene '.strlen($cadena).' carácteres';

	echo "<br>";
		// Encontrar caracter
	$frase= "La vida es bella";
	echo strpos($frase, "vida").'<br>';
		// Reemplazar contenido de un string
	$frase=str_replace("vida", "moto", $frase);
	echo $frase;
	echo "<br>";
		// Convertir mayusculas y minusculas
	echo strtolower($frase).'<br>';
	echo strtoupper($frase).'<br>';
