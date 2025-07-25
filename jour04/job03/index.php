<?php
echo'<form method="POST" action="">
  <input type="text" name="prenom">
  <input type="text" name="nom">
  <input type="submit" value="Envoyer">
</form>';

if (!empty($_POST)) {
    echo "Le nombre d'arguments POST envoyes est : " . count($_POST);
}

?>
