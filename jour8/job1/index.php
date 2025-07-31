<?php
session_start(); 

if (isset($_GET['reset'])) {
    $_SESSION['nbvisites'] = 0; 
}


if (isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites']++; 
} else {
    $_SESSION['nbvisites'] = 1; 
}


echo "<p>Nombre de visites : " . $_SESSION['nbvisites'] . "</p>";


echo '<form method="get">
        <button type="submit" name="reset" value="1">Reset</button>
      </form>';

?>
