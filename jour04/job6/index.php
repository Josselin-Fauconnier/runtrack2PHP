
<?php
echo '<form method="GET" action="">
  <input type="text" name="nombre" placeholder="Entrez un nombre">
  <input type="submit" value="Vérifier">
</form>
';

if (!empty($_GET['nombre'])) {
    $nombre = $_GET['nombre'];

    if (is_numeric($nombre)) {
        if ($nombre % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre valide.";
    }
}
?>
