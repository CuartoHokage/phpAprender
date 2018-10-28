<?php
// Variables superglobales
// Variables del servidor
echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE'];
echo '</h1>';

echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '</h1>';
// Ver la ip del cliente.
echo '<h1>';
echo $_SERVER['REMOTE_ADDR'];
echo '</h1>';
?>