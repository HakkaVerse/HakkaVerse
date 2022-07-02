<?php
if(query("SELECT * FROM `secret_history` WHERE username=? AND lesson_id=?", [$_SESSION['username'], $_GET['secret'] + 3])->rowCount() >= query("SELECT * FROM test WHERE lesson_id=?",[$_GET['secret'] + 3])->rowCount()){
    ?>
<center>

<div class="mt-5">
<lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_ivzilk3s.json" background="transparent" speed="1"
    style="width: 400px; height: 400px;" loop="" autoplay="">
</lottie-player>
</div>
<div>
    <h4 class="text-white">ยินดีด้วย!! คุณได้สำเร็จบทเรียนนี้แล้ว </h4>
</div>
<div class="mt-4">
    <a class="btn btn-custom" href="?testlist=<?php echo $_GET['secret']; ?>" style="width: 150px;">ตกลง</a>
</div>
</center>

<?php
}else{

    ?>
<div class="container mt-5" style="max-width: 1000px;">
    <div class="row">
        <div class="col-lg-6">
            <a href="../Test/?testlist=<?php echo $_GET['secret']; ?>" style="width: 236.02px;"
                class="btn btn-custom"><i style="margin-right: 10px;" class="fa-solid fa-circle-arrow-left"></i>
                กลับสู่หน้าหลัก</a>

        </div>
        <div class="col-lg-6 text-end">
            <a class="btn btn-custom-border" style="width: 200px;"><b
                    class="text-white"><?php echo account()->checkPoint($_GET['secret'] + 3); ?> / 100</b></a>
        </div>
    </div>

    <div>


        <style>
        .btn-outline-custom {
            color: #FFFFFF;
            border: 2px solid #8D8A8A;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            border-radius: 20px;
        }

        .btn-outline-custom:hover {
            color: rgba(var(--text-color));
            border: 2px double transparent;
            background-image: radial-gradient(circle at left top, #B92B27, #1565C0), radial-gradient(circle at left top, #B92B27, #1565C0);
            background-origin: border-box;
            background-clip: padding-box, border-box;
            border-radius: 20px;
        }

        .btn-check:active+.btn-outline-custom,
        .btn-check:checked+.btn-outline-custom,
        .btn-outline-custom.active,
        .btn-outline-custom.dropdown-toggle.show,
        .btn-outline-custom:active {
            color: #fff;
            color: rgba(var(--text-color));
            border: 2px double transparent;
            background-image: radial-gradient(circle at left top, #B92B27, #1565C0), radial-gradient(circle at left top, #B92B27, #1565C0);
            background-origin: border-box;
            background-clip: padding-box, border-box;
            border-radius: 20px;
        }
        </style>

        <?php
        $i = 0;
        /** PHP FetchAll Test In  */
        foreach(query("SELECT * FROM test WHERE lesson_id = ?", [$_GET['secret'] + 3]) as $test){
            $i++
        ?>
        <div class="mt-5">
            <div class="testing-card text-white" id="question_id<?php echo $i; ?>" style="width: 100%;">
                <div class="testing-text">
                    <div class="mt-3">
                        <span class="testing-title"><?php echo $test['html'] ?></span>
                    </div>
                    <div class="mt-3">
                        <form action="secret.php" method="POST">
                            <input type="hidden" name="article" value="<?php echo $i ?>">
                            <input type="hidden" name="testing" value="<?php echo $test['lesson_id'] ?>">
                            <input type="hidden" name="lesson_id" value="<?php echo $test['lesson_id'] ?>">
                            <input type="hidden" name="test_id" value="<?php echo $test['id'] ?>">
                            <div class="mt-4 <?php if($test['choice_1'] == "-"){echo "hide";} ?>">
                                <input class="btn-check" type="radio" name="answer" id="check1_<?php echo $i; ?>"
                                    value="1" 
                                <?php
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,1,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 1){
                                    echo 'checked';
                                }
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,0,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 1){
                                    echo 'checked';
                                }
                                ?>
                                >
                                <label class="btn btn-outline-custom" for="check1_<?php echo $i; ?>">
                                    <span><?php echo $test['choice_1'] ?></span>
                                </label>
                                <?php
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,1,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 1){
                                    echo '<i style="position: absolute; font-size: 32px; margin-left: 12px; color: #4AD772; margin-top: 10px;" class="fas fa-check-square"></i>';
                                }
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,0,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 1){
                                    echo '<i style="position: absolute; font-size: 32px; margin-left: 12px; color: #B92B27; margin-top: 10px;" class="fas fa-times-square"></i>';
                                }
                                ?>
                                <!-- 
                                    <i style="position: absolute; font-size: 32px; margin-left: 12px; color: #4AD772; margin-top: 10px;" class="fas fa-check-square"></i>
                                    <i style="position: absolute; font-size: 32px; margin-left: 12px; color: #4AD772; margin-top: 10px;" class="fas fa-times-square"></i> 
                                -->
                            </div>
                            <div class="mt-4 <?php if($test['choice_2'] == "-"){echo "hide";} ?>">
                                <input class="btn-check" type="radio" name="answer" id="check2_<?php echo $i; ?>"
                                    value="2"
                                <?php
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,1,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 2){
                                    echo 'checked';
                                }
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,0,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 2){
                                    echo 'checked';
                                }
                                ?>
                                >
                                <label class="btn btn-outline-custom" for="check2_<?php echo $i; ?>">
                                    <span><?php echo $test['choice_2'] ?></span>
                                </label>
                                <?php
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,1,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 2){
                                    echo '<i style="position: absolute; font-size: 32px; margin-left: 12px; color: #4AD772; margin-top: 10px;" class="fas fa-check-square"></i>';
                                }
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,0,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 2){
                                    echo '<i style="position: absolute; font-size: 32px; margin-left: 12px; color: #B92B27; margin-top: 10px;" class="fas fa-times-square"></i>';
                                }
                                ?>
                            </div>
                            <div class="mt-4 <?php if($test['choice_3'] == "-"){echo "hide";} ?>">
                                <input class="btn-check" type="radio" name="answer" id="check3_<?php echo $i; ?>"
                                    value="3"
                                <?php
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,1,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 3){
                                    echo 'checked';
                                }
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,0,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 3){
                                    echo 'checked';
                                }
                                ?>
                                >
                                <label class="btn btn-outline-custom" for="check3_<?php echo $i; ?>">
                                    <span><?php echo $test['choice_3'] ?></span>
                                </label>
                                <?php
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,1,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 3){
                                    echo '<i style="position: absolute; font-size: 32px; margin-left: 12px; color: #4AD772; margin-top: 10px;" class="fas fa-check-square"></i>';
                                }
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,0,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 3){
                                    echo '<i style="position: absolute; font-size: 32px; margin-left: 12px; color: #B92B27; margin-top: 10px;" class="fas fa-times-square"></i>';
                                }
                                ?>
                            </div>
                            <div class="mt-4 <?php if($test['choice_4'] == "-"){echo "hide";} ?>">
                                <input class="btn-check" type="radio" name="answer" id="check4_<?php echo $i; ?>"
                                    value="4"
                                <?php
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,1,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 4){
                                    echo 'checked';
                                }
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,0,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 4){
                                    echo 'checked';
                                }
                                ?>
                                >
                                <label class="btn btn-outline-custom" for="check4_<?php echo $i; ?>">
                                    <span><?php echo $test['choice_4'] ?></span>
                                </label>
                                <?php
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,1,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 4){
                                    echo '<i style="position: absolute; font-size: 32px; margin-left: 12px; color: #4AD772; margin-top: 10px;" class="fas fa-check-square"></i>';
                                }
                                if(query("SELECT * FROM test_history WHERE lesson_id=? AND answer=? AND correct=? AND username=?", [$test['lesson_id'], $i,0,$_SESSION['username']])->rowCount() > 0
                                and query("SELECT * FROM `secret_history` WHERE lesson_id=? AND question=? AND username=?",[$test['lesson_id'], $i, $_SESSION['username']])->fetch()['answer'] == 4){
                                    echo '<i style="position: absolute; font-size: 32px; margin-left: 12px; color: #B92B27; margin-top: 10px;" class="fas fa-times-square"></i>';
                                }
                                ?>
                            </div>
                            <div class="mt-5">
                                <button class="btn btn-glow btn-custom" type="submit">ยืนยันคำตอบ</button>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-5"></div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


<?php
}

?>