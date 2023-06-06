<?php
require 'functions.php';
$name = 'Tambah Data Mahasiswa';

// ketika tombol submit di-klik 
if (isset($_POST['tambah'])) {
    // ambil data form lalu tambah ke tabel mahasiswa
    // cek apakah tambah data berhasil
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('tambah data berhasil!');
                document.location.href = 'index.php';        
        </script>";
    }
};

require 'views/add.view.php';