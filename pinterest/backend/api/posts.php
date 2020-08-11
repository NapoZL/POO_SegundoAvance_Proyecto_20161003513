<?php
    header("Content-Type: application/json"); 
    include_once("../class/class-post.php");
    $_POST = json_decode(file_get_contents('php://input'),true);
    switch($_SERVER['REQUEST_METHOD']){
        case 'POST':
            $post = new Post(
                $_POST['codigoPost'],
                $_POST['codigoUsuario'],
                $_POST['contenidoPost'],
                $_POST['imagen'],
                $_POST['cantidadLikes']
            );
            $post->guardarPost();
        break;
        case 'GET':
            if (isset($_GET['idUsuario'])){ //retorna posts de usuarios que sigue
                Post::obtenerPosts($_GET['idUsuario']);
            }if (isset($_GET['idPost'])){ //retorna un post

            }else{

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