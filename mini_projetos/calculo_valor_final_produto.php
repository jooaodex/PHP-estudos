<?php 

$quantidade = (int) readline("Qual a quantidade de produtos? ");
$valorProduto = (float) readline("Qual valor do produto? ");
$TemDesconto =  readline("Tem desconto? (s/n): ");

function valorFinal($quantidade, $valorProduto, $TemDesconto){
    $total = $quantidade * $valorProduto;

    $temDesconto = strtolower(trim($TemDesconto));

    if ($TemDesconto === 's'){
        $desconto = $total * 0.15;
        $total = $total - $desconto;
    }

    return $total;

}

$resultado = valorFinal($quantidade, $valorProduto, $TemDesconto);
echo "\nValor final de comprar: R$ " . number_format($resultado, 2, ',', '.') . "\n";