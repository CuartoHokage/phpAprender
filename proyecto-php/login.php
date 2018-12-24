<?php
// Iniciar la sesión y conexion a la base de datos a traves de archivos de 
// include
require_once 'includes/conexion.php';

// Recoger los datos del formulario
if(isset($_POST)){
    // Borrar error antiguo
    if(isset($_SESSION['error_login'])){
        session_unset($_SESSION['error_login']);
    }
    // Recojo datos del formulario
    $email= trim($_POST['email']);
    $password= $_POST['password'];
    // Consulta para comprobar las credenciales del usuario
    $sql= "SELECT * FROM usuarios where email= '$email'";
    $login = mysqli_query($db, $sql);
    if($login && mysqli_num_rows($login)== 1){
        $usuario= mysqli_fetch_assoc($login);
        // var_dump($usuario);
        // die();
        // Comprobar contraseña / cifrar
        $verify= password_verify($password, $usuario['password']);
        if($verify){
            // Utilizar una sesión para guardar datos del usuario logueado
            $_SESSION['usuario']=$usuario;
            // var_dump($usuario);
        // die();
            
        }else{
            // Si algo falla enviar una sesión con el fallo
            $_SESSION['error_login']= 'Login incorrecto';
        }
    }else{
        $_SESSION['error_login']= 'Login incorrecto';
    }
    
}
// Redirigir a index.php
header("Location: index.php");
?>