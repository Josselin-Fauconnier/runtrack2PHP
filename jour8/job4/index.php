
<?php

if (isset($_GET['deco'])) {
    setcookie('prenom', '', time() - 7400); 
    $_COOKIE['prenom'] = null; 
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['connexion'])) {
    if (!empty($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
        setcookie('prenom', $prenom, time() + 7400); 
        $_COOKIE['prenom'] = $prenom; 
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion par cookie</title>
</head>
<body>

<?php

if (!empty($_COOKIE['prenom'])) {
    echo "<p>Bonjour " . $_COOKIE['prenom'] . " !</p>";
    echo '<form method="get">
            <button type="submit" name="deco" value="1">Déconnexion</button>
          </form>';
} else {

    echo '
    <form method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required>
        <button type="submit" name="connexion">Connexion</button>
    </form>
    ';
}
?>

</body>
</html>
