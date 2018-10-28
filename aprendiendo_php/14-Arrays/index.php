<?php
/**
 * Arrays
 * Un array es una coleccion o un conjunto de datos/valores, bajo un único nombre
 * para acceder a esos valores podemos usar un indice numero o alfanummerico
 * 
 */
// Forma 1 de definir un array
$peliculas= array('Batman', 'spiderman', 'Señor de los anillos');
// Foma 2 de definir un array
$cantantes= ['Naruto','Jaime','Sasuke'];
// Array asociativo
$personas= ['nombre'=>'Jaime', 'apellidos'=>'Paz', 'web'=>'konothec.ec'];
var_dump($personas['apellidos']);
// Recorrer array con for
echo "<h1>Listado de películas.</h1>";
echo "<ul>";
for ($i=0; $i< count($peliculas); $i++){
    echo '<li>'.$peliculas[$i].'</li>';
}
echo "</ul>";
echo '<hr>';
// Recorrer array con foreach
echo "<h1>Listado de cantantes.</h1>";
echo "<ul>";
foreach ($cantantes as $cantante) {
    # code...
    echo '<li>'.$cantante.'</li>';
}
echo "</ul>";
// Array multidimensionales
$contantos=[array('nombre'=>'Michelle', 'email'=>'michele@hotmail.com'),
            array('nombre'=>'Jaime', 'email'=>'jaime@hotmail.com'),
            array('nombre'=>'Luis', 'email'=>'luis@hotmail.com'),
            array('nombre'=>'Jose', 'email'=>'jose@hotmail.com')];

foreach ($contantos as $key => $contacto) {
    # code...
    var_dump($contacto['nombre']);
}
?>