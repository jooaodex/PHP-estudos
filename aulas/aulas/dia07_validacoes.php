<?php 

function validarQuantidade($quant){
    if(!is_numeric($quant)){
        return false;
    }

    $quant = (int) $quant;

    if($quant <= 0){
        return false;
    }

    return $quant;
}

function validarValor($valor){
    if(!is_numeric($valor)){
        return false;
    }

    $valor = (float) $valor;

    if($valor <= 0){
        return false;
    }
    
    return $valor;
}

$quantidadeInput = readline("Informe uma quantidade: ");
$valorInput = readline("Informe um valor: ");
$descontoInput = strtolower(trim(readline ("Tem desconto? (s/n): ")));

$temDesconto = $descontoInput === "s"; 

$quantidade = validarQuantidade($quantidadeInput);
$valor = validarValor($valorInput);

if($quantidade == false || $valor == false){
    echo "Dados invalidos. Verifique quantidade e valor.\n";
    exit;
}

echo "Dados validos! Quantidade: ", $quantidade, " Valor: ", $valor; 

function calcularValorFinal($quantidade, $valor, $temDesconto){
    $total = $quantidade * $valor;

    if($temDesconto){
        $total -= $total * 0.15;
    }

    return $total;
}

$resultado = calcularValorFinal($quantidade, $valor, $temDesconto);
echo "\nValor final: R$ " , number_format($resultado, '2', ',', '.');
