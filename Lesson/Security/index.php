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
                            <h2 style="color: #F0A500;"><b style="color: #FFFF;">Web Security</b></h2>
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
    <a href="../SQLi/"><img width="40px" src="../../public/img/icon/back.png"></a>
</div>
<div class="col-lg-6 text-end" style="position: relative; bottom: 120px; left:80px;"">
<a href="../XSS/"><img width="40px" src="../../public/img/icon/next.png"></a>
</div>
            <div class="col-lg-12 text-white">
                สวัสดีนะครับทุกท่าน ขอแนะนำตัวก่อนผมชื่อ <b>เอ็ม</b> ครับเป็นคนที่ดูแลเนื้อหาในส่วนของบทนี้ครับหรือก็คือ
                Web
                <b>Security</b>
                โดยข้อมูลภายในบทนี้จะมีเนื้อหาที่ค่อนข้างเยอะพอสมควรเลย
                แต่ผมได้ทำการนำมาสรุปแบบให้เข้าใจได้ง่ายและกระชับยิ่งขึ้น
                ให้พูดง่ายๆก็คือสอนตามความเข้าใจของผมนั้นและครับ 5555 ซึ่งเนื้อหาที่นำมาสอนก็มาจากบทเรียนจากหลายๆ
                คอร์สที่ผมได้ไปเสียตังเรียนมาโดยผมอยากจะนำมันมาแบ่งปันให้กับคนที่ต้องการเรียนรู้ด้าน <b>Security</b>
                ครับผม
                เพื่อไม่ให้เป็นการเสียเวลาเชิญเข้าไปศึกษาเนื้อหาภายในและทำแบบทดสอบ
                กันได้เลยครับผม <b>^ ^</b>
            </div>

            <div class="col-lg-12 mt-5 text-white">
                <div class="custom-border">
                    <div class="container">
                        <div class="">
                            <div class="card-header background-gradient" style="border-radius: 10px;">
                                <span style="font-size: 24px;text-shadow: black 2px 2px 2px;">เนื้อหา Injection</span>
                            </div>
                        </div>
                        <div class="mt-3" style="position: relative;">

                            <div class="collapse" id="collapseExample">

                                <!-- Content -->
                                <img class="mt-4" src="../../public/img/learn2/1.png" width="100%">

                                <p class="mt-4">Injection เป็นหนึ่งในช่องโหว่ที่ถูกพบมากที่สุดบนเว็บเบราว์เซอร์
                                    และการโจมตีของมันส่งผลรุนแรงมากต่อเว็บไซต์ที่โดนและที่สำคัญเลยก็คือ ความสามารถ
                                    ในการใช้
                                    ประโยชน์จาก SQL Injection มันทำได้ง่ายมากครับเพียงแค่ขึ้นวาง URL เอาไว้แล้วปล่อยให้
                                    User
                                    ที่ไม่รู้เรื่องเข้ามาใช้งานเพียงเท่านี้ก็สามารถดึงข้อมูล
                                    เหล่านั้นมา
                                    ได้อย่างง่ายดาย และอย่างแย่ที่สุดคือข้อมูลเหล่านั้นจะถูกนำไปเผยแพร่ต่อสาธารณะหรือ
                                    อีกกรณีเลยก็คือถูกนำข้อมูลไปเพื่อแก้ไขหรือทำลาย เป็นต้น</p>


                                <p>เอาละผมว่าตอนนี้เราก็น่าจะมีความรู้ในระดับนึงแล้วว่า Injection
                                    คืออะไรทำงานยังไงและส่งต่อเว็บเบราว์เซอร์ยังไงเดี๋ยวจะมายก
                                    ตัวอย่างแบบให้เห็นภาพมากขึ้น
                                    ดีกว่า</p>

                                <h3 class="mt-4">SQL in Web Pages</h3>
                                <p class="mt-4">จำที่ผมบอกได้ไหมครับว่า SQL Injection จะเกิดขึ้นได้เมื่อ User
                                    มีการใส่ในส่วนของข้อมูลตัวเองลงไป เช่น ข่อมูลที่เป็น ไอดีผู้ใช้ , รหัสผ่านผู้ใช้
                                    ลงไปและทำการ
                                    ดึงในส่วนของข้อมูลนั้นมาใช้</p>

                                <p>ตัวอย่าง ต่อไปนี้จะเป็นการสร้างคำสั่ง SELECT โดยที่จะทำการเพิ่มในส่วนของตัวแปล (
                                    txtUserId ) ให้กับ String. ที่เลือก ซึ่งจะให้ตัวแปรถูกดึงออกมาจาก
                                    ตัว Input ของผู้ใช้ ( getRequestString ):</p>

                                <div class="mt-4">
                                    <img src="../../public/img/learn2/2.png" class="round" width="100%">
                                </div>

                                <p class="mt-4">ต่อไปจะเป็นการยกตัวอย่างและอธิบายเกี่ยวกับอันตรายที่จะเกิดขึ้นจากการ
                                    Input
                                    ของผู้ที่ใช้คำสั่งของ SQL</p>

                                <h3 class="mt-4">SQL Injection Based on 1=1 is Always True</h3>

                                <p class="mt-4">ดูตัวอย่าง จากด้านบนนะครับ เพราะว่าจุดประสงค์เดิมของเราคือการสร้างคำสั่ง
                                    SQL
                                    เพื่อเลือกผู้ใช้ด้วยรหัสที่ผู้ใช้กำหนดมา</p>

                                <div class="mt-4">
                                    <span><b>UserID: </b><input class="rounded bg-dark text-white border border-warning"
                                            style="padding-left: 15px;" disabled value="105 OR 1=1"></span>
                                </div>

                                <p class="mt-4">จากนั้นเราจะเห็นได้ว่าคำสั่งของ SQL จะเป็นดังนี้</p>

                                <div class="mt-4">
                                    <img src="../../public/img/learn2/3.png" class="round" width="100%">
                                </div>

                                <p class="mt-4">จากรูปด้านบนจะเห็นว่านี้คือคำสั่งที่ถูกต้อง และข้อมูลจะส่งคืนแถวจาก
                                    ตาราง "
                                    Users " table, since OR 1=1 is always TRUE.</p>
                                <p class="mt-4">เป็นยังไงบ้างครับจาก
                                    ตัวอย่างข้างต้นที่ได้เห็นกันไปทุกคนคิดว่ามันมีความอันตรายบ้างหรือป่าว ?</p>
                                <p class="mt-4">ลองคิดเล่นๆดูนะครับว่าถ้าเกิด ตารางของ User มันกลายเป็น ชื่อผู้ใช้ ,
                                    รหัสผ่าน หรือแม้กระทั้งประวัติต่างๆ มันจะน่ากลัวขนาดไหน ^ ^ </p>

                                <div class="mt-4">
                                    <img src="../../public/img/learn2/4.png" class="round" width="100%">
                                </div>

                                <p class="mt-4">จากคำสั่งข้างต้น Hacker อาจจะเข้าถึงในส่วนของ
                                    ข้อมูลและรหัสของผู้ใช้ได้อย่างง่ายดายจากฐานข้อมูลเหล่านี้ เพียงแค่ใส่คำสั่ง 105 OR
                                    1=1
                                    ลงไปในช่องที่ป้อนข้อมูลนั้นเองครับ </p>

                                <p>เอาอีกสักตัวอย่างละกันผมแถมให้ๆ 5555</p>

                                <h3 class="mt-4">SQL Injection Based on ""="" is Always True</h3>

                                <p class="mt-4">ต่อไปนะครับผมจะมายกตัวอย่างการเข้าสู่ระบบของ User กันครับ</p>

                                <div class="mt-4">
                                    <span><b>Username </b><br>
                                        <input class="mt-3 rounded bg-dark text-white border border-warning"
                                            style="padding-left: 15px;" disabled value="Kao Possawat"></span>
                                </div>
                                <div class="mt-3">
                                    <span><b>Password </b><br>
                                        <input class="mt-3 rounded bg-dark text-white border border-warning"
                                            style="padding-left: 15px;" disabled value="MyPass"></span>
                                </div>

                                <div class="mt-4">
                                    <img src="../../public/img/learn2/5.png" class="round" width="100%">
                                </div>

                                <div class="mt-4">
                                    <img src="../../public/img/learn2/6.png" class="round" width="100%">
                                </div>

                                <p class="mt-4">ต่อไปจะเป็นในส่วนของคำสั่ง " OR ""=" ซึ่ง Hacker
                                    สามารถดึงข้อมูลผู้ใช้หรือรหัสผ่านออกมาจากฐานข้อมูลได้เพียงแค่แทรกคำสั่งลงไปใน Input
                                    ต่างๆของ
                                    ผู้ใช้ </p>


                                <div class="mt-4">
                                    <span><b>Username </b><br>
                                        <input class="mt-3 rounded bg-dark text-white border border-warning"
                                            style="padding-left: 15px;" disabled value='" or ""="'></span>
                                </div>
                                <div class="mt-3">
                                    <span><b>Password </b><br>
                                        <input class="mt-3 rounded bg-dark text-white border border-warning"
                                            style="padding-left: 15px;" disabled value='" or ""="'></span>
                                </div>

                                <div class="mt-4">
                                    <img src="../../public/img/learn2/7.png" class="round" width="100%">
                                </div>


                                <p class="mt-4">จากคำสั่ง SQL ด้านบนเราจะเห็นได้ว่ามีการส่งคืนแถวจากตาราง "Users" table,
                                    since OR ""="" is always TRUE.</p>

                                <h3>SQLI prevention and mitigation</h3>
                                <p class="mt-4">
                                    เนื้อหาส่วนนี้จะเป็นในส่วนของการป้องกันยังไงให้มีประสิทธิภาพมากที่สุดจากการโดน SQLi
                                </p>

                                <p>ขั้นตอนแรกเลยนะครับที่ผมอยากจะมาแนะนำให้รู้กันก็คือ
                                    การที่เราต้องตรวจสอบความถูกต้องของ
                                    Input (a.k.a. sanitization) ซึ่งมันจะเป็นในแนวของการ
                                    เขียน Code ที่ทำให้สามารถระบุได้ว่า Input ของผู้ใช้มีอะไรผิดปกติหรือไม่ </p>

                                <p>และด้วยเหตุผลหลายๆประการ เราจึงมักจะใช้ในส่วนของ Web Application Firewall (WAF)
                                    เพื่อกรอง
                                    SQLi และยังรวมไปถึงภัยคุกคามต่างๆที่จะโจมตี
                                    เว็บไซต์ของเราได้ โดยในปัจจุบัน Web Application Firewall (WAF)
                                    สมัยใหม่มักจะถูกนำไปรวมเข้ากับตัว Security Solutions อื่นๆ โดยสิ่งเหล่านี้
                                    มันสามารถช่วยทำให้เรารับข้อมูลเพิ่มเติม
                                    ที่จะช่วยเพิ่มความสามารถในด้านของการรักษาความปลอดภัยได้</p>

                                <p>ตัวอย่างเช่น เมื่อ Web Application Firewall (WAF) พบกับตัว Input
                                    ที่น่าสงสัยแต่ว่ามันดันไม่ใช่ Input ที่มีความอันตรายอะไรมาก การทำงานของมันจะเป็น
                                    การตรวจสอบข้อมูลของ IP ก่อนที่ระบบจะทำการตัดสินใจบล็อกคำขอที่ถูกส่งมานั้นเองครับ
                                </p>

                                <h3 class="mt-4">แหล่งข้อมูลอ้างอิง</h3>
                                <p class="mt-4">
                                    <a
                                        href="https://www.w3schools.com/sql/sql_injection.asp">https://www.w3schools.com/sql/sql_injection.asp</a>
                                </p>
                                <p class="mt-4">
                                    <a
                                        href="https://www.imperva.com/learn/application-security/sql-injection-sqli/">https://www.imperva.com/learn/application-security/sql-injection-sqli/</a>

                                </p>
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
                                <span style="font-size: 24px;text-shadow: black 2px 2px 2px;">เนื้อหา Cross Site
                                    Scripting</span>
                            </div>
                        </div>

                        <div class="mt-3" style="position: relative;">
                            <div class="collapse" id="collapseExample2">
                                <!-- Content -->
                                <img class="mt-4" src="../../public/img/learn2/8.png" width="100%">
                                <p class="mt-5">สวัสดีครับทุกท่าน ต่อไปจะเป็นในส่วนของเนื้อหาเกี่ยวกับ Cross - Site
                                    Scripting เดี๋ยวมาเริ่มกันเลยดีกว่า</p>
                                <p>Cross - Site Scripting ( XSS ) เป็นการโจมตีในรูปแบบเดียวกับ Injection โดยจะมีการใช้
                                    &lt;Script> โจมตีเข้าใส่ภายในเว็บไซต์
                                    สำหรับการโจมตีของ XSS
                                    นะครับจะเกิดขึ้นได้จากการที่ Hacker ทำการส่งตัว Code ที่เป็นอันตรายต่อเว็บไซต์เข้ามา
                                    ซึ่งโดยทั่วไป
                                    ทั่วไปแล้วจะอยู่ในรูปแบบของการส่งตัว &lt;Script> เข้าไป
                                    ฝั่งไว้ในตัวของ Browser และไปยัง User ที่อยู่ปลายทางรายอื่นนั้นเอง</p>
                                <p>โดยในหลายๆเว็บไซต์ที่ผมไปลองเล่นมา
                                    มันทำให้ผมเห็นว่าในหลายเว็บไซต์ที่เจอมามักจะมีข้อบกพร่องคล้ายๆกันเยอะมากนั้น คือ
                                    Input หลายๆตัวนั้นไม่ได้รับ
                                    การตรวจสอบหรือสร้างขึ้นมาโดยไม่ตรวจสอบแต่แรก รวมไปถึงไม่มีการเข้ารหัสอีกด้วยครับ
                                </p>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <img width="100%" src="../../public/img/learn2/9.png">
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mt-4">หัวข้อต่อไปที่เราจะมีพูดกันนะครับ
                                            “Isn’t Cross-site Scripting the User’s Problem ?”</p>

                                        <p class="mt-4">ถ้าเกิดว่า Hacker สามารถใช้ช่องโหว่ XSS
                                            บนหน้าเว็บไซต์ของเราเพื่อเรียก
                                            JavaScript ใน Browser ของผู้ใช้ได้ เท่ากับว่า
                                            ความปลอดภัยของเว็บไซต์ที่มี
                                            ช่องโหว่หรือ Web Application ที่มีช่องโหว่ของผู้ใช้จะถูกบุกรุกไปด้วยนั้นเอง
                                        </p>

                                        <p class="mt-4">Cross - Site Scripting
                                            อาจจะใช้เพื่อทำลายเว็บไซต์แทนที่เราจะกำหนเป็น
                                            เป้าหมายรายบุคคลได้ โดยผู้โจมตีสามารถใช้ Script
                                            ฝั่งเข้าไปเพื่อเปลี่ยนเนื้อหา
                                            ภายในเว็บไซต์ของเรา หรือแม้กระทั่งการเปลี่ยน การเชื่อมโยงภายในเว็บไซต์ให้
                                            ไปโผล่ที่หน้าเว็บไซต์อื่น
                                            ยกตัวอย่างเช่น หน้าที่มี Code ที่เป็นอันตรายต่ผู้ใช้</p>
                                    </div>
                                </div>


                                <h5 class="mt-5">เหล่า <b>Hacker</b> สามารถใช้ <b>JavaScript</b> ทำอะไรได้บ้าง ?</h5>

                                <p class="mt-4">โดยส่วนมากแล้วนะครับ ช่องโหว่ XSS
                                    เนี่ยมักจะถูกมองว่ามีความอันตรายที่น้อยกว่า SQL
                                    Injectionเนื้อด้วยผลกระทบในช่วงแรกของ
                                    การ Run Script
                                    นั้นดูไม่ค่อยจะรุนแรงสักเท่าไหร่ เพราะด้วยความที่ตัวของ JavaScript
                                    มีการจำกัดข้อมูลที่เข้าถึงระบบปฏิบัติการของ
                                    ผู้ใช้และไฟล์ของผู้ใช้อีกด้วย แต่ไม่ว่ายังไงก็
                                    ตามถ้าเกิดเรานำมันไปใช้ในทางที่ผิดมันก็ยังคงสร้างความอันตรายได้อยู่ดี</p>

                                <p class="mt-4">เจ้าตัว Script
                                    เนี่ยสามารถสร้างความอันตรายได้หลายอย่างภายในเว็บไซต์เราเลยนะครับ
                                    ซึ่งผมจะขอยกตัวอย่างเช่น Cookie นั้นเอง
                                    ( บางคนอาจจะเคยเห็นมาแล้วจากเข้าเว็บไซต์ต่างๆแล้วมี ในส่วนของ Cookie ขึ้นมา )
                                    โดยเจ้าตัว
                                    Cookie มักจะถูกใช้ในการเก็บ
                                    รวบรวม Token ของ
                                    เซลซันเอาไว้ ซึ่งถ้าเกิด Hacker สามารถโจมตีและเอา Cookie ของผู้ใช้ไปได้
                                    คนเหล่านั้นก็จะนำมันไปใช้ใน
                                    การแอบอ้างตัวตนเพื่อเข้าสู่ระบบต่างๆได้และเข้าถึง
                                    ข้อมูลที่ค่อนข้างละเอียดอ่อนได้ด้วย</p>

                                <p class="mt-4">ตัวของ Script นั้นสามารถที่จะอ่าน DOM ของ Browser
                                    ได้และทำการปรับเปลี่ยนสิ่งต่างๆได้จามอำเภอใจ แต่ถึงอย่างนั้นก็ยังมีโชคดี
                                    อยู่บ้างเหมือนกันครับ
                                    นั้นก็คือมันจะเกิดขึ้นได้ก็ต่อเมื่ออยู่ในหน้าที่เรียกใช้ JavaScript เท่านั้น
                                    ในตัวของ
                                    JavaScript จะมี Option ที่เรียกว่า XMLHttpRequest เจ้าตัวนี้ใช้เพื่อ
                                    ส่งคำขอ HTTP พร้อมกับเนื้อหาที่เรากำหนดไปยังปลายทางใดก็ได้
                                </p>

                                <p class="mt-4">JavaScript สมัยใหม่สามารถที่จะใช้ HTML5 API ได้ ตัวอย่างเช่น
                                    สามารถที่จะเข้าถึง WebCam , Microphone หรือแม้กระทั้ง
                                    ไฟล์เฉพาะจากระบบไฟล์
                                    ของผู้ใช้ API เหล่านี้ส่วนใหญ่ต้องการให้ผู้ใช้เลือกใช้ แต่ผู้โจมตีสามารถใช้ Social
                                    Engineer เพื่อข้ามขีด
                                    จำกัดนั้นได้
                                </p>

                                <p class="mt-4">การโจมตีของ Cross - Site Scripting จะมีด้วยกันหลายประเภทด้วยกัน ได้แก่
                                    Stored/Persistent XSS , reflected/non-persistent XSS
                                    และ DOM-based XSS โดยเนื้อหาของ 3 ตัวนี้สามารถหาอ่านได้ตามอินเตอร์เน็ตเลยครับ
                                    เพราะมีเยอะมากกกก ( ถึงจะเขียนเหมือนๆกันก็เถอะครับ 555 )</p>


                                <div class="row">
                                    <div class="col-lg-7 mt-5">
                                        ต่อไปเราจะมาดูเรื่องของ
                                        <h5 class="">วิธีการทำงานของ <b>Cross - Site Scripting</b></h5>
                                        <span class="mt-5">โดยผมจะมาแนะนำวิธีการทั้งหมด 2 ประเภทด้วยกัน</span>
                                        <li class="mt-4">วิธีแรกที่เราจะทำกันก็คือ เราจะต้องหาวิธีใส่ Script
                                            ที่เป็นอันตราย
                                            <br>
                                            ( payload ) ลงไปในหน้าเว็บไซต์ของเหยื่อที่มาเข้าชมเว็บไซต์
                                        </li>
                                        <li class="mt-4">วิธีที่สองก็คิอ หลังจากที่ User เข้าสู้เว็บไซต์ที่เราทำการฝั่ง
                                            Script <br>
                                            เอาไว้แล้วเราจะทำการส่ง URL ไปยังเหยื่อรายนั้น นั่นเองครับโดยที่เรา<br>
                                            สามารถพุ่งเป้าไปที่เป้าหมายแบบ
                                            รายบุคคลได้ด้วย</li>
                                    </div>
                                    <div class="col-lg-5">
                                        <img width="100%" src="../../public/img/learn2/10.png">
                                    </div>
                                </div>

                                <p class="mt-4">และเพื่อที่จะให้วิธีที่กล่าวไปนั้นสำเร็จ
                                    เว็บไซต์ที่มีช่องโหว่นั้นจำเป็นต้องมีการใส่ข้อมูลของผู้ใช้ลงไปใน Input โดยตรง
                                    จากนั้น
                                    Hacker ถึงจะสามารถทำการแทรก
                                    String.
                                    ที่เป็นอันตรายที่เราจะใช้ภายใน เว็บไซต์นั้น นอกจากวิธีนี้แล้วยังมีอีกวิธีก็คือ
                                    ล่อให้
                                    User ไปที่ URL แล้วทำการกดที่ลิ้งนั้นเป็นต้น
                                    ( เผื่อยังไงเข้าใจ ผมจะยกตัวอย่างที่เจอบ่อยๆให้เห็น นั้นก็คือลิ้งโหลดเกมเถื่อนครับ
                                    555 )
                                </p>
                                <p>หลังจากนี้ไปเนื้อหาจะค่อนข้างยากขึ้นนะครับสำหรับคนที่พึ่งเริ่มเรียนรู้และไม่ได้เก่ง
                                    Code
                                    เท่าไหร่ มาเดี๋ยวมาเรียนไปพร้อมกันครับ</p>
                                <p>ต่อไปจะเป็น ข้อมูลโค้ดที่ใช้จำลองในการฝั่งเข้าไปใน Server
                                    ที่ใช้ในการแสดงความคิดเห็นล่าสุดบ่นเว็บไซต์ ( อย่าเอาไปลองนอกเว็บละเดี๋ยว รมต. มาหา
                                    )
                                </p>

                                <img class="mt-4 round" width="100%" src="../../public/img/learn2/11.png">

                                <p class="mt-4">จาก Script
                                    ด้านบนที่เห็นเป็นการใช้ความึดเห็นล่าสุดจากฐานข้อมูลและทำการรวมไว้ที่หน้าของ HTML
                                    ยกตัวอย่างเช่น ถ้าเกิดมีการแสดงความคิดเห็นที่เป็นใน
                                    รูปแบบของตัว
                                    อักษรเท่านั้น และไม่มี Tag HTML หรือ โค้ดตัวอื่นอยู่เลย
                                    ก็จะทำให้มีความเสี่ยงที่จะโดน
                                    XSS ได้เนื่องจาก Hacker สามารถส่งความคิดเห็นที่มี
                                    Payload ที่เป็นอันตรายมาได้ เช่น
                                </p>

                                <img class="mt-4 round" width="100%" src="../../public/img/learn2/12.png">

                                <p class="mt-4">ส่วนนี้จะเป็นการส่ง HTML ให้กับผู้ใช้ที่เข้ามาใช้งานในเว็บเพจนั้น</p>

                                <img class="mt-4 round" width="100%" src="../../public/img/learn2/13.png">

                                <p class="mt-4">เมื่อ User เข้ามาภายในหน้าเว็บโหลดตัว Script ของ Hacker
                                    ที่ฝั่งเอาไว้ก็จะทำงานและด้วยความที่มันเป็นแบบนี้
                                    เลยทำให้ผู้ใช้หลายไม่รู้ตัวเลยด้วยซ้ำว่าถูกโจมตี
                                    ถูกขโมยข้อมูลไปแล้ว
                                    และไม่สามารถป้องกันได้อีกด้วย ( โครตอันตราย )
                                </p>

                                <p class="mt-4">มาๆไปกันไวๆ เดี๋ยวต่อด้วยหัวข้อถัดไปกันดีกว่านั้นก็คือ</p>

                                <h4>Stealing Cookies Using XSS หรือก็คือ การใช้ XSS ในการขโมย Cookie</h4>

                                <p class="mt-4">เหล่า Hacker มักใช้ XSS เพื่อที่จะขโมย Cookie ของเรา
                                    ซึ่งมันช่วยทำให้พวกเขาสามารถแอบอ้างเป็นตัวตนของเราได้ เพราะว่า Hacker สามารถส่ง
                                    Cookie
                                    ไปยัง Server ของตัวเองได้หลายวิธีมากๆ
                                    และหนึ่งในนั้นคือการ client-side script ต่อไปนี้ลงไปใน Browser ของเหยื่อ
                                </p>

                                <img class="mt-4 round" width="100%" src="../../public/img/learn2/14.png">


                                <p class="mt-4">เหล่า Hacker มักใช้ XSS เพื่อที่จะขโมย Cookie ของเรา
                                    ซึ่งมันช่วยทำให้พวกเขาสามารถแอบอ้างเป็นตัวตนของเราได้ เพราะว่า Hacker สามารถส่ง
                                    Cookie
                                    ไปยัง Server ของตัวเองได้หลายวิธีมากๆ
                                    และหนึ่งในนั้นคือการ client-side script ต่อไปนี้ลงไปใน Browser ของเหยื่อ
                                </p>

                                <p class="mt-4">ส่วนรูปด้านล่างนี้เป็นรูปแบบการโจมตี XSS แบบง่ายๆนะครับ</p>

                                <img class="mt-4 round" width="100%" src="../../public/img/learn2/15.png">

                                <p class="mt-4">ขั้นตอนการทำงานก็คือ</p>

                                <li class="mt-4">Hacker จะทำการใส่ข้อมูลลงไปใน Database
                                    ของเว็บไซต์โดยการส่งแบบฟอร์ที่มีช่องโหว่พร้อม Script ที่เป็นอันตราย
                                </li>
                                <li class="mt-4">User จะทำการ requests หน้าเว็บไวต์จากหน้า Web Server</li>
                                <li class="mt-4">Web Browser ของผู้ใช้ทำการ Run Script ที่เป็นอันตรายที่ถูกเขียนไว้ใน
                                    HTML ซึ่งในกรณีนี้ จะเป็นการส่งคุกกี้ของเหยื่อไปยัง Server ของ Hacker</li>
                                <li class="mt-4">Hacker จะทำการดึง Cookie ของเหยื่อเมื่อมีการส่งคำขอ HTTP มาถึง Server
                                    ของ Hacker</li>
                                <li class="mt-4">และต่อไปก็คือ Hacker
                                    จะสามารถใช้คุกกี้ที่ขโมยมาจากเราเพื่อนำไปใช้แอบอ้างในการทำธุรกรรมต่างๆได้</li>
                                <p class="mt-4">มาต่อกันที่หัวข้อต่อไปดีกว่าใกล้จะหมดละอีกนิด ( นิดมั้งนะ 5555 )</p>
                                <h4>Cross-site Scripting Attack Vectors</h4>
                                <p class="mt-4">เดี๋ยวเริ่มมาที่ตัวแรกกันเลยนั้นคือ</p>
                                <h4>&lt;script> tag</h4>

                                <p class="mt-4">เจ้าตัว &lt;script>tag สามารถใช้เพื่อทำอ้างอิง Code JavaScript ภายนอกได้
                                    หรือแม้แต่ฝั่ง Code ภายใน &lt;script></p>
                                <img class="mt-4 round" width="100%" src="../../public/img/learn2/16.png">

                                <h4 class="mt-4">JavaScript Events</h4>
                                <p class="mt-3">Onload และ Onerror สามารถใช้ใน Tag ต่างๆได้ และยังเป็น XSS attack vector
                                    ที่ได้รับความนิยมอย่างมากอีกด้วย</p>
                                <img class="mt-3 round" width="100%" src="../../public/img/learn2/17.png">

                                <h4 class="mt-4">&lt;body> tag</h4>
                                <p class="mt-3">XSS payload สามารถส่ง &lt;body> ได้โดยการใช้ attributes (
                                    จากตัวอย่างด้านบน ) หรือจะเป็น attributes ตัวอื่นๆ เช่น background attribute
                                    ( อาจจะงงๆกับการพิมพ์ของผมหน่อยนะครับแต่เดี๋ยวจะอธิบายแบบละเอียดอีกทีนึง )</p>
                                <img class="mt-3 round" width="100%" src="../../public/img/learn2/18.png">

                                <h4 class="mt-4">&lt;img> tag</h4>
                                <p class="mt-3">ตัวนนี้จะเป็นตัวที่ Browser จะทำการ Run Javascript ที่พบอยู่ใน &lt;img>
                                    attributes </p>
                                <img class="mt-3 round" width="100%" src="../../public/img/learn2/19.png">

                                <h4 class="mt-4">&lt;iframe> tag</h4>
                                <p class="mt-3">&lt;iframe>tag ( ถ้าใครอยากรู้ว่าคืออะไรสามารถหาดูได้ที่ W3school
                                    ได้เลยครับมีทุก tag ที่ผมนำมาพูดทั้งหมดเลย ) โดยเจ้าตัว IFrame จะมีการใช้
                                    JavaScript แต่ว่าไอ้ตัว JavaScript ใน IFrame
                                    เนี่ยมีข้อเสียอยู่อย่างนึงนั้นคือมันไม่สามารถเข้าถึง DOM ของหน้าหลักได้ครับ
                                    เพราะว่าติด ( CSP ) หรือก็คือ
                                    นโยบาลการรักษาความปลอดภัยนั้นเอง แต่อย่างไรก็ตามนะครับ
                                    มันก็ยังมีความอันตรายอย่างมากในการโจมตีแบบ phishing attacks</p>
                                <img class="mt-3 round" width="100%" src="../../public/img/learn2/20.png">

                                <h4 class="mt-4">&lt;input> tag</h4>
                                <p class="mt-3">ใน Web Browser บางเว็บนั้น จะมีการ attribute ของตัว &lt;input> tag
                                    ที่จะเป็นการตั้งค่าไว้ในรูปแบบของรูปภาพ ซึ่งสามารถทำการฝั่ง Script ได้ครับ</p>
                                <img class="mt-3 round" width="100%" src="../../public/img/learn2/21.png">

                                <h4 class="mt-4">&lt;link> tag</h4>
                                <p class="mt-3">&lt;link> tag อันตรายเหมือนกันนะครับตัวนี้ เพราะว่ามักจะมาในรูปแบบของ
                                    link ต่างๆเพื่อหลอกล่อให้เหยื่อกดเข้าไป และข้างในนั้นก็มี script ของ Hacker
                                    อยู่ด้วย</p>
                                <img class="mt-3 round" width="100%" src="../../public/img/learn2/22.png">

                                <h4 class="mt-4">&lt;table> tag</h4>
                                <p class="mt-3">background attribute ของตัว &lt;table> และ &lt;td> ทั้ง 2 tag
                                    นี้สามารถนำมาใช้อ้างอิง Script แทนรูปภาพได้ครับ
                                </p>
                                <img class="mt-3 round" width="100%" src="../../public/img/learn2/23.png">

                                <h4 class="mt-4">&lt;div> tag</h4>
                                <p class="mt-3">&lt;div> tag ก็จะเหมือนกับ tag 2 ตัวด้านบนนั้นและครับ
                                    แต่ว่ามันจะสามารถระบุพื้นหลังและฝั่ง script ได้</p>
                                <img class="mt-3 round" width="100%" src="../../public/img/learn2/24.png">

                                <h4 class="mt-4">&lt;object> tag</h4>
                                <p class="mt-3">&lt;object> tag ตัวนี้จะเอาไว้ใช้ในการรวม Script ครับ</p>
                                <img class="mt-3 round" width="100%" src="../../public/img/learn2/25.png">

                                <p class="mt-4">ใกล้แล้วครับ ใกล้จะหมดแล้ว 55555 ต่อไปเราจะมาเข้าสู่หัวข้อของ</p>
                                <h4>เว็บไซต์ของเรามีช่องโหว่ในการที่จะให้ Hacker มาฝั่ง Script หรือไม่ ?</h4>

                                <p class="mt-4">ก่อนอื่นต้องบอกเลยครับว่าเราโชคดีมากๆ เพราะที่มี Acunetix
                                    ซึ่งเป็นตัวช่วยเราในการสแกนหาช่องโหว่ XSS ได้
                                    มันเลยทำให้เราสามารถรู้ได้ว่าเว็บไซต์เรา
                                    เนี่ยมีช่องโหว่หรือไม่ ส่วนใครที่อยากรู้เกี่ยวกับ Acunetix
                                    มากกว่านี้เดี๋ยวผมจะแปะเว็บไซต์ที่ให้ข้อมูลเอาไว้นะครับลองไปศึกษากันดูเพราะ
                                    รายละเอียดของเรื่อง
                                    พวกนี้มันมีเยอะมาก</p>

                                <p class="mt-4">ในที่สุดดดดดดดด ก็มาถึงเนื้อหาส่วนสุดท้ายกันแล้ววว ตาแห้งกันแล้วสิท่า
                                    5555 หัวข้อสุดท้ายที่ผมจะเอามาพูดถึงก็คือ</p>
                                <h4>วิธีการป้องกัน Cross - Site Script นั้นเองงงงง</h4>

                                <p class="mt-4">บอกก่อนเลยครับว่าถึงเราจะมีอุปกรณ์ที่ช่วยเราในการสแกนหาช่องโหว่
                                    แต่มันก็ยังเป็นเรื่องยากอยู่ดีที่เราจะป้องกัน XSS ได้ เพราะว่าอย่างที่เรารู้กัน คือ
                                    XSS
                                    เนี่ยมันมีตัวแยกย่อยออกไปอีกตั้ง 3 รูปแบบ หรือแม้กระทั้งการใช้ Input
                                    ของผู้ใช้ที่ไม่เหมือนกันแล้วก็ยังมีเรื่องที่มันเกี่ยวกับ programming framework
                                    อีกตะหากก
                                    แต่มันก็ยังมีวิธีที่หลายประเทศเขาใช้กันอยู่เพื่อที่จะทำให้เว็บไซต์ตัวเองปลอดภัย</p>

                                <p class="mt-4">มาเริ่มเลยดีกว่าาา</p>


                                <img class="mt-3 round" width="100%" src="../../public/img/learn2/26.png">
                                <img class="mt-3 round" width="100%" src="../../public/img/learn2/27.png">
                                <img class="mt-3 round" width="100%" src="../../public/img/learn2/28.png">

                                <p class="mt-4">เย้ๆๆๆๆๆ ในที่สุดก็จบครบถ้วนแล้วนะครับสำหรับเนื้อในส่วนของว Cross - Site
                                    Script ในบทของ Web Security เหนื่อยกันแย่เลยเพราะ ตัวหนังสือเยอะ
                                    มากครับ แต่ก็เป็นเรื่องที่เรียงไม่ได้จริง เพราะว่า เนื้อหาพวกนี้ค่อนข้างลึกพอสมควร
                                    ถ้าใช้ภาพเล่า เดี๋ยวจะงงกว่าเดิม 55555 ผมหวังว่าาเนื้อหาส่วนนี้จะมี
                                    ประโยชน์แก่ทุกคนไม่มากก็น้อยนะครับ
                                    โดยส่วนตัวค่อนข้างตั้งใจทำเลยต้องนั้นอ่านนั้นดูทั้งวันกว่าจะเข้าใจละเอามา
                                    แบ่งปันให้คนที่สนใจได้รู้กัน 5555</p>

                                <p class="mt-4">โดยบทหน้าบอกเลยว่า พิเศษมากเพราะเป็นเนื้อ Bonus
                                    ที่ผมจะมาแบ่งปันความรู้จากเว็บไซต์ต่างๆที่ผมไปเล่นมารวมถึงเส้นทางของการเป็น Security
                                    ในอนาคตได้ด้วย โดยเนื้อหาในบทนั้นมีหลายอย่างน่าสนใจมากๆครับ ทั้งแนวข้อสอบ ,
                                    แลปทดลองเสริมความรู้ , และเนื้อหาที่เป็นแหล่งข้อมูลความรู้ที่จะทำให้คุณ
                                    เก่งขึ้นแบบก้าวกระโดดกันเลยทีเดียว ( แต่ของแบบนี้มันขึ้นอยู่กับความขยันนะ
                                    เพราะมันค่อนข้างที่จะยากเลยและเอาจริงๆ ) </p>

                                <h4 class="mt-4">แล้วเดี๋ยวเราจะมาพบกันอีกในเนื้อหาบทหน้านะครับ สวัสดีค้าบบบ</h4>
                                <h3 class="mt-4">แหล่งข้อมูลอ้างอิง</h3>

                                <p><a
                                        href="https://www.acunetix.com/websitesecurity/cross-site-scripting/">https://www.acunetix.com/websitesecurity/cross-site-scripting/</a>
                                </p>
                                <p><a
                                        href="https://portswigger.net/web-security/cross-site-scripting">https://portswigger.net/web-security/cross-site-scripting</a>
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

            <style>
                a {
                    color: #4568DC;
                }
            </style>
            <div class="col-lg-12 mt-5 text-white">
                <div class="custom-border">
                    <div class="container">
                        <div class="">
                            <div class="card-header background-gradient" style="border-radius: 10px;">
                                <span style="font-size: 24px;text-shadow: black 2px 2px 2px;">เนื้อหา Bonus</span>
                            </div>
                        </div>

                        <div class="mt-3" style="position: relative;">
































                            <div class="collapse" id="collapseExample3">
                                <h3 class="mt-5">มาพบกันอีกแล้วนะครับ 5555 กับเนื้อหาสุดท้ายของเราซึ่งเป็นเนื้อหา Bonus
                                    นั้นเอง !!</h3>
                                <p>เดี๋ยวมาเริ่มกันเลยดีกว่า โดย Bonus เลยก็คือ ผมจะมาแนะนำเกี่ยวกับ Certificate นั้น
                                </p>
                                <p>โดยทุกคนน่าจะรู้อยู่แล้วนะครับว่าใบประกาศเนี่ยมันมีประโยชน์กับเรามากในการเอาไว้ใส่ใน
                                    Portfolio ของเราเพื่อใช้สมัครงาน </p>
                                <p>ซึ่งผมจะมาแนะนำ Certificate ยอดฮิตกันครับทั้งสาย Pentest และ Security เลยยยย</p>
                                <h5>เริ่มจากใบแรกเลยนะครับก็คือ</h5>
                                <h3 class="mt-4">1. CompTIA Security+</h3>
                                <p>ต้องบอกก่อนเลยว่าตัวนี้เป็นอีกหนึ่งตัวยอดฮิตเลยของสาย Security
                                    เพราะถ้าเราอยากจะทำงานเกี่ยวกับสายงานนี้ใบนี้ถือว่าสำคัญมากใบนึงเลยครับ จำเป็นมากๆ
                                </p>
                                <p>แต่อย่างว่าสายพวกนี้ค่าเรียนค่าสอบราคาโหดมากกกก
                                    ผมเลยอยากจะมาแนะนำคอร์สเรียนที่สบายกระเป๋าและสามารถหาเรียนได้ง่ายตาม Internet
                                    และก็ได้ใบเซอร์ด้วย</p>
                                <p>โดยคอร์สแรกนะครับจะเป็นของ udemy
                                    นั้นเองเว็บนี้เป็นเว็บที่รวมเนื้อหาการเรียนการสอนเอาไว้เยอะมากราคาถูกด้วยลดทุกอาทิตย์
                                    ( บางอันบอกลด 70% 2 วัน แต่ผ่านไป 5 วันกลับมาดูก็ยังลดเหมือนเดิม 5555 )</p>
                                <p>Network Security by Jodoi and CompTIA Security+ Exam โดยคอร์สนี้ผมว่าเหมาะมากครับ
                                    เพราะเป็นภาษาไทยด้วย น่าจะเข้าใจกันได้เร็วกว่าการเรียน
                                    จากคนต่างชาติ เพราะเข้าใจว่าหลายๆคนไม่ค่อยแข็งภาษาเท่าไหร่ ( นี้ก็ได้แค่ งูๆ ปลาๆ )
                                </p>
                                <p><a
                                        href="https://www.udemy.com/course/network-security-by-jodoi/">https://www.udemy.com/course/network-security-by-jodoi/</a>
                                </p>
                                <p class="mt-4">คอร์สที่สองเอาเป็นตัวนี้แล้วกันเนื้อหาแน่นมากเรียนจนอ้วกไปเลย
                                    แถมมีแนวข้อสอบให้เราได้ลองฝึกทำด้วยยย</p>
                                <p>TOTAL: CompTIA IT Fundamentals ITF+ (FCO-U61). และอีกตัวมัดรวมไปเลย <br>
                                    TOTAL: CompTIA IT Fundamentals ITF+ (FCO-U61) Practice Tests
                                    เรียนหมดนี้สอบไม่ได้ก็ใช้มันรู้ไปสิ 5555</p>

                                <p class="mt-4"><a
                                        href="https://www.udemy.com/course/it-fundamentals-fc0-u61-the-total-course/">https://www.udemy.com/course/it-fundamentals-fc0-u61-the-total-course/</a>
                                </p>
                                <p class="mt-4"><a
                                        href="https://www.udemy.com/course/comptia-it-fundamentals-fc0-u61-practice-tests/">https://www.udemy.com/course/comptia-it-fundamentals-fc0-u61-practice-tests/</a>
                                </p>
                                <p class="mt-4">แล้วก็อันนี้จะเป็น APP สำหรับใช้เป็นแนวข้อสอบนะครับมีประโยขน์มากกก </p>
                                <p class="mt-4"><a
                                        href="https://apps.apple.com/th/app/comptia-security-exam-prep/id1501784033?fbclid=IwAR0q_qZzKAC8GDWHNZ4iHtcrakZAZVxcQEjOQ9CH9dmz_Lx35T7t0CHrHpw">https://apps.apple.com/th/app/comptia-security-exam-prep/id1501784033?fbclid=IwAR0q_qZzKAC8GDWHNZ4iHtcrakZAZVxcQEj
                                        OQ9CH9dmz_Lx35T7t0CHrHpw</a></p>

                                <p class="mt-4">สำหรับผมนะถ้าคนที่มีตังหน่อยลงนี้เลยครบจบการันตีเลยและ แนะนำๆ
                                    แต่ถ้าคนที่ทุนไม่ได้หนาก็เรียนจาก Course ที่ผมแนะนำไว้ได้เหมือนกันครับ
                                    ได้ความรู้ที่เต็มร้อยเหมือนกัน
                                    แต่มันก็จะมีข้อเสียตรงที่เราไม่สามารถถามใครได้นี้และเวลาเรียนแล้วไม่เข้า 5555
                                    ต้องให้อาจารย์ Google ช่วย</p>

                                <h3> 2. GPEN - GIAC Penetration Tester</h3>
                                <p>แค่เห็นชื่อก็คงพอเดาได้แล้วและว่าเกี่ยวกัีบอะไร 555
                                    ตัวนี้เหมาะมากครับสำหรับคนที่ชอบแฮกนั้นๆ เพราะมันคือการทำ Pentest หรือการทดสอบหา
                                    ช่องโหว่ของเว็บไซต์นั้นเอง เงินดีอยู่นะงานสายนี้เพื่อนนี้ทำอยู่ ป.ตรี Start ตั้ง
                                    50,000 แนะ เยอะกว่า 30,000 อีกนะทุกคน 5555</p>
                                <p>คอร์สแรกผมอยากจะแนะนำจะเป็นของ</p>
                                <p><a
                                        href="https://www.giac.org/certifications/penetration-tester-gpen/">https://www.giac.org/certifications/penetration-tester-gpen/</a>
                                </p>
                                <p>จบครบเลยในคอร์สเดียวนะผมว่า เนื้อหาค่อนข้างดีเลยทีเดียวจากที่ไปลองๆมา</p>
                                <p><a
                                        href="https://www.udemy.com/course/certified-penetration-tester-certification-gpen-exam/">https://www.udemy.com/course/certified-penetration-tester-certification-gpen-exam/</a>
                                </p>

                                <h3>3. OSCP - Offensive Security Certified Professional</h3>
                                <p>เรียกได้ว่าสุดยอดเลยครับอันนี้ 5555 ยากมากนะสำหรับผม คือ OSCP เนี่ยจะไม่เหมือนกับ 2
                                    อันก่อนนะครับบอกเลย ไม่มีแนวข้อสอบไม่มีแนวทฤษฏีอะไรทั้งนั้น
                                    เพราะคุณเพียงแค่ต้องทำการเจาะระบบที่เขาให้คูรมาให้ได้แน่นั้นคือจบครับ
                                    ไม่มีอะไรทั้งนั้น มันเลยยากไงละครับ เพราะถ้าเกิดเตรียมตัวมาไม่ดี ก็เตรียมตัว เสียใจ
                                    เสียเวลา และที่หนักที่สุดเลย คือเสียเงิน เพราะโครตแพงงเลย 5555</p>

                                <p>OSCP เนี่ยเป็นที่นิยมมากๆเลยในหมู่คนทำ Pentester เพราะมันเป็นเหมือนการ
                                    การันตีว่าคุณมีความรู้ในระดับเบื้องต้นในการเจาระระบบ นั้นเอง
                                    ( เพื่อนผมเคยไปสอบมาเหมือนกันแล้วมันก็เอามาเล่าให้ฟังว่าตอนสอบเป็นยังไงบ้าง
                                    บอกเลยว่าเดือดแต่ก็นั้นและไม่ผ่าน 555 )</p>
                                <p>แต่ผมก็ยังมีเว็บไซต์มาแนะนำ
                                    ให้ทุกคนที่สนใจด้านนี้แต่ไม่มีความรู้ได้ไปลองศึกษาและเตรียมตัวกันก่อนนะครับ</p>

                                <p><a href="https://earthzkung.medium.com/oscp-journey-2020-%E0%B8%A3%E0%B8%B5%E0%B8%A7%E0%B8%B4%E0%B8%A7%E0%
                                                    B8%89%E0%B8%9A%E0%B8%B1%E0%B8%9A%E0%B8%84%E0%B8%99%E0%B9%80%E0%B8%A3%E0%B8%B4%E0%
                                                    B9%88%E0%B8%A1%E0%B8%95%E0%B9%89%E0%B8%99%E0%B8%88%E0%B8%B2%E0%B8%81-0-%E0%B8%A5%E
                                                    0%B8%87%E0%B8%AA%E0%B8%AD%E0%B8%9A%E0%B9%84%E0%B8%9B%E0%B8%81%E0%B9%88%E0%B8%AD%
                                                    E0%B8%99%E0%B9%80%E0%B8%94%E0%B8%B5%E0%B9%8B%E0%B8%A2%E0%B8%A7%E0%B9%80%E0%B8%9B%
                                                    E0%B9%87%E0%B8%99%E0%B9%80%E0%B8%AD%E0%B8%87-f7de2544ee18">https://earthzkung.medium.com/oscp-journey-2020-%E0%B8%A3%E0%B8%B5%E0%B8%A7%E0%B8%B4%E0%B8%A7%E0%
                                        B8%89%E0%B8%9A%E0%B8%B1%E0%B8%9A%E0%B8%84%E0%B8%99%E0%B9%80%E0%B8%A3%E0%B8%B4%E0%
                                        B9%88%E0%B8%A1%E0%B8%95%E0%B9%89%E0%B8%99%E0%B8%88%E0%B8%B2%E0%B8%81-0-%E0%B8%A5%E
                                        0%B8%87%E0%B8%AA%E0%B8%AD%E0%B8%9A%E0%B9%84%E0%B8%9B%E0%B8%81%E0%B9%88%E0%B8%AD%
                                        E0%B8%99%E0%B9%80%E0%B8%94%E0%B8%B5%E0%B9%8B%E0%B8%A2%E0%B8%A7%E0%B9%80%E0%B8%9B%
                                        E0%B9%87%E0%B8%99%E0%B9%80%E0%B8%AD%E0%B8%87-f7de2544ee18</a></p>

                                <h3>4. CISSP - Certified Information Systems Security Professional</h3>
                                <p>อันนี้คือพูดได้ว่าเนื้อหาครอบคลุมมากๆ เพราะเยอะ 555 ในสาย Security ไม่มีใครไม่รู้จัก
                                    CISSP แน่นอนครับผมมั่นใจเลยย</p>
                                <p>ด้วยความที่เนื้อหามันครอบจักรวาลสุดๆ ผมเลยจะไม่ขอลงพวกรายละเอียดยิบย่ิอยนะครับ
                                    โดยเนื้อหาเกี่ยวกับ CISSP จะมีประมาณ 8 อย่าง ได้แก่</p>
                                <b>Security and Risk Management</b><br>
                                <b>Asset Security</b><br>
                                <b>Security Architecture and Engineering</b><br>
                                <b>Communication and Network Security</b><br>
                                <b>Identity and Access Management (IAM)</b><br>
                                <b>Security Assessment and Testing</b><br>
                                <b>Security Operations</b><br>
                                <b>Software Development Security</b><br>

                                <p class="mt-4">ก็จะประมาณนี้และครับน่าจะครบแล้ว เห็นไหมมันเยอะมาก
                                    สำหรับใครที่อยากทำงานสาย Security
                                    ควรมีติดตัวครับเพราะมันจะทำให้เราเนี่ยเห็นภาพการทำงาน
                                    ที่กว้างขึ้นมากๆ เหมือนตัวเองเป็น Maneger งานเลยและ</p>
                                <p>ส่วนคอร์สเรียนผมแนะนำเป็นของอันนี้ครับ อันเดียวจบเลย</p>

                                <p><a
                                        href="https://www.isc2.org/Certifications/CISSP">https://www.isc2.org/Certifications/CISSP</a>
                                </p>

                                <p><a
                                        href="https://www.youtube.com/watch?v=enV3F_ubacE">https://www.youtube.com/watch?v=enV3F_ubacE</a>
                                </p>

                                <p>อะเดี๋ยวแถมให้อีกอันนะ อันนี้จะเป็น Security Certification Roadmap
                                    เอาไว้สำหรับดูว่าคุณควรจะมีความรู้ด้านไหนบ้างถ้าอยากจะทำงานสายนี้</p>

                                <p><a
                                        href="https://pauljerimy.com/security-certification-roadmap/?fbclid=IwAR2eQoZBo3kAIcr9iLqHTl-t4I9Jr96GHcCHcHZDz2irVns94fRycI8R9nI">https://pauljerimy.com/security-certification-roadmap/?fbclid=IwAR2eQoZBo3kAIcr9iLqHTl-t4I9Jr96GHcCHcHZDz2irVns94fRycI8R9nI</a>
                                </p>
                                <h5 class="mt-4">ต่อไปจะเป็นแหล่งข้อมูลที่รวบรวมบทความเกี่ยวกับการทำ Pentest และ เขียน
                                    Code ยังไงให้เว็บไซต์ตัวเองปภอดภัยนั้นเอง</h5>
                                <p class="mt-4"><a
                                        href="http://blog.itselectlab.com/?fbclid=IwAR2gyeBbnDk9cGJxHbiesT3fp2yB4mtuhR4k8m1iPBWADaN7P3eo4Rg4XzA">http://blog.itselectlab.com/?fbclid=IwAR2gyeBbnDk9cGJxHbiesT3fp2yB4mtuhR4k8m1iPBWADaN7P3eo4Rg4XzA</a>
                                </p>


                                <h5 class="mt-4">ส่วนต่อมาผมจะขอแนะนำเพจ facebook
                                    ที่มีประโยชน์มากๆต่อการเรียนรู้เกี่ยวกับ Security และการทำ Pentest นะครับ
                                    โดยผมรวมมาทั้งหมด 5 เพจด้วยกันครับ ไปดูกันเลยดีกว่า</h5>

                                <p class="mt-4">กลุ่ม facebook สอนแฮกแบบหมูๆ ( ในนี้มีทั้งรับสอนรับแฮกเลยครับ
                                    บันเทิงโครตๆ )</p>
                                <p><a
                                        href="https://www.facebook.com/groups/1568818886758239">https://www.facebook.com/groups/1568818886758239</a>
                                </p>

                                <img class="mt-4" src="../../public/img/learn2/29.png" width="100%">

                                <li class="mt-4">เพจที่สอง ได้แก่ Itelectlab อันนี้ครบจริงบอกเลยเนื้อหาแน่นๆ</li>
                                <p class="mt-3"><a
                                        href="https://www.facebook.com/itselectlab/">https://www.facebook.com/itselectlab/</a>
                                </p>
                                <img class="mt-2" src="../../public/img/learn2/30.png" width="100%">

                                <li class="mt-4">เพจที่สาม ได้แก่ Hacking & Security
                                    อีกนึกเพจที่มีเนื้อหาครบถ้วนทั้งกันป้องกันและการโจมตีเลย</li>
                                <p class="mt-3"><a
                                        href="https://www.facebook.com/hackandsecbook">https://www.facebook.com/hackandsecbook/</a>
                                </p>
                                <img class="mt-2" src="../../public/img/learn2/31.png" width="100%">

                                <li class="mt-4">เพจที่สี่ อันนี้แนะนำมาๆ Securityภาษาคน
                                    เพราะว่ามีเนื้อหาและแหล่งข้อมูลจากหลายที่ให้เราได้ไปศึกษากัน
                                    เป็นเพจที่ผมเข้าไปดูบ่อยสุดแล้วแหละ
                                    เพราะมีเนื้อหาที่น่าสนใจมาให้ดูบ่อยๆ โดยรวมดีมาครับไปติดตามกันเยอะๆ (
                                    ข้อมูลส่วนมากผมก็เอามาจากที่นี้และ )</li>


                                <p class="mt-3"><a
                                        href="https://www.facebook.com/Security%E0%B8%A0%E0%B8%B2%E0%B8%A9%E0%B8%B2%E0%B8%84%E0%B8%99-105228198599010/">https://www.facebook.com/Security%E0%B8%A0%E0%B8%B2%E0%B8%A9%E0%B8%B2%E0%B8%84%E0%B
                                        8%99-105228198599010/</a></p>
                                <p class="mt-4">แต่เพจนี้มีกลุ่ม facebook
                                    ด้วยนะกลุ่มนี้ดีมากครับเพราะจะมีคนมาแบ่งปันความรู้ให้กับเราเยอะมากๆ</p>
                                <p><a
                                        href="https://www.facebook.com/groups/264773199154908/">https://www.facebook.com/groups/264773199154908/</a>
                                </p>
                                <img class="mt-2" src="../../public/img/learn2/32.png" width="100%">


                                <li class="mt-4">อยู่กับเพจที่ให้ความรู้เนื้อหามาเยอะละ เปลี่ยนมาเว็บหางานกันบ้างดีกว่าา
                                    Cybersec Career Kickstart </li>
                                <p class="mt-3"><a
                                        href="https://www.facebook.com/cyberseccareerkickstart">https://www.facebook.com/cyberseccareerkickstart</a>
                                </p>
                                <img class="mt-2" src="../../public/img/learn2/33.png" width="100%">

                                <p class="mt-4">มาถึง Bonus
                                    ชิ้นสุดท้ายแล้วก็คือเว็บไซต์ที่จะมีแลปทดลองให้ทุกคนได้ไปลองเล่นกันนั้นเอง
                                    โดยผมจะเอาอันที่ผมเคยไป
                                    ลองเล่นมาแนะนำให้ได้เล่นกันครับ บอกเลยท้าทายและก้สนุกมาก</p>

                                <h5 class="mt-4">เริ่มกันที่แลปตัวแรกันเลยครับ นั้นคือ ช่องโหว่ LOG POINOSING นั่นเอง
                                </h5>
                                <p class="mt-4">โดยเราต้องทำความรู้จักกับช่องโหว่ LFI - Local File Inclusion กันก่อน
                                </p>
                                <p>เพราะช่องโหว่ LFI เนี่ยสามารถอ่านไฟล์สำคัญๆในเครื่องเซิร์ฟเวอร์ได้
                                    ตัวอย่างเช่น การอ่านไฟล์ Password</p>
                                <p>และวิธีโจมตีของ ช่องโหว่ log poisoing
                                    ก็ต้องอาศัย การโจมตีด้วยช่องโหว่ LFI นั่นเอง</p>
                                <p>ขั้นตอนแรกในการโจมตีก็ทำการส่ง Payload Code ไปที่เซิร์ฟเวอร์ก่อนด้วย Telnet
                                    หรือช่องทางอื่นๆก็ได้ และ Payload Code
                                    ก็จะถูกเก็บไว้ในเซิร์ฟเวอร์ ( ใน log )</p>

                                <p>และก็ทำการใช้ช่องโหว่ LFI เรียกตัวไฟล์ log มาเพราะ ไฟล์ log นั้นใช้เก็บ Payload
                                    อยู่และเราก็สามารถใช้ตัวไฟล์ log นั้นรันคำสั่งอันตรายได้เลย!!! </p>

                                <h5 class="mt-4">พอมีวิธีโจมตีก็ต้องมีป้องกันถูกไหมครับ 555</h5>
                                <p class="mt-4">ขั้นแรกเลยนะครับเราต้องทำการ Blacklist ตัวไฟล์ที่สำคัญไม่ให้เรียกผ่านการ
                                    include ได้หรือทำการกำหนด Permission
                                </p>
                                <p>ขั้นตอนที่สอง ห้ามไม่ให้ใครก็ตามอ่าน log ได้นอกจาก Root
                                </p>

                                <h5>ทุกคนสามารถลองเล่นแบบถูกกฏหมายได้ที่ </h5>

                                <p><a href="https://dropctf.live/level/151">https://dropctf.live/level/151</a></p>
                                <p><a href="https://dropctf.live/level/152">https://dropctf.live/level/152</a></p>

                                <h5 class="mt-4">ต่อไปจะเป็นแลปเกี่ยวกับ Cyber Seecurity อันนี้เล่นบ่อยเพราะ
                                    ด้วยความที่มันเหมือน Mini Game เลยเล่นได้เรื่อยๆ</h5>
                                <p class="mt-4"><a
                                        href="https://www.pbs.org/wgbh/nova/labs/lab/cyber/">https://www.pbs.org/wgbh/nova/labs/lab/cyber/</a>
                                </p>
                                <p>แต่ภายในเว็บไซต์ก็ไม่ได้มีแค่ Lab Security
                                    ยังมีแลปอื่นให้ลองเล่นอีกเยอะแยะเลยครับไปลองเล่นกันได้ บอกเลยสนุกมากกก</p>
                                <p>ต่อไปคือพระเอกเลยสำหรับการเรียนรู้ของผมนั้นห็คือ Try Hack Me และ Hack The Box ได้
                                    Certificate ด้วยนะครับ</p>
                                <p><a href="https://tryhackme.com/">https://tryhackme.com/</a></p>
                                <p><a href="https://www.hackthebox.com/">https://www.hackthebox.com/</a></p>
                                <p>อันนี้เหมาะสำหรับการเรียนรู้ในระดับ Begining มากๆ ผมก็เรียนมาจากในนี้และครับ
                                    มีทั้งเนื้อหาที่ครบถ้วนและมีในได้ทดลองเล่นด้วย </p>
                                <b>( Ref. ในเว็บไซต์ส่วนมากก็จะมาจาก เว็บนี้และครับ )</b>
                                <p class="mt-4">เป็นยังไงบ้างครับทุกคนสำหรับเนื้อหา Bonus จัดหนักจัดเต็มกันมากๆเลย
                                    หวังว่าทุกคนจะได้รับความรู้ไปแบบเต็มๆนะครับและก็สามารถนำเนื้อหาใน
                                    เว็บไซต์ของเราไปต่อยอดในการพัฒนาความสามารถจนถึงขั้นที่ ได้ทำงานในสายที่ตนต้องการเลย
                                </p>

                                <p><b>แต่เดี๋ยวก่อน..... เนื้อหาของจริงยังไม่หมดนะครับ
                                        ที่เห็นภายในเว็บไซต์เป็นแค่ส่วนนึงเท่านั้น
                                        ยังมีในส่วนของเอกสารการสอนที่พวกผมทำเอาไว้อีกด้วย</b></p>
                                <p><b>แนะนำให้โหลดกันนะครับ เพราะว่ามันมีเนื้อหาที่แน่นมากและยังมีคำตอบอยู่ในนั้นอีกด้วย
                                        คำตอบที่ผมหมายถึงก็คือ คำตอบในแบบทดสอบของเราเองครับ</b></p>
                                <p><b>ขอให้สนุกกับการทำแบบทดสอบและ แลปทดลองภายในเว็บไซต์ของเราด้วยนะครับ
                                        โชคดีครับทุกคน</b></p>
                            </div>
                        </div>

                        <div class="mt-5">
                            <input data-bs-target="#collapseExample3" type="button" style="width: 250px;"
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