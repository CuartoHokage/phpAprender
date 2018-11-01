<?php
    // variable super global files
    $archivo= $_FILES['archivo'];
    // Para detener la ejecucion die();
    // die();
    $nombre= $archivo['name'];

    $tipo= $archivo['type'];

    if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif") {
        if(!is_dir('images')){
            mkdir('images', 0777);
        }
        // Función para guardar un archivo temporal en el destino que yo elija
        move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
        header("Refresh: 1; URL=index.php");
        echo '<h1>Imagen subida correctamente</h1>';
    }else{
        // Redireccion despues de 5 segundos
        header("Refresh: 1; URL=index.php");
        echo '<h1>Sube una imagen con un formato de imagen por favor..</h1>';
    }
?>