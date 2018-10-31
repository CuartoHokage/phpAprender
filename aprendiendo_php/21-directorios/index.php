<?php
    // Comprobar si la carpeta existe
    /*
    if(!is_dir('mi_carpetas')){
        // Para crear un directorio o carpeta
        mkdir('mi_carpetas', 0777) or die('No se pudo crear carpeta');
    }else{
        echo 'La carpeta ya existe';
    }
    */

    // Eliminar carpeta
    // rmdir('mi_carpeta');

    if($gestor= opendir('./mi_carpetas')){
        while(false !== ($archivo= readdir($gestor))){
            if($archivo!= '.' && $archivo!= '..'){
                echo $archivo.'<br>';
            }
            
        }
    }
?>