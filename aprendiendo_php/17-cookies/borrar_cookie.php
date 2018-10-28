<?php
if($_COOKIE['micookie']){
    unset($_COOKIE['micookie']);
    // Caducarla también
    setcookie('micookie','',time()-100);
}
header('Location:ver_cookies.php');
?>