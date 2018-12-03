<?php
session_start ();
if (isset($_SESSION['nom']) AND isset($_SESSION['prenom']) AND isset($_SESSION['age']))
{
    echo 'Bonjour '.$_SESSION['nom'].'  '.$_SESSION['prenom'].'   '.$_SESSION['age'];
} else {
    echo 'ERROR';
}
?>