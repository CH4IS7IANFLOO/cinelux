<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineLuxe - Todos Nuestros Cines</title>
    <link rel="stylesheet" href="styles.css" />

    <style>
        /* Estilos generales */
        body, html {
            background-color: #121212;
            color: #eee;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .cine-detalles {
            max-width: 1140px;
            margin: 40px auto;
            background: #1e1e3a;
            padding: 20px;
            border-radius: 8px;
            box-sizing: border-box;
            color: #eee;
            display: flex; /* Cambio a disposición en fila */
            justify-content: space-between;
            flex-wrap: wrap;
        }

        header {
            background-color: #000; /* Fondo negro para el encabezado */
            color: #9146FF; /* Morado para el texto */
            text-align: center;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            margin-bottom: 20px;
        }

        h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        /* Estilos para las tarjetas de cine */
        .cine-card {
            background-color: #1e1e3a;
            width: 300px;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s;
        }

        .cine-card:hover {
            transform: scale(1.05);
        }

        .cine-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 2px solid #9146FF;
        }

        .cine-card h3 {
            margin: 15px 0;
            color: #9146FF;
            font-size: 1.5rem;
        }

        .cine-card p {
            padding: 0 15px;
            font-size: 1rem;
            color: #ccc;
            margin-bottom: 15px;
        }

        .cine-card .btn-location {
            display: inline-block;
            background-color: #9146FF; /* Morado */
            color: white;
            padding: 12px 20px; /* Aumenté el tamaño del botón */
            margin: 10px 0;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .cine-card .btn-location:hover {
            background-color: #b496ff;
        }

        /* Estilo para "Próximamente" */
        .proximamente {
            font-size: 1.8rem;
            color: #9146FF;
            font-weight: bold;
            margin: 20px 0;
        }

       

        @media (max-width: 720px) {
            .cine-detalles {
                padding: 10px;
                flex-direction: column; /* En pantallas más pequeñas, los cine-cards se alinean en columna */
            }

            .cine-card {
                width: 100%;
                margin: 10px 0;
            }
        }
    </style>

</head>
<body>
  <?php
session_start();
include 'header.php';
?> 
 <br>
    <!-- Encabezado de la página -->
    <header>
        <h1>CINELUXE - NUESTROS CINES</h1>
    </header>

    <!-- Sección de los cines -->
    <section class="cine-detalles">

        <!-- Cine Megaplaza con toda la información -->
        <article class="cine-card">
            <img src="img/cineluxe_megaplaza.webp" alt="Cinemark Megaplaza">
            <h3>CINELUXE MEGAPLAZA</h3>
            <p><strong>Dirección:</strong> Calle Alfredo Mendiola 3698 Km 8.5 de la Av. Panamericana</p>
            <p><strong>Teléfono:</strong> +51 1 123 4567</p>
            <p><strong>Horario:</strong> Lunes a Domingo de 01:00 PM a 10:00 PM</p>
            <a href="https://www.google.com/maps?q=Mega+Plaza+Independencia" target="_blank" class="btn-location">VER UBICACIÓN EN MAPA</a>
        </article>

        <!-- Cine Asia - Próximamente -->
        <article class="cine-card">
            <img src="img/cineluxe_asia.webp" alt="Cinemark Asia">
            <h3>CINELUXE ASIA</h3>
            <p class="proximamente">Próximamente</p>
        </article>

        <!-- Cine Bellavista - Próximamente -->
        <article class="cine-card">
            <img src="img/cineluxe_vellavista.webp" alt="Cinemark Mallplaza Bellavista">
            <h3>CINELUXE MALLPLAZA BELLAVISTA</h3>
            <p class="proximamente">Próximamente</p>
        </article>

    </section>

     <?php
   include 'footer.php';
   ?>

</body>
</html>


