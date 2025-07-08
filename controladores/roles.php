<?php
require_once "../modelos/Roles.php";

$rol = new Roles();

$idrol = isset($_POST["idrol"]) ? limpiarCadena($_POST["idrol"]) : "";
$nombre = isset($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) : "";
$descripcion = isset($_POST["descripcion"]) ? limpiarCadena($_POST["descripcion"]) : "";

switch ($_GET["op"]) {
    case 'guardaryeditar':
        if (empty($idrol)) {
            $rspta = $rol->insertar($nombre, $descripcion);
            echo $rspta ? "Rol registrado con éxito" : "No se pudo registrar el rol";
        } else {
            $rspta = $rol->editar($idrol, $nombre, $descripcion);
            echo $rspta ? "Rol editado con éxito" : "No se pudo editar el rol";
        }
        break;

    case 'activar':
        $rspta = $rol->activar($idrol);
        echo $rspta ? "Rol activado" : "No se pudo activar el rol";
        break;

    case 'desactivar':
        $rspta = $rol->desactivar($idrol);
        echo $rspta ? "Rol desactivado" : "No se pudo desactivar el rol";
        break;

    case 'mostrar':
        $rspta = $rol->mostrar($idrol);
        echo json_encode($rspta);
        break;

    case 'listar':
        $rspta = $rol->listar();
        $data = array();

        while ($reg = $rspta->fetch_object()) {
            $data[] = array(
                "0" => $reg->nombre,
                "1" => $reg->descripcion,
                "2" => ($reg->condicion) ? 'Activo' : 'Inactivo'
            );
        }

        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;

    case 'select':
        $rspta = $rol->select();
        while ($reg = $rspta->fetch_object()) {
            echo '<option value="' . $reg->idrol . '">' . $reg->nombre . '</option>';
        }
        break;
}
