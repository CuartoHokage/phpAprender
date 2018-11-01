<?php
/**
 * Ejercicio 2
 * 1. Una funcion
 * 2. La función debe validar un email con filter_var
 * 3. Recoger una variable por get y validarla
 * 4. Mostrar el resultado
 */
function validarEmail($email){
    $status="No válido";
    if(!empty($email)&& filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status="válido";
    }
    return $status;
}
if(isset($_GET['email'])){
    echo validarEmail($_GET['email']);
}else{
    echo "usa un email.";
}
?>