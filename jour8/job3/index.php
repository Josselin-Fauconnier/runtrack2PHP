
<?php
session_start(); 

if (isset($_GET['reset'])) {
    unset($_SESSION['prenoms']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['prenom'])) {
        $prenom = $_POST['prenom']; 

        
        if (!isset($_SESSION['prenoms'])) {
            $_SESSION['prenoms'] = [];
        }

        
        $_SESSION['prenoms'][] = $prenom;
    }
}


if (!empty($_SESSION['prenoms'])) {
    echo "<ul>";
    foreach ($_SESSION['prenoms'] as $p) {
        echo "<li>$p</li>";
    }
    echo "</ul>";
} 

echo '
<form method="post">
    <label for="prenom">Entrez un prénom :</label>
    <input type="text" name="prenom" id="prenom">
    <button type="submit">Valider</button>
</form>

<form method="get">
    <button type="submit" name="reset" value="1">Reset</button>
</form>
';
?>



