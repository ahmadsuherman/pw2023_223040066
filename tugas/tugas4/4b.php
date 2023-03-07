<?php
    $hardwares = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perangkat Keras</title>
</head>
<body>
    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
        <?php foreach($hardwares as $hardware) { ?>
        <li><?= $hardware ?></li>
        <?php } ?>
    </ol>

    <?php 
        array_push($hardwares, "Card Reader", "Modem");
        sort($hardwares);
    ?>

    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ol>
        <?php foreach($hardwares as $hardware) { ?>
        <li><?= $hardware ?></li>
        <?php } ?>
    </ol>
</body>
</html>