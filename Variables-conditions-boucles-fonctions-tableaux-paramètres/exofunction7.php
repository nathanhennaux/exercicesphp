<?php
function exo7($genre, $age) {
    if ($age >= 18  && $genre === "Homme"){
        echo "Vous êtes un Homme et vous êtes majeur";
    }else if ($age < 18 && $genre === "Homme"){
        echo "Vous êtes un Homme et vous êtes mineur";
    }else if ($age >= 18 && $genre === "Femme"){
        echo "Vous êtes une Femme et vous êtes majeur";
    }else if ($age < 18 && $genre === "Femme"){
        echo "Vous êtes une Femme et vous êtes mineur";
    }
}
print exo7("Homme",22);


?>
