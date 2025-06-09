<?php
$resultado = null;
$expresion = '';
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'procesar.php';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Suma y Resta</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h2>Calculadora de Suma y Resta</h2>
    <form method="post">
        <input type="number" step="any" name="numero1" required placeholder="Primer número" value="<?= $_POST['numero1'] ?? '' ?>">

        <select name="operacion">
            <option value="sumar" <?= ($_POST['operacion'] ?? '') === 'sumar' ? 'selected' : '' ?>>+</option>
            <option value="restar" <?= ($_POST['operacion'] ?? '') === 'restar' ? 'selected' : '' ?>>−</option>
        </select>

        <input type="number" step="any" name="numero2" required placeholder="Segundo número" value="<?= $_POST['numero2'] ?? '' ?>">
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($error) {
        echo "<div class='error'>$error</div>";
    } elseif ($resultado !== null) {
        echo "<div class='resultado'>";
        require 'resultado.php';
        echo "</div>";
    }
    ?>
</body>
</html>
