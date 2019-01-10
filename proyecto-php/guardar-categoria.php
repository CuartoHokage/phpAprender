<?php
if (isset($_POST)) {
    # code...
    require_once 'includes/conexion.php';
    $nombre=isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    
    // Array de errores
    $errores= array();
    // Validacion nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/{0-9}/", $nombre)){
        $nombre_validado=true;
    }else{
        $nombre_validado=false;
        $errores['nombre']="El nombre no es válido";
    }

    if(count($errores)==0){
        $guardar_usuario=true;
        // Cifrar la contraseña
        $password_segura= password_hash($password, PASSWORD_BCRYPT, ['const'=>4]);

        $sql= "INSERT INTO categorias VALUES(null, '$nombre');";
        $guardar= mysqli_query($db,$sql);
    }
}
header("Location: index.php");
?>