<?php
$clave=1;
for ($i=1;$i<=4;$i++){

    for ($j=1;$j<=13;$j++)
    {
        $option="";
        switch ($j){
        case 11:
            $option="J de ";
            break;
        case 12:
            $option="Q de ";
            break;
        case 13:
            $option="K de ";
            break;
        case 1:
            $option="AS de ";
            break;
        default:
            $option="$j de ";
        }

        switch ($i)
        {
            case 1:
                $option .= "Corazones";
                break;
            case 2:
                $option .= "Picas";
                break;
            case 3:
                $option .= "Treboles";
                break;
            case 4:
                $option .= "Diamantes";
                break;
        }

        $cartas[$clave]=$option;
        $clave++;

    }

}

//var_dump($cartas);
echo "<select name=\"carta1\">";

for($i=1;$i<count($cartas);$i++)
echo "<option value=$i>$cartas[$i]</option>\n";

echo "</select>";



?>