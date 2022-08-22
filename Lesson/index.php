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
    <title>Hakka - Lesson</title>

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">


    <!-- FONT -->

    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

    <!-- Custom CSS -->
    <link href="../assets/custom/style.css?v=22" rel="stylesheet">
    <link href="../assets/custom/home.css?v=22" rel="stylesheet">
    <link href="../assets/custom/parallax.css?v=22" rel="stylesheet">
    <link href="../assets/custom/animation.css?v=22" rel="stylesheet">
    <link href="../assets/custom/carousel.css?v=22" media="screen" rel="stylesheet">

    <!--load all Font Awesome styles -->
    <link href="../assets/fontawesome/css/all.css?v=22" rel="stylesheet">

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
                    <img width="50%" src="../public/img/logo.png">
                </ul>
                <ul class="navbar-nav text-white text-center">
                    <a class="nav-link textw " aria-current="page" href="../Home/">Home</a>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw active" href="../Lesson/">Lesson</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../Lesson/Test">Test</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../Lab/">Lab</a>
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 mt-5">
                <div class="mt-3">
                    <img src="../public/img/home/hakka.png" width="60%">
                </div>
                <div class="mt-3">
                    <h3><b style="color: white;">บทเรียนทั้งหมดภายในเว็บไซต์</b></h3>
                </div>
                <div class="mt-3 text-white">
                    <p style="font-weight: 100; font-size: 18px; color: #8D8A8A;">
                        สวัสดีครับทุกท่านขอต้อนรับสู่เว็บไซต์ของเรา Hakka. โดยภายในหน้านี้จะ<br>
                        เป็นหน้าของบทเรียนของเราซึ่งจะมีทั้ง 3 บทเรียนด้วยกัน ได้แก่ ส่วนแรก<br>
                        ซึ่งเป็นส่วนของช่องโหว่ <span style="color: white;">Cross - Site Scripting</span> , <span style="color: white;">SQL Injection</span> และ<br>
                        ส่วนที่สองจะเป็นเรื่องของการป้องกันก็คือ <span style="color: white;">Web Security</span>
                    </p>

                </div>
                <div class="mt-3 text-white">
                    <p style="font-weight: 100; font-size: 18px;">
                        ขอให้ทุกท่านสนุกกับการเรียนและได้รับข้อมูลอย่างครบถ้วนจากเนื้อหาเราเตรียมไว้ให้ด้วยนะครับ <b>^ ^</b>
                    </p>

                </div>
            </div>


            <div class="col-lg-4 mt-5 text-white text-center">
                <div class="mt-3 text-center Previous1" style="font-size: 50px;">
                    <a href="#" onclick="plusSlides(-1)"><img src="../public/img/icon/TOP.png" width="60px" height="60px"></a>
                </div>
                <div class="slideshow-container">
                    <div class="mt-5 mySlides fadee">
                        <div class="border-gradient">
                            <h4>Cross - Site Scripting ( XSS )</h4>
                            <p>ภัยอันตรายจากการถูกโจมตีผ่านหน้าเว็บเพจ</p>
                        </div>
                        <a href="XSS/" style="width: 70%; font-size: 20px;"
                            class="mt-5 btn btn-custom btn-glow">เริ่มต้นบทเรียน</a>
                    </div>
                    <div class="mt-5 mySlides fadee">
                        <div class="border-gradient">
                            <h4>SQL Injection ( SQLi )</h4>
                            <p>ภัยอันตรายจากคำสั่งที่อยู่ภายใต้ UI ของเว็บไซต์</p>
                        </div>
                        <a href="SQLi/" style="width: 70%; font-size: 20px;"
                            class="mt-5 btn btn-custom btn-glow">เริ่มต้นบทเรียน</a>
                    </div>
                    <div class="mt-5 mySlides fadee">
                        <div class="border-gradient">
                            <h4>Web Security</h4>
                            <p>รู้เท่าทันภัยอันตรายและป้องกันได้อย่างมีประสิทธิภาพ</p>
                        </div>
                        <a href="Security/" style="width: 70%; font-size: 20px;"
                            class="mt-5 btn btn-custom btn-glow">เริ่มต้นบทเรียน</a>
                    </div>

                </div>
                <div class="mt-5 text-center Next1" style="font-size: 50px;">
                    <a href="#" onclick="plusSlides(1)"><img src="../public/img/icon/BOTTOM.png" width="60px" height="60px"></a>
                </div>
            </div>
        </div>
    </div>



    <?php
    require_once("../totop.php");
    ?>
    <!-- Custom JS -->
    <script src="../assets/jscustom/carousel.js"></script>
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