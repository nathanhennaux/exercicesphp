<?php
$departement = array(
"01"=>"Ain",
"03"=>"Allier",
"07"=>"Ardèche",
"15"=>"Cantal",
"26"=>"Drôme",
"38"=>"Isère",
"42"=>"Loire",
"43"=>"Haute-Loire ",
"63"=>"Puy-de-Dôme",
"69"=>"Rhône",
"73"=>"Savoie",
"74"=>"Haute-Savoie");
echo $departement [69]. "<br>";
$departement [57] = "Metz";
echo $departement [57]. "<br>";

foreach ($departement as $cle => $valeur) {
    echo "Le departement $valeur a le numéro $cle". "<br>";
}
?>

