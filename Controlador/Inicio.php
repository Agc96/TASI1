<?php

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$userid = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

switch ($action) {
	case 'loginadmin':
		header("Location: ../view/admin-curso.html?id=" . $userid);
		break;

	case 'loginprof':
		header("Location: ../view/profesor-solicitud.php?id=" . $userid);
		break;

	case 'loginfail':
		header("Location: ../view/index.php?login=fail");
		break;
	
	default:
		header("Location: ../view/index.php?login=error");
		break;
}