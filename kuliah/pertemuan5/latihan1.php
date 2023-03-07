<?php
    // Array
    // Array adalah variabel yang bisa menampung banyak nilai

    // Membuat array
    $days = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu");
    $months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober"];

    $myArrays = ['Ahmad Suherman', 19, false];
    $animals = ["Kucing", "Kelinci", "Monyet", "Panda", "Koala", "Sapi"];

    var_dump($myArrays);

    echo "<hr>";
    //Manipulasi Array
    $months[] = "November";
    array_push($months, "Desember");

    print_r($months);

    echo "<hr>";

    //Menambah element diawal
    array_unshift($animals, "Anjing", "Ayam", "Bebek", "Angsa");
    print_r($animals);
    echo "<hr>";

    // Menghapus 1 element diakhir array
    array_pop($days);
    print_r($days);

    echo "<hr>";

    // Menghapus 1 element diawal
    array_shift($days);
    print_r($days);
?>