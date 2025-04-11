<?php 

print "Página aberta!";

$nome = $_GET['nome'];
print "<br>";
print "Bem vindo, $nome";

$sobrenome = $_GET['sobrenome'];
print " " . $sobrenome . "!";