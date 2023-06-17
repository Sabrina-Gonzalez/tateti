<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Gabriel Ignacio Cire - Legajo 3221 - mail: gabriel.cire@est.fi.uncoma.edu.ar - usuario github: nachoeducativo */
/* Sabrina Samanta Gonzalez  - Legajo 4243 - mail:sabrina.gonzalez@est.fi.uncoma.edu.ar - usuario github: Sabrina-Gonzalez*/





/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/
// FUNCION 1
<?php
function cargarJuegos() {
    //incializacion del arrays
    $coleccionJuegos = [];

    // Ejemplo de 10 juegos
    $coleccionJuegos[] = ["jugadorCruz" => "majo", "jugadorCirculo" => "pepe", "puntosCruz" => 5, "puntosCirculo" => 0];
    $coleccionJuegos[] = ["jugadorCruz" => "juan", "jugadorCirculo" => "majo", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[] = ["jugadorCruz" => "ana", "jugadorCirculo" => "lisa", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[] = ["jugadorCruz" => "pedro", "jugadorCirculo" => "raul", "puntosCruz" => 5, "puntosCirculo" => 0];
    $coleccionJuegos[] = ["jugadorCruz" => "raul", "jugadorCirculo" => "natalia", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[] = ["jugadorCruz" => "francisco", "jugadorCirculo" => "camila", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[] = ["jugadorCruz" => "micaela", "jugadorCirculo" => "nacho", "puntosCruz" => 5, "puntosCirculo" => 0];
    $coleccionJuegos[] = ["jugadorCruz" => "daiana", "jugadorCirculo" => "agustina", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[] = ["jugadorCruz" => "euge", "jugadorCirculo" => "maria", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[] = ["jugadorCruz" => "david", "jugadorCirculo" => "sofi", "puntosCruz" => 5, "puntosCirculo" => 0];
    

    return $coleccionJuegos;
}

// uso de la llamada a la funcion
$juegos = cargarJuegos();
//se imprime el contenido de la variable $juegos
print_r($juegos);




// FUNCION 2  (este esta incompleto y hay que revisar algunas cosas que faltan

function seleccionarOpcion() {
    //incializacion de variable boolean en false
    $opcionValida = false;
    
    $opciones = ["Jugar al tateti", "Mostrar un juego","Mostrar el primer juego ganador",
        "Mostrar porcentaje de juegos ganados", "Mostrar resumen de jugador", 
        "Mostrar listado de juegos ordenado por jugador","Salir"];

 
    
    while ($opcionValida = true) {
        // Mostrar opciones del menú
        echo "Menú de opciones:\n";


        for ($i = 1; $i <= count($opciones); $i++) {
            echo "$i) $opciones[$i-1]\n";
        }




/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

$juego = jugar();
//print_r($juego);
//imprimirResultado($juego);



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
*/
