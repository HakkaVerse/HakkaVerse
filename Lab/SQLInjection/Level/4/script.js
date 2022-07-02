$(document).ready(function(){
  $.post("../../../setting.php", {check_sql: "lv3"},function(data){
    if(data == "true"){
      location.href = "../3";
      return true;
    }
  });
    var input = $("#input");
    var content1 = $("#content1");
    var article = $("#article");
    var article_code = $("#article_code");
    var content2 = $("#content2");
    var sqlstatus = $("#sqlstatus");
    var sqltext = $("#sqltext");
    var sqlquery = $("#sqlquery");
    var password = $("#password");
    var passwordStatus = $("#passwordStatus");
    var win = $("#win");
    var checkButton = $("#checkButton");
    var textarticle = $("#textarticle");
    var answer1 = $("#answer1");
    var answer2 = $("#answer2");
    var useroutput = $("#useroutput");
    var passoutput = $("#passoutput");
    var result = $("#result");
    var username = $("#username");
    var password = $("#password");
    var formsubmit = $("#formsubmit");
    var jsonoutput = $("#jsonoutput");
    var time = $("#time");
    var bottom = $("#bottom");

    
    
    setInterval(function(){
      if(input.val().indexOf("https://hakka.hka/checkuser?referrer=") < 0){
        input.val("https://hakka.hka/checkuser?referrer=");
      }
    }, 100);
    input.keypress(function(e){
      if(e.which == 13){
        jsonoutput.text("");
        time.text("0.001");
        sqltext.text(input.val().replace("https://hakka.hka/checkuser?referrer=", ""));
        var text = input.val().replace("https://hakka.hka/checkuser?referrer=", "");
        if(text.indexOf("admin123' UNION SELECT SLEEP(5);--") >= 0){
          setTimeout(function(){
            jsonoutput.text("Ok");
            time.text("0.001");
          }, 10);

        }else if(text.indexOf("admin123' UNION SELECT SLEEP(5),2;--") >= 0){
          setTimeout(function(){
            jsonoutput.text("Ok");
            time.text("5.002");
          }, 5001);

        }else if(text.indexOf("admin123' UNION SELECT SLEEP(5),2 where database() like '1%';--") >= 0){
          setTimeout(function(){
            jsonoutput.text("Ok");
            time.text("5.002");
          }, 5002);

        }else if(text.indexOf("admin123' UNION SELECT SLEEP(5),2 where database() like '10%';--") >= 0){
          setTimeout(function(){
            jsonoutput.text("Ok");
            time.text("5.002");
          }, 5002);

        }else if(text.indexOf("admin123' UNION SELECT SLEEP(5),2 where database() like '108%';--") >= 0){
          setTimeout(function(){
            jsonoutput.text("Ok");
            time.text("5.002");
          }, 5002);

        }else if(text.indexOf("admin123' UNION SELECT SLEEP(5),2 where database() like '1082%';--") >= 0){
          setTimeout(function(){
            jsonoutput.text("Ok");
            time.text("5.002");
          }, 5002);



          
        }else if(text.indexOf("user' UNION SELECT SLEEP(5),2;--") >= 0){
          setTimeout(function(){
            jsonoutput.text("Ok");
            time.text("5.002");
          }, 5001);

        }else if(text.indexOf("user'UNION SELECT SLEEP(5),2 from users where username='admin'and password like '1%';--") >= 0){
          setTimeout(function(){
            jsonoutput.text("Ok");
            time.text("5.002");
          }, 5002);

        }else if(text.indexOf("user'UNION SELECT SLEEP(5),2 from users where username='admin'and password like '10%';--") >= 0){
          setTimeout(function(){
            jsonoutput.text("Ok");
            time.text("5.002");
          }, 5002);

        }else if(text.indexOf("user'UNION SELECT SLEEP(5),2 from users where username='admin'and password like '108%';--") >= 0){
          setTimeout(function(){
            jsonoutput.text("Ok");
            time.text("5.002");
          }, 5002);

        }else if(text.indexOf("user'UNION SELECT SLEEP(5),2 from users where username='admin'and password like '1082%';--") >= 0){
          setTimeout(function(){
            jsonoutput.text("Ok");
            time.text("5.002");
          }, 5002);

        }else{
          setTimeout(function(){
            jsonoutput.text("Ok");
            time.text("0.001");
          }, 10);
          
        }
      }
    });

    formsubmit.click(function(){
      if(username.val() == "admin" && password.val() == "1082"){
        $.post("../../../setting.php", {sql: "lv4"},function(data){
            console.log(data);
          });
        content1.addClass("hide");
        content2.removeClass("hide");
        bottom.removeClass("hide");

        return;
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