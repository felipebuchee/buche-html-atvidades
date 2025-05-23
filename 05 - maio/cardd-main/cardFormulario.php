<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario do Card</title>

    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="icone.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>

    <h1 style="color: white; font-weight: 800; text-shadow: 0.5px 0.5px 30px white;">Gerador de (Car)ds</h1>
    <h2 style="font-size: 16px; color: white;">by: @felipebuchee</h2>

    <form action="cardPage.php" method="post">

        <div class="mb-3">
            <input required type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome do Carro" name="titulo">
        </div>

        <div class="mb-3">
            <input required type="text" class="form-control" id="formGroupExampleInput" placeholder="Marca" name="marca">
        </div>

        <div class="mb-3">
            <input required type="text" class="form-control" id="formGroupExampleInput" placeholder="Ano" name="ano">
        </div>

        <div class="mb-3">
            <input required type="text" class="form-control" id="formGroupExampleInput" placeholder="Tipo do motor (Ex: V8 ou 2.0 LTZ)" name="motor">
        </div>

        <div class="form-floating">
            <textarea required class="form-control" placeholder="Descrição" id="floatingTextarea2" style="height: 100px" name="desc"></textarea>
            <label for="floatingTextarea">Descreva seu carro aqui.</label>
        </div>

        <div class="mb-3">
            <input required type="text" class="form-control" id="formGroupExampleInput" placeholder="Link da Imagem" name="imagem">
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </form>

</body>

</html>