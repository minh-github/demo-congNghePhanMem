<body>
<div class="body-wrapper">
    <div class="ltn__utilize-overlay"></div>

    <!-- LOGIN AREA START (Register) -->
    <div class="ltn__login-area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center" style="margin-top: 50px;">
                        <h1 class="section-title">Đăng Ký Tài Khoản</h1>
                    </div>
                    <?php 
                        if(isset($_GET['message'])){
                            echo '<div style="text-align:center; color:red;">'.$_GET['message'].'</div>';
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-login-inner">
                        <form action="<?php echo WEB_ROOT;?>/admin/create/" class="ltn__form-box contact-form-box" enctype="multipart/form-data" method="post" id="registerForm">
                            <input type="text" name="username" placeholder="Tên đăng nhập">
                            <input type="text" name="name" placeholder="Họ và Tên*">
                            <input type="text" name="phone" placeholder="Số điện thoại*">
                            <input type="text" name="email" placeholder="Email*">
                            <input type="password" name="password" placeholder="Mật khẩu*">
                            <input type="file" name="image" hidden id="image"  accept="image/*" style="margin-bottom: 30px;">
                            <label for="image" style="margin-bottom: 30px; width: 100%;"><div class="theme-btn-1 btn btn-iamge-color" style="width:100%;" type="submit">Ảnh đại diện</div></label>
                            <input type="text" hidden name="role" value="2">
                            <div class="flex flex-chosse-area">
                                <select class="province" name="tinh" form="registerForm">
                                </select>
                                <select class="wards" name="huyen" form="registerForm">
                                </select>
                            </div>
                            <?php if(isset($_SESSION['role']) && $_SESSION['role'] == '1'){
                                echo'
                                <div class="flex" style="margin-top:30px;">
                                    <select class="wards" name="role" form="registerForm">
                                        <option>2</option>
                                        <option>1</option>
                                    </select>
                                </div>';
                            }?>
                            <div class="btn-wrapper">
                                <button class="theme-btn-1 btn reverse-color btn-block" type="submit">TẠO TÀI KHOẢN</button>
                            </div>
                        </form>
                        <div class="by-agree text-center">
                            <div class="go-to-btn mt-50">
                                <p>BẠN ĐÃ CÓ TÀI KHOẢN? <a href="<?php echo WEB_ROOT;?>/admin/" style="color:red;"> ĐĂNG NHẬP</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo WEB_ROOT;?>/public/assets/js/province.js"></script>
<!-- Body main wrapper end -->