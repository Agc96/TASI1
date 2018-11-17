Solicitudes del ciclo 2018-2
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sistema de Gestión de Software | Solicitudes de software</title>
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
    <!-- Modal para creación de solicitud -->
    <div class="modal fade" id="modal-solicitud" tabindex="-1" role="dialog">
      <form class="modal-dialog" role="document" method="post" action="../Controlador/ProfesorControlador.php">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Crear una solicitud de software</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="solicitud-ciclo" id="solicitud-ciclo">
            <!-- Curso -->
            <div class="form-group">
              <label for="solicitud-curso">Curso:</label>
              <select name="solicitud-curso" id="solicitud-curso" class="form-control form-control-sm" required="">
                <option value="" disabled="" selected="">Seleccione un curso...</option>
                <option value="1">INF123 - Lenguaje de Programación 1</option>
                <option value="2">INF273 - Desarrollo de Programas 2</option>
              </select>
            </div>
            <!-- Nombre del software -->
            <div class="form-group">
              <label for="solicitud-software">Software:</label>
              <input type="text" name="solicitud-software" id="solicitud-software" class="form-control form-control-sm" placeholder="Nombre del software a instalarse" required="">
            </div>
            <!-- Versión y sistema operativo -->
            <div class="row">
              <div class="col-sm-6 form-group">
                <label for="solicitud-version">Versión:</label>
                <input type="text" name="solicitud-version" id="solicitud-version" class="form-control form-control-sm" placeholder="Versión del software">
              </div>
              <div class="col-sm-6 form-group">
                <label for="solicitud-so">Sistema operativo:</label>
                <select name="solicitud-so" id="solicitud-so" class="form-control form-control-sm" required="">
                  <option value="" disabled="" selected="">Seleccione un S.O...</option>
                  <option value="1">Windows 7</option>
                  <option value="2">Linux Mint</option>
                </select>
              </div>
            </div>
            <!-- Observaciones del profesor -->
            <div class="form-group">
              <label for="solicitud-observaciones">Observaciones:</label>
              <textarea name="solicitud-observaciones" id="solicitud-observaciones" class="form-control" placeholder="Observaciones del profesor" rows="3"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-sm btn-primary">Enviar</button>
          </div>
        </div>
      </form>
    </div>
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
          <li class="active"><a>Solicitudes de software</a></li>
          <!-- Opciones de usuario -->
          <li class="offcanvas-header">
            <h3 class="offcanvas-title">Opciones de usuario</h3>
          </li>
          <!-- <li><a href="admin-perfil.html">Ver perfil</a></li> -->
          <li><a href="index.php">Cerrar sesión</a></li>
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
          <a></a>
          <i class="icon-head"></i> <span class="account-label">Nombre del usuario</span>
          <ul class="toolbar-dropdown">
            <!-- Breve info del usuario -->
            <li class="sub-menu-user">
              <div class="user-ava"><img src="img/user.png" alt="Nombre del usuario" title="Nombre del usuario"></div>
              <div class="user-info">
                <h6 class="user-name">Nombre del usuario</h6>
                <span class="text-xs text-muted">Profesor</span>
              </div>
            </li>
            <!-- Menu del usuario -->
            <!-- <li><a href="admin-perfil.html"><i class="icon-cog"></i>Configurar perfil</a></li> -->
            <li><a href="index.php"><i class="icon-unlock"></i>Cerrar sesi&oacute;n</a></li>
          </ul>
        </div>
      </div></div></div>
    </header>
    <!--           -->
    <!-- Contenido -->
    <!--           -->
    <div class="offcanvas-wrapper">
      <div class="container-fluid">
        <h3>Lista de solicitudes de software</h3>
        <!-- Formulario de búsqueda -->
        <form class="search-box" method="get">
          <div class="row">
            <!-- Ciclo -->
            <div class="col-lg-2 col-sm-4 form-group">
              <label for="busqueda-ciclo">Ciclo a buscar:</label>
              <select id="busqueda-ciclo" name="busqueda-ciclo" class="form-control form-control-sm">
                <option value="1">2018-2</option>
              </select>
            </div>
            <!-- Curso -->
            <div class="col-lg-4 col-sm-8 form-group">
              <label for="busqueda-curso">Curso a buscar:</label>
              <select id="busqueda-curso" name="busqueda-curso" class="form-control form-control-sm">
                <option value="">Todos los cursos</option>
                <option value="1">INF246 - Bases de Datos</option>
                <option value="2">INF227 - Desarrollo de Programas 2</option>
                <option value="3">INF265 - Aplicaciones de Ciencias de la Computación</option>
              </select>
            </div>
            <!-- Profesor -->
            <div class="col-sm form-group">
              <label for="busqueda-profesor">Profesor a buscar:</label>
              <select id="busqueda-profesor" name="busqueda-profesor" class="form-control form-control-sm" disabled="">
                <option value="2">César Aguilera Serpa</option>
              </select>
            </div>
            <!-- Botones -->
            <div class="col-sm-auto align-self-end text-right">
              <button type="submit" class="btn btn-sm btn-info" disabled><i class="icon-search"></i> Buscar</button>
            </div>
          </div>
        </form>
        <!-- Tabla de clientes -->
        <h5>Solicitudes del ciclo 2018-2</h5>
        <div class="table-responsive">
          <table class="table" id="solicitud-lista">
            <!-- Cabecera -->
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Curso</th>
                <th scope="col">Software</th>
                <th scope="col" class="celda-observaciones">Observaciones del profesor</th>
                <th scope="col">Estado</th>
                <th scope="col" class="celda-observaciones">Observaciones de Soporte</th>
                <th scope="col" class="text-right">
                  <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-solicitud"><i class="icon-plus"></i> <span class="d-sm-inline d-none">Agregar</span></button>
                </th>
              </tr>
            </thead>
            <!-- Datos -->
            <tbody id="solicitud-lista-aprobadas">
              <?php
                require_once ("../DAO/SolicitudDAO.php");
                $solicituddao = new SolicitudDAO();
                $listasolicitudes = $solicituddao->obtener_solicitudes(2);
                $index_row = 1;
                foreach ($listasolicitudes as $solicitudes) {
                  #$software = $softwaredao->buscarXId ( $solicitudes->getidsoftware );
                  echo '<th scope="row">' . $index_row . '</th> ';
                  echo '<td>' . $solicitudes[0] . '<br>' . $solicitudes[1] . '</td>';
                  echo '<td><strong>' . $solicitudes[2] . '</strong>' . $solicitudes[7] . '<br>' . $solicitudes[3] .'</td>';
                  echo '<td class="celda-observaciones">' . $solicitudes[4] . '</td>';
                  if( strcasecmp($solicitudes[5], 'aprobada') == 0 )
                    echo '<td class="text-success">Aprobada</td>';
                  elseif ( strcasecmp($solicitudes[5], 'rechazada') == 0 )
                    echo '<td class="text-danger">Rechazada</td>';
                  else
                    echo '<td>En Espera</td>';
                  echo '<td class="celda-observaciones">' . $solicitudes[6] . '</td>';
                }
              ?>
              <tr>
                <th scope="row">1</th>
                <td>INF246<br>Bases de Datos</td>
                <td><strong>Oracle SQL Developer</strong> (sin&nbsp;versión)<br>Windows 7</td>
                <td class="celda-observaciones"></td>
                <td class="text-success">Aprobada</td>
                <td class="celda-observaciones"></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>INF227<br>Desarrollo de Programas 2</td>
                <td><strong>Unreal Engine</strong> 4<br>Windows 7</td>
                <td class="celda-observaciones">Necesita estar en las máquinas del V201 y V202</td>
                <td class="text-success">Aprobada</td>
                <td class="celda-observaciones"></td>
                <td></td>
              </tr>
            </tbody>
            <tbody id="solicitud-lista-rechazadas">
              <tr>
                <th scope="row">3</th>
                <td>INF227<br>Desarrollo de Programas 2</td>
                <td><strong>Android Studio</strong> (sin&nbsp;versión)<br>Linux Mint</td>
                <td class="celda-observaciones">Necesita estar en las máquinas del V201 y V202</td>
                <td class="text-danger">Rechazada</td>
                <td class="celda-observaciones">No se pudo instalar en Linux Mint, pero pueden usar la versión instalada en Windows 7</td>
                <td></td>
              </tr>
            </tbody>
            <tbody id="solicitud-lista-pendientes">
              <!-- tr>
                <th scope="row">4</th>
                <td>INF265<br>Aplicaciones de Ciencias de la Computación</td>
                <td><strong>Anaconda</strong> 5.3<br>Windows 7</td>
                <td class="celda-observaciones">Necesita Python 3.5 o superior</td>
                <td>Pendiente</td>
                <td class="celda-observaciones"></td>
                <td class="text-right">
                  <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-original-title="Eliminar"><i class="icon-trash"></i></button>
                </td>
              </tr -->
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
