
<?php
require_once("../../../../_system/system.php");

if(!isset($_SESSION['xss_2'])){
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
        .btn-yellow{
            background: #1565C0;
            color: white;
        }
        .btn-yellow:hover{
            background: #1565C0;
            color: white;
        }
    </style>
    <div class="url">
        https://10-10-226-32.hakka.com/level1?payload=<span id="payload"></span>
    </div>
    <div id="alert1" class="container mt-5 hide">
        <div class="row">
            <div class="col-lg-8">

            </div>
            
            <div class="col-lg-3 mt-5">
                <div class="custom-card2">
                    <p><b>10-10-226-32.hakka.com</b> บอกว่า</p>
                    <p><b id="textalert1">Hello</b></p>
                    <div class="mt-4 text-end">
                        <button id="buttonalert1" class="btn btn-yellow" style="font-size: 20px;">ตกลง</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 text-end">
            </div>
        </div>
    </div>

    
    <div id="alert2" class="container mt-5 hide">
        <div class="row justify-content-center">
            <div class="col-lg-3" style="margin-top: 160px;">
                <div class="custom-card2">
                    <div class="text-center mt-4">
                        <h4><b id="textalert2">HKA</b></h4>
                    </div>
                    <div class="mt-5 text-center">
                        <button id="buttonalert2" class="btn btn-yellow" style="font-size: 20px;">ตกลง</button>
                    </div>
                    <div class="mt-3">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="body" class="">
        <img class="imagebanner" src="img/banner.jpg">
        <div class="imgshadow"></div>
        <div class="text-center text-white" style="font-size: 85px; font-weight: 900; letter-spacing: 1px;">
            <span>Perfecting your payload</span>
        </div>
        <div class="text-center mt-4" style="font-size: 85px;color: #EB8145;font-weight: 900;">
            LEVEL THREE
        </div>
        <div class="container mt-5">
            <div class="custom-card">
                <div style="padding: 50px;">
                    <div class="text-center">
                        <p>ใส่ชื่อของคุณ</p>
                        <div class="mt-4">
                            <center><input style="width: 400px;" id="input" autocomplete="off" class="form-control form-control-lg bg-dark text-white text-center border-secondary border-top" placeholder="ใส่ชื่อของคุณ"></center>
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-orange text-white" id="confirm">ยืนยันคำตอบ</button>
                        </div>
                        <div id="output" class="mt-4 hide">
                            <h2>Hello, <textarea class="form-control-lg bg-dark border border-secondary rounded rounded-3 text-white" id="textoutput"></textarea> <span id="textoutput2"></span></h2>
                        </div>
                        <div class="mt-2">
                            <b id="xss"></b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6">
                    <!-- <a href="../0/" class="btn nextLevel"><i style="padding-right: 5px;" class="fa-solid fa-circle-arrow-left"></i> LEVEL 0</a> -->
                </div>
                <div class="col-lg-6 text-end">
                    <a href="../4/" id="nextlevel" class="btn btn-dark text-secondary disabled" style="font-size: 20px;">LEVEL FOUR <i style="padding-left: 5px;" class="fa-solid fa-circle-arrow-right"></i></a>
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