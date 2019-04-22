<?php
    include_once "./acciones/peliculas.php";

    // var_dump($_SERVER);
    // var_dump($_GET);
    $solicitud = $_SERVER["REQUEST_METHOD"];
    //var_dump($solicitud);
    
    switch($solicitud){
         case "GET":
            if(count($_GET) > 0){                                
                echo GetPeliculaById($_GET["id"]);
            }
            else{
                echo GetPeliculasCSV();
            }            
            break;

        case "POST":                         
            echo PostPelicula($_POST);
            break;

        case "PUT":
            break;

        case "DELETE":        
            break;

        default:
            break;    
    }

?>