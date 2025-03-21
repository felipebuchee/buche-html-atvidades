<?php
require_once('model/Pokemon.php');

$pikachu = new Pokemon("Pikachu", "60cm", "10kg", "Elétrico", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/025.png", "https://www.pokemon.com/br/pokedex/pikachu");

$bulbasaur = new Pokemon("Bulbassaur", "50cm", "15kg", "Planta", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/001.png", "https://www.pokemon.com/br/pokedex/bulbasaur");

$squirtle = new Pokemon("Squirtle", "80cm", "25kg", "Água", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/007.png", "https://www.pokemon.com/br/pokedex/squirtle");

$charizard = new Pokemon("Charizard", "1.90m", "300kg", "Fogo", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/006.png", "https://www.pokemon.com/br/pokedex/charizard");

$Pokemons = [$pikachu, $bulbasaur, $squirtle, $charizard];

// Função para desenhar as linhas da tabela
function desenhaLinha(Pokemon $pokemon) {
    print "<tr>";
    print "<td>" . $pokemon->getNome() . "</td>";
    print "<td><img src='" . $pokemon->getImagem() . "' alt='" . $pokemon->getNome() . "' width='100' height='100'></td>";
    print "<td>" . $pokemon->getAltura() . "</td>";
    print "<td>" . $pokemon->getPeso() . "</td>";
    print "<td>" . $pokemon->getTipo() . "</td>";
    print "<td><a href='" . $pokemon->getLink() . "' target='_blank'>Link</a></td>";
    print "</tr>";
}

print "<table border=1>";

print "<tr>";
print "<td>Nome</td>";
print "<td>Imagem</td>";
print "<td>Altura</td>";
print "<td>Peso</td>";
print "<td>Tipo</td>";
print "<td>Link</td>";
print "</tr>";

foreach($Pokemons as $pokemon) {
    desenhaLinha($pokemon);
}

print "</table>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémons</title>
    <style>
        * {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>
</html>
