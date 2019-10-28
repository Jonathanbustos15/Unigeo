<?php

require("config.php");
session_start();

class conexion {

    public static function con() {

        try {

            $con = new PDO('pgsql:host=' . DBHOST . '; dbname=' . DBNAME . '; dbname=' . DBPORT, DBUSER, DBPASS);

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

try {

    $conn = new PDO('pgsql:host=' . DBHOST . '; dbname=' . DBNAME . '; port=' . DBPORT, DBUSER, DBPASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
$query = "select * FROM usuario";
$sql = $conn->prepare($query);
$sql->execute();
?>
