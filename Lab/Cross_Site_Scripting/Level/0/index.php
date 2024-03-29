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
        .text-bg {
            display: inline-block;
            padding: 11px 5px;

            height: auto;
            font-size: 20px;
            font-weight: 700;
            background: linear-gradient(90deg, rgba(185, 43, 39, 0.7) 0%, rgba(21, 101, 192, 0.7) 100%);
            box-shadow: inset 0px 0px 68px rgba(255, 255, 255, 0.05), inset 0px 4px 4px rgba(255, 255, 255, 0.15);
            /* Note: backdrop-filter has minimal browser support */

            border-radius: 10px;

            /* Note: backdrop-filter has minimal browser support */

        }

        p{
            font-size: 20px;
        }
        .smalltext{
            font-size:18px;
        }
    </style>
    <img class="imagebanner" src="img/banner.jpg">
    <div class="imgshadow"></div>
    <div class="text-center text-white" style="font-size: 85px; font-weight: 900; letter-spacing: 1px;">
        <span>Perfecting your payload</span>
    </div>
    <div class="container mt-5">
        <div class="custom-card2">
            <div class="container">

            </div>
            <p><b>สวัสดีครับทุกท่านมาเจอกันอีกแล้วนะ</b> ในแลปของ <b>Cross - Site Scripting</b> โดยภายในแลปจะมีทั้งหมด
                <b>LEVEL
                    6</b> ด้วยกัน
                ซึ่งจะเป็นการไล่ระดับความยากในการทำไปเรื่อยๆ โดยเราจะมี <b>Sheet</b>
                และเนื้อหาการอธิบายบางส่วนให้คุณได้เรียนรู้และเข้าใจก่อน
                จะเริ่มทำครับ เดี๋ยวไปเริ่มกันเลยดีกว่า</p>
        </div>



        <div class="row">
            <div class="col-lg-6 mt-4">
                <a href="../../" id="nextlevel" class="btn nextLevel" style="font-size: 20px;"><i style="padding-right: 5px;" class="fa-solid fa-circle-arrow-left"></i> ย้อนกลับ</a>
            </div>
            <div class="col-lg-6 mt-4 text-end">
                <a href="../1/" id="nextlevel" class="btn nextLevel" style="font-size: 20px;">LEVEL ONE <i style="padding-left: 5px;"
                        class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>


        <!-- LEVEL 1 -->
        <div class="custom-card mt-4">
            <p>โดยในตัวแลปของเราจะใช้ <b>JavaScript</b> เป็นคำสั่งเพื่อใช้ในการแสดงฟังชั่นการแจ้งเตือน ด้วย <b>String
                    HKA, </b>
                เดี๋ยวไปดูตัวอย่างกันครับ</p>

            <div class="text-bg mt-3">
                &lt;script&gt;alert('HKA');&lt;/script&gt;
            </div>
            <h4 class="mt-5">LEVEL 1</h4>
            <p class="mt-4">ทุกคนจะได้รับแบบฟอร์มขอให้คุณป้อนชื่อของคุณ และเมื่อทุกคนป้อนชื่อแล้ว
                ชื่อของทุกคนก็จะถูกแสดงในบรรทัดด้านล่าง</p>
            <h5 class="mt-4">ตัวอย่างเช่น</h5>
            <div class="mt-4 text-center">
                <img class="w-100 round" src="img/1.png">
            </div>
            <p class="mt-4">ภายในหน้าของตัว <b>View Source</b> ของ <b>Page Level one</b> คุณจะเห็นชื่อของคุณอยู่ที่ Code
            </p>
            <div class="mt-4 text-center">

                <img class="w-45 round" src="img/2.png">

                <p class="mt-3 smalltext">เป็นเพียงตัวอย่างของ <b>Code</b> ที่ทำให้เห็น <b>VS</b> ของเราแต่ภาย<br>
                    ในแลปทดลองไม่สามารถเปิดได้ครับ แต่ในอนาคตจะสามารถเปิดใช้ได้แน่นนอน</p>
            </div>

            <p class="mt-4">จากการ <b>Code</b> ที่เห็น ผมคิดว่าแทนที่เราจะใส่ชื่อของคุณลงไป เราควรพยายามป้อน
                <b>JavaScript Payload</b> ตัวนี้ลงไปแทนดีกว่าครับ</p>


            <div class="text-bg mt-4">
                &lt;script&gt;alert('HKA');&lt;/script&gt;
            </div>

            <p class="mt-5">หลังจากทำการใส่ <b>&lt;script></b> ไปแล้วให้กด <b>Enter</b> เราจะได้ <b>Pop up</b>
                แจ้งเตือนขึ้นมาพร้อม <b>String HKA</b> และแหล่งที่มาของหน้า
                จะ <b>Code</b> แบบนี้</p>

            <div class="mt-4 text-center">

                <img class="w-45 round" src="img/3.png">

                <p class="mt-3 smalltext">เป็นเพียงตัวอย่างของ <b>Code</b> ที่ทำให้เห็น <b>VS</b> ของเราแต่ภาย<br>
                    ในแลปทดลองไม่สามารถเปิดได้ครับ แต่ในอนาคตจะสามารถเปิดใช้ได้แน่นนอน</p>
            </div>

            <p class="mt-5">เมื่อเราทำทุกขั้นตอนสำเร็จแล้วจะมีข้อความว่า <b>“ XSS Payload Successful “</b> แสดงขึ้นมา
                และจะเป็นการเสร็จสิ้นการทำแลป
                <b>Level 1</b> และไปต่อในแลป <b>Level 2</b>
            </p>
        </div>


        <!-- LEVEL 2 -->
        <div class="custom-card mt-5">
            <h4>LEVEL 2</h4>
            <p class="mt-4">ภายในแลปนี้ก็จะเหมือนกับอันแรกครับ โดยเราต้องทำการป้อนชื่อของเราอีกรอบ
                แต่รอบนี้มันจะแสดงผลที่ตัวของ Input แทนตามในรูป</p>
            <h4 class="mt-4">ตัวอย่างเช่น</h4>
            <div class="mt-5 text-center">
                <img class="w-100 round" src="img/4.png">
            </div>
            <p class="mt-5">เมื่อเราดูที่หน้าของ <b>VS</b> แล้ว จะเห็นว่าชื่อของเรามันจะแสดงอยู่ที่ค่า <b>attribute</b>
                ของ <b>Tag Input</b></p>


            <div class="mt-4 text-center">

                <img class="w-50 round" src="img/5.png">

                <p class="mt-3 smalltext">เป็นเพียงตัวอย่างของ <b>Code</b> ที่ทำให้เห็น <b>VS</b> ของเราแต่ภาย<br>
                    ในแลปทดลองไม่สามารถเปิดได้ครับ แต่ในอนาคตจะสามารถเปิดใช้ได้แน่นนอน</p>
            </div>

            <p class="mt-4"><b>Code</b> ด้านบนมันจะใช้งานไม่ได้เลยครับถ้าเกิดคุณลองใช้ <b>JavaScript payload</b>
                ก่อนหน้านี้ เพราะว่ามันไม่สามารถที่จะเรียกใช้
                จากภายในของ <b>Input</b> ได้ ฉะนั้นเราต้องเลี่ยง <b>Input</b> ออกมาก่อน เพื่อที่จะให้ <b>Payload</b>
                ทำงานได้อย่างถูกต้อง ซึ่งคุณสามารถทำ
                ได้ดังนี้</p>

            <div class="text-bg mt-4">
                ">&lt;script>alert('HKA');&lt;/script>
            </div>
            <p class="mt-4">ในส่วนสำคัญของตัว <b>Payload</b> นี้คือ <span class="badge bg-brown bigtext">"></span>
                ซึ่งจะปิดค่า <b>parameter</b> แล้วก็ <b>Tag input</b> </p>
            <p class="mt-4">หลังจากที่ปิด <b>input</b> อย่างถูกต้องแล้วก็ทำจะทำให้ <b>JavaScript</b> ทำได้ปกติ </p>
            <div class="mt-5 text-center">

                <img class="w-50 round" src="img/6.png">

                <p class="mt-3 smalltext">เป็นเพียงตัวอย่างของ <b>Code</b> ที่ทำให้เห็น <b>VS</b> ของเราแต่ภาย<br>
                    ในแลปทดลองไม่สามารถเปิดได้ครับ แต่ในอนาคตจะสามารถเปิดใช้ได้แน่นนอน</p>
            </div>
            <p class="mt-5">จากนั้นเมื่อเรากดที่ปุ่ม <b>Enter</b> คุณจะเจอกับ <b>Pop up</b> แจ้งเตือนที่มีคำว่า
                <b>HKA</b> จากนั้น จะได้รับข้อความยืนยันว่าสำเร็จแล้ว
                และสามารถไปยัง <b>Level 3 </b>ได้</p>
        </div>

        <!-- LEVEL 3 -->
        <div class="custom-card mt-5">
            <h4>LEVEL 3</h4>
            <p class="mt-4">ใน <b>Level 3</b> ก็จะเหมือนกันกับก่อนหน้านี้ โดยชื่อของเราจะแสดงขึ้นใน <b>&lt; HTML > </b>
                ซึ่งคราวนี้จะเป็น <b>&lt; textarea ></b></p>
            <h4 class="mt-4">ตัวอย่างเช่น</h4>
            <div class="mt-5">
                <div class="mt-5 text-center">
                    <img class="w-100 round" src="img/7.png">
                </div>
                <p class="mt-5">เราจะเลี่ยงการใช้ <b>&lt; textarea ></b> ให้มันต่างออกไปจากตัว <b>Level 2</b>
                    โดยจะใช้ตัว <b>payload</b> ต่อไปนี้</p>

                <div class="text-bg mt-4">
                    &lt;/textarea>&lt;script>alert('HKA');&lt;/script>
                </div>
                <div class="mt-5 text-center">

                    <img class="w-50 round" src="img/8.png">

                    <p class="mt-3 smalltext">เป็นเพียงตัวอย่างของ <b>Code</b> ที่ทำให้เห็น <b>VS</b> ของเราแต่ภาย<br>
                        ในแลปทดลองไม่สามารถเปิดได้ครับ แต่ในอนาคตจะสามารถเปิดใช้ได้แน่นนอน</p>
                </div>
                <div class="mt-5 text-center">

                    <img class="w-100 round" src="img/9.png">

                    <p class="mt-3 smalltext">เป็นเพียงตัวอย่างของ <b>Code</b> ที่ทำให้เห็น <b>VS</b> ของเราแต่ภาย<br>
                        ในแลปทดลองไม่สามารถเปิดได้ครับ แต่ในอนาคตจะสามารถเปิดใช้ได้แน่นนอน</p>
                </div>
                <p class="mt-4">ส่วนที่สำคัญของตัว <b>payload</b> ที่อยู่ด้านบนคือ <b>&lt;/textarea></b> ซึ่งช่วยทำให้
                    <b>textarea</b> <b>element</b> ปิดลงเพื่อให้ <b>Script</b>
                    ทำงาน</p>
                <p class="mt-4">และเหมือนเดิมในทุกครั้งเมื่อกด <b>Enter</b> จะมี <b>Pop up</b> แจ้งเตือนขึ้นมาว่า
                    <b>HKA</b> จากนั้น เราก็จะได้รับข้อความยืนยันว่าเราทำ
                    สำเร็จแล้วและไปยัง <b>Level 4</b></p>
            </div>

        </div>



        <!-- LEVEL 4 -->
        <div class="custom-card mt-5">
            <h4>LEVEL 4</h4>
            <p class="mt-4">มาต่อที่ <b>Level 4</b> กันเลยโดยในเลเวลนี้ก็จะเหมือนกับตัว <b>Level 1</b> เลยครับต่างกันแค่
                ภายในหน้า <b>VS</b> ของเราจะกลายเป็น <b>JavaScript</b> นั้นเองง </p>
            <h4 class="mt-4">ตัวอย่างเช่น</h4>
            <div class="mt-5">
                <div class="mt-5 text-center">
                    <img class="w-100 round" src="img/10.png">
                </div>
                <div class="mt-5 text-center">

                    <img class="w-100 round" src="img/11.png">

                    <p class="mt-3 smalltext">เป็นเพียงตัวอย่างของ <b>Code</b> ที่ทำให้เห็น <b>VS</b> ของเราแต่ภาย<br>
                        ในแลปทดลองไม่สามารถเปิดได้ครับ แต่ในอนาคตจะสามารถเปิดใช้ได้แน่นนอน</p>
                </div>
                <p class="mt-5">ใน <b>Code</b> ที่เห็นจะรู้ได้ว่าเราต้องทำการเลี่ยง <b>JavaScript</b>
                    คุณจึงจะสามารถเรียนใช้ <b>Code</b> ของตัวเองได้ โดยสามารถทำได้ด้วย<br>
                    <b>payload ' ; alert( 'HKA' ) ; //</b> ซึ่งจากภาพคุณจะเจอว่าจอด้านล่างกำลังทำการ <b>Run code The ' closes
                        the field specifying the name, </b>
                    ซึ่งมันหมายถึงจุดสิ้นสุดของคำสั่งในปัจจุบัน</b>
                    ทำงาน
                </p>
                <div class="mt-5 text-center">

                    <img class="w-100 round" src="img/12.png">

                    <p class="mt-3 smalltext">เป็นเพียงตัวอย่างของ <b>Code</b> ที่ทำให้เห็น <b>VS</b> ของเราแต่ภาย<br>
                        ในแลปทดลองไม่สามารถเปิดได้ครับ แต่ในอนาคตจะสามารถเปิดใช้ได้แน่นนอน</p>
                </div>
                <p class="mt-5">การแสดงผลหลังการทำสำเร็จก็จะเหมือนเดิมและสามารถไปยัง <b>Level 5</b> ได้ครับ</p>
            </div>

        </div>


        <!-- LEVEL 5 -->
        <div class="custom-card mt-5">
            <h4>LEVEL 5</h4>
            <p class="mt-4">เหมือนกับ <b>Level 1</b> เลยครับ แต่ความต่างจะอยู่ที่ถ้าคุณใส่ <span
                    class="text-bg">&lt;script>alert('HKA');&lt;/script></span></p>
            <p class="mt-4">จะเห็นว่า <b>payload</b> มันไม่ทำงานถูกไหมครับ เดี๋ยวมาดูสาเหตุของมันกัน</p>
            <h4 class="mt-4">ตัวอย่างเช่น</h4>

            <div class="mt-5 text-center">
                <img class="w-100 round" src="img/13.png">
            </div>

            <div class="mt-5 text-center">

                <img class="w-50 round" src="img/14.png">

                <p class="mt-3 smalltext">เป็นเพียงตัวอย่างของ <b>Code</b> ที่ทำให้เห็น <b>VS</b> ของเราแต่ภาย<br>
                    ในแลปทดลองไม่สามารถเปิดได้ครับ แต่ในอนาคตจะสามารถเปิดใช้ได้แน่นนอน</p>
            </div>
            <p class="mt-5"><b>Script</b> จะถูกลบออกจาก <b>payload</b> ของเรา
                นั้นเพราะว่ามันมีตัวกรองแยกคำที่อาจก่อให้เกิดความอันตราย</p>
            <p class="mt-4">ต่อไปจะเป็นเคล็ดลับที่มีประโยชน์และสามารถนำไปลองใช้ได้ครับ</p>
            <div class="mt-5 text-center">
                <p class="mt-3">Original Payload</p>
                <div class="text-bg mt-3">
                    &lt;sscriptcript>alert('HKA');&lt;/sscriptcript>
                </div>
                <p class="mt-4">Text to be removed (by the filter)</p>
                <div class="text-bg mt-1">
                    &lt;s<span class="highlight">script</span>cript>alert('HKA');&lt;/s<span
                        class="highlight">script</span>cript>
                </div>
                <p class="mt-4">Text to be removed (by the filter)</p>
                <div class="text-bg mt-1">
                    &lt;script>alert('HKA');&lt;/script>
                </div>

            </div>
            <p class="mt-5">ลองป้อน <b>payload</b> <b>&lt;sscriptcript>alert('HKA');&lt;/sscriptcript></b>
                ลงไปแล้วก็คลิก <b>Enter</b> คุณก็จะได้รับข้อความแจ้งเตือน
                <b>HKA</b> จากนั้น คุณก็จะได้รับข้อความยืนยันว่าทำสำเร็จนั้นเอง พร้อมกับสามารถไปสู่ <b>Level 6</b>
                ได้เลยยย
            </p>
        </div>


        <!-- LEVEL 6 -->
        <div class="custom-card mt-5">
            <h4>LEVEL 6</h4>
            <p class="mt-4">ในเลเวลสุดท้ายนี้ จะคล้ายกับระดับที่สอง โดยเราต้องย้ายจากค่า <b>attribute</b> ของ
                <b>&lt;input></b> ซึ่งเราสามารถลองใช้ </p>
            <div class="mt-3 text-bg">
                ">&lt;script>alert('HKA');&lt;/script>
            </div>
            <p class="mt-4">แต่ดูเหมือนมันจะไม่ได้ผลถูกไหมครับ ถ้างั้นลองมาตรวจสอบกันว่าทำไมมันถึงไม่ทำงาน
                เดี๋ยวมาดูสาเหตุกัน</p>

            <h4 class="mt-5">ตัวอย่างเช่น</h4>

            <div class="mt-5 text-center">

                <img class="w-50 round" src="img/15.png">

                <p class="mt-3 smalltext">เป็นเพียงตัวอย่างของ <b>Code</b> ที่ทำให้เห็น <b>VS</b> ของเราแต่ภาย<br>
                    ในแลปทดลองไม่สามารถเปิดได้ครับ แต่ในอนาคตจะสามารถเปิดใช้ได้แน่นนอน</p>
            </div>

            <p class="mt-5">เราจะเห็นว่า <b>
                    < and>
                </b>ถูกเอาออกจาก <b>payload</b> ของเรา ซึ่งทำให้ไม่สามารถ <b>escaping &lt;img></b> ได้
                ในการที่เราจะเลี่ยงตัวกรอง
                เราสามารถที่จะใช้ประโยชน์จากตัว <b>attributes</b> เพิ่มจาก <b>
                    < img>
                </b> ยกตัวอย่างเช่น เมื่อมี <b>Onload</b> จะทำการ <b>run code </b>
                ที่คุณเลือกรูปภาพเอาไว้เมื่อระบุใน <b>attributes</b> ของ <b>Source Code</b> ทำการโหลดเข้าสู่หน้าเว็บ</p>

            <p class="mt-4">เดี๋ยวเราจะมาทำการเปลี่ยน <b>payload</b> ของเราให้มัน <b>reflect</b> ด้วย <span
                    class="text-bg">/images/hack.jpg" onload="alert('HKA');</span></p>

            <p class="mt-4">จากนั้นดูที่มาของหน้า แล้วเราจะเห็นว่าการทำงานนี้เป็นอย่างไร</p>
            <div class="mt-5 text-center">

                <img class="w-50 round" src="img/16.png">

                <p class="mt-3 smalltext">เป็นเพียงตัวอย่างของ <b>Code</b> ที่ทำให้เห็น <b>VS</b> ของเราแต่ภาย<br>
                    ในแลปทดลองไม่สามารถเปิดได้ครับ แต่ในอนาคตจะสามารถเปิดใช้ได้แน่นนอน</p>
            </div>

            <p class="mt-5">จบแล้วววครับทุกคนสำหรับ <b>Level 6</b>
                หลังจากที่เรียนรู้กันมาสักพักใหญ่แล้วผมว่าเราไปลองเทสฝีมือในแลปกันเลยดีกว่าาครับ</p>

        </div>

        <div class="mt-5"></div>
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