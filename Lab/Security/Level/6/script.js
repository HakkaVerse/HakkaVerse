$(document).ready(function () {
  $.post("../../../setting.php", { check_security: "lv5" }, function (data) {
    if (data == "true") {
      location.href = "../5";
      return true;
    } else {
      var input = $("#input");
      input.val(getCookie("end"));
      $.post("../../../setting.php", { security: "lv6" }, function (data) {
        console.log(data);
      });

    }
  });
});


function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}