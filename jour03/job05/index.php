<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$dic = ["voyelles" => 0, "consonnes" => 0];
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];

for ($i = 0; $i < strlen($str); $i++) {
    $lettres = strtolower($str[$i]);
    if (ctype_alpha($lettres)) {
        in_array($lettres, $voyelles) ? $dic["voyelles"]++ : $dic["consonnes"]++;
    }
}


echo '<table border="1">
        <thead>
            <tr><th>Voyelles</th><th>Consonnes</th></tr>
        </thead>
        <tbody>
            <tr><td>'.$dic["voyelles"].'</td><td>'.$dic["consonnes"].'</td></tr>
        </tbody>
      </table>';
?>
