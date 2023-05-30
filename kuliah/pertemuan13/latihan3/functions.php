<?php
define('BASE_URL', '/pw2023_223040066/kuliah/pertemuan11/latihan3/');


function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', 'root', 'pw2023_223040066') or die();

  return $conn;
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  die;
  echo "</pre>";
}

function delete($id)
{
    $conn = koneksi();
  // dd($conn);
  $query = "DELETE FROM mahasiswa WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
              mahasiswa
            VALUES (null, '$nim','$nama','$email','$jurusan','$gambar')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function edit($data)
{

  $conn = koneksi();
  
  $id = htmlspecialchars($data['id']);
  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);
  
  $query = "UPDATE mahasiswa 
            SET 
              nama ='$nama',
              email = '$email',
              jurusan = '$jurusan',
              gambar ='$gambar'
            WHERE id = '$id'";
 
  mysqli_query($conn, $query) or die("hem");

  return mysqli_affected_rows($conn);
}
