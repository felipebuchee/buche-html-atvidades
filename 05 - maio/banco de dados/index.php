<?php 

require_once("util/Conexao.php");

$con = Conexao::getConexao();
//print_r($con);

//Buscar os livros já salvos na base de dados
$sql =  "SELECT * FROM livros";
$stm = $con->prepare($sql);
$stm->execute();
$livros = $stm->fetchAll();

//Verificar se o usuário já clicou no registrar
if(isset($_POST["titulo"])){

    //Obter os valores digitados pelo usuário
    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $autor = $_POST["autor"];
    $qtdPag = $_POST["paginas"];

    //Inserir as informações na base de dados
    $sql = "INSERT INTO livros (titulo, genero, autor, qtd_paginas)
            VALUES (?,?,?,?)";
    $stm = $con->prepare($sql);
    $stm->execute(array($titulo, $genero, $autor, $qtdPag));

}

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>
<body>

    <h1>Listagem</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Gênero</th>
            <th>Páginas</th>
            <th>Autor</th>
        </tr>

        <?php foreach($livros as $l) : ?>   <!-- O : é pra não usar chave -->

            <tr>
                <td><?= $l["id"] ?></td>   <!-- O igual é basicamente para escrever sem escrever php -->
                <td><?= $l["titulo"] ?></td>
                <td>
                    <?php 
                    if($l["genero"] == 'D'){
                        print 'Drama';
                    }

                    if($l["genero"] == 'F'){
                        print 'Ficção';
                    }

                    if($l["genero"] == 'R'){
                        print 'Romance';
                    }

                    if($l["genero"] == 'O'){
                        print 'Outro';
                    }
                    ?>
                </td>
                <td><?= $l["qtd_paginas"] ?></td>
                <td><?= $l["autor"] ?></td>
                <td>
                    <button><a onclick="return confirm('Confirma a exclusao?')" style="text-decoration: none; color:black" href="excluir.php?id=<?=$l["id"]?>">Excluir</a></button>
                    
                </td>   
            </tr>


        <?php endforeach; ?>

    </table>

    <h1>Formulário</h1>

    <form action="" method="POST">
        <div style="margin-bottom: 10px;">
            <label for="titulo">Informe o título</label>
            <input name="titulo" type="text" id="titulo"/>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="autor">Informe o autor</label>
            <input name="autor" type="text" id="autor"/>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="genero">Informe o gênero</label>
            <select name="genero" id="genero">
                <option value="">---Selecione---</option>
                <option value="D">Drama</option>
                <option value="F">Ficção</option>
                <option value="R">Romance</option>
                <option value="O">Outro</option>
            </select>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="paginas">Informe o número de páginas</label>
            <input name="paginas" type="number" id="paginas"/>
        </div>

        <div style="margin-bottom: 10px;">
            <button type="submit">Registrar</button>
        </div>
    </form>
    
</body>
</html>