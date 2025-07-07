<?php
session_start();
require 'conexion.php'; // Asegúrate que esta conexión esté bien configurada

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario_id = $_POST['usuario_id'];
    $funcion_id = $_POST['funcion_id'];
    $asientos = $_POST['asientos'];
    $total = $_POST['total'];
    $metodo = $_POST['metodo_pago'];
    $fecha = date('Y-m-d H:i:s');

    //usamos try para evitar errores

    try {
        // Insertar en tabla reservas
        $stmtReserva = $pdo->prepare("INSERT INTO reservas (usuario_id, funcion_id, asientos, fecha) VALUES (?, ?, ?, ?)");
        $stmtReserva->execute([$usuario_id, $funcion_id, $asientos, $fecha]);
        $reserva_id = $pdo->lastInsertId();

        // Insertar en tabla ventas
        $stmtVenta = $pdo->prepare("INSERT INTO ventas (reserva_id, total, metodo_pago, fecha) VALUES (?, ?, ?, ?)");
        $stmtVenta->execute([$reserva_id, $total, $metodo, $fecha]);

        // Guardar en sesión para la factura
        $_SESSION['factura'] = [
            'usuario_id' => $usuario_id,
            'funcion_id' => $funcion_id,
            'asientos' => $asientos,
            'total' => $total,
            'metodo' => $metodo,
            'fecha' => $fecha
        ];

        header("Location: factura.php");
        exit;
    } catch (Exception $e) {
        echo "Error al procesar pago: " . $e->getMessage();
    }
}
