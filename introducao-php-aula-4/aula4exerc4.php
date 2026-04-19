<?php

$numeros = array();

for ($i=1; $i<=10; $i++) {
    $n = readline("Escreva um número: ");
    array_push($numeros, $n);
}

$n2 = 0;

foreach ($numeros as $n1) {
    $n2 = $n2 + $n1;
}

echo "A média aritmética desses números é: " . $n2 / 10 . "\n";