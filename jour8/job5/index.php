
<?php
session_start();


if (isset($_POST['reset'])) {
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['joueur'] = 'X';
}


if (!isset($_SESSION['grille'])) {
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['joueur'] = 'X';
}


if (isset($_POST['ligne']) && isset($_POST['col'])) {
    $i = $_POST['ligne'];
    $j = $_POST['col'];

    if ($_SESSION['grille'][$i][$j] === '-') {
        $_SESSION['grille'][$i][$j] = $_SESSION['joueur'];

        $g = $_SESSION['grille'];
        $j = $_SESSION['joueur'];


        if (
            ($g[0][0] === $j && $g[0][1] === $j && $g[0][2] === $j) ||
            ($g[1][0] === $j && $g[1][1] === $j && $g[1][2] === $j) ||
            ($g[2][0] === $j && $g[2][1] === $j && $g[2][2] === $j) ||
            ($g[0][0] === $j && $g[1][0] === $j && $g[2][0] === $j) ||
            ($g[0][1] === $j && $g[1][1] === $j && $g[2][1] === $j) ||
            ($g[0][2] === $j && $g[1][2] === $j && $g[2][2] === $j) ||
            ($g[0][0] === $j && $g[1][1] === $j && $g[2][2] === $j) ||
            ($g[0][2] === $j && $g[1][1] === $j && $g[2][0] === $j)
        ) {
            echo "<p>Le joueur $j a gagné !</p>";
            $_POST['reset'] = true;
        } else {
            $plein = true;
            foreach ($g as $ligne) {
                foreach ($ligne as $val) {
                    if ($val === '-') {
                        $plein = false;
                    }
                }
            }
            if ($plein) {
                echo "<p>Match nul !</p>";
                $_POST['reset'] = true;
            } else {
                $_SESSION['joueur'] = ($_SESSION['joueur'] === 'X') ? 'O' : 'X';
            }
        }
    }
}

if (isset($_POST['reset'])) {
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['joueur'] = 'X';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Morpion</title>
    <link rel="stylesheet" href="morpion.css">
</head>
<body>

<h2>Joueur actuel : <?= $_SESSION['joueur'] ?></h2>

<form method="post">
    <table>
    <?php for ($i = 0; $i < 3; $i++): ?>
        <tr>
        <?php for ($j = 0; $j < 3; $j++): ?>
        <td>
        <?php if ($_SESSION['grille'][$i][$j] === '-'): ?>
        <button type="submit" name="ligne" value="<?= $i ?>">
        <input type="hidden" name="col" value="<?= $j ?>">
                                -
        </button>
     <?php else:
                    $val = $_SESSION['grille'][$i][$j];
                     $class = $val === 'X' ? 'x' : 'o';
                    echo "<span class='$class'>$val</span>";
                    endif; ?>
                </td>
     <?php endfor; ?>
         </tr>
    <?php endfor; ?>
</table>
</form>

<form method="post">
    <button type="submit" name="reset">Réinitialiser la partie</button>
</form>

</body>
</html>
