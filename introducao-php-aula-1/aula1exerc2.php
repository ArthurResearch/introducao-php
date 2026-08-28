<?php

$total = 0;

for ($i = 1; $i <= 100; $i++){
    echo $i . "\n";
    $total = $total + $i;
}

echo $total;