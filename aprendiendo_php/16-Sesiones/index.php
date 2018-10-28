<?php
/**
 * Una sesión almacenar y persistir datos del usuario mientras
 * navega en un sitio web hasta que cierra la sesión o cierra el navegador.
 */

//  Iniciar sesion
session_start();
// Variable normal local
$variable_normal="cadena";
// Variable de sesión
$_SESSION['variable_persistente']= "soy una sesion";

echo $variable_normal.'<br>';
echo $_SESSION['variable_persistente'].'<br>';
?>