
<?php
function est_premier($nombre_premier) {
    if ($nombre_premier <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($nombre_premier); $i++) {
        if ($nombre_premier % $i == 0) {
            return false;
        }
    }
    
    return true;
}


?>
