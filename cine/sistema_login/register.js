
// File: cine/sistema_login/register.js

const password = document.getElementById('password');
const togglePassword = document.getElementById('togglePassword');
const strengthBar = document.getElementById('strengthBar');
const rules = {
  length: document.getElementById('length'),
  uppercase: document.getElementById('uppercase'),
  number: document.getElementById('number'),
  symbol: document.getElementById('symbol')
};

togglePassword.onclick = () => {
  password.type = password.type === 'password' ? 'text' : 'password';
};

password.oninput = () => {
  const val = password.value;
  let strength = 0;

  if (val.length >= 8) {
    rules.length.style.color = "lightgreen"; strength++;
  } else {
    rules.length.style.color = "red";
  }

  if (/[A-Z]/.test(val)) {
    rules.uppercase.style.color = "lightgreen"; strength++;
  } else {
    rules.uppercase.style.color = "red";
  }

  if (/\d/.test(val)) {
    rules.number.style.color = "lightgreen"; strength++;
  } else {
    rules.number.style.color = "red";
  }

  if (/[\W_]/.test(val)) {
    rules.symbol.style.color = "lightgreen"; strength++;
  } else {
    rules.symbol.style.color = "red";
  }

  const percent = (strength / 4) * 100;
  strengthBar.style.width = percent + "%";

  if (percent === 100) {
    strengthBar.style.background = "lightgreen";
  } else if (percent >= 50) {
    strengthBar.style.background = "orange";
  } else {
    strengthBar.style.background = "red";
  }
};
