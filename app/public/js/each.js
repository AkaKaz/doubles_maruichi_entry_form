jQuery(function ($) {
  "use strict";

  $("input.ha").click(function () {
    side();
  });
  function side() {
    if ($("input.ha").prop("checked") === true) {
      $(".slide tr:not(:eq(0))").slideUp();
    } else {
      $(".slide tr:not(:eq(0))").slideDown();
    }
  }
  side();
});
