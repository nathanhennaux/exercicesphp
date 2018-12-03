<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challenge</title>
</head>
<body>
<?php

   
   
$max_longueur="0";
$chaine= "mot le plus long de la chaine Jesuisvraimentachierauchallenge";
$tab= explode(" ", $chaine);
$nb_mots = count($tab);
 
 
for($i =0; $i <$nb_mots ; $i++){
$longueur=strlen($tab[$i]);
	if($max_longueur<=$longueur){
		$max_longueur=$longueur;
		$le_mot=$tab[$i];
	}
}
 
echo"$le_mot";

?>    
</body>
</html>