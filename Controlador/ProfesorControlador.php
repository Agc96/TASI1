<?php

require_once '../DAO/SolicitudDAO.php';
$solicituddao = new SolicitudDAO();

#$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

switch ($action) {
    default:
        $solicituddao->agregar_solicitud($_POST['solicitud-curso'], $_POST['solicitud-software'], $_POST['solicitud-version'], $_POST['solicitud-so'], $_POST['solicitud-observaciones']);
        header("Location: ./Inicio.php?action=loginprof&id=2");
        break;
}