<?php 

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

$resultado = ($num1 + $num2 + $num3) / 3;

print "O resultado da média entre " . $num1 . ", " . $num2 . " e " . $num3 ." é " . $resultado;

print "<br>";
// -----------------------------------------------------------------------------------

$num4 = $_POST['num4'];
$num5 = $_POST['num5'];
$num6 = $_POST['num6'];

$resultado2 = ($num4 + $num5 + $num6) / 3;;

print "O resultado da média entre " . $num4 . ", " . $num5 . " e " . $num6 ." é " . $resultado2;