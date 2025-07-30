
<?php
echo '<form method="GET" action="">
  <input type="text" name="largeur" placeholder="Largeur ">
  <input type="text" name="hauteur" placeholder="Hauteur">
  <input type="submit">
</form>';

if (!empty($_GET)) {
    $largeur = $_GET['largeur'];
    $hauteur = $_GET['hauteur'];

    if ($largeur >= 2 && $hauteur > 0) {
        echo '<pre>'; 
        $toit = floor($largeur / 2); 
        for ($i = 0; $i < $toit; $i++) {
            echo str_repeat(' ', $toit - $i);
            echo '/';
            echo str_repeat(' ', 2 * $i);
            echo "\\\n"; 
        }
        echo '/'.str_repeat('_', $largeur)."\\\n";
        for ($j = 0; $j < $hauteur; $j++) {
            echo '|'.str_repeat(' ', $largeur)."|\n";
        }
        echo '</pre>';
    } else {
        echo 'Valeurs invalides';
    }
}
?>
