<?php
require_once('model/Presidente.php');

$eurico = new Presidente(16, "Eurico Gaspar Dutra", 1946, 1951);
$getulio = new Presidente(17, "Getúlio Vargas", 1951, 1954);
$cafe = new Presidente(18, "Café Filho", 1954, 1955);
$carlos = new Presidente(19, "Carlos Luz", 1955, 1955);
$nereu = new Presidente(20, "Nereu Ramos", 1955, 1956);
$jk = new Presidente(21, "Juscelino Kubitchek", 1956, 1961);

$presidentes = [$eurico, $getulio, $cafe, $carlos, $nereu, $jk];

function desenhaLinha(array $dadosPresidentes){
    print "<tr>";
    print "<td>" . $dadosPresidentes["num"] . "</td>";
    print "<td>" . $dadosPresidentes["nome"] . "</td>";  
    print "<td>" . $dadosPresidentes["inicio"] . "</td>"; 
    print "<td>" . $dadosPresidentes["fim"] . "</td>";    
    print "</tr>";
}

$linhas = $presidentes;  

print "<table border=1>";

print "<tr>";
print "<td>Número</td>";
print "<td>Nome</td>";
print "<td>Início</td>";
print "<td>Fim</td>";
print "</tr>";

foreach($linhas as $presidente){
    $dadosPresidentes = [
        "num" => $presidente->getNum(),
        "nome" => $presidente->getNome(),
        "inicio" => $presidente->getInicio(),
        "fim" => $presidente->getFim()
    ];

    desenhaLinha($dadosPresidentes);
}

print "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        table{
            width: 100vw;
            height: 100vh;
        }
    </style>
</head>
</html> 
