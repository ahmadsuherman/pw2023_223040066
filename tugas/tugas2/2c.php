<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2C</title>
    <style>
        td{
            width: 30px;
            height: 30px;
            background-color: #FFC0CB;
            border: 1px solid black;
            text-align:center;
        }
    </style>
</head>
<body>
    <table cellpadding="10" cellspacing="0">
        <?php 

        $line = 1;

        for ($number = 10; $number >= $line; $number--) {
            echo "<tr>";
            for ($coloumn = 1; $coloumn <= $number; $coloumn++) {
                echo "<td>$coloumn</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>