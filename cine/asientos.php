<?php
session_start();
if (!isset($_SESSION['cliente_id'])) {
  // Redirige al login con retorno a esta página
  header("Location: sistema_login/login.php?redirect=../asientos.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Seleccionar Asientos</title>
  <style>
    /* Tu CSS aquí (igual que antes) */
    body {
      background-color: #0b0b2e;
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
      margin: 0;
      padding: 0;
    }
    .contenedor-asientos {
      max-width: 900px;
      margin: 40px auto;
      background: #1e1e3a;
      padding: 30px;
      border-radius: 15px;
      text-align: center;
    }
    h2 {
      margin-bottom: 20px;
    }
    .pantalla {
      background: #555;
      padding: 12px;
      border-radius: 5px;
      margin-bottom: 25px;
      color: #ddd;
      font-size: 13px;
    }
    .numeros-superior,
    .numeros-inferior {
      display: flex;
      justify-content: center;
      gap: 30px;
      margin: 10px 0;
      font-size: 13px;
      color: #bfbfff;
    }
    .fila {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 8px 0;
      gap: 10px;
    }
    .fila-label {
      width: 20px;
      font-weight: bold;
      color: #bfbfff;
      text-align: center;
    }
    .seat {
      width: 30px;
      height: 30px;
      background-color: #3e2a9e;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.2s;
      border: 2px solid transparent;
    }
    .seat:hover {
      background-color: #9146FF;
    }
    .seat.selected {
      background-color: #b496ff;
      border-color: #fff;
    }
    .seat.occupied {
      background-color: #555;
      cursor: not-allowed;
    }
    .btn-comprar {
      margin-top: 25px;
      padding: 12px 30px;
      font-size: 16px;
      font-weight: bold;
      background-color: #9146FF;
      color: #fff;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .btn-comprar:hover {
      background-color: #b496ff;
      color: #1e1e3a;
    }
    .info-asientos {
      font-size: 14px;
      margin-top: 20px;
      color: #bbb;
    }
    .asientos-seleccionados, .asientos-ocupados {
      margin-top: 15px;
      font-size: 15px;
      color: #fff;
    }
    .asientos-seleccionados span {
      background: #9146FF;
      padding: 4px 8px;
      border-radius: 5px;
      margin: 2px;
      display: inline-block;
    }
    .asientos-ocupados span {
      background: #555;
      color: #bbb;
      padding: 4px 8px;
      border-radius: 5px;
      margin: 2px;
      display: inline-block;
    }
  </style>
</head>
<body>
  <div class="contenedor-asientos">
    <h2>Selecciona tus Asientos</h2>
    <div class="pantalla">PANTALLA</div>

    <div class="numeros-superior">
      <?php for ($i = 1; $i <= 10; $i++) echo "<div>$i</div>"; ?>
    </div>

    <?php
    $filas = range('A', 'J');
    $ocupados = [];
    foreach ($filas as $fila) {
      echo "<div class='fila'>";
      echo "<div class='fila-label'>$fila</div>";
      for ($i = 1; $i <= 10; $i++) {
        $numero = "$fila$i";
        $ocupado = ($i == 4 && $fila == 'E') ? 'occupied' : '';
        if ($ocupado) $ocupados[] = $numero;
        echo "<div class='seat $ocupado' data-seat='$numero' title='Asiento $numero'></div>";
      }
      echo "<div class='fila-label'>$fila</div>";
      echo "</div>";
    }
    ?>

    <div class="numeros-inferior">
      <?php for ($i = 1; $i <= 10; $i++) echo "<div>$i</div>"; ?>
    </div>

    <form action="pago.php" method="post" id="formCompra">
      <input type="hidden" name="asientosSeleccionados" id="asientosSeleccionadosInput">
      <input type="hidden" name="funcion_id" value="1"> <!-- Aquí el id de la función -->
      <button type="submit" class="btn-comprar">Comprar</button>
    </form>

    <div class="asientos-seleccionados" id="asientosSeleccionados"></div>

    <div class="asientos-ocupados">
      <strong>Asientos Ocupados:</strong>
      <?php 
        if (count($ocupados) > 0) {
          foreach ($ocupados as $occ) echo "<span>$occ</span>";
        } else {
          echo "<span>No hay asientos ocupados</span>";
        }
      ?>
    </div>

    <div class="info-asientos">
      Haz clic en los asientos para seleccionarlos. Los grises están ocupados.
    </div>
  </div>

  <script>
    const seats = document.querySelectorAll('.seat:not(.occupied)');
    const form = document.getElementById('formCompra');
    const input = document.getElementById('asientosSeleccionadosInput');
    const visual = document.getElementById('asientosSeleccionados');

    seats.forEach(seat => {
      seat.addEventListener('click', () => {
        seat.classList.toggle('selected');
        actualizarSeleccion();
      });
    });

    function actualizarSeleccion() {
      const seleccionados = Array.from(document.querySelectorAll('.seat.selected'))
        .map(seat => seat.dataset.seat);
      input.value = seleccionados.join(',');
      visual.innerHTML = seleccionados.length > 0
        ? `<strong>Seleccionaste:</strong> ` + seleccionados.map(a => `<span>${a}</span>`).join('')
        : '';
    }

    form.addEventListener('submit', function (e) {
      if (input.value === '') {
        e.preventDefault();
        alert("Selecciona al menos un asiento.");
      }
    });
  </script>

  <?php include 'footer.php'; ?>
</body>
</html>


