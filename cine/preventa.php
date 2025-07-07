<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CineLuxe Preventa</title>
  <link rel="stylesheet" href="cartelera.css" />
  <link rel="stylesheet" href="styles.css" />
</head>
<body>

<section class="cine-detalle container">
  <?php
  session_start();
  include 'header.php';
  ?>

  <div class="cine-content">
    <!-- Lado izquierdo info -->
    <aside class="cine-info">
      <h3>DIRECCIÓN</h3>
      <p>Calle Alfredo Mendiola 3698 Km 8.5 de la Av. Panamericana Norte Independencia</p>
      <button class="btn-location" onclick="window.open('https://www.google.com/maps?q=Mega+Plaza+Independencia', '_blank')">VER UBICACIÓN</button>
    </aside>

    <!-- Contenido principal -->
    <section class="cine-main">

      <!-- Carrusel fechas -->
      <div class="fechas-carrusel" role="tablist">
        <div class="fecha active" role="tab" tabindex="0" data-dia="dia1" aria-selected="true">
          <div>VIE.</div>
          <div class="fecha-text">20 JUN. 2025</div>
        </div>
      </div>

      <!-- Películas Día 1 -->
      <div class="peliculas-dia" id="dia1" style="display:block;">

         <!-- Película 1: Dan Da Dan Evil Eye -->
<article class="pelicula-card">
  <a href="dandan.php" class="pelicula-link">
    <img src="img/dandan.webp" alt="Dan Da Dan Evil Eye" />
    <h3>DAN DA DAN EVIL EYE</h3>
  </a>
  <div class="pelicula-info">
    <div class="tags">
      <span class="tag-m14">M14</span>
      <span class="tag-duration">93 min</span>
    </div>
    <div class="funcion-info">
      <div class="funcion-tipos">
        <span class="tag-2d">2D</span>
        <span class="tag-subtitulada">SUBTITULADA</span>
        <strong>ASIENTO: GENERAL</strong>
      </div>
      <small>*Los horarios aquí expuestos representan el inicio de cada función</small>
      <div class="horarios">
        <button class="btn-horario" onclick="mostrarModal('Dan Da Dan Evil Eye', '14:00')">14:00</button>
        <button class="btn-horario" onclick="mostrarModal('Dan Da Dan Evil Eye', '17:30')">17:30</button>
        <button class="btn-horario" onclick="mostrarModal('Dan Da Dan Evil Eye', '20:00')">20:00</button>
      </div>
    </div>
  </div>
</article>
<br>

<!-- Película 2: Cómo Entrenar a Tu Dragón -->
<article class="pelicula-card">
  <a href="centrenardragon.php" class="pelicula-link">
    <img src="img/entrenardragon.webp" alt="Cómo Entrenar a Tu Dragón" />
    <h3>CÓMO ENTRENAR A TU DRAGÓN</h3>
  </a>
  <div class="pelicula-info">
    <div class="tags">
      <span class="tag-m14">APT</span>
      <span class="tag-duration">125 min</span>
    </div>
    <div class="funcion-info">
      <div class="funcion-tipos">
        <span class="tag-2d">2D</span>
        <span class="tag-subtitulada">SUBTITULADA</span>
        <strong>ASIENTO: GENERAL</strong>
      </div>
      <small>*Los horarios aquí expuestos representan el inicio de cada función</small>
      <div class="horarios">
        <button class="btn-horario" onclick="mostrarModal('Cómo Entrenar a Tu Dragón', '14:00')">14:00</button>
        <button class="btn-horario" onclick="mostrarModal('Cómo Entrenar a Tu Dragón', '17:30')">17:30</button>
        <button class="btn-horario" onclick="mostrarModal('Cómo Entrenar a Tu Dragón', '20:00')">20:00</button>
      </div>
    </div>
  </div>
</article>
<br>

<!-- Película 3: La Bailarina -->
<article class="pelicula-card">
  <a href="bailarina.php" class="pelicula-link">
    <img src="img/bailarina.webp" alt="La Bailarina" />
    <h3>LA BAILARINA</h3>
  </a>
  <div class="pelicula-info">
    <div class="tags">
      <span class="tag-m14">M14</span>
      <span class="tag-duration">125 min</span>
    </div>
    <div class="funcion-info">
      <div class="funcion-tipos">
        <span class="tag-2d">2D</span>
        <span class="tag-subtitulada">SUBTITULADA</span>
        <strong>ASIENTO: GENERAL</strong>
      </div>
      <small>*Detalles de preventa aún no disponibles</small>
      <div class="horarios">
        <button class="btn-horario" onclick="mostrarModal('La Bailarina', 'Próximamente')">Próximamente</button>
      </div>
    </div>
  </div>
</article>
<br>



<!-- Mapa y horarios -->
<section class="mapa-horarios">
  <div class="mapa">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.839239597291!2d-77.08071998505916!3d-11.990395492016706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cc124cd0d507%3A0xf3541f49f78e64b3!2sCine%20Mark%20MegaPlaza!5e0!3m2!1ses-419!2spe!4v1685649090190!5m2!1ses-419!2spe" 
      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="horarios-info">
    <h3>HORARIOS DE APERTURA</h3>
    <p>Lunes a Viernes: Primera función del día</p>
    <p>Sábados, Domingo y festivos: Primera función del día</p>
    <p>Cierre: 15 minutos después de la última función</p>
  </div>
</section>

<script>
  // Redirección a asientos.php al hacer clic en horario
  function mostrarModal(pelicula, horario) {
    const url = `asientos.php?pelicula=${encodeURIComponent(pelicula)}&horario=${encodeURIComponent(horario)}`;
    window.location.href = url;
  }

  // Cambio de días
  const fechas = document.querySelectorAll('.fechas-carrusel .fecha');
  const peliculasDias = document.querySelectorAll('.peliculas-dia');
  fechas.forEach(fecha => {
    fecha.addEventListener('click', () => {
      fechas.forEach(f => {
        f.classList.remove('active');
        f.setAttribute('aria-selected', 'false');
      });
      fecha.classList.add('active');
      fecha.setAttribute('aria-selected', 'true');

      const dia = fecha.getAttribute('data-dia');
      peliculasDias.forEach(p => {
        p.style.display = (p.id === dia) ? 'block' : 'none';
      });
    });
  });
</script>
<?php
include 'footer.php';
?>

</body>
</html>



