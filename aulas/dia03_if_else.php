<?php 

$nome = readline("Qual é seu nome?");
$horas = (int) readline("Quantas horas você trabalhou hoje?");

echo "\nOlá, $nome!\n";

if ($horas >= 10){
    echo "Dia pesado. Recomendo uma pausa e descanso.\n";
}elseif ($horas >= 8){
    echo "Carga normal de trabalho.\n";
}
else{
    echo "Boa produtividade. Continue assim.\n";
}