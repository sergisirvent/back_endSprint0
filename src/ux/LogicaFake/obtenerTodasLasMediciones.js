//--------------------------------------------
function obtenerTodasLasMediciones(cb){
    // preparar la llamada remota
    var xmlhttp = new XMLHttpRequest()
    xmlhttp.onreadystatechange = function() {
        // callback para cuando llegue la respuesta
        // de la petición que haremos más abajo

        if( this.readyState == 4 && this.status == 200 ){
            // este es el texto JSON recibido la llamada a
            // demo_file.php, pasado a objeto JSON
            console.log( "recibo: " + this.responseText )
            var resultado = this.responseText;

            console.log("Este es el resultado: -->>"+resultado);


            // no hay error, devuelvo el resultado
            cb( null, resultado )
        }
    }

    // llamamos *remotamente* al fichero diHola.php
    // (la verdadera función de la lógica)
    xmlhttp.open("GET", "../LogicaNegocio/obtenerTodasLasMediciones.php", true)
    xmlhttp.send()
}