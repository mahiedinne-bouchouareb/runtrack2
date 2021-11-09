
 


<?php
session_start();
if (isset($_POST["reset"])){
  session_destroy();
  header("Location: index.php");
}

if (!isset($_SESSION['nbvisites'])) {
  $_SESSION['nbvisites'] = 0;
  
} else {
  $_SESSION['nbvisites']++;
}

echo $_SESSION['nbvisites'];

?>


<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>formulaire</title>
  
  </head>
 
  <body>
    
  <form action="#" method="post">
  <div>
  
  <div>
    <input type="submit" value="Réinitialiser le formulaire" name="reset">
  </div>
</form>

   








 </body>
</html>
