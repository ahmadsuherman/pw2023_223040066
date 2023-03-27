
<?php
if (isset($_POST['_token'])) {
    $_SESSION['alert'] = [
        'type'      => 'success',
        'message'   => $_POST['name'] . ' berhasil diperbarui'
    ];
    echo "<meta http-equiv='refresh' content='0; url=dashboard.php?menu=destinations'>";
}
?>

<link rel="stylesheet" href="./assets/back-office/plugins/daterangepicker/daterangepicker.css">
<style>
    .note-placeholder{
        display: block;
    }
</style>
<div class="content-wrapper">
    <section class="content-header bg-white p-2 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <span class="h4">Destinasi</span>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php?menu=destinations">Daftar</a></li>
                        <li class="breadcrumb-item active">Ubah</li>
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
                            <h3 class="card-title">Ubah Destinasi</h3>
                        </div>
                        <form class="form-horizontal" action="" method="post">
                            <input name="_token" type="hidden" value="<?= generateRandomString(60) ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="iName" class="col-form-label col-sm-3 text-lg-right text-left">Nama</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="iName" placeholder="Nama" name="name" value="California">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="iCategory" class="col-form-label col-sm-3 text-lg-right text-left">Kategori</label>
                                    <div class="col-sm-6">
                                       <select name="" class="form-control" id="iCategory">
                                            <option value="">Pilih kategori</option>
                                            <option value="">Indonesia</option>
                                            <option value="">Malaysia</option>
                                            <option value="" selected>United State of America</option>
                                       </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="iPrice" class="col-form-label col-sm-3 text-lg-right text-left">Harga</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="text" id="iPrice" name="price" class="form-control" placeholder="Harga" data-type="currency" value="1300000">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="iDate" class="col-form-label col-sm-3 text-lg-right text-left">Tanggal</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="iDate" placeholder="Tanggal Berangkat" name="date" value="03/27/2023 - 04/23/2023">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="iImage" class="col-form-label col-sm-3 text-lg-right text-left">Thumnail</label>
                                    <div class="col-sm-6">
                                        <input type="file" accept="image/*"  class="form-control" id="iImage" placeholder="Thumnail" name="image">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="iDescription" class="col-form-label col-sm-3 text-lg-right text-left">Deskripsi</label>
                                    <div class="col-sm-6">
                                        <textarea id="iDescriotion" placeholder="Masukkan deskripsi">
                                            <p>California adalah sebuah negara bagian di Amerika Serikat bagian barat. California berbatasan dengan Oregon di utara, Nevada dan Arizona di timur, negara bagian Baja California di Meksiko ke arah selatan; dan memiliki garis pantai sepanjang Samudra Pasifik ke arah barat.</p>
                                            <p>Tempat wisata di Los Angeles menghadirkan berjuta entartainment berkelas dunia. Dari mulai pusat pembuatan Film Hollywood, hingga pusat rekaman penyanyi tingkat dunia, ya di LA tempatnya.</p>
                                            <div class="single_destination">
                                                <h4>Hari ke 1</h4>
                                                <p>Berkunjung Ke Hollywood</p>
                                                <p>Salah satu tempat yang terkenal di Hollywood, sekaligus landmark, berada di Hollywood Hills. Tulisan besar “HOLLYWOOD” yang ada di sebuah bukit, yang sering kita liat di film-film, di situlah tempat landmark tersebut berada. Hollywood juga menghadirkan spot-spot yang sangat instagramable, hingga tempat-tempat yang romantis, terutama saat malam tiba.</p>
                                            </div>
                                            <div class="single_destination">
                                                <h4>Hari ke 2</h4>
                                                <p>Universal Studios Hollywood</p>
                                                <p>Tempat wisata di LA selanjutnya adalah tempat wisata keluarga yang sangat recommended, sekaligus menjadi tempat pembuatan film-film Hollywood yang terkenal di dunia. Nama objek wisatanya adalah Universal Studio Hollywood. Banyak sekali wahana yang bisa dicoba oleh anda, beserta anak-anak. Bahkan di Universal Studio Hollywood menyediakan paket Studi Tour.</p>
                                            </div>
                                            <div class="single_destination">
                                                <h4>Hari ke 3</h4>
                                                <p>Graffith Park</p>
                                                <p>Tempat wisata selanjutnya adalah taman di Los Angeles yang sangat terkenal, yang bernama Griffith Park. Selain menyajikan view alam yang keren, aktivitas wisata di Griffith Park juga tidak boleh dilewatkan.</p>
                                            </div>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button name="submit" type="submit" class="btn btn-info mr-2"><i class="fa fa-save mr-1"></i> Simpan</button>
                                    <a href="dashboard.php?menu=destinations" class="btn btn-default">Batal</a>
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
    <script type="text/javascript" src="./assets/back-office/plugins/daterangepicker/daterangepicker.js"></script>
    <script>
        $("#iDate").daterangepicker(
        {
            autoUpdateInput: false,
            locale: {
                format: "YYYY-MM-DD"
            },
        }, 
        
        function(start, end, label) {
            $("#iDate").on("apply.daterangepicker", function(ev, picker) {
                $(this).val(picker.startDate.format("MM/DD/YYYY") + " - " + picker.endDate.format("MM/DD/YYYY"));
            });

            $("#iDate").on("cancel.daterangepicker", function(ev, picker) {
                $(this).val("");
            });
        });
    </script>
    <script type="text/javascript" src="./assets/vendor/autoNumeric/js/autoNumeric.min.js"></script>
    <script type="text/javascript" src="./assets/vendor/autoNumeric/js/autoNumericInit.js"></script>
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
