<?php

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

switch ($action) {
	case 'loginadmin':
		header("Location: ../view/admin-curso.html");
		break;

	case 'loginprof':
		header("Location: ../view/profesor-solicitud.html");
		break;

	case 'loginfail':
		header("Location: ../view/index.php?login=fail");
		break;
	
	default:
		header("Location: ../view/index.php?login=fail");
		break;
}