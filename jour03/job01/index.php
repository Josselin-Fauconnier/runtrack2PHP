<?php
$pairs_impairs= array(200, 204, 173, 98, 171, 404, 459.);
foreach ($pairs_impairs as $pair_impair)
       if ($pair_impair %2==0){
        echo"$pair_impair est pair <br />";
       } else {
    echo "$pair_impair est impair <br />";
}
?>
