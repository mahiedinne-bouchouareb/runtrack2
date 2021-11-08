
<?php
$str = 'On n\'est pas le meilleur quand on le croit mais quand on le sait';
$v=0;

for($i= 0 ; isset($str[$i]); $i++) {
    if ($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u'||$str[$i]=='y'||$str[$i]=='A'||$str[$i]=='E'||$str[$i]=='I'||$str[$i]=='O'||$str=='U'||$str[$i]=='Y'){
      $v=$v+1;
    } 
}

$c=0;
for($i= 0 ; isset($str[$i]); $i++) {
    if ($str[$i]=='b'||$str[$i]=='c'||$str[$i]=='d'||$str[$i]=='f'||$str[$i]=='g'||$str[$i]=='h'||$str[$i]=='j'||$str[$i]=='k'||$str[$i]=='l'||$str[$i]=='m'||$str=='n'||$str[$i]=='p'||$str[$i]=='q'||$str[$i]=='r'||$str[$i]=='s'||$str[$i]=='t'||$str[$i]=='v'||$str[$i]=='w'||$str[$i]=='x'||$str[$i]=='z'||$str[$i]=='B'||$str[$i]=='C'||$str[$i]=='D'||$str[$i]=='F'||$str[$i]=='G'||$str[$i]=='H'||$str[$i]=='J'||$str[$i]=='K'||$str[$i]=='L'||$str[$i]=='M'||$str=='N'||$str[$i]=='P'||$str[$i]=='Q'||$str[$i]=='R'||$str[$i]=='S'||$str[$i]=='T'||$str[$i]=='V'||$str[$i]=='W'||$str[$i]=='X'||$str[$i]=='Z' ){  
     $c=$c+1;
    }
}

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

<table border="10" cellpadding="15">
<thead>
    <tr>
    	<th>voyelle</th>
    	<th>consonne</th>
    	
    </tr>
  </thead>
  <tbody>
    <tr>
    	<td><?php echo $v ?>
        </td>
    	<td><?php echo $c ?>
        </td>
    	

    </tr>
  </tbody>
</table>

</body>

</html>