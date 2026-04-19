<?php

$dados = array();

function paises(array $dados) {
    foreach ($dados as $d) {
        echo $d["nome"] . " - ";
        echo $d["cidade"] . " - ";
        echo $d["qntd_habitantes"] . "\n";
    }
}

for($i=1; $i<=5; $i++) {
    $nome = readline("Informe o nome do país: ");
    $continente = readline("Informe o continente do país: ");
    $qntd_habitantes = readline("Informe o número de habitantes desse país:  ");
    $pais = array("nome" => $nome, "continente" => $continente, "qntd_habitantes" => $qntd_habitantes);
    array_push($dados, $pais);
}

