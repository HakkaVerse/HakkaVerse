<div class="col-lg-9" style="padding-top: 100px;">
    <div class="custom-border">
        <div class="container text-white" style="position: relative;">
            <div class="card" style="
                  background-color: #F0A500; 
                  height: 180px;">
            </div>
            <div class="row container">
                <div class="col-lg-3">
                    <img width="200" height="200" src="<?php echo $link . account()->getUser()['profile']; ?>" style="
                        border-radius: 50%; 
                        border: 5px solid white;
                        position: relative; 
                        bottom: 100px;
                        object-fit: cover;">
                </div>

                <div class="col-lg-5 mt-3">
                    <span style="font-size: 24px; padding-left: 30px;"><?php echo account()->getNickName(); ?></span>

                </div>
                <div class="col-lg-4 text-end mt-3">
                    <a href="?page=infomation"><button class="btn-custom-border" data-bs-toggle="modal" data-bs-target="#exampleModal2" style="width: 150px;">แก้ไขชื่อผู้ใช้</button></a>

                </div>

            </div>
            <div class="profile-card" style="position: relative; margin-top: -80px;">
                <div style="padding-left: 50px; padding-top: 18px; font-size: 18px;">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div>
                                เปลี่ยนรหัสผ่าน
                            </div>
                            <form action="action.php" method="post">
                                <input name="resetpassword" value="true" type="hidden">
                                <div class="mt-3">
                                    <input autocomplete="off" required type="password" type="password" name="pass1" class="input2" placeholder="รหัสผ่านเก่า...">
                                </div>
                                <div class="mt-3">
                                    <input autocomplete="off" required type="password" name="pass2" class="input2" placeholder="รหัสผ่านใหม่...">
                                </div>
                                <div class="mt-3">
                                    <input name="pass3" required type="password" class="input2" placeholder="ยืนยันรหัสผ่าน...">
                                </div>
                                <div class="mt-3">

                                    <div class="g-recaptcha" data-sitekey="6LeV8aYbAAAAAL-vjXHFWTAi7_yRc9BdFwHfb7Js"></div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn-custom-border" style="width: 150px;">บันทึก</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>