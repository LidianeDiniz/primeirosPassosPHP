<?php

$array = [
    0 => 'zero',
    1 => 'um',
    2 => 'dois',
    3 => 'três'
];

$contador = 0;

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
    $contador++;
}

echo "Total: $contador" . PHP_EOL;
