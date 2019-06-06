var Url = "http://localhost/TitoPulo_site/api/nexo.php"; 

$(document).ready(function(){
    $("#formLogin").submit(validarCredenciales)
        
});

function validarCredenciales(evento){        
    var json = {
        usuario : $("#inputEmail").value,
        pass : $("#inputPassword").value
    };

    // $.post(Url, json, function(data, status){
    //     console.log(data);
    // });
    
    // console.log(json, evento);
}