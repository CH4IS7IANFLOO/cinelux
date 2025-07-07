<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    die("Debes iniciar sesión primero.");
}
?>

<form action="factura.php" method="post">
  <!-- Usuario ID oculto desde sesión -->
  <input type="hidden" name="usuario_id" value="<?= $_SESSION['usuario_id'] ?>">

  <!-- Función: para ejemplo fijo -->
  <label>Función ID:</label>
  <input type="number" name="funcion_id" value="1" required><br><br>

  <!-- Asientos separados por coma -->
  <label>Asientos (ejemplo: A1,A2):</label>
  <input type="text" name="asientos" required><br><br>

  <!-- Método de pago -->
  <label>Método de pago:</label>
  <select name="metodo_pago" required>
    <option value="tarjeta">Tarjeta de credito</option>
    <option value="paypal">Paypal</option>
    <option value="efectivo">Efectivo</option>
  </select><br><br>

  <!-- Total (ejemplo fijo) -->
  <label>Total:</label>
  <input type="number" step="0.01" name="total" value="60.00" required><br><br>

  <button type="submit">Pagar</button>
</form>
