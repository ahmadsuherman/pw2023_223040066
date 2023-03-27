
<?php
if (isset($_POST['_token'])) {
    $_SESSION['alert'] = [
        'type'      => 'success',
        'message'   => $_POST['name'] . ' berhasil ditambahkan'
    ];
    echo "<meta http-equiv='refresh' content='0; url=dashboard.php?menu=destinations'>";
}
?>
<div class="content-wrapper">
    <section class="content-header bg-white p-2 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <span class="h4">Destinasi</span>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php?menu=destinations">Daftar</a></li>
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
                            <h3 class="card-title">Tambah Destinasi</h3>
                        </div>
                        <form class="form-horizontal" action="" method="post">
                            <input name="_token" type="hidden" value="<?= generateRandomString(60) ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="iName" class="col-form-label col-sm-3 text-lg-right text-left">Nama</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="iName" placeholder="Nama" name="name">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="iCategory" class="col-form-label col-sm-3 text-lg-right text-left">Kategori</label>
                                    <div class="col-sm-6">
                                       <select name="" class="form-control" id="iCategory">
                                            <option value="">Pilih kategori</option>
                                            <option value="">Indonesia</option>
                                            <option value="">Malaysia</option>
                                            <option value="">United State of America</option>
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
                                            <input type="text" id="iPrice" name="price" class="form-control" placeholder="Harga" data-type="currency">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="iDate" class="col-form-label col-sm-3 text-lg-right text-left">Tanggal</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="iDate" placeholder="Tanggal Berangkat" name="date">
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
