<?php

$numeros = array();
$graus = array();
$fatorial = array();
$funcao = array();

function graus($celsius) {
    $fahrenheit = ($celsius * 1.8) + 32;
    return $fahrenheit;
}
function fatorial($numero) {
    $resultado = 1;
    for ($i=$numero; $i > 1; $i--){
        $resultado = $resultado * $i;
    }
    return $resultado;
}
function funcao($x) {
    $funcao = (($x * $x) + ($x * 2) + 4) / ($x * 2);
    return $funcao;
}

for ($i=1; $i<=5; $i++){
    array_push($numeros, readline("Informe um número: "));
}

foreach ($numeros as $n1){
    $n2 = graus($n1);
    array_push($graus, $n2);
}
foreach ($numeros as $n1){
    $n2 = fatorial($n1);
    array_push($fatorial, $n2);
}
foreach ($numeros as $n1){
    $n2 = funcao($n1);
    array_push($funcao, $n2);
}

print_r($graus);
print_r($fatorial);
print_r($funcao);