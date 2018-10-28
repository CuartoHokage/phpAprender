<?php
// Condicionales
/*
IF:
if(condicion){
	instrucciones
}else{
	otras instrucciones

}

//Operaddores de comparación
== IGUAL
=== IDENTICO (compara incluso el tipo de dato)
!= DISTINTO
<> DIFERENTE
!== NO IDENTICO
< MENOR QUE 
> Mayor que
<= Menor igual
>= Mayor igual

//Operadores logicos
&&	AND Y
||	OR O
!	NOT
and, or
*/
//Ejemplo 1 
$color = 'Azul';
if ($color=='Azul') {
	# code...
	echo "El color es azul.".'<br>';
}else{
	echo "El color no es azul.".'<br>';
}
// Ejemplo 2
$year= 2020;

if ($year!= 2019) {
	# code...
	echo "Año no es 2019.".'<br>';
}else{
	echo "Es igual 2019.".'<br>';
}
$nombre= 'Jaime Paz';
$ciudad= 'Manta';
$continente='Europa';
$edad= 52;
$mayoria_edad= 18;
if ($edad>= $mayoria_edad ) {
	# code...
	echo '<h1>'.$nombre.' es mayor de edad </h1>';
	if ($continente== 'Europa') {
		# code...
		echo '<h2>y es de '.$ciudad.'</h2>';
	}else{
		echo "<h2>No es europeo</h2>";
	}
}else{
	echo '<h2>'.$nombre.' no es mayor de edad.</h2>';
}
echo "<hr>";
//ejemplo 4
$dia= 35;
// if ($dia==1) {
// 	# code...
// 	echo "Es lunes";
// }else{
// 	if ($dia==2) {
// 		# code...
// 		echo "Es martes";
// 	}else{
// 		if ($dia==3) {
// 			# code...
// 			echo "Es miercoles";
// 		}else{
// 			if ($dia==4) {
// 				# code...
// 				echo "Es jueves";
// 			}else{
// 				if ($dia==5) {
// 					# code...
// 					echo "Es viernes";
// 				}else{
// 					echo "Fin de semana";
// 				}
// 			}
// 		}
// 	}
// }
if($dia==1){
	echo "Lunes";
}elseif ($dia==2) {
	# code...
	echo "Martes";
}elseif ($dia==3) {
	# code...
	echo "Miercoles";
}elseif ($dia==4) {
	# code...
	echo "Jueves";
}elseif ($dia==5) {
	# code...
	echo "Viernes";
}else{
	echo "Es fin de semana";
}
echo "<hr>";

// Switch
$dia= 1;
switch ($dia) {
	case 1:
		# code...
		echo "Lunes";
		break;
	case 2:
		# code...
		echo "Martes";
		break;

	case 3:
		# code...
		echo "Miercoles";
		break;
	case 4:
		# code...
		echo "Jueves";
		break;
	case 5:
		# code...
		echo "Viernes";
		break;
	default:
		# code...
		echo "Fin de semana";
		break;
}
// Ejemplo 5
echo "<hr>";
$edad1= 18;
$edad2=64;
$edadOficial=20;
if (($edadOficial>=$edad1) && ($edadOficial<=$edad2)) {
	# code...
	echo "Puede trabajar";
}else{
	echo "No puede trabajar";
}
echo "<hr>";
$pais= 'Mexico';
if($pais== 'Mexico' || $pais== 'España' || $pais== 'Colombia') {
	# code...
	echo "En este pais se habla español.";
}else{
	echo "No se habla español";
}
// GOTO salta codigos entre el goto y marca
echo "<hr>";
goto marca;
echo '<h3>instruccion 1</h3>';
echo '<h3>instruccion 2</h3>';
echo '<h3>instruccion 3</h3>';
echo '<h3>instruccion 4</h3>';
// El goto salta hasta donde esta marca
marca:
echo "Me he saltado 4 echos";
?>