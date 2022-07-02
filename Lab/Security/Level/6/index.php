
<?php
require_once("../../../../_system/system.php");

if(!isset($_SESSION['sec_5'])){
    header("Location: ../5");
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
    <script src="script.js?v=3"></script>
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
    </style>
    <img class="imagebanner" src="img/banner.jpg">
    <div class="imgshadow"></div>
    <div class="level-border"></div>
    <div class="level-text">6</div>
    <span class="texthead">HakkaBook</span>
    <div class="container mt-5">
        <div class="custom-card">
            <div style="padding: 50px;">
                <div class="title">
                    คำแนะนำ
                </div>
                <div class="description mt-4">
                    <div id="text1">
                        <p>นี้คือการโจมตีที่ใช้ได้จริงในชีวิตประจำวัน มันถึงขั้นที่ทำการ  <b>take over Instagram</b> ได้เลยนะครับ ถ้ากลุ่ม <b>Hacker</b> 
                            สามารถตรวจสอบจุดนี้แล้วแจ้งไป <b>Instagram</b> พวกเขาจะได้รับค่าตอบแทนเป็นเงิน <b>10,000</b> ดอลลาร์สหรัฐโดยประมาณ</p>
                            <p>นี้เป็นสิ่งสำคัญที่ทุกคนจะต้องทำความเข้าใจเกี่ยวกับวิธีการตรวจสอบเว็บไซต์ เพื่อที่ทุกคนจะได้เข้าใจในระบบมากขึ้น 
                                เราจะช่วยสอนทุกท่าน เกี่ยวกับการโจมตีทางไซเบอร์มากขึ้น รวมไปถึงเครื่องมือที่ใช้เพื่อการตรวจสอบระบบ
                                รักษาความปลอดภัยในชีวิตประจำวัน</p>
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
                        <h4 class="mt-4">คุณรีเซ็ตรหัสผ่านสำเร็จแล้ว</h4>
                        <div class="mt-4">
                            <center><input disabled id="input" value="" style="width: 18rem;" class="form-control text-center form-control-lg bg-dark text-white border-secondary"></center>
                        </div>
                        <div class="text-center mt-4">
                            <a href="../../Level/0/" class="btn btn-warning btn-lg">กลับหน้าหลัก</a>
                        </div>
                        <div class="mt-5"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6">
                <a href="../5/" class="btn nextLevel" style="font-size: 20px;"><i style="padding-right: 5px;" class="fa-solid fa-circle-arrow-left"></i> LEVEL 5</a>
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