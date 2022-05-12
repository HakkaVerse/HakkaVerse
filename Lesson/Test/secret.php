<?php 
require_once dirname(__FILE__)."/../../_system/system.php";
/** ตั้งค่าคำตอบใน Secret Question */
$xss = "HKA(XSS_MASTER)";

$sqli = "HKA{SQL_INJECTION_MASTER}";

$security = "HKA{BRUTEFORCING}";

if($_POST){
    if(isset($_POST['answer']) and isset($_POST['lesson'])){
        $lesson = $_POST['lesson'];
        $answer = $_POST['answer'];
        
        if($lesson == 1){
            /** Secret XSS */
            if($answer == $xss){
                query("INSERT INTO `secret` (username, lesson) VALUES (?,?)", [$_SESSION['username'], $lesson]);
                header("Location: ./?testlist=$lesson#secret");
            }else{
                header("Location: ./?testlist=$lesson#secret");
            }

        }elseif($lesson == 2){
            /** Secret Sql injection */
            if($answer == $sqli){
                query("INSERT INTO `secret` (username, lesson) VALUES (?,?)", [$_SESSION['username'], $lesson]);
                header("Location: ./?testlist=$lesson#secret");
            }else{
                header("Location: ./?testlist=$lesson#secret");
            }

        }elseif($lesson == 3){
            /** Secret Security */
            if($answer == $security){
                query("INSERT INTO `secret` (username, lesson) VALUES (?,?)", [$_SESSION['username'], $lesson]);
                header("Location: ./?testlist=$lesson#secret");
            }else{
                header("Location: ./?testlist=$lesson#secret");
            }
        }else{
            header("Location: ./?testlist=$lesson#secret");

        }

    }

    
    if(isset($_POST['testing'])){
        $answer = $_POST['answer'];
        if($_POST['answer'] == ""){
            header("Location: ./?secret=".($lesson_id-3)."#question_id$article");
            return true;
        }else{
            $answer = $_POST['answer'];
        }
        $lesson_id = $_POST['lesson_id'];
        $test_id = $_POST['test_id'];
        $article=$_POST['article'];
        $test = query("SELECT * FROM test WHERE id = ?", [$test_id])->fetch();
        $test_history = query("SELECT * FROM test_history WHERE username=? AND answer=? AND lesson_id=?", [$_SESSION['username'], $_POST['article'], $lesson_id]);
        //die(print_r($test_history->fetchAll()));
        if($test_history->rowCount() > 0){
            header("Location: ./?secret=".($lesson_id-3)."#question_id$article");
            return true;
        }
        if($answer == $test['answer']){
            $_SESSION['correct'] = $test['point'];
            query("UPDATE user SET `point` = `point` + ? WHERE username=?", [$test['point'] ,$_SESSION['username']]);

            $point_1 = 0;
            $point_2 = 0;
            $point_3 = 0;
            $point_4 = 0;
            $point_5 = 0;
            $point_6 = 0;
            $point_7 = 0;
            $point_8 = 0;


            // SKill 1
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_1 = query("SELECT * FROM skill_chart WHERE id = ?", [1])->fetch();
            /** Skill 1 Check Sta-----------rt */ 
            for($i = 1; $i < 9; $i++){
                //echo $lesson_name.$skill_1['lesson_'.$i];
                if($lesson_name == $skill_1['lesson_'.$i]){
                    $point_1 += $skill_1['skill_'.$i];
                }
            }
            query("UPDATE user SET `skill_1` = `skill_1` + ? WHERE username=?", [$point_1 ,$_SESSION['username']]);
            /** Skill 1 End */

            
            // SKill 2
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_2 = query("SELECT * FROM skill_chart WHERE id = ?", [2])->fetch();
            /** Skill 2 Check Sta-----------rt */ 
            for($a = 1; $a < 9; $a++){
                if($lesson_name == $skill_2['lesson_'.$a]){
                    $point_2 += $skill_2['skill_'.$a];
                }
            }
            query("UPDATE user SET `skill_2` = `skill_2` + ? WHERE username=?", [$point_2 ,$_SESSION['username']]);
            /** Skill 2 End */


            // SKill 3
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_3 = query("SELECT * FROM skill_chart WHERE id = ?", [3])->fetch();
            /** Skill 3 Check Sta-----------rt */ 
            for($b = 1; $b < 9; $b++){
                if($lesson_name == $skill_3['lesson_'.$b]){
                    $point_3 += $skill_3['skill_'.$b];
                }
            }
            echo $point_3;
            query("UPDATE user SET `skill_3` = `skill_3` + ? WHERE username=?", [$point_3 ,$_SESSION['username']]);
            /** Skill 3 End */


            // SKill 4
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_4 = query("SELECT * FROM skill_chart WHERE id = ?", [4])->fetch();
            /** Skill 4 Check Sta-----------rt */ 
            for($c = 1; $c < 9; $c++){
                if($lesson_name == $skill_4['lesson_'.$c]){
                    $point_4 += $skill_4['skill_'.$c];
                }
            }
            query("UPDATE user SET `skill_4` = `skill_4` + ? WHERE username=?", [$point_4 ,$_SESSION['username']]);
            /** Skill 4 End */


            // SKill 5
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_5 = query("SELECT * FROM skill_chart WHERE id = ?", [5])->fetch();
            /** Skill 5 Check Sta-----------rt */ 
            for($d = 1; $d < 9; $d++){
                if($lesson_name == $skill_5['lesson_'.$d]){
                    $point_5 += $skill_5['skill_'.$d];
                }
            }
            query("UPDATE user SET `skill_5` = `skill_5` + ? WHERE username=?", [$point_5 ,$_SESSION['username']]);
            /** Skill 5 End */


            // SKill 6
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_6 = query("SELECT * FROM skill_chart WHERE id = ?", [6])->fetch();
            /** Skill 6 Check Sta-----------rt */ 
            for($e = 1; $e < 9; $e++){
                if($lesson_name == $skill_6['lesson_'.$e]){
                    $point_6 += $skill_6['skill_'.$e];
                }
            }
            query("UPDATE user SET `skill_6` = `skill_6` + ? WHERE username=?", [$point_6 ,$_SESSION['username']]);
            /** Skill 6 End */


            // SKill 7
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_7 = query("SELECT * FROM skill_chart WHERE id = ?", [7])->fetch();
            /** Skill 7 Check Sta-----------rt */ 
            for($f = 1; $f < 9; $f++){
                if($lesson_name == $skill_7['lesson_'.$f]){
                    $point_7 += $skill_7['skill_'.$f];
                }
            }
            query("UPDATE user SET `skill_7` = `skill_7` + ? WHERE username=?", [$point_7 ,$_SESSION['username']]);
            /** Skill 7 End */


            // SKill 8
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_8 = query("SELECT * FROM skill_chart WHERE id = ?", [8])->fetch();
            /** Skill 8 Check Sta-----------rt */ 
            for($g = 1; $g < 9; $g++){
                if($lesson_name == $skill_8['lesson_'.$g]){
                    $point_8 += $skill_8['skill_'.$g];
                }
            }
            query("UPDATE user SET `skill_8` = `skill_8` + ? WHERE username=?", [$point_8 ,$_SESSION['username']]);
            /** Skill 8 End */



            account()->addPoint($lesson_id, $test_id, $_POST['article'], $test['point'], $_SESSION['username'], 1);
            query("INSERT INTO secret_history (lesson_id, question, answer,username) VALUES (?,?,?,?)", [$lesson_id, $article, $answer, $_SESSION['username']]);
            header("Location: ./?secret=".($lesson_id-3)."#question_id$article");
            return true;
        }else{
            account()->addPoint($lesson_id, $test_id, $_POST['article'], $test['point'], $_SESSION['username'], 0);
            query("INSERT INTO secret_history (lesson_id, question, answer,username) VALUES (?,?,?,?)", [$lesson_id, $article, $answer, $_SESSION['username']]);
            header("Location: ./?secret=".($lesson_id-3)."#question_id$article");
            return true;
        }
    }
}