<?php

    $DB_HOST        = 'localhost';
    $DB_DATABASE    = 'db_';
    $DB_USERNAME    = 'root';
    $DB_PASSWORD    = 'password';

    $DB_CONNECTION = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $db_naDB_DATABASEme);

    if(!$DB_CONNECTION){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }

?>
