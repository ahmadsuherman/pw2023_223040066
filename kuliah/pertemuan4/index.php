<?php
    echo "Sekarang tanggal ". date('d-m-Y') . "<br>";
    echo "Sekarang jam ". date('H:i:s');

    echo "<hr>";

    $textOne = "Selamat datang di kuliah pemrograman web 2";
    $textTwo = "Universitas Pasundan";
    $textThree = "Ahmad Suherman";

    echo $textOne . "<br>";
    echo $textTwo . "<br>";
    echo $textThree . "<br>";
    
    echo "<hr>";

    echo substr($textOne, 8) . "<br>";
    echo substr($textOne, 8, 6) . "<br>";
    echo substr($textOne, -17) . "<br>";
    
    echo "<hr>";

    echo substr_count($textOne, "pemrograman web 2") . "<br>";
    echo substr_count($textOne, "am") . "<br>";
    echo substr_count($textOne, "a") . "<br>";

    echo "<hr>";

    echo str_replace("a", "*", $textOne) . "<br>";

    echo "<hr>";

    function luasDuaKubus($a, $b){
        return $a * $a * $a + $b * $b * $b;
    }

    echo luasDuaKubus(5, 5);
?>