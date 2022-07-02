$(document).ready(function(){
  $.post("../../../setting.php", {check_sql: "lv1"},function(data){
    if(data == "true"){
      location.href = "../1";
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

    
    var time = setInterval(function(){
      useroutput.text(username.val());
      passoutput.text(password.val());
    }, 100);

    formsubmit.click(function(){
      if(password.val() == "' OR 1=1;--"){
        $.post("../../../setting.php", {sql: "lv2"},function(data){
            console.log(data);
          });
        result.text("");
        content1.addClass("hide");
        content2.removeClass("hide");
        win.removeClass("hide");

        return;
      }else if(username.val() == `'`){
        result.text(`SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '''' and password='' LIMIT 1' at line 1`);
      }else{
        result.text("ไม่เจอผลลัพธ์ที่คุณหา !!");
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