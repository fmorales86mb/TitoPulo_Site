<?php
    include_once "./acciones/peliculas.php";

    //var_dump($_SERVER);
    $solicitud = $_SERVER["REQUEST_METHOD"];
    //var_dump($solicitud);
    
    switch($solicitud){
         case "GET":
            echo GetPeliculasCSV();
            break;
        case "POST":
            //TomarDatosPost();
            break;
        case "PUT":
            break;
        case "DELETE":        
            break;
        default:
            break;    
    }

?>