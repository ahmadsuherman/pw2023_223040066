<?php
require 'functions.php';
$name = 'Ubah Data Mahasiswa';

$id = htmlspecialchars($_GET['id']);

$student = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// ketika tombol submit di-klik 
if (isset($_POST['ubah'])) {
    // ambil data form lalu tambah ke tabel mahasiswa
    // cek apakah tambah data berhasil
    // dd("edit");
    if (edit($_POST) > 0) {
        echo "<script>
                alert('ubah data berhasil!');
                document.location.href = 'index.php';        
        </script>";
    }
};

require 'views/edit.view.php';