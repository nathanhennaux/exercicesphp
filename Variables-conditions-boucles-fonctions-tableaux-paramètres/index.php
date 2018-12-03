    <?php include ("exo.php") ?> <br>
<?php include ("exo02.php") ?> <br>
<?php include ("exo03.php") ?> <br>
<?php include ("exo04.php") ?> <br>
<?php include ("exo05.php") ?> <br>
<?php include ("exo06.php") ?> <br>
<?php include ("exocondition1.php") ?> <br>
<?php include ("exocondition2.php") ?> <br>
<?php include ("exocondition3.php") ?> <br>
<?php include ("exocondition4.php") ?> <br>
<?php include ("exocondition5.php") ?> <br>
<?php include ("exocondition6.php") ?> <br>
<?php include ("exocondition7.php") ?> <br>
<?php include ("exocondition8.php") ?> <br>
<?php include ("exoboucle1.php") ?> <br>
<?php include ("exoboucle2.php") ?> <br>
<?php include ("exoboucle3.php") ?> <br>
<?php include ("exoboucle4.php") ?> <br>
<?php include ("exoboucle5.php") ?> <br>
<?php include ("exoboucle6.php") ?> <br>
<?php include ("exoboucle7.php") ?> <br>
<?php include ("exoboucle8.php") ?> <br>
<?php include ("exofunction1.php") ?> <br>
<?php include ("exofunction2.php") ?> <br>
<?php include ("exofunction3.php") ?> <br>
<?php include ("exofunction4.php") ?> <br>
<?php include ("exofunction5.php") ?> <br>
<?php include ("exofunction6.php") ?> <br>
<?php include ("exofunction7.php") ?> <br>
<?php include ("exofunction8.php") ?> <br>
<?php include ("exotableau1.php") ?> <br>
<?php include ("exotableau2.php") ?> <br>
<?php include ("exotableau3.php") ?> <br>
<?php include ("exotableau4.php") ?> <br>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_GET['age']))
{
	echo 'vous avez'.$_GET[age];
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'INDIQUE TON AGE !';
} 

echo " Date de début".$_GET["dateDebut"]. " Date de fin".$_GET["dateFin"];




?>
<form action="cible.php" method="post">
<p>
    <input type="text" name="prenom" />
    <input type="submit" value="Valider" />
</p>
</form>
    
    
</body>
</html>
