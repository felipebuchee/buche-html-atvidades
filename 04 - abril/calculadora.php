<?php 

$pares = 0;
$impares = 0;

for ($i=20; $i < 70; $i++) { 
    
    if ($i % 2 == 0){
        $pares = $pares + $i;
    }

    if ($i % 2 != 0){
        $impares = $impares + $i;
    }
}

print "Ímpares: $impares<br>";
print "Pares: $pares";

?>