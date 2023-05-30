</div>
<!-- jQuery -->
<script src="<?= BASE_URL ?>/back-office/plugins/jquery/jquery.min.js"></script>
<script src="<?= BASE_URL ?>/back-office/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASE_URL ?>/back-office/js/adminlte.min.js"></script>
<script src="<?= BASE_URL ?>/back-office/js/demo.js"></script>
<script src="<?= BASE_URL ?>/back-office/plugins/pace-progress/pace.min.js"></script>

<?php if(!empty($data['leaflet'])) { ?>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
<?php } ?>

<?php if (!empty($data['indexLeaflet'])) { ?>
<script>
    var map = L.map('mapid').setView([-2.4833826, 117.8902853], 5);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="#">Ahmad Suherman</a> contributors'
    }).addTo(map);
    var markers = L.markerClusterGroup();

    <?php
    // Retrieve Grouped Locations
    $groupedLocations = $data['destinations'];
    if ($groupedLocations) {
        $markers = '';

        foreach ($groupedLocations as $group) {
            $coordinates = explode(';', $group['coordinates']);
            $coordinatesGroup = '';

            foreach ($coordinates as $coordinate) {
                $coords = explode(',', $coordinate);
                $latitude = $coords[0];
                $longitude = $coords[1];
                $coordinatesGroup .= "[$latitude, $longitude],";
            }

            $coordinatesGroup = rtrim($coordinatesGroup, ',');
            $baseURL = BASE_URL;
            $category       = $group['category_name'];
            $name           = $group['name'];
            $categoryUid    = $group['uid'];
            $image          = $group['image'];
            $displayImage   = "<img class='img-fluid img-rounded' src='$baseURL/uploads/img/destination/$image'>";
            
            $markers .= "var coordinatesGroup = [$coordinatesGroup];
                        var category = '$category';
                        var content = `<strong>Nama: </strong><a href=destinations/show/$categoryUid>$name</a> <br> 
                        <strong>Kategori: </strong>$category <br>
                        $displayImage
                        `;
                        
                        var markerOptions = { 
                          title: name,
                          
                        };
                        var marker = L.marker(coordinatesGroup[0], markerOptions).bindPopup(content);
                        markers.addLayer(marker);";
        }

        echo $markers;
    } else {
        echo "console.log('Failed to retrieve grouped locations.');";
    }
    ?>

    map.addLayer(markers);
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

<?php if (!empty($data['shareButton'])) { ?>
<script>
    const url = window.location.href;

    function shareTo(type) {
        event.preventDefault();
        shareOn(type);
    }

    function shareOn(type) {
        if(type == 'whatsapp'){
            window.open('https://api.whatsapp.com/send?text=' + encodeURIComponent(url), '_blank');
        } else if(type == 'telegram'){
            window.open('https://t.me/share/url?url=' + encodeURIComponent(url), '_blank');
        } else if(type == 'facebook'){
            window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url), '_blank');
        } else if(type == 'twitter'){
            window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(url), '_blank');
        } else {
            console.log('error. tidak ditemukan tipe');
        }
        
    }
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
        
        $form.parsley()
        
        $form.on('submit', function () {
            $(this).find('.btn[type="submit"]').attr('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>')
        })
    })
</script>
<?php } ?>
<script>
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>
</html>