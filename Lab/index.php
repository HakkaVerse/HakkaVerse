<?php require_once dirname(__FILE__)."/../_system/system.php";
if(!isset($_SESSION['username'])){
  header("Location: /Login");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Web title -->
    <title>HAKKA - Lab</title>

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">


    <!-- FONT -->

    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

    <!-- Custom CSS -->
    <link href="../assets/custom/style.css?v=11" rel="stylesheet">
    <link href="../assets/custom/home.css?v=11" rel="stylesheet">
    <link href="../assets/custom/parallax.css?v=11" rel="stylesheet">
    <link href="../assets/custom/animation.css?v=11" rel="stylesheet">
    <link href="../assets/custom/carousel.css?v=11" rel="stylesheet">
    <link href="../assets/custom/border.css?v=11" media="screen" rel="stylesheet">

    <!--load all Font Awesome styles -->
    <link href="../assets/fontawesome/css/all.css" rel="stylesheet">

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body>


    <style>
    .custom-card {
        /* Rectangle 571 */
        width: 100%;
        color: white;
        padding: 32px;

        background: rgba(99, 108, 132, 0.26);
        box-shadow: inset 0px 0px 68px rgba(255, 255, 255, 0.05), inset 0px 4px 4px rgba(255, 255, 255, 0.15);
        /* Note: backdrop-filter has minimal browser support */

        border-radius: 19px;
    }

    p {
        font-weight: 400;
        font-size: 20px;
        line-height: 27px;

        color: #8D8A8A;
    }

    .text1 {
        font-weight: 900;
        font-size: 70px;

        background: radial-gradient(100% 2686.27% at 0% 50%, #B92B27 20%, #1565C0 80%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
    }

    .text2 {
        font-weight: 900;
        font-size: 60px;
        /* identical to box height */

        color: #FFFFFF;

    }
    </style>
    <?php require_once dirname(__FILE__)."/../alert_account.php"; ?>
    <div class="container mt-3">
        <nav class="navbar navbar-expand-lg">

            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars text-white" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse fade-in" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white text-center">
                    <img width="50%" src="../public/img/logo.png">
                </ul>
                <ul class="navbar-nav text-white text-center">
                    <a class="nav-link textw " aria-current="page" href="../Home/">Home</a>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../Lesson/">Lesson</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../Lesson/Test">Test</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw active" href="../Lab/">Lab</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../Rank/">Ranking</a>
                    </li>
                    <li><span style="padding-right:100px;"></span></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <a href="../Profile/"><img src="<?php echo $_SESSION['profile']; ?>"
                            style="border: 4px solid white;border-radius: 20px; width: 90px; height: 90px; object-fit: cover;"></a>
                </ul>
            </div>
        </nav>

    </div>
    <div style="margin-top: 98px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-5">
                <div class="custom-card">
                    <div class="container">
                        <p><span class="text-white">สวัสดีครับทุกคน !!</span> ผมขอต้อนรับเข้าสู่หน้าของแลปทดลองกัน
                            นะครับ โดยแลปของเราจะมีให้คุณเลือกทำทั้งหมด 3 แลปด้วย
                            กันซึ่งแลปทั้ง 3 ตัวจะเป็นเนื้อหาต่อจาก บทเรียนที่เรียนมา
                            ทั้งหมด ซึ่งการที่คุณจะสามารถเล่นแลปของเราได้นั้น มีเพียง
                            วิธีเดียวนั้นคือออ คุณต้องทำข้อสอบของทั้ง 3 บทเรียนให้หมด
                            เพื่อเป็นการทดสอบความสามารถก่อนที่จะมาทำแลปของเราครับผม</p>

                        <p>ถ้าใครที่ยังทำไมครบก็ต้องกลับไปทำก่อนนะครับ แต่ใครที่ทำได้
                            ครบแล้ว เชิญเข้าไปเล่นกับแลปทดลองของเราได้เลยยยย</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <center>
                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_vxwz9qsv.json"
                        background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay>
                    </lottie-player>
                </center>
            </div>
        </div>




        <!-- Cross - Site Scripting -->
        <div style="margin-top: 260px;"></div>

        <div class="text-center">
            <h1 class="text1">แลปทดลองด้านช่องโหว่</h1>
        </div>
        <div class="text-center mt-3">
            <h1 class="text2">Cross - Site Scripting</h1>
        </div>
        <div class="text-center mt-3">
            <p>
                วิดีโอตัวนี้เป็นการพาชมและแนะนำการใช้งานภายในแลปทดลองของเราว่า<br>
                ภายในนั้นมีฟังก์ชั่นและมีลูกเล่นอะไรบ้างภายในเว็บไซต์
            </p>
        </div>

        <!-- Link Youtube Lab XSS -->
        <div class="ratio ratio-16x9 mt-4">
            <iframe style="border-radius: 30px;" src="https://www.youtube.com/embed/wy1YRV-amn0" title="YouTube video"
                allowfullscreen></iframe>
        </div>
        <div class="mt-4 text-center">
            <a class="btn btn-secondary <?php if(account()->checkTestList() >= $lab){echo "btn-gradient";} ?>" <?php if(account()->checkTestList() >= $lab){echo "href='Cross_Site_Scripting'";} ?> style="width: 200px;">เข้าสู่แลปทดลอง</a>
        </div>

        



        <!-- SQL Injection -->


        <div style="margin-top: 260px;"></div>

        <div class="text-center">
            <h1 class="text1">แลปทดลองด้านช่องโหว่</h1>
        </div>
        <div class="text-center mt-3">
            <h1 class="text2">SQL Injection</h1>
        </div>
        <div class="text-center mt-3">
            <p>
                วิดีโอตัวนี้เป็นการพาชมและแนะนำการใช้งานภายในแลปทดลองของเราว่า<br>
                ภายในนั้นมีฟังก์ชั่นและมีลูกเล่นอะไรบ้างภายในเว็บไซต์
            </p>
        </div>
        <!-- Link Youtube Lab XSS -->
        <div class="ratio ratio-16x9 mt-4">
            <iframe style="border-radius: 30px;" src="https://www.youtube.com/embed/wy1YRV-amn0" title="YouTube video"
                allowfullscreen></iframe>
        </div>
        <div class="mt-4 text-center">
            <a class="btn btn-secondary <?php if(account()->checkTestList() >= $lab){echo "btn-gradient";} ?>" <?php if(account()->checkTestList() >= $lab){echo "href='SQLInjection'";} ?> style="width: 200px;">เข้าสู่แลปทดลอง</a>
        </div>






        <!-- Web Security -->



        <div style="margin-top: 260px;"></div>

        <div class="text-center">
            <h1 class="text1">แลปทดลองด้านช่องโหว่</h1>
        </div>
        <div class="text-center mt-3">
            <h1 class="text2">Web Security</h1>
        </div>
        <div class="text-center mt-3">
            <p>
                วิดีโอตัวนี้เป็นการพาชมและแนะนำการใช้งานภายในแลปทดลองของเราว่า<br>
                ภายในนั้นมีฟังก์ชั่นและมีลูกเล่นอะไรบ้างภายในเว็บไซต์
            </p>
        </div>
        <!-- Link Youtube Lab XSS -->
        <div class="ratio ratio-16x9 mt-4">
            <iframe style="border-radius: 30px;" src="https://www.youtube.com/embed/wy1YRV-amn0" title="YouTube video"
                allowfullscreen></iframe>
        </div>
        <div class="mt-4 text-center">
            <a class="btn btn-secondary <?php if(account()->checkTestList() >= $lab){echo "btn-gradient";} ?>" <?php if(account()->checkTestList() >= $lab){echo "href='Security'";} ?> style="width: 200px;">เข้าสู่แลปทดลอง</a>
        </div>
    </div>
    </div>

    
    <?php
    require_once("../totop.php");
    ?>
    <!-- Parallax start -->
    <div class="parallax"></div>
    <!-- Parallax end -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>