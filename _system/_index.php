<?php
require_once dirname(__FILE__)."/system.php";
$username = "test";
$password = "test";
$email = "email";
//query("INSERT INTO upload (upload) VALUES (?)", ["test"]);
//query("INSERT INTO user (id, username, password, date, email, profile, group, point, skill_1, skill_2, skill_3, skill_4, skill_5, skill_6, skill_7, skill_8) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [NULL,"test", "pass", "email.com", now_time(time()), "profile.png", "member", "0","0","0","0","0","0","0","0","0"]);

query("INSERT INTO user (`username`, `password`, `email`, `date`, `profile`, `group`, `point`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `skill_6`, `skill_7`, `skill_8`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", ["user", "pass", "admin@email.com", now_time(time()), "profile.png", "member", "0","0","0","0","0","0","0","0","0"]);
echo now_time(time());
?>