<?php 

$produtos = [
    "Cadeira de rodas",
    "Andador",
    "Muleta"
];

foreach ($produtos as $produto){
    echo "Produto disponível: $produto\n";
}

$horarios = [
    "segunda_sexta" => "8h às 18h",
    "sabado" => "9h ás 12h"
];

echo "Seg-Sex: " . $horarios["segunda_sexta"] . "\n";
echo "Sábado: " . $horarios["sabado"] . "\n";

$servicos = [
    [
        "nome" => "Conserto de cadeiras de rodas",
        "descricao" => "Manutenção especializada para mobilidade."
    ],
    [
        "nome" => "Manutenção de aparelho médicos",
        "descricao" => "Equipamentos hospitalares em perfeito estado"
    ],
    [
        "nome" => "Venda de produtos hospitalares",
        "descricao" => "Produtos essenciais com qualidade"
    ]
];

foreach ($servicos as $servico) {
    echo $servico ["nome"] . " - " . $servico["descricao"] . "\n";
}