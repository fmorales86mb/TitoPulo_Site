<?php    
    include_once "./04-Acciones/post.php";
    include_once "./04-Acciones/get.php";
    
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    $solicitud = $_SERVER["REQUEST_METHOD"];    

    switch($solicitud){
        case "GET":             
            $caso = isset($_GET["caso"])?$_GET["caso"]:null;

            switch($caso){
                case "ListaAutor":                            
                    echo Get::ListaAutor();             
                    break;   
                case "TraerAutor":                            
                    echo Get::TraerAutor($_GET["id"]);             
                    break;            
                default:
                    echo "Error Get entidad.";
                    break;
            }                      
            break;

        case "POST":     
            $caso = isset($_POST["caso"])?$_POST["caso"]:null;
       
            switch($caso){
                case "guardarAutor":                    
                    echo Post::GuardarAutor($_POST);
                    break;
                default:
                    echo "Error Post entidad.";
                    break;
            }
            break;
        
        default:
            echo "Defalut HTTP.";
            break;        
    }
?>