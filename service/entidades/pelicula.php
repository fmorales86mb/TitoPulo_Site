<?php
    class pelicula{
        public $id;
        public $titulo;
        public $genero;
        public $anio;
        public $autor;
        public $duracion;

        public function __construct($strArray){
            $this->id =$strArray[0];
            $this->titulo =$strArray[1];
            $this->genero =$strArray[2];
            $this->anio = $strArray[3];
            $this->autor =$strArray[4];
            $this->duracion =$strArray[5];
        }

        public function ToCSV(){
            return "$this->id; $this->titulo; $this->genero; $this->anio; $this->autor; $this->duracion;<br>";
        }

        public function ToJson(){
            return json_encode($this);
        }        
    }
?>