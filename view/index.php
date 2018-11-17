<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sistema de Gestión de Software | Inicio de sesi&oacute;n</title>
    <!-- Meta tag para moviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/vendor.min.css">
    <link id="mainStyles" rel="stylesheet" href="css/styles.min.css">
  </head>
  <body class="login-body">
    <!--        -->
    <!-- Header -->
    <!--        -->
    <header class="navbar navbar-sticky bg-dark">
      <div class="site-branding">
        <div class="inner">
          <h3 class="site-logo text-white"><span class="d-sm-inline d-none">Sistema de </span>Gestión de Software</h3>
        </div>
      </div>
    </header>
    <!--           -->
    <!-- Contenido -->
    <!--           -->
    <div class="container">
      <!-- Formulario de inicio de sesion -->
      <div class="login-box box-shadow">
        <form action="../Controlador/UsuarioControlador.php?action=login" method="post">
          <h4 class="login-title">Inicio de sesión</h4>
          <!-- E-mail y contraseña -->
          <div class="form-group input-group">
            <input type="text" id="login-username" name="login-username" class="form-control" placeholder="Nombre de usuario" required>
            <span class="input-group-addon"><i class="icon-head"></i></span>
          </div>
          <div class="form-group input-group">
            <input type="password" id="login-password" name="login-password" class="form-control" placeholder="Contraseña" required>
            <span class="input-group-addon"><i class="icon-lock"></i></span>
            <div class="input-group-btn"><a class="btn btn-sm mt-1" id="show-password">Mostrar</a></div>
          </div>
          <!-- Boton de ingresar -->
          <div class="text-center">
            <button class="btn btn-primary" type="submit" id="login-submit" value="Login">Ingresar</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Boton para volver arriba -->
    <a class="scroll-to-top-btn" href="#">
      <i class="icon-arrow-up"></i>
    </a>
    <!-- Librerias, plugins y scripts propios de la pagina -->
    <script type="text/javascript" src="js/third-party/vendor.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
  </body>
</html>
