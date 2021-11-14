<?php


session_start();


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css" />
    <title>php</title>
</head>


<body>





<form action="index.php" method='post'>

                <label for="text">Prénom</label>
                <input type="text" name='prenom' >       
                <input type="submit" name="submit">
                <input name = "reset" type="submit" value="reset">

</form>



<?php

if (isset($_POST["reset"]))  {  session_destroy(); exit; }





if (isset($_POST["prenom"]))     { $_SESSION["prenom"][] = $_POST["prenom"];
 }

 @$prenoms = $_SESSION["prenom"];





 if (isset($_POST["prenom"])) {

 foreach ( $prenoms as $key => $value){
    echo $value. ' <br>';
}
 
}


?>

</body>

</html>