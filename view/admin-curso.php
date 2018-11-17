<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sistema de Gestión de Software | Mantenimiento de cursos</title>
    <!-- Meta tag para moviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Estilos incluyendo: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" href="css/vendor.min.css">
    <link id="mainStyles" rel="stylesheet" href="css/styles.min.css">
    <link id="customStyles" rel="stylesheet" href="css/custom.css">
    <!-- Modernizr -->
    <script type="text/javascript" src="js/third-party/modernizr.min.js"></script>
  </head>
  <body>
    <!--      -->
    <!-- Menu -->
    <!--      -->
    <div class="offcanvas-container" id="mobile-menu">
      <div class="account-link">
        <div class="user-ava"><img src="img/user.png" alt="Nombre de usuario" title="Nombre de usuario"></div>
        <div class="user-info">
          <h6 class="user-name">Nombre del usuario</h6>
          <span class="text-sm text-white opacity-60">Administrador</span>
        </div>
      </div>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <!-- Inicio -->
          <li class="has-children active">
            <span><a href="#">Mantenimientos</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li class="active"><a href="admin-curso.html">Cursos</a></li>
              <li><a href="admin-ciclo.html">Ciclos</a></li>
            </ul>
          </li>
          <!-- Opciones de usuario -->
          <li class="offcanvas-header">
            <h3 class="offcanvas-title">Opciones de usuario</h3>
          </li>
          <li><a href="admin-perfil.html">Ver perfil</a></li>
          <li><a href="index.html">Cerrar sesión</a></li>
        </ul>
      </nav>
    </div>
    <!--        -->
    <!-- Header -->
    <!--        -->
    <div class="topbar d-none"></div>
    <header class="navbar navbar-sticky bg-dark">
      <!-- Boton toggle del menu y titulo -->
      <div class="site-branding">
        <div class="inner">
          <a class="offcanvas-toggle text-white" href="#mobile-menu" data-toggle="offcanvas"></a>
          <h3 class="site-logo text-white"><span class="d-sm-inline d-none">Sistema de </span>Gestión de Software</h3>
        </div>
      </div>
      <!-- Toolbar -->
      <div class="toolbar"><div class="inner"><div class="tools">
        <div class="account">
          <!-- Icono del usuario -->
          <a href="admin-perfil.html"></a>
          <i class="icon-head"></i> <span class="account-label">Nombre del usuario</span>
          <ul class="toolbar-dropdown">
            <!-- Breve info del usuario -->
            <li class="sub-menu-user">
              <div class="user-ava"><img src="img/user.png" alt="Nombre del usuario" title="Nombre del usuario"></div>
              <div class="user-info">
                <h6 class="user-name">Nombre del usuario</h6>
                <span class="text-xs text-muted">Administrador</span>
              </div>
            </li>
            <!-- Menu del usuario -->
            <li><a href="admin-perfil.html"><i class="icon-cog"></i>Configurar perfil</a></li>
            <li><a href="index.html"><i class="icon-unlock"></i>Cerrar sesi&oacute;n</a></li>
          </ul>
        </div>
      </div></div></div>
    </header>
    <!--           -->
    <!-- Contenido -->
    <!--           -->
    <div class="offcanvas-wrapper">
      <div class="container-fluid">
        <h3>Mantenimiento de cursos</h3>
        <!-- Tabla de clientes -->
        <div class="table-responsive">
          <table class="table" id="curso-tabla">
            <!-- Cabecera -->
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Código PUCP</th>
                <th scope="col">Nombre del curso</th>
                <th scope="col" class="text-right">
                  <button class="btn btn-sm btn-primary"><i class="icon-plus"></i> <span class="d-sm-inline d-none">Agregar</span></button>
                </th>
              </tr>
            </thead>
            <!-- Datos -->
            <tbody>
                <?php
                  require_once ("../DAO/CursoDAO.php");
                  $cursodao = new CursoDAO();
                  $listacursos = $cursodao->obtener_cursos();
                  $index_row = 1;
                  foreach ($listacursos as $cursos) {
                    #$software = $softwaredao->buscarXId ( $solicitudes->getidsoftware );
                    echo '<tr> <th scope="row">' . $index_row . '</th> ';
                    echo '<td>' . $cursos[0] . '</td>';
                    echo '<td>' . $solicitudes[1] .'</td>';
                    echo ' <td class="text-right">
                            <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-original-title="Eliminar"><i class="icon-trash"></i></button>
                            </td></tr>';
                  }
                ?>
              <tr>
                <th scope="row">1</th>
                <td>INF144</td>
                <td>Técnicas de Programación</td>
                <td class="text-right">
                  <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-original-title="Eliminar"><i class="icon-trash"></i></button>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>INF246</td>
                <td>Bases de Datos</td>
                <td class="text-right">
                  <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-original-title="Eliminar"><i class="icon-trash"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Boton para volver arriba -->
    <a class="scroll-to-top-btn" href="#">
      <i class="icon-arrow-up"></i>
    </a>
    <!-- Backdrop -->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script type="text/javascript" src="js/third-party/vendor.min.js"></script>
    <script type="text/javascript" src="js/third-party/scripts.min.js"></script>
    <script type="text/javascript" src="js/utilidades.js"></script>
    <!-- script type="text/javascript" src="js/admin/inicio.js"></script -->
  </body>
</html>