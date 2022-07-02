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
    <link href="../../assets/custom/carousel.css?v=22" rel="stylesheet">
    <link href="../../assets/custom/border.css?v=22" media="screen" rel="stylesheet">
    <link href="../../assets/custom/test.css?v=22" media="screen" rel="stylesheet">

    <!--load all Font Awesome styles -->
    <link href="../../assets/fontawesome/css/all.css" rel="stylesheet">

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body>
    
<style>
    .hide {
        display: none;
    }
</style>
    <script>
    $(document).mousedown(function(e) {
        if (e.which === 2) {
            alert("อย่าหาทำ!!!");
            return false; // Or e.preventDefault()
        }
    });
    document.addEventListener('contextmenu', event => event.preventDefault());
    $(document).keydown(function(event) {
        if (event.keyCode == 123) { // Prevent F12
            return false;
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
            return false;
        }
    });
    </script>
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
                        <a class="nav-link textw " href="../../Lesson/">Lesson</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw active" href="../../Lesson/Test">Exercise</a>
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


    <?php
    if(isset($_GET['testlist'])){
        if($_GET['testlist'] == "1"){
            require_once dirname(__FILE__)."/page/testlist1.php";
        }elseif($_GET['testlist'] == "2"){
            require_once dirname(__FILE__)."/page/testlist2.php";
        }elseif($_GET['testlist'] == "3"){
            require_once dirname(__FILE__)."/page/testlist3.php";
        }else{
            require_once dirname(__FILE__)."/page/welcome.php";
        }

    }elseif(isset($_GET['testing'])){
        if($_GET['testing'] == "1"){
            require_once dirname(__FILE__)."/page/testing.php";
        }
        if($_GET['testing'] == "2"){
            require_once dirname(__FILE__)."/page/testing.php";
            
        }
        if($_GET['testing'] == "3"){
            require_once dirname(__FILE__)."/page/testing.php";
            
        }
        if($_GET['testing'] == "incorrect"){
            require_once dirname(__FILE__)."/page/incorrect.php";
        }
        
        if($_GET['testing'] == "correct"){
            require_once dirname(__FILE__)."/page/correct.php";
        }

    }elseif(isset($_GET['secret'])){
        $secret = $_GET['secret'];
        if($secret == 1 or $secret == 2 or $secret == 3){
            require_once dirname(__FILE__)."/page/secret_question.php";

        }else{
            require_once dirname(__FILE__)."/page/welcome.php";
        }
        
    }else{
        require_once dirname(__FILE__)."/page/welcome.php";
    }
    
    ?>


    
<?php
    require_once("../../totop.php");
    ?>
    <!-- Parallax start -->
    <!-- Parallax end -->
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