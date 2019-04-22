<?php
    // include
    include_once "funcionesArch.php";
    include_once "./entidades/pelicula.php";   
    
    $urlCsv = "./data/peliculas.csv";

    // JSON con array de peliculas.
    function GetPeliculasCSV()
    { 
        global $urlCsv;

        $matrizPeliculas = ExtraerArrayArchCsv($urlCsv);
        $peliculasJ = null;
        
        $i = 0;
        foreach($matrizPeliculas as $pelicula){
            $peliculasJ[$i] = json_encode($pelicula);
            $i++;
        }
        
        return json_encode($peliculasJ);
    }

    // JSON con pelicula.
    function GetPeliculaById($id)
    {
        global $urlCsv;

        $fila = GetRowById($urlCsv, $id);
        $pelicula = new pelicula($fila);

        return json_encode($pelicula);
    }

    function PostPelicula($pelicula)
    {
        global $urlCsv;        
        $objPelicula = new pelicula($pelicula);        
        
        EscribirLineaArch($urlCsv, json_encode($pelicula));
    }
?>