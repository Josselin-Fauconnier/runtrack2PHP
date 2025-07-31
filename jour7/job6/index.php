<?php
function leetSpeak($str) {
    $leetCode = [
        'a' => '4',
        'b' => '8',
        'e' => '3',
        'g' => '6',
        'l' => '1',
        's' => '5',
        't' => '7'
    ];

    $minusStr = strtolower($str);
    $leetStr = strtr($minusStr, $leetCode);
    return $leetStr;
}
?>
