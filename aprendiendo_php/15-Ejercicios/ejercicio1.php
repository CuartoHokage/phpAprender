<?php
/*
Ejercicio 1:
Hacer un programa en php que tenga un array con 8 números enteros
y que haga lo siguiente:
1. Tiene que recorrerlo y mostrarlo.
2. Ordenarlo y mostrarlo.
3. Mostrar su longitud.
4. Buscar algo dentro del array (por get en la url).
*/
//Funciones
function mostrarArray($array){
    $resultado= "";
    foreach ($array as $elemento) {
        # code...
        $resultado.= $elemento.'<br>';
    }
    return $resultado;
}
$cursos= ['primeroA','primeroB','primeroD','primeroC'];
echo '<h2>Mostrar array</h2>';
echo mostrarArray($cursos);
echo '<hr>';
// Ordenando array
echo '<h2>Mostrar y ordenar array</h2>';
sort($cursos);
echo mostrarArray($cursos);

echo '<hr>';
echo '<h2>Longitud del array</h2>';
$longitudArray=count($cursos);
echo $longitudArray.'<br>';

echo '<h2>Busqueda de elemento</h2>';
if(isset($_GET['busqueda'])){
    $busqueda=$_GET['busqueda'];
    $seach=array_search($busqueda, $cursos);
    if (!empty($seach)) {
        # code...
        echo "<h4>La busqueda existe y esta en el indice $seach</h4>";
    }else{
        echo '<h4>El elemento buscado no existe</h4>';
    }
}else{
    echo "Introduzca un valor busqueda por la url";
}


?>