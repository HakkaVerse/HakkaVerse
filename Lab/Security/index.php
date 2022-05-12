<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Web title -->
    <title>Hakka Lab</title>


    <!-- FONT -->

    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

    <!-- Custom CSS -->
    <link href="style/lab.css?v=11" rel="stylesheet">
    <link href="style/head.css?v=11" rel="stylesheet">
    <link href="style/mid.css?v=11" rel="stylesheet">
    <link href="style/footer.css?v=11" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/custom/style.css?v=11" rel="stylesheet">
    <link href="../../assets/custom/home.css?v=11" rel="stylesheet">
    <link href="../../assets/custom/parallax.css?v=11" rel="stylesheet">
    <link href="../../assets/custom/animation.css?v=11" rel="stylesheet">
    <link href="../../assets/custom/carousel.css?v=11" media="screen" rel="stylesheet">
    <link href="../../assets/custom/border.css?v=11" media="screen" rel="stylesheet">
    <link href="../../assets/custom/learn.css?v=11" media="screen" rel="stylesheet">


    <!--load all Font Awesome styles -->
    <link href="../../assets/fontawesome/css/all.css" rel="stylesheet">

    <!--load all Font Awesome styles -->

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <?php
    
    require_once dirname(__FILE__)."/../../_system/system.php";
    if(query("SELECT * FROM test_history WHERE username = ?", [$_SESSION['username']])->rowCount() < $lab){
        header("Location: ../");
        return true;
    }
    ?>
    <img src="img/data-protection-cyber-security-privacy-shield-with-keyhole-icon-global-business-internet-technology-with-abstract-blue-background-information-privacy-protection-concept-3d-rendering.jpg"
        class="bg1">
    <div class="hakka" id="hakka">
        HAKKA V.LAB
    </div>
    <div class="card1">
    </div>
    <img src="img/5.png" class="img3">
    <div class="card1_"></div>
    <div class="h1">Web Security</div>
    <div class="bh2"></div>
    <div class="h2">7 Sections</div>
    <div class="h3"><span><b>สวัสดีครับทุกท่านน !!</b> ขอต้อนรับเข้าสู่ <b>Lab</b> ของ <b>Web Security</b> นะครับ</span>
    </div>
    <div class="h4">โดยเราจะให้ทุกท่านได้ทดสอบกันในเว็บไซต์จำลองของเราที่ทำขึ้นมาเพื่อ </div>
    <div class="h5"><span>ให้ได้ลองฝีมือลองของหลังจากที่เรียนแบบ <b>Lecture</b> กันมาเยอะแล้ว <b>ลุยกันเลยย
                !!</b></span></div>
    <div class="h6"><span><b>จัดทำโดย</b> Aem Supachai</span></div>
    <div class="icon1"></div>
    <div class="shadow1"></div>



    <div class="text1">
        บทเรียนทั้งหมด
    </div>
    <div class="card2"></div>
    <div class="sectionCard1"></div>
    <div class="sectionCard2"></div>
    <div class="sectionCard3"></div>
    <div class="sectionCard4"></div>
    <div class="sectionCard5"></div>
    <div class="sectionCard6"></div>
    <div class="sectionCard7"></div>
    <a href="Level/0/" onmouseover="onHover('sectionCard1')" onmouseout="outHover('sectionCard1')">
        <div class="s0" style="color: black;">0</div>
        <div class="t0">เนื้อหาบทนี้<br><span style="color: white; font-size: 16px;">Section 0</span></div>
    </a>
    <a href="Level/0/" onmouseover="onHover('sectionCard2')" onmouseout="outHover('sectionCard2')">
        <div class="s1" style="color: black;">1</div>
        <div class="t1">LEVEL ONE<br><span style="color: white; font-size: 16px;">Section 1</span></div>
    </a>
    <a href="Level/0/" onmouseover="onHover('sectionCard3')" onmouseout="outHover('sectionCard3')">
        <div class="s2" style="color: black;">2</div>
        <div class="t2">LEVEL TWO<br><span style="color: white; font-size: 16px;">Section 2</span></div>
    </a>
    <a href="Level/0/" onmouseover="onHover('sectionCard4')" onmouseout="outHover('sectionCard4')">
        <div class="s3" style="color: black;">3</div>
        <div class="t3">LEVEL THREE<br><span style="color: white; font-size: 16px;">Section 3</span></div>
    </a>
    <a href="Level/0/" onmouseover="onHover('sectionCard5')" onmouseout="outHover('sectionCard5')">
        <div class="s4" style="color: black;">4</div>
        <div class="t4">LEVEL FOUR<br><span style="color: white; font-size: 16px;">Section 4</span></div>
    </a>
    <a href="Level/0/" onmouseover="onHover('sectionCard6')" onmouseout="outHover('sectionCard6')">
        <div class="s5" style="color: black;">5</div>
        <div class="t5">LEVEL FIVE<br><span style="color: white; font-size: 16px;">Section 5</span></div>
    </a>
    <a href="Level/0/" onmouseover="onHover('sectionCard7')" onmouseout="outHover('sectionCard7')">
        <div class="s6" style="color: black;">6</div>
        <div class="t6">LEVEL SIX<br><span style="color: white; font-size: 16px;">Section 6</span></div>
    </a>

