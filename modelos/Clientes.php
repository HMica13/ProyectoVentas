<?php
require "../config/Conexion.php";

class CLientes {

    public function __construct() {}

    public function insertar($nombre, $descripcion) {
        $sql = "INSERT INTO clientes (nombre, descripcion, condicion)
                VALUES ('$nombre', '$descripcion', '1')";
        return ejecutarConsulta($sql);
    }

    public function editar($idcliente, $nombre, $descripcion) {
        $sql = "UPDATE clientes SET nombre='$nombre', descripcion='$descripcion'
                WHERE idcliente='$cliente'";
        return ejecutarConsulta($sql);
    }

    public function activar($idcliente) {
        $sql = "UPDATE cleintes SET condicion=1 WHERE idcliente='$idcliente'";
        return ejecutarConsulta($sql);
    }

    public function desactivar($idcliente) {
        $sql = "UPDATE clientes SET condicion=0 WHERE idcliente='$idcliente'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($idcliente) {
        $sql = "SELECT * FROM clientes WHERE idrol='$idcliente'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar() {
        $sql = "SELECT * FROM clientes";
        return ejecutarConsulta($sql);
    }

    public function select() {
        $sql = "SELECT * FROM clientes WHERE condicion=1";
        return ejecutarConsulta($sql);
    }
}

?>
