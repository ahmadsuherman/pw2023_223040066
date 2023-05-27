</div>
    <!-- jQuery -->
    <script src="<?= BASE_URL ?>/back-office/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= BASE_URL ?>/back-office/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?= BASE_URL ?>/back-office/plugins/pace-progress/pace.min.js"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script src="<?= BASE_URL ?>/back-office/js/adminlte.min.js"></script>
    <script src="<?= BASE_URL ?>/back-office/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= BASE_URL ?>/back-office/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    
    <?php if (!empty($data['sweetalert2'])) { ?>
    <script src="<?= BASE_URL ?>/back-office/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <?php } ?>

    <?php if (!empty($data['toastr'])) { ?>
    <script src="<?= BASE_URL ?>/back-office/plugins/toastr/toastr.min.js"></script>
    <?php } ?>

    <?php if (!empty($data['moment'])) { ?>
    <script type="text/javascript" src="<?= BASE_URL ?>/back-office/plugins/moment/moment.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>/back-office/plugins/moment/locale/id.js"></script>
    <?php } ?>

    <?php if (!empty($data['dataTable'])) { ?>
    <script src="<?= BASE_URL ?>/back-office/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= BASE_URL ?>/back-office/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= BASE_URL ?>/back-office/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= BASE_URL ?>/back-office/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= BASE_URL ?>/back-office/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= BASE_URL ?>/back-office/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= BASE_URL ?>/back-office/plugins/jszip/jszip.min.js"></script>
    <script src="<?= BASE_URL ?>/back-office/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= BASE_URL ?>/back-office/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= BASE_URL ?>/back-office/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= BASE_URL ?>/back-office/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= BASE_URL ?>/back-office/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    
    <script>
        $(function () {
            $(".dataTable").DataTable({
                "responsive": true, "lengthChange": true, "autoWidth": false,
                language: {
                    buttons: {
                        copyTitle: 'Menyalin ke papan klip',
                        copySuccess: {
                            _: 'Disalin %d baris ke papan klip',
                            1: 'Disalin 1 baris ke papan klip'
                        }
                    },
                    lengthMenu: `_MENU_`,
                    zeroRecords: "Tidak ada catatan yang cocok untuk ditemukan",
                    infoEmpty: "Tidak ada data",
                    emptyTable: "Tidak ada catatan yang cocok untuk ditemukan",
                    search: "Cari:",
                    info: "Halaman _PAGE_ dari _PAGES_ lainnya",
                    infoFiltered: "(pencarian dari _MAX_ data)",
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
                        <form action="<?= BASE_URL .'/'. $data['updateStatus']?>/${id}" method="POST" class="d-none" id="updateStatus">
                        <input type="hidden" name="id" value="${id}">
                        <input type="hidden" name="name" value="${name}">
                        </form>
                    `)

                    $("#updateStatus").trigger("submit")
                }
            })
        }
    </script>
    <?php } ?>
</body>
</html>