<a class="next" href="../Cross_Site_Scripting/"><img src="../../public/img/icon/next.png"></a>
<a class="back" href="../SQLInjection/"><img src="../../public/img/icon/back.png"></a>
<style>
.next {
    position: absolute;
    width: 55px;
    height: 55px;
    left: 1600px;
    top: 1075px;
}

.back {
    position: absolute;
    width: 55px;
    height: 55px;
    left: 250px;
    top: 1075px;
}
</style>



    <img src="img/Hexagon_keyhole.jpg" class="bg2">
    <div class="shadow2"></div>


    <div class="text2">
        เนื้อหาเพิ่มเติม
    </div>


    <div class="card3"></div>
    <div class="dmp1"><span>Download File <span style="color: #A6CF98;">PDF.</span></span></div>
    <div class="m1">เอกสารสำหรับการเรียนรู้เพิ่มเติมในด้าน Security</div>
    <div class="mm1"><span>เอกสารการสอน <span style="color: #A6CF98;">Cyber Security</span> ขั้นพื้นฐาน</span></div>

    <!-- PDF DOWNLOAD 
                        
    Ex.
    href="Download/file.pdf"
    -->
    <a href="Download/1.pdf" download>
        <div class="b1"></div>
        <span class="btext1">ดาวน์โหลด</span>
        <img class="bicon1" src="img/download.svg">
    </a>


    <div class="card4"></div>
    <div class="dmp2"><span>Download File <span style="color: #A6CF98;">PDF.</span></span></div>
    <div class="m2">เอกสารสำหรับการเรียนรู้เพิ่มเติมในด้าน Security</div>
    <div class="mm2"><span>รวมคำศัพท์น่ารู้สำหรับด้าน <span style="color: #A6CF98;">Cyber Security</span></span></div>

    <!-- PDF DOWNLOAD 
                        
    Ex.
    href="Download/file.pdf"
    -->
    <a href="Download/2.pdf" download>
        <div class="b2"></div>
        <span class="btext2">ดาวน์โหลด</span>
        <img class="bicon2" src="img/download.svg">
    </a>




    <style>
    .backtohome {
        position: absolute;
        width: 310px;
        height: 63px;
        left: 805px;
        top: 2967px;
    }
    </style>

<div class="backtohome mt-4">
    <a href="../../Lab/" style="width: 240px; font-size: 24px;" class="btn btn-custom"><i
            style="margin-right: 10px;" class="fa-solid fa-circle-arrow-left"></i> กลับสู่หน้าหลัก</a>
</div>

<p style="margin-top: 3200px;" class="text-center">
...
</p>


    <script>
    function onHover(b) {
        var elems = document.getElementsByClassName(b);
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'block';
        }
    }

    function outHover(b) {
        var elems = document.getElementsByClassName(b);
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
    }
    </script>
</body>

</html>