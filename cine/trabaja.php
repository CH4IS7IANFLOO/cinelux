<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabaja con Nosotros | Cineluxe Megaplaza</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
        /* General Styles */
        body, html {
            margin: 0;
            padding: 0;
            background-color: #121212;
            color: #eee;
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
        }

        /* Main Container */
        .main-container {
            background-color: #1e1e3a;
            max-width: 1200px;
            margin: 40px auto;
            padding: 40px;
            border-radius: 8px;
            box-sizing: border-box;
        }

        /* Header */
        header {
            text-align: center;
            margin-bottom: 40px;
        }

        h1 {
            color: #9146FF;
            font-size: 3rem;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        /* Jobs Section */
        .jobs-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .job-card {
            background-color: #2a2a5a;
            padding: 20px;
            border-radius: 8px;
            width: 48%;
            text-align: center;
            box-sizing: border-box;
        }

        .job-card h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #fff;
        }

        .job-card a {
            background-color: #9146FF;
            color: #bfbfff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .job-card a:hover {
            background-color: #b496ff;
        }

        /* Footer */
        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 1rem;
            color: #ccc;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <header>
            <h1>Trabaja con Nosotros</h1>
            <p>Sé parte de nuestro equipo en Cineluxe Megaplaza. ¡Ofrecemos un ambiente divertido, con horarios flexibles y oportunidades de crecimiento!</p>
        </header>

        <section class="jobs-section">
            <div class="job-card">
                <h3>Auxiliar de Atención al Cliente</h3>
                <p>CINELUXE MEGAPLAZA</p>
                <a href="postula.php">Postula aquí</a>
            </div>

            <div class="job-card">
                <h3>Auxiliar de Atención al Cliente</h3>
                <p>CINELUXE MEGAPLAZA</p>
                <a href="postula.php">Postula aquí</a>
            </div>

            <div class="job-card">
                <h3>Auxiliar de Atención al Cliente</h3>
                <p>CINELUXE MEGAPLAZA</p>
                <a href="postula.php">Postula aquí</a>
            </div>

            <div class="job-card">
                <h3>Auxiliar de Atención al Cliente</h3>
                <p>CINELUXE MEGAPLAZA</p>
                <a href="postula.php">Postula aquí</a>
            </div>
        </section>

       <?php
include 'footer.php';
?>
    </div>
</body>
</html>
