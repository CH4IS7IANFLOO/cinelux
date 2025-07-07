<?php
session_start();


$precios = [
  "Combo 1" => 18.00, "Combo 2" => 25.00, "Combo 3" => 30.00, "Combo 4" => 28.00,
  "Combo 5" => 29.00, "Combo 6" => 27.00, "Combo 7" => 30.00, "Combo 8" => 28.00,
  "Combo 9" => 29.00, "Combo 10" => 30.00, "Combo 11" => 26.00, "Combo 12" => 28.00,
  "Combo 13" => 27.00, "Combo 14" => 29.00, "Combo 15" => 30.00, "Combo 16" => 31.00,
  "Combo 17" => 27.00, "Combo 18" => 29.00, "Combo 19" => 30.00, "Combo 20" => 32.00,
  "Cancha Salada" => 6.00, "Popcorn Mantequilla" => 7.00, "Gaseosa Personal" => 5.00,
  "Nachos con Queso" => 9.00, "Hot Dog" => 8.00, "Agua Mineral" => 4.00,
  "Chocolate" => 6.00, "Galletas" => 5.00, "Helado" => 7.00, "Chicles" => 3.00
];

$total = 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Carrito de Compras | CineLuxe</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      background-color: #1f1f3d;
      color: #f0f0f0;
      font-family: 'Segoe UI', sans-serif;
    }

    h2 {
      text-align: center;
      margin-top: 40px;
      color: #ffffff;
    }

    table {
      width: 90%;
      margin: 20px auto;
      border-collapse: collapse;
      background: #2b2b4d;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
      border-radius: 10px;
      overflow: hidden;
    }

    th, td {
      border: 1px solid #444;
      padding: 12px;
      text-align: center;
    }

    th {
      background: #3d3d60;
      color: #ffffff;
      font-weight: 600;
    }

    td {
      background: #2b2b4d;
      color: #f0f0f0;
    }

    tr:hover td {
      background: #353565;
    }

    .btn-volver {
      display: block;
      margin: 30px auto;
      padding: 10px 20px;
      background: #9146FF;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      width: 200px;
      text-align: center;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .btn-volver:hover {
      background: #772ce8;
    }

    .btn-eliminar {
      background-color: #d90000;
      border: none;
      color: white;
      padding: 6px 12px;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn-eliminar:hover {
      background-color: #a70000;
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<h2>🛒 Carrito de Compras</h2>

<?php if (!empty($_SESSION['carrito'])): ?>
  <table>
    <thead>
      <tr>
        <th>Producto</th>
        <th>Descripción</th>
        <th>Cantidad</th>
        <th>Precio Unitario (S/)</th>
        <th>Subtotal (S/)</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($_SESSION['carrito'] as $index => $item): 
        $nombre = $item['producto'];
        $descripcion = isset($item['descripcion']) ? $item['descripcion'] : '-';
        $cantidad = isset($item['cantidad']) ? intval($item['cantidad']) : 1;
        $precio = isset($precios[$nombre]) ? $precios[$nombre] : 0;
        $subtotal = $precio * $cantidad;
        $total += $subtotal;
      ?>
        <tr>
          <td><?= htmlspecialchars($nombre) ?></td>
          <td><?= htmlspecialchars($descripcion) ?></td>
          <td><?= $cantidad ?></td>
          <td><?= number_format($precio, 2) ?></td>
          <td><?= number_format($subtotal, 2) ?></td>
          <td>
            <form method="post" action="eliminar_del_carrito.php" onsubmit="return confirm('¿Estás seguro de eliminar este producto?');">
              <input type="hidden" name="indice" value="<?= $index ?>">
              <button type="submit" class="btn-eliminar">❌</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
      <tr>
        <th colspan="4" style="text-align: right;">TOTAL:</th>
        <th><?= number_format($total, 2) ?> S/</th>
        <th></th>
      </tr>
    </tbody>
  </table>
<?php else: ?>
  <p style="text-align:center;">El carrito está vacío.</p>
<?php endif; ?>

<a href="alimentos.php" class="btn-volver">← Seguir comprando</a>

<?php include 'footer.php'; ?>

</body>
</html>


