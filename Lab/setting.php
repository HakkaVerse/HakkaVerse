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
    if(isset($_POST['xss'])){
        if($_POST['xss'] == "lv1"){
            echo addPointLab($_SESSION['username'], "xss", 1, $xlv1);
        }
        if($_POST['xss'] == "lv2"){
            echo addPointLab($_SESSION['username'], "xss", 2, $xlv2);
        }
        if($_POST['xss'] == "lv3"){
            echo addPointLab($_SESSION['username'], "xss", 3, $xlv3);
        }
        if($_POST['xss'] == "lv4"){
            echo addPointLab($_SESSION['username'], "xss", 4, $xlv4);
        }
        if($_POST['xss'] == "lv5"){
            echo addPointLab($_SESSION['username'], "xss", 5, $xlv5);
        }
        if($_POST['xss'] == "lv6"){
            echo addPointLab($_SESSION['username'], "xss", 6, $xlv6);
        }
    }

    if(isset($_POST['security'])){
        if($_POST['security'] == "lv1"){
            echo addPointLab($_SESSION['username'], "security", 1, $clv1);
        }
        if($_POST['security'] == "lv2"){
            echo addPointLab($_SESSION['username'], "security", 2, $clv2);
        }
        if($_POST['security'] == "lv3"){
            echo addPointLab($_SESSION['username'], "security", 3, $clv3);
        }
        if($_POST['security'] == "lv4"){
            echo addPointLab($_SESSION['username'], "security", 4, $clv4);
        }
        if($_POST['security'] == "lv5"){
            echo addPointLab($_SESSION['username'], "security", 5, $clv5);
        }
        if($_POST['security'] == "lv6"){
            echo addPointLab($_SESSION['username'], "security", 6, $clv6);
        }
    }

    if(isset($_POST['sql'])){

        if($_POST['sql'] == "lv1"){
            echo addPointLab($_SESSION['username'], "sql", 1, $slv1);
        }
        if($_POST['sql'] == "lv2"){
            echo addPointLab($_SESSION['username'], "sql", 2, $slv2);
        }
        if($_POST['sql'] == "lv3"){
            echo addPointLab($_SESSION['username'], "sql", 3, $slv3);
        }
        if($_POST['sql'] == "lv4"){
            echo addPointLab($_SESSION['username'], "sql", 4, $slv4);
        }

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