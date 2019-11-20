<?php

session_start();
require_once '../conexion/conexion.php';

Class ModelReset {

    public $usuario;
    public $password;
    public $codigo;
    public $fechaact;
    public $fecven;

    public function consulta_codigo($codigo, $fechaact) {
        $sql = "SELECT * FROM usuario WHERE codrec = ?";
        $connect = Conexion::con();
        $query = $connect->prepare($sql);
        $query->bindParam(1, $codigo);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        if ($query->rowCount() < 1) {
            return false;
        } else {
            $fecven = $row['codven'];
            if ($fechaact < $fecven) {
                return true;
            }
        }
    }


    public function restablece_pass($codigo, $fechaact, $password) {
        $sql = "UPDATE usuario SET codven = ?, password = ? WHERE codrec = ?";
        $connect = Conexion::con();
        $query = $connect->prepare($sql);
        $query->bindValue(1, $fechaact);
        $query->bindValue(2, $password);
        $query->bindValue(3, $codigo);
        $query->execute();
    }

    public
            function fechact() {//establece la hora y fecha actual
        date_default_timezone_set('America/Bogota');
        $this->fechact = date('Y-m-d H:i');
        return $this->fechact;
    }

}
