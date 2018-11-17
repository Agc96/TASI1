<?php

require_once ("../DaoBase/DBase.php");

class UsuarioDAO extends DBase {

    function __construct() {
        parent::__construct();
    }

    public function login_user($nombreusuario, $passwordusuario){
        $login_correcto = false;

        $sql = "SELECT idusuario FROM usuario WHERE nombreusuario = :nombreusuario AND passwordusuario = :passwordusuario";
        
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(':nombreusuario', $nombreusuario);
        $statement->bindParam(':passwordusuario', $passwordusuario);
        
        if (!$statement) {
            return "Error";
        } else {
            $statement->execute();
            while ($result = $statement->fetch()) {
                $login_correcto = true;
                break;
            }
            return $login_correcto;
        }

    }

    public function getuserid($nombreusuario){
        $login_correcto = null;

        $sql = "SELECT idusuario FROM usuario WHERE nombreusuario = :nombreusuario";
        
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(':nombreusuario', $nombreusuario);
        
        if (!$statement) {
            return "Error";
        } else {
            $statement->execute();
            while ($result = $statement->fetch()) {
                $login_correcto = $result["idusuario"];
                break;
            }
            return $login_correcto;
        }

    }



    public function permisos($nombreusuario){
        $rows = [];

        $sql = "SELECT tipousuario FROM usuario WHERE nombreusuario = :nombreusuario";
        
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(':nombreusuario', $nombreusuario);
        
        if (!$statement) {
            return "Error";
        } else {
            $statement->execute();
            while ($result = $statement->fetch()) {
                $rows[] = $result;
                break;
            }
            return $rows[0][0];
        }

    }

}