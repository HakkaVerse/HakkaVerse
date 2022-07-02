$(document).ready(function () {
  $.post("../../../setting.php", {check_xss: "lv5"},function(data){
    if(data == "true"){
      location.href = "../5";
      return true;
    }
  });
  var confirm = $("#confirm");
  var input = $("#input");
  var alert1 = $("#alert1");
  var alert2 = $("#alert2");
  var payload = $("#payload");
  var textalert1 = $("#textalert1");
  var textalert2 = $("#textalert2");
  var buttonalert1 = $("#buttonalert1");
  var buttonalert2 = $("#buttonalert2");
  var body = $("#body");
  var textoutput = $("#textoutput");
  var xss = $("#xss");
  var output = $("#output");
  var nextlevel = $("#nextlevel");

  confirm.click(function () {
    if (input.val().indexOf(`" onload="alert('HKA');`) < 0) {
      output.removeClass("hide");
      //textoutput.text(input.val());
      payload.text(input.val());
      xss.text("XSS Payload...");
      setTimeout(function () {
        xss.text("XSS Payload Failed");
      }, 3000);
    }


    if (input.val().indexOf(`" onload="alert('HKA');`) > 1) {
      body.addClass("hide");
      alert2.removeClass("hide");
      payload.text(input.val());
      //payload.text('&lt;script&gt;alert("Hello")&lt;/script&gt;');
      buttonalert2.click(function () {
        body.removeClass("hide");
        alert2.addClass("hide");
        output.removeClass("hide");
        $("html, body").animate({ scrollTop: $(document).height() }, 0);
        //textoutput.text("");
        xss.text("XSS Payload...");
        setTimeout(function () {
          input.val("/images/hack.jpg");
          $.post("../../../setting.php", {xss: "lv6"},function(data){
            console.log(data);
          });
          xss.text("XSS Payload Successful");
          nextlevel.removeClass("disabled");
          nextlevel.removeClass("btn-dark");
          nextlevel.removeClass("text-secondary");
          nextlevel.addClass("nextLevel");
          $("#win").removeClass("hide");
          document.cookie = "win=HKA(XSS_MASTER); path=/;";
          
        }, 3000);
      });
    }
  });

  /*if(getCookie("win")){
    input.val("/images/hack.jpg");
    xss.text("XSS Payload Successful");
    output.removeClass("hide");
    nextlevel.removeClass("disabled");
    nextlevel.removeClass("btn-dark");
    nextlevel.removeClass("text-secondary");
    nextlevel.addClass("nextLevel");
    $("#win").removeClass("hide");
  }*/

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

