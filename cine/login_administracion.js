// login_administracion.js

document.addEventListener('DOMContentLoaded', () => {
  console.log("Script login_administracion.js cargado");

  const logo = document.getElementById('logo-cineluxe');
  if (!logo) {
    console.warn('No se encontró el logo con id "logo-cineluxe"');
    return;
  }

  let pressTimer;

  logo.addEventListener('mousedown', () => {
    console.log('mousedown detectado en logo');
    pressTimer = setTimeout(() => {
      console.log('Presionado 3 segundos, redirigiendo...');
      window.location.href = 'login_admin.php'; // Cambia esta URL si es necesario
    }, 3000);
  });

  logo.addEventListener('mouseup', () => {
    console.log('mouseup detectado, cancelando temporizador');
    clearTimeout(pressTimer);
  });

  logo.addEventListener('mouseleave', () => {
    console.log('mouseleave detectado, cancelando temporizador');
    clearTimeout(pressTimer);
  });

  // Para dispositivos táctiles
  logo.addEventListener('touchstart', () => {
    console.log('touchstart detectado en logo');
    pressTimer = setTimeout(() => {
      console.log('Presionado 3 segundos en touch, redirigiendo...');
      window.location.href = 'login_admin.php';
    }, 3000);
  });

  logo.addEventListener('touchend', () => {
    console.log('touchend detectado, cancelando temporizador');
    clearTimeout(pressTimer);
  });
});
