<?php
// Conexión a la base de datos
$conexion= mysqli_connect("localhost", "root", "", "phpmysql");

// Comprobar si la conexion es correcta
if (mysqli_connect_errno()) {
    # code...
    echo "la conexión a la base de datos mysql a fallado".mysqli_connect_errno();
}else{
    echo "Conexión correcta<br>";
}

// Consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta SELECT desde php
// Obtiene el resultado de la query
$query=mysqli_query($conexion, "SELECT *FROM notas");
// Convierte la query en un array


while($nota= mysqli_fetch_assoc($query)){
    // var_dump($nota);
    echo '<h2>'.$nota['id'].'</h2><br>';
    echo $nota['titulo'].'<br>';
    echo $nota['descripcion'].'<br>';
    echo $nota['color'].'<br>';
}

// Consulta para insertar datos en la base de datos
$sql= "INSERT INTO notas VALUES(null,'nota de php','Estos es una nota de php','green')";
$insert= mysqli_query($conexion, $sql);
echo '<hr>';
if ($insert) {
    # code...
    echo "datos insertados correctamente";
}else{
    echo "Error:".mysqli_error($conexion);
}