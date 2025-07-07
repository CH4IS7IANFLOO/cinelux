<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Validar método
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (!isset($_POST['producto']) || !isset($_POST['cantidad'])) {
        echo "Faltan datos del producto.";
        exit;
    }

    $producto = htmlspecialchars($_POST['producto']);
    $descripcion = isset($_POST['descripcion']) ? htmlspecialchars($_POST['descripcion']) : '';
    $cantidad = intval($_POST['cantidad']);

    if ($cantidad < 1 || $cantidad > 10) {
        echo "Cantidad no válida.";
        exit;
    }

    // Inicializar carrito si no existe
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    // Revisar si ya existe el producto en el carrito
    $encontrado = false;
    foreach ($_SESSION['carrito'] as &$item) {
        if ($item['producto'] === $producto && $item['descripcion'] === $descripcion) {
            $item['cantidad'] += $cantidad;
            $encontrado = true;
            break;
        }
    }

    // Si no está, agregar nuevo
    if (!$encontrado) {
        $_SESSION['carrito'][] = [
            'producto' => $producto,
            'descripcion' => $descripcion,
            'cantidad' => $cantidad
        ];
    }

    // Redirigir de nuevo a alimentos
    header("Location: alimentos.php?ok=1");
    exit;

} else {
    echo "Acceso inválido.";
    exit;
    
}
