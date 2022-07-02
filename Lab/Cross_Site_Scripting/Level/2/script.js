$(document).ready(function () {
  $.post("../../../setting.php", {check_xss: "lv1"},function(data){
    if(data == "true"){
      location.href = "../1";
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
  var textoutput2 = $("#textoutput2");

  confirm.click(function () {
    if(input.val()){
      if (input.val() != `"><script>alert('HKA');</script>`) {
        output.removeClass("hide");
        textoutput.val(input.val());
        payload.text(input.val());
        xss.text("XSS Payload...");
        setTimeout(function () {
          xss.text("XSS Payload Failed");
        }, 3000);
      }
  
      if (input.val() == `"><script>alert('HKA');</script>`) {
      body.addClass("hide");
      alert2.removeClass("hide");
      payload.text(input.val());
      //payload.text('&lt;script&gt;alert("Hello")&lt;/script&gt;');
      buttonalert2.click(function () {
        body.removeClass("hide");
        alert2.addClass("hide");
        output.removeClass("hide");
        textoutput.val("");
        textoutput2.text('">');
        $("html, body").animate({ scrollTop: $(document).height() }, 0);
        xss.text("XSS Payload...");
        setTimeout(function () {
          $.post("../../../setting.php", {xss: "lv2"},function(data){
            console.log(data);
          });
          xss.text("XSS Payload Successful");
          nextlevel.removeClass("disabled");
          nextlevel.removeClass("btn-dark");
          nextlevel.removeClass("text-secondary");
          nextlevel.addClass("nextLevel");
          
        }, 3000);

      });
      }

    }
  });

});

