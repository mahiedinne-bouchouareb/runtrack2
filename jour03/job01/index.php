<?php

// On crée notre array $pre

$pre= array (200 , 204 , 173 , 98 , 171 , 404 , 459);



// Puis on fait une boucle pour tout afficher :

for ($numero = 0; $numero < 7; $numero++)

{

   if ($numero % 2 == 1)
   {
      echo " $pre[$numero]  est impair <br/>";
   }
   elseif ($numero % 2 == 0)
   {
      echo " $pre[$numero]  est pair <br/>";
   }



}

?>