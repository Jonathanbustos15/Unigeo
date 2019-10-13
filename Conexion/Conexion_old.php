<?php

require("config.php");
session_start();

class conexion {

    public static function con() {

        try {

            $con = new PDO('mysql:host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASS);

            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            

            $con->exec("SET CHARACTER SET utf8");

            return $con;
        } catch (Exception $e) {

            'Error: ' . $e->getMessage();
            $_SESSION["ermensaje"] = $e->getMessage();
            return $_SESSION["ermensaje"];
        }
    }

}

?>
