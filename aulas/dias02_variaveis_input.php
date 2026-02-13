<?php

$nome = readline("Qual é seu nome?");
$horas = (int) readline("Quantas horas você trabalhou hoje?");

$totalSemana = $horas * 5;

echo "\nOlá, $nome!\n";
echo "Você trabalhou $horas horas hoje.\n";
echo "Estimativa semanal: $totalSemana horas. \n";