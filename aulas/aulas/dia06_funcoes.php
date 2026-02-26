<?php

function saudacao($nome){
    return "Olá, $nome!";
}

echo saudacao("João") . "\n";
echo saudacao("Center med") . "\n";

function avaliarCarga($horas){
    if ($horas >= 10){
        return "Excesso de trabalho. Priorize descanso.";
    } elseif ($horas >= 8){
        return "Carga normal de trabalho.";
    }
    return "Carga leve hoje.";
}

$horas = (int) readline ("Horas trabalhadas hoje: ");
echo avaliarCarga($horas) . "\n";


