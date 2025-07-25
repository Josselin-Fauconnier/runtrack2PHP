
<?php

echo "<form method=\"GET\" action=\"\">
  <input type=\"text\" name=\"prenom\">
  <input type=\"text\" name=\"nom\">
  <input type=\"submit\" value=\"Envoyer\">
</form>";

if (isset($_GET) && !empty($_GET)) {
    echo "Le nombre d'arguments GET envoyés est : " . count($_GET);
}
?>
