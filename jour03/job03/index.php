<?php
$str = "I'm sorry Dave I'm afraid I can't do that";

$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];

for ($i = 0; $i < strlen($str); $i++) {
    $lettres= strtolower($str[$i]); 

    
    if (in_array($lettres, $voyelles)) {
        echo $str[$i]; 
    }
}
?>
