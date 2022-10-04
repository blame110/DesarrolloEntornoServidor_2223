<?php

$numero1 = mt_rand()/100;
$numero2 = mt_rand()/100;

echo "$numero1<br/>";
echo "$numero2<br/>";

$numero1 = intval($numero1);
//$numero2 = round($numero2);
echo "$numero1<br/>";
//echo "$numero2<br/>";
printf("%.1f<br/>",$numero2);


$nombre = "juan";
$direccion = "Calle pedrito 34";

echo " {$nombre}'s adress is $direccion";
?>