<?php

class Account{

    public function hashPassword($password){
        $hash1 = hash('ripemd160', $password);
        $hash2 = hash('crc32', $hash1);
        $hash3 = hash('md5', $hash2);
        return $hash3;
    }

    public function Login($username, $pass){
		$user = strtolower($username);
        if(!isset($_SESSON['username'])){
            if(count(query("SELECT * FROM user WHERE username=?", [$user])->fetchAll()) == 1){
                $u = query("SELECT * FROM user WHERE username=?", [$user])->fetch();
                if($u['password'] == $pass){
                    $_SESSION['id'] = $u['id'];
                    $_SESSION['username'] = $u['username'];
                    $_SESSION['date'] = $u['date'];
                    $_SESSION['email'] = $u['email'];
                    $_SESSION['status'] = $u['group'];
                    $_SESSION['nickname'] = $u['nickname'];
                    return true;
                }else{
                    return false;
                }
            }elseif(count(query("SELECT * FROM user WHERE email=?", [$user])->fetchAll()) == 1){
                $u = query("SELECT * FROM user WHERE email=?", [$user])->fetch();
                if($u['password'] == $pass){
                    $_SESSION['id'] = $u['id'];
                    $_SESSION['username'] = $u['username'];
                    $_SESSION['date'] = $u['date'];
                    $_SESSION['email'] = $u['email'];
                    $_SESSION['status'] = $u['group'];
                    $_SESSION['nickname'] = $u['nickname'];
                    return true;
                }else{
                    return false;
                }
            }elseif(count(query("SELECT * FROM user WHERE nickname=?", [$user])->fetchAll()) == 1){
                $u = query("SELECT * FROM user WHERE nickname=?", [$user])->fetch();
                if($u['password'] == $pass){
                    $_SESSION['id'] = $u['id'];
                    $_SESSION['username'] = $u['username'];
                    $_SESSION['date'] = $u['date'];
                    $_SESSION['email'] = $u['email'];
                    $_SESSION['status'] = $u['group'];
                    $_SESSION['nickname'] = $u['nickname'];
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }else{
            return false;
        }
    }


    public function Register($user, $email, $password){
		$username = strtolower($user);
        if($username == "" or $password == "" or $email == ""){
            $_SESSION['register_null'] = true;
            return false;
        }elseif(count(query("SELECT * FROM user WHERE username=?", [$username])->fetchAll()) > 0){
            $_SESSION['register_error_username'] = true;
            return false;
        }elseif(query("INSERT INTO user (`username`, `password`, `email`, `date`, `profile`, `group`, `point`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `skill_6`, `skill_7`, `skill_8`, `nickname`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", [$username, $this->hashPassword($password), $email, now_time(time()), "profile.png", "member", "0","0","0","0","0","0","0","0","0",$username])){
            $_SESSION['register_success'] = true;
            $this->Login($username, $this->hashPassword($password));
            return true;
        }else{
            $_SESSION['register_error'] = true;
            return false;
        }
    }

    // public function facebookLogin($user, $pass){
    //     if(count(query("SELECT * FROM user WHERE username=?", [$user])->fetchAll()) < 1){
    //         if(query("INSERT INTO user (username, password, topup, credit, date, invite) VALUES (?, ?, ?, ? ,?, ?)", [$user, $this->hashPassword($pass), 0, 0, now_time(time()), $_SESSION['invite']])){
    //             $this->Login($user, $this->hashPassword($pass));
    //             $_SESSION['login_success'] = true;
    //             return true;
    //         }else{
    //             return false;
    //         }
    //     }elseif(count(query("SELECT * FROM user WHERE username=?", [$user])->fetchAll()) > 0){
    //         if($this->Login($user, $this->hashPassword($pass))){
    //             $_SESSION['login_success'] = true;
    //             return true;
    //         }else{
    //             return false;
    //         }
    //     }else{
    //         return false;
    //     }
    // }

    public function getLabPoint($lab, $username){
        $check = 0;
        foreach(query("SELECT * FROM lab WHERE username=? AND lab=?", [$username, $lab]) as $i){
            $check += $i['point'];
        }
        if($check >= 100){
            return 100;
        }else{
            return $check;
        }
    }

    public function getPoint($lesson_id, $username){
        $check = 0;
        foreach(query("SELECT * FROM test_history WHERE username=? AND lesson_id=? AND correct=?", [$username, $lesson_id,1]) as $i){
            $check += $i['point'];
        }
        if($check >= 100){
            return 100;
        }else{
            return $check;
        }
    }

    public function getUser(){
        $user = $_SESSION['username'];
        $u = query("SELECT * FROM user WHERE username=?", [$user])->fetch();
        return $u;
    }

    public function getNickName(){
        $user = $_SESSION['username'];
        $u = query("SELECT * FROM user WHERE username=?", [$user])->fetch();
        if($_SESSION['nickname'] == ""){
            return clean($u['username']);
        }else{
            return clean($u['nickname']);
        }
    }

    public function getAllPoint($username){
        $h = query("SELECT * FROM test_history WHERE username = ?", [$username])->fetchAll();
        $i = 0;
        foreach($h as $l){
            $i += $l['point'];
        }
        return $i;
    }

    public function getTestPoint($lesson_id){
        $h = query("SELECT * FROM test WHERE lesson_id = ?", [$lesson_id])->fetchAll();
        $i = 0;
        foreach($h as $l){
            $i += $l['point'];
        }
        return $i;
    }

    public function addPoint($lesson_id, $test_id, $answer, $point, $username, $correct){
        if(query("INSERT INTO test_history (username, test_id, answer, lesson_id, point, correct) VALUES (?,?,?,?,?,?)", [$username, $test_id, $answer, $lesson_id, $point, $correct])){
            return true;
        }else{
            return false;
        }
    }

    public function reducePoint($lesson_id, $test_id, $point, $username){
        $p = "-$point";
        if(query("INSERT INTO test_history (username, test_id, lesson_id, point) VALUES (?,?,?,?)", [$username, "-", $lesson_id, $p])){
            
            query("UPDATE user SET `point` = `point` - ? WHERE username=?", [$point ,$username]);
            return true;
        }else{
            return false;
        }
    }

    public function CheckUser(){
        if(isset($_SESSION['username'])){
            $user = $_SESSION['username'];
            if(count(query("SELECT * FROM user WHERE username=?", [$user])->fetchAll()) == 1){
                $u = query("SELECT * FROM user WHERE username=?", [$user])->fetch();
                $_SESSION['id'] = $u['id'];
                $_SESSION['username'] = $u['username'];
                $_SESSION['date'] = $u['date'];
                $_SESSION['email'] = $u['email'];
                $_SESSION['status'] = $u['group'];
                $_SESSION['nickname'] = $u['nickname'];
                $_SESSION['profile'] = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/upload/".$u['profile'];
            }else{
                unset($_SESSION['id']);
                unset($_SESSION['username']);
                unset($_SESSION['date']);
                unset($_SESSION['email']);
                unset($_SESSION['status']);
                unset($_SESSION['profile']);
                unset($_SESSION['nickname']);
            }
        }
    }


    public function checkLesson($lesson){
        $check = query("SELECT * FROM test_history WHERE username=? AND lesson_id=?", [$_SESSION['username'], $lesson])->rowCount();
        if($check >= 30){
            return 30;
        }else{
            return $check;
        }
    }
    public function checkTestList(){
        $check1 = query("SELECT * FROM test_history WHERE username=? AND lesson_id=?", [$_SESSION['username'],1])->rowCount();
        $check2 = query("SELECT * FROM test_history WHERE username=? AND lesson_id=?", [$_SESSION['username'],2])->rowCount();
        $check3 = query("SELECT * FROM test_history WHERE username=? AND lesson_id=?", [$_SESSION['username'],3])->rowCount();
        $check = $check1 + $check2 + $check3;
        if($check >= 90){
            return 90;
        }else{
            return $check;
        }
    }

    public function checkPoint($lesson){
        $check = 0;
        foreach(query("SELECT * FROM test_history WHERE username=? AND lesson_id=? AND correct=?", [$_SESSION['username'], $lesson,1]) as $i){
            $check += $i['point'];
        }
        if($check >= 100){
            return 100;
        }else{
            return $check;
        }
    }
}
