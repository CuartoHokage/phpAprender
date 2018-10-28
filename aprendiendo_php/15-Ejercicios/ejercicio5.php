<?php
/**
 * Ejercicio 5
 * Crear un array con el contenido de una tabla:
 * Accion Aventura  Deportes
 * gta      zelda       fifa
 * cod      mario       pes
 * 
 * Cada fila debe ir en un fichero separado por includes
 * 
 */

 $juegos=['Accion'=>['gta','carlos duti','fortnite'], 
        'Aventura'=>['Naruto','Mario','Zelda'],
        'Deportes'=>['fifa','Need for speed', 'Pes']];
$categorias=array_keys($juegos);
?>
<table border="1">
    <?php require_once 'ejercicio5/encabezados.php'?>
    <?php require_once 'ejercicio5/primerafila.php'?>
    <?php require_once 'ejercicio5/segundafila.php'?>
    <?php require_once 'ejercicio5/tercera.php'?>
    
    
</table>