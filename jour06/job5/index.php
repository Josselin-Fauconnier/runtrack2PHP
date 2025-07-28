
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Choix de style</title>

    <?php
   
    $style = 'style1';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['style'])) {
        $style = htmlspecialchars($_POST['style']); 
    }

    
    echo '<link rel="stylesheet" href="' . $style . '.css">';
    ?>
</head>
<body>
    <form method="post" action="">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1" <?= $style == 'style1' ? 'selected' : '' ?>>Style 1</option>
            <option value="style2" <?= $style == 'style2' ? 'selected' : '' ?>>Style 2</option>
            <option value="style3" <?= $style == 'style3' ? 'selected' : '' ?>>Style 3</option>
        </select>
        <button type="submit">Appliquer</button>
    </form>
</body>
</html>
