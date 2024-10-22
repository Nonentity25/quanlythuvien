<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký tài khoản mới</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/register.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<?php
    require_once 'config.php';
    If(isset($_POST['btn'])){
        $email = $_POST['email'];
        $password = ($_POST['password']);
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
    }
    ?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $errors= array();
        if(!empty($_POST['email'])){
            $email = $_POST['email'];
        }else{
            $errors[]='email_err';
        }
        if(!empty($_POST['password'])){
            $password =$_POST['password'];
        }else{
            $errors[]='password_err';
        }
        if(!empty($_POST['fullname'])){
            $fullname =$_POST['fullname'];
        }else{
            $errors[]='fullname_err';
        }
        if(!empty($_POST['phone'])){
            $phone =$_POST['phone'];
        }else{
            $errors[]='phone_err';
        }
        if(!empty($errors)){
            $mess = 'Đã xảy ra lỗi. Vui lòng kiểm tra lại';
            ?>
            <div class="alert">
                <?php echo $mess; ?>
            </div>
            <?php

        }else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "SELECT * FROM bookborrower WHERE email ='$email' or phone= '$phone'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)==1){
                $_SESSION['btn']=$email;
                $_SESSION['btn']=$phone;
                ?>
                <div class="alert">
                    Dữ liệu bị trùng. Vui lòng thay đổi
                </div>
                <?php
            }else{
                $sql = "INSERT INTO bookborrower (fullname, email, phone, password) VALUES ('$fullname', '$email','$phone', '$hash')";
                if (mysqli_query($conn, $sql)){
                    header("location:/login.php");
                }

                mysqli_close($conn);

            }
        }

    }
?>

<div class="container">
    <div class="register-form">
        <form action="" method="post">
            <h1>Đăng ký tài khoản mới</h1>
            <div class="input-box">
                <input type="text" placeholder="Nhập email" name="email" >
                <?php if(!empty($errors)&& in_array('email_err',$errors)): ?>
                    <span class="errors"> Email không được để trống</span>
                <?php endif; ?>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Nhập mật khẩu" name="password" >
                <?php if(!empty($errors)&& in_array('password_err',$errors)): ?>
                    <span class="errors"> Password không được để trống</span>
                <?php endif; ?>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Họ và tên" name="fullname">
                <?php if(!empty($errors)&& in_array('fullname_err',$errors)): ?>
                    <span class="errors"> Fullname không được để trống</span>
                <?php endif; ?>
            </div>
            <div class="input-box">
                <input type="tel" id="phone" name="phone" placeholder="Nhập số điện thoại" pattern="[0-9]{10}" required><br><br>
                <?php if(!empty($errors)&& in_array('phone_err',$errors)): ?>
                    <span class="errors"> Số điện thoại không được để trống</span>
                <?php endif; ?>
            </div>

            <div class="btn-box">
                <button type="submit" name="btn">
                    Đăng ký
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>

