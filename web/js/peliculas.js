// Constantes
var xml = new XMLHttpRequest();
var ruta="http://localhost:8080/titopulo_site/";
var servicio="service/";

// GET Películas
function getPeliculas(){    
    xml.onreadystatechange = callback;
    xml.open("GET", ruta+servicio, true);
    xml.send();
}

// GET Película by id
function getPelicula(id){
    xml.onreadystatechange = callback;
    xml.open("GET", ruta+servicio+id, true); // ver
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

// Recibe un array de JSON y agrega filas a la tabla.
function fillTablePeliculas(peliculas){
    var tablaPeliculas = $("tabla_peliculas_body");

    for(var i = 0; i<peliculas.length; i++){
        tablaPeliculas.innerHTML += createTrPelilcula(peliculas[i]);
    }    
}

// Recibe un str con los datos y se parsean a un array de JSON.
function parsearPeliculas(data){
    var arrayPeliculas = JSON.parse(data);
    return arrayPeliculas;
}

// Recibe un JSON y retorna el html de una fila de tabla con los datos.
function createTrPelilcula(pelicula){
    var tr = "<tr><td>"+pelicula['titulo']+
        "</td><td>"+pelicula['autor']+
        "</td><td>"+pelicula['genero']+
        "</td><td>"+pelicula['anio']+
        "</td><td>"+pelicula['duracion']+
        "</td></tr>";

    return tr;
}

// POST película
function postPelicula($pelicula){
    xml.onreadystatechange = resultPost;
    xml.open("POST", ruta+servicio, true);
    xml.send(JSON.stringify($pelicula));
    console.log(JSON.stringify($pelicula));
}

function resultPost(){
    if(xml.responseText == true){
        console.log("true");
    }
    else{
        console.log("false");
    }
}



