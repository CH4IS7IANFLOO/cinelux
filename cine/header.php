<?php

session_start();
?>


<style>
  header {
    background-color: #1f1f3d;
    height: 70px;
    overflow: hidden;
  }

  .header-flex {
    max-width: 1200px;
    margin: auto;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
  }

  .logo-container {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-shrink: 0;
  }

  .logo-container a {
    display: inline-block;
  }

  .logo {
    height: 200px;
    cursor: pointer;
  }

  nav {
    display: flex;
    align-items: center;
  }

  nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
    margin: 0;
    padding: 0;
  }

  nav ul li a {
    color: #cfcfff;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s;
  }

  nav ul li a:hover {
    color: #ffffff;
  }

  .btn-login, .btn-register, .btn-logout {
    margin-left: 20px;
    padding: 8px 14px;
    background: #9146FF;
    border: none;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
    font-weight: 600;
    text-decoration: none;
    display: inline-block;
    transition: background-color 0.3s;
  }

  .btn-login:hover, .btn-register:hover, .btn-logout:hover {
    background: #772ce8;
  }

  .user-info {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: #cfcfff;
    font-weight: 600;
    margin-left: 30px;
  }

  .user-icon {
    font-size: 24px;
    color: #fff;
  }
</style>

<header>
  <div class="header-flex">
    <!-- Logo al extremo izquierdo -->
    <div class="logo-container">
      <a href="index.php">
        <img id="logo-cineluxe" src="LOGOS/logo_Cineluxe.png" alt="CineLuxe Logo" class="logo">
      </a>
    </div>

    <!-- Menú a la derecha -->
    <nav>
  <ul>
    <li><a href="cartelera.php">Cartelera</a></li>
    <li><a href="preventa.php">Preventa</a></li>
    <li><a href="cines.php">Cines</a></li>
    <li><a href="alimentos.php">Alimentos y Bebidas</a></li>
    <li><a href="carrito.php">🛒 Carrito</a></li>
  </ul>

  <?php if (isset($_SESSION['email'])): ?>
    <div class="user-info">
      <span class="user-icon">&#128100;</span>
      <span><?php echo htmlspecialchars($_SESSION['email']); ?></span>
      <a href="sistema_login/logout.php" class="btn-logout">Cerrar sesión</a>
    </div>
  <?php else: ?>
    <a href="sistema_login/login.php" class="btn-login">Iniciar Sesión</a>
    <a href="sistema_login/register.php" class="btn-register">Registrarse</a>
  <?php endif; ?>
</nav>

  </div>
</header>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const logo = document.getElementById("logo-cineluxe");
    let pressTimer;

    if (logo) {
      // Desktop: mouse events
      logo.addEventListener("mousedown", function () {
        pressTimer = setTimeout(function () {
          window.location.href = "login_admin.php";
        }, 3000);
      });

      logo.addEventListener("mouseup", function () {
        clearTimeout(pressTimer);
      });

      logo.addEventListener("mouseleave", function () {
        clearTimeout(pressTimer);
      });

      // Móvil: touch events
      logo.addEventListener("touchstart", function () {
        pressTimer = setTimeout(function () {
          window.location.href = "login_admin.php";
        }, 3000);
      });

      logo.addEventListener("touchend", function () {
        clearTimeout(pressTimer);
      });

      logo.addEventListener("touchcancel", function () {
        clearTimeout(pressTimer);
      });
    }
  });
</script>


