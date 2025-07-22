
<?php
$multiple3et5= [0, 15, 30, 45, 60, 75, 90];
$message_mul3_5="FizzBuzz";
$multiple_3 = [0, 3, 6, 9, 12, 15, 18, 21, 24, 27, 30, 33, 36, 39, 42, 45, 48, 51, 54, 57, 60, 63, 66, 69, 72, 75, 78, 81, 84, 87, 90, 93, 96, 99];
$message_mul3="Fizz";
$multiple_5= [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100];
$message_mul5="Buzz";
for ($i = 0; $i <= 100; $i++) {
    if (in_array($i,$multiple3et5)) {
        echo $message_mul3_5 . "<br />";
    } elseif (in_array($i, $multiple_3)) {
        echo $message_mul3 ."<br/>";
    } elseif (in_array($i, $multiple_5)) {
        echo $message_mul5. "<br/>";
    } else {
        echo $i . "<br />";
    }
}
?>
