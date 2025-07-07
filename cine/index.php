<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CineLuxe</title>
  <link rel="stylesheet" href="styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="LOGOCINE.webp" type="image/webp">
</head>
<body>

<?php
session_start();
include 'header.php';
?>

<section class="cartelera">
  <div class="container">
    <h2>Cartelera CineLuxe</h2>
    <div class="peliculas">
      <a href="centrenardragon.php" class="pelicula card-link" title="Como entrenar a tu Dragon">
        <img src="img/dragon.webp" alt="Como entrenar a tu dragon" />
        <h3>Como entrenar a tu dragon (Preventa)</h3>
      </a>

      <a href="lilo_stich.php" class="pelicula card-link" title="Lilo & Stitch">
        <img src="img/lilo_stich.webp" alt="Lilo & Stitch" />
        <h3>Lilo & Stitch</h3>
      </a>

      <a href="misionimposible.php" class="pelicula card-link" title="Misión Imposible">
        <img src="img/misionimposible.webp" alt="Misión Imposible" />
        <h3>Misión Imposible</h3>
      </a>

      <a href="destinofinal.php" class="pelicula card-link" title="Destino Final">
        <img src="img/destinofinal.webp" alt="Destino Final" />
        <h3>Destino Final</h3>
      </a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<!-- Script para detectar presión larga en el logo -->
<script>
  const logo = document.getElementById("logo-cine");
  let pressTimer;

  logo.addEventListener("mousedown", () => {
    pressTimer = setTimeout(() => {
      window.location.href = "login_admin.php";
    }, 3000);
  });

  logo.addEventListener("mouseup", () => {
    clearTimeout(pressTimer);
  });

  logo.addEventListener("mouseleave", () => {
    clearTimeout(pressTimer);
  });
</script>

<script src="login_administracion.js"></script>

</body>
</html>


