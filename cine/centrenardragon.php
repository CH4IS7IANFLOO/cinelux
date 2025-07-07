<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CÓMO ENTRENAR A TU DRAGÓN 2025</title>
  <link rel="stylesheet" href="peliculas.css" />
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <div class="cine-detalle container">

      
<?php
session_start();
include 'header.php';
?>

<header class="cine-header">
  <div class="video-wrapper">
    <iframe
      src="https://www.youtube.com/embed/a_5D_7YMZro?autoplay=1&mute=1&loop=1&playlist=a_5D_7YMZro&controls=0&showinfo=0&modestbranding=1&rel=0"
      frameborder="0"
      allow="autoplay; fullscreen"
      allowfullscreen
      title="Trailer Cómo Entrenar a Tu Dragón 2025"
    ></iframe>
  </div>
  <div class="title">CÓMO ENTRENAR A TU DRAGÓN 2025</div>
  <div class="tags-header">
    <span class="tag-m14">ATP</span>
    <span class="tag-duration">100 min</span>
    <span class="tag-action">Animación</span>
  </div>
</header>


    <section class="cine-content">

      <aside class="cine-info">
        <img
          class="poster"
          src="img/centrenardragon.webp" 
          alt="Póster Cómo Entrenar a Tu Dragón 2025"
        />
        <div class="info-row"><h3>Título Original</h3><p>How to Train Your Dragon 2025</p></div>
        <div class="info-row"><h3>Director</h3><p>Dean DeBlois</p></div>
        <div class="info-row"><h3>Reparto</h3><p>Jay Baruchel, America Ferrera</p></div>
        <div class="info-row"><h3>Sinopsis</h3><p>Hiccup y Toothless enfrentan nuevos retos cuando descubren un misterio que amenaza la paz entre los dragones y los vikingos.</p></div>
      </aside>

      <main class="cine-main">
        <ul class="fechas-carrusel" role="tablist" aria-label="Fechas disponibles">
          <li class="fecha active" role="tab" aria-selected="true" tabindex="0" data-dia="6jun">
            <div>Sáb.</div>
            <div class="fecha-text">06 Jun. 2025</div>
          </li>
          <li class="fecha" role="tab" aria-selected="false" tabindex="-1" data-dia="7jun">
            <div>Dom.</div>
            <div class="fecha-text">07 Jun. 2025</div>
          </li>
        </ul>

        <div class="funcion-info" role="region" aria-label="Funciones del 6 de Junio" data-dia="6jun">
          <small>*Los horarios aquí expuestos representan el inicio de cada función</small>
          <div class="funcion-tipos">
            <span class="tag-2d">2D</span>
            <span class="tag-doblada">Doblada</span>
            <span class="asiento">Asiento: GENERAL</span>
          </div>
          <div class="horarios">
            <a href="asientos.php?pelicula=C%C3%93MO%20ENTRENAR%20A%20TU%20DRAG%C3%93N%202025&horario=10:30">
              <button class="btn-horario">10:30</button>
            </a>
            <a href="asientos.php?pelicula=C%C3%93MO%20ENTRENAR%20A%20TU%20DRAG%C3%93N%202025&horario=13:00">
              <button class="btn-horario">13:00</button>
            </a>
            <a href="asientos.php?pelicula=C%C3%93MO%20ENTRENAR%20A%20TU%20DRAG%C3%93N%202025&horario=15:30">
              <button class="btn-horario">15:30</button>
            </a>
          </div>
        </div>

        <div class="funcion-info" role="region" aria-label="Funciones del 7 de Junio" data-dia="7jun" style="display:none;">
          <small>*Los horarios aquí expuestos representan el inicio de cada función</small>
          <div class="funcion-tipos">
            <span class="tag-2d">2D</span>
            <span class="tag-doblada">Doblada</span>
            <span class="asiento">Asiento: GENERAL</span>
          </div>
          <div class="horarios">
            <a href="asientos.php?pelicula=C%C3%93MO%20ENTRENAR%20A%20TU%20DRAG%C3%93N%202025&horario=11:00">
              <button class="btn-horario">11:00</button>
            </a>
            <a href="asientos.php?pelicula=C%C3%93MO%20ENTRENAR%20A%20TU%20DRAG%C3%93N%202025&horario=14:30">
              <button class="btn-horario">14:30</button>
            </a>
            <a href="asientos.php?pelicula=C%C3%93MO%20ENTRENAR%20A%20TU%20DRAG%C3%93N%202025&horario=17:00">
              <button class="btn-horario">17:00</button>
            </a>
          </div>
        </div>
      </main>

    </section>
  </div>

  <script>
    const fechas = document.querySelectorAll('.fecha');
    const funciones = document.querySelectorAll('.funcion-info');

    fechas.forEach(fecha => {
      fecha.addEventListener('click', () => {
        fechas.forEach(f => {
          f.classList.remove('active');
          f.setAttribute('aria-selected', 'false');
          f.setAttribute('tabindex', '-1');
        });
        fecha.classList.add('active');
        fecha.setAttribute('aria-selected', 'true');
        fecha.setAttribute('tabindex', '0');
        fecha.focus();

        const diaSeleccionado = fecha.getAttribute('data-dia');
        funciones.forEach(funcion => {
          funcion.style.display = funcion.getAttribute('data-dia') === diaSeleccionado ? 'block' : 'none';
        });
      });
    });
  </script>
  <?php
include 'footer.php';
?>
</body>
</html>
