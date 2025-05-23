<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Card</title>

    <link rel="shortcut icon" href="icone.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <a href="cardFormulario.php"><button>Retornar a tela inicial</button></a>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    require_once('model/Card.php');

    $titulo = $_POST['titulo'];
    $desc = $_POST['desc'];
    $imagem = $_POST['imagem'];
    $marca = $_POST['marca'];
    $motor = $_POST['motor'];
    $ano = $_POST['ano'];

    $card = new Card($titulo, $desc, $imagem, $marca, $motor, $ano);

    print $card->getCard();

    ?>

</body>

</html>