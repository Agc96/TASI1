<?php

require_once '../DAO/UsuarioDAO.php';
$usuariodao = new UsuarioDAO();

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

switch ($action) {
    case 'login':
    	if( $usuariodao->login_user( $_POST['login-username'], $_POST['login-password'] ) ){
    		if ( $usuariodao->permisos($_POST['login-username']) == 'admin' )
    			header("Location: ./Inicio.php?action=loginadmin");
    		else
    			header("Location: ./Inicio.php?action=loginprof");
    	}
    	else
    		header("Location: ./Inicio.php?action=loginfail");
    	break;

    default :
    	header("Location: ./Inicio.php");
    	break;

}