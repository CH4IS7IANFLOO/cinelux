<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Misión Imposible - Sentencia Final</title>
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
          src="https://www.youtube.com/embed/cPaEof1KJDg?autoplay=1&mute=1&loop=1&playlist=cPaEof1KJDg&controls=0&showinfo=0&modestbranding=1&rel=0&iv_load_policy=3"
          frameborder="0"
          allow="autoplay; fullscreen"
          allowfullscreen
          title="Trailer Misión Imposible Sentencia Final"
        ></iframe>
      </div>
      <div class="title">MISION IMPOSIBLE SENTENCIA FINAL</div>
      <div class="tags-header">
        <span class="tag-m14">M14</span>
        <span class="tag-duration">169 min</span>
        <span class="tag-action">Acción</span>
      </div>
    </header>

    <section class="cine-content">

      <aside class="cine-info">
        <img
          class="poster"
          src="img/misionimposible.webp"
          alt="Póster Misión Imposible Sentencia Final"
        />
        <div class="info-row">
          <h3>Título Original</h3>
          <p>MISION IMPOSIBLE SENTENCIA FINAL</p>
        </div>
        <div class="info-row">
          <h3>Director</h3>
          <p>Christopher McQuarrie</p>
        </div>
        <div class="info-row">
          <h3>Reparto</h3>
          <p>Tom, Hayley, Hannah</p>
        </div>
        <div class="info-row">
          <h3>Sinopsis</h3>
          <p>Ethan y su equipo tienen la misión de encontrar y eliminar una amenaza global, enfrentando peligros que pondrán a prueba sus límites.</p>
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

        <!-- Funciones para 6 de junio -->
        <div class="funcion-info" role="region" aria-label="Funciones del 6 de Junio" data-dia="6jun">
          <small>*Los horarios aquí expuestos representan el inicio de cada función</small>
          <div class="funcion-tipos">
            <span class="tag-2d">2D</span>
            <span class="tag-doblada">Doblada</span>
            <span class="asiento">Asiento: GENERAL</span>
          </div>
          <div class="horarios">
            <a href="asientos.php?pelicula=MISI%C3%93N%20IMPOSSIBLE%20SENTENCIA%20FINAL&horario=16:00">
              <button class="btn-horario">16:00</button>
            </a>
            <a href="asientos.php?pelicula=MISI%C3%93N%20IMPOSSIBLE%20SENTENCIA%20FINAL&horario=18:30">
              <button class="btn-horario">18:30</button>
            </a>
            <a href="asientos.php?pelicula=MISI%C3%93N%20IMPOSSIBLE%20SENTENCIA%20FINAL&horario=21:00">
              <button class="btn-horario">21:00</button>
            </a>
          </div>
        </div>

        <!-- Funciones para 7 de junio (oculto por defecto) -->
        <div class="funcion-info" role="region" aria-label="Funciones del 7 de Junio" data-dia="7jun" style="display:none;">
          <small>*Los horarios aquí expuestos representan el inicio de cada función</small>
          <div class="funcion-tipos">
            <span class="tag-2d">2D</span>
            <span class="tag-doblada">Doblada</span>
            <span class="asiento">Asiento: GENERAL</span>
          </div>
          <div class="horarios">
            <a href="asientos.php?pelicula=MISI%C3%93N%20IMPOSSIBLE%20SENTENCIA%20FINAL&horario=14:00">
              <button class="btn-horario">14:00</button>
            </a>
            <a href="asientos.php?pelicula=MISI%C3%93N%20IMPOSSIBLE%20SENTENCIA%20FINAL&horario=17:00">
              <button class="btn-horario">17:00</button>
            </a>
            <a href="asientos.php?pelicula=MISI%C3%93N%20IMPOSSIBLE%20SENTENCIA%20FINAL&horario=20:00">
              <button class="btn-horario">20:00</button>
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
        // Quitar active de todas las fechas
        fechas.forEach(f => {
          f.classList.remove('active');
          f.setAttribute('aria-selected', 'false');
          f.setAttribute('tabindex', '-1');
        });

        // Poner active a la clickeada
        fecha.classList.add('active');
        fecha.setAttribute('aria-selected', 'true');
        fecha.setAttribute('tabindex', '0');
        fecha.focus();

        const diaSeleccionado = fecha.getAttribute('data-dia');

        // Mostrar la funcion correspondiente, ocultar las demás
        funciones.forEach(funcion => {
          if(funcion.getAttribute('data-dia') === diaSeleccionado){
            funcion.style.display = 'block';
          } else {
            funcion.style.display = 'none';
          }
        });
      });
    });
  </script>
  <?php
include 'footer.php';
?>
</body>
</html>


