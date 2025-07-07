<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lilo y Stitch</title>
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
      src="https://www.youtube.com/embed/9JIyINjMfcc?autoplay=1&mute=1&loop=1&playlist=9JIyINjMfcc&controls=0&showinfo=0&modestbranding=1&rel=0"
      frameborder="0"
      allow="autoplay; fullscreen"
      allowfullscreen
      title="Trailer Lilo y Stitch"
    ></iframe>
  </div>
  <div class="title">LILO Y STITCH</div>
  <div class="tags-header">
    <span class="tag-m14">ATP</span>
    <span class="tag-duration">85 min</span>
    <span class="tag-action">Animación</span>
  </div>
</header>

    <section class="cine-content">

      <aside class="cine-info">
        <img
          class="poster"
          src="img/lilo_stich.webp"
          alt="Póster Lilo y Stitch"
        />
        <div class="info-row">
          <h3>Título Original</h3>
          <p>Lilo & Stitch</p>
        </div>
        <div class="info-row">
          <h3>Director</h3>
          <p>Dean DeBlois, Chris Sanders</p>
        </div>
        <div class="info-row">
          <h3>Reparto</h3>
          <p>Lilo, Stitch, Nani, Cobra Bubbles</p>
        </div>
        <div class="info-row">
          <h3>Sinopsis</h3>
          <p>Una niña hawaiana adopta a una criatura alienígena parecida a un perro, que resulta ser un experimento destructivo que aprende el verdadero significado de la familia.</p>
        </div>
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
            <a href="asientos.php?pelicula=Lilo%20y%20Stitch&horario=10:00">
              <button class="btn-horario">10:00</button>
            </a>
            <a href="asientos.php?pelicula=Lilo%20y%20Stitch&horario=12:30">
              <button class="btn-horario">12:30</button>
            </a>
            <a href="asientos.php?pelicula=Lilo%20y%20Stitch&horario=15:00">
              <button class="btn-horario">15:00</button>
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
            <a href="asientos.php?pelicula=Lilo%20y%20Stitch&horario=11:00">
              <button class="btn-horario">11:00</button>
            </a>
            <a href="asientos.php?pelicula=Lilo%20y%20Stitch&horario=13:30">
              <button class="btn-horario">13:30</button>
            </a>
            <a href="asientos.php?pelicula=Lilo%20y%20Stitch&horario=16:00">
              <button class="btn-horario">16:00</button>
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
