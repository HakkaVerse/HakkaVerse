<style>
.hide {
    display: none;
}
</style>
<script>
function play() {
    var audio = new Audio('sound/sound2.mp3');
    audio.play();

}
$(document).ready(function() {
    $("#content").removeClass("hide");
    //play();
});
</script>
<div id="content" class="container hide" style="padding-left: 90px; padding-top: 80px;">
    <div class="mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <center>
                    <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_pqpmxbxp.json"
                        background="transparent" speed="1" style="width: 437px; height: 437px;" loop autoplay>
                    </lottie-player>
                </center>
            </div>
            <div class="col-lg-4">
                <div class="mt-4">
                    <a href="?testlist=<?php echo $_GET['lesson']."#answer".$_GET['answer']; ?>" style="width: 250px;"
                        class="btn btn-custom" cursorshover="true"><i style="margin-right: 10px;"
                            class="fa-solid fa-circle-arrow-left"></i>
                        กลับสู่หน้าหลัก</a>
                </div>
            </div>
            <div class="col-lg-4 text-end">
                <div class="mt-4">
                    <a href="?testing=<?php echo $_GET['lesson']; ?>&answer=<?php echo $_GET['answer'] + 1; ?>" style="width: 250px;"
                        class="btn btn-custom" cursorshover="true">
                        ไปข้อถัดไป<i style="margin-left: 10px;"
                            class="fa-solid fa-circle-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>