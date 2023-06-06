<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Halaman Home</h1>

  <h3>Daftar Mahasiswa</h3>
  <p><a href="add.php" class="btn btn-primary">Tambah Mahasiswa</a></p>

  <div class="row">
    <div class="col-md-6">
      <form action="" method="get">
        <div class="input-group mb-3">
          <input autocomplete="off" id="keyword" type="text" name="keyword" class="form-control" placeholder="Cari Mahasiswa(s)...">
          <button class="btn btn-outline-primary" type="submit" id="search" name="search">Cari</button>
        </div>
      </form>
    </div>
  </div>

  <div id="search-container">

  <?php if($students): ?>
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
  <?php endif; ?>
  </div>

</div>

<?php require('partials/footer.php'); ?>