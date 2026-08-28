<?php

$numeros = array();

for ($i = 1; $i <= 10; $i++) {
    array_push($numeros, readline("Informe 10 números: "));
}

$maiorNum = $numeros[0];
$menorNum = $numeros[0];

foreach ($numeros as $n) {
    if ($n > $maiorNum) {
        $maiorNum = $n;
    }

    if ($n < $menorNum) {
        $menorNum = $n;
    }
}

echo "Maior número: " . $maiorNum . "\n";
echo "Menor número: " . $menorNum . "\n";