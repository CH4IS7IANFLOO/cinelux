<?php
session_start();
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Por favor completa todos los campos.";
        header("Location: login.php");
        exit;
    }

    $stmt = $conn->prepare("SELECT id, password FROM clientes WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['cliente_id'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "Inicio de sesión exitoso.";

            // Redirige con redirect si existe
            if (isset($_GET['redirect'])) {
                header("Location: login.php?redirect=" . urlencode($_GET['redirect']));
            } else {
                header("Location: login.php");
            }
            exit;
        } else {
            $_SESSION['error'] = "Contraseña incorrecta.";
        }
    } else {
        $_SESSION['error'] = "Correo no registrado.";
    }

    $stmt->close();
    $conn->close();
    header("Location: login.php" . (isset($_GET['redirect']) ? "?redirect=" . urlencode($_GET['redirect']) : ""));
    exit;
} else {
    header("Location: login.php");
    exit;
}

