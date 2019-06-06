<?php
    class Pelicula{
        public $id;
        public $titulo;
        public $genero;
        public $anio;
        public $autorId;
        public $duracion;
        public $img;

        public function __construct($strArray){            
            $this->id =$strArray["id"];
            $this->titulo =$strArray["titulo"];
            $this->genero = array();
            $this->anio = $strArray["anio"];
            $this->autorId =$strArray["autorId"];
            $this->duracion =$strArray["duracion"];
            $this->img = $strArray["img"];
        }

        public function ToJson(){
            return json_encode($this);
        }        
    }
?>