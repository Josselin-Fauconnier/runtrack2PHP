
<?php
echo'<form method="POST" action="">
  <input type="text" name="prenom" placeholder="Prénom">
  <input type="text" name="nom" placeholder="Nom">
  <input type="submit" value="Envoyer">
</form>
';

if (!empty($_POST)) {
    echo "<table border='1'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>$key</td><td>$value</td>";
        echo "</tr>";
    }

    echo "</table>";
}

?>
