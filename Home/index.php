<?php require_once dirname(__FILE__)."/../_system/system.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Web title -->
    <title>HAKKA - Home</title>

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css?v=22" rel="stylesheet">


    <!-- FONT -->

    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

    <!-- Custom CSS -->
    <link href="../assets/custom/style.css?v=22" rel="stylesheet">
    <link href="../assets/custom/home.css?v=22" rel="stylesheet">
    <link href="../assets/custom/parallax.css?v=22" rel="stylesheet">
    <link href="../assets/custom/animation.css?v=22" rel="stylesheet">
    <link href="../assets/custom/carousel.css?v=22" rel="stylesheet">
    <link href="../assets/custom/border.css?v=22" media="screen" rel="stylesheet">

    <!--load all Font Awesome styles -->
    <link href="../assets/fontawesome/css/all.css?v=22" rel="stylesheet">

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body>


    <style>
    .fx1 {
        position: absolute;
        width: 50%;
        right: 0px;
    }

    .fx2 {
        position: absolute;
        width: 40%;
        top: 1000px;
    }

    .text1 {
        font-weight: 400;
        font-size: 20px;
        line-height: 27px;
        display: flex;
        align-items: center;

        color: #8D8A8A;
    }

    .disableimg {

        user-drag: none;
        -webkit-user-drag: none;

        user-select: none;
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }

    .text2 {
        font-weight: 400;
        font-size: 60px;
        line-height: 82px;

    }


    .text3 {
        font-weight: 900;
        font-size: 60px;
        line-height: 82px;
        color: #F0A500;

    }

    .text4 {
        font-size: 40px;
        color: white;
    }

    .p {
        font-size: 20px;
        color: #8D8A8A;
    }

    .cybertext {
        background: radial-gradient(100% 2686.27% at 0% 50%, red 20%, #009EFF 80%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;

        font-weight: 900;
        font-size: 90px;
        line-height: 95px;

    }


    .htext1 {
        font-weight: 900;
        font-size: 60px;
        line-height: 82px;
        color: #FFFFFF;
    }

    .htext2 {

        font-size: 20px;
        line-height: 27px;
        color: #FFFFFF;
    }
    .hide{
        display: none;
    }
    </style>
    <img class="fx1 disableimg" src="/../public/img/effect/1.png">
    <!-- <img class="fx2" src="/../public/img/effect/2.png"> -->
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
                    <a class="nav-link textw active" aria-current="page" href="../Home/">Home</a>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../Lesson/">Lesson</a>
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
                    <?php if(isset($_SESSION['username'])){ 
                    ?>
                    <a href="../Profile/"><img src="<?php echo $_SESSION['profile']; ?>"
                            style="border: 4px solid white;border-radius: 20px; width: 90px; height: 90px; object-fit: cover;"></a>
                    <?php
                    }else{ 
                        ?>
                        <a href="../Profile/"><img src="../public/img/design/profile.png"
                                style="width: 90px; height: 90px; object-fit: cover;"></a>

                        <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>

    </div>
    <div style="margin-top: 98px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <lottie-player src="https://assets7.lottiefiles.com/private_files/lf30_wqypnpu5.json"
                    background="transparent" speed="1" style="width: 338px; height: 338px;" loop autoplay>
                </lottie-player>
                <h3 class="text-white">แพลตฟอร์มสำหรับการเรียนรู้ด้านไซเบอร์</h3>
                <p class="text1">หลักสูตรการสอนที่มีเนื้อหาเกี่ยวกับ Cyber Security ที่รวบรวมเอา
                    ไว้ทั้งเนื้อหาการป้องกันและด้านช่องโหว่ตัวท็อปที่สามารถพบเจอได้ใน
                    เว็บไซต์ของเรา</p>
                <div class="row <?php if(isset($_SESSION['username'])){ echo "hide";} ?>">
                    <div class="col-lg-6">
                        <a href="../Login/" class="btn btn-custom" style="width: 100%;">เข้าสู่ระบบ</a>

                    </div>
                    <div class="col-lg-6 text-end">
                        <a href="../Register/"><button class="btn-custom-border" style="width: 100%;">ลงทะเบียน</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <center>
                <lottie-player src="../public/GIF/1.json" background="transparent" speed="1"
                    style="width: 516px; height: 494px;" loop autoplay></lottie-player>

                </center>
            </div>
        </div>

        <div class="parallax"></div>
        <div class="text-center">
            <h1 class="text-white text2">เพิ่มสกิลความรู้ เพื่อก้าวเข้าสู่โลก</h1>
            <h1 class="cybertext">Cyber Security</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 text-center">
                <h1 class="text3">3</h1>
                <h2><b class="text-white">เนื้อหาอัดแน่น</b></h2>
            </div>
            <div class="col-lg-2 text-center">
                <h1 class="text3">90+</h1>
                <h2><b class="text-white">แบบฝึกหัด</b></h2>
            </div>
            <div class="col-lg-3 text-center">
                <h1 class="text3">15+</h1>
                <h2><b class="text-white">แลปทดลอง</b></h2>
            </div>
        </div>

        <div style="margin-top: 257px;"></div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4">
                <h2 class="htext1">ไม่มีพื้นฐานก็เรียนได้</h2>
            </div>
            <div class="col-lg-4 mt-4">
                <p class="htext2">เนื้อหาการสอนของเราเป็นเนื้อหาในระดับพื้นฐาน
                    มากๆที่ทุกคนสามารถเข้าถึงมันได้ เพราะเว็บไซต์
                    ของเราเป็นเนื้อหาในรูปแบบของภาษาไทยซึ่งจะ
                    เข้าใจได้ง่ายกว่า</p>
            </div>
        </div>


        <div style="margin-top: 98px;"></div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4">
                <h2 class="htext1">แบบฝึกหัด
                    สำหรับทดสอบ</h2>
            </div>
            <div class="col-lg-4 mt-4">
                <p class="htext2">หลังจากที่เราเรียนรู้ในแต่ละบทจนเสร็จจะมีแบบ
                    ทดสอบให้ทุกคนได้ทดลองทำกันเพื่อที่จะวัดความรู้ของตัวเองหลังจากที่เรียนรู้เนื้อหามาจนหมดแล้ว</p>
            </div>
        </div>


        <div style="margin-top: 98px;"></div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4">
                <h2 class="htext1">ระบบแรงค์<br>
                    และสกิล</h2>
            </div>
            <div class="col-lg-4 mt-4">
                <p class="htext2">ระบบนี้จะเป็นการแบ่งระดับความสามารถและจำแนก
                    ทักษะสกิลของแต่ละคนว่าตัวเองมีความถนนในด้าน
                    ไหนมากกว่ากันเพื่อที่จะได้สามารถศึกษาต่อไปในทาง
                    ที่ตนต้องการ</p>
            </div>
        </div>


        <div style="margin-top: 98px;"></div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4">
                <h2 class="htext1">แลปทดลอง<br>
                    ของบทเรียน</h2>
            </div>
            <div class="col-lg-4 mt-4">
                <p class="htext2">แลปทดลองนี้จะทำให้เราสามารถพัฒนาตัวเองไปได้
                    อีกขั้นนึงเพราะมันเหมือนเป็นการทดสอบฝีมือแบบ
                    ไปในตัวด้วยว่าเราสามารถเรียนรู้มันได้</p>
            </div>
        </div>



        <div style="margin-top: 226px;"></div>
        <div class="text-center">
            <h1 class="text-white text2">แนะนำระบบภายในเว็บไซต์</h1>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-3">
                    <img src="../public/img/icon/Point_right.png">
                </div>
                <div class="col-lg-3">
                    <h1 class="cybertext">Tutorial</h1>
                </div>
                <div class="col-lg-3">
                    <img src="../public/img/icon/Point_left.png">

                </div>
            </div>
        </div>
    </div>

    <img class="fx2 disableimg" src="/../public/img/effect/2.png">


    <!-- Tutorial 1 -->
    <div style="margin-top: 140px;"></div>
    <center>
            <div class="col-lg-8">
                <!-- Link Youtube Tutorial -->
                <div class="ratio ratio-16x9">
                    <!-- ตัวอย่างลิงก์ Youtube ที่เอามาเป็นตัวอย่าง https://www.youtube.com/watch?v=3UV8OZj2olg ให้ Copy แค่ตรงส่วนนี้ "3UV8OZj2olg" เอามาแทนที่ข้างล่าง ไม่ต้องยุ่งกับ "https://www.youtube.com/embed/" -->
                    <iframe style="border-radius: 30px;" src="https://www.youtube.com/embed/3UV8OZj2olg" title="YouTube video"
                        allowfullscreen></iframe>
                </div>

            </div>

    </center>

    <div style="margin-top: 250px;"></div>
    <div class="text-center">
        <h1 class="text2 text-white">อาจารย์ที่ปรึกษาด้านโปรเจ็ค</h1>
        <p class="p">จัดทำขึ้นเพื่อถ่ายทอดความรู้ด้านไซเบอร์<br>
            ให้แก่ผู้ที่มีความสนใจในงานด้านนี้</p>

    </div>
    <div class="text-center">
        <div style="margin-top: 50px;"></div>
        <center>
            <div class="card text-center" style="border-radius: 20px; width: 18rem;">
                <div style="width: 100%; height: 18rem;">
                    <!-- Profile จาร -->
                    <img class="profile-img"
                        src="https://media.discordapp.net/attachments/878242783947784234/978004725209382912/259596135_2087237888097370_8538743087360702304_n.png">
                </div>
                <div>
                    <a style="width: 95%;" class="btn btn-custom btn-glow mt-2">Advisor</a>
                </div>
                <div class="mt-2"></div>
            </div>
        </center>
        <div class="mt-3">
            <h2 style="color: #F0A500;">ทศพล บ้านคลองสี่</h2>
        </div>
        <div class="mt-3 text-white" style="font-size:19px;">
            อาจารย์ที่ปรึกษา <br>
        </div>
    </div>




    <div style="margin-top: 206px;"></div>
    <div class="text-center">
        <h1 class="text2 text-white">ผู้จัดทำเว็บไซต์</h1>
        <p class="p">จัดทำขึ้นเพื่อถ่ายทอดความรู้ด้านไซเบอร์<br>
            ให้แก่ผู้ที่มีความสนใจในงานด้านนี้</p>

    </div>

    <div class="container mt-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <center>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card text-center" style="border-radius: 20px; width: 18rem;">
                            <div style="width: 100%; height: 18rem;">
                                <!-- Profile Aem -->
                                <img class="profile-img" src="https://cdn.discordapp.com/attachments/878242783947784234/977909538294497320/C2A6A1CC-C1BC-4466-94EF-AD9D2F6B9F8D.jpg">
                            </div>
                            <div>
                                <a style="width: 95%;" class="btn btn-custom btn-glow mt-2">UX / UI Designer</a>
                            </div>
                            <div class="mt-2"></div>
                        </div>
                        <div class="mt-3">
                            <h2 style="color: #F0A500;">Aem Supachai</h2>
                        </div>
                        <div class="mt-3 text-white" style="font-size:19px;">
                            เป็นนักศึกษา <b style="color:#F0A500;">Bangkok University</b> <br>
                            ศึกษาอยู่ คณะวิศวกรรมศาสตร์ สาขาไฟฟ้ากำลัง
                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="card text-center" style="border-radius: 20px; width: 18rem;">
                            <div style="width: 100%; height: 18rem;">
                                <!-- Profile Kao -->
                                <img class="profile-img"
                                    src="https://cdn.discordapp.com/attachments/878242783947784234/977907034286608454/unknown.png">
                            </div>
                            <div>
                                <a style="width: 95%;" class="btn btn-custom btn-glow mt-2">Research</a>
                            </div>
                            <div class="mt-2"></div>
                        </div>
                        <div class="mt-3">
                            <h2 style="color: #F0A500;">Kao Possawat</h2>
                        </div>
                        <div class="mt-3 text-white" style="font-size:19px;">
                            เป็นนักศึกษา <b style="color:#F0A500;">Bangkok University</b> <br>
                            ศึกษาอยู่ คณะวิศวกรรมศาสตร์ สาขาไฟฟ้ากำลัง
                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="card text-center" style="border-radius: 20px; width: 18rem;">
                            <div style="width: 100%; height: 18rem;">
                                <!-- Profile Gab -->
                                <img class="profile-img"
                                    src="https://cdn.discordapp.com/attachments/878242783947784234/977907168663719936/unknown.png">

                            </div>
                            <div>
                                <a style="width: 95%;" class="btn btn-custom btn-glow mt-2">Research</a>
                            </div>
                            <div class="mt-2"></div>
                        </div>
                        <div class="mt-3">
                            <h2 style="color: #F0A500;">Gab Chairat</h2>
                        </div>
                        <div class="mt-3 text-white" style="font-size:19px;">
                            เป็นนักศึกษา <b style="color:#F0A500;">Bangkok University</b> <br>
                            ศึกษาอยู่ คณะวิศวกรรมศาสตร์ สาขาไฟฟ้ากำลัง
                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="card text-center" style="border-radius: 20px; width: 18rem;">
                            <div style="width: 100%; height: 18rem;">
                                <!-- Profile Bank -->
                                <img class="profile-img"
                                    src="https://cdn.discordapp.com/attachments/878242783947784234/977907004641263616/IMG_4893.jpg">

                            </div>
                            <div>
                                <a style="width: 95%;" class="btn btn-custom btn-glow mt-2">Back - End Dev</a>
                            </div>
                            <div class="mt-2"></div>
                        </div>
                        <div class="mt-3">
                            <h2 style="color: #F0A500;">Bank Nopparat</h2>
                        </div>
                        <div class="mt-3 text-white" style="font-size:19px;">
                            เป็นนักศึกษา <b style="color:#F0A500;">Bangkok University</b> <br>
                            ศึกษาอยู่ คณะวิศวกรรมศาสตร์ สาขาคอมพิวเตอร์และหุ่นยนต์
                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="card text-center" style="border-radius: 20px; width: 18rem;">
                            <div style="width: 100%; height: 18rem;">
                                <!-- Profile Poom -->
                                <img class="profile-img" src="https://cdn.discordapp.com/attachments/878242783947784234/977907258279219210/unknown.png">

                            </div>
                            <div>
                                <a style="width: 95%;" class="btn btn-custom btn-glow mt-2">Front - End Dev</a>
                            </div>
                            <div class="mt-2"></div>
                        </div>
                        <div class="mt-3">
                            <h2 style="color: #F0A500;">Poom Thanapoom</h2>
                        </div>
                        <div class="mt-3 text-white" style="font-size:19px;">
                            เป็นนักศึกษา <b style="color:#F0A500;">Bangkok University</b> <br>
                            ศึกษาอยู่ คณะวิศวกรรมศาสตร์ สาขาคอมพิวเตอร์และหุ่นยนต์
                        </div>
                    </div>
                </div>

            </center>
            <button class="carousel-control-prev" style="margin-left: 200px;" type="button"
                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <img src="../public/img/icon/back.png" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            </button>
            <button class="carousel-control-next" style="margin-right: 200px;" type="button"
                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <img src="../public/img/icon/next.png">
            </button>
        </div>
    </div>
    

    <?php
    require_once("../totop.php");
    ?>



    <!-- Parallax start -->
    <div class="parallax"></div>
    <!-- Parallax end -->


    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-4">
            <h3><b style="color: black;">Created By HakkaVerse.</b></h3>
            <p style="margin: 1rem;font-size: 18px;">
                เป็นเว็บไซต์ที่สร้างขึ้นมาเพื่อแบ่งปันความรู้ด้านช่องโหว่และด้านความปลอดภัยทางไซเบอร์
                และเป็นโปรเจ็คจบการศึกษาปีที่ 4 ของพวกผมอีกด้วยครับ</p>
        </div>
        <!-- Copyright -->
    </footer>
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