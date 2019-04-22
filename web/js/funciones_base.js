// Inicio
window.addEventListener('load', function(){    
    getPeliculas();   
    $("btnIngresarPelicula").addEventListener("click", clickBtnIngresarPelicula);
    $("btnAgregar").addEventListener("click", clickBtnAgregar);
});

// Toma los datos del html
function clickBtnAgregar(){
    $pelicula = {
        id: "6",
        titulo:$("txtTitulo").value,
        genero:$("txtGenero").value,
        anio:$("txtAnio").value,
        autor:$("txtAutor").value,
        duracion:$("txtDuracion").value
    }

    postPelicula($pelicula);
}

function clickBtnIngresarPelicula(){
    var form = $("seccion_ingreso_pelicula");
    form.hidden = !form.hidden;
}

// Retorna el elemento a partir del id.
function $(id){
    return document.getElementById(id);
}