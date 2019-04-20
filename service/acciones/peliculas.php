<?php
    // include
    include_once "funcionesArch.php";
    include_once "./entidades/pelicula.php";
    
    // get
    function GetPeliculasCSV(){ 
        $urlCsv = "./data/peliculas.csv";       
        $matrizPeliculas = ExtraerArrayArchCsv($urlCsv);
        $peliculasJ = null;
        
        $i = 0;
        foreach($matrizPeliculas as $pelicula){
            $peliculasJ[$i] = new pelicula($pelicula);
            $i++;
        }

        //var_dump(json_encode($peliculasJ));
        return json_encode($peliculasJ);
    }

?>