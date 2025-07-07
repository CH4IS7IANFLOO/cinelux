<?php
session_start();
if (!isset($_SESSION['cliente_id'])) {
    // Redirigir al login si no hay sesión
    header("Location: sistema_login/login.php");
    exit;
}

// Datos recibidos desde asientos.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $funcion_id = $_POST['funcion_id'] ?? null;
    $asientosSeleccionados = $_POST['asientosSeleccionados'] ?? null;

    if (!$asientosSeleccionados) {
        die("Datos incompletos.");
    }

    $asientosArray = explode(',', $asientosSeleccionados);
    $cantidad = count($asientosArray);
    $precioUnitario = 30; // puedes ajustarlo según la función
    $total = $precioUnitario * $cantidad;
    $fechaMin = date('Y-m');
} else {
    die("Acceso inválido.");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pagos - CineLuxe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1e1e3a;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .resumen {
            background-color: #2a2a5a;
            padding: 30px;
            margin: 50px auto;
            max-width: 600px;
            border-radius: 10px;
        }
        h2 {
            color: #9146FF;
        }
        .btn-continuar {
            background-color: #9146FF;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .btn-continuar:hover {
            background-color: #b496ff;
            color: #1e1e3a;
        }
    </style>
</head>
<body>
    <div class="resumen">
        <h2>Resumen de tu compra</h2>
        <p><strong>Asientos seleccionados:</strong> <?= htmlspecialchars($asientosSeleccionados) ?></p>
        <p><strong>Cantidad de entradas:</strong> <?= $cantidad ?></p>
        <p><strong>Precio por entrada:</strong> S/<?= number_format($precioUnitario, 2) ?></p>
        <hr>
        <p><strong>Total a pagar:</strong> <span class="text-warning">S/<?= number_format($total, 2) ?></span></p>

        <form action="factura.php" method="POST">
            <input type="hidden" name="funcion_id" value="<?= htmlspecialchars($funcion_id) ?>">
            <input type="hidden" name="asientosSeleccionados" value="<?= htmlspecialchars($asientosSeleccionados) ?>">
            <button type="submit" class="btn-continuar mt-4">Proceder al Pago</button>
        </form>
    </div>
</body>
</html>


