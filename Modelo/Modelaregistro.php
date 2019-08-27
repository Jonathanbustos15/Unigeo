    <?php

class Aregistro {

    private $idusuario;
    private $nombre;
    private $apellido;
    private $fecnacimiento;
    private $localidad;
    private $sexo;
    private $email;
    private $password;

    public function __construct() {
        
    }

    function getIdusuario() {
        return $this->idusuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getFecnacimiento() {
        return $this->fecnacimiento;
    }

    function getLocalidad() {
        return $this->localidad;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setFecnacimiento($fecnacimiento) {
        $this->fecnacimiento = $fecnacimiento;
    }

    function setLocalidad($localidad) {
        $this->localidad = $localidad;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

}
