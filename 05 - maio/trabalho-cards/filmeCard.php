<?php

require_once('model/Filme.php');

$titulo = $_POST['titulo'];
$desc = $_POST['ano'];
$imagem = $_POST['imagem'];

$filme = new Filme($titulo, $ano, $diretor, $imagem);
//$filme->setImagem($imagem);

print $filme->getCard();

?>

<a href="filmeFormulario.php"><button>Retornar a tela inicial</button></a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Card</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>
