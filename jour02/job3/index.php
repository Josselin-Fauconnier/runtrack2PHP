
<?php
$vingtaine = range(0, 20);
$moitie_50 = range(25, 50);
$remplacement = "La Plateforme_";

for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        echo $remplacement . "<br />";
    } elseif (in_array($i, $vingtaine)) {
        echo "<i>" . $i . "</i><br />";
    } elseif (in_array($i, $moitie_50)) {
        echo "<u>" . $i . "</u><br />";
    } else {
        echo $i . "<br />";
    }
}
?>
