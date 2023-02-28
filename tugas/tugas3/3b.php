<?php 

function urutanAngka($number) {
    $start = 1;
    for ($i = 1; $i <= $number; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $start . " ";
            $start++;
        }
        echo "<br>";
    }
}

urutanAngka(5)

?>