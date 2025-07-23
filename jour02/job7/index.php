
<?php
$hauteur = 5;

for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = $hauteur - $i; $j > 0; $j--) {
        echo "&nbsp;";
    }
    
    for ($t = 1; $t <= (2 * $i - 1); $t++) {
        echo "*";
    }
    
    echo "<br>";
}
?>


