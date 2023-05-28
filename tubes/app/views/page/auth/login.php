<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $data['title'] . " - " . APP_NAME; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->

  <?php if (isset($data['error'])) { ?>
      <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <?= $data['message'] ?>
      </div>
  <?php } ?>

  <?php if (isset($data['success'])) { ?>
      <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <?= $data['message'] ?>
      </div>
  <?php } ?>
  
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <a href="<?= BASE_URL ?>" class="h1"><img class="img-fluid" src="<?= BASE_URL ?>/logo.png" alt="Logo"></a>
    </div>
    
    
    <div class="card-body">
      <p class="login-box-msg">Masuk ke <?= APP_NAME ?></p>

      <form data-form="validate" action="<?= BASE_URL ?>/login" method="POST">
        <input type="hidden" name="submit">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Kata Sandi" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          
          <!-- /.col -->
        </div>
      </form>

      <p class="m-auto text-center p-2">Atau</p>
      <div class="row">
        <div class="col-2">
            <a href="<?= BASE_URL ?>" class="btn btn-outline-secondary btn-block"><i class="fa fa-backward"></i></a>
        </div>
        <div class="col-10"><a href="<?= BASE_URL ?>/register" class="btn btn-success btn-block">Buat Akun Baru</a></div>
      </div>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= BASE_URL ?>/back-office/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= BASE_URL ?>/back-office/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASE_URL ?>/back-office/js/adminlte.min.js"></script>
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
</body>
</html>
