$(document).ready(function () {

  $.post("../../../setting.php", { check: "check" }, function (data) {
    if (data == "true") {
      location.href = "../../";
      return true;
    } else {

      $.post("../../../setting.php", { security: "lv1" }, function (data) {
        console.log(data);
      });
    }
  });
});
