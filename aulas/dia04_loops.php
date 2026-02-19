<?php 

for ($dia = 1; $dia <= 5; $dia++){
    echo "Dia $dia de trabalho concluído.\n";
}

/* ================================================= */

$servicos = [
    "Conserto de cadeiras de rodas",
    "Manutenção de aparelhos médicos",
    "Venda de produtos hospitalares"
];

foreach ($servicos as $servico){
    echo "- $servico\n";
}

/* ================================================= */

$horarios = [
    "Segunda a sexta: 8h às 18h",
    "Sábado 9h às 12h"
];

foreach ($horarios as $horario){
    echo "- Atendimento: $horario\n";
}
