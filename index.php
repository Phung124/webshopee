<?php
include_once('db/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/global.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/font/fontawesome-free-6.1.1-web/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <div id="wrapper">
    <header class="header">
            <div class="grid">
            <?php
        include('include/header.php');
        include('include/menu.php');
        ?>
                  
                
                
            </div>
        </header>
        <?php
       if(isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
       }else{
        $tam='';
       }
        if($tam=='Nam'){
        include('include/danhmuc.php');
        }
        elseif($tam=='chitietsanpham'){
            include('include/chitietsanpham.php');
        }
        elseif($tam=='product'){
            include('include/product.php');
        }
        elseif($tam=='giohang'){
            include('include/giohang.php');
        }
        elseif($tam=='adress'){
            include('include/adress.php');
        }
        elseif($tam=='momo'){
            include('include/momo.php');
        }
        else{
            include('include/home.php');
        }
       
       
        ?>
    <?php
        include('include/footer.php');
       
        ?>
        
       
        <!-- model -->
        <!-- model -->
        <div id="modal">
            <div class="modal-overlay">

            </div>
            <div class="modal-body">

                <!-- register form -->
                <div class="auth-form">
                    <div class="auth-form-container">
                        <div class="auth-form-header">
                            <h3 class="auth-form-heading">Đăng kí</h3>
                            <span id="adress_form1" class="auth-form-btn">Đăng nhập</span>
                        </div>
                        <div class="auth-form-form">
                            <div class="auth-form-group">
                                <input type="email" class="auth-form-input" placeholder="Nhập email">
                            </div>
                            <div class="auth-form-group">
                                <input type="password" class="auth-form-input" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="auth-form-group">
                                <input type="password" class="auth-form-input" placeholder="Nhập lại mật khẩu">
                            </div>
                            <div class="auth-form-group">
                                <input type="text" class="auth-form-input" placeholder="Nhập Sdt">
                            </div>
                        </div>
                        <div class="auth-form-auside">
                            <p class="auth-form-text">Bằng việc Đăng kí bạn đã đồng ý với shopee về
                                <a href="" class="auth-form-link">Điều khoảng dịch vụ</a>&
                                <a href="" class="auth-form-link">Chính sách bảo mật </a>
                            </p>
                        </div>
                        <div class="auth-form-cotrols">
                            <button id="comeback-register" class="btn">Trở lại</button>
                            <button class="btn-primary">Đăng kí</button>
                        </div>
                        <div class="auth-form-socials">
                            <a href="" class=" auth-form-socials-hover btn connect connect-fb"><i
                                    class="auth-form-socials-icon fa-brands fa-facebook-square"></i>Facebook</a>
                            <a href="" class="auth-form-socials-hover btn connect connect-gg"><i
                                    class="auth-form-socials-icon fa-brands fa-google"></i></i>Google</a>
                        </div>
                    </div>
                </div>

                <!-- login-form -->
                <div class="auth-form">
                    <div class="auth-form-container1">
                        <div class="auth-form-header">
                            <h3 class="auth-form-heading">Đăng nhập</h3>
                            <span id="adress_form-register1" class="auth-form-btn">Đăng kí</span>
                        </div>
                        <div class="auth-form-form">
                            <div class="auth-form-group">
                                <input type="email" class="auth-form-input" placeholder="Nhập email">
                            </div>

                            <div class="auth-form-group">
                                <input type="password" class="auth-form-input" placeholder="Nhập lại mật khẩu">
                            </div>

                        </div>
                        <div class="auth-form-auside">
                            <div class="auth-form-auside-login">
                                <a href="" class="auth-form-ausided-quen">Quên mật khẩu</a>
                                <span class="auth-form-auside-boder"></span>
                                <a href="" class="auth-form-ausided-help">Cần trợ giúp?</a>
                            </div>
                        </div>
                        <div class="auth-form-cotrols">
                            <button id="comeback-login" class="btn">Trở lại</button>
                            <button class="btn-primary">Đăng nhập</button>
                        </div>
                        <div class="auth-form-socials">
                            <a href="" class=" auth-form-socials-hover btn connect connect-fb"><i
                                    class="auth-form-socials-icon fa-brands fa-facebook-square"></i>Facebook</a>
                            <a href="" class="auth-form-socials-hover btn connect connect-gg"><i
                                    class="auth-form-socials-icon fa-brands fa-google"></i></i>Google</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./main.js"></script>
    <script src="./product.js"></script>

</body>

</html>