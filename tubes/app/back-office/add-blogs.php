

<?php
if (isset($_POST['_token'])) {
    $_SESSION['alert'] = [
        'type'      => 'success',
        'message'   => $_POST['name'] . ' berhasil ditambahkan'
    ];
    echo "<meta http-equiv='refresh' content='0; url=dashboard.php?menu=blogs'>";
}
?>
<div class="content-wrapper">
    <section class="content-header bg-white p-2 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <span class="h4">Blog</span>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php?menu=blogs">Daftar</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row d-flext justify-content-center">
                <div class="col-11">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Blog</h3>
                        </div>
                        <form class="form-horizontal" action="" method="post">
                            <input name="_token" type="hidden" value="<?= generateRandomString(60) ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="iTitle" class="col-form-label col-sm-3 text-lg-right text-left">Judul</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="iTitle" placeholder="Judul" name="title">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="iCategory" class="col-form-label col-sm-3 text-lg-right text-left">Kategori</label>
                                    <div class="col-sm-6">
                                       <select name="" class="form-control" id="iCategory">
                                            <option value="">Pilih kategori</option>
                                            <option value="">Inspirasi</option>
                                            <option value="">Berita Perjalanan</option>
                                            <option value="">Restoran Makanan</option>
                                       </select>
                                    </div>
                                </div>
                            
                                <div class="form-group row">
                                    <label for="iImage" class="col-form-label col-sm-3 text-lg-right text-left">Gambar</label>
                                    <div class="col-sm-6">
                                        <input type="file" accept="image/*"  class="form-control" id="iImage" placeholder="Gambar" name="image">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="iDescription" class="col-form-label col-sm-3 text-lg-right text-left">Deskripsi</label>
                                    <div class="col-sm-6">
                                        <textarea id="iDescriotion" placeholder="Masukkan deskripsi">
                                            
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button name="submit" type="submit" class="btn btn-info mr-2"><i class="fa fa-save mr-1"></i> Simpan</button>
                                    <a href="dashboard.php?menu=blogs" class="btn btn-default">Batal</a>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
    $scripts = '
    <script type="text/javascript" src="./assets/back-office/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
    $(function () {
      $("#iDescriotion").summernote({
        placeholder: "Hello Bootstrap 4",
        minHeight: 100,
        inheritPlaceholder: true
      });
    })
  </script>';
?>
