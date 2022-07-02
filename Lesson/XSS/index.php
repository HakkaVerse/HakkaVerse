<?php require_once dirname(__FILE__) . "/../../_system/system.php";
if (!isset($_SESSION['username'])) {
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
    <title>HAKKA - Lesson</title>

    <!-- Bootstrap CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">


    <!-- FONT -->

    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

    <!-- Custom CSS -->
    <link href="../../assets/custom/style.css?v=22" rel="stylesheet">
    <link href="../../assets/custom/home.css?v=22" rel="stylesheet">
    <link href="../../assets/custom/parallax.css?v=22" rel="stylesheet">
    <link href="../../assets/custom/animation.css?v=22" rel="stylesheet">
    <link href="../../assets/custom/carousel.css?v=22" media="screen" rel="stylesheet">
    <link href="../../assets/custom/border.css?v=22" media="screen" rel="stylesheet">
    <link href="../../assets/custom/learn.css?v=22" media="screen" rel="stylesheet">


    <!--load all Font Awesome styles -->
    <link href="../../assets/fontawesome/css/all.css" rel="stylesheet">

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    </script>
</head>

<body>
    <div class="container mt-3">
        <nav class="navbar navbar-expand-lg">

            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars text-white" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse fade-in" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white text-center">
                    <img width="50%" src="../../public/img/logo.png">
                </ul>
                <ul class="navbar-nav text-white text-center">
                    <a class="nav-link textw " aria-current="page" href="../../Home/">Home</a>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw active" href="../../Lesson/">Lesson</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../../Lesson/Test">Exercise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../../Lab/">Lab</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../../Rank/">Ranking</a>
                    </li>
                    <li><span style="padding-right:100px;"></span></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <a href="../../Profile/"><img src="<?php echo $_SESSION['profile']; ?>"
                            style="border: 4px solid white;border-radius: 20px; width: 90px; height: 90px; object-fit: cover;"></a>
                </ul>
            </div>
        </nav>

    </div>

    <div class="container mt-5">
        <div class="mt-4">
            <a href="../../Lesson/" style="width: 250px;" class="btn btn-custom"><i style="margin-right: 10px;"
                    class="fa-solid fa-circle-arrow-left"></i> กลับสู่หน้าหลัก</a>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 text-white">
                <div class="custom-border">
                    <div class="container">
                        <div class="mt-1">
                            <h2 style="color: #F0A500;"><b style="color:white;">Cross Site Scripting ( XSS )</b></h2>
                        </div>
                        <div class="mt-4">
                            <span class="badge background-gradient"><span class="text-white"
                                    style="font-size: 18px;text-shadow: black 2px 0 5px; font-weight: 900;padding: 5px;">Beginner</span></span>
                        </div>
                        <div class="mt-4">
                            <span><i class="fa fa-play-circle" style="padding-right: 9px; font-size: 25px;"></i> <span
                                    style="position: absolute; margin-top: 0px;">30 Minute</span></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" style="position: relative; bottom: 120px; right:80px;">
                <a href="../Security/"><img width="40px" src="../../public/img/icon/back.png"></a>
            </div>
            <div class="col-lg-6 text-end" style="position: relative; bottom: 120px; left:80px;"">
            <a href=" ../SQLi/"><img width="40px" src="../../public/img/icon/next.png"></a>
            </div>



            <div class="col-lg-12 mt-5 text-white">

                <div class="card-header background-gradient" style="border-radius: 10px;">
                    <span style="font-size: 24px;text-shadow: black 2px 2px 2px;"><b style="color: white;">Cross-Site
                            Scripting</b> คืออะไร <b style="color: white;">?</b></span>
                </div>


                <!-- Link Youtube Lab XSS -->
                <div class="ratio ratio-16x9 mt-5">
                    <!-- Link Youtube Tutorial -->
                    <!-- ตัวอย่างลิงก์ Youtube ที่เอามาเป็นตัวอย่าง https://www.youtube.com/watch?v=RsAzNgdZ_Dk ให้ Copy แค่ตรงส่วนนี้ "RsAzNgdZ_Dk" เอามาแทนที่ข้างล่าง ไม่ต้องยุ่งกับ "https://www.youtube.com/embed/" -->
                    <iframe style="border-radius: 30px;" src="https://www.youtube.com/embed/RsAzNgdZ_Dk"
                        title="YouTube video" allowfullscreen></iframe>
                </div>

                <div class="mt-5 text-center">
                    <a href="download/xss.pdf" download style="width: 239px;" class="btn btn-custom">XSS.PDF</a>
                </div>
            </div>

















        </div>
    </div>


    <?php
    require_once("../../totop.php");
    ?>
    <!-- Parallax start -->
    <div class="parallax"></div>
    <!-- Parallax end -->

    <!-- Custom JS -->
    <script src="../../assets/jscustom/learn.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>