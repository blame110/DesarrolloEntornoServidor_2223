<?php
//Smileys
function count_smileys($arr): int {
    $numSmileys=0;
    
    foreach($arr as $smile){
      $valid=true;
      
      if ($smile[0]!=':' && $smile[0]!=';')
        $valid=false;
      
      if (strlen($smile)==3 && $smile[1]!='-' && $smile[1]!='~')
        $valid=false;
      
      if ((strlen($smile)==2 && $smile[1]!=')' && $smile[1]!='D') || (strlen($smile)==3 && $smile[2]!=')' && $smile[2]!='D'))
        $valid=false;
      
      if ($valid) $numSmileys++;
    }
    
    return $numSmileys;
  }

  echo "resultado".high("man i need a taxi up to ubud");

?>