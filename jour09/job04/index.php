<?php
$db = mysqli_connect("localhost","root", "", "jour08");
$requete =mysqli_query ($db , "SELECT * FROM etudiants where prenom like'T%'");
$query = mysqli_fetch_all($requete,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css" /> 
    <title>tableau</title>
</head>


<body>

<table border="10" cellpadding="15" width="100%">
   
<?php 
   echo' <thead><tr>';
                            
                    foreach ( $query[0] as $key => $value)
                    
                    {
                        echo "<th> $key </th>";             
                    }
           
      echo  '</tr>';
    echo '</thead>';


   echo' <tbody> ';      
                    
                    foreach ( $query as $key => $value)
                    { echo '<tr>';
                    
                        foreach($value as $value2)
                        {
                        echo "<td>$value2</td>"; 
                        }
                    }
                    echo '<tr/>';     
  echo  '</tbody>';

    ?>
</table>





</body>

</html>