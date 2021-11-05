<?php

$i=0;
foreach($_GET as $key => $value)
{
    $i++;
    echo $key.' '.$value.'<br/>';
}

echo"nombre de valeur dans get et de $i";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get" >
<label for="name">
    Nom (4 to 8 characters):</label>

<input type="text" id="name" name="nom" required
   minlength="4" maxlength="8" size="10">

   <label for="name">
       Prenom (4 to 8 characters):
   </label>

   <input type="text" id="name" name="prenom" required
          minlength="4" maxlength="8" size="10">
          <input type='submit' value="bouton">

</form>
</body>

</html>

