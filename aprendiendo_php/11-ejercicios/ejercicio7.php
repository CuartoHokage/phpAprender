<?php
// Ejercicio 7:
// Hacer un programa que muestre todos los numeros impares entre dos numeros
// que nos lleguen por la URL ($_GET)
	if (isset($_GET['numero1'])&&isset($_GET['numero2'])) {
		$numero1= $_GET['numero1'];
		$numero2= $_GET['numero2'];
		for ($i=$numero1+1; $i < $numero2 ; $i++) { 
		# code...
			if($i%2 !=0){
				if ($i != $numero2-1) {
					# code...
					echo $i.', ';
				}else{
					echo $i;
				}
			}
		}
	}else{
		echo "Inserte los numeros por la url";
	}	
?>