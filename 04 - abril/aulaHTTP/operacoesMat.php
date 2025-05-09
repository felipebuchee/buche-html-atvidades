<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

if ($num1 == '') {
    print 'Por favor, insira o primeiro valor';
    print "<br>";
}

if ($num2 == '') {
    print 'Por favor, insira o segundo valor';
}

else {
    $soma = $num1 + $num2;
    print 'A soma é: ' . $soma;
    print "<br>";

    $subtracao = $num1 - $num2;
    print 'A subtração é: ' . $subtracao;
    print "<br>";

    $divisao = $num1 / $num2;
    print 'A divisão é: ' . $divisao;
    print "<br>";

    $multiplicacao = $num1 * $num2;
    print 'A multiplicação é: ' . $multiplicacao;
    print "<br>";

    $resto = $num1 % $num2;
    print 'O resto da divisão é: ' . $resto;
}