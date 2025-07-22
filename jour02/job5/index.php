
<?php
function est_premier($nombre) {
    if ($nombre <= 1) {
        return false;
    }

    $racine = sqrt($nombre);
    for ($i = 2; $i <= $racine; $i++) {
        if ($nombre % $i == 0) {
            return false;
        }
    }

    return true;
}

for ($i = 1; $i <= 1000; $i++) {
    if (est_premier($i)) {
        echo $i . "<br />";
    }
}
?>
