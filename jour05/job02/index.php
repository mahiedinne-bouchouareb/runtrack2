<?php


function bonjour($jour)
{
  if ($jour ===true)
  {
    echo "bonjour<br/>";
  }
  elseif ($jour === false)
  {
   echo "bonsoir";
  }
  else{ echo "vous n'avez pas rentre de booleen";}
}

  bonjour (true);
  


?>
