
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Registro - CineLuxe</title>
  <link rel="stylesheet" href="register.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <div class="registro-container">
    <h2>Crear cuenta en CineLuxe</h2>
    <form action="validar_register.php" method="POST" id="formRegistro">
      <label for="email">Correo electrónico:</label>
      <input type="email" name="email" id="email" required />

      <label for="password">Contraseña:</label>
      <div class="password-container">
        <input type="password" name="password" id="password" required />
        <span id="togglePassword" class="eye" style="cursor: pointer;">&#128065;</span>
      </div>

      <div class="password-strength">
        <div id="strengthBar"></div>
      </div>

      <ul class="password-rules" id="passwordRules">
        <li id="length">Mínimo 8 caracteres</li>
        <li id="uppercase">Una letra mayúscula</li>
        <li id="number">Un número</li>
        <li id="symbol">Un símbolo</li>
      </ul>

       <button type="submit">Registrarse</button>

    </form>
  </div>

  <script src="register.js"></script>

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
  <?php unset($_SESSION['error']); endif; ?>

  <?php if (isset($_SESSION['success'])): ?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Registro exitoso',
      text: '<?php echo addslashes($_SESSION['success']); ?>',
      timer: 2500,
      showConfirmButton: false
    });
  </script>
  <?php unset($_SESSION['success']); endif; ?>

</body>
</html>
