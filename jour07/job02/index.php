<?php


session_start();
setcookie('count', $_SESSION['count']);



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

        <input name = "reset" type="submit" value="reset">

</form>

<?php


if (@$_POST['reset'] == false) {
  
      if (!isset($_SESSION['count'])) {

                   $_SESSION['count'] = 0;

                                      } 

      else                            {
                   $_SESSION['count']++;};
                                      }

                                      
else { $_SESSION['count'] = 0 ;}



$_COOKIE['count'] = $_SESSION['count'];

echo $_COOKIE['count'];






?>





</body>

</html>