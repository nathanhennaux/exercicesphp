<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superglobal</title>
</head>
<body>
<?php
echo 'Le nom du serveur est : '.$_SERVER['SERVER_NAME'].'<br>';
echo 'L\'adresse IP est : '.$_SERVER['SERVER_ADDR'].'<br>';
echo 'L\'User Agent est : '.$_SERVER['HTTP_USER_AGENT'].'<br>';
$_SESSION ['nom'] ='hennaux';
$_SESSION ['prenom'] = 'nathan';
$_SESSION ['age'] = 22;
?>
<a href="autrepage.php">  Lien </a>

    
</body>
</html>