<?php
    include_once "./02-Entidades/Autor.php";
    include_once "./03-DAO/AutorDAO.php";

    class Get{

        // Devuelve la lista de autores en formato Json.
        public static function ListaAutor(){
            $lista = AutorDAO::GetAll();
            $strRespuesta;                              
  
            if(count($lista)<1){
                $strRespuesta = "No existen registros.";
            }
            else{
                for($i=0; $i<count($lista); $i++){
                    $strRespuesta[] = $lista[$i];
                }                
            }
            
            return json_encode($strRespuesta);
        }        

        // Devuelve un autor por id en formato Json.
        public static function TraerAutor($id){
            $obj = AutorDAO::GetById($id);            
            return json_encode($obj);
        }        
    }
?>