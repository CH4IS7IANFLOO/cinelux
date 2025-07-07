<!DOCTYPE html>
<html lang="es">
<head>
  
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CineLuxe Cartelera</title>
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
          <div class="fecha-text">06 JUN. 2025</div>
        </div>
        <div class="fecha" role="tab" tabindex="0" data-dia="dia2" aria-selected="false">
          <div>SÁB.</div>
          <div class="fecha-text">07 JUN. 2025</div>
        </div>
      </div>

      <!-- Películas Día 1 -->
      <div class="peliculas-dia" id="dia1" style="display:block;">

        <!-- Película 1 -->
        <article class="pelicula-card">
          <a href="misionimposible.php" class="pelicula-link">
            <img src="img/misionimposible.webp" alt="Misión Imposible Sentencia Final" />
            <h3>MISIÓN IMPOSIBLE : SENTENCIA FINAL</h3>
          </a>
          <div class="pelicula-info">
            <div class="tags">
              <span class="tag-m14">M14</span>
              <span class="tag-duration">130 min</span>
            </div>
            <div class="funcion-info">
              <div class="funcion-tipos">
                <span class="tag-2d">2D</span>
                <span class="tag-subtitulada">SUBTITULADA</span>
                <strong>ASIENTO: GENERAL</strong>
              </div>
              <small>*Los horarios aquí expuestos representan el inicio de cada función</small>
              <div class="horarios">
                <button class="btn-horario" onclick="mostrarModal('Misión Imposible', '16:00')">16:00</button>
                <button class="btn-horario" onclick="mostrarModal('Misión Imposible', '18:30')">18:30</button>
                <button class="btn-horario" onclick="mostrarModal('Misión Imposible', '21:00')">21:00</button>
              </div>
            </div>
          </div>
        </article>
        <br>

        <!-- Película 2 -->
        <article class="pelicula-card">
          <a href="lilo_stich.php" class="pelicula-link">
            <img src="img/lilo_stich.webp" alt="Lilo & Stitch" />
            <h3>LILO & STITCH</h3>
          </a>
          <div class="pelicula-info">
            <div class="tags">
              <span class="tag-m14">APT</span>
              <span class="tag-duration">95 min</span>
            </div>
            <div class="funcion-info">
              <div class="funcion-tipos">
                <span class="tag-2d">2D</span>
                <span class="tag-subtitulada">DOBLADA</span>
                <strong>ASIENTO: GENERAL</strong>
              </div>
              <small>*Los horarios aquí expuestos representan el inicio de cada función</small>
              <div class="horarios">
                <button class="btn-horario" onclick="mostrarModal('Lilo & Stitch', '14:30')">14:30</button>
                <button class="btn-horario" onclick="mostrarModal('Lilo & Stitch', '17:00')">17:00</button>
                <button class="btn-horario" onclick="mostrarModal('Lilo & Stitch', '19:30')">19:30</button>
              </div>
            </div>
          </div>
        </article>
        <br>

        <!-- Película 3 -->
        <article class="pelicula-card">
          <a href="destinofinal.php" class="pelicula-link">
            <img src="img/destinofinal.webp" alt="Destino Final Lazos de Sangre" />
            <h3>DESTINO FINAL : LAZOS DE SANGRE</h3>
          </a>
          <div class="pelicula-info">
            <div class="tags">
              <span class="tag-m14">M14</span>
              <span class="tag-duration">100 min</span>
            </div>
            <div class="funcion-info">
              <div class="funcion-tipos">
                <span class="tag-2d">2D</span>
                <span class="tag-subtitulada">SUBTITULADA</span>
                <strong>ASIENTO: GENERAL</strong>
              </div>
              <small>*Los horarios aquí expuestos representan el inicio de cada función</small>
              <div class="horarios">
                <button class="btn-horario" onclick="mostrarModal('Destino Final', '15:00')">15:00</button>
                <button class="btn-horario" onclick="mostrarModal('Destino Final', '17:30')">17:30</button>
                <button class="btn-horario" onclick="mostrarModal('Destino Final', '20:00')">20:00</button>
              </div>
            </div>
          </div>
        </article>
        <br>
      </div>

      <!-- Películas Día 2 -->
      <div class="peliculas-dia" id="dia2" style="display:none;">
        
        <!-- Película 1: Misión Imposible -->
        <article class="pelicula-card">
          <a href="misionimposible.php" class="pelicula-link">
            <img src="img/misionimposible.webp" alt="Misión Imposible Sentencia Final" />
            <h3>MISIÓN IMPOSIBLE : SENTENCIA FINAL</h3>
          </a>
          <div class="pelicula-info">
            <div class="tags">
              <span class="tag-m14">M14</span>
              <span class="tag-duration">130 min</span>
            </div>
            <div class="funcion-info">
              <div class="funcion-tipos">
                <span class="tag-2d">2D</span>
                <span class="tag-subtitulada">SUBTITULADA</span>
                <strong>ASIENTO: GENERAL</strong>
              </div>
              <small>*Los horarios aquí expuestos representan el inicio de cada función</small>
              <div class="horarios">
                <button class="btn-horario" onclick="mostrarModal('Misión Imposible', '18:00')">18:00</button>
                <button class="btn-horario" onclick="mostrarModal('Misión Imposible', '20:00')">20:00</button>
                <button class="btn-horario" onclick="mostrarModal('Misión Imposible', '22:00')">22:00</button>
              </div>
            </div>
          </div>
        </article>
        <br> 

        <!-- Película 2: Lilo & Stitch -->
        <article class="pelicula-card">
          <a href="lilo_stich.php" class="pelicula-link">
            <img src="img/lilo_stich.webp" alt="Lilo & Stitch" />
            <h3>LILO & STITCH</h3>
          </a>
          <div class="pelicula-info">
            <div class="tags">
              <span class="tag-m14">APT</span>
              <span class="tag-duration">95 min</span>
            </div>
            <div class="funcion-info">
              <div class="funcion-tipos">
                <span class="tag-2d">2D</span>
                <span class="tag-subtitulada">DOBLADA</span>
                <strong>ASIENTO: GENERAL</strong>
              </div>
              <small>*Los horarios aquí expuestos representan el inicio de cada función</small>
              <div class="horarios">
                <button class="btn-horario" onclick="mostrarModal('Lilo & Stitch', '15:30')">15:30</button>
                <button class="btn-horario" onclick="mostrarModal('Lilo & Stitch', '18:00')">18:00</button>
                <button class="btn-horario" onclick="mostrarModal('Lilo & Stitch', '20:30')">20:30</button>
              </div>
            </div>
          </div>
        </article>
        <br> 

        <!-- Película 3: Destino Final -->
        <article class="pelicula-card">
          <a href="destinofinal.php" class="pelicula-link">
            <img src="img/destinofinal.webp" alt="Destino Final Lazos de Sangre" />
            <h3>DESTINO FINAL : LAZOS DE SANGRE</h3>
          </a>
          <div class="pelicula-info">
            <div class="tags">
              <span class="tag-m14">M14</span>
              <span class="tag-duration">100 min</span>
            </div>
            <div class="funcion-info">
              <div class="funcion-tipos">
                <span class="tag-2d">2D</span>
                <span class="tag-subtitulada">SUBTITULADA</span>
                <strong>ASIENTO: GENERAL</strong>
              </div>
              <small>*Los horarios aquí expuestos representan el inicio de cada función</small>
              <div class="horarios">
                <button class="btn-horario" onclick="mostrarModal('Destino Final', '20:00')">20:00</button>
                <button class="btn-horario" onclick="mostrarModal('Destino Final', '21:50')">21:50</button>
                <button class="btn-horario" onclick="mostrarModal('Destino Final', '22:00')">22:00</button>
              </div>
            </div>
          </div>
        </article>
        <br> 
        
      </div>

    </section>
  </div>

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


