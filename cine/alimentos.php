<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Snacks | CineLuxe</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include 'header.php';

  // Mostrar alerta si se agregó un producto
  if (isset($_GET['ok'])) {
    echo "<script>alert('✅ Producto agregado al carrito');</script>";
  }
  ?>

<section class="cartelera container">
  <h2>Combos</h2>
  <div class="peliculas">
    <?php
      $combos = [
        ["Combo 1", "Popcorn + Gaseosa 1L", "combo1.webp"],
        ["Combo 2", "Popcorn Grande + Nachos + 2 Gaseosas", "combo2.webp"],
        ["Combo 3", "2 Popcorns + 2 Gaseosas + Dulces", "combo3.webp"],
        ["Combo 4", "2 Popcorns + 2 Gaseosas + Dulces", "combo4.webp"],
        ["Combo 5", "2 Popcorns + 2 Gaseosas + Dulces", "combo5.webp"],
        ["Combo 6", "2 Popcorns + 2 Gaseosas + Dulces", "combo6.webp"],
        ["Combo 7", "2 Popcorns + 2 Gaseosas + Dulces", "combo7.webp"],
        ["Combo 8", "2 Popcorns + 2 Gaseosas + Dulces", "combo8.webp"],
        ["Combo 9", "2 Popcorns + 2 Gaseosas + Dulces", "combo9.webp"],
        ["Combo 10", "2 Popcorns + 2 Gaseosas + Dulces", "combo10.webp"],
        ["Combo 11", "2 Popcorns + 2 Gaseosas + Dulces", "combo11.webp"],
        ["Combo 12", "2 Popcorns + 2 Gaseosas + Dulces", "combo12.webp"],
        ["Combo 13", "2 Popcorns + 2 Gaseosas + Dulces", "combo13.webp"],
        ["Combo 14", "2 Popcorns + 2 Gaseosas + Dulces", "combo14.webp"],
        ["Combo 15", "2 Popcorns + 2 Gaseosas + Dulces", "combo15.webp"],
        ["Combo 16", "2 Popcorns + 2 Gaseosas + Dulces", "combo16.webp"],
        ["Combo 17", "2 Popcorns + 2 Gaseosas + Dulces", "combo17.webp"],
        ["Combo 18", "2 Popcorns + 2 Gaseosas + Dulces", "combo18.webp"],
        ["Combo 19", "2 Popcorns + 2 Gaseosas + Dulces", "combo19.webp"],
        ["Combo 20", "2 Popcorns + 2 Gaseosas + Dulces", "combo20.webp"],
      ];

      foreach ($combos as $combo) {
        echo "
        <div class='pelicula'>
          <img src='img/{$combo[2]}' alt='{$combo[0]}'>
          <h3>{$combo[0]}</h3>
          <p>{$combo[1]}</p>
          <form action='procesar_carrito.php' method='post'>
            <input type='hidden' name='producto' value='{$combo[0]}'>
            <input type='hidden' name='descripcion' value='{$combo[1]}'>
            <label>Cantidad: <input type='number' name='cantidad' min='1' max='10' value='1' required></label>
            <br><br>
            <button type='submit' class='btn-filtrar'>Agregar</button>
          </form>
        </div>
        ";
      }
    ?>
  </div>

  <h2 style="margin-top:60px;">Snacks Individuales</h2>
  <div class="peliculas">
    <?php
      $snacks = [
        ["Cancha Salada", "cancha.webp"],
        ["Popcorn Mantequilla", "pop_mantequilla.webp"],
        ["Gaseosa Personal", "gaseosa.webp"],
        ["Nachos con Queso", "nachos.webp"],
        ["Hot Dog", "hotdog.webp"],
        ["Agua Mineral", "agua.webp"],
        ["Chocolate", "chocolate.webp"],
        ["Galletas", "galletas.webp"],
        ["Helado", "helado.webp"],
        ["Chicles", "chicles.webp"]
      ];

      foreach ($snacks as $snack) {
        echo "
        <div class='pelicula'>
          <img src='img/{$snack[1]}' alt='{$snack[0]}'>
          <h3>{$snack[0]}</h3>
          <form action='procesar_carrito.php' method='post'>
            <input type='hidden' name='producto' value='{$snack[0]}'>
            <label>Cantidad: <input type='number' name='cantidad' min='1' max='10' value='1' required></label>
            <br><br>
            <button type='submit' class='btn-filtrar'>Agregar</button>
          </form>
        </div>
        ";
      }
    ?>
  </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
