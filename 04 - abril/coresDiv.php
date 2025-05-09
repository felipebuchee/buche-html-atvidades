<?php 

$cores = ["yellow", "blue", "black", "green", "red", "purple", "gray", "brown"];

for ($i=0; $i < 8; $i++) { 
    print "<div style='background-color: $cores[$i]; width: 100px; height: 100px;'></div>";
}

?>
