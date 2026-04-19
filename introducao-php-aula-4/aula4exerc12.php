<?php

$A = array();
$B = array();
$C = array();
$D = array();

echo "informe os elementos de A\n";
for($i=1; $i<=5; $i++){
    $num = readline("informe um número");
    array_push($A, $num);
}


echo "informe os elementos de B\n";
for($i=1; $i<=5; $i++){
    $num = readline("informe um número");
    array_push($B, $num);
}

print_r($A);
print_r($B);

foreach($A as $n1) {
    foreach($B as $n2) {
        if ($n1 == $n2) {
            $existe = true;
            break;
        }
    }
}

if($existe) {
    array_push($C, $n1);
}

foreach($C as $n1) {
    echo $n1 . "\n";
}