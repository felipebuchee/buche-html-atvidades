<?php 

require_once('model/Pessoa.php');

$tipo = $_GET['tipo'];
$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$idade = $_GET['idade'];

if(isset($_GET['tipo'])){


    if($tipo != ''){
        if($tipo = 'c'){
            $pessoa = new Pessoa($nome, $sobrenome, $idade);
            print "Nome completo: " . $pessoa->$nome . " " . $pessoa->$sobrenome;
            print "Idade: " . $pessoa->$idade;
        }

        if($tipo = 'a'){
            print "Nome completo: " . $nome . " " . $sobrenome;
            print "Idade: " . $idade;
        }

        else{
            print "Tipo inválido";
        }
    }
}
    else {
        print("Coloque o tipo com seu parâmetro (A ou C)");
    }