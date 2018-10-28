<?php
// Operadores aritméticos
$numero1= 5;
$numero2= 33;

echo 'Suma:'.($numero1+$numero2).'<br>';
echo 'Resta:'.($numero1-$numero2).'<br>';
echo 'Multiplicacion:'.($numero1*$numero2).'<br>';
echo 'División:'.($numero1/$numero2).'<br>';
echo 'Resto:'.($numero1%$numero2).'<br>';

//Operadores de incremento y decremento
$year= 2019;
// Incremento +1
$year++;
echo '<h1>'.$year.'</h1>';
// Decremento -1
$year--;
echo '<h2>'.$year.'</h2>';
// Operadores de asignación
$edad= 55;
echo $edad.'<br>';
// Edad = edad+5
echo ($edad+=5).'<br>';
echo ($edad-=5);
?>