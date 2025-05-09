<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario do Card</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>

    <form action="cardPage.php" method="post">

        <div class="mb-3">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Título" name="titulo">
        </div>

        <div class="form-floating">
            <textarea class="form-control" placeholder="Descrição" id="floatingTextarea2" style="height: 100px" name="desc"></textarea>
            <label for="floatingTextarea">Descrição</label>

        </div>

        <div class="mb-3">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Link da Imagem" name="imagem">
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </form>

</body>

</html>