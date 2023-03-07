<?php
    $animals = ["Kucing", "Kelinci", "Monyet", "Panda", "Koala", "Sapi"];
    $colors = ["Oren", "Putih", "Cokelat", "Hitam", "Abu Abu", "Hitam Putih"];
    //Mencetak array untuk user
    // Perulangan for, foreach
    
    // Mengurutkan array menggunakan sort, rsort
    sort($colors);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peternakan Ku</title>
</head>
<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for($i=0; $i < sizeof($animals); $i++) {?>
        <li><?= $animals[$i]; ?></li>
        <?php } ?>
    </ul>

    <h2>Daftar Warna</h2>
    <ul>
        <?php for($i=0; $i < sizeof($colors); $i++) {?>
        <li><?= $colors[$i]; ?></li>
        <?php } ?>
    </ul>

    <h2>Daftar Binatang dan Warna</h2>
    <ul>
        <?php for($i=0; $i < sizeof($animals); $i++) {?>
        <li><?= $animals[$i]; ?>, <?= $colors[$i]; ?></li>
        <?php } ?>
    </ul>

    <h2>Daftar Warna</h2>
    <ol>
        <?php foreach($animals as $animal) { ?>
        <li><?= $animal ?></li>
        <?php } ?>
    </ol>
</body>
</html>