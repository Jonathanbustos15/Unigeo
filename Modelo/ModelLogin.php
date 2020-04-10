
<?php

session_start();
require_once '../conexion/conexion.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';
require_once '../controlador/funhelp.php';

class ModeloLogin {

    public $usuario;
    public $password;
    public $mensaje;
    public $fecven;
    public $nombre;
    public $apellido;
    public $tip_usuario;

    public function checklogin($usuario, $password) {
        try {
            //se verifica que la direccion de correo este registrada
            $sql = "select * FROM usuario WHERE email_usuario = ?";
            $connect = Conexion::con();
            $query = $connect->prepare($sql);
            $query->bindParam(1, $usuario, PDO::PARAM_STR);
            $query->execute();
            $row = $query->fetch(PDO::FETCH_ASSOC);
            if ($query->rowCount() < 1) {
                $_SESSION['mensajeu'] = "Usuario o contraseña incorrecta intente nuevamente";
                header('Location: ../vistas/Login.php');
            } else {
                $hash = $row['password'];
                if (password_verify($password, $hash)) {
                    $nombre = $row['nombre_usuario'];
                    $apellido = $row['apellido_usuario'];
                    $tip_usuario = $row['id_tipo_usuario'];
                    $_SESSION['usuario'] = $nombre . " " . $apellido;
                    $_SESSION['tipousuario'] = $tip_usuario; //capturamos el tipo de usuario
                    $_SESSION['login'] = true;
                    return true;
                } else {
                    $_SESSION['mensajeu'] = "Usuario o contraseña incorrecta intente nuevamente";
                    header('Location: ../vistas/Login.php');
                }
            }
        } catch (Exception $e) {
            $_SESSION['mensajeu'] = "El mensaje no puede ser enviado. Mailer Error: " . $e->getMessage();
        }
    }

    public function recpass($usuario) {//Verifica que el usuario este registrado en la base de datos
        try {

            $sql = "select * FROM usuario WHERE email_usuario = ?";
            $connect = conexion::con();
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $connect->prepare($sql);
            $query->bindParam(1, $usuario, PDO::PARAM_STR);
            $query->execute();
            $row = $query->fetch(PDO::FETCH_ASSOC);

            if ($query->rowCount() < 1) {
                $_SESSION['mensajeu'] = "La direccion de correo no esta registrada en el sistema";
                header('Location: ../vistas/Login.php');
            } else {
                $rs = array("correo" => $row['email_usuario'], "nombre" => $row['nombre_usuario'], "apellido" => $row['apellido_usuario']);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            header('Location: ../vistas/Login.php');
        }

        return $rs;
    }

    public function getpermiso($tip_usuario) {
        try {
            $sql = "SELECT * FROM permisos Where fkid_tipo_usuario=?";
            $connect = conexion::con();
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $connect->prepare($sql);
            $query->bindParam(1, $tip_usuario);
            $query->execute();
            $permisos = $query->fetchAll();
            if ($query->execute()) {
                $_SESSION['permisos'] = $permisos;
                return $permisos;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function fechact() {//establece la hora y fecha actual
        date_default_timezone_set('America/Bogota');
        $this->fechact = date('Y-m-d H:i');
        return $this->fechact;
    }

    public function fechaven() {//Establece la hora de vencimiento del codigo de reseteo
        date_default_timezone_set('America/Bogota');
        $fechact = date('Y-m-d H:i');
        $fechat = strtotime('+1 hour', strtotime($fechact));
        $fechaven = date('Y-m-d H:i', $fechat);
        return $fechaven;
    }

    public function token() {//genera un codigo aleatorio
        $this->token = bin2hex(random_bytes(5));
        return $this->token;
    }

    public function sendmail($address, $nombre, $token) {
        $template = file_get_contents('../vistas/template.php');
        $template = str_replace("{{name}}", $nombre, $template);
        $template = str_replace("{{action_url_2}}", $token, $template);
        $template = str_replace("{{action_url_1}}", 'http://localhost:8850/Unigeo/vistas/reset.php', $template);
        $template = str_replace("{{year}}", date('Y'), $template);
        $template = str_replace("{{operating_system}}", funhelp::getOS(), $template);
        $template = str_replace("{{browser_name}}", funhelp::getBrowser(), $template);


        try {

            $mail = new PHPMailer(TRUE);
            $mail->setLanguage('es', 'src/phpmailer.lang-es.php');
            $mail->Body = $template; //asigna a $body el contenido del correo electrónico
            $mail->SMTPDebug = 0; // Activar los mensajes de depuración, 
            $mail->IsSMTP(); // Indica que se usará SMTP para enviar el correo
            $mail->Host = "smtp.gmail.com"; // Asigna la dirección smtp
            $mail->SMTPAuth = true; // Activar autenticación segura a traves de SMTP, necesario para gmail
            $mail->Username = "unigeou@gmail.com"; //Indica la direccion de correo de envio
            $mail->Password = "unigeo01**"; //password
            $mail->SMTPSecure = "tls"; // Indica que la conexión segura se realizará mediante TLS
            $mail->Port = 587; // Asigna el puerto usado por GMail para conexion con su servidor SMTP
            $mail->SetFrom('unigeou@gmail.com', 'Unigeo'); //Asignar la dirección de correo y el nombre del contacto que aparecerá cuando llegue el correo
            $mail->Subject = "Recuperacion de contraseña - Unigeo"; //Asignar el asunto del correo
            $mail->MsgHTML($template);
            $mail->isHTML(true); //enviar correo con formato HTML 
            $mail->AddAddress($address, $nombre); //Indica aquí la dirección que recibirá el correo que será enviado
            $mail->CharSet = 'UTF-8';
            $mail->send();
            $_SESSION['mensajer'] = "Mensaje enviado correctamente";
            header('Location: ../vistas/Login.php');
        } catch (Exception $e) {

            $_SESSION['mensajeu'] = "El mensaje no puede ser enviado. Mailer Error: {$mail->ErrorInfo}";
            header('Location: ../vistas/Login.php');
        }
    }

    public function newpas($usuario, $token, $fecven) {
        try {
            $sql = "UPDATE usuario SET codrec=?, codven=? WHERE email_usuario=?";
            $connect = conexion::con();
            //$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $connect->prepare($sql);
            $query->bindParam(1, $token, PDO::PARAM_STR);
            $query->bindParam(2, $fecven, PDO::PARAM_STR);
            $query->bindParam(3, $usuario, PDO::PARAM_STR);
            $query->execute();
            if ($query->execute()) {
                return true;
            }
        } catch (Exception $exc) {
            $_SESSION['mensajeu'] = "El mensaje no puede ser enviado. Mailer Error: " . $e->getMessage();
            header('Location: ../vistas/Login.php');
        }
    }

}
