<div class="container">

    <div class="row" style="padding: 50px;">
        <div class="col-lg-12">
            <div class="container">
                <div class="">
                    <a href="../Test/" style="width: 236.02px;" class="btn btn-custom"><i
                            style="margin-right: 10px;" class="fa-solid fa-circle-arrow-left"></i> กลับสู่หน้าหลัก</a>
                </div>

            </div>
        </div>
        <div class="col-lg-12 mt-3"></div>
        <div class="col-lg-3 mt-3">
            <center>
                <div class="card bg-dark text-white test">
                    <div class="container-fluid">
                        <img class="mt-4" width="100%" src="../../public/img/design/2.png">
                        <div style="padding-top: 50px; font-weight: 900;">
                            Cross - Site Scripting
                        </div>
                    </div>
                </div>
            </center>
        </div>
        <div class="col-lg-8 mt-5 text-white">
            <div style="padding-left:18px;">

                <!-- Profile Image
                src="link"
            -->
                <img src="https://i.ibb.co/gjqQFLJ/02.jpg"
                    style="border-radius: 50%; width: 80px; height: 80px; object-fit: cover;">

                <span style="padding-left: 19px;position: absolute; padding-top: 55px;"><b style="color: WHITE;">By</b>
                    Poom Thanapoom</span>
                <div class="mt-5">
                    <h3><b style="color: WHITE;">Cross - Site Scripting</b></h3>
                </div>
                <div class="mt-3">
                    <p style="font-size: 18px; color: #8D8A8A;">
                        ภายในหน้านี้จะมีแบบฝึกหัดให้ทุกคนได้ทำกันหลังจากที่อ่านเนื้อหาบทเรียนมาแล้วเพื่อที่
                        จะได้ทดสอบความรู้ โดยจะมีทั้งหมด 30 เป็นแบบฝึกหัดในส่วนแรกและแบบฝึกหัดส่วนที่
                        2 จะเป็นแบบฝึกหัดสุดท้ายที่จะสามารถเล่นได้ก็ต่อเมื่อคุณผ่านแบบทดสอบทั้ง 30 ข้อนี้
                        และแลปทดลอง แล้วมาดูกันว่าคุณจะรู้จริงหรือป่าวว
                    </p>
                </div>
                <div class="mt-3">

                    <!-- PDF DOWNLOAD 
                    .XSS PAGE
                
                    Ex.
                        href="Download/file.pdf"
                    -->

                    <button style="width: 230px;" class="btn-custom-border"><b
                            style="color: white;"><?php echo account()->checkLesson($_GET['testlist']); ?> /
                            30</b></button>
                    <a href="Download/file.pdf" download><button style="width: 230px; left:30px;"
                            class="btn btn-custom">เอกสาร. PDF</button></a>
                </div>
            </div>
        </div>


        <div class="col-lg-6" style="position: relative; bottom: 200px; right:80px;">
            <a href="?testlist=3"><img width="40px" src="../../public/img/icon/back.png"></a>
        </div>
        <div class="col-lg-6 text-end" style="position: relative; bottom: 200px; left:80px;"">
            <a href=" ?testlist=2"><img width="40px" src="../../public/img/icon/next.png"></a>
        </div>




        <div class="mt-5">
            <div class="card bg-dark border-3 border-warning" style="border-radius: 18px;">
                <div class="container mt-4">
                    <div class="row">

                        <?php
                        /** PHP FetchAll Test In  */
                        $i = 0;
                        foreach(query("SELECT * FROM test WHERE lesson_id = ?", [$_GET['testlist']]) as $test){
                            if($test['hide'] != "true"){
                                $i++;
                        ?>
                        <div class="col-lg-4 text-white mt-5">
                            <a href="
                            <?php 
                                if(query("SELECT * FROM test_history WHERE username= ? AND lesson_id = ? AND answer = ?", [$_SESSION['username'], $test['lesson_id'], $i])->rowCount() > 0){
                                    echo "";
                                }else{
                                    echo "?testing=".$test['lesson_id']."&answer=$i";
                                }
                                if(query("SELECT * FROM test_history WHERE username= ? AND lesson_id = ? AND answer = ? AND correct = ?", [$_SESSION['username'], $test['lesson_id'], $i, 0])->rowCount() > 0){
                                    echo "?testing=incorrect&lesson=".$test['lesson_id']."&answer=$i";
                                }
                                if(query("SELECT * FROM test_history WHERE username= ? AND lesson_id = ? AND answer = ? AND correct = ?", [$_SESSION['username'], $test['lesson_id'], $i, 1])->rowCount() > 0){
                                    echo "?testing=correct&lesson=".$test['lesson_id']."&answer=$i";
                                }
                            ?>
                            ">
                                <div class="<?php if($i == 1){echo "testlist-card";}else{echo "testlist-card-2";} ?>">
                                    <span
                                        class="<?php if($i >= 10){echo "testlist-num-more";}else{echo "testlist-num";} ?>"><?php echo $i; ?></span>
                                    <img src="../../public/img/design/circle.png" class="circle">
                                    <div class="pass">
                                        <span class="pass-text">
                                            <?php 
                                        if(query("SELECT * FROM test_history WHERE username= ? AND lesson_id = ? AND answer = ? AND correct = ?", [$_SESSION['username'], $test['lesson_id'], $i, 1])->rowCount() > 0){
                                            echo "Pass";
                                        }else{
                                            echo "Not Pass";
                                        }
                                        ?>

                                        </span>
                                    </div>
                                    <div class="score">
                                        <span class="score-text"><?php echo $test['point']; ?> คะแนน</span>
                                    </div>
                                    <div class="iconcheck">
                                        <?php 
                                        if(query("SELECT * FROM test_history WHERE username= ? AND lesson_id = ? AND answer = ?", [$_SESSION['username'], $test['lesson_id'], $i])->rowCount() > 0){
                                            $check = query("SELECT * FROM test_history WHERE username= ? AND lesson_id = ? AND answer = ?", [$_SESSION['username'], $test['lesson_id'], $i])->fetch()['correct'];
                                            if($check == "1"){
                                                echo '<i class="fas fa-check-square"></i>';
                                            }else{
                                                echo '<i class="fas fa-times-square" style="color: #B92B27;"></i>';
                                            }
                                        }
                                        ?>


                                    </div>
                                </div>
                            </a>
                        </div>

                        <?php }} ?>
                    </div>

                </div>
                <br><br>
            </div>
        </div>


        <style>
        .btn-black {
            background: linear-gradient(144.48deg, #28272F 9.13%, #040404 62.89%);
            box-shadow: 0px 0px 24px rgba(255, 255, 255, 0.4);
            border-radius: 19px;
            height: 106px;
            width: 390.37px;
        }

        .shadow-card {
            box-shadow: inset 0px 0px 68px rgba(255, 255, 255, 0.05), inset 0px 4px 4px rgba(255, 255, 255, 0.15);
        }

        .hide {
            display: none;
        }
        </style>
        <script>
        $(document).ready(function() {
            $("#unlock").click(function() {
                $("#formhide").removeClass("hide");
            });
        });
        </script>
        <div class="mt-5" id="secret">
            <div class="card bg-dark shadow-card" style="border-radius: 18px;">
                <div style="padding:100px;">
                    <div class="text-center">
                        <?php
                        if(query("SELECT * FROM `secret_history` WHERE username=? AND lesson_id=?", [$_SESSION['username'], $_GET['testlist'] + 3])->rowCount() >= query("SELECT * FROM test WHERE lesson_id=?",[$_GET['testlist'] + 3])->rowCount()){
                        ?>
                        <img src="../../../public/img/icon/Intersect.png">
                        <?php 
                        }elseif(query("SELECT * FROM `secret` WHERE username = ? AND lesson = ?", [$_SESSION['username'], $_GET['testlist']])->rowCount() > 0){
                        ?>
                        <h1 class="text-white">ข้อสอบลับ</h1>
                        <h4 class="text-white mt-3">ยินดีต้อนรับสู่แบบฝึกหัดสุดท้าย</h4>
                        <a href="?secret=<?php echo $_GET['testlist']; ?>" class="btn btn-custom mt-3"
                            style="width: 200px;">ทำแบบฝึกหัด</a>
                        <?php
                        }else{
                        ?>
                        <h1 class="text-white">ข้อสอบลับ</h1>
                        <a href="#formhide"><button id="unlock" class="btn btn-black mt-5"><img
                                    src="../../../public/img/icon/lock.png"></button></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="formhide" class="mt-5 hide">
            <center>
                <div class="col-lg-8">
                    <div class="card bg-dark shadow-card" style="border-radius: 18px;">
                        <div style="padding:30px;">
                            <div class="text-center text-white">
                                <form action="secret.php" method="post">

                                    <input name="lesson" value="<?php echo $_GET['testlist']; ?>" type="hidden">

                                    <h3 class="text-white">คำถาม</h3>
                                    <label class="mt-4">คำตอบสุดท้ายที่ได้จากการทดลองแลปคืออะไร ?</label>
                                    <center><input name="answer" autocomplete="off"
                                            class="w-75 form-control form-control-lg bg-dark text-white shadow-card mt-2 border-secondary"
                                            required>
                                    </center>
                                    <button type="submit" style="width: 250px;"
                                        class="btn btn-custom mt-4">ยืนยันคำตอบ</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>

    </div>
</div>