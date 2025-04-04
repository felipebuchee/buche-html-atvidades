<?php 

function desenhaLinha($numero, $nome, $cor ){
    print "<tr style = 'background-color: $cor'>";
    print "<td>$numero</td>";
    print "<td>$nome</td>";
    print "</tr>";
}

$jogadores = array(
    array("numero" => 1, "nome" => "Tafarel"),
    array("numero" => 2, "nome" => "Jorginho"),
    array("numero" => 13, "nome" => "Aldair"),
    array("numero" => 15, "nome" => "Márcio Santos"),
    array("numero" => 6, "nome" => "Branco"),
    array("numero" => 5, "nome" => "Mauro Silva"),
    array("numero" => 8, "nome" => "Dunga"),
    array("numero" => 17, "nome" => "Mazinho"),
    array("numero" => 9, "nome" => "Zinho"),
    array("numero" => 11, "nome" => "Romário"),
    array("numero" => 7, "nome" => "Bebeto")
);


print "<table border = 1>";
print "<tr>";
print "<th>Numero</th>";
print "<th>Nome</th>";
print "</tr>";

$cores = array("yellow", "green");
$i = 0;


foreach($jogadores as $j){
    $cor = $cores[$i % 2];
    desenhaLinha($j["numero"], $j["nome"], $cor);
    $i++;
}

print "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção</title>


    <style>
        * {
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        table {
            width: 100vw;
            height: 100vh;
        }
    </style>
</head>
<body>
    
</body>
</html>
