<?php

session_start();
require_once '../conexion/conexion.php';

Class ModelReset {

    public $usuario;
    public $password;
    public $codigo;
    public $fechact;

    public function consulta_codigo($codigo, $fechact) {
        $sql = "SELECT * FROM codrec = ?";
        $connect = Conexion::con();
        $query = $connect->prepare($sql);
        $query->bindParam(1, $codigo);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        if ($query->rowCount() < 1) {
            $fecven = $row['fecven'];
            if ($fechact > $fecven) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function restablece_pass($codigo, $fechact) {
        $sql = "UPDATE usuario SET codven = ?, password = ? WHERE codrec = ?";
        $connect = Conexion::con();
        $query = $connect->prepare($sql);
        $query->execute();
        $query->bindValue(1, $fechact);
        $query->bindValue(2, $password);
        $query->bindValue(3, $codigo);
    }

    public function fechact() {//establece la hora y fecha actual
        date_default_timezone_set('America/Bogota');
        $this->fechact = date('Y-m-d H:i');
        return $this->fechact;
    }

}
