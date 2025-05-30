<?php
require_once('util/Conexao.php');
//require_once('index.php');

ini_set('display_errors', 1);
error_reporting(E_ALL);

$id = $_GET['id'];

$con = Conexao::getConexao();

$sql =  "DELETE FROM livros WHERE id = $id";
$stm = $con->prepare($sql);
$stm->execute();

print('Livro excluído com sucesso!')

?>

<a href="index.php">Voltar a tela principal</a>