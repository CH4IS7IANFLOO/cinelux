<?php
// Datos de conexión a tu base de datos
$servername = "127.0.0.1:3306";    // o IP de tu servidor MySQL
$username = "u780326932_admin";     // tu usuario de base de datos
$password = "Cz3|jLJx";  // tu contraseña de base de datos
$dbname = "u780326932_CineLuxe"; // el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Opcional: establecer el charset a utf8 para evitar problemas con acentos
$conn->set_charset("utf8");
