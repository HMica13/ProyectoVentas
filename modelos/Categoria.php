<?php
//Incluimos el archivo a la conexión a la base de datos
//../ sale de unnivel del lugar de donde estamos
require "../config/Conexion.php";

//Creo la case Categoria
class Categoria{
    //Definimos un constructor
    //El constructor se va a ejecutar por primera vez
    //al ejecutar la clase 
    public function __construct(){

    }
    //Definimos un método para insertar una 
    // categoria a la base de datos
    public function insertar($nombre, $descripcion){
        //Definimos una variable para almacenar la consulta
        $sql = "INSERT INTO categoria (nombre, descripcion, condicion)
        VALUES ($nombre, $descripcion, '1')";
        //retornamos el resultado de la consulta
        return ejecutarConsulta($sql);
    }
    //Definimos un método para editar una categoria
    public function editar($idcategoria, $nombre, $descripcion){
        //Definimos una variable para almacenar la consulta
        $sql = "UPDATE categoria SET nombre='$nombre', descripcion='$descripcion'
        WHERE idcategoria ='$idcategoria'";
        return ejecutarConsulta($sql);
    }
    //Definimos una función para activar una categoria
    public function activar($idcategoria){
        //Definimos una cariable para almacenar la consulta
        $sql="UPDATE categoria SET condicion = 1 
        WHERE idcategoria = '$idcategoria'";
        return ejercutarConsulta($sql);
    }
    //definimos una función para desactivar la categoria
    public function desactivar($idcategoria){
        //Definimos una variable para almacenar la consulta
        $sql="UPDATE categoria SET condicion =0
        WHERE idcategoria = '$idcategoria'";
        //retornamos la consulta
        return ejecutarConsulta($sql);
    }
    //Definimos una consulta para mostrar una fila de la base de datos
    public function mostrar($idcategoria){
        //Definimos una variable para almacenar la consulta
        $sql= "SELECT * FROM categoria WHERE idcategoria= '$idcategoria'";
        //Retornamos la consulta
        return ejecutarConsultaSimpleFila($sql);
    }

    //Definimos una funcion para listar las categorias
    public function listar(){
        //definimos una variable donde se va a guardar la consulta
        $sql = "SELECT * FROM categoria";
        //retornamos la consulta
        return ejecutarConsulta($sql);
    }
    //Definimos una función para listar las categorias activas
    public function select(){
        $sql = "SELECT * FROM categoria WHERE condicion =1";
        //retornamos la consulta
        return ejecutarConsulta($sql);
    }
}


?>