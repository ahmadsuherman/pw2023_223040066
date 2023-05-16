<?php
require('functions.php');
$name = 'Home';
// $students = [
//   [
//     "nama" => "Sandhika Galih",
//     "npm" => "043040023",
//     "email" => "sandhikagalih@unpas.ac.id"
//   ],
//   [
//     "nama" => "Doddy Ferdiansyah",
//     "npm" => "133040003",
//     "email" => "doddy@gmail.com"
//   ]
// ];

// Koneksi database
$conn = mysqli_connect('localhost', 'root', 'root', 'pw2023_223040066') or die();
// Lakukan query ke tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

$rows = [];
while($row = mysqli_fetch_assoc($result)){
  $rows[] = $row;
}

// Siapkan data $students;
$students = $rows;

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');
