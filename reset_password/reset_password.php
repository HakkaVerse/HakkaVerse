<?php
require_once dirname(__FILE__) . "/../_system/system.php";

if ($_POST) {
    if (isset($_POST['reset_password'])) {
        $token = $_POST['token'];
        if (query("SELECT * FROM forgot_password WHERE code=?", [$token])->rowCount() > 0) {
            $username = $_POST['reset_password'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            if ($password != $confirm_password) {
                $_SESSION['reset2'] = true;
                header("Location: ../reset_password/?reset=$token");
                return true;
            }
            query("UPDATE user SET password=? WHERE username=?", [account()->hashPassword($password), $username]);
            $_SESSION['reset4'] = true;
            query("DELETE FROM forgot_password WHERE username = ? AND email = ?", [$username, $email]);
            header("Location: ../Login");
        }else{
            header("Location: ../reset_password");
        }
    }
}
