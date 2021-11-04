<?php
  for( $i = 1; $i < 100; $i++ ) 
  if ($i <=20 )
  echo "<i>$i</i><br/>" ;
  elseif ($i>= 25 && $i<=50 && $i!=42 )
  echo "<u>$i</u><br/>";
  elseif ($i==42) 
  echo "laplateforme_<br/>";
  else echo $i . '<br />';
?>
