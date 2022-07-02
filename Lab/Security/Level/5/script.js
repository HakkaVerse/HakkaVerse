

$(document).ready(function () {
  $.post("../../../setting.php", {check_security: "lv4"},function(data){
    if(data == "true"){
      location.href = "../4";
      return true;
    }
  });
  var code = getCookie("code");
  var form = $("#form");
  var form_send = $("#form_send");
  var input = $("#input");
  var buttom = $("#buttom");
  var text1 = $("#text1");
  var text2 = $("#text2");
  var nextlevel = $("#nextlevel");
  var web_request = $("#web_request");
  var textunderinput = $("#textunderinput");
  var textunderinput2 = $("#textunderinput2");
  var reset_code = $("#reset_code");



  /** Command */
  textunderinput.html("<h5><b style='color:#EB8145; '>Code " + code + "</b> ไม่ถูกต้อง !!</h5>")
  textunderinput2.html("<h5><b style='color:#EB8145; '>Code " + code + "</b> ไม่ถูกต้อง !!</h5>")
  buttom.click(function () {
    if (input.val() && $.isNumeric(input.val())) {
      /** Command */
      //text1.addClass("hide");
      //text2.removeClass("hide");
      web_request.removeClass("hide");
      form_send.removeClass("hide");
      textunderinput.html("<h5><b style='color:#EB8145; '>Code " + input.val() + "</b> ไม่ถูกต้อง !!</h5>")
      reset_code.text("reset_code=" + input.val() + "&username=Hakka.Lab");
    } else {
      /** Command */
    }
  })



  /** Web Request Repeater */
  var min = $("#min");
  var max = $("#max");
  var forceButton = $("#force");
  var request1 = $("#request1");
  var request2 = $("#request2");
  var form1 = $("#form1");
  var form2 = $("#form2");

  forceButton.click(function () {
    if(max.val()>10000){
      return;
    }
    if (min.val() && $.isNumeric(min.val()) && max.val() && $.isNumeric(max.val())) {
      request1.addClass("hide");
      request2.removeClass("hide");
      var count = min.val();
      var timer = setInterval(function(){
        if(count <= max.val()){
          var c = 0;
          if(count < 10){
            c = "000"+count;
          }
          if(count >= 10){
            c = "00"+count;
          }
          if(count >= 100){
            c = "0"+count;
          }
          if(count >= 1000){
            c = count;
          }
          // แก้ตัวเลขตรงนี้นะ
          if(c == "0511"){
            text1.addClass("hide");
            text2.removeClass("hide");
            form1.addClass("hide");
            form2.removeClass("hide");
            textunderinput2.html("<h5><b style='color:yellowgreen; '>Code " + c + "</b> ถูกต้อง !!</h5>")
            reset_code.text("reset_code=" + c + "&username=Hakka.Lab");
            clearInterval(timer);
            return;
          }
          textunderinput.html("<h5><b style='color:#EB8145; '>Code " + c + "</b> ไม่ถูกต้อง !!</h5>")
          reset_code.text("reset_code=" + c + "&username=Hakka.Lab");
          
          count++;
        }else{
          clearInterval(timer);
        }
      },50);
    }
  });



  /** Reset PassWord */
  var resetPasswordButton = $("#resetPasswordButton");
  var newpassword = $("#newpassword");
  var ResetPasswordSuccess = $("#ResetPasswordSuccess");
  resetPasswordButton.click(function(){
    if(newpassword.val()){
      $.post("../../../setting.php", {security: "lv5"},function(data){
          console.log(data);
        });
      form2.addClass("hide");
      ResetPasswordSuccess.removeClass("hide");
      nextlevel.removeClass("disabled");
      document.cookie = "end=HKA{BRUTEFORCING}; path=/;";
    }
  });
});


function getRandomInt(min, max){
	min = Math.ceil(min);
	max = Math.floor(max);
	return Math.floor(Math.random() * (max - min + 1)) + min; 
}
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