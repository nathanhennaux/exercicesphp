<?php
session_start();


if (isset($_POST['pseudo']) AND isset($_POST['mdp'])){
$user= $_POST['pseudo'];
$mdp= $_POST['mdp'];
setcookie("pseudo", $user, time() + 365*24*3600, null, null, false, true);
setcookie("mdp", $mdp, time() + 365*24*3600, null, null, false, true);
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=S, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="formulaireexo3.php" method="post">
    <label>Pseudo:</label>
    <input type="text" name="pseudo" >
    <label>Mot de passe:</label> 
    <input type="password" name="mdp" >
    <input type="submit" name="connexion" >
</form>

<a href= "ballec.php"> LIEN </a>
    
</body>
</html>