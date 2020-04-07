<?php

class Conexion {

    private static $conexion;

    public static function con() {

        if (!isset($conexion)) {

            try {
                include_once 'config.php';

                $conexion = new PDO('mysql:host=' . DBHOST . '; dbname=' . DBNAME . '; port=' . DBPORT, DBUSER, DBPASS);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->exec("SET NAMES 'UTF8'");
                return $conexion;
            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage() . "<br>";
            }
        }
    }

    public static function cerrarConexion() {
        if (isset(self::$conexion)) {
            self::$conexion = null;
        }
    }

    public static function obtenerConexion() {

        if (isset(self::$conexion)) {
            echo "Conexion establecida";
        } else {
            echo "No se pudo conectar con la base de datos postrgresql";
        }
    }

}

?>