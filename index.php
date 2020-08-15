<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login y registro - CodiClass</title>
    <link rel="stylesheet" type="text/css" href="css/css1.css" />
  </head>
  <body>
    <main>
      <div class="contenedor_todo">
        <div class="caja_trasera">
          <div class="caja_trasera_login">
            <h3>¿Ya tienes cuenta?</h3>
            <p>Iniciar sesi&oacute;n para entrar al login</p>
            <button id="btn_iniciar-sesion">Iniciar Sesi&oacute;n</button>
          </div>
          <div class="caja_trasera_registro">
            <h3>¿A&uacute;n no tienes cuenta?</h3>
            <p>Reg&iacute;strate para que puedas iniciar sesi&oacute;n</p>
            <button id="btn_registro">Registrarme</button>
          </div>
        </div>
        <!--Formulario de login y registro-->
        <div class="contenedor_login-registro">
            <!--Formulario de login-->
            <form action="" class="formulario_login">
                <h2>Iniciar sesi&oacute;n</h2>
                <input type="text" placeholder="Correo electronico" name="correo">
                <input type="password" placeholder="Contraseña" name="pass">
                <button id="btn-login">Entrar</button>
            </form>

            <!--Formulario de registro-->
            <form action="php/registrar_usuario.php" method="POST" class="contenedor_register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre completo" name="nombre_completo">
                <input type="text" placeholder="Correo electronico" name="correo_electronico">
                <input type="text" placeholder="Usuario" name="user">
                <input type="password" placeholder="Contraseña" name="pass">
                <button id="btn-registro">Registrarse</button>
            </form>
        </div>
      </div>
    </main>
    <script src="js/js1.js"></script>
  </body>
</html>
