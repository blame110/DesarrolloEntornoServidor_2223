<?php

include("controller/global.php");

$resultado=20;

$nombrevar="resultado";


print "{$$nombrevar}\n";

//Bucle que recorre con un indice un array que tenemos definido en global.php
for ($i=0;$i<count($variables);$i++)
{
    print "$variables[$i]\n";
}

//Bucle que recorre los elementos del array
foreach($variables as $variable)
{
    print "$variable\n";
}

$i=0;
while ($i<count($variables))
{
    print "$variables[$i]\n";
    $i++;
}
