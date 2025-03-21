<?php 

function media($n1, $n2, $n3){
    $media  = ($n1 + $n2 + $n3) / 3;
    return $media;
}

print("<br>Média 3, 5, 7: " . media(3, 5, 7));
print("<br>Média 24, 98, 104: " . media(24, 98, 104));
print("<br>Média 3000, 5001, 7002: " . media(3000, 5001, 7002));

?>