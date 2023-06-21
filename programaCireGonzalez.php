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

/**FUNCION 1
 * Inicializa y retorna una coleccion de juegos
 * @return array
*/
function cargarJuegos() {
    //incializacion del arrays
    $coleccionJuegos = [];

    // Ejemplo de 10 juegos
    $coleccionJuegos[0] = ["jugadorCruz" => "majo", "jugadorCirculo" => "pepe", "puntosCruz" => 5, "puntosCirculo" => 0];
    $coleccionJuegos[1] = ["jugadorCruz" => "juan", "jugadorCirculo" => "majo", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[2] = ["jugadorCruz" => "ana", "jugadorCirculo" => "lisa", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[3] = ["jugadorCruz" => "pedro", "jugadorCirculo" => "raul", "puntosCruz" => 5, "puntosCirculo" => 0];
    $coleccionJuegos[4] = ["jugadorCruz" => "raul", "jugadorCirculo" => "natalia", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[5] = ["jugadorCruz" => "francisco", "jugadorCirculo" => "camila", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[6] = ["jugadorCruz" => "micaela", "jugadorCirculo" => "nacho", "puntosCruz" => 5, "puntosCirculo" => 0];
    $coleccionJuegos[7] = ["jugadorCruz" => "daiana", "jugadorCirculo" => "agustina", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[8] = ["jugadorCruz" => "euge", "jugadorCirculo" => "maria", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[9] = ["jugadorCruz" => "david", "jugadorCirculo" => "sofi", "puntosCruz" => 5, "puntosCirculo" => 0];
    
    

    

    return $coleccionJuegos;
}






/**Punto 2
 * Retorna la opcion elegida por el usuario
 * @return int
 */
function seleccionarOpcion() {
    //$opcionElegida
    echo "    Menu de Opciones
    1) Jugar al tateti 
    2) Mostrar un juego
    3) Mostrar el primer juego ganador
    4) Mostrar porcentaje de juegos ganados 
    5) Mostrar resumen de jugador 
    6) Mostrar listado de juegos ordenado por jugador O
    7) Salir
    
    Elegir una Opcion: ";
    $opcionElegida=trim(fgets(STDIN));
    
    while ($opcionElegida < 1 || $opcionElegida > 7) {
        echo "La opcion elegida no es valida, ingrese otra opcion: ";
        $opcionElegida=trim(fgets(STDIN));
    }
    return $opcionElegida;




/**Punto 3
 * Retorna un numero valido segun el rango
 *@param int $min 
 *@param int $max
 * @return int
 */
    // pegado del excel
function solicitarNumeroEntre($min, $max)
{
    //int $numero
    $numero = trim(fgets(STDIN));
    while (!is_int($numero) && !($numero >= $min && $numero <= $max)) {
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
    }
    return $numero;
}
    
/*
function solicitarNumeroEnRango($min, $max) {
    $numeroValido = false;

    while ($numeroValido=true) {
       echo ("Ingrese un número entre $min y $max: ");
         $numero = trim(fgets(STDIN));

        if ($numero >= $min && $numero <= $max) {
            $numeroValido = true;
        } else {
            echo "Número inválido. Por favor, ingrese un número válido dentro del rango.\n";
        }
    }

    return $numero;
}



/**PUNTO 4
 * Muestra los datos de un juego
 * @param int $numeroJuego
 * @param array $coleccionJuegos
 */
function muestraUnJuego($numeroJuego,$coleccionJuegos){
    if ($coleccionJuegos[$numeroJuego-1]["puntosCruz"] > $coleccionJuegos[$numeroJuego]["puntosCirculo"]){
        echo "Juego TATETI: ".$numeroJuego. " (gano X) \n";
    }elseif ($coleccionJuegos[$numeroJuego]["puntosCruz"] < $coleccionJuegos[$numeroJuego]["puntosCirculo"]) {
        echo "Juego TATETI: ".$numeroJuego. " (gano O) \n";
    }else {
        echo "Juego TATETI: ".$numeroJuego. " (empate) \n";
    }

    echo "Jugador X: ".$coleccionJuegos[$numeroJuego]["jugadorCruz"]." obtuvo ".$coleccionJuegos[$numeroJuego]["puntosCruz"]." puntos\n";
    echo "Jugador O: ".$coleccionJuegos[$numeroJuego]["jugadorCirculo"]." obtuvo ".$coleccionJuegos[$numeroJuego]["puntosCirculo"]." puntos\n";
    if ($numeroJuego<(count($coleccionJuegos)) && $numeroJuego>(count($coleccionJuegos))){
        echo "ERROR. Vuelva a ingresar un numero:";
    }
}




/**PUNTO 5 (revisar)
 * agrega nuevo juego
 * @param array $coleccionJuegos
 * @param array $nuevoJuego
 * @return array
 */
function agregarJuego ($coleccion, $nuevoJuego){
     
    
    
    //$coleccionJuegos[count($coleccion)] = $nuevoJuego;
    array_push($coleccion, $nuevoJuego);
     return $coleccion;
}




/**PUNTO 6
 * Dada una colección de juegos y el nombre de un jugador, retorne el índice del primer juego ganado por dicho jugador
 * @param string $coleccionJuegos
 *@param string 
 *@retur int
 */
