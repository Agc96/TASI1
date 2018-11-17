<?php

require_once ("../DaoBase/DBase.php");

class SolicitudDAO extends DBase {

    function __construct() {
        parent::__construct();
    }

    public function obtener_solicitudes($idusuario){

        $listasolicitudes = [];

        $sql = "SELECT curso.codigocurso, curso.nombrecurso, software.nombresoftware, sistemaoperativo.nombresistemaOperativo, solicitud.observacionesProfesor, solicitud.estado, solicitud.observacionesSoporte, solicitud.version
            FROM solicitud
            INNER JOIN software ON solicitud.idsoftware = software.idsoftware
            INNER JOIN curso ON solicitud.idcurso = curso.idcurso
            INNER JOIN sistemaoperativo ON solicitud.idsistemaOperativo = sistemaoperativo.idsistemaOperativo
            WHERE idusuario = :idusuario";
        
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(':idusuario', $idusuario);
        
        if (!$statement) {
            return "Error";
        } else {
            $statement->execute();
            while ($result = $statement->fetch()) {
                $listasolicitudes = $result;
                break;
            }
            return $listasolicitudes;
        }

    }

    public function agregar_solicitud(){
        
    }


}