<?php
    // Array Multidimensi
    $animals = [["Kucing", "Hitam"], ["Kelinci", "Putih"], ["Monyet", "Cokelat"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peternakan Ku v2.0</title>
</head>
<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for($i=0; $i < count($animals); $i++) {?>
        <li>
            <?= $animals[$i][0] ?> - <?= $animals[$i][1] ?>
        </li>
        <?php }?>
    </ul>
</body>
</html>