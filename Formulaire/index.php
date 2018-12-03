<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2> Exercice 1 formulaire </h2>
<?php
    
   if (isset($_POST['nom']) AND isset($_POST['prenom']))
   {
       echo 'Bonjour '.$_POST['nom'].'  '.$_POST['prenom'];
   } else
{

    echo    '<form method="post" action="">';
    echo    '<select name="civilité" size="1">';
    echo    '<option>Monsieur';
    echo    '<option>Madame';
    echo    '</select>';
    echo    '<input type="text" name="nom" />'; 
    echo    '<input type="text" name="prenom" />';
    echo    '<input type="submit" value="Valider" />';
  
    echo    '</form>';
    echo '<form action="user1.php" method="post" enctype="multipart/form-data">
    Selectionnez une image à upload : 
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>';
}
?>
    
</body>
</html>