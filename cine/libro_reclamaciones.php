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
    $correo_electronico   = $_POST['correo_electronico'];
    $tipo_documento       = $_POST['tipo_documento'];
    $numero_documento     = $_POST['numero_documento'];
    $fecha_reclamo        = $_POST['fecha_reclamo'];
    $nombres_apellidos    = $_POST['nombres_apellidos'];
    $domicilio            = $_POST['domicilio'];
    $telefono_contacto    = $_POST['telefono_contacto'];
    $cine_seleccionado    = $_POST['cine_seleccionado'];
    $canal_ventas         = $_POST['canal_ventas'];
    $servicio_producto    = $_POST['servicio_producto'];
    $monto                = $_POST['monto'] !== "" ? $_POST['monto'] : null;
    $tipo_asunto          = $_POST['tipo_asunto'];
    $descripcion          = $_POST['descripcion'];

    // Comprobar la conexión a la base de datos
    if (!$conn) {
        $mensaje = "Error de conexión a la base de datos: " . mysqli_connect_error();
        $tipo_mensaje = "error";
    } else {
        try {
            // Consulta para insertar los datos en la tabla "reclamaciones"
            $query = "INSERT INTO reclamaciones (correo_electronico, tipo_documento, numero_documento, fecha_reclamo, nombres_apellidos, domicilio, telefono_contacto, cine_seleccionado, canal_ventas, servicio_producto, monto, tipo_asunto, descripcion)
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            if ($stmt = $conn->prepare($query)) {
                // Enlazar los parámetros para evitar inyecciones SQL
                $stmt->bind_param(
                    "ssssssssssdss",
                    $correo_electronico,
                    $tipo_documento,
                    $numero_documento,
                    $fecha_reclamo,
                    $nombres_apellidos,
                    $domicilio,
                    $telefono_contacto,
                    $cine_seleccionado,
                    $canal_ventas,
                    $servicio_producto,
                    $monto,
                    $tipo_asunto,
                    $descripcion
                );

                if ($stmt->execute()) {
                    $mensaje = "¡Gracias por presentar tu reclamo! Hemos recibido tu información.";
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
            $mensaje = "Error al enviar el reclamo: " . $e->getMessage();
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
    <title>Libro de Reclamaciones | Cineluxe Megaplaza</title>
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
            min-height: 100px;
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

        .disclaimer {
            font-size: 0.95rem;
            color: #bfbfff;
            background: #222255;
            border-radius: 5px;
            margin-top: 10px;
            padding: 14px 16px;
            margin-bottom: 12px;
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
        <h1>Libro de Reclamaciones</h1>
    </header>

    <form action="libro_reclamaciones.php" method="POST" class="formulario" autocomplete="off">
        <label for="correo_electronico">Correo electrónico:</label>
        <input type="email" id="correo_electronico" name="correo_electronico" required>

        <label for="tipo_documento">Tipo de documento:</label>
        <select id="tipo_documento" name="tipo_documento" required>
            <option value="">Seleccione el tipo de documento</option>
            <option value="dni">DNI</option>
            <option value="pasaporte">Pasaporte</option>
            <option value="cedula">Cédula</option>
        </select>

        <label for="numero_documento">Número de documento:</label>
        <input type="text" id="numero_documento" name="numero_documento" required>

        <label for="fecha_reclamo">Fecha del reclamo:</label>
        <input type="date" id="fecha_reclamo" name="fecha_reclamo" required>

        <label for="nombres_apellidos">Nombres y apellidos:</label>
        <input type="text" id="nombres_apellidos" name="nombres_apellidos" required>

        <label for="domicilio">Domicilio del consumidor:</label>
        <input type="text" id="domicilio" name="domicilio" required>

        <label for="telefono_contacto">Teléfono de contacto:</label>
        <input type="text" id="telefono_contacto" name="telefono_contacto" required>

        <label for="cine_seleccionado">Cine seleccionado:</label>
        <select id="cine_seleccionado" name="cine_seleccionado" required>
            <option value="">Seleccione el cine</option>
            <option value="cineluxe megaplaza">Cineluxe Megaplaza</option>
            <option value="proximamente">Próximamente</option>
        </select>

        <label for="canal_ventas">Canal de ventas:</label>
        <input type="text" id="canal_ventas" name="canal_ventas" required>

        <label for="servicio_producto">Servicio o Producto:</label>
        <select id="servicio_producto" name="servicio_producto" required>
            <option value="">Seleccione el servicio o producto</option>
            <option value="boletos">Boletos</option>
            <option value="alimentos">Alimentos</option>
        </select>

        <label for="monto">Monto (S/):</label>
        <input type="number" id="monto" name="monto" step="0.01">

        <label for="tipo_asunto">Asunto (Reclamo o Queja):</label>
        <select id="tipo_asunto" name="tipo_asunto" required>
            <option value="">Seleccione</option>
            <option value="reclamo">Reclamo</option>
            <option value="queja">Queja</option>
        </select>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

        <div class="disclaimer">
            Mediante la presentación de mi disconformidad (queja / reclamo) a través del presente Libro de Reclamaciones Virtual, otorgo mi consentimiento y autorizo expresamente a Cineluxe Megaplaza a realizar el tratamiento (recolección, almacenamiento, procesamiento, transmisión y uso) de mis datos personales proporcionados, con la finalidad que se le brinde oportuna atención.
        </div>

        <button type="submit">Enviar Solicitud</button>
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




