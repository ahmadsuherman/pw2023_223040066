<?php
    if (isset($_POST['id'])) {
        $_SESSION['alert'] = [
            'type'      => 'success',
            'message'   => $_POST['name'] . ' berhasil diperbarui'
        ];
    }
?>

<div class="content-wrapper">
    <section class="content-header bg-white p-2 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <span class="h4">Kategori</span>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Daftar</li>
                    </ol>
                </div>
                <div class="col m-auto">
                    <div class="float-right">
                        <a href="dashboard.php?menu=add-categories" class="btn btn-primary"> <i class="fa fa-plus-circle mr-1"></i> Buat Baru</a>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-11">
                <?php if(isset($_SESSION['alert'])) : ?>
                <div class="alert alert-<?=$_SESSION['alert']['type']?> alert-dismissible fade show" role="alert">
                <?=$_SESSION['alert']['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <?php unset($_SESSION['alert']); endif; ?>
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Kategori</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-right" width="5">No</th>
                                        <th>Nama</th>
                                        <th>Tipe</th>
                                        <th>Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Restoran Makanan</td>
                                        <td>Blog</td>
                                        <td><span class='badge badge-primary'>Aktif</span></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <!-- <a href="dashboard.php?menu=detail-categories&id=1" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a> -->
                                                <a href="dashboard.php?menu=edit-categories&id=1" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                                <button href="javascript:;" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Non Aktifkan"><i class="fas fa-fw fa-times" onclick="updateStatus(1, 'Restoran Makanan')"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Berita Perjalanan</td>
                                        <td>Blog</td>
                                        <td><span class='badge badge-danger'>Tidak Aktif</span></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <!-- <a href="dashboard.php?menu=detail-categories&id=2" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a> -->
                                                <a href="dashboard.php?menu=edit-categories&id=2" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                                <button href="javascript:;" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Non Aktifkan"><i class="fas fa-fw fa-times" onclick="updateStatus(2, 'Berita Perjalanan')"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Teknologi Modern</td>
                                        <td>Blog</td>
                                        <td><span class='badge badge-primary'>Aktif</span></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <!-- <a href="dashboard.php?menu=detail-categories&id=3" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a> -->
                                                <a href="dashboard.php?menu=edit-categories&id=3" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                                <button href="javascript:;" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Non Aktifkan"><i class="fas fa-fw fa-times" onclick="updateStatus(3, 'Teknologi Modern')"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Produk</td>
                                        <td>Blog</td>
                                        <td><span class='badge badge-danger'>Tidak Aktif</span></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <!-- <a href="dashboard.php?menu=detail-categories&id=4" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a> -->
                                                <a href="dashboard.php?menu=edit-categories&id=4" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                                <button href="javascript:;" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Non Aktifkan"><i class="fas fa-fw fa-times" onclick="updateStatus(4, 'Produk')"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>5</td>
                                        <td>Inspirasi</td>
                                        <td>Blog</td>
                                        <td><span class='badge badge-danger'>Tidak Aktif</span></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <!-- <a href="dashboard.php?menu=detail-categories&id=5" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a> -->
                                                <a href="dashboard.php?menu=edit-categories&id=6" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                                <button href="javascript:;" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Non Aktifkan"><i class="fas fa-fw fa-times" onclick="updateStatus(5, 'Inspirasi')"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>United State of America</td>
                                        <td>Tempat</td>
                                        <td><span class='badge badge-primary'>Aktif</span></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <!-- <a href="dashboard.php?menu=detail-categories&id=6" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a> -->
                                                <a href="dashboard.php?menu=edit-categories&id=7" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                                <button href="javascript:;" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Non Aktifkan"><i class="fas fa-fw fa-times" onclick="updateStatus(6, 'United State of America')"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Afrika</td>
                                        <td>Tempat</td>
                                        <td><span class='badge badge-primary'>Aktif</span></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <!-- <a href="dashboard.php?menu=detail-categories&id=7" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a> -->
                                                <a href="dashboard.php?menu=edit-categories&id=8" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                                <button href="javascript:;" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Non Aktifkan"><i class="fas fa-fw fa-times" onclick="updateStatus(7, 'Afrika')"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Brazil</td>
                                        <td>Tempat</td>
                                        <td><span class='badge badge-primary'>Aktif</span></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <!-- <a href="dashboard.php?menu=detail-categories&id=7" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a> -->
                                                <a href="dashboard.php?menu=edit-categories&id=8" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                                <button href="javascript:;" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Non Aktifkan"><i class="fas fa-fw fa-times" onclick="updateStatus(8, 'Brazil')"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Canada</td>
                                        <td>Tempat</td>
                                        <td><span class='badge badge-danger'>Tidak Aktif</span></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <!-- <a href="dashboard.php?menu=detail-categories&id=9" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a> -->
                                                <a href="dashboard.php?menu=edit-categories&id=9" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                                <button href="javascript:;" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Non Aktifkan"><i class="fas fa-fw fa-times" onclick="updateStatus(9, 'Canada')"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Indonesia</td>
                                        <td>Tempat</td>
                                        <td><span class='badge badge-primary'>Aktif</span></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <!-- <a href="dashboard.php?menu=detail-categories&id=10" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a> -->
                                                <a href="dashboard.php?menu=edit-categories&id=10" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                                <button href="javascript:;" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Non Aktifkan"><i class="fas fa-fw fa-times" onclick="updateStatus(10, 'Indonesia')"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Australia</td>
                                        <td>Tempat</td>
                                        <td><span class='badge badge-danger'>Tidak Aktif</span></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <!-- <a href="dashboard.php?menu=detail-categories&id=11" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a> -->
                                                <a href="dashboard.php?menu=edit-categories&id=11" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                                <button href="javascript:;" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Non Aktifkan"><i class="fas fa-fw fa-times" onclick="updateStatus(11, 'Australia')"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Switzerland</td>
                                        <td>Tempat</td>
                                        <td><span class='badge badge-primary'>Aktif</span></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <!-- <a href="dashboard.php?menu=detail-categories&id=12" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a> -->
                                                <a href="dashboard.php?menu=edit-categories&id=12" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                                <button href="javascript:;" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Non Aktifkan"><i class="fas fa-fw fa-times" onclick="updateStatus(12, 'Switzerland')"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
$scripts = '
    <script src="./assets/back-office/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="./assets/back-office/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="./assets/back-office/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="./assets/back-office/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="./assets/back-office/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="./assets/back-office/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="./assets/back-office/plugins/jszip/jszip.min.js"></script>
    <script src="./assets/back-office/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="./assets/back-office/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="./assets/back-office/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="./assets/back-office/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="./assets/back-office/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": true, "autoWidth": false,
                language: {
                    lengthMenu: `_MENU_`,
                    zeroRecords: "Tidak ada catatan yang cocok untuk ditemukan",
                    infoEmpty: "Tidak ada data",
                    emptyTable: "Tidak ada catatan yang cocok untuk ditemukan",
                    paginate: {
                        first: `<i class="fas fa-arrow-to-left fa-fw"></i>`,
                        last: `<i class="fas fa-arrow-to-right fa-fw"></i>`,
                        next: `<i class="fas fa-arrow-right fa-fw"></i>`,
                        previous: `<i class="fas fa-arrow-left fa-fw"></i>`
                    },
                    processing: `<div class="h-100 d-flex flex-column align-items-center justify-content-center">
                        <div class="spinner-border text-primary mb-3" role="status"><span class="sr-only">Processing...</span></div>
                        <span class="font-weight-semibold">Mohon Tunggu...</span>
                    </div>`,
                    search: `Cari`
                },
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo("#example1_wrapper .col-md-6:eq(0)");
        });

        function updateStatus(id, name) {
            Swal.mixin({
                icon: "warning",
                customClass: {
                    confirmButton: "btn btn-primary waves-effect waves-light mr-2",
                    cancelButton: "btn btn-default waves-effect waves-light"
                },
                buttonsStyling: false
            }).fire({
                html: `<h4>Status Kategori</h4>
                <p class="mb-0">Apakah anda yakin ingin mengubah status ${name}?</p>`,
                showCancelButton: true,
                confirmButtonText: "OK",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    $("body").append(`
                        <form action="" method="POST" class="d-none" id="updateStatus">
                        <input type="hidden" name="id" value="${id}">
                        <input type="hidden" name="name" value="${name}">
                        </form>
                    `)

                    $("#updateStatus").trigger("submit")
                }
            })
        }
    </script>'
?>
