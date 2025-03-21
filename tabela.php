<?php 

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

            $chapeco = array("nome" => "Foz do Iguaçu",
            "habit" => 250000,
            "area" => 500,
            "altitude" => 145,
            "estado" => "Paraná");
            array_push($linhas, $foz);

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
print "<tr>";
print "<td>Foz</td>";
print "<td>250k</td>";
print "<td>500km2</td>";
print "<td>145m</td>";
print "<td>PR</td>";
print "</tr>";
print "</table>"

?>