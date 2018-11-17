<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBase
 *
 * @author labtel
 */
class DBase {

    public $conn = null;

    public function __construct() {
        $host = "localhost";
        $user = "root";
        #$pass = "123456";
        $pass = "";
        
        $db = "tasi1";
        $this->conn = new PDO("mysql:host=$host;dbname=$db;port=3306;charset=utf8;", $user,$pass);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function get_conexion() {
        $host = "localhost";
        $user = "root";
        #$pass = "123456";
        $pass = "";
        
        $db = "tasi1";
        $conexion = new PDO("mysql:host=$host;dbname=$db;port=3306;charset=utf8;", $user,$pass);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $conexion;
    }

}
