<?php
    class Genero{
        public $id;
        public $descripcion;
        
        public function __construct($strArray){            
            $this->id =$strArray["id"];
            $this->descripcion =$strArray["descripcion"];
        }

        public function ToJson(){
            return json_encode($this);
        }        
    }
?>