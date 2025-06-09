<?php
$numero1 = $_POST["numero1"] ?? null;
$numero2 = $_POST["numero2"] ?? null;
$operacion = $_POST["operacion"] ?? '';

if (!is_numeric($numero1) || !is_numeric($numero2)) {
    $error = "Ambos valores deben ser números.";
    return;
}

$numero1 = floatval($numero1);
$numero2 = floatval($numero2);

if ($operacion === "sumar") {
    $resultado = $numero1 + $numero2;
    $expresion = "$numero1 + $numero2";
} elseif ($operacion === "restar") {
    $resultado = $numero1 - $numero2;
    $expresion = "$numero1 − $numero2";
} else {
    $error = "Operación no válida.";
}
