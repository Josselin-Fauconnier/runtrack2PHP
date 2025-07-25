<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais."; 

$premiere_lettre = $str[0];
$reste_chaine = substr($str, 1);
$str_rotation = $reste_chaine . $premiere_lettre;
$str_rotation = ucfirst($str_rotation);
$derniere_lettre = substr($str_rotation, -1);
$derniere_lettre_minuscule = strtolower($derniere_lettre);
$str_rotation[strlen($str_rotation) - 1] = $derniere_lettre_minuscule;

echo $str_rotation;

?>

