<?php
require_once("header.php");
?>
<div class="container">
    <div class="mt-3">
        <div class="">
            <div class="container mt-3">
                <div class="text-center text-light">
                    <h2>ข้อมูลผู้ใช้</h2>
                    <center>
                        <hr style="width: 150px; height: 2px; margin-top: 5px;">
                    </center>
                </div>
                <div class="row justify-content-lg-center text-light">
                    <div class="col-lg-6">
                        <form action="action/action.php" method="post">
                            <div class="text-center">
                                <input name="searchuser" class="form-control mt-3 bg-dark text-white"
                                    placeholder="Username or Email" autocomplete="off">
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary">ค้นหา</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-3 text-light">
                    <hr>
                    <div class="row justify-content-center">
                        <?php
                            if(isset($_SESSION['edituser'])){
                                $user = $_SESSION['edituser'];
                            
                            
                            ?>
                        <div class="col-lg-6">
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <form action="action/action.php" method="post">
                                        <input type="hidden" value="<?php echo $user['id']; ?>" name="edituser">
                                        <div class="mt-3">
                                            <label>ชื่อผู้ใช้</label>
                                            <input class="form-control bg-dark text-white"
                                                value="<?php echo clean($user['username']); ?>" disabled>
                                        </div>
                                        <div class="mt-3">
                                            <label>อีเมล</label>
                                            <input class="form-control bg-dark text-white"
                                                value="<?php echo clean($user['email']); ?>" disabled>
                                        </div>
                                        <div class="mt-3">
                                            <label>เข้าใช้งานเมื่อวันที่</label>
                                            <input class="form-control bg-dark text-white"
                                                value="<?php echo $user['date']; ?>" disabled>
                                        </div>
                                        <input name="point" class="form-control bg-dark text-white" type="hidden"
                                            value="<?php echo $user['point']; ?>">
                                        <!-- <div class="mt-3">
                                            <label>Group</label>
                                            <select name="group" class="form-control bg-dark text-light">
                                                <option value="<?php echo $user['group']; ?>">-
                                                    <?php echo $user['group']; ?> -</option>
                                                <option value="member">Member</option>
                                                <option value="vip">VIP</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                        <div class="mt-3 text-center">
                                            <button type="submit" class="btn btn-primary">Save</button>

                                        </div>-->

                                    </form>
                                    <div class="mt-3"></div>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <p>คะแนนข้อสอบ</p>
                            </div>
                            <div class="mt-2">
                                <div class="progress mt-1" style="height: 5px;">
                                    <div class="progress-bar bg-secondary" role="progressbar"
                                        style="width: 100%; font-size: 17px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <p class="mt-2">
                                    Cross - Site Sscripting: <b
                                        style="color: orange;"><?php echo account()->getPoint(1, $user['username']); ?></b>
                                    คะแนน<br>
                                    SQL Injection: <b
                                        style="color: orange;"><?php echo account()->getPoint(2, $user['username']); ?></b>
                                    คะแนน<br>
                                    WEB SECURITY: <b
                                        style="color: orange;"><?php echo account()->getPoint(3, $user['username']); ?></b>
                                    คะแนน<br><br>
                                    Secret Cross - Site Sscripting: <b
                                        style="color: orange;"><?php echo account()->getPoint(4, $user['username']); ?></b>
                                    คะแนน<br>
                                    Secret SQL Injection: <b
                                        style="color: orange;"><?php echo account()->getPoint(5, $user['username']); ?></b>
                                    คะแนน<br>
                                    Secret WEB SECURITY: <b
                                        style="color: orange;"><?php echo account()->getPoint(6, $user['username']); ?></b>
                                    คะแนน
                                </p>
                                <div class="progress mt-1" style="height: 5px;">
                                    <div class="progress-bar bg-secondary" role="progressbar"
                                        style="width: 100%; font-size: 17px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="text-center">
                                    <p>แลปทดลอง</p>

                                </div>
                                <div class="mt-3">
                                    <label>แลป XSS: <b
                                            style="color: orange;"><?php echo account()->getLabPoint("xss", $user['username']); ?>%</b></label>
                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: <?php echo account()->getLabPoint("xss", $user['username']); ?>%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                                <div class="mt-3">
                                    <label>แลป SQL Injection: <b
                                            style="color: orange;"><?php echo account()->getLabPoint("sql", $user['username']); ?>%</b></label>
                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: <?php echo account()->getLabPoint("sql", $user['username']); ?>%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                                <div class="mt-3">
                                    <label>แลป Cyber Security: <b
                                            style="color: orange;"><?php echo account()->getLabPoint("security", $user['username']); ?>%</b></label>
                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: <?php echo account()->getLabPoint("security", $user['username']); ?>%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                                <div class="mt-5"></div>
                            </div>

                            <div class="text-center">
                                <p>Skill Chart</p>

                            </div>


                            <link href="skill.css" rel="stylesheet">

                            <div class="custom-border">

                                <div style="position: relative;">
                                    <div class="chart skills"></div>
                                    <div class="container">
                                        <div class="text-center" style="font-size: 16px;">
                                            <hr>
                                            <span class="text-white" id="text"></span>
                                        </div><br>

                                    </div>

                                </div>
                            </div>


                            <script>
                            <?php
        $user = query("SELECT * FROM user WHERE username=?", [$user['username']])->fetch();
        $skill_1 = 0;
        if($user['skill_1'] > 100){
            $skill_1 = 100;
        }else{
            $skill_1 = number_format($user['skill_1'], 2, ".", "");
        }
        $skill_2 = 0;
        if($user['skill_2'] > 100){
            $skill_2 = 100;
        }else{
            $skill_2 = number_format($user['skill_2'], 2, ".", "");
        }
        $skill_3 = 0;
        if($user['skill_3'] > 100){
            $skill_3 = 100;
        }else{
            $skill_3 = number_format($user['skill_3'], 2, ".", "");
        }
        $skill_4 = 0;
        if($user['skill_4'] > 100){
            $skill_4 = 100;
        }else{
            $skill_4 = number_format($user['skill_4'], 2, ".", "");
        }
        $skill_5 = 0;
        if($user['skill_5'] > 100){
            $skill_5 = 100;
        }else{
            $skill_5 = number_format($user['skill_5'], 2, ".", "");
        }
        $skill_6 = 0;
        if($user['skill_6'] > 100){
            $skill_6 = 100;
        }else{
            $skill_6 = number_format($user['skill_6'], 2, ".", "");
        }
        $skill_7 = 0;
        if($user['skill_7'] > 100){
            $skill_7 = 100;
        }else{
            $skill_7 = number_format($user['skill_7'], 2, ".", "");
        }
        $skill_8 = 0;
        if($user['skill_8'] > 100){
            $skill_8 = 100;
        }else{
            $skill_8 = number_format($user['skill_8'], 2, ".", "");
        }
        ?>
                            kindChart($('.chart.skills'), {
                                web: '#EEEEEE',
                                labels: [
                                    "<?php echo query("SELECT * FROM skill_chart WHERE id=?", [1])->fetch()["name"]; ?>",
                                    "<?php echo query("SELECT * FROM skill_chart WHERE id=?", [2])->fetch()["name"]; ?>",
                                    "<?php echo query("SELECT * FROM skill_chart WHERE id=?", [3])->fetch()["name"]; ?>",
                                    "<?php echo query("SELECT * FROM skill_chart WHERE id=?", [4])->fetch()["name"]; ?>",
                                    "<?php echo query("SELECT * FROM skill_chart WHERE id=?", [5])->fetch()["name"]; ?>",
                                    "<?php echo query("SELECT * FROM skill_chart WHERE id=?", [6])->fetch()["name"]; ?>",
                                    "<?php echo query("SELECT * FROM skill_chart WHERE id=?", [7])->fetch()["name"]; ?>",
                                    "<?php echo query("SELECT * FROM skill_chart WHERE id=?", [8])->fetch()["name"]; ?>"
                                ],
                                datasets: [ // 0 being farthest back, 1 being closest
                                    /*{
                                        label: 'Level of Interest',
                                        fillColor: "rgba(255,255,255,1)",
                                        strokeColor: "rgba(255,255,255,1)",
                                        data: [100, 70, 85, 90, 95, 75, 90, 100]
                                    },*/
                                    {
                                        label: 'Skill Chart',
                                        fillColor: "rgba(255,255,255,.55)",
                                        strokeColor: "rgba(255,255,255,.55)",
                                        data: [<?php echo $skill_1; ?>, <?php echo $skill_2; ?>,
                                            <?php echo $skill_3; ?>, <?php echo $skill_4; ?>,
                                            <?php echo $skill_5; ?>, <?php echo $skill_6; ?>,
                                            <?php echo $skill_7; ?>, <?php echo $skill_8; ?>
                                        ]
                                    }
                                ]
                            });










                            var go = true;
                            if (window.location.hash == '#demo') {
                                setTimeout(function() {
                                    go = false;
                                }, 9500);
                            }


                            // Heavy lifting

                            function kindChart(element, options) {
                                var svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                                svg.setAttribute('height', '100%');
                                svg.setAttribute('width', '100%');
                                svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
                                svg.setAttribute('preserveAspectRatio', 'none');
                                svg.setAttribute('viewBox', '-25 -10 150 127');
                                var select_circle = [];

                                var colors = ['97,193,145', '43,176,212', '43,82,202', '193,52,52', '177,193,52',
                                    '137,45,193', '202,128,33', '197,27,128'
                                ];

                                element.append('<ul class="values"></ul>');
                                element.append('<div class="out"><ul></ul></div>');

                                function getColor(passed) {
                                    if (passed == undefined) {
                                        return 'rgba(' + colors[Math.floor((Math.random() * colors.length) + 0)] +
                                            ',1)';
                                    } else {
                                        return passed;
                                    }
                                }

                                function findNewPoint(angle, distance) {
                                    distance = distance / 2;
                                    angle = angle + 270;
                                    result = {};

                                    result.y = Math.round(Math.sin(angle * Math.PI / 180) * distance + 50);
                                    result.x = Math.round(Math.cos(angle * Math.PI / 180) * distance + 50);
                                    return result;
                                }


                                for (var i = 0; i < options.datasets.length; i++) {
                                    var paths = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                                    var webLine = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                                    var webstream = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                                    var path = '';
                                    var web = '';
                                    var websteam_lines = [];
                                    var webstream_ends = [];
                                    var texts = [];



                                    //element.find('ul.values').append('<li style="color: ' + getColor(options.datasets[i].strokeColor) + ';">' + options.datasets[i].label + '</li>');

                                    for (var x = 0; x < options.datasets[i].data.length; x++) {


                                        if (x == 0) {
                                            var type = 'M';
                                            var addition = '';
                                        } else if (x == options.datasets[i].data.length - 1) {
                                            var addition = 'Z';
                                            var type = 'L';
                                        } else {
                                            var type = 'L';
                                            var addition = '';
                                        }

                                        var point = findNewPoint(((360 / options.datasets[i].data.length) * x), options
                                            .datasets[i].data[x]);

                                        var web_points = findNewPoint(((360 / options.datasets[i].data.length) * x),
                                            100);

                                        web += ' M50 50 L' + web_points.x + ' ' + web_points.y;

                                        path += type + point.x + ' ' + point.y + ' ' + addition;

                                        for (var l = 0; l < 5; l++) {
                                            var stream_point = findNewPoint(((360 / options.datasets[i].data.length) *
                                                x), ((l + 1) * 20));
                                            if (x == 0) {
                                                websteam_lines[l] = ' M' + stream_point.x + ' ' + stream_point.y;
                                                webstream_ends[l] = ' L' + stream_point.x + ' ' + stream_point.y;
                                            } else if (x == options.datasets[i].data.length - 1) {
                                                //console.log(x);
                                                websteam_lines[l] += ' L' + stream_point.x + ' ' + stream_point.y +
                                                    webstream_ends[l];
                                            } else {
                                                websteam_lines[l] += ' L' + stream_point.x + ' ' + stream_point.y;
                                            }

                                        }

                                        //console.log(websteam_lines[0]);
                                    }

                                    webLine.setAttribute('d', web);
                                    webLine.setAttribute('stroke', options.web);
                                    webLine.setAttribute('stroke-width', '0.1');

                                    paths.setAttribute('d', path);
                                    paths.setAttribute('class', 'jumpIn');
                                    paths.setAttribute('fill', options.datasets[i].fillColor);
                                    paths.setAttribute('stroke', options.datasets[i].strokeColor);
                                    paths.setAttribute('stroke-width', '0.25');


                                    var full_stream_lines = '';
                                    for (var l = 0; l < websteam_lines.length; l++) {
                                        full_stream_lines += websteam_lines[l];
                                    }
                                    //console.log(full_stream_lines);

                                    webstream.setAttribute('d', full_stream_lines);
                                    webstream.setAttribute('stroke', options.web);
                                    webstream.setAttribute('stroke-width', '0.2');
                                    webstream.setAttribute('fill', 'none');

                                    svg.appendChild(webLine);
                                    svg.appendChild(webstream);
                                    svg.appendChild(paths);

                                    select_circle[i] = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
                                    svg.appendChild(select_circle[i]);
                                }

                                for (var x = 0; x < options.datasets[0].data.length; x++) {
                                    var texts = document.createElementNS('http://www.w3.org/2000/svg', 'text');
                                    var text = findNewPoint(((360 / options.datasets[0].data.length) * x), 113 + (((
                                        360 / options.datasets[0].data.length) * x)) / 90);
                                    if (x == 2) {
                                        texts.setAttribute('x', text.x + 4);

                                    } else if (x == 6) {
                                        texts.setAttribute('x', text.x - 2);

                                    } else {
                                        texts.setAttribute('x', text.x);

                                    }
                                    texts.setAttribute('y', text.y);
                                    texts.setAttribute('text-anchor', 'middle');
                                    texts.textContent = options.labels[x];
                                    texts.setAttribute('font-size', '3');
                                    texts.setAttribute('fill', options.web);
                                    svg.appendChild(texts);
                                }

                                element.append(svg);

                                element.mousemove(function(e) {
                                    if (go == true) {
                                        var objLeft = $(this).offset().left;
                                        var objTop = $(this).offset().top;

                                        var objCenterX = objLeft + $(this).width() / 2;
                                        var objCenterY = objTop + $(this).height() / 2;

                                        var angle = Math.atan2(e.pageX - objCenterX, -(e.pageY - objCenterY)) *
                                            (180 / Math.PI);

                                        var angles = 360 / options.labels.length;
                                        n = angles * (Math.round(angle / angles));
                                        var out = n / (360 / options.labels.length);
                                        if (out == options.labels.length) {
                                            out = 0;
                                        }
                                        if (out < 0) {
                                            out = options.labels.length + out;
                                        }

                                        $(this).find('.out').css({
                                            left: (e.pageX - objLeft) + 40,
                                            top: (e.pageY - objTop) - 14
                                        });

                                        var outtext = '';
                                        for (var i = 0; i < options.datasets.length; i++) {
                                            outtext += '<li style="color: ' + options.datasets[i].strokeColor +
                                                ';">' + options.datasets[i].label + ': ' + options.datasets[i]
                                                .data[out] + '%</li><hr>';

                                            var pointl = findNewPoint(((360 / options.datasets[i].data.length) *
                                                out), options.datasets[i].data[out] + 1.75);

                                            select_circle[i].setAttribute('r', '1.25');
                                            select_circle[i].setAttribute('cx', pointl.x);
                                            select_circle[i].setAttribute('cy', pointl.y);
                                            select_circle[i].setAttribute('fill', options.datasets[i]
                                                .strokeColor);

                                        }

                                        $('#text').html(options.labels[out] + outtext);
                                    }
                                });
                                element.mouseout(function(e) {
                                    $(this).find('.out').css({
                                        left: 0,
                                        top: 0
                                    });
                                    $(this).find('.out ul').html('');
                                });
                            }
                            </script>
                        </div>
                        <?php 
                        unset($_SESSION['edituser']);
                        } ?>



                        <div class="col-lg-6">
                            <table class="table text-white text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ชื่อผู้ใช้</th>
                                        <th scope="col">อีเมล</th>
                                        <th scope="col">คะแนน</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $user = query("SELECT * FROM user order by point DESC")->fetchAll();
                                arsort($user);
                                if(count($user) < 100){
                                    $a = count($user);
                                }else{
                                    $a = 100;
                                }
                                for($i=0;$i < $a;$i++){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo ($i + 1); ?></th> 
                                    <td><?php echo clean($user[$i]['username']); ?></td>
                                    <td><?php echo clean($user[$i]['email']); ?></td>
                                    <td><?php echo $user[$i]['point']; ?></td> 
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once("footer.php");
?>