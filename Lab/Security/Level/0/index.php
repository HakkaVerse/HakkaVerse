<?php
require_once dirname(__FILE__)."/../../../../_system/system.php";
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
        p{
            font-size: 20px;
        }
        
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
    <div class="level-text">0</div>
    <span class="texthead">Web Application Security</span>
    <div class="container mt-5">
        <div class="custom-card">
            <div class="container">
                <h3>???????????????????????????????????????????????????????????????????????????????????? Website ????????????????????????????????? ? </h3>
                <p class="mt-5">?????????????????????????????????????????????????????? <b>Web Application</b>
                    ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ? ????????????????????????????????? <b>Hack</b>
                    ??????????????????????????????????????? ??????????????? <b>Hack</b> ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                    ?????????????????????????????????????????????????????????????????????????????????????????????????????????
                    ??????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                    ?????????????????????????????????????????????????????????????????????
                    ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>

                <p class="mt-5">
                    ???????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????? <b>Web Application</b>
                    ?????????????????????????????????????????????????????????????????????????????????????????????
                    ?????????????????????????????????????????????????????????????????? <b>Hacker</b> ????????????????????????????????????????????????????????????????????????
                </p>
                
                <h3 class="mt-5">?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? </h3>

                <p class="mt-5">???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? Lab ????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????? </p>

                <h3 class="mt-5">?????????????????? !!</h3>

                <div class="custom-card1 mt-5">
                    <div class="mt-4"></div>
                    <p>?????????????????????????????????????????????????????? <b>HakkaBook</b> ??????????????????????????????????????? <b>Taking Over</b> ??????????????????????????? ? </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <input class="input" id="answer1" value="<?php echo account()->checkLabQuestion($_SESSION['id'], "sec_lv1") ?>" placeholder="????????????????????????...">
                        </div>
                        <div class="col-lg-3">
                            <button id="answerbutton1" class="btn custom-button" style="font-size: 20px;">?????????????????????????????????</button>
                        </div>
                    </div>
                    
                    <div class="mt-4"></div>
                </div>
                <div style="height: 50px;"></div>
                <div class="custom-card1 mt-5">
                    <div class="mt-4"></div>
                    <p>??????????????? <b>Hack</b> ??????????????? <b>HakkaBook</b> ???????????????????????????????????????????????????????????????????????????????????????????????????</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <input class="input border" id="answer2" value="<?php echo account()->checkLabQuestion($_SESSION['id'], "sec_lv2") ?>" placeholder="????????????????????????...">
                        </div>
                        <div class="col-lg-3">
                            <button id="answerbutton2" class="btn custom-button"  style="font-size: 20px;">?????????????????????????????????</button>
                        </div>
                    </div>
                    
                    <div class="mt-4"></div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6">
                <div class="col-lg-6">
                    <a href="../../" class="btn nextLevel"  style="font-size: 20px;"><i style="padding-left: 5px;" class="fa-solid fa-circle-arrow-left"></i> ????????????????????????</a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <a href="../1/" class="btn nextLevel"  style="font-size: 20px;">LEVEL 1 <i style="padding-left: 5px;" class="fa-solid fa-circle-arrow-right"></i></a>
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