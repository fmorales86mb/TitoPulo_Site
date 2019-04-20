// Constantes
var xml = new XMLHttpRequest();
var ruta="http://localhost:8080/titopulo_site/";
var servicio="service/";

// Inicio
window.addEventListener('load', function(){    
    getPeliculas();    
});

// GET Películas
function getPeliculas(){    
    xml.onreadystatechange = callback;
    xml.open("GET", ruta+servicio, true);
    xml.send();
}

function callback(){    
    if(xml.readyState === 4){
        if(xml.status===200){            
            var data = xml.responseText;            
            var peliculas = parsearPeliculas(data);
            fillTablePeliculas(peliculas);
        }
    }
}

function fillTablePeliculas(peliculas){
    var tablaPeliculas = $("tabla_peliculas_body");

    for(var i = 0; i<peliculas.length; i++){
        tablaPeliculas.innerHTML += createTrPelilcula(peliculas[i]);
    }    
}

function parsearPeliculas(data){
    var arrayPeliculas = JSON.parse(data);
    return arrayPeliculas;
}

function createTrPelilcula(pelicula){
    var tr = "<tr><td>"+pelicula['titulo']+
        "</td><td>"+pelicula['autor']+
        "</td><td>"+pelicula['genero']+
        "</td><td>"+pelicula['anio']+
        "</td><td>"+pelicula['duracion']+
        "</td></tr>";

    return tr;
}

function $(id){
    return document.getElementById(id);
}