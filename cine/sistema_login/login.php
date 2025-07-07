<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar sesión - CineLuxe</title>
  <link rel="stylesheet" href="login.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <div class="login-container">
    <h2>Sean Bienvenidos a CineLuxe</h2>
    <form action="validar_login.php<?php echo isset($_GET['redirect']) ? '?redirect=' . urlencode($_GET['redirect']) : ''; ?>" method="POST">
      <label for="email">Correo electrónico:</label>
      <input type="email" name="email" required>

      <label for="password">Contraseña:</label>
      <div class="password-container">
        <input type="password" name="password" id="password" required>
        <span id="togglePassword" class="eye">&#128065;</span>
      </div>

      <button type="submit">Iniciar sesión</button>
    </form>
    <p class="register-link">¿No tienes cuenta? <a href="register.php">Regístrate aquí</a></p>
  </div>

  <script>
    const password = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');
    togglePassword.onclick = () => {
      password.type = password.type === 'password' ? 'text' : 'password';
    };
  </script>

  <?php if (isset($_SESSION['error'])): ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: '<?php echo addslashes($_SESSION['error']); ?>'
      });
    </script>
    <?php unset($_SESSION['error']); ?>
  <?php endif; ?>

  <?php if (isset($_SESSION['success'])): ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: '¡Bienvenido!',
        text: '<?php echo addslashes($_SESSION['success']); ?>',
        timer: 2000,
        showConfirmButton: false
      }).then(() => {
        <?php
          $redirect = isset($_GET['redirect']) ? $_GET['redirect'] : '../index.php';
          echo "window.location.href = '$redirect';";
        ?>
      });
    </script>
    <?php unset($_SESSION['success']); ?>
  <?php endif; ?>


</body>
</html>
