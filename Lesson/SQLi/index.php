<?php require_once dirname(__FILE__)."/../../_system/system.php";
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
            <a href="../../Lesson/" style="width: 250px;" class="btn btn-custom"><i
                    style="margin-right: 10px;" class="fa-solid fa-circle-arrow-left"></i> กลับสู่หน้าหลัก</a>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 text-white">
                <div class="custom-border">
                    <div class="container">
                        <div class="mt-1">
                            <h2 style="color: #F0A500;"><b style="color: #FFFF;">SQL Injection</b></h2>
                        </div>
                        <div class="mt-4">
                            <span class="badge background-gradient"><span class="text-white"
                                    style="font-size: 18px;text-shadow: black 2px 0 5px; font-weight: 900;padding: 5px;">Beginner</span></span>
                        </div>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-book-bookmark" style="padding-right: 9px;"></i> 30
                                แบบฝึกหัด</span>
                            <span style="padding-left: 25px;"><i class="fa-solid fa-star"
                                    style="padding-right: 9px;"></i> 60 คะแนน</span>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-6" style="position: relative; bottom: 120px; right:80px;">
                <a href="../XSS/"><img width="40px" src="../../public/img/icon/back.png"></a>
            </div>
            <div class="col-lg-6 text-end" style="position: relative; bottom: 120px; left:80px;"">
            <a href="../Security/"><img width="40px" src="../../public/img/icon/next.png"></a>
            </div>

            <div class="col-lg-12 text-white">
                <b>SQL Injection</b> เป็นเทคนิคที่ใช้ประโยชน์จากส่งคำสั่ง <b>SQL</b>
                ผ่านทางเว็บแอพพลิเคชันเพื่อไปโจมตีระบบฐานข้อมูลหลังบ้าน โดยอาศัยช่องโหว่ของการใส่ข้อมูล <b>input</b>
                ของผู้ใช้ที่สามารถตรวจสอบรูปแบบการโจมตีได้อย่างจำกัด แฮ็คเกอร์รู้ดีว่านักเขียนโปรแกรมจะนำข้อมูลที่ผู้ใช้
                <b>input</b> ลงไป ไปใช้เป็นส่วนหนึ่งของคำสั่ง <b>SQL</b> เพื่อส่งไปยังระบบ
                ฐานข้อมูล จึงได้แอบฝังคำสั่ง <b>SQL</b> บางอย่างลงไปใน <b>input</b> เหล่านั้นด้วย
                ส่งผลให้แฮ็คเกอร์สามารถดึงข้อมูล หรือเปลี่ยนแปลงแก้ไข ข้อมูลในระบบฐานข้อมูลตามคำสั่ง <b>SQL</b>
                ที่แอบฝังลงไปได้ทันที
            </div>

            <div class="col-lg-12 mt-5 text-white">
                <div class="custom-border">
                    <div class="container">
                        <div class="">
                            <div class="card-header background-gradient" style="border-radius: 10px;">
                                <span style="font-size: 24px;text-shadow: black 2px 2px 2px;">SQL Injection คืออะไร
                                    ?</span>
                            </div>
                        </div>
                        <div class="mt-3" style="position: relative;">














                            <div class="collapse" id="collapseExample">
                                <!-- Content -->
                                <div class="row">
                                    <div class="col-lg-5 mt-4">
                                        <img src="../../public/img/learn3/1.png" width="100%">
                                    </div>
                                    <div class="col-lg-7 mt-5">
                                        <h3 class="mt-3">SQL Injection</h3>
                                        <p class="mt-5"><b>SQL Injection</b> เป็นเทคนิคที่ใช้ประโยชน์จากส่งคำสั่ง SQL
                                            ผ่านทางเว็บแอพพลิเคชันเพื่อไป
                                            โจมตีระบบฐานข้อมูลหลังบ้าน โดยอาศัยช่องโหว่ของการใส่ข้อมูล input
                                            ของผู้ใช้ที่สามารถ
                                            ตรวจสอบรูปแบบการโจมตีได้อย่างจำกัด
                                            แฮ็คเกอร์รู้ดีว่านักเขียนโปรแกรมจะนำข้อมูลที่ผู้ใช้
                                            input ลงไป ไปใช้เป็นส่วนหนึ่งของคำสั่ง SQL เพื่อส่งไปยังระบบฐานข้อมูล
                                            จึงได้แอบฝังคำสั่ง
                                            SQL บางอย่างลงไปใน input เหล่านั้นด้วย
                                            ส่งผลให้แฮ็คเกอร์สามารถดึงข้อมูลหรือเปลี่ยน
                                            แปลงแก้ไขข้อมูลในระบบฐานข้อมูลตามคำสั่ง SQL ที่แอบฝังลงไปได้ทันที
                                            ยกตัวอย่างง่ายๆที่
                                            พบเห็นบ่อยๆ คือ “OR 1=1” ที่นิยมใช้เพื่อบายพาสการพิสูจน์ตัวตน
                                            ปกติแล้วหน้าพิสูจน์ตัวตน
                                            จะมีช่องให้ใส่ชื่อผู้ใช้และรหัสผ่าน
                                            ซึ่งนักเขียนโปรแกรมก็จะนำข้อมูลที่ผู้ใช้กรอกลงไป ไปตรวจ
                                            สอบกับระบบฐานข้อมูลโดยใช้คำสั่ง</p>
                                    </div>
                                </div>


                                <img src="../../public/img/learn3/2.png" width="100%" class="round mt-5">
                                <p class="mt-4">เพื่อเช็คดูว่าในฐานข้อมูลการพิสูจน์ตัวตน ( authen_db )
                                    มีชื่อผู้ใช้และรหัสผ่านตรงตามที่ผู้ใช้กรอกลงไปหรือไม่
                                    ซึ่งเมื่อแฮ็คเกอร์รู้ว่าต้องมีการนำข้อมูลที่ผู้ใช้กรอกลงไป
                                    ( ในที่นี้คือ suthee และ 12345678 ) ส่งไปยังระบบฐานข้อมูลโดยตรง จึงได้แอบฝังคำสั่ง
                                    SQL
                                    ลงไปเพื่อหลีกเลี่ยงการตรวจสอบ คือ การใส่ชื่อผู้ใช้เป็น “admin” และ
                                    รหัสผ่านเป็น “‘ OR ‘1’=‘1” ส่งผลให้คำสั่ง SQL
                                    ที่ใช้ตรวจสอบเพื่อพิสูจน์ตัวตนก็จะกลายเป็น
                                </p>

                                <img src="../../public/img/learn3/3.png" width="100%" class="round mt-3">

                                <p class="mt-4">ผลลัพธ์ที่ได้ คือ แฮ็คเกอร์สามารถลงชื่อเข้าใช้เป็น “admin” ได้ทันที
                                    เนื่องจากด้านหลังมีนิพจน์ OR 1=1 ทำให้คำสั่ง SQL ดังกล่าวเป็นจริงเสมอ
                                    นอกจากการบายพาส
                                    การพิสูจน์ตัวตนแล้ว SQL Injection ยังสามารถดึงข้อมูล, เปลี่ยนแปลงแก้ไข, ลบข้อมูล
                                    หรือทำลายฐานข้อมูลทั้งหมด ขึ้นอยู่กับคำสั่ง SQL ที่แอบฝังลงไปได้เช่นกัน</p>

                                <div class="row mt-4">
                                    <div class="col-lg-6 text-center">
                                        <img src="../../public/img/learn3/4.png" width="100%" class="round mt-3">
                                        <p class="mt-4">การเข้างานแบบปกติ</p>
                                    </div>
                                    <div class="col-lg-6 text-center">
                                        <img src="../../public/img/learn3/5.png" width="100%" class="round mt-3">
                                        <p class="mt-4">การเข้าใช้งานแบบ SQLi</p>
                                    </div>
                                </div>

                                <p class="mt-4">ผู้โจมตีจะต้องค้นหารูปแบบ Input ของผู้ใช้ที่มีช่องโหว่ภายใน Web
                                    Application ก่อน หลังจากนั้นผู้โจมตี จะส่ง Input ที่มีรูปแบบที่ถูกต้องตรงเข้าไปที่
                                    Database โดยไม่ต้องผ่านหน้า Web application ปกติซึ่งถ้าทำได้ ผู้โจมตีจะสามารถส่ง
                                    คำสั่ง SQL ที่เป็นอันตรายจะถูกดำเนินการในฐานข้อมูล</p>
                                <li>ผู้โจมตีสามารถ ปลอมตัวเป็น Admin หรือ User คนอื่นได้</li>
                                <li>ผู้โจมตีจะเข้าถึงข้อมูลทั้งหมดได้อย่างสมบูรณ์</li>
                                <li>สามารถปรับเปลี่ยนตัวเลขทางบัญชีทั้งหมดในระบบ</li>

                                <h3 class="mt-4">ความเชื่อผิดๆเกี่ยวกับ SQL Injection
                                </h3>

                                <p class="mt-4">ทั้งๆที่ปัญหา SQL Injection มีทางออกให้แล้วเป็นเวลามากกว่า 10 ปี
                                    โดยการใช้เว็บแอพพลิเคชันไฟร์วอลล์และการตรวจสอบโค้ดอย่างรอบคอบ อย่างไรก็ตาม
                                    เรายังคงพบว่าการรั่วไหลของข้อมูลส่วนใสญ่ โดยเฉพาะบัตรเครดิต ยังคงเกิดจาก SQL
                                    Injection อยู่ดี เนื่องมาจาก</p>

                                <h3>แหล่งข้อมูลอ้างอิง</h3>

                                <p class="mt-3"><a
                                        href="https://www.techtalkthai.com/fallacy-of-sql-injection/">https://www.techtalkthai.com/fallacy-of-sql-injection/</a>
                                </p>
                                <p><a
                                        href="https://www.savemak.com/blog-post/sql-injection-%E0%B8%84%E0%B8%B7%E0%B8%AD/">https://www.savemak.com/blog-post/sql-injection-%E0%B8%84%E0%B8%B7%E0%B8%AD/</a>
                                </p>
                                <p class="mt-3"><a
                                        href="https://arit.rmutsv.ac.th/th/blogs/80-sql-injection-%E0%B8%84%E0%B8%B7%E0%B8%AD%E0%B8%AD%E0%B8%B0%E0%B9%84%E0%B8%A3-757">https://arit.rmutsv.ac.th/th/blogs/80-sql-injection-%E0%B8%84%E0%B8%B7%E0%B8%AD%E0%B8%AD%E0%B8%B0%
                                        E0%B9%84%E0%B8%A3-757</a></p>



                            </div>
                        </div>

                        <div class="mt-5">
                            <input data-bs-target="#collapseExample" type="button" style="width: 250px;"
                                onclick="readmore(this)" value="อ่านเพิ่มเติม" class="btn-custom-border"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
                        </div>
                    </div>
                </div>
            </div>












            <div class="col-lg-12 mt-5 text-white">
                <div class="custom-border">
                    <div class="container">
                        <div class="">
                            <div class="card-header background-gradient" style="border-radius: 10px;">
                                <span style="font-size: 24px;text-shadow: black 2px 2px 2px;">In-Band SQLi & Blind SQLi ทั้งหมด</span>
                            </div>
                        </div>

                        <div class="mt-3" style="position: relative;">
                            <div class="collapse" id="collapseExample2">
                                <!-- Content -->
                                <img class="mt-4" src="../../public/img/learn3/6.png" width="100%">
                                <h3 class="mt-4">ประเภท ของ SQL Injection</h3>
                                <h4 class="mt-4">1 . In-band SQLi ( Classic )</h4>
                                <p>Hacker ใช้ การสื่อสาร channel เดี่ยวกันในการ Launch เพื่อได้รับผลลัพธ์ โดยประเภทนี้
                                    เป็นแบบเรียบง่ายและมีประสิทธิภาพ เป็นประเภทที่ส่วนมากใช้ในการ
                                    attack ค่ะ ซึ่ง SQLi มี 2 method ย่อย คือ</p>
                                <ul>
                                    <li class="mt-3">Error-based SQLi : Hacker ทำให้เกิด database error message และ
                                        Hacker
                                        สามารถใช้ data ของข้อมูล ภายใต้ข้อบังคับของ error message
                                        เพื่อรับข้อมูลเกี่ยวกับ
                                        Database Structure
                                    </li>
                                    <li class="mt-3">Union-based SQLi : เป็นอีกเทคนิคที่ advantage ของ UNION SQL
                                        operator
                                        ซึ่งรวมคำสั่งการเลือกหลายรายการเข้าด้วยกันสร้างโดย database
                                        เพื่อรับ single HTTP response การตอบกลับ ( response ) อาจมีข้อมูลที่ Hacker
                                        สามารถใช้ประโยชน์ได้</li>

                                </ul>

                                <h4 class="mt-4">2 . Inferential (Blind) SQLi</h4>
                                <p class="mt-4">Hacker ส่งข้อมูล payload ไปยัง server และสังเกตการ response
                                    เพื่อดูพฤติกรรมของ server แล้วเรียก blind SQLi เพราะข้อมูลที่ส่งไปไม่มีการถ่าย
                                    โอนข้อมูลจาก database เลย ดังนั้น Hacker จึงไม่สามารถเห็นข้อมูลเกี่ยวกับการ attack
                                    in-band ได้</p>

                                <p>Blind SQL injection ใช้การ response และดูรูปแบบพฤติกรรมของ server
                                    ดังนั้นโดยทั่วไปแล้ว
                                    server เหล่านี้จะทำงานได้ช้าลง แต่เป็นอันตรายได้ค่ะ
                                    แบ่งได้เป็น</p>

                                <ul>
                                    <li class="mt-3">Boolean : Hacker ส่ง SQL query ไปยัง database อย่างรวดเร็ว เพื่อให้
                                        application ส่งผลลัพธ์กลับมา ผลลัพธ์จะแตกต่างกันไปขึ้นอยู่กับว่า
                                        SQL query เป็น True หรือ False แล้วดูผลลัพธ์ HTTP response
                                        โดยไม่ต้องอาศัยข้อมูลจาก
                                        database</li>
                                    <li class="mt-3">Time-based : Hacker ส่ง SQL query ไปยัง database ซึ่งทำให้ database
                                        รอ
                                        ( เป็นระยะเวลาเป็นวินาที ) ก่อนจึงจะสามารถตอบสนองกลับมาได้
                                        Hacker สามารถเห็นได้จากเวลาที่ database ใช้ในการตอบกลับไม่ว่าคำค้นหาจะเป็น True
                                        หรือ
                                        False ก็ตามผลลัพธ์ HTTP response จะถูกสร้างขึ้นทัน
                                        ทีหรือ หลังจากระยะเวลารอ</li>
                                </ul>

                                <h4 class="mt-4">3 . Out-of-band SQLi</h4>
                                <p class="mt-3">Hacker สามารถทำการโจมตีรูปแบบนี้ได้ก็ต่อเมื่อเปิดใช้งาน features
                                    บางอย่างบน database server ที่ใช้โดย web application เท่านั้น Hacker
                                    รูปแบบนี้ส่วนใหญ่จะใช้เป็น alternative แทน SQLi แบบ in-band และ inferential SQLi</p>

                                <p class="mt-3">Out-of-band SQLi จะทำการเมื่อ Hacker
                                    ไม่สามารถใช้ช่องทางเดียวกันเพื่อเริ่มการโจมตีและรวบรวมข้อมูล เมื่อ Server
                                    ช้าเกินไปและไม่เสถียรสำหรับการ
                                    ทำการนี้ เทคนิคนี้ใช้ความจุของ Server ในการสร้างคำขอ DNS หรือ HTTP
                                    เพื่อส่งข้อมูลไปยัง Hacker</p>

                                <h3 class="mt-5">แหล่งข้อมูลอ้างอิง</h3>
                                <p class="mt-4"><a
                                        href="https://kixoqxq59.medium.com/sqli-sql-injection-%E0%B8%84%E0%B8%B7%E0%B8%AD%E0%B8%AD%E0%B8%B0%E0%B9%84
                                            %E0%B8%A3-%E0%B8%AD%E0%B8%98%E0%B8%B4%E0%B8%9A%E0%B8%B2%E0%B8%A2%E0%B8%8A%E0%B9%88%E0%
                                            B8%AD%E0%B8%87%E0%B9%82%E0%B8%AB%E0%B8%A7%E0%B9%88%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%81
                                            %E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%99-sql-
                                            injection-173113d91cdc">https://kixoqxq59.medium.com/sqli-sql-injection-%E0%B8%84%E0%B8%B7%E0%B8%AD%E0%B8%AD%E0%B8%B0%E0%B9%84
                                        %E0%B8%A3-%E0%B8%AD%E0%B8%98%E0%B8%B4%E0%B8%9A%E0%B8%B2%E0%B8%A2%E0%B8%8A%E0%B9%88%E0%
                                        B8%AD%E0%B8%87%E0%B9%82%E0%B8%AB%E0%B8%A7%E0%B9%88%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%81
                                        %E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%99-sql-
                                        injection-173113d91cdc</a></p>
                                <p class="mt-4"><a
                                        href="https://tryhackme.com/room/sqlinjectionlm">https://tryhackme.com/room/sqlinjectionlm</a>
                                </p>
                            </div>
                        </div>

                        <div class="mt-5">
                            <input data-bs-target="#collapseExample2" type="button" style="width: 250px;"
                                onclick="readmore(this)" value="อ่านเพิ่มเติม" class="btn-custom-border"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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