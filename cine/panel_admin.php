<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login_admin.php");
    exit();
}
$admin = $_SESSION['admin'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel del Administrador - CineLuxe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #1c0033, #2d004d);
            font-family: 'Montserrat', sans-serif;
            color: #fff;
            min-height: 100vh;
            padding: 40px;
        }

        .panel {
            max-width: 800px;
            margin: 0 auto;
            background: #2c003e;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 25px rgba(145, 70, 255, 0.6);
            text-align: center;
        }

        h1 {
            color: #9146FF;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .btn {
            border-radius: 12px;
            padding: 10px 20px;
            font-weight: bold;
        }

        .btn-logout {
            background-color: #ff7675;
            color: #fff;
            border: none;
            margin-top: 20px;
        }

        .btn-logout:hover {
            background-color: #d63031;
        }

        .seccion {
            background: #3a005a;
            padding: 20px;
            border-radius: 15px;
            margin-top: 30px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }

        .seccion h4 {
            color: #ff9ff3;
            margin-bottom: 15px;
        }

        a {
            color: #00cec9;
            text-decoration: none;
        }

        a:hover {
            color: #81ecec;
        }
    </style>
</head>
<body>
    <a href="estructura_bd.php" class="btn btn-outline-light mt-3">📊 Ver Estructura de la Base de Datos</a>
<div class="panel">
    <h1>Bienvenidos, <?= htmlspecialchars($admin) ?> 👋</h1>

    <div class="seccion">
        <h4>Opciones de administración:</h4>
        <ul class="list-unstyled">
            <li><a href="peliculas_admin.php">🎬 Gestión de Películas</a></li>
            <li><a href="funciones_admin.php">🕒 Gestión de Funciones</a></li>
            <li><a href="reservas_admin.php">🎟️ Ver Reservas</a></li>
            <li><a href="ventas_admin.php">💵 Ver Ventas</a></li>
        </ul>
    </div>

    <form action="logout.php" method="POST">
        <button type="submit" class="btn btn-logout">Cerrar sesión</button>
    </form>
</div>

</body>
</html>
