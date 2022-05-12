$(document).ready(function(){
    $.post("../../../setting.php", {security: "lv2"},function(data){
        console.log(data);
      });
});
