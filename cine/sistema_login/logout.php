<?php
session_start();
session_unset();   // Elimina todas las variables de sesión
session_destroy(); // Destruye la sesión
header("Location: ../index.php"); // Redirige al index (ajusta la ruta si está en otra carpeta)
exit();
