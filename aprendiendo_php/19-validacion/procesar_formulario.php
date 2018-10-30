<?php
$error="faltan valores";
    if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) &&
        !empty($_POST['edad']) && !empty($_POST['correo']) && !empty($_POST['password'])) {
        # code...
        $error="ok";
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $edad=(int)$_POST['edad'];
        $email=$_POST['correo'];
        $password=$_POST['password'];

        // Validar el nombre
        if (!is_string($nombre) || !preg_match("/[0-9]+/", $nombre)) {
            # code...
            $error= "nombre";
        }
        // Validar el apellidos
        if (!is_string($apellidos) || !preg_match("/[0-9]+/", $apellidos)) {
            # code...
            $error= "apellidos";
        }
        // Validar el edad
        if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
            # code...
            $error= "edad";
        }
        // Validar el email
        if (!is_string($email) || !filter_var($edad, FILTER_VALIDATE_EMAIL)) {
            # code...
            $error= "email";
        }

        // Validar el nombre
        if (empty($password) || strlen($password<5)) {
            # code...
            $error= "password";
        }

    }else{
        $error="faltan valores";
    }

    if ($error!= 'ok') {
        # code...
        header("Location:index.php?error=$error");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validación</title>
</head>
<body>
    <?php if($error == 'ok'):?>
    <h1>Datos validados correctamente</h1>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
    <?php endif;?>
</body>
</html>