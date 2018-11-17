<?php

require_once ("../DaoBase/DBase.php");

class CursoDAO extends DBase {

    function __construct() {
        parent::__construct();
    }

    public function obtener_cursos(){

        $listasolicitudes = [];

        $sql = "SELECT curso.codigocurso, curso.nombrecurso
            FROM curso ;""
        
        $statement = $this->conn->prepare($sql);
        
        if (!$statement) {
            return "Error";
        } else {
            $statement->execute();
            while ($result = $statement->fetch()) {
                $auxiliar = [];
                $auxiliar[] = $result[0];
                $auxiliar[] = $result[1];                
                $listacursos[] = $auxiliar;
                break;
            }
            return $listacursos;
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