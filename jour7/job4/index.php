
<?php

function calcule($a=70, $operation="+", $b=13) {
    if ($operation == "+") {
        return $a + $b;
    } elseif ($operation == "-") {
        return $a - $b;
    } elseif ($operation == "*") {
        return $a * $b;
    } elseif ($operation == "/") {
        
        if ($b != 0) {
            return $a / $b;
        } else {
            return "division par zéro";
        }
    } elseif ($operation == "%") {
       
        if ($b != 0) {
            return $a % $b;
        } else {
            return "division par zéro";
        }
    } else {
        return "Opération inconnue";
    }
}


echo calcule();


?>
