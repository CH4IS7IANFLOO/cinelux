<?php
session_start();

$servername = "127.0.0.1:3306";
$username = "u780326932_admin";
$password = "Cz3|jLJx";
$dbname = "u780326932_CineLuxe";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

$mensaje = "";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $clave = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($clave, $usuario['password'])) {
        if ($usuario['rol'] === 'admin') {
            $_SESSION['admin'] = $usuario['nombre'];
            header("Location: panel_admin.php");
            exit();
        } else {
            $mensaje = "Acceso denegado. No eres administrador.";
        }
    } else {
        $mensaje = "Credenciales incorrectas.";
    }
}

if (isset($_POST['registro'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $clave = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $verificar = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    $verificar->execute([$email]);
    if ($verificar->rowCount() > 0) {
        $mensaje = "El correo ya está registrado.";
    } else {
        $insert = $conn->prepare("INSERT INTO usuarios (nombre, email, password, rol) VALUES (?, ?, ?, 'admin')");
        if ($insert->execute([$nombre, $email, $clave])) {
            $mensaje = "Administrador registrado correctamente. Ahora inicia sesión.";
        } else {
            $mensaje = "Error al registrar administrador.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Admin - CineLuxe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #1c0033, #2d004d);
            font-family: 'Montserrat', sans-serif;
            color: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            width: 100%;
            max-width: 450px;
            background: #2c003e;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 25px rgba(145, 70, 255, 0.6);
        }

        h2 {
            color: #9146FF;
            font-weight: 600;
            text-align: center;
            margin-bottom: 25px;
        }

        .form-control {
            border-radius: 12px;
            border: none;
            background: #3a005a;
            color: #fff;
        }

        .form-control::placeholder {
            color: #ccc;
        }

        .btn-primary {
            background-color: #9146FF;
            border: none;
        }

        .btn-success {
            background-color: #00b894;
            border: none;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .toggle-link {
            color: #ccc;
            cursor: pointer;
            font-size: 0.9rem;
            text-align: center;
            display: block;
            margin-top: 15px;
        }

        .toggle-link:hover {
            color: #fff;
            text-decoration: underline;
        }

        .mensaje {
            margin-top: 15px;
            color: #ff7675;
            font-weight: bold;
            text-align: center;
        }

        input:focus, button:focus {
            box-shadow: 0 0 10px #9146FF;
            outline: none;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Panel de Administrador</h2>

    <form method="POST" id="form-login">
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
        </div>
        <button type="submit" name="login" class="btn btn-primary w-100">Iniciar sesión</button>
        <span class="toggle-link" onclick="toggleForms()">¿No tienes cuenta? Regístrate</span>
    </form>

    <form method="POST" id="form-registro" style="display:none;">
        <div class="mb-3">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
        </div>
        <button type="submit" name="registro" class="btn btn-success w-100">Registrarse</button>
        <span class="toggle-link" onclick="toggleForms()">¿Ya tienes cuenta? Inicia sesión</span>
    </form>

    <?php if ($mensaje): ?>
        <div class="mensaje"><?= $mensaje ?></div>
    <?php endif; ?>
</div>

<script>
    function toggleForms() {
        const login = document.getElementById("form-login");
        const registro = document.getElementById("form-registro");
        login.style.display = login.style.display === "none" ? "block" : "none";
        registro.style.display = registro.style.display === "none" ? "block" : "none";
    }
</script>

</body>
</html>

