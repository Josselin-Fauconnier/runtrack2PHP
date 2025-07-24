<?php
header('Content-Type: text/html; charset=UTF-8');

$str = "Les choses que l'on possèdent finissent par nous posséder";

$str_sans_accents = iconv('UTF-8', 'ASCII//TRANSLIT', $str);

echo strrev($str_sans_accents);
?>
