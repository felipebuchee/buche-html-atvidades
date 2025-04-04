<?php

require_once('model/Link.php');

// Função que desenha um botão com 3 elementos
function desenhaBotao($arrayLinks)
{
    echo '<div class="dropdown">';
    echo '<button class="dropbtn">Surpresinha!</button>';
    echo '<div class="dropText">';
    foreach ($arrayLinks as $link) {
        echo '<span><img src="' . $link->getLinkImg() . '" width="auto" height="auto"> ' . $link->getInfo() . '</span>';
    }
    echo '</div>';
    echo '</div>';
}

$botao1 = [
    new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Palmeiras_logo.svg/250px-Palmeiras_logo.svg.png", "Palmeiras"),
    new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Brasao_do_Sao_Paulo_Futebol_Clube.svg/150px-Brasao_do_Sao_Paulo_Futebol_Clube.svg.png", "São Paulo"),
    new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Santos_Logo.png/150px-Santos_Logo.png", "Santos")
];

$botao2 = [
    new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/McLaren_Racing_logo.png/250px-McLaren_Racing_logo.png", "McLaren"),
    new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Ferrari_wordmark.svg/250px-Ferrari_wordmark.svg.png", "Ferrari"),
    new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Mercedes-Benz_in_Formula_One_logo.svg/300px-Mercedes-Benz_in_Formula_One_logo.svg.png", "Mercedes")
];

$botao3 = [
    new Link("https://preview.redd.it/2sxi9hox5m1c1.jpg?auto=webp&s=2fce40328642ca155f115015555d908a8853d508", "Macaco Sniper"),
    new Link("https://preview.redd.it/jwd1mv1zf9q81.png?width=860&format=png&auto=webp&s=ef0ab89a81bd5fb3dac313a092903224e8126e68", "Macaco Mago"),
    new Link("https://i.redd.it/ice-monkey-appreciation-post-v0-76p6rkk95nrd1.png?width=950&format=png&auto=webp&s=b29793eaa8cb0de4fd7f73bd1836f13031dbcbd8", "Macaco Grelo")
];

$botao4 = [
    new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/ChatGPT-Logo.svg/120px-ChatGPT-Logo.svg.png", "Chat GPT"),
    new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/DeepSeek_logo.svg/330px-DeepSeek_logo.svg.png", "Deepseek"),
    new Link("https://play-lh.googleusercontent.com/Z_fquqqNzAd8FkpSjlnURnMtmLh8HRf_h_kIwhs0NbXKpO4WZ_fyZfi0f5yQsNmRL_lP", "Blackbox")
];

desenhaBotao($botao1);
desenhaBotao($botao2);
desenhaBotao($botao3);
desenhaBotao($botao4);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Botões com imagens</title>

    <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial;
}

body {
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100vw;
}

button {
    border: none;
    background-color: #2980b9;
    color: white;
    padding: 20px;
    border-radius: 10px;
    width: 10vw;
}

.dropdown {
    position: relative;
    display: inline-block;
    width: 300px;
}

.dropdown > span {
    display: block;
    background-color: #3498db;
    color: white;
    padding: 15px 20px;
    cursor: pointer;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: background-color 0.3s;
}

.dropdown > span:hover {
    background-color: #2980b9;
}

.dropText {
    display: none;
    position: absolute;
    top: 110%;
    left: 0;
    background-color: white;
    min-width: 100%;
    border-radius: 10px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    z-index: 1;
    overflow: hidden;
    animation: fadeIn 0.3s ease-in-out;
}

.dropText span {
    padding: 12px 20px;
    display: flex;
    align-items: center;
    gap: 10px;
    color: #333;
    cursor: pointer;
    transition: background-color 0.2s;
}

.dropText span:hover {
    background-color: #ecf0f1;
}


.dropText span img {
    width: 20px;
    height: 20px;
}


.dropdown:hover .dropText {
    display: block;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
    </style>
</head>

<body>
</body>

</html>
