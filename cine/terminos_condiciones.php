<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Legal - CineDelux</title>
    <link rel="stylesheet" href="styles.css" />
    
    
      <?php
session_start();
include 'header.php';
?>
    <style>
        /* Estilos generales */
        body, html {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212; /* Color de fondo para todo */
            color: #eee; /* Color general de texto */
            height: 100%;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        /* Barra lateral */
        .sidebar {
            width: 250px;
            background-color: #1e1e3a; /* Fondo de la barra lateral */
            color: #ccc; /* Color del texto de la barra lateral */
            padding: 20px;
            box-sizing: border-box;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.5rem;
            color: #9146FF; /* Color del título en la barra lateral */
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 15px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #ccc; /* Color de los enlaces en la barra lateral */
            font-size: 1rem;
            display: block;
            padding: 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #b496ff; /* Efecto hover con un tono morado más claro */
            color: #1e1e3a; /* Cambio de color de texto al hacer hover */
        }

        /* Contenido principal */
        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #1e1e3a; /* Fondo del contenedor principal */
            box-sizing: border-box;
            color: #eee; /* Color general del texto */
            display: none; /* Inicialmente escondemos todos los contenidos */
        }

        .main-content.active {
            display: block; /* Mostramos el contenido cuando es activo */
        }

        .main-content h1 {
            color: #9146FF; /* Título en morado */
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center; /* Centrado del título */
        }

        .main-content p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #eee; /* Color del texto en el contenido */
        }

        .main-content img {
            display: block;
            margin: 20px auto; /* Centra la imagen debajo del título */
            width: 10%; /* Ajusta el tamaño de la imagen */
            max-width: 600px; /* Limita el tamaño máximo de la imagen */
            border-radius: 8px; /* Bordes redondeados para la imagen */
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Barra lateral -->
        <div class="sidebar">
            <h2>CINEDELUX LEGAL</h2>
            <ul>
                <li><a href="#" onclick="showContent('terminos')">Términos y condiciones</a></li>
                <li><a href="#" onclick="showContent('politicas')">Política de protección de datos personales</a></li>
                <li><a href="#" onclick="showContent('trabaja')">Política de Cookies</a></li>
            </ul>
        </div>
        
        <!-- Contenido principal -->
        <div class="main-content" id="terminos">
            <h1>Términos y Condiciones de Uso del Sitio Web</h1>
            <img src="img/crk.webp" alt="Imagen Términos y Condiciones">
            <p><strong>Fecha de efectividad:</strong> 17 de Febrero, 2025</p>
            <p>El presente documento regula los términos y condiciones de uso, del sitio web (www.devproyectos.com)  en cuales un usuario, consumidor, comprador, cliente o usted, en adelante el “Usuario” o “Usted”, tiene derecho a ingresar e usar el Sitio Web para comprar entradas de cine, o cualquier otro producto disponible en el mismo, contratar cualquier servicio disponible en el mismo, y/o acceder a información, texto, video u otro material comunicado en el Sitio Web. En el Sitio Web podrá usar, sin costo, visitar, comparar y, si lo desea, adquirir los bienes o servicios que ahí se exhiben.</p>
            <p>Estos Términos y Condiciones serán aplicados y se entenderán incorporados en cada uno de los contratos que celebre con CineDelux por medio del Sitio Web. CineDelux podrá en cualquier momento introducir variaciones a estos Términos y condiciones, los que empezarán a regir desde el momento en que sean cargados en el Sitio Web y respecto de accesos, usos y operaciones de compra realizadas a partir de dicha carga. Salvo el caso de operaciones de compra, el usuario tendrá la posibilidad de desvincularse del servicio ofrecido a través del Sitio Web ante los cambios realizados.</p>
            <p>El uso del Sitio Web en estos Términos y Condiciones, los actos que ejecute y los contratos que celebre por medio del Sitio Web, se encuentran sujetos y sometidos a las leyes de la República del Perú.</p>
        </div>

        <div class="main-content" id="politicas">
            <h1>Política de Protección de Datos Personales</h1>
            <img src="img/crk.webp" alt="Imagen Protección de Datos">
            <p><strong>Fecha de Efectividad:</strong> Julio, 2022</p>
            <p>El presente documento establece la Política de Protección de Datos Personales (en adelante, la “Política de Protección”) aplicable al tratamiento de datos personales realizado a través de sitio web www.cinedelux-peru.com y de la aplicación móvil (en adelante, conjuntamente, el “Sitio Web”), de CineDelux Perú S.R.L. (en adelante, “CineDelux”).</p>

            <p>Para utilizar algunos de los servicios alojados en el Sitio Web será necesario que el usuario del Sitio Web (en adelante, el “Usuario”) proporcione y/o registre datos de carácter personal, para lo cual otorga su consentimiento a CineDelux para el tratamiento de los mismos, de conformidad a lo dispuesto en la Ley N° 29733, Ley de Protección de Datos Personales y su Reglamento, así como en las normas que modifiquen, reemplacen, sustituyan y/o complementen a estas últimas.</p>

            <p>Los datos personales obtenidos serán tratados y almacenados conforme a la normativa vigente para garantizar su confidencialidad y seguridad.</p>
        </div>

        <div class="main-content" id="trabaja">
            <h1>Política de Cookies</h1>
            <img src="img/terminos.webp" alt="Imagen Cookies">
            <p>En CineDelux Perú utilizamos cookies (propias y de terceros) y pixeles (como Facebook), con el objetivo de entregarte una experiencia de navegación personalizada y con contenido relevante de acuerdo a tus hábitos de compra e interacción, así como para la recolección de información estadística que permita analizar el uso de la web y, como resultado, la optimización en el funcionamiento del mismo.</p>

            <p><strong>¿Qué es una cookie?</strong></p>
            <p>De acuerdo a Google: "Las cookies son archivos que crean los sitios web que visitas para guardar información de la navegación y facilitar tu experiencia en línea. Gracias a las cookies, los sitios pueden mantener abierta tu sesión, recordar tus preferencias del sitio y proporcionarte contenido relevante en función del lugar donde te encuentres."</p>

            <p>Este archivo permite identificar unívocamente el dispositivo utilizado por un determinado usuario, independientemente de que este cambie su localización o dirección IP. Toda la información recolectada se registra de forma anónima, sin proporcionarse datos sensibles y privados del usuario, como su nombre.</p>

            <p>Y si bien puedes navegar en www.cinedelux-peru.com sin cookies instaladas, su deshabilitación puede impedir el correcto funcionamiento de las características de la web en pos de una navegación adecuada de acuerdo a tus preferencias.</p>
        </div>
    </div>

    <script>
        function showContent(contentId) {
            // Escondemos todos los contenidos
            var contents = document.querySelectorAll('.main-content');
            contents.forEach(function(content) {
                content.classList.remove('active');
            });

            // Mostramos el contenido correspondiente
            var content = document.getElementById(contentId);
            if (content) {
                content.classList.add('active');
            }
        }

        // Mostrar el primer contenido por defecto
        showContent('terminos');
    </script>
    <?php
include 'footer.php';
?>
</body>
</html>


