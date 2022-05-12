$(document).ready(function(){
    $.post("../../../setting.php", {security: "lv1"},function(data){
        console.log(data);
      });
});
