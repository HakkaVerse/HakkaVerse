
<?php
require_once("../../../../_system/system.php");

if(!isset($_SESSION['sec_4'])){
    header("Location: ../4");
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
    <script src="script.js?v=6"></script>
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
    <div class="level-text">5</div>
    <span class="texthead">HakkaBook</span>
    <div class="container mt-5">
        <div class="custom-card">
            <div style="padding: 50px;">
                <div class="title">
                    คำแนะนำ
                </div>
                <div class="description mt-4">
                    <div id="text1">
                        <p>มันไม่ใช่เรื่องยากอะไรที่เราจะลองสุ่มรหัสผ่านใช่ไหมล่ะ ?
                            งั้นเรามาทำอีกรอบเพื่อความชัวร์กันดีกว่า เพียงแค่กดดำเนินการ
                            <b>Request Repeater</b> ด้านล่าง
                        </p>
                        <p>ขั้นตอนนี้จะเริ่มยากขึ้นมานิดหน่อย โดยจะถูกเรียกว่า <b>Bruteforcing</b> ซึ่งเป็นการโจมตีระบบ <b>Cyber
                            Security</b> แบบง่าย</p>
                        <p>ลองกดใช้งาน <b>BruteForce Tool</b> พร้อมกับรหัสค่า <b>Min ( 1 )</b> และ <b>Max ( 10,000 )</b></p>
                    </div>
                    <div id="text2" class="hide">
                        <p><b>ยินดีด้วยครับ !!</b> คุณได้ใช้ <b>Bruteforcing</b> กับระดับความยากง่ายของระบบได้แล้ว
                            คุณสามารถจัดการหรือตั้งค่ารหัส
                            ต่าง ๆ เพื่อรีเซ็ตรหัสของ <b>Hakka’s</b></p>
                        <p>ทุกครั้งที่คุณทำการส่งคำขอรหัสผ่าน มันจะทำให้การขอในแต่ละครั้งเนี่ยยากขึ้นไปด้วยและควรที่จะ
                            <b>Re-Bruteforcing</b></p>
                        <p>ให้คุณทำการกดรีเซ็ตรหัสผ่านของ <b>Hakka’s</b> เพื่อดำเนินการต่อ</p>
                    </div>
                </div>

                <div class="mt-5">
                    <div class="webhead">
                        <i style="padding-left: 30px;padding-right: 24px;" class="fa-solid fa-arrow-left headicon"></i>
                        <i style="padding-right: 24px;" class="fa-solid fa-arrow-right headicon"></i>
                        <i style="padding-right: 24px;" class="fa-solid fa-arrow-rotate-right headicon"></i>
                        <div class="urlweb">
                            <i class="fa-solid fa-lock"></i>
                            <span style="padding-left: 10px;">hakkabook.com/forgot-password</span>
                        </div>
                    </div>
                    <div class="webcontent mt-4 text-center">
                        <h1 class="mt-5" style="color: #F0A500; font-size: 60px; font-weight: 900;">HakkaBook</h1>
                        <div id="form1" class="">
                            <h5 class="mt-4">รหัสของคุณคืออะไรครับ ?</h5>
                            <div id="form">
                                <div class="row mt-5 justify-content-center">
                                    <div class="col-lg-4">
                                        <input type="text" placeholder="รหัสยืนยัน 4 ตัว" id="input" pattern="\d*"
                                            maxlength="4" autocomplete="off"
                                            class="form-control bg-dark border-2 border-secondary text-white rounded rounded-3 boxShadow">
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="btn btn-secondary" id="buttom">ยันยันรหัสผ่าน</button>
                                    </div>
                                </div>
                            </div>
                            <h5 id="textunderinput" class="mt-5">ใส่รหัส 4 ตัวของคุณลงไป</h5>
                        </div>
                        <div id="form2" class="hide">
                            <h5 class="mt-4">กรุณาตั้งรหัสผ่านใหม่ของคุณ</h5>
                            <div id="form2">
                                <div class="row mt-5 justify-content-center">
                                    <div class="col-lg-4">
                                        <input type="password" placeholder="รหัสผ่านใหม่..." id="newpassword" pattern="\d*"
                                             autocomplete="off" 
                                            class="form-control bg-dark border-2 border-secondary text-white rounded rounded-3 boxShadow">
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="btn btn-secondary" id="resetPasswordButton">รีเซ็ตรหัสผ่าน</button>
                                    </div>
                                </div>
                            </div>
                            <h5 id="textunderinput2" class="mt-5">ใส่รหัส 4 ตัวของคุณลงไป</h5>
                        </div>
                        <div id="ResetPasswordSuccess" class="hide">
                            <h5 class="mt-4">กรุณาตั้งรหัสผ่านใหม่ของคุณ</h5>
                            <div class="mt-4 text-center">
                                <button class="btn btn-warning btn-lg">รหัสผ่านถูกเปลี่ยนเรียบร้อย</button>
                            </div>

                        </div>
                        <div class="mt-5"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6">
                <a href="../4/" class="btn nextLevel" style="font-size: 20px;"><i style="padding-right: 5px;" class="fa-solid fa-circle-arrow-left"></i>
                    LEVEL 4</a>
            </div>
            <div class="col-lg-6 text-end">
                <a href="../6/" id="nextlevel" class="btn nextLevel disabled" style="font-size: 20px;">LEVEL 6 <i style="padding-left: 5px;"
                        class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>

        <div class="mt-5" id="web_request">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        Web Request Repeater
                    </div>
                    <div class="description mt-4 text-white">
                        <div class="row">
                            <div class="col-lg-3 mt-2 text-center">
                                <div class="mt-3">
                                    <input id="min" type="text" placeholder="Min Code Value"
                                        class="form-control-lg bg-dark text-white border-secondary text-center rounded-3"
                                        maxlength="5" autocomplete="off">
                                </div>
                                <div class="mt-3">
                                    <input id="max" type="text" placeholder="Max Code Value"
                                        class="form-control-lg bg-dark text-white border-secondary text-center rounded-3"
                                        maxlength="5" autocomplete="off">
                                </div>
                                <div class="mt-3">
                                    <div class="text-center">
                                        <button id="force" class="btn btn-brown btn-lg w-75">BruteForce</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1">

                            </div>
                            <div id="request1" class="col-lg-8 mt-5">
                                <div class="mt-5">
                                    <h4 class="">ข้อมูลการร้องขอเว็บจะปรากฏที่นี่..</h4>

                                </div>
                            </div>
                            <div id="request2" class="col-lg-8 hide">
                                <p class="mt-5">POST /accounts/reset_password/ HTTP/1.1</p>
                                <p>User-Agent: Mozilla/5.0 FireFox/80</p>
                                <p>Host: hakkabook.com</p>
                                <p class="mt-5" id="reset_code">reset_code=xxxx&username=Hakka.Lab</p>

                            </div>
                        </div>
                    </div>
                </div>
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