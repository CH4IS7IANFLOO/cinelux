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
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $distrito = $_POST['distrito'];
    $tipo_trabajo = $_POST['tipo-trabajo'];
    $estudios = $_POST['estudios'];
    $horarios = $_POST['horarios'];
    $disponibilidad = $_POST['disponibilidad'];
    $experiencia = $_POST['experiencia'];

    // Comprobar la conexión a la base de datos
    if (!$conn) {
        $mensaje = "Error de conexión a la base de datos: " . mysqli_connect_error();
        $tipo_mensaje = "error";
    } else {
        try {
            // Consulta para insertar los datos en la tabla "postulacion"
            $query = "INSERT INTO postulacion (nombre, telefono, correo, distrito, tipo_trabajo, estudios, horarios, disponibilidad, experiencia)
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

            if ($stmt = $conn->prepare($query)) {
                // Enlazar los parámetros para evitar inyecciones SQL
                $stmt->bind_param("sssssssss", $nombre, $telefono, $correo, $distrito, $tipo_trabajo, $estudios, $horarios, $disponibilidad, $experiencia);

                if ($stmt->execute()) {
                    $mensaje = "¡Gracias por postularte! Hemos recibido tu información.";
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
            $mensaje = "Error al enviar la postulación: " . $e->getMessage();
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
    <title>Formularios de Postulación | Cineluxe Megaplaza</title>
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
        <h1>Formulario de Postulación</h1>
    </header>

    <form action="postula.php" method="POST" class="formulario">
        <label for="nombre">¿Cómo te llamas?</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="telefono">Compártenos tu número de teléfono</label>
        <input type="tel" id="telefono" name="telefono" required>

        <label for="correo">Compártenos tu correo electrónico</label>
        <input type="email" id="correo" name="correo" required>

        <label for="distrito">¿En dónde vives? (distrito)</label>
        <input type="text" id="distrito" name="distrito" required>

        <label for="tipo-trabajo">¿Quieres ser Full time o Part Time?</label>
        <select id="tipo-trabajo" name="tipo-trabajo" required>
            <option value="full-time">Full Time</option>
            <option value="part-time">Part Time</option>
        </select>

        <label for="estudios">Actualmente, ¿Estás estudiando? ¿Qué horarios tienes?</label>
        <textarea id="estudios" name="estudios" required></textarea>

        <label for="horarios">En Cinemark trabajamos en horarios rotativos, feriados y fin de semana. ¿Te interesa?</label>
        <textarea id="horarios" name="horarios" required></textarea>

        <label for="disponibilidad">Los cines cierran pasada la medianoche. ¿Tienes la disponibilidad para estos horarios?</label>
        <textarea id="disponibilidad" name="disponibilidad" required></textarea>

        <label for="experiencia">Cuéntanos sobre tu experiencia en atención al cliente</label>
        <textarea id="experiencia" name="experiencia" required></textarea>

        <button type="submit">Enviar</button>
    </form>

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
</div>

<?php include 'footer.php'; ?>

</body>
</html>




