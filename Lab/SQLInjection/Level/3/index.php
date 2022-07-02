<?php
require_once("../../../../_system/system.php");

if(!isset($_SESSION['sql_2'])){
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&family=Kanit:wght@100;200;300;400&family=Nunito:wght@200&display=swap" rel="stylesheet">
    <!--load all Font Awesome styles -->
    <link href="../../../../assets/fontawesome/css/all.css" rel="stylesheet">


    <!--load CSS -->
    <link href="style.css" rel="stylesheet">

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js?v=8"></script>
</head>

<body>

    <style>
        .btn-orange {
            padding: 13px 30px 15px;
            text-align: center;
            background: #1565C0;
            border-radius: 16px;
            font-size: 20px;
            border: #1565C0;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
    </style>
    <img class="imagebanner" src="img/banner.jpg">
    <div class="imgshadow"></div>
    <div class="text-center text-white mt-5" style="font-size: 85px; font-weight: 900; letter-spacing: 1px;">
        <span class="">BOOLEAN BASED BLIND SQLI</span>
    </div>
    <div class="container mt-5">
        
        <div class="webhead">
            <i style="padding-left: 30px;padding-right: 24px;" class="fa-solid fa-arrow-left headicon"></i>
            <i style="padding-right: 24px;" class="fa-solid fa-arrow-right headicon"></i>
            <a href=""><i style="padding-right: 24px;" class="fa-solid fa-arrow-rotate-right headicon"></i></a>
            <input id="input" class="urlweb text-center" value="https://hakka.hka/checkuser?username=admin">
        </div>
        <div class="webcontent mt-4">
            <div id="jsonoutput">
                {"taken":true}
            </div>
            <div class="mt-3">

            </div>
        </div>
        <div class="webhead mt-5">
            <i style="padding-left: 30px;padding-right: 24px;" class="fa-solid fa-arrow-left headicon"></i> 
            <i style="padding-right: 24px;" class="fa-solid fa-arrow-right headicon"></i> 
            <a href=""><i style="padding-right: 24px;" class="fa-solid fa-arrow-rotate-right headicon"></i></a>
            <div id="input" class="urlweb text-center"><span><i class="fa-solid fa-lock"></i> https://hakka.hka/login</span>
                </div>
        </div>
        <div class="webcontent mt-4">
            <div id="content1" class="mt-3">
                <center>
                    <h5>เข้าสู่ระบบ</h5>
                    <div class="col-lg-4 mt-4">
                        <input id="username" class="input" autocomplete="off" placeholder="ชื่อผู้ใช้">
                        <input id="password" type="password" autocomplete="off" class="input mt-4" placeholder="รหัสผ่าน">
                        <button id="formsubmit" class="btn btn-orange text-white mt-4">เข้าสู่ระบบ</button>

                    </div>
                </center>
            </div>
            <div id="content2" class="hide">
                <center>
                    <h5>เข้าสู่ระบบ</h5>
                    <div class="col-lg-4 mt-4">
                        <input id="username" class="input" autocomplete="off" placeholder="ชื่อผู้ใช้">
                        <input id="password" type="password" autocomplete="off" class="input mt-4" placeholder="รหัสผ่าน">
                            <a href="../4/" class="btn btn-orange text-white mt-3" style="font-size: 20px;">LEVEL FOUR <i style="padding-left: 5px;" class="fa-solid fa-circle-arrow-right"></i></a>

                    </div>
                </center>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-4">
                <div class="description">
                    <div class="text-bg-white">SQL Query</div>
                    <div class="mt-3">
                        <b id="sqlquery">select * from users where username = '<span id="sqltext"></span>' LIMIT 1;</b>
                    </div>
                    <div class="mt-3"></div>
                    
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="description">
                    <div class="text-bg-white-thai">ผลลัพธ์ที่ได้</div>
                    <div class="mt-3 text-white">
                        <p id="result"></p>
                    </div>
                    <div class="mt-3"></div>
                    
                </div>
            </div>
            <div class="col-lg-6 mt-1">
                <center>
                    <div class="custom-card2 text-center mt-3 hide" id="win">HKA{SQL_INJECTION_1093}</div>

                </center>
            </div>
            <div class="col-lg-6 mt-4">
                <center>
                    <div class="custom-card2 text-center hide" id="passwordStatus"></div>

                </center>

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