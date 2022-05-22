<?php 
require_once dirname(__FILE__)."/../_system/system.php";
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
    <title>HAKKA - Ranking</title>

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">


    <!-- FONT -->

    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

    <!-- Custom CSS -->
    <link href="../assets/custom/style.css?v=11" rel="stylesheet">
    <link href="../assets/custom/home.css?v=11" rel="stylesheet">
    <link href="../assets/custom/parallax.css?v=11" rel="stylesheet">
    <link href="../assets/custom/animation.css?v=11" rel="stylesheet">
    <link href="../assets/custom/carousel.css?v=11" rel="stylesheet">
    <link href="../assets/custom/border.css?v=11" media="screen" rel="stylesheet">

    <!--load all Font Awesome styles -->
    <link href="../assets/fontawesome/css/all.css" rel="stylesheet">

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>


    <style>
    .custom-card {
        /* Rectangle 571 */
        width: 100%;
        color: white;
        padding: 32px;

        background: rgba(99, 108, 132, 0.26);
        box-shadow: inset 0px 0px 68px rgba(255, 255, 255, 0.05), inset 0px 4px 4px rgba(255, 255, 255, 0.15);
        /* Note: backdrop-filter has minimal browser support */

        border-radius: 19px;
    }

    .card-bg {
        width: 100%;
        color: white;
        padding: 50px;
        background: rgba(99, 108, 132, 0.26);
        border: 3px solid #000000;
        box-shadow: inset 0px 0px 68px rgba(255, 255, 255, 0.05), inset 0px 4px 4px rgba(255, 255, 255, 0.15);
        /* Note: backdrop-filter has minimal browser support */

        border-radius: 30px;

    }


    .card-bg2 {
        width: 100%;
        color: white;
        padding: 5px;
        background: rgba(99, 108, 132, 0.26);
        border: 3px solid #000000;
        box-shadow: inset 0px 0px 68px rgba(255, 255, 255, 0.05), inset 0px 4px 4px rgba(255, 255, 255, 0.15);
        /* Note: backdrop-filter has minimal browser support */

        border-radius: 30px;

    }

    .flex-wrapper {
        display: flex;
        flex-flow: row nowrap;
    }

    .single-chart {
        position: block;
        width: 80%;
        justify-content: space-around;
        margin: auto;
    }

    .circular-chart {
        display: block;
        margin: 10px auto;
        max-width: 80%;
        max-height: 80%;
    }

    .circle-bg {
        fill: none;
        stroke: #eee;
        stroke-width: 4;
    }

    .circle {
        fill: none;
        stroke-width: 3.2;
        stroke-linecap: round;
        animation: progress 1s ease-out forwards;
    }

    @keyframes progress {
        0% {
            stroke-dasharray: 0 100;
        }
    }

    .circular-chart.orange .circle {
        stroke: #3c9ee5;
    }

    .circular-chart.green .circle {
        stroke: #4cc790;
    }

    .circular-chart.blue .circle {
        stroke: #3c9ee5;
    }

    .circular-chart.hotpink .circle {
        stroke: hotpink;
    }

    .percentage {
        fill: white;
        font-size: 0.4em;
        text-anchor: middle;
    }

    .rank {
        width: 90px;
        height: 30px;
        background: linear-gradient(90deg, #B92B27 0%, #1565C0 100%);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        text-align: center;
    }

    .rank2 {
        width: 150px;
        height: 30px;
        background: linear-gradient(90deg, #B92B27 0%, #1565C0 100%);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        text-align: center;
    }

    .rank-text {

        font-weight: 900;
        font-size: 17px;
        line-height: 27px;
        align-items: center;
        color: #FFFFFF;
        line-height: 30px;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .progress2 {
        display: flex;
        height: 1rem;
        overflow: hidden;
        font-size: .75rem;
        background: rgba(99, 108, 132, 0.26);
        box-shadow: inset 0px 0px 68px rgba(255, 255, 255, 0.05), inset 0px 4px 4px rgba(255, 255, 255, 0.15);
        border-radius: 18px;
    }

    .progress-bar2 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        color: white;
        text-align: center;
        white-space: nowrap;
        background: linear-gradient(90deg, #12C2E9 0%, #C471ED 51.04%, #F64F59 100%);
        transition: width .6s ease;
        box-shadow: inset 0px 0px 68px rgba(255, 255, 255, 0.05), inset 0px 4px 4px rgba(255, 255, 255, 0.15);
    }

    .text-progress {
        position: absolute;
        max-width: 100%;
        font-weight: 900;
        font-size: 15px;
        line-height: 20px;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
        margin-top: 4px;
        margin-left: 17%;
    }

    .text-progress2 {
        position: absolute;
        max-width: 100%;
        font-weight: 900;
        font-size: 15px;
        line-height: 20px;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
        margin-top: 4px;
        margin-left: 15%;
    }

    .text-progress3 {
        position: absolute;
        max-width: 100%;
        font-weight: 900;
        font-size: 15px;
        line-height: 20px;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
        margin-top: 4px;
        margin-left: 16.5%;
    }
    </style>
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
                    <a class="nav-link textw " aria-current="page" href="../Home/">Home</a>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../Lesson/">Lesson</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../Lesson/Test">Exercise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw " href="../Lab/">Lab</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw active" href="../Rank/">Ranking</a>
                    </li>
                    <li><span style="padding-right:100px;"></span></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <a href="../Profile/"><img src="<?php echo $_SESSION['profile']; ?>"
                            style="border: 4px solid white;border-radius: 20px; width: 90px; height: 90px; object-fit: cover;"></a>
                </ul>
            </div>
        </nav>

    </div>

    <div style="margin-top: 200px;"></div>
    <div class="container">
        <center>
            <!-- <div class="text-center">
            <center>
                <div class="card text-center" style="border-radius: 20px; width: 18rem;">
                    <div style="width: 100%; height: 18rem;">
                        <img class="profile-img" src="<?php echo $_SESSION['profile']; ?>">
                    </div>
                    <div>
                        <a style="width: 95%;"
                            class="btn btn-custom btn-glow mt-2"><?php echo clean($_SESSION['username']); ?></a>
                    </div>
                    <div class="mt-2"></div>
                </div>
            </center>
        </div> -->

            <div style="max-width: 318px;">
                <img style="width: 318px;
                            height: 351px; 
                            object-fit: cover; 
                            border: 3px solid #FFFFFF;
                            border-radius: 19px;" src="<?php echo $_SESSION['profile']; ?>">
                <a style="width: 295px; position: relative; bottom: 75px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);font-weight: 900;
font-size: 20px; letter-spacing: 1px; text-shadow: none;" class="btn btn-custom mt-2"><?php echo clean($_SESSION['username']); ?></a>

            </div>

        </center>

    </div>
<br>
    <div class="text-center">
        <h1 class="text-white"><b class="text-white" style="font-family: 'Nunito'; font-style: normal;">EXERCISE</b>
        </h1>
    </div>
    <div class="container mt-5">
        <div class="card-bg">
            <div class="custom-card mt-3">
                <div class="row mt-3">
                    <div class="col-lg-3">
                        <img src="../public/img/rank/Ellipse_3.svg" width="100%">
                    </div>
                    <div style="width: 50px;"></div>
                    <div class="col-lg-8">
                        <h3 class="mt-5"><b class="text-white">Ranking</b></h3>
                        <?php
                                $point = account()->getPoint(2, $_SESSION['username']);
                                $rank = query("SELECT * FROM setting_rank WHERE id = ?", [1])->fetch();
                                if($point >= $rank['silver'] and $point < $rank['gold'] and $point < $rank['hacker']){
                                    echo '<div class="rank mt-4">
                                                <span class="rank-text">Noob</span>
                                            </div>';

                                }elseif($point >= $rank['gold'] and $point > $rank['silver'] and $point < $rank['hacker']){
                                    echo '<div class="rank2 mt-4">
                                                <span class="rank-text">Script Kiddie</span>
                                            </div>';

                                }elseif($point >= $rank['hacker'] and $point > $rank['silver'] and $point > $rank['gold']){
                                    echo '<div class="rank mt-4">
                                                <span class="rank-text">Hack</span>
                                            </div>';

                                }else{
                                    echo '<div class="rank mt-4">
                                                <span class="rank-text">Noob</span>
                                            </div>';
                                }
                                ?>

                        <div class="progress2 mt-5" style="height:30px;">
                            <div class="progress-bar2" style="width: <?php echo account()->checkPoint(2); ?>%;"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="text-progress">SQL Injection</div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-end text-white">
                        <span style="position: relative;bottom: 80px;"><?php echo account()->checkPoint(2); ?>%</span>
                    </div>
                </div>
            </div>
            <div class="custom-card mt-5">
                <div class="row mt-3">
                    <div class="col-lg-3">
                        <img src="../public/img/rank/Ellipse_2.svg" width="100%">
                    </div>
                    <div style="width: 50px;"></div>
                    <div class="col-lg-8">
                        <h3 class="mt-5"><b class="text-white">Ranking</b></h3>
                        <?php
                                $point = account()->getPoint(1, $_SESSION['username']);
                                $rank = query("SELECT * FROM setting_rank WHERE id = ?", [1])->fetch();
                                if($point >= $rank['silver'] and $point < $rank['gold'] and $point < $rank['hacker']){
                                    echo '<div class="rank mt-4">
                                                <span class="rank-text">Noob</span>
                                            </div>';

                                }elseif($point >= $rank['gold'] and $point > $rank['silver'] and $point < $rank['hacker']){
                                    echo '<div class="rank2 mt-4">
                                                <span class="rank-text">Script Kiddie</span>
                                            </div>';

                                }elseif($point >= $rank['hacker'] and $point > $rank['silver'] and $point > $rank['gold']){
                                    echo '<div class="rank mt-4">
                                                <span class="rank-text">Hack</span>
                                            </div>';

                                }else{
                                    echo '<div class="rank mt-4">
                                                <span class="rank-text">Noob</span>
                                            </div>';
                                }
                                ?>
                        <div class="progress2 mt-5" style="height:30px;">
                            <div class="progress-bar2" style="width: <?php echo account()->checkPoint(1); ?>%;"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="text-progress2">CROSS - SITE SCRIPTING</div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-end text-white">
                        <span style="position: relative;bottom: 80px;"><?php echo account()->checkPoint(1); ?>%</span>
                    </div>
                </div>

            </div>
            <div class="custom-card mt-5">
                <div class="row mt-3">
                    <div class="col-lg-3">
                        <img src="../public/img/rank/Ellipse_1.svg" width="100%">
                    </div>
                    <div style="width: 50px;"></div>
                    <div class="col-lg-8">
                        <h3 class="mt-5"><b class="text-white">Ranking</b></h3>
                        <?php
                                $point = account()->getPoint(3, $_SESSION['username']);
                                $rank = query("SELECT * FROM setting_rank WHERE id = ?", [1])->fetch();
                                if($point >= $rank['silver'] and $point < $rank['gold'] and $point < $rank['hacker']){
                                    echo '<div class="rank mt-4">
                                                <span class="rank-text">Noob</span>
                                            </div>';

                                }elseif($point >= $rank['gold'] and $point > $rank['silver'] and $point < $rank['hacker']){
                                    echo '<div class="rank2 mt-4">
                                                <span class="rank-text">Script Kiddie</span>
                                            </div>';

                                }elseif($point >= $rank['hacker'] and $point > $rank['silver'] and $point > $rank['gold']){
                                    echo '<div class="rank mt-4">
                                                <span class="rank-text">Hack</span>
                                            </div>';

                                }else{
                                    echo '<div class="rank mt-4">
                                                <span class="rank-text">Noob</span>
                                            </div>';
                                }
                                ?>
                        <div class="progress2 mt-5" style="height:30px;">
                            <div class="progress-bar2" style="width: <?php echo account()->checkPoint(3); ?>%;"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="text-progress3">WEB SECURITY</div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-end text-white">
                        <span style="position: relative;bottom: 80px;"><?php echo account()->checkPoint(3); ?>%</span>
                    </div>
                </div>

            </div>
            <div class="mt-3"></div>
        </div>

        <div class="text-center mt-5">
            <h1><b class="text-white">Lab</b></h1>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 text-center">
                <div class="card-bg2">

                    <div class="single-chart">
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg" d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <path class="circle"
                                stroke-dasharray="<?php echo account()->getLabPoint("xss", $_SESSION['username']); ?>, 100"
                                d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <text x="18" y="20.35"
                                class="percentage"><?php echo account()->getLabPoint("xss", $_SESSION['username']); ?>%</text>
                        </svg>
                    </div>
                </div>
                <h2 class="mt-4 text-white">Cross - Site Scripting</h2>
            </div>
            <div class="col-lg-4 text-center">
                <div class="card-bg2">

                    <div class="single-chart">
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg" d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <path class="circle"
                                stroke-dasharray="<?php echo account()->getLabPoint("sql", $_SESSION['username']); ?>, 100"
                                d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <text x="18" y="20.35"
                                class="percentage"><?php echo account()->getLabPoint("sql", $_SESSION['username']); ?>%</text>
                        </svg>
                    </div>
                </div>
                <h2 class="mt-4 text-white">SQL Injection</h2>
            </div>
            <div class="col-lg-4 text-center">
                <div class="card-bg2">

                    <div class="single-chart">
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg" d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <path class="circle"
                                stroke-dasharray="<?php echo account()->getLabPoint("security", $_SESSION['username']); ?>, 100"
                                d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <text x="18" y="20.35"
                                class="percentage"><?php echo account()->getLabPoint("security", $_SESSION['username']); ?>%</text>
                        </svg>
                    </div>
                </div>
                <h2 class="mt-4 text-white">Web Security</h2>
            </div>
        </div>


        <div style="margin-top:115px;"></div>
        <div class="text-center">
            <h1><b class="text-white">Secret Exercise </b></h1>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 text-center">
                <div class="card-bg2">

                    <div class="single-chart">
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <path class="circle" stroke-dasharray="<?php echo account()->checkPoint(4); ?>, 100" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <text x="18" y="20.35" class="percentage"><?php echo account()->checkPoint(4); ?>%</text>
                        </svg>
                    </div>
                </div>
                <h2 class="mt-4 text-white">Secret<br>Cross - Site Scripting</h2>
            </div>
            <div class="col-lg-4 text-center">
                <div class="card-bg2">

                    <div class="single-chart">
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <path class="circle" stroke-dasharray="<?php echo account()->checkPoint(5); ?>, 100" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <text x="18" y="20.35" class="percentage"><?php echo account()->checkPoint(5); ?>%</text>
                        </svg>
                    </div>
                </div>
                <h2 class="mt-4 text-white">Secret<br>SQL Injection</h2>
            </div>
            <div class="col-lg-4 text-center">
                <div class="card-bg2">

                    <div class="single-chart">
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <path class="circle" stroke-dasharray="<?php echo account()->checkPoint(6); ?>, 100" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <text x="18" y="20.35" class="percentage"><?php echo account()->checkPoint(6); ?>%</text>
                        </svg>
                    </div>
                </div>
                <h2 class="mt-4 text-white">Secret<br>Web Security</h2>
            </div>
        </div>

    </div>

    <!-- Parallax start -->
    <div class="parallax"></div>
    <!-- Parallax end -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../assets/js/bootstrap.bundle.min.js">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
