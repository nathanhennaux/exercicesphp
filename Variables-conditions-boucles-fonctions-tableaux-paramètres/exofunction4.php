<?php
function chiffre($number1, $number2) {
    if ($number1>$number2) {
        return 'Le premier nombre est plus grand';
        }else if ($number1<$number2) {
            return 'Le premier nombre est plus petit';       
        } else{
            return 'Les deux nombres sont identiques';
        }
        
}
print chiffre(2,2);
?>
