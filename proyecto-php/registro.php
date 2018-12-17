<?php
if(isset($_POST)){
    require_once 'includes/conexion.php';
    session_start();
//    Recoger los valores del formulario de registro
    $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos=isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email=isset($_POST['email']) ? $_POST['email'] : false;
    $password=isset($_POST['password']) ? $_POST['password'] : false;
    // var_dump($_POST);
    // Validación de datos

    // Array de errores
    $errores= array();
    // Validacion nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/{0-9}/", $nombre)){
        $nombre_validado=true;
    }else{
        $nombre_validado=false;
        $errores['nombre']="el nombre no es valido";
    }
    // Validación de apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/{0-9}/", $apellidos)){
        $apellidos_validado=true;
    }else{
        $apellidos_validado=false;
        $errores['apellidos']="el apellidos nos es valido";
    }
    // Validación de email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado=true;
    }else{
        $email_validado=false;
        $errores['email']="El email nos es valido";
    }
    // Validacion de password
    if(!empty($password)){
        $password_validado=true;
    }else{
        $password_validado=false;
        $errores['password']="el password nos es valido";
    }
    // Guardar o no usuario en base de datos 
    $guardar_usuario=false;

    if(count($errores)==0){
        $guardar_usuario=true;
        // Cifrar la contraseña
        $password_segura= password_hash($password, PASSWORD_BCRYPT, ['const'=>4]);

        $sql= "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
        $guardar= mysqli_query($db,$sql);
        // var_dump(mysqli_error($db));
        // die();
        if($guardar){
            $_SESSION['completado']="El registro se a completado con exito";
        }else{
            $_SESSION['errores']['general']= "Fallo al guardar el usuario";
        }
        // Insertar usuarios en su tabla correspondiente
         
    }else{
        $_SESSION['errores']=$errores;   
    }
    
}
header('Location: index.php');
?>