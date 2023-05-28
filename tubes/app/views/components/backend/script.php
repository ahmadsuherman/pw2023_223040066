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
       
    <?php if (!empty($data['trix'])) { ?>
    <script type="text/javascript" src="<?= BASE_URL ?>/back-office/plugins/trix/trix.min.js"></script>
    <script>
        $(function () {
            $('input[type=url]').removeAttr('required');
        })
    </script>
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

    <?php if (!empty($data['leaflet'])) { ?>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
        integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
        crossorigin=""></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    <?php } ?>

    <?php if (!empty($data['createLeaflet'])) { ?>
    <script>
        var mapCenter = [-2.4833826, 117.8902853];
        var map = L.map('mapid').setView(mapCenter, 5);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="#">Ahmad Suherman</a> contributors'
        }).addTo(map);

        var marker = L.marker(mapCenter).addTo(map);
        function updateMarker(lat, lng) {
            marker
            .setLatLng([lat, lng])
            .bindPopup("Your location :  " + marker.getLatLng().toString())
            .openPopup();
            return false;
        };

        map.on('click', function(e) {
            let latitude = e.latlng.lat.toString().substring(0, 15);
            let longitude = e.latlng.lng.toString().substring(0, 15);
            $('#latitude').val(latitude);
            $('#longitude').val(longitude);
            updateMarker(latitude, longitude);
        });

        var updateMarkerByInputs = function() {
            return updateMarker( $('#latitude').val() , $('#longitude').val());
        }
        $('#latitude').on('input', updateMarkerByInputs);
        $('#longitude').on('input', updateMarkerByInputs);
    </script>
    <?php } ?>

    <?php if (!empty($data['showLeaflet'])) { ?>
        <script>
        var map = L.map('mapid').setView([<?= $data['destination']['latitude']; ?>, <?= $data['destination']['longitude']; ?>], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="#">Ahmad Suherman</a> contributors'
        }).addTo(map);

        L.marker([<?= $data['destination']['latitude']; ?>, <?= $data['destination']['longitude']; ?>]).addTo(map)
        .bindPopup('<?= $data['destination']['name']?>');
        
    </script>
    <?php } ?>
    
    <?php if(!empty($data['editLeaflet'])) { ?>
    <script>
        var mapCenter = [<?= $data['destination']['latitude'] ?>, <?= $data['destination']['longitude'] ?>];
        var map = L.map('mapid').setView(mapCenter, 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="#">Ahmad Suherman</a> contributors'
        }).addTo(map);

        var marker = L.marker(mapCenter).addTo(map);
        function updateMarker(lat, lng) {
            marker
            .setLatLng([lat, lng])
            .bindPopup("Your location :  " + marker.getLatLng().toString())
            .openPopup();
            return false;
        };

        map.on('click', function(e) {
            let latitude = e.latlng.lat.toString().substring(0, 15);
            let longitude = e.latlng.lng.toString().substring(0, 15);
            $('#latitude').val(latitude);
            $('#longitude').val(longitude);
            updateMarker(latitude, longitude);
        });

        var updateMarkerByInputs = function() {
            return updateMarker( $('#latitude').val() , $('#longitude').val());
        }
        $('#latitude').on('input', updateMarkerByInputs);
        $('#longitude').on('input', updateMarkerByInputs);

    </script>
    <?php } ?>
    <?php if (!empty($data['parsley'])) { ?>
    <script src="<?= BASE_URL ?>/back-office/plugins/parsley/parsley.min.js"></script>
    <script>
        $(function () {
            const $form = $('form[data-form="validate"]'),
            $formGroup = $form.find('.form-group')

            $.extend(window.Parsley.options, {
                errorClass: 'is-invalid',
                successClass: 'is-valid',
                validationThreshold:0,
                classHandler: function(ParsleyField) {
                    return ParsleyField.$element.parents('.form-control')
                },
                errorsContainer: function(ParsleyField) {
                    const $formColumn = ParsleyField.$element.parents('.form-group').find('.col-sm-10')
                    if ($formColumn.length) return $formColumn
                    return ParsleyField.$element.parents('.form-group')
                },
                errorsWrapper: '<div class="invalid-feedback d-none"></div>',
                errorTemplate: '<div></div>'
            })

            window.Parsley.addValidator('unequalto', {
                requirementType: 'string',
                validateString: function(value, element) {
                    return value !== $(element).val()
                },
                messages: {
                    en: 'The values cannot be the same.'
                }
            })

            window.Parsley.addValidator('mindate', {
                requirementType: 'string',
                validateString: function(value, element) {
                    return moment(value).isAfter($(element).val())
                },
                messages: {
                    en: 'The values cannot be less or the same.'
                }
            })
            console.log($form);
            $form.parsley()
            
            $form.on('submit', function () {
                console.log("hihi")
                $(this).find('.btn[type="submit"]').attr('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>')
            })
        })
    </script>
    <?php } ?>

    <?php if(!empty($data['chart'])) { ?>

    <script src="<?= BASE_URL ?>/back-office/plugins/chart.js/Chart.min.js"></script>
    <script>
        // Menginisialisasi grafik menggunakan Chart.js
        var ctx = document.getElementById('newUserDashboard').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($data['labelNewUser']); ?>,
                datasets: [{
                    label: 'Jumlah Pengguna',
                    data: <?php echo json_encode($data['countNewUser']); ?>,
                    borderColor: 'blue',
                    backgroundColor: 'rgba(0, 0, 255, 0.1)',
                    fill: true
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        min: 0,
                        ticks: {
                            beginAtZero: true,
                            // stepSize: 1,
                        }
                    }]
                },
            }
        });

        var ctx = document.getElementById('destinationGroupByCategoryDashboard').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($data['labelDestination']); ?>,
                datasets: [{
                    label: 'Jumlah Destinasi',
                    data: <?php echo json_encode($data['countDestination']); ?>,
                    borderColor: 'blue',
                    backgroundColor: '#2196F3',
                    fill: true
                }]
            },
            options: {
                plugins: {
                    legend: {
                    display: false
                    }
                },
                scales: {
                    yAxes: [{
                        min: 0,
                        ticks: {
                            beginAtZero: true,
                            stepSize: 1,
                        }
                    }]
                },
            }
        });

        var ctx = document.getElementById('categoryGroupByIsActive').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($data['labelCategory']); ?>,
                datasets: [{
                    data: <?php echo json_encode($data['countCategory']); ?>,
                    borderColor: ['green', 'red'],
                    backgroundColor: ['#4CAF50', '#E57373'],
                    fill: true
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        precision: 0
                    }
                }
            }
        });
    </script>
    <?php } ?>
</body>
</html>