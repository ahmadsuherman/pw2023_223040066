$(document).ready(function () {
  (function ($) {
    "use strict";

    jQuery.validator.addMethod(
      "answercheck",
      function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value);
      },
      "type the correct answer -_-"
    );

    // validate contactForm form
    $(function () {
      $(".form-validate").validate({
        rules: {
          name: {
            required: true,
            minlength: 2,
          },
          subject: {
            required: true,
            minlength: 4,
          },
          number: {
            required: true,
            minlength: 5,
          },
          email: {
            required: true,
            email: true,
          },
          message: {
            required: true,
            minlength: 20,
          },
          userame: {
            required: true,
          },
          password: {
            required: true,
          },
        },
        messages: {
          name: {
            required: "Nama harus diisi",
            minlength: "Minimal 2 karakter",
          },
          subject: {
            required: "Subjek harus diisi",
            minlength: "Minimal 4 karakter",
          },
          number: {
            required: "Nomor harus diisi",
            minlength: "Minimal 5 karakter",
          },
          email: {
            required: "Email harus diisi",
            email: "Email tidak valid",
          },
          message: {
            required: "Pesan harus diisi",
            minlength: "Minimal 20 karakter",
          },
          username: {
            required: "Username harus diisi",
          },
          password: {
            required: "Kata sandi harus diisi",
          },
        },
        submitHandler: function (form) {
          $(form).ajaxSubmit({
            type: "POST",
            data: $(form).serialize(),
            // url: "contact_process.php",
            success: function () {
              $("#contactForm :input").attr("disabled", "disabled");
              $("#contactForm").fadeTo("slow", 1, function () {
                $(this).find(":input").attr("disabled", "disabled");
                $(this).find("label").css("cursor", "default");
                $("#success").fadeIn();
                $(".modal").modal("hide");
                $("#success").modal("show");
              });
            },
            error: function () {
              $("#contactForm").fadeTo("slow", 1, function () {
                $("#error").fadeIn();
                $(".modal").modal("hide");
                $("#error").modal("show");
              });
            },
          });
        },
      });
    });
  })(jQuery);
});
