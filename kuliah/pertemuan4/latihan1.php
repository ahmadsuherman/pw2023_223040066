<?php
    //Mengecek apakah sebuah bilangan itu GANJIL/GENAP

    $number = "10";
    //Jika $number dibagi 2, sisanya 1 maka GANJIL

    function cekGanjilGenap($number){ //parameter
        if($number % 2  === 1){
            return "$number adalah bilangan GANJIL!";
        } else { //jika tidak memenuhi kondisi, maka masuk kedalam else
            return "$number adalah bilangan GENAP!";
        }
    }

    echo cekGanjilGenap($number) //argument
    
?>