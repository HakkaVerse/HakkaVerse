$(document).ready(function(){
  $.post("../../../setting.php", {check_security: "lv1"},function(data){
    if(data == "true"){
      location.href = "../1";
      return true;
    }else{
      
      $.post("../../../setting.php", {security: "lv2"},function(data){
        console.log(data);
      });
    }
  });
});
