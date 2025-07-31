
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Transformation de texte</title>
</head>
<body>


<form method="post">
    <label for="str">Entrez un texte :</label>
    <input type="text" name="str" id="str">

    <label for="fonction">Choisissez une transformation :</label>
    <select name="fonction" id="fonction">
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>

    <button type="submit">Envoyer</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texte = $_POST["str"];
    $choix = $_POST["fonction"];

    if ($choix == "gras") {
        $mots = explode(" ", $texte); 
        foreach ($mots as $mot) {
            if (ctype_upper(substr($mot, 0, 1))) {
                echo "<b>$mot</b> "; 
            } else {
                echo "$mot ";
            }
         } }

  elseif ($choix == "cesar") {
        $decalage = 2;
        $resultat = "";

        for ($i = 0; $i < strlen($texte); $i++) {
            $lettre = $texte[$i];

           
            if (ctype_alpha($lettre)) {
                $code = ord($lettre); 

            if ($lettre >= 'a' && $lettre <= 'z') {
                    $code = (($code - ord('a') + $decalage) % 26) + ord('a');
                }

                
                elseif ($lettre >= 'A' && $lettre <= 'Z') {
                    $code = (($code - ord('A') + $decalage) % 26) + ord('A');
                }

                $resultat .= chr($code);
            } 
            else {
                $resultat .= $lettre;
            }
        }

        echo $resultat;
    }

  
    elseif ($choix == "plateforme") {
        $mots = explode(" ", $texte);
        foreach ($mots as $mot) {
            if (substr($mot, -2) == "me") {
                echo $mot . "_ ";
            } else {
                echo $mot . " ";
            }
        }
    }
}
?>

</body>
</html>
