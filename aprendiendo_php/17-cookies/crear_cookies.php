<?php
/**
 * Cookie:
 * Es un fichero que se almacena en el ordenador del usuario que visita
 * la web, con el fin de recordar datos o rastrear el comportamiento del
 * mismo en la web.
 * 
 */

//Crear cookie
// setcookie("nombre", "Valor de solo texto", caducidad);
//Cookie básica
setcookie("micookie", "Valor de mi galleta");
// Cookie con expiración
setcookie("unyear", "valor de mi cookie 365d", time()+(60*60*24*365));
header('Location:ver_cookies.php');
?>