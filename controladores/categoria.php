<?php
//Incluimos el archivo Categoria.php
require_once "../modelos/Categoria.php";
//Instanciamos la clase Categoria
$categoria= new Categoria();

//Definimos una variable para almacenar el idcategoria
$idcategoria=isset($_POST["idcategoria"]) ? limpiarCadena($_POST["idcategoria"]) : "";
//Definimos una variable para alamcenar el nombre
$nombre = isset($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]):"";
//Definimos una variable para almacenar la descripción
$descripcion = isset($_POST["descripcion"]) ? limpiarCadena($_POST["descripcion"]) : "";

//Generamos un switch para determinar la acción a realizar
switch ($_GET["op"]){
    case 'guardaryeditar':
        if(empty($idcategoria)){
            $rspta = $categoria->insertar($nombre, $descripcion);
            echo $rspta ? "Categoria registrada con éxito" : "No se pudo registrar la categoria a la base de datos";
        }
        else{
            $rspta = $categoria->editar($idcategoria, $nombre, $descripcion);
            echo $rspta ? "Categoria editada con éxito" : "No se pudo editar la categoria";
        }

        break;
        //Si elijo la opcion desactivar ejecuta esta seccion del codigo
        case 'desactivar':
            $rspta = $categoria->desactivar($idcategoria);
            echo $rspta ? "Categoria desactivada" : "No se pudo desactivar";
            break;
            case 'activar':
                $rspta = $categoria->activar($idcategoria);
                echo $rspta ? "Categoria activada" : "No se pudo activar";
                case 'mostrar':
                    $rspta = $categoria->motrar ($idcategoria);
                    //Convertimos el resultado en json
                    echo json_encode($rspta);
                    break;


        








?>