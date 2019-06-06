<?php
    include_once "./02-Entidades/Autor.php";
    include_once "./03-DAO/AutorDAO.php";

    class Post{
        
        // Guarda un Autor en la db.
        public static function GuardarAutor($data){                                            
            return AutorDAO::Insert($data);
        }  
        
        // public static function BorrarAlumno($data){                                            
        //     return AlumnoDAO::Delete($data);
        // }  

        // public static function ModificarAlumno($data){                                            
        //     return AlumnoDAO::Update($data);
        // }  
    }

?>