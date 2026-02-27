<?php 

function validarCep($cep){
    $cep = preg_replace('/\D/', '', $cep);
    return strlen($cep) === 8 ? $cep : false;
}

$entrada = readline("Digite um CEP: ");
$cep = validarCEP($entrada);

if (!$cep){
    echo "CEP inválido. \n";
    exit;
}

echo "CEP Válido:  $cep\n";

function getEnderecoPorCep($cep){
    $url = "https://viacep.com.br/ws/{$cep}/json/";
    $response = @file_get_contents($url);

    if ($response === false){
        return null;
    }

    $data = json_decode($response, true);

    if(!is_array($data) || !empty($data["erro"])){
        return null;
    }

    return $data;
}

$cep = validarCep(readline("Digite um CEP:"));

if(!$cep){
    echo "CEP inválido.\n";
    exit;
}

$endereco = getEnderecoPorCep($cep);

if(!$endereco){
    echo "Não foi possível localizar o CEP. \n";
    exit;
}

echo "Cidade: {$endereco['localidade']} - {$endereco['uf']}\n";