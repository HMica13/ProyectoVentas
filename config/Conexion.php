<?php
//LLamo al archivo global.php
require_once "global.php";

//Creo una variable de tipo conexión para 
//conectarme a la base de datos
$conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//creamos una variable para almacenar la conexión
mysqli_query($conexion, 'SET NAMES "'.DB_ENCODE.'"');
//Verificamos si la conexión a la base de datos fue exitosa
if(mysqli_connect_errno())
{
    printf("Fallo  la conexion a la base de datos: %s\n", mysql_connect_error());
    exit();
}else{
    printf("Conexión a la base de datos exitosa: %s\n", DB_NAME);
}

//Definir un conjunto de funciones que nos ayuden a la consulta de la base de datos
if(!function_exists('ejecutarConsulta')){
    function ejecutarConsulta($sql){
        global $conexion;
        //Creo una variable para almacenar el resultado de la consulta
        $query = $conexion->query($sql);
        //Retorno el resultado de la consulta
        return $query

    }

    //Creo una función que me permita obtener una sola fila de una tabla
    //de la base de datos
    function ejecutarConsultaSimpleFila($sql){
        // Conectamos a la base de datos
        global $conexion;
        //Creo una variable para almacenar el resultado de la consulta
        $query=$conexion->query($sql);
        //Obtengo una fila de la consulta
        $row=$query->fetch_assoc();
        //Retorno la fila obtenida
        return $row;


    }
    //creo una función para obtener el id de una consulta o un registro
    function ejecutarConsulta_retornarID($sql){
        //Conectamos a la base de datosglobal
        global $conexion;
        //Creo una variable donde guardo la consulta
        $query = $conexion->query($sql);
        return $conexion->insert_id;

    }
    //Creamos una función para limpiar los campos de los input
    function limpiarCadena($str){
        //conectamos a la base de datos
        global $conexion;
        //Retornamos el valor del campo limpio
        $str =mysqli_real_escape_string($conexion, trim($str));
        //retornamos el valor
        return htmlspecialchars($str);
    }

}







?>