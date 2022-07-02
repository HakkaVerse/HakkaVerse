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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a href="../../Profile/"><img src="<?php echo $_SESSION['profile']; ?>" style="border: 4px solid white;border-radius: 20px; width: 90px; height: 90px; object-fit: cover;"></a>
                </ul>
            </div>
        </nav>

    </div>

    <div class="container mt-5">
        <div class="mt-4">
            <a href="../../Lesson/" style="width: 250px;" class="btn btn-custom"><i style="margin-right: 10px;" class="fa-solid fa-circle-arrow-left"></i> กลับสู่หน้าหลัก</a>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 text-white">
                <div class="custom-border">
                    <div class="container">
                        <div class="mt-1">
                            <h2 style="color: #F0A500;"><b style="color: #FFFF;">Web Security</b></h2>
                        </div>
                        <div class="mt-4">
                            <span class="badge background-gradient"><span class="text-white" style="font-size: 18px;text-shadow: black 2px 0 5px; font-weight: 900;padding: 5px;">Beginner</span></span>
                        </div>
                        <div class="mt-4">
                            <span><i class="fa fa-play-circle" style="padding-right: 9px; font-size: 25px;"></i> <span style="position: absolute; margin-top: 0px;">30 Minute</span></span>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-6" style="position: relative; bottom: 120px; right:80px;">
                <a href="../SQLi/"><img width="40px" src="../../public/img/icon/back.png"></a>
            </div>
            <div class="col-lg-6 text-end" style="position: relative; bottom: 120px; left:80px;"">
