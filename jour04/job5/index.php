
<?php
echo '<form method="POST" action="">
  <input type="text" name="username" placeholder="Nom d\'utilisateur">
  <input type="password" name="password" placeholder="Mot de passe">
  <input type="submit" value="Connexion">
</form>
';

if (!empty($_POST)) {
    if ($_POST['username'] === 'John' && $_POST['password'] === 'Rambo') {
        echo "C’est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>
