<?php

$dobrar = function(int $n): int {
    return $n * 2;
};

echo $dobrar(5) . "\n";
echo $dobrar(20) . "\n";
echo $dobrar(42323) . "\n";

$multiplicador = 3;
$triplicar = fn(int $x) => $x * $multiplicador;

echo $triplicar(43);