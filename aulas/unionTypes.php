<?php

function processar(string|int $valor): string {
    return "Valor: $valor";
}

echo processar(200) . "\n";
echo processar("300") . "\n";