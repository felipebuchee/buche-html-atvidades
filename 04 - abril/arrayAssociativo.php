<?php 

$retangulo1 = array("base" =>20, "altura" => 20);
$retangulo2 = array("base" =>30, "altura" => 50);
$retangulo3 = array("base" =>200, "altura" => 290);

$matriz = [$retangulo1, $retangulo2, $retangulo3];

for ($i=0; $i < 3 ; $i++) { 
    $area = $matriz[$i]["base"] * $matriz[$i]["altura"];
    print $area;
    print "<br>";
}

?>