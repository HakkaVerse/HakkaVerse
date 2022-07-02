$(document).ready(function(){
  $.post("../../../setting.php", {check_sql: "lv2"},function(data){
    if(data == "true"){
      location.href = "../2";
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

    
    
    var time = setInterval(function(){
      if(input.val().indexOf("https://hakka.hka/checkuser?username=") < 0){
        input.val("https://hakka.hka/checkuser?username=");
      }
    }, 100);
    input.keypress(function(e){
      if(e.which == 13){
        sqltext.text(input.val().replace("https://hakka.hka/checkuser?username=", ""));
        var text = input.val().replace("https://hakka.hka/checkuser?username=", "");
        if(text == "admin"
          || text == "admin123' UNION SELECT 1,2,3;--"
          || text == "admin123' UNION SELECT 1,2,3 where database() like 's%';--"
          || text == "admin123' UNION SELECT 1,2,3 FROM information_schema.tables WHERE table_schema = 'sqli_three' and table_name='users';--"
          || text == `admin123' UNION SELECT 1,2,3 from users where username='admin' and password like '2%`
          || text == `admin123' UNION SELECT 1,2,3 from users where username='admin' and password like '25%`
          || text == `admin123' UNION SELECT 1,2,3 from users where username='admin' and password like '254%`
          || text == `admin123' UNION SELECT 1,2,3 from users where username='admin' and password like '2543%`
          || text == `admin123' UNION SELECT 1,2,3 where database() like '%';--`
          || text == `admin123' UNION SELECT 1,2,3 from users where username like 'a%`
          || text == ``
        ){
          jsonoutput.text('{"taken":true}');
        }else{
          jsonoutput.text('{"taken":false}');

        }
      }
    });

    formsubmit.click(function(){
      if(username.val() == "admin" && password.val() == "2543"){
        $.post("../../../setting.php", {sql: "lv3"},function(data){
            console.log(data);
          });
        result.text("");
        content1.addClass("hide");
        content2.removeClass("hide");
        win.removeClass("hide");

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