<?php

require_once '../conexion/conexion.php';

class ModelRegistro {

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $fecha;
    public $id_ciudad;
    public $direccion;
    public $usuario;
    public $telefono;
    public $password;
    public $tipo;
    public $estado;
    public $mensaje = false;

    function insertar() {
        try {
            $conect = conexion::con();
            $fecha = date("Y-m-d", strtotime($this->fecnacimiento));
            $pass = password_hash($this->password, PASSWORD_DEFAULT);
            $sql = "insert into usuario (id_usuario, nombre_usuario, apellido_usuario, fecha_nacimiento, id_ciudad, direccion_usuario,"
                    . " telefono_usuario, email_usuario, password, id_tipo_usuario, estado)";
            $sql .= " VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?)";
            $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $conect->prepare($sql);
            $query->bindValue(1, 1);
            $query->bindValue(2, $this->nombre);
            $query->bindValue(3, $this->apellido);
            $query->bindValue(4, $fecha);
            $query->bindValue(5, 1);
            $query->bindValue(6, 1);
            $query->bindValue(7, 2564558);
            $query->bindValue(8, $this->email);
            $query->bindValue(9, $pass);
            $query->bindValue(10,1);
            $query->bindValue(11, 1);
            $query->execute();
            if ($query) {
                $this->mensaje = true;
            }else{$_SESSION["ermensaje"] = 'Error: ' . $e->getMessage();}
        } catch (Exception $e) {
            $_SESSION["ermensaje"] = 'Error: ' . $e->getMessage();
        }
    }

    function validar_clave($clave, &$error_clave) {
        if (strlen($clave) < 6) {
            $error_clave = "La clave debe tener al menos 6 caracteres";
            return false;
        }
        if (strlen($clave) > 16) {
            $error_clave = "La clave no puede tener más de 16 caracteres";
            return false;
        }
        if (!preg_match('`[a-z]`', $clave)) {
            $error_clave = "La clave debe tener al menos una letra minúscula";
            return false;
        }
        if (!preg_match('`[A-Z]`', $clave)) {
            $error_clave = "La clave debe tener al menos una letra mayúscula";
            return false;
        }
        if (!preg_match('`[0-9]`', $clave)) {
            $error_clave = "La clave debe tener al menos un caracter numérico";
            return false;
        }
        $error_clave = "";
        return true;
    }

}
