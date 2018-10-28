<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Imprimir por pantalla</title>
</head>
<body>
	<h1>Master en PHP <?php echo "hol";?></h1>
	<!-- Sintaxis abreviada de echo -->
	<?="Bienvenido al curso php"?>
	<?php
	// Los puntos sirven para concatenar strings
		echo "<h3>Listado de videojuegos</h3>";
		echo "<ul>"
		."<li>GTA</li>"
		."<li>Fifa</li>"
		."<li>Super Smash bros</li>"
		."</ul>";
		echo "<p>Esta es toda"." - "."la lista de juegos</p>";
	?>
</body>
</html>
