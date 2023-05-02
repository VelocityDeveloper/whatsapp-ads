jQuery(function ($) {
  $(".input-control").on("input", function () {
    if ($("#input-nama").val() && $("#input-whatsapp").val()) {
      $(".button-green").removeClass("disable");
      $(".button-green").addClass("enable");
    } else {
      $(".button-green").removeClass("enable");
      $(".button-green").addClass("disable");
    }
  });
});
