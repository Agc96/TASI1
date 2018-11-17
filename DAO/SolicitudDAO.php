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
                $auxiliar = [];
                $auxiliar[] = $result[0];
                $auxiliar[] = $result[1];
                $auxiliar[] = $result[2];
                $auxiliar[] = $result[3];
                $auxiliar[] = $result[4];
                $auxiliar[] = $result[5];
                $auxiliar[] = $result[6];
                $auxiliar[] = $result[7];
                $listasolicitudes[] = $auxiliar;
                break;
            }
            return $listasolicitudes;
        }

    }

    public function agregar_software($nombresoftware){
        $idsoftware = 0;
        $sql = "INSERT INTO software (nombresoftware) values (:nombresoftware)";
        
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(':nombresoftware', $nombresoftware);

        if (!$statement) {
            return 0;
        } else {
            $statement->execute();
        }

        $sql = "SELECT * FROM software WHERE nombresoftware = :nombresoftware";
        
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(':nombresoftware', $nombresoftware);

        if (!$statement) {
            return 0;
        } else {
            $rpt = [];
            $statement->execute();
            while ($result = $statement->fetch()) {
                $rpt[] = $result;
                break;
            }
            return $rpt[0][0];
        }

        return 0;
    }

    public function agregar_solicitud($idcurso, $nombresoftware, $version, $idso, $observaciones){
        if($version == "")
            $version = "(sin version)";

        $idsoftware = $this->agregar_software($nombresoftware);

        $sql = "INSERT INTO solicitud (idcurso, idsoftware, version, idsistemaOperativo, observacionesProfesor, estado, idusuario) values (:idcurso, :idsoftware, :version, :idso, :observaciones, 'En Espera', 2)";
        
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(':idcurso', $idcurso);
        $statement->bindParam(':idsoftware', $idsoftware);
        $statement->bindParam(':version', $version);
        $statement->bindParam(':idso', $idso);
        $statement->bindParam(':observaciones', $observaciones);

        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
    }


}