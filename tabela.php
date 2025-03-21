<?php 

function desenhaLinha(array $dadosCidade){
    print "<tr>";
    print "<td>" . $dadosCidade["nome"] . "</td>";
    print "<td>" . $dadosCidade["habit"] . "</td>";
    print "<td>" . $dadosCidade["area"] . "m2" . "</td>";
    print "<td>" . $dadosCidade["altitude"] . "</td>";
    print "<td>" . $dadosCidade["estado"] . "</td>";
    print "</tr>";
}

//programa principal
$linhas = array();

$foz = array("nome" => "Foz do Iguaçu",
            "habit" => 250000,
            "area" => 500,
            "altitude" => 145,
            "estado" => "Paraná");
            array_push($linhas, $foz);

            $cascavel = array("nome" => "Cascavel",
            "habit" => 300000,
            "area" => 420,
            "altitude" => 320,
            "estado" => "Paraná");
            array_push($linhas, $cascavel);

            $chapeco = array("nome" => "Chapecó",
            "habit" => 500000,
            "area" => 730,
            "altitude" => 620,
            "estado" => "Santa Catarina");
            array_push($linhas, $chapeco);

print "<table border=1>";

//cabecalho
print "<tr>";
print "<td>Nome</td>";
print "<td>Habitantes</td>";
print "<td>Área</td>";
print "<td>Altitude</td>";
print "<td>Estado</td>";
print "</tr>";

//linhas de dados
foreach($linhas as $cidade){
    /*
    print "<tr>";
    print "<td>" . $cidade["nome"] . "</td>";
    print "<td>" . $cidade["habit"] . "</td>";
    print "<td>" . $cidade["area"] . "</td>";
    print "<td>" . $cidade["altitude"] . "</td>";
    print "<td>" . $cidade["estado"] . "</td>";
    print "</tr>";*/

    //versao com funcao
    desenhaLinha($cidade);
}
print "</table>";
?>