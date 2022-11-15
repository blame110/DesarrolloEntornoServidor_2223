<?php

function isIsogram($string) {
  $resultado=true;
  $letras=str_split(strtoupper($string));
  $cletras=array_count_values($letras);
  echo var_dump($cletras);
      foreach($cletras as $letra)
        {
          
        if ($letra>1)
          $resultado=false;
      }
  
  return $resultado;
}

if (isIsogram("isogram"))
echo "Es isogram";
else
echo "No es Isogram";

function orderWeight($str) {
  $nums = explode(" ", $str);
  $cambio="";
  
  for ($i=0;$i<count($nums)-1;$i++)
    {
    for($j=$i;$j<count($nums);$j++)
      {
      if (array_sum(str_split($nums[$j]))>array_sum(str_split($nums[$j+1])))
          {
          $cambio=$nums[$j+1];
          $nums[$j+1]=$nums[$j];
          $nums[$j]=$cambio;
            }
    }
    
  }
  return implode(' ', $nums);
}




?>