<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require 'conexion.php';  // Ajusta la ruta si es necesario

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Validaciones básicas
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Por favor completa todos los campos.";
        header("Location: register.php");
        exit;
    }
    // Validar formato de correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Correo electrónico no válido.";
        header("Location: register.php");
        exit;
    }
    // Validar longitud de la contraseña
    if (strlen($password) < 8) {
        $_SESSION['error'] = "La contraseña debe tener al menos 8 caracteres.";
        header("Location: register.php");
        exit;
    }

    // Verificar si el correo ya está registrado
    $stmt = $conn->prepare("SELECT id FROM clientes WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['error'] = "El correo ya está registrado.";
        $stmt->close();
        $conn->close();
        header("Location: register.php");
        exit;
    }
    $stmt->close();

    // Hashear la contraseña
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Insertar solo email y contraseña
    $stmt = $conn->prepare("INSERT INTO clientes (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password_hash);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Registro exitoso, ya puedes iniciar sesión.";
        $stmt->close();
        $conn->close();
        header("Location: login.php");
        exit;
    } else {
        $_SESSION['error'] = "Error al registrar usuario, inténtalo de nuevo.";
        $stmt->close();
        $conn->close();
        header("Location: login.php");
        exit;
    }
} else {
    header("Location: register.php");
    exit;
}
