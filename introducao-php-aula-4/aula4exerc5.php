<?php

$vetor1 = array();
$vetor2 = array();

for ($i=1; $i<=5; $i++){
    $n1 = readline("Informe um número: ");
    array_push($vetor1, $n1);
}

foreach($vetor1 as $v){
    array_push($vetor2, $v);
}

foreach($vetor2 as $v){
    echo $v . ", ";
}