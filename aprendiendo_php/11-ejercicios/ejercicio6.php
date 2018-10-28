<?php
// Ejercicio 6
// mostrar una tabla de html con las tablas de multiplicar del 1 al 10
echo "<table border='1'>";//inicio de la tabla
echo "<tr>";
$numero=1;
for ($i=1; $i <=12 ; $i++) { 
	# code...
	echo "<th>Tabla del: $i</th>";
	
}
echo "</tr>";
	echo "<tr>";
	for ($i=1; $i <=12 ; $i++) { 
		# code...
		echo "<td>";
			for ($x=1; $x <=12 ; $x++) { 
				# code...
				echo "$i x $x =".($i*$x).'<br>';
			}
		echo "</td>";
	}
	echo "</tr>";
echo "</table>";//Fin de la tabla

?>