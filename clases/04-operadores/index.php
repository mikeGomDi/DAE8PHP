<?php
//Operadore -> Es un caracter que nos permite modificar el contenido de una o más variables 

// Declaración de variables
$num1 = 55;
$num2 = 33;

// Aritmeticos
$resultado = ($num1+$num2);
echo 'Suma: '.$resultado.'<br>';
echo 'Resta: '.($num1-$num2).'<br>';
echo 'Multiplicación: '.($num1*$num2).'<br>';
echo 'División: '.($num1/$num2).'<br>';
echo 'Módulo: '.($num1%$num2).'<br>';

// Incromento y Decremento
$stock = 10000;
// ++$var,$var++,--$var,$var--
$stock++;
echo '<h1>'.$stock.'</h1>';
$stock--;
echo '<h1>'.$stock.'</h1>';

// Asignación
$edad = 60;
echo ($edad).'<br>';
echo ($edad+5);
echo ($edad).'<br>';
?>
