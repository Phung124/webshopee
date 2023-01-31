<?php

include 'db/connect.php';
 
$err=[];
if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
if(empty($email)){
    $err['email']='Bạn chưa nhập email ';
}
if(empty($password)){
    $err['password']='Bạn chưa nhập password ';
}


$sqli = "SELECT * FROM user WHERE email ='$email' ";
$query =mysqli_query($mysqli,$sqli);
$data = mysqli_fetch_assoc($query);
$checkEmail = mysqli_num_rows($query);
if($checkEmail==1){
    $checkPass =password_verify($password,$data['matkhau']);
    if($checkPass){
        $_SESSION['user'] =$data;
        header('location: index.php');
    }
    else{
        $err['password']='Sai mat khau ';
        echo "Sai mật khẩu";
    }
}else{
    $err['email']='Email không tồn tại hoặc sai mật khẩu ';
    echo "Email không tồn tại";
}
// var_dump($err);
// die();
//     $sql = "INSERT INTO user (ten,email,matkhau,sdt) VALUES ('$ten','$email','$password','$sdt')";
//     $query = mysqli_query($mysqli,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <style>
   #modal {
    position: fixed;
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    display: block;
    animation: headerNotifyGrowth linear 0.1s;
    z-index: 100;

}
.modal-body {
    position: relative;
    margin: auto;
    background: #fff;
    border-radius: 5px;
    animation: growth linear 0.1s;
}
        .has-error{
            color: red;
            font-size: 1rem;
        }
        .auth-form-group{
            display: block;
        }
        .auth-form{
            margin: 0 auto;
            
            min-height: 900px;
          
            

        }
        legend{
            font-size: 2rem;
            font-weight: 400;
            padding: 20px 5px 30px ;
            border-radius: 5px;
        }
        .auth-form-container{
            width: 300px;
            border: 1px solid #333;
            background-color: #fff;
            margin: 0px auto;
            margin-left: 600px;
            
        }

        .auth-form-group{
            padding-left: 20px;
            padding-bottom: 10px;
        }
        button{
            margin: 20px 0px 15px 10px;
            margin-top: 20px;
            background-color: orange;
            padding: 5px;
        }
    </style>
</head>
<body>
<div id="modal">
    <div class="modal-body">
<div class="auth-form">
                    <div class="auth-form-container">
                        <form action="" method="POST">
                       <legend>Đăng Nhập</legend>
                        
                       <div class="auth-form-group">
                                <label for="">Email</label><br>
                                <input type="email" class="auth-form-input" placeholder="Nhập email" name ="email">
                            <div class="has-error">
                                <span><?php echo(isset($err['email']))?$err['email']:'' ?></span>
                            </div>
                            </div>
                            <div class="auth-form-group">
                            <label for="">Nhập mật khẩu</label><br>
                                <input type="password" class="auth-form-input" placeholder="Nhập mật khẩu" name ="password">
                                <div class="has-error">
                                <span><?php echo(isset($err['password']))?$err['password']:'' ?></span>
                            </div>
                            </div>
                           
                            <button type="submit" name ="dangki" class="btn-primary">Đăng nhập</button>
         
                        </form>
                    </div>
                </div>
                </div>
                </div>

</body>
</html>