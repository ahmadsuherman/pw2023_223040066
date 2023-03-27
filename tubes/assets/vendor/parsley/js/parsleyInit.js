$(function () {
  const $form = $('form[data-form="validate"]'),
    $formGroup = $form.find(".form-group");
  $.extend(window.Parsley.options, {
    errorClass: "is-invalid",
    successClass: "is-valid",
    validationThreshold: 0,
    classHandler: function (ParsleyField) {
      return ParsleyField.$element.parents(".form-control");
    },
    errorsContainer: function (ParsleyField) {
      const $formColumn = ParsleyField.$element.parents(".form-group").find(".col-sm-10");
      if ($formColumn.length) return $formColumn;
      return ParsleyField.$element.parents(".form-group");
    },
    errorsWrapper: '<div class="invalid-feedback d-block"></div>',
    errorTemplate: "<div></div>",
  });
  window.Parsley.addValidator("unequalto", {
    requirementType: "string",
    validateString: function (value, element) {
      return value !== $(element).val();
    },
    messages: {
      en: "The values cannot be the same.",
    },
  });
  window.Parsley.addValidator("mindate", {
    requirementType: "string",
    validateString: function (value, element) {
      return moment(value).isAfter($(element).val());
    },
    messages: {
      en: "The values cannot be less or the same.",
    },
  });
  $form.parsley();
  $form.on("submit", function () {
    $(this).find('input[type="submit"]').attr("disabled", true).html('<i class="fa fa-spinner" role="status" aria-hidden="true"></i> Mohon Tunggu...');
  });
});
