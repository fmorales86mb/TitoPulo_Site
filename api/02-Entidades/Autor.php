<?php   
    class Autor{        
        public $id;
        public $nombre;
        public $apellido;
        public $nacionalidad;                            
                
        public function __construct($strArray){                       
            // Para que el FETCH_ALL instancie correctamente.
            if($strArray !== null){                 
                $this->id = isset($strArray["id"])?$strArray["id"]:null;           
                $this->nombre = $strArray["nombre"];
                $this->apellido = $strArray["apellido"];     
                $this->nacionalidad = $strArray["nacionalidad"];         
            }            
        }
    }
?>