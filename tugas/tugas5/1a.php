<?php
    $mahasiswa = [
        [
            "nama"      => "Ahmad Suherman",
            "nrp"       => 223040066,
            "email"     => "suhermana274@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar1.png"
        ],
        [
            "nama"      => "Naufal Zul Faza",
            "nrp"       => 223040161,
            "email"     => "naufal21@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar4.png"
        ],
        [
            "nama"      => "Irsan Moch. Taupik Febrian",
            "nrp"       => 223040076,
            "email"     => "irsan321@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar5.png"
        ],
        [
            "nama"      => "Arya Saputra",
            "nrp"       => 223040051,
            "email"     => "saputra.arya@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar4.png"
        ],
        [
            "nama"      => "Flavio Boni",
            "nrp"       => 223040053,
            "email"     => "boni.321@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar5.png"
        ],
        [
            "nama"      => "Febi Alia Rahman",
            "nrp"       => 223040059,
            "email"     => "febialia@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar2.png"
        ],
        [
            "nama"      => "Aurelia Melati Suci",
            "nrp"       => 223040045,
            "email"     => "melatisuci@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar3.png"
        ],
        [
            "nama"      => "Fakih Helmi Maulana",
            "nrp"       => 223040056,
            "email"     => "hikaf890@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar1.png"
        ],
        [
            "nama"      => "Chafiz Adlan Baidlowi",
            "nrp"       => 223040041,
            "email"     => "chafiza@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar5.png"
        ],
        [
            "nama"      => "Lisvindanu",
            "nrp"       => 223040038,
            "email"     => "danuuu657@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar1.png"
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center p-2">Daftar Mahasiswa</h1>
    <section>
        
        <div class="row p-3">
        <?php foreach($mahasiswa as $mhs): ?>
            <div class="col-lg-2">
                <div class="card mb-2">
                <div class="card-body align-self-center">
                    <img src="<?= $mhs['gambar']; ?>" alt="avatar <?= $mhs['nama']; ?>"
                    class="rounded-circle img-fluid" style="width: 150px;">
                </div>
                </div>  
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Nama</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['nama']; ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">NRP</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['nrp']; ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['email']; ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Jurusan</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['jurusan']; ?></p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
    </section>
</body>
</html>