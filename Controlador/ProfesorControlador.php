<?php

require_once '../DAO/SolicitudDAO.php';
$solicituddao = new SolicitudDAO();

#$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

switch ($action) {
    default:
        $solicituddao->agregar_solicitud($_POST['login-username']);
        break;

    case 'login':
    	if( $usuariodao->login_user( $_POST['login-username'], $_POST['login-password'] ) ){
            $userid = $usuariodao->getuserid( $_POST['login-username']);
    		if ( $usuariodao->permisos($_POST['login-username']) == 'admin' )
    			header("Location: ./Inicio.php?action=loginadmin&id=" . strval($userid));
    		else
    			header("Location: ./Inicio.php?action=loginprof&id=" . strval($userid));
    	}
    	else
    		header("Location: ./Inicio.php?action=loginfail");
    	break;

    default :
    	header("Location: ./Inicio.php");
    	break;

}