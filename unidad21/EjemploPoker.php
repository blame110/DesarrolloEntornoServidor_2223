<?php



$carta1 = 1;
$carta2 = 14;
$carta3 = 27;
$carta4 = 40;
$carta5 = 21;

//Las metemos en un array para poder utilizar bucles
$cartas = [$carta1, $carta2, $carta3, $carta4, $carta5];

//Variable que controla si tenemos color
$color = false;
//Variable que controla si tenemos poker
$poker = false;
//Variable que controla si tenemos escalera
$escalera = false;
//Contadores de los palos para el color
$num_cor = 0;
$num_pic = 0;
$num_treb = 0;
$num_diam = 0;
//Calculo de color, cada 13 es un palo
//Recorremos las cartas contando las que hay de cada palo
foreach ($cartas as $carta) {
    if ($carta <= 13)
        $num_cor++;
    else
    if ($carta <= 26)
        $num_pic++;
    else
    if ($carta <= 39)
        $num_treb++;
    else
        $num_diam++;
}

//Si hay 5 cartas con el mismo color es que hay color
if ($num_cor == 5 || $num_pic == 5 || $num_treb == 5 || $num_diam == 5) {
    $color = true;
}

//Una vez calculamos el color, ponemos las cartas de 1 a 13 utilizando el modulo
$i = 0;
foreach ($cartas as $carta) {
    
    if ($carta % 13 == 0)
        $cartas[$i] = 13;
    else
        $cartas[$i] = $carta % 13;
    $i++;
}
//var_dump($cartas);
//Calculo de escalera
//Las cartas no deberían de salir dos posiciones de la media
$media = (($cartas[0] + $cartas[1] + $cartas[2] + $cartas[3] + $cartas[4]) / 5);
print("La media es $media\n");
//La escalera por defecto es cierta
$escalera=true;
//Comprobamos si alguna carta esta repetida 4 veces
foreach ($cartas as $carta) {
    $numRep = 0;
    foreach ($cartas as $cartaBus) {
        if ($carta == $cartaBus)
            $numRep++;
    }
    //Si la carta se ha repetido mas de 4 veces hay poker
    if ($numRep >= 4) {
        $poker = true;
    }
    //Si la carta esta fuera del rango de escalera ya no hay posibilidad
    //de escalera
    if ($carta>$media+2 || $carta<$media-2)
        $escalera=false;
}


print("\nColor: ".($color?"Cierto":"Falso"));
print("\nPoker: ".($poker?"Cierto":"Falso"));
print("\nEscalera: ".($escalera?"Cierto":"Falso"));



