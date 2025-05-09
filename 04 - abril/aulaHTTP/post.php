<?php 

print "Página aberta!";

$nome = $_POST['nome'];
print "<br>";
print "Bem vindo, $nome";

$sobrenome = $_POST['sobrenome'];
print " " . $sobrenome . "!";