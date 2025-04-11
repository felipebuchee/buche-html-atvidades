<?php 

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$resultado = $num1 + $num2;

print "O resultado da soma entre " . $num1 . " e " . $num2 . " é " . $resultado;

print "<br>";
// -----------------------------------------------------------------------------------

$num3 = $_POST['num3'];
$num4 = $_POST['num4'];

$resultado2 = $num3 + $num4;

print "O resultado da soma entre " . $num3 . " e " . $num4 . " é " . $resultado2;