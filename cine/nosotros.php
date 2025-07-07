<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="styles.css" />
     <?php
session_start();
include 'header.php';
?>
    
    
    <style>
        /* Estilos generales */
        body, html {
            background-color: #121212;
            color: #eee;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 1140px;
            margin: 40px auto;
            background: #1e1e3a;
            padding: 20px;
            border-radius: 8px;
            box-sizing: border-box;
            color: #eee;
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            color: #9146FF;
        }

        /* Estilos para la imagen debajo del título */
        .title-image {
            width: 25%; /* Ajustada a un 50% del ancho disponible */
            height: auto;
            margin-top: 20px;
            border-radius: 8px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .section-title {
            font-weight: bold;
            color: #eee;
            font-size: 1.2rem;
        }

        .list-icons {
            margin-left: 20px;
            font-size: 1.1rem;
        }

        .list-icons li {
            margin-bottom: 10px;
        }

        .img-container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .img-container img {
            width: 48%;
            border-radius: 8px;
        }

        .info-container {
            margin-top: 40px;
        }

        .info-container p {
            font-size: 1rem;
            line-height: 1.6;
        }

        .footer-text {
            text-align: center;
            margin-top: 50px;
            color: #ccc;
        }

        /* Estilos de botones */
        .btn-location {
            background-color: #2a2a5a;
            color: #bfbfff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-location:hover {
            background-color: #9146FF;
            color: #fff;
        }

        /* Estilos de enlaces */
        a {
            color: #9146FF;
            text-decoration: none;
        }

        a:hover {
            color: #b496ff;
        }

        /* Estilos de listas */
        .list-icons li {
            color: #ccc;
        }

        /* Estilos para la sección de calidad */
        .info-container ul li {
            background-color: #383870;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .info-container ul li strong {
            color: #9146FF;
        }

    </style>
</head>
<body>

<div class="container">
    <!-- Imagen debajo del título -->
    <img src="img/quienessomos.webp" alt="Imagen de CINELUXE" class="title-image">

    <!-- Información general -->
    <div class="info-container">
        <h2 class="section-title">CONOCE CINELUXE</h2>
        <p>CINELUXE Holdings, Inc. es una cadena de cines con operaciones en Perú. Contamos con 3 complejos y 30 pantallas en todo el país. Estamos comprometidos con ofrecer a nuestros clientes la mejor experiencia cinematográfica, con tecnología de última generación y un ambiente cómodo y seguro.</p>

        <h3 class="section-title">SOMOS UNA DE LAS MEJORES OPCIONES DE CINE EN PERÚ</h3>
        <ul class="list-icons">
            <li>Contamos con 3 complejos de cine y 30 pantallas.</li>
            <li>Tenemos presencia en las principales ciudades del Perú.</li>
            <li>Abrimos nuestro primer cine en Perú en 1997.</li>
            <li>Actualmente contamos con complejos en Lima, Arequipa y Trujillo.</li>
        </ul>
    </div>

    <!-- Descripción de servicios -->
    <div class="info-container">
        <h3 class="section-title">LA CALIDAD ES LO PRIMERO Y ES POR ESO QUE CONTAMOS CON FORMATOS ÚNICOS Y TECNOLOGÍA DE PRIMERA DENTRO DEL RUBRO DE PROYECCIÓN:</h3>
        <ul class="list-icons">
            <li><strong>XD (EXTREME DIGITAL CINEMA):</strong> Pantalla gigante acústicamente transparente, proyectada con 35 trillones de colores, imágenes 4K y sonido de 90,000 Watts de potencia.</li>
            <li><strong>REALD 3D:</strong> Esta imagen que permitirá que entres en la película y vayas aún más profundo a la pantalla situada en medio de la acción.</li>
        </ul>
    </div>

    <!-- Footer -->
    <div class="footer-text">
        <p>Si quieres conocer más sobre nosotros puedes contactarnos a través de nuestras redes sociales.</p>
    </div>

</div>

</footer>

</body>
</html>

</body>
</html>


