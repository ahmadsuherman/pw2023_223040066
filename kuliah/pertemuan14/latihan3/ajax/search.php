<?php

    require('../functions.php');
    
    $keyword = $_GET['keyword'];
    
    $conn = mysqli_connect('localhost', 'root', 'root', 'pw2023_223040066') or die();
   
    if(isset($_GET['keyword'])){

        $result = mysqli_query($conn, "SELECT * FROM mahasiswa 
            WHERE nama LIKE '%$keyword%' || nim LIKE '%$keyword%' || email LIKE '%$keyword%' || jurusan LIKE '%$keyword%'
            ");
    }

    
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    // Siapkan data $students;
    $students = $rows;
    


  if($students): ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Gambar</th>
          <th scope="col">Nama</th>
          <th scope="col">Nim</th>
          <th scope="col">Email</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($students as $key => $student) : ?>
        <tr>
          <th scope="row"><?= $key+1; ?></th>
          <td><img width="50" class="rounded-circle" src="img/<?= $student['gambar']; ?>" alt="Gambar <?= $student['nama']; ?>"></td>
          <td><?= $student['nama']; ?></td>
          <td><?= $student['nim']; ?></td>
          <td><?= $student['email']; ?></td>
          <td><?= $student['jurusan']; ?></td>
          <td>
            <a href="edit.php?id=<?= $student['id'] ?>" class="btn btn-warning">Ubah</a>
            <a href="delete.php?id=<?= $student['id'] ?>" class="btn btn-danger" onclick="return confirm('yakin?');">Hapus</a>
            
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <?php else: ?>
      <div class="row">
        <div class="col-md-6">
          <div class="alert alert-danger" role="alert">Mahasiswa tidak ditemukan</div>
        </div>
      </div>
    <?php endif; 
?>