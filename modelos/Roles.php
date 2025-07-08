<?php
require "../config/Conexion.php";

class Roles {

    public function __construct() {}

    public function insertar($nombre, $descripcion) {
        $sql = "INSERT INTO roles (nombre, descripcion, condicion)
                VALUES ('$nombre', '$descripcion', '1')";
        return ejecutarConsulta($sql);
    }

    public function editar($idrol, $nombre, $descripcion) {
        $sql = "UPDATE roles SET nombre='$nombre', descripcion='$descripcion'
                WHERE idrol='$idrol'";
        return ejecutarConsulta($sql);
    }

    public function activar($idrol) {
        $sql = "UPDATE roles SET condicion=1 WHERE idrol='$idrol'";
        return ejecutarConsulta($sql);
    }

    public function desactivar($idrol) {
        $sql = "UPDATE roles SET condicion=0 WHERE idrol='$idrol'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($idrol) {
        $sql = "SELECT * FROM roles WHERE idrol='$idrol'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar() {
        $sql = "SELECT * FROM roles";
        return ejecutarConsulta($sql);
    }

    public function select() {
        $sql = "SELECT * FROM roles WHERE condicion=1";
        return ejecutarConsulta($sql);
    }
}

?>