function buscarPrimerJuegoGanado ($coleccionJuegos, $nombreJugador){
    //$indice
    foreach ($coleccionJuegos as $indice => $juego) {

        //determina si un jugador ha ganado un juego en un índice específico de la colección de juegos.
        if ($juego["jugadorCruz"] == $nombreJugador && $juego["puntosCruz"] > $juego["puntosCirculo"]) {
            return $indice;
        } elseif ($juego["jugadorCirculo"] == $nombreJugador && $juego["puntosCirculo"] > $juego["puntosCruz"]) {
            return $indice;
        }
    }
    
    return -1; // Jugador no ganó ningún juego
   
}
    /*la función busca el primer juego ganado por un 
    jugador específico en una colección de juegos y devuelve su índice. 
    Si el jugador no ganó ningún juego, se devuelve -1.*/

/*

*/






/**PUNTO 7
  *  este modulo obtiene el resumen del jugador
  *@param array $coleccionJuegos
  *@param string $jugador
  *@return string
  */
function obtenerResumenJugador($coleccionJuegos, $jugador) {
    $resumenJugador = [ 
        "nombre" => $jugador,
        "juegosGanados" => 0,
        "juegosPerdidos" => 0,
        "juegosEmpatados" => 0,
        "puntosAcumulados" => 0
    ];
    foreach ($coleccionJuegos as $juego) {// se recorre cada juego de la colección uno por uno y se asigna a la variable $juegos
        if ($juego["jugadorCruz"] == $jugador) {
            //ganò
            if ($juego["puntosCruz"] > $juego["puntosCirculo"]){
                $resumenJugador["juegosGanados"]= $resumenJugador["juegosGanados"] + 1
            } elseif ($juego["puntosCirculo"] > $juego["puntosCruz"]) {//perdiò
                $resumenJugador["juegosPerdidos"]= $resumenJugador["juegosPerdidos"]+1;
            } else { //empate
                $resumenJugador["juegosEmpatados"]= $resumenJugador["juegosEmpatados"]+1;
            }
            
            $resumenJugador["puntosAcumulados"] =  $resumenJugador["puntosAcumulados"]+ $juego["puntosCruz"];// acumulador
        
                
        //CIRCULO
        } elseif ($juego["jugadorCirculo"] == $jugador) {
            
        }
            
    

    return $resumenJugador;
}

// ejemplo de salida 
/**Array
(
    [nombre] => nacho
    [juegosGanados] => 1
    [juegosPerdidos] => 1
    [juegosEmpatados] => 0
    [puntosAcumulados] => 4
)
*/





  /**PUNTO 8
  * Solicita al usuario un simbolo (X/O) y retorna el simbolo elegido
  *@return string
  */
  function simboloElegido(){
    //string $simbolo
    echo "Elija un simbolo (X o O):";
    $simbolo=trim(fgets(STDIN));
    while (!($simbolo=="x"|| $simbolo=="o")){
        echo "Elija un simbolo (X o O):";
        $simbolo=trim(fgets(STDIN));
    };
    return $simbolo;
}




/**PUNTO 9
 *Retorna la cantidad de juegos ganados (sin importar si es X o O)
 *@param array $coleccionJuegos
 *@return int 
 */
function cantJuegosGanados($coleccionJuegos){
    //$cantGanados
    $cantGanados=0;
    for ($i=0; $i <count($coleccionJuegos) ; $i++) { 
        if ($coleccionJuegos[$i]["puntosCruz"]>$coleccionJuegos[$i]["puntosCirculo"] ||$coleccionJuegos[$i]["puntosCirculo"]>$coleccionJuegos[$i]["puntosCruz"] ) {
            $cantGanados=$cantGanados+1;
        }
    }
    return $cantGanados;
}






/**PUNTO 10
 * Dada una coleccion de juegos y un simbolo (X o O) retorne la cantidad de juegos ganados por el simbolo ingresado por parametro
 * @param array $coleccionJuegos
 * @param string $simboloXO
 * @return int
 */
function cantJuegosGanados($coleccionJuegos,$simboloXO){
    //int $cantidadGanados
    $cantidadGanados=0;
    for ($i=0; $i < count($coleccionJuegos); $i++) { 
        if ($simboloXO=="x" && $coleccionJuegos[$i]["puntosCruz"]>$coleccionJuegos[$i]["puntosCirculo"]) {
                $cantidadGanados=$cantidadGanados+1;
        }elseif ($simboloXO=="o" && $coleccionJuegos[$i]["puntosCirculo"]>$coleccionJuegos[$i]["puntosCruz"]) {
                $cantidadGanados=$cantidadGanados+1;
    }
    }
    return $cantidadGanados;
}




/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

//$juego = jugar();
//print_r($juego);
//imprimirResultado($juego);

$coleccionJuegos = cargarJuegos();


do {
    $opcion = solicitarNumeroEntre(1,7);

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1
            $juego = jugar();
        print_r($juego);
        print_r($coleccionJuegos);
        $coleccionJuegos = agregarJuego($coleccionJuegos, $juego);
            print_r($coleccionJuegos);
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
