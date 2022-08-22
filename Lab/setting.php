<?php 
require_once dirname(__FILE__)."/../_system/system.php";

/** ตั้งค่าคะแนนจากแลป XSS Lv 1 - 6 */
$xlv1 = 10;
$xlv2 = 10;
$xlv3 = 10;
$xlv4 = 20;
$xlv5 = 25;
$xlv6 = 25;


/** ตั้งค่าคะแนนจากแลป SQLInjection Lv 1 - 4 */
$slv1 = 25;
$slv2 = 25;
$slv3 = 25;
$slv4 = 25;

/** ตั้งค่าคะแนนจากแลป Cyber Security Lv 1 - 6 */
$clv1 = 10;
$clv2 = 10;
$clv3 = 10;
$clv4 = 20;
$clv5 = 25;
$clv6 = 25;


if($_POST){
    if(isset($_POST['check_xss'])){
        if($_POST['check_xss'] == "lv1"){
            echo checkLevel($_SESSION['username'], "xss", 1);
        }
        if($_POST['check_xss'] == "lv2"){
            echo checkLevel($_SESSION['username'], "xss", 2);
        }
        if($_POST['check_xss'] == "lv3"){
            echo checkLevel($_SESSION['username'], "xss", 3);
        }
        if($_POST['check_xss'] == "lv4"){
            echo checkLevel($_SESSION['username'], "xss", 4);
        }
        if($_POST['check_xss'] == "lv5"){
            echo checkLevel($_SESSION['username'], "xss", 5);
        }
        if($_POST['check_xss'] == "lv6"){
            echo checkLevel($_SESSION['username'], "xss", 6);
        }
    }

    if(isset($_POST['check_sql'])){

        if($_POST['check_sql'] == "lv1"){
            echo checkLevel($_SESSION['username'], "sql", 1);
        }
        if($_POST['check_sql'] == "lv2"){
            echo checkLevel($_SESSION['username'], "sql", 2);
        }
        if($_POST['check_sql'] == "lv3"){
            echo checkLevel($_SESSION['username'], "sql", 3);
        }
        if($_POST['check_sql'] == "lv4"){
            echo checkLevel($_SESSION['username'], "sql", 4);
        }

    }





    if(isset($_POST['check_security'])){
        if($_POST['check_security'] == "lv1"){
            echo checkLevel($_SESSION['username'], "security", 1);
        }
        if($_POST['check_security'] == "lv2"){
            echo checkLevel($_SESSION['username'], "security", 2);
        }
        if($_POST['check_security'] == "lv3"){
            echo checkLevel($_SESSION['username'], "security", 3);
        }
        if($_POST['check_security'] == "lv4"){
            echo checkLevel($_SESSION['username'], "security", 4);
        }
        if($_POST['check_security'] == "lv5"){
            echo checkLevel($_SESSION['username'], "security", 5);
        }
        if($_POST['check_security'] == "lv6"){
            echo checkLevel($_SESSION['username'], "security", 6);
        }
    }



    if(isset($_POST['check'])){
        if(query("SELECT * FROM test_history WHERE username = ?", [$_SESSION['username']])->rowCount() < $lab){
            echo "true";
        }else{
            echo "false";
        }
    }
    if(isset($_POST['xss'])){
        if($_POST['xss'] == "lv1"){
            $_SESSION['xss_1'] = true;
            echo addPointLab($_SESSION['username'], "xss", 1, $xlv1);
        }
        if($_POST['xss'] == "lv2"){
            $_SESSION['xss_2'] = true;
            echo addPointLab($_SESSION['username'], "xss", 2, $xlv2);
            unset($_SESSION['xss_1']);
        }
        if($_POST['xss'] == "lv3"){
            $_SESSION['xss_3'] = true;
            echo addPointLab($_SESSION['username'], "xss", 3, $xlv3);
            unset($_SESSION['xss_2']);
        }
        if($_POST['xss'] == "lv4"){
            $_SESSION['xss_4'] = true;
            echo addPointLab($_SESSION['username'], "xss", 4, $xlv4);
            unset($_SESSION['xss_3']);
        }
        if($_POST['xss'] == "lv5"){
            $_SESSION['xss_5'] = true;
            echo addPointLab($_SESSION['username'], "xss", 5, $xlv5);
            unset($_SESSION['xss_4']);
        }
        if($_POST['xss'] == "lv6"){
            echo addPointLab($_SESSION['username'], "xss", 6, $xlv6);
            unset($_SESSION['xss_5']);
        }
    }

    if(isset($_POST['security'])){
        if($_POST['security'] == "lv1"){
            $_SESSION['sec_1'] = true;
            echo addPointLab($_SESSION['username'], "security", 1, $clv1);
        }
        if($_POST['security'] == "lv2"){
            $_SESSION['sec_2'] = true;
            echo addPointLab($_SESSION['username'], "security", 2, $clv2);
        }
        if($_POST['security'] == "lv3"){
            $_SESSION['sec_3'] = true;
            echo addPointLab($_SESSION['username'], "security", 3, $clv3);
        }
        if($_POST['security'] == "lv4"){
            $_SESSION['sec_4'] = true;
            echo addPointLab($_SESSION['username'], "security", 4, $clv4);
        }
        if($_POST['security'] == "lv5"){
            $_SESSION['sec_5'] = true;
            echo addPointLab($_SESSION['username'], "security", 5, $clv5);
        }
        if($_POST['security'] == "lv6"){
            echo addPointLab($_SESSION['username'], "security", 6, $clv6);
            unset($_SESSION['sec_4']);
            unset($_SESSION['sec_3']);
            unset($_SESSION['sec_2']);
            unset($_SESSION['sec_1']);
            unset($_SESSION['sec_5']);
        }
    }

    if(isset($_POST['sql'])){

        if($_POST['sql'] == "lv1"){
            $_SESSION['sql_1'] = true;
            echo addPointLab($_SESSION['username'], "sql", 1, $slv1);
        }
        if($_POST['sql'] == "lv2"){
            $_SESSION['sql_2'] = true;
            echo addPointLab($_SESSION['username'], "sql", 2, $slv2);
            unset($_SESSION['sql_1']);
        }
        if($_POST['sql'] == "lv3"){
            $_SESSION['sql_3'] = true;
            echo addPointLab($_SESSION['username'], "sql", 3, $slv3);
            unset($_SESSION['sql_2']);
        }
        if($_POST['sql'] == "lv4"){
            unset($_SESSION['sql_3']);
            echo addPointLab($_SESSION['username'], "sql", 4, $slv4);
        }

    }

    

    if(isset($_POST['sql_question'])){

        if($_POST['sql_question'] == "lv1"){
            echo LabQuestion("sql_lv1", $_POST['answer']);
        }
        if($_POST['sql_question'] == "lv2"){
            echo LabQuestion("sql_lv2", $_POST['answer']);
        }
        if($_POST['sql_question'] == "lv3"){
            echo LabQuestion("sql_lv3", $_POST['answer']);
        }
        if($_POST['sql_question'] == "lv4"){
            echo LabQuestion("sql_lv4", $_POST['answer']);
        }

    }

    if(isset($_POST['sec_question'])){

        if($_POST['sec_question'] == "lv1"){
            echo LabQuestion("sec_lv1", $_POST['answer']);
        }
        if($_POST['sec_question'] == "lv2"){
            echo LabQuestion("sec_lv2", $_POST['answer']);
        }

    }
}


function LabQuestion($lab, $answer){
    if(query("SELECT * FROM lab_question WHERE `user_id`=? AND `lab`=? AND `answer`=?",[$_SESSION['id'], $lab, $answer])->rowCount() < 1){
        query("INSERT INTO lab_question (`user_id`, `lab`, `answer`) VALUES (?,?,?)", [$_SESSION['id'], $lab, $answer]);
        return "Save!";
    }else{
        return "Saved";
    }

}


function addPointLab($username, $lab, $level, $point){
    if(query("SELECT * FROM lab WHERE username=? AND lab=? AND `level`=?",[$username, $lab, $level])->rowCount() < 1){
        query("INSERT INTO lab (username, lab, `level`, `point`) VALUES (?,?,?,?)", [$username, $lab, $level, $point]);
        query("UPDATE user SET `point` = `point` + ? WHERE username=?", [$point ,$username]);
        return "Save!";
    }else{
        return "Saved";
    }
}

function checkLevel($username, $lab, $level){
    if(query("SELECT * FROM lab WHERE username=? AND lab=? AND `level`=?",[$username, $lab, $level])->rowCount() < 1){
        return "true";
    }else{
        return "false";
    }
}