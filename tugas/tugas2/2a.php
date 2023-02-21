<?php 

$first_name = "Ahmad";
$last_name = "Suherman";

for ($angka = 1; $angka <= 100; $angka++) {
    if ($angka % 3 == 0 && $angka % 5 == 0) {
        echo "$first_name $last_name <br>";
    } elseif ($angka % 3 == 0) {
        echo "$first_name <br>";
    } elseif ($angka % 5 == 0) {
        echo "$last_name <br>";
    } else {
        echo "$angka <br>";
    }
}
?>