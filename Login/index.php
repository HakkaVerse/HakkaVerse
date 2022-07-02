<?php require_once dirname(__FILE__)."/../_system/system.php";


if(isset($_SESSION['username'])){
  header("Location: /Home");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Web title -->
    <title>HAKKA - Login</title>

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">


    <!-- FONT -->

    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

    <!-- Custom CSS -->
    <link href="../assets/custom/style.css?v=22" rel="stylesheet">
    <link href="../assets/custom/home.css?v=22" rel="stylesheet">
    <link href="../assets/custom/parallax.css?v=22" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <?php require_once dirname(__FILE__)."/../alert_account.php"; ?>

    <div style="margin-top: 10%;">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 mt-5 text-white">
                    <img src="../public/img/home/hakka.png" width="60%">
                    <h3 class="mt-3" style="color: #F0A500;">เว็บไซต์สำหรับการเรียนรู้ด้านไซเบอร์</h3>
                    <p class="mt-3">เว็บไซต์ของเราเป็นแพลตฟอร์มในรูปแบบของ <b style="color: #F0A500;">E - Learning</b>
                        ที่ถูกสร้างขึ้นมาเพื่อจุดประสงค์ใน
                        การเรียนรู้ และแบ่งปันความรู้ขั้นพื้นฐานในด้านของไซเบอร์และการทำ <b
                            style="color: #F0A500;">Pentest</b>
                        เพื่อให้ผู้เรียนสามารถนำไปต่อยอดในสายงานที่เกี่ยวข้องกับ <b style="color: #F0A500;">Security</b>
                        หรือแม้แต่
                        นำไปประยุกต์ใช้กับเว็บไซต์ของตนเอง ได้อีกด้วยครับ</p>
                    <div class="row mt-3">
                        <div class="col-lg-6 mt-3">
                            <a href="../Login/" style="width: 100%; border-radius: 10px;"
                                class="btn btn-gradient-login">เข้าสู่ระบบ</a>

                        </div>
                        <div class="col-lg-6 mt-3">
                            <a href="../Register/" style="width: 100%; border-radius: 10px;"
                                class="btn btn-gradient-border-login">สมัครสมาชิก</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-2">

                </div>
                <div class="col-lg-4 text-white mt-5">
                    <div class="mt-5"></div>
                    <h3>เข้าสู่ระบบ</h3>
                    <form action="../action.php" method="POST">

                        <input type="hidden" name="login" value="true">
                        <div class="mt-4">
                            <input class="input" name="username" autocomplete="off" required
                                placeholder="ชื่อผู้ใช้....">
                        </div>
                        <div class="mt-2">
                            <script>
                            $(document).ready(function() {
                                $("#show").click(function() {
                                  if($("#show").text() == "Show"){
                                    $("#show").text("Hide");
                                    $("#password").attr("type", 'text');
                                  }else{
                                    $("#show").text("Show");
                                    $("#password").attr("type", 'password');
                                  }
                                });
                            });
                            </script>
                            <input class="input" id="password" name="password" type="password" autocomplete="off" required placeholder="รหัสผ่าน....">
                            <a href="#" id="show"
                                style="color: #7C747E; position: absolute; margin-left: -50px; margin-top: 22px;">Show</a>
                        </div>
                        <div class="mt-2 text-end">
                            <a href="../forgot_password/" style="color: #7C747E;">Password Forgot ?</a>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-gradient-login btn-glow-login"
                                style="width:55%; border-radius: 10px;">เข้าสู่ระบบ</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Parallax start -->
    <div class="parallax"></div>
    <!-- Parallax end -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>