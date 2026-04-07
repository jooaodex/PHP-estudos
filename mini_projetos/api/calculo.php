<?php
declare(strict_types=1);

// (local) mostrar erros enquanto você aprende
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Responder como JSON
header('Content-Type: application/json; charset=utf-8');

/**
 * Lê um parâmetro GET e devolve string ou null
 */
function getQuery(string $key): ?string {
    return isset($_GET[$key]) ? trim((string)$_GET[$key]) : null;
}

/**
 * Valida e converte para int > 0
 */
function asPositiveInt(?string $v): ?int {
    if ($v === null || $v === '' || !is_numeric($v)) return null;
    $n = (int)$v;
    return $n > 0 ? $n : null;
}

/**
 * Valida e converte para float > 0
 */
function asPositiveFloat(?string $v): ?float {
    if ($v === null || $v === '' || !is_numeric($v)) return null;
    $n = (float)$v;
    return $n > 0 ? $n : null;
}

/**
 * Converte desconto em booleano (s/sim/1/true)
 */
function asBool(?string $v): bool {
    $v = strtolower(trim((string)$v));
    return in_array($v, ['s','sim','1','true'], true);
}

/**
 * Regra de negócio: calcular total com desconto de 15%
 */
function calcularTotal(int $qtd, float $valorUnit, bool $desconto): float {
    $total = $qtd * $valorUnit;
    if ($desconto) {
        $total -= $total * 0.15;
    }
    return $total;
}

// 1) Ler parâmetros
$qtdRaw = getQuery('quantidade');
$valorRaw = getQuery('valor');
$descRaw = getQuery('desconto');

// 2) Validar / converter
$qtd = asPositiveInt($qtdRaw);
$valor = asPositiveFloat($valorRaw);

if ($qtd === null || $valor === null) {
    http_response_code(400);
    echo json_encode([
        'erro' => 'Parâmetros inválidos. Use ?quantidade=2&valor=100&desconto=s|n',
        'exemplo' => '/mini_projetos/api/calculo.php?quantidade=2&valor=100&desconto=s'
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$temDesconto = asBool($descRaw);

// 3) Calcular
$total = calcularTotal($qtd, $valor, $temDesconto);

// 4) Responder
echo json_encode([
    'ok' => true,
    'quantidade' => $qtd,
    'valor_unitario' => $valor,
    'desconto_aplicado' => $temDesconto,
    'total' => $total
], JSON_UNESCAPED_UNICODE);