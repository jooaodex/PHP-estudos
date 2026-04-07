<?php 

$nome = "Joao";
$sobrenome = "Sousa";
$idade = 21;

echo get_debug_type($nome) . "\n";
echo get_debug_type($idade) . "\n";

function somar(int $a, int $b): int {
    return $a + $b;
};

echo somar(10, 29) . "\n";

var_dump(0 == "0");
var_dump(0 === "0");

$status = 3;
$texto = match($status){
    1 => "Ativo",
    2 => "inativo",
    3 => "Banido",
    default => "Desconhecido"
};

echo $texto . "\n";
echo $nome . " " . $sobrenome . "\n";

$nota = 4;
if($nota >= 7){
    echo "aprovado" . "\n";
}elseif($nota >= 5 ){
    echo "recuperacao" . "\n";
}else{
    echo "reprovado" . "\n";
}

for ($i = 0; $i <= 5; $i++){
    echo $i . "\n";
}

$x = 0;
while($x < 3){
    echo $x++ . "\n";
}

function saudar(string $nome, string $saudacao = "Ola"): string {
    return "$saudacao, $nome";
}

echo saudar("Joao") . "\n";
echo saudar("Lucas", "Oii") . "\n";

function criarUsuario(string $nome, int $idade, string $cargo = "User"): string{
    return "$nome, $idade, $cargo";
}

echo criarUsuario("Joao", "24", "Admin") . "\n";
criarUsuario("Leo", "23", "User");
criarUsuario(idade: 28, nome: "bia", cargo: "admin");

function buscarID(?int $id): string {
    if ($id === null) return "Nenhum ID fornecido";
    return "buscando ID: $id";
}

echo buscarID(23) . "\n";
echo buscarID(null) . "\n";
