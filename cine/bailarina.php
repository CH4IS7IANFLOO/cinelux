<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>La Bailarina de John Wick</title>
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
      src="https://www.youtube.com/embed/BM5EnSvUPHE?autoplay=1&mute=1&loop=1&playlist=BM5EnSvUPHE&controls=0&showinfo=0&modestbranding=1&rel=0"
      frameborder="0"
      allow="autoplay; fullscreen"
      allowfullscreen
      title="Trailer La Bailarina de John Wick"
    ></iframe>
  </div>
  <div class="title">LA BAILARINA DE JOHN WICK</div>
  <div class="tags-header">
    <span class="tag-m14">+18</span>
    <span class="tag-duration">110 min</span>
    <span class="tag-action">Acción</span>
  </div>
</header>


    <section class="cine-content">

      <aside class="cine-info">
        <img
          class="poster"
          src="img/bailarina.webp" 
          alt="Póster La Bailarina de John Wick"
        />
        <div class="info-row"><h3>Título Original</h3><p>The Ballerina</p></div>
        <div class="info-row"><h3>Director</h3><p>Len Wiseman</p></div>
        <div class="info-row"><h3>Reparto</h3><p>Keanu Reeves, Ana de Armas</p></div>
        <div class="info-row"><h3>Sinopsis</h3><p>La bailarina busca venganza por la muerte de su familia mientras se enfrenta a poderosos enemigos en el mundo criminal.</p></div>
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
            <button class="btn-horario">16:00</button>
            <button class="btn-horario">18:30</button>
            <button class="btn-horario">21:00</button>
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
            <button class="btn-horario">14:00</button>
            <button class="btn-horario">17:00</button>
            <button class="btn-horario">20:00</button>
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
