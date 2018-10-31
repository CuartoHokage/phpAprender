<?php
// Abrir un fichero
/*$archivo=fopen("fichero_texto.txt", "a+");
// Leer contenido
$contenido=fgets($archivo);
echo $contenido;
// Para que muestre todo el contenido 
while(!feof($archivo)){
    $contenido=fgets($archivo);
    echo $contenido.'<br>';
}

// Escribir dentro del archivo
fwrite($archivo, 'metido con php');
// Cerrar el archivo
fclose($archivo);
*/

// Copiar un fichero
// copy('fichero_texto.txt', 'fichero_copion.txt') or die('Error al copiar');

// Renombrar fichero
// rename('fichero_copion.txt', 'archivito_copiadisimo.txt');

// Eliminar fichero
// unlink('archivito_copiadisimo.txt') or die('Error al eliminar');

// Comprobar si existe archivo
if(file_exists('fichero_texto.txt')){
    echo 'El archivo existe';
}else{
    echo 'El archivo no existe';
}