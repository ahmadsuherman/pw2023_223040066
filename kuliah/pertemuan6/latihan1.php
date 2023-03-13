<?php
    $numbers = [[1,2,3],[4,5,6],[7,8,9]];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .box{
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .box:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php foreach($numbers as $number): ?>
        <?php foreach($number as $numberValue): ?>
            <div class="box"><?= $numberValue ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>