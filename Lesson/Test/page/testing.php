<?php
$lesson = $_GET['testing'];
$answer = $_GET['answer'];
$id = [];
$max = query("SELECT * FROM test WHERE lesson_id = ?", [$_GET['testing']])->rowCount() - query("SELECT * FROM test WHERE lesson_id = ? AND hide = ?", [$_GET['testing'], "true"])->rowCount();
if($answer > $max){
    header("Location: ?testlist=$lesson");

}
foreach(query("SELECT * FROM test WHERE lesson_id = ?", [$_GET['testing']]) as $t){
    if(query("SELECT * FROM test_history WHERE username = ? AND test_id = ?", [$_SESSION['username'], $t['id']])->rowCount() < 1){
        $id[] = $t['id'];
    }
}
if(count($id) > 0){
    $test = query("SELECT * FROM test WHERE id = ?", [$id[array_rand($id)]])->fetch();
}else{
    header("Location: ?testlist=$lesson");
}

$test_history = query("SELECT * FROM test_history WHERE username=? AND answer=? AND lesson_id=?", [$_SESSION['username'], $_GET['answer'], $lesson]);
//die(print_r($test_history->fetchAll()));
if($test_history->rowCount() > 0){
    $array = $test_history->fetch()['correct'];
    if($array == "1"){
        //echo "<script>location.href='?testing=correct&lesson=$lesson&answer=$answer'</script";
        header("Location: ?testing=correct&lesson=$lesson&answer=$answer");
    }elseif($array == "0"){
        //echo "<script>location.href='?testing=incorrect&lesson=$lesson&answer=$answer'</script";
        header("Location: ?testing=incorrect&lesson=$lesson&answer=$answer");
    }else{
        //echo "<script>location.href='?testlist=$lesson'</script";
        header("Location: ?testlist=$lesson");
    }
    return true;
}
if(!isset($_GET['answer'])){
    header("Location: ?testlist=$lesson");
    return true;
}
?>

<style>
    .hide {
        display: none;
    }
</style>
    <div class="container" style="padding-left: 90px; padding-top: 80px;">
        <h2 class="orange"><b>คำถามมมม !!</b></h2>
        <div class="testing-card text-white">
            <div class="testing-text">
                <div class="mt-3">
                    <span class="testing-title"><?php echo $test['html'] ?></span>
                </div>
                <div class="mt-3">
                    <form action="../../action.php" method="POST">
                        <input type="hidden" name="article" value="<?php echo $_GET['answer'] ?>">
                        <input type="hidden" name="testing" value="<?php echo $test['lesson_id'] ?>">
                        <input type="hidden" name="lesson_id" value="<?php echo $test['lesson_id'] ?>">
                        <input type="hidden" name="test_id" value="<?php echo $test['id'] ?>">
                        <div class="form-check mt-4 <?php if($test['choice_1'] == "-"){echo "hide";} ?>">
                            <input class="form-check-input" type="radio" name="answer" id="check1" value="1">
                            <label class="form-check-label" for="check1">
                                <span style="padding-left: 18px;"><?php echo $test['choice_1'] ?></span>
                            </label>
                        </div>
                        <div class="form-check mt-4 <?php if($test['choice_2'] == "-"){echo "hide";} ?>">
                            <input class="form-check-input" type="radio" name="answer" id="check2" value="2">
                            <label class="form-check-label" for="check2">
                                <span style="padding-left: 18px;"><?php echo $test['choice_2'] ?></span>
                            </label>
                        </div>
                        <div class="form-check mt-4 <?php if($test['choice_3'] == "-"){echo "hide";} ?>">
                            <input class="form-check-input" type="radio" name="answer" id="check3" value="3">
                            <label class="form-check-label" for="check3">
                                <span style="padding-left: 18px;"><?php echo $test['choice_3'] ?></span>
                            </label>
                        </div>
                        <div class="form-check mt-4 <?php if($test['choice_4'] == "-"){echo "hide";} ?>">
                            <input class="form-check-input" type="radio" name="answer" id="check4" value="4">
                            <label class="form-check-label" for="check4">
                                <span style="padding-left: 18px;"><?php echo $test['choice_4'] ?></span>
                            </label>
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