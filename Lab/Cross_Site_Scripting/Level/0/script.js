$(document).ready(function(){
    
  $.post("../../../setting.php", {check: "check"},function(data){
    if(data == "true"){
      location.href = "../../";
      return true;
    }
  });
    var input = $("#input");
    input.val(getCookie("end"));
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