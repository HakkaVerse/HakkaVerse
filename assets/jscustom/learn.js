function readmore(button){
    var text = button.value;
    var content = document.getElementById("lesson_content");
    if(text == "อ่านน้อยลง"){
        button.value = "อ่านเพิ่มเติม";
        //content.style.display = "none";
    }else{
        button.value = "อ่านน้อยลง";
        //content.style.display = "block";
    }

}