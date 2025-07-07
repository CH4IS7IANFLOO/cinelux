<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Especiales - CineLuxe</title>
    <link rel="stylesheet" href="styles.css" />
    

      <?php
session_start();
include 'header.php';
?>
    <style>
       
        body, html {
            background-color: #121212;
            color: #eee;
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
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

        header {
            text-align: center;
            margin-bottom: 40px;
        }

        header h1 {
            font-size: 2.5rem;
            color: #9146FF;
        }

        .eventos-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 30px;
        }

        .evento {
            background-color: #2a2a5a;
            padding: 20px;
            border-radius: 8px;
            color: #ccc;
            flex: 1;
            text-align: center;
        }

        .evento img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .evento h3 {
            color: #9146FF;
            font-size: 1.5rem;
            margin: 15px 0;
        }

        .evento p {
            color: #777;
            font-size: 1rem;
        }

        .btn-contacto {
            display: block;
            background-color: #9146FF;
            color: #bfbfff;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.2rem;
            margin: 20px auto;
            width: 200px;
            transition: background-color 0.3s ease;
        }

        .btn-contacto:hover {
            background-color: #3e2a9e;
        }

        footer {
            text-align: center;
            color: #777;
            margin-top: 40px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <h1>EVENTOS ESPECIALES</h1>
        </header>

        <div class="eventos-container">
            <div class="evento">
                <img src="img/cumpleaños.webp" alt="Cumpleaños">
                <h3>CUMPLEAÑOS</h3>
                <p>Pasa un cumpleaños de película en nuestras salas de cine para ti y tus amigos con la película de cartelera que tú elijas.</p>
            </div>
            <div class="evento">
                <img src="img/alquiler.webp" alt="Alquiler de Sala">
                <h3>ALQUILER DE SALA</h3>
                <p>Ofrecemos instalaciones de primer nivel para aquellas empresas que deseen realizar diversos tipos de eventos, tales como: conferencias, seminarios, lanzamientos de productos y más.</p>
            </div>
            <div class="evento">
                <img src="img/funciones.webp" alt="Función Especial">
                <h3>FUNCIÓN ESPECIAL</h3>
                <p>Invita a tus clientes o colaboradores a disfrutar de una Función Exclusiva con una película en cartelera, diseñado para grupos de 50 personas o más.</p>
            </div>
        </div>

        <a href="contacto.php" class="btn-contacto">Contáctanos</a>

       <?php
include 'footer.php';
?>
    </div>

</body>
</html>
