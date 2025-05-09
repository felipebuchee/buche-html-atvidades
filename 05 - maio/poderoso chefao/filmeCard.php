<?php

require_once('model/Filme.php');

$titulo = $_POST['titulo'];
$ano = $_POST['ano'];
$diretor = $_POST['diretor'];
$imagem = $_POST['imagem'];

$filme = new Filme($titulo, $ano, $diretor, $imagem);
//$filme->setImagem($imagem);

print $filme->getCard();

?>

<a href="filmeFormulario.php"><button>Retornar a tela inicial</button></a>
