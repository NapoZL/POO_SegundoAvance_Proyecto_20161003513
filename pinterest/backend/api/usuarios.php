<?php
    header("Content-Type: application/json"); 
    include_once("../class/class-usuario.php");
    switch($_SERVER['REQUEST_METHOD']){
        case 'POST':
            //guardar
        break;
        case 'GET':
            if (isset($_GET['id'])){
                Usuario::obtenerUsuario($_GET['id']);
                //$resultado["mensaje"] = "Retornar el usuario con el id: ". $_GET['id'];
                //echo json_encode($resultado);
            }else{
                Usuario::obtenerUsuarios();
                //$resultado["mensaje"] = "Retornar todos los usuarios";
                //echo json_encode($resultado);
            }     
        break;
        case 'PUT':
            //Actualizar
        break;
        case 'DELETE':
            //eliminar
        break;
    }

?>