document
  .getElementById("btn_iniciar-sesion")
  .addEventListener("click", IniciarSesion);
document.getElementById("btn_registro").addEventListener("click", Register);

window.addEventListener("resize", anchoPagina);

var contenedor_login_register = document.querySelector(
  ".contenedor_login-registro"
);

var formulario_login = document.querySelector(".formulario_login");

var contenedor_register = document.querySelector(".contenedor_register");

var caja_trasera_login = document.querySelector(".caja_trasera_login");

var caja_trasera_registro = document.querySelector(".caja_trasera_registro");

function IniciarSesion() {
  if (window.innerWidth > 850) {
    contenedor_register.style.display = "none";
    contenedor_login_register.style.left = "10px";
    formulario_login.style.display = "block";
    caja_trasera_registro.style.opacity = "1";
    caja_trasera_login.style.opacity = "0";
  } else {
    contenedor_register.style.display = "none";
    contenedor_login_register.style.left = "0px";
    formulario_login.style.display = "block";
    caja_trasera_registro.style.opacity = "block";
    caja_trasera_login.style.opacity = "none";
  }
}

function Register() {
  if (window.innerWidth > 850) {
    contenedor_register.style.display = "block";
    contenedor_login_register.style.left = "410px";
    formulario_login.style.display = "none";
    caja_trasera_registro.style.opacity = "0";
    caja_trasera_login.style.opacity = "1";
  } else {
    contenedor_register.style.display = "block";
    contenedor_login_register.style.left = "8px";
    formulario_login.style.display = "none";
    caja_trasera_registro.style.display = "none";
    caja_trasera_login.style.opacity = "1";
    caja_trasera_login.style.display = "block";
  }
}

function anchoPagina() {
    if (window.innerWidth > 850) {
      caja_trasera_login.style.display = "block";
      caja_trasera_registro.style.display = "block";
    } else {
      caja_trasera_registro.style.display = "block";
      caja_trasera_registro.style.opacity = "1";
      caja_trasera_login.style.display = "none";
      formulario_login.style.display = "block";
      contenedor_register.style.display = "none";
      contenedor_login_register.style.left = "0px";
    }
}

anchoPagina();
