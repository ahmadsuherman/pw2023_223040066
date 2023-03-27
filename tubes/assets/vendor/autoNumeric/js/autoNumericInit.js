$(function () {
  $('[data-type="currency"]').each(function () {
    initAutonumeric("currency", this);
  });
  // $('[data-type="number"]').each(function () {
  //     initAutonumeric('number', this)
  // })
  $('[data-type="number-decimal"]').each(function () {
    initAutonumeric("number-decimal", this);
  });
  $('[data-type="number-percentage"]').each(function () {
    initAutonumeric("number-percentage", this);
  });
  $('[data-type="number-decimal-percentage"]').each(function () {
    initAutonumeric("number-decimal-percentage", this);
  });
});
function initAutonumeric(type, el) {
  if (type == "currency") {
    new AutoNumeric(el, {
      // currencySymbol: 'IDR ',
      digitGroupSeparator: ".",
      decimalCharacter: ",",
      emptyInputBehavior: "always",
      minimumValue: "1",
      modifyValueOnWheel: false,
      unformatOnSubmit: true,
      decimalPlaces: 0,
    });
  } else if (type == "number") {
    new AutoNumeric(el, {
      digitGroupSeparator: ",",
      decimalCharacter: ".",
      decimalPlaces: 0,
    });
  } else if (type == "number-decimal") {
    new AutoNumeric(el, {
      digitGroupSeparator: ",",
      decimalCharacter: ".",
    });
  } else if (type == "number-percentage") {
    new AutoNumeric(el, {
      currencySymbol: " %",
      currencySymbolPlacement: "s",
      digitGroupSeparator: ",",
      decimalCharacter: ".",
      decimalPlaces: 0,
    });
  } else if (type == "number-decimal-percentage") {
    new AutoNumeric(el, {
      currencySymbol: " %",
      currencySymbolPlacement: "s",
      digitGroupSeparator: ",",
      decimalCharacter: ".",
    });
  }
}
