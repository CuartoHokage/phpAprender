<?php
/**
 * Ejercicio 3:
 * Programa que compruebe si una variable esta vacia y si esta vacía, rellenarla con 
 * texto en minúsculas y mostrarla en mayusculas en negritas
*/
$texto="";
if(empty($texto)){
    $texto="hola soy Naruto";
    $textoMayus= strtoupper($texto);
    echo '<strong>'.$textoMayus.'</strong>';
}else{
    echo "lo siento sasuke llego primero";
}
?>