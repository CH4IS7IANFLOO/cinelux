<?php
session_start();

// Simulación usuario logueado (deberías usar tu login real)
$user_id = $_SESSION['user_id'] ?? 1;

// Recibir datos (normalmente vienen por POST desde la página de selección de asientos)
$funcion_id = $_POST['funcion_id'] ?? 1;
$asientosSeleccionados = $_POST['asientosSeleccionados'] ?? 'A1,A2';
$asientosArray = explode(',', $asientosSeleccionados);
$precioUnitario = 30; // Precio fijo por asiento (puedes ajustar)
$total = $precioUnitario * count($asientosArray);

// Fecha mínima para fecha de expiración de tarjeta
$fechaMin = date('Y-m');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<title>Formas de Pago - CineLuxe</title>
<style>
  body {
    background: #1e1e3a; color: #eee; font-family: Arial, sans-serif; padding: 20px;
  }
  .pago-container {
    max-width: 800px; margin: 50px auto; background: #1e1e3a; padding: 30px; border-radius: 8px; color: #eee;
  }
  .pago-container h2 {
    color: #9146FF; margin-bottom: 20px;
  }
  .formas-pago {
    display: flex; gap: 20px; flex-wrap: wrap;
  }
  .metodo {
    flex: 1 1 200px; background: #2a2a5a; padding: 20px; border-radius: 8px; text-align: center;
    border: 1px solid #3e2a9e; transition: transform 0.3s ease; cursor: pointer;
  }
  .metodo:hover {
    transform: translateY(-5px); background: #383870;
  }
  .metodo.selected {
    border-color: #b496ff;
  }
  .metodo img {
    width: 60px; margin-bottom: 10px;
  }
  form {
    margin-top: 30px;
    background: #2a2a5a;
    padding: 20px;
    border-radius: 8px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
  }
  label {
    display: block; margin-top: 10px;
  }
  input[type="text"], input[type="password"], input[type="email"], input[type="tel"], input[type="number"], input[type="month"] {
    width: 100%; padding: 8px; border-radius: 5px; border: none; margin-top: 5px;
  }
  button {
    margin-top: 20px;
    background-color: #9146FF;
    border: none;
    padding: 12px 30px;
    border-radius: 8px;
    color: white;
    font-weight: bold;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
  }
  button:disabled {
    background-color: #5a4293;
    cursor: not-allowed;
  }
  button:hover:enabled {
    background-color: #b496ff;
    color: #1e1e3a;
  }
  .mensaje-error {
    color: #f44336;
    margin-top: 10px;
    font-weight: bold;
    text-align: center;
  }
</style>
</head>
<body>
<div class="pago-container">
  <h2>Selecciona tu forma de pago</h2>
  <div class="formas-pago">
    <div class="metodo" data-metodo="visa">
      <img src="LOGOS/visa.webp" alt="Visa" />
      <p>Visa</p>
    </div>
    <div class="metodo" data-metodo="mastercard">
      <img src="LOGOS/mastercard.webp" alt="Mastercard" />
      <p>Mastercard</p>
    </div>
    <div class="metodo" data-metodo="yape">
      <img src="LOGOS/yape.webp" alt="Yape" />
      <p>Yape</p>
    </div>
    <div class="metodo" data-metodo="plin">
      <img src="LOGOS/plin.webp" alt="Plin" />
      <p>Plin</p>
    </div>
    <div class="metodo" data-metodo="paypal">
      <img src="LOGOS/paypal.webp" alt="PayPal" />
      <p>PayPal</p>
    </div>
  </div>

  <form id="formPago" method="POST" action="factura.php">
    <input type="hidden" name="metodo_pago" id="metodo_pago" value="" />
    <input type="hidden" name="asientos" value="<?= htmlspecialchars($asientosSeleccionados) ?>" />
    <input type="hidden" name="total" value="<?= $total ?>" />
    <input type="hidden" name="usuario_id" value="<?= $user_id ?>" />
    <input type="hidden" name="funcion_id" value="<?= $funcion_id ?>" />

    <div id="campos-extra"></div>

    <button type="submit" disabled id="btn-pagar">Pagar</button>
  </form>
  <div class="mensaje-error" id="mensaje-error"></div>
</div>

<script>
  const metodos = document.querySelectorAll('.metodo');
  const camposExtra = document.getElementById('campos-extra');
  const metodoPagoInput = document.getElementById('metodo_pago');
  const btnPagar = document.getElementById('btn-pagar');
  const mensajeError = document.getElementById('mensaje-error');
  const fechaMin = "<?= $fechaMin ?>";

  metodos.forEach(metodoDiv => {
    metodoDiv.addEventListener('click', () => {
      // Deseleccionar todos
      metodos.forEach(m => m.classList.remove('selected'));
      // Seleccionar el clickeado
      metodoDiv.classList.add('selected');

      const metodo = metodoDiv.dataset.metodo;
      metodoPagoInput.value = metodo;
      btnPagar.disabled = false;
      mensajeError.textContent = '';

      // Mostrar campos según método
      camposExtra.innerHTML = '';
      if(metodo === 'visa' || metodo === 'mastercard'){
        camposExtra.innerHTML = `
          <label>Número de tarjeta</label>
          <input type="text" name="num_tarjeta" maxlength="19" placeholder="XXXX XXXX XXXX XXXX" required pattern="\\d{13,19}" title="Solo números, 13 a 19 dígitos" />

          <label>Nombre en tarjeta</label>
          <input type="text" name="nombre_tarjeta" required placeholder="Nombre completo" />

          <label>Fecha de expiración</label>
          <input type="month" name="fecha_expiracion" required min="${fechaMin}" />
        `;
      } else if (metodo === 'yape') {
        camposExtra.innerHTML = `
          <label>Número de celular</label>
          <input type="tel" name="num_celular" maxlength="9" pattern="\\d{9}" placeholder="9 dígitos" required />

          <label>Código de aprobación</label>
          <input type="password" name="codigo_aprobacion" maxlength="6" placeholder="Código secreto" required />
        `;
      } else if (metodo === 'plin') {
        camposExtra.innerHTML = `
          <label>Número de celular</label>
          <input type="tel" name="num_celular" maxlength="9" pattern="\\d{9}" placeholder="9 dígitos" required />

          <label>Clave dinámica</label>
          <input type="password" name="clave_dinamica" maxlength="6" placeholder="Clave secreta" required />
        `;
      } else if (metodo === 'paypal') {
        camposExtra.innerHTML = `
          <label>Correo PayPal</label>
          <input type="email" name="email_paypal" placeholder="ejemplo@correo.com" required />
        `;
      }
    });
  });
</script>
</body>
</html>




