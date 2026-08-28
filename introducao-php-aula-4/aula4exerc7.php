<?php

$pessoas = array();
$dados = array();

for ($i=1; $i<=4; $i++){
    $dados["nome"] = readline("Informe seu nome: ");
    $dados["idade"] = readline("Informe sua idade: ");
    $dados["cidadeNatal"] = readline("Informe a sua cidade natal: ");
    $dados["profissao"] = readline("Informe a sua profissão: ");
    array_push($pessoas, $dados);
}

$pessoaVelha = $pessoas[0];

foreach ($pessoas as $p) {
    if ($p["idade"] > $pessoaVelha["idade"]) {
        $pessoaVelha = $p;
    }
}

echo "Nome: " . $pessoaVelha["nome"] . " | idade: " . $pessoaVelha["idade"] . " | Cidade Natal: " . $pessoaVelha["cidadeNatal"] . " | Profissão: " . $pessoaVelha["profissao"];