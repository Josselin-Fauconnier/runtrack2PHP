
<?php

if (isset($_GET['reset'])) {
    
    setcookie('nbvisites', '', time() - 7400);
    $_COOKIE['nbvisites'] = 0; 
}


if (isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbvisites = 1; 
}

setcookie('nbvisites', $nbvisites, time() + 7400);


echo "<p>Nombre de visites : $nbvisites</p>";


echo '<form method="get">
        <button type="submit" name="reset" value="1">Reset</button>
      </form>';
?>
