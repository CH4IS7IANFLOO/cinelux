<?php
// Habilitar la visualización de errores en PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir archivo de conexión
include 'conexion.php';

// Variables para el mensaje y tipo (success / error)
$mensaje = "";
$tipo_mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $nombres_apellidos = $_POST['nombres'];
    $tarjeta_habiente = $_POST['tarjeta_habiente'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $motivo = $_POST['motivo'];
    $categoria = $_POST['categoria'];
    $email_compra = $_POST['email_compra'];
    $descripcion = $_POST['descripcion'];

    if (!$conn) {
        $mensaje = "Error de conexión a la base de datos: " . mysqli_connect_error();
        $tipo_mensaje = "error";
    } else {
        try {
            $query = "INSERT INTO contacto (email, nombres_apellidos, tarjeta_habiente, dni, telefono, asunto, motivo, categoria, email_compra, descripcion, fecha)
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

            if ($stmt = $conn->prepare($query)) {
                $stmt->bind_param("ssssssssss", $email, $nombres_apellidos, $tarjeta_habiente, $dni, $telefono, $asunto, $motivo, $categoria, $email_compra, $descripcion);

                if ($stmt->execute()) {
                    $mensaje = "¡Gracias por contactarnos! Hemos recibido tu mensaje.";
                    $tipo_mensaje = "success";
                } else {
                    $mensaje = "Error al ejecutar la consulta: " . $stmt->error;
                    $tipo_mensaje = "error";
                }

                $stmt->close();
            } else {
                $mensaje = "Error al preparar la consulta: " . $conn->error;
                $tipo_mensaje = "error";
            }
        } catch (Exception $e) {
            $mensaje = "Error al enviar el mensaje: " . $e->getMessage();
            $tipo_mensaje = "error";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - CineLuxe</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body, html {
            background-color: #121212;
            color: #eee;
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
        }

        .container {
            max-width: 1140px;
            margin: 40px auto;
            background: #1e1e3a;
            padding: 20px;
            border-radius: 8px;
            box-sizing: border-box;
            color: #eee;
        }

        header {
            text-align: center;
            margin-bottom: 40px;
        }

        header h1 {
            font-size: 2.5rem;
            color: #9146FF;
        }

        .formulario {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 100%;
        }

        .formulario input,
        .formulario select,
        .formulario textarea {
            background-color: #2a2a5a;
            border: 1px solid #3e2a9e;
            color: #ccc;
            padding: 12px;
            border-radius: 5px;
            font-size: 1rem;
            width: 100%;
            box-sizing: border-box;
        }

        .formulario textarea {
            resize: vertical;
            min-height: 150px;
        }

        .formulario button {
            background-color: #9146FF;
            color: #bfbfff;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
            font-size: 1.2rem;
            width: 100%;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .formulario button:hover {
            background-color: #3e2a9e;
        }

        footer {
            text-align: center;
            color: #777;
            margin-top: 40px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>Formularios de los Contacto</h1>
    </header>

    <form action="contacto.php" method="POST" class="formulario">
        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" required>

        <label for="nombres">Nombres y apellidos</label>
        <input type="text" id="nombres" name="nombres" required>

        <label for="tarjeta_habiente">Nombres y apellidos completos del tarjeta habiente</label>
        <input type="text" id="tarjeta_habiente" name="tarjeta_habiente" required>

        <label for="dni">DNI</label>
        <input type="text" id="dni" name="dni" required>

        <label for="telefono">Teléfono de contacto</label>
        <input type="tel" id="telefono" name="telefono" required>

        <label for="asunto">Asunto</label>
        <input type="text" id="asunto" name="asunto" required>

        <label for="motivo">Motivo</label>
        <textarea id="motivo" name="motivo" required></textarea>

        <label for="categoria">Seleccione la categoría y motivo</label>
        <select id="categoria" name="categoria" required>
            <option value="atc_ventas">ATC - Canal de ventas</option>
            <option value="cine">Cine</option>
            <option value="cine_seleccionado">Cine seleccionado en la compra</option>
        </select>

        <label for="email_compra">Correo electrónico con el que realiza sus compras</label>
        <input type="email" id="email_compra" name="email_compra" required>

        <label for="descripcion">Descripción</label>
        <textarea id="descripcion" name="descripcion" required></textarea>

        <button type="submit">Enviar solicitud</button>
    </form>

    <?php include 'footer.php'; ?>
</div>

<?php if ($mensaje): ?>
<script>
    Swal.fire({
        icon: '<?= $tipo_mensaje ?>',
        title: '<?= $tipo_mensaje === "success" ? "¡Éxito!" : "Error" ?>',
        text: '<?= $mensaje ?>',
        confirmButtonColor: '#9146FF'
    });
</script>
<?php endif; ?>

</body>
</html>