<a href=" ../XSS/"><img width="40px" src="../../public/img/icon/next.png"></a>
            </div>




            <div class="col-lg-12 mt-5 text-white">

                <div class="card-header background-gradient" style="border-radius: 10px;">
                    <span style="font-size: 24px;text-shadow: black 2px 2px 2px;"><b style="color: white;">Web Security</b> คืออะไร <b style="color: white;">?</b></span>
                </div>


                <div class="ratio ratio-16x9 mt-5">
                    <!-- Link Youtube Tutorial -->
                    <!-- ตัวอย่างลิงก์ Youtube ที่เอามาเป็นตัวอย่าง https://www.youtube.com/watch?v=RsAzNgdZ_Dk ให้ Copy แค่ตรงส่วนนี้ "RsAzNgdZ_Dk" เอามาแทนที่ข้างล่าง ไม่ต้องยุ่งกับ "https://www.youtube.com/embed/" -->
                    <iframe style="border-radius: 30px;" src="https://www.youtube.com/embed/RsAzNgdZ_Dk" title="YouTube video" allowfullscreen></iframe>
                </div>

                <div class="mt-5 text-center">
                    <a href="download/webs.pdf" download style="width: 239px;" class="btn btn-custom">WEBS.PDF</a>
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
                                <p><a href="https://www.udemy.com/course/network-security-by-jodoi/">https://www.udemy.com/course/network-security-by-jodoi/</a>
                                </p>
                                <p class="mt-4">คอร์สที่สองเอาเป็นตัวนี้แล้วกันเนื้อหาแน่นมากเรียนจนอ้วกไปเลย
                                    แถมมีแนวข้อสอบให้เราได้ลองฝึกทำด้วยยย</p>
                                <p>TOTAL: CompTIA IT Fundamentals ITF+ (FCO-U61). และอีกตัวมัดรวมไปเลย <br>
                                    TOTAL: CompTIA IT Fundamentals ITF+ (FCO-U61) Practice Tests
                                    เรียนหมดนี้สอบไม่ได้ก็ใช้มันรู้ไปสิ 5555</p>

                                <p class="mt-4"><a href="https://www.udemy.com/course/it-fundamentals-fc0-u61-the-total-course/">https://www.udemy.com/course/it-fundamentals-fc0-u61-the-total-course/</a>
                                </p>
                                <p class="mt-4"><a href="https://www.udemy.com/course/comptia-it-fundamentals-fc0-u61-practice-tests/">https://www.udemy.com/course/comptia-it-fundamentals-fc0-u61-practice-tests/</a>
                                </p>
                                <p class="mt-4">แล้วก็อันนี้จะเป็น APP สำหรับใช้เป็นแนวข้อสอบนะครับมีประโยขน์มากกก </p>
                                <p class="mt-4"><a href="https://apps.apple.com/th/app/comptia-security-exam-prep/id1501784033?fbclid=IwAR0q_qZzKAC8GDWHNZ4iHtcrakZAZVxcQEjOQ9CH9dmz_Lx35T7t0CHrHpw">https://apps.apple.com/th/app/comptia-security-exam-prep/id1501784033?fbclid=IwAR0q_qZzKAC8GDWHNZ4iHtcrakZAZVxcQEj
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
                                <p><a href="https://www.giac.org/certifications/penetration-tester-gpen/">https://www.giac.org/certifications/penetration-tester-gpen/</a>
                                </p>
                                <p>จบครบเลยในคอร์สเดียวนะผมว่า เนื้อหาค่อนข้างดีเลยทีเดียวจากที่ไปลองๆมา</p>
                                <p><a href="https://www.udemy.com/course/certified-penetration-tester-certification-gpen-exam/">https://www.udemy.com/course/certified-penetration-tester-certification-gpen-exam/</a>
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

                                <p><a href="https://www.isc2.org/Certifications/CISSP">https://www.isc2.org/Certifications/CISSP</a>
                                </p>

                                <p><a href="https://www.youtube.com/watch?v=enV3F_ubacE">https://www.youtube.com/watch?v=enV3F_ubacE</a>
                                </p>

                                <p>อะเดี๋ยวแถมให้อีกอันนะ อันนี้จะเป็น Security Certification Roadmap
                                    เอาไว้สำหรับดูว่าคุณควรจะมีความรู้ด้านไหนบ้างถ้าอยากจะทำงานสายนี้</p>

                                <p><a href="https://pauljerimy.com/security-certification-roadmap/?fbclid=IwAR2eQoZBo3kAIcr9iLqHTl-t4I9Jr96GHcCHcHZDz2irVns94fRycI8R9nI">https://pauljerimy.com/security-certification-roadmap/?fbclid=IwAR2eQoZBo3kAIcr9iLqHTl-t4I9Jr96GHcCHcHZDz2irVns94fRycI8R9nI</a>
                                </p>
                                <h5 class="mt-4">ต่อไปจะเป็นแหล่งข้อมูลที่รวบรวมบทความเกี่ยวกับการทำ Pentest และ เขียน
                                    Code ยังไงให้เว็บไซต์ตัวเองปภอดภัยนั้นเอง</h5>
                                <p class="mt-4"><a href="http://blog.itselectlab.com/?fbclid=IwAR2gyeBbnDk9cGJxHbiesT3fp2yB4mtuhR4k8m1iPBWADaN7P3eo4Rg4XzA">http://blog.itselectlab.com/?fbclid=IwAR2gyeBbnDk9cGJxHbiesT3fp2yB4mtuhR4k8m1iPBWADaN7P3eo4Rg4XzA</a>
                                </p>


                                <h5 class="mt-4">ส่วนต่อมาผมจะขอแนะนำเพจ facebook
                                    ที่มีประโยชน์มากๆต่อการเรียนรู้เกี่ยวกับ Security และการทำ Pentest นะครับ
                                    โดยผมรวมมาทั้งหมด 5 เพจด้วยกันครับ ไปดูกันเลยดีกว่า</h5>

                                <p class="mt-4">กลุ่ม facebook สอนแฮกแบบหมูๆ ( ในนี้มีทั้งรับสอนรับแฮกเลยครับ
                                    บันเทิงโครตๆ )</p>
                                <p><a href="https://www.facebook.com/groups/1568818886758239">https://www.facebook.com/groups/1568818886758239</a>
                                </p>

                                <img class="mt-4" src="../../public/img/learn2/29.png" width="100%">

                                <li class="mt-4">เพจที่สอง ได้แก่ Itelectlab อันนี้ครบจริงบอกเลยเนื้อหาแน่นๆ</li>
                                <p class="mt-3"><a href="https://www.facebook.com/itselectlab/">https://www.facebook.com/itselectlab/</a>
                                </p>
                                <img class="mt-2" src="../../public/img/learn2/30.png" width="100%">

                                <li class="mt-4">เพจที่สาม ได้แก่ Hacking & Security
                                    อีกนึกเพจที่มีเนื้อหาครบถ้วนทั้งกันป้องกันและการโจมตีเลย</li>
                                <p class="mt-3"><a href="https://www.facebook.com/hackandsecbook">https://www.facebook.com/hackandsecbook/</a>
                                </p>
                                <img class="mt-2" src="../../public/img/learn2/31.png" width="100%">

                                <li class="mt-4">เพจที่สี่ อันนี้แนะนำมาๆ Securityภาษาคน
                                    เพราะว่ามีเนื้อหาและแหล่งข้อมูลจากหลายที่ให้เราได้ไปศึกษากัน
                                    เป็นเพจที่ผมเข้าไปดูบ่อยสุดแล้วแหละ
                                    เพราะมีเนื้อหาที่น่าสนใจมาให้ดูบ่อยๆ โดยรวมดีมาครับไปติดตามกันเยอะๆ (
                                    ข้อมูลส่วนมากผมก็เอามาจากที่นี้และ )</li>


                                <p class="mt-3"><a href="https://www.facebook.com/Security%E0%B8%A0%E0%B8%B2%E0%B8%A9%E0%B8%B2%E0%B8%84%E0%B8%99-105228198599010/">https://www.facebook.com/Security%E0%B8%A0%E0%B8%B2%E0%B8%A9%E0%B8%B2%E0%B8%84%E0%B
                                        8%99-105228198599010/</a></p>
                                <p class="mt-4">แต่เพจนี้มีกลุ่ม facebook
                                    ด้วยนะกลุ่มนี้ดีมากครับเพราะจะมีคนมาแบ่งปันความรู้ให้กับเราเยอะมากๆ</p>
                                <p><a href="https://www.facebook.com/groups/264773199154908/">https://www.facebook.com/groups/264773199154908/</a>
                                </p>
                                <img class="mt-2" src="../../public/img/learn2/32.png" width="100%">


                                <li class="mt-4">อยู่กับเพจที่ให้ความรู้เนื้อหามาเยอะละ เปลี่ยนมาเว็บหางานกันบ้างดีกว่าา
                                    Cybersec Career Kickstart </li>
                                <p class="mt-3"><a href="https://www.facebook.com/cyberseccareerkickstart">https://www.facebook.com/cyberseccareerkickstart</a>
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
                                <p class="mt-4"><a href="https://www.pbs.org/wgbh/nova/labs/lab/cyber/">https://www.pbs.org/wgbh/nova/labs/lab/cyber/</a>
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
                            <input data-bs-target="#collapseExample3" type="button" style="width: 250px;" onclick="readmore(this)" value="อ่านเพิ่มเติม" class="btn-custom-border" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
                        </div>
                    </div>
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