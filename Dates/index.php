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
$date = date("d-m-Y");
$date2 = date("d/m/Y");
$heure = date("H:i");
echo    "Nous sommes le $date et il est $heure <br> " ; //exo 1
echo    "Nous sommes le $date2 et il est $heure <br> "; //exo2

date_default_timezone_set('Europe/Paris');
// --- La setlocale() fonctionnne pour strftime mais pas pour DateTime->format()
setlocale(LC_TIME, 'fr_FR.utf8','fra');// OK
// strftime("jourEnLettres jour moisEnLettres annee") de la date courante
echo "Date du jour : ", strftime("%A %d %B %Y <br>"); //exo3

$ts = new DateTime('2016-08-02 15:00:00');
echo 'Le Timestamp du mardi 02 août  '.$ts->getTimestamp().'<br>  '; // exo 4

$anciennedate = "16-05-2016";
$datedujour = date("d-m-Y");
$jmoins = ((strtotime($datedujour)) - strtotime($anciennedate));
$jmoins = round($jmoins / (60*60*24));
echo "La différence entre les 2 dates est de $jmoins jours <br>"; // exo 5

//exo 6
$nb_Jours_de_Fevrier_2017 = date("t", mktime(0, 0, 0, 2, 1, 2017)). "<br>";
echo   $nb_Jours_de_Fevrier_2017;
//exo 7 
    $d=strtotime("+20 Days");
    echo "+ 20 jours : ".date("Y-m-d h:i:sa", $d) . "<br>";

//exo8
    $d=strtotime("-22 Days");
    echo "-22 jours : ".date("Y-m-d h:i:sa", $d) . "<br>";



?>
    
</body>
</html>