
<?php
require_once("../../../../_system/system.php");

if(!isset($_SESSION['sec_2'])){
    header("Location: ../2");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>HakkaBook</title>

    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <!--load all Font Awesome styles -->
    <link href="../../../../assets/fontawesome/css/all.css" rel="stylesheet">


    <!--load CSS -->
    <link href="style.css" rel="stylesheet">

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="script.js?v=2"></script>
</head>

<body>
    
    <style>
        
        .nextLevel {
            background: #1565C0;
            color: white;
            border-radius: 15px;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);

        }


        .nextLevel:hover {
            background: #1565C0;
            color: white;
        }

        .backLevel:hover {
            background: #1565C0;
            color: white;
        }
        .btn-orange{
            background: #1565C0;
            color: white;
        }
        .btn-orange:hover{
            background: #1565C0;
            color: white;
        }
        .custom-button{
            background: #1565C0;
            color: white;
        }
        .custom-button:hover{
            background: #1565C0;
            color: white;
        }
        .btn{
            border-radius: 15px;
        }
    </style>
    <img class="imagebanner" src="img/banner.jpg">
    <div class="imgshadow"></div>
    <div class="level-border"></div>
    <div class="level-text">3</div>
    <span class="texthead">HakkaBook</span>
    <div class="container mt-5">
        <div class="custom-card">
            <div style="padding: 50px;">
                <div class="advice">
                    คำแนะนำ
                </div>
                <div class="description mt-4">
                    <div id="text1">
                        <p>เป็นเรื่องที่ปกติในการโจมตีรหัสผ่านของเป้าหมายเพื่อ <b>Reset</b> ระบบปฎิบัติการ ตรวจค้นปัญหาที่เกิดขึ้นกับ <b>User</b></p>
                        <p>กด <b>Username Hakka</b> และกด <b>Reset Password</b></p>
                    </div>
                    <div id="text2" class="hide">
                        <p>การรีเซ็ตบัญชีส่วนใหญ่ตัวของระบบปฎิบัติการมักจะใช้การส่ง <b>Code</b> ผ่าน <b>E-mail</b> เพื่อยืนยันตัวตนของผู้ใช้งาน</p>
                        <p><b>Hakka</b> จะได้รับรหัสผ่าน <b>4</b> ตัว เพื่อยืนยันตัวตน ผมเลยสงสัยว่าเราจะเดารหัสของเขาได้ไหม ?</p>

                    </div>
                </div>

                <div class="mt-5">
                    <div class="webhead">
                        <i style="padding-left: 30px;padding-right: 24px;" class="fa-solid fa-arrow-left headicon"></i> 
                        <i style="padding-right: 24px;" class="fa-solid fa-arrow-right headicon"></i> 
                        <a href=""><i style="padding-right: 24px;" class="fa-solid fa-arrow-rotate-right headicon"></i></a>
                        <div class="urlweb">
                            <i class="fa-solid fa-lock"></i>
                            <span style="padding-left: 10px;">hakkabook.com/forgot-password</span>
                        </div>
                    </div>
                    <div class="webcontent mt-4">
                        <center><br>
                            <span style="color: #F0A500; font-size: 70px; font-weight: 900;">HakkaBook</span><br><br>
                            <h4>รีเซ็ตรหัสผ่านของคุณ</h4>
                            <div id="form_send" class="mt-5 hide">
                                <button class="btn" style="background: #F0A500; padding: 12px; width: 200px; font-size: 20px; border-radius: 20px;"><span class="text-shadow text-white">รหัสถูกส่งแล้ว</span></button>
                            </div>
                            <div id="form">
                                <div class="row mt-5 justify-content-center" >
                                    <div class="col-lg-4">
                                        <input placeholder="ใส่ชื่อของคุณ...." id="name" autocomplete="off" class="form-control bg-dark border-2 border-secondary text-white rounded rounded-3">
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="btn btn-secondary" id="resetpassword">รีเซ็ตรหัสผ่าน</button>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-5">
                                <h5>คุณจะได้รับรหัสผ่าน <b>4</b> หลักในการยืนยันตัวตน</h5>
                            </div>
                            <br><br><br><br><br><br>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6">
                <a href="../2/" class="btn nextLevel" style="font-size: 20px;"><i style="padding-right: 5px;" class="fa-solid fa-circle-arrow-left"></i> LEVEL 2</a>
            </div>
            <div class="col-lg-6 text-end">
                <a href="../4/" id="nextlevel" class="btn disabled nextLevel" style="font-size: 20px;">LEVEL 4 <i style="padding-left: 5px;" class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
    </div>


    <div class="mt-5">

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>