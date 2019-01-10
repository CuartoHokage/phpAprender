<!-- Codigo para  que las paginas sean solo accesibles si estoy identificado-->

<?php
if(!isset($_SESSION)){
    session_start();
}


if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
}