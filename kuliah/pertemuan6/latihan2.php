<?php
    // Array Numeric
    // $mahasiswa = [
    //     [
    //         "Ahmad Suherman",
    //         223040066,
    //         "suhermana274@gmail.com",
    //         "Teknik Informatika"
    //     ],
    //     [
    //         "Naufal Zul Faza",
    //         223040161,
    //         "naufal21@gmail.com",
    //         "Teknik Informatika"
    //     ],  
    // ];

    // Array Associative
    // Definisinya sama seperti array numerik, kecuali
    // Key-nya adalah string yang kita buat sendiri
    $mahasiswa = [
        [
            "nama"      => "Ahmad Suherman",
            "nrp"       => 223040066,
            "email"     => "suhermana274@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar4.png"
        ],
        [
            "nama"      => "Naufal Zul Faza",
            "nrp"       => 223040161,
            "email"     => "naufal21@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar5.png"
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <li><img src="<?= $mhs['gambar']; ?>" alt="Gambar <?= $mhs['nama']; ?>"></li>
            <li><?= $mhs['nama']; ?></li>
            <li><?= $mhs['nrp']; ?></li>
            <li><?= $mhs['email']; ?></li>
            <li><?= $mhs['jurusan']; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>