<?php
$str= "Les choses que l'on possede finissent par nous posseder.";
$f=0;

for ($d=0 ; isset($str[$d]); $d++){

    $f++;
}




for($i=$f-1 ; $i >= 0; $i--) {

 echo $str[$i];


}



?>
