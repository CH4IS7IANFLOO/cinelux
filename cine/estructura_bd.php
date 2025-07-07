<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login_admin.php");
    exit();
}

$servername = "127.0.0.1:3306";
$username = "u780326932_admin";
$password = "Cz3|jLJx";
$dbname = "u780326932_CineLuxe";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtener todas las tablas
    $tablas = $conn->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estructura de la Base de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1c0033;
            color: #fff;
            padding: 30px;
        }
        h1 {
            color: #ff9ff3;
        }
        table {
            margin-bottom: 40px;
            background: #2d004d;
            color: #fff;
        }
        th {
            background: #610094;
        }
        a {
            color: #00cec9;
        }
    </style>
</head>
<body>

<h1>📚 Estructura de la Base de Datos `<?= $dbname ?>`</h1>

<?php foreach ($tablas as $tabla): ?>
    <h3>📌 Tabla: <?= $tabla ?></h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Columna</th>
                <th>Tipo</th>
                <th>Nulo</th>
                <th>Clave</th>
                <th>Extra</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $conn->query("DESCRIBE $tabla");
            while ($col = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                        <td>{$col['Field']}</td>
                        <td>{$col['Type']}</td>
                        <td>{$col['Null']}</td>
                        <td>{$col['Key']}</td>
                        <td>{$col['Extra']}</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
<?php endforeach; ?>

<a href="panel_admin.php" class="btn btn-outline-light">⬅ Volver al Panel</a>

</body>
</html>
