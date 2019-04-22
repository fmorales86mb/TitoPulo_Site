<?php
    class pelicula{
        public $id;
        public $titulo;
        public $genero;
        public $anio;
        public $autor;
        public $duracion;

        public function __construct($strArray){            
            $this->id =$strArray["id"];
            $this->titulo =$strArray["titulo"];
            $this->genero =$strArray["genero"];
            $this->anio = $strArray["anio"];
            $this->autor =$strArray["autor"];
            $this->duracion =$strArray["duracion"];
        }

        public function ToCSV(){
            return "id:$this->id;titulo:$this->titulo;genero:$this->genero;anio:$this->anio;autor:$this->autor;duracion:$this->duracion";
        }

        public function ToJson(){
            return json_encode($this);
        }        
    }
?>