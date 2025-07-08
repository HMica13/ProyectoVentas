<?php
require_once "../modelos/Clientes.php";

$cliente = new Clientes();

$cliente = isset($_POST["idcliente"]) ? limpiarCadena($_POST["idcliente"]) : "";
$nombre = isset($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) : "";
$descripcion = isset($_POST["descripcion"]) ? limpiarCadena($_POST["descripcion"]) : "";

switch ($_GET["op"]){
    case 'guardaryeditar':
        if (empty($idcliente)){
            $rspta = $cliente->insertar($nombre, $descripcion);
            echo $rspta ? "Cliente registrado con éxito" : "No se pudo registrar el cliente";
        } else {
            $rspta = $cliente->editar($idcliente, $nombre, $descripcion);
            echo $rspta ? "Cliente editado con éxito" : "No se pudo editar el cliente";
        }
        break;

    case 'activar':
        $rspta = $cliente->activar($idcliente);
        echo $rspta ? "Cliente activado" : "No se pudo activar el cliente";
        break;

    case 'desactivar':
        $rspta = $cliente->desactivar($idcliente);
        echo $rspta ? "Cliente desactivado" : "No se pudo desactivar el cliente";
        break;

    case 'mostrar':
        $rspta = $cliente->mostrar($idcliente);
        echo json_encode($rspta);
        break;

  
?>
