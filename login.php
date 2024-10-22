<?php
session_start();
include 'config.php';
if(isset($_POST['submit']) ) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $hash = password_hash($Password, PASSWORD_DEFAULT);
    $sql1 = "SELECT * FROM librarian WHERE username ='$Username' and password='$Password'";
    $sql2 = "SELECT * FROM bookborrower WHERE email ='$Username' and password='$hash'";
    $result1 = mysqli_query($conn,$sql1);
    $result2 = mysqli_query($conn,$sql2);
    if(mysqli_num_rows($result1)==1){
        $_SESSION['login']=$Username;
        header("location:/librarian.php");
    }elseif(mysqli_num_rows($result2)==1){
        header("location:/bookborrower.php");
    }
    else{
        ?>
        <div class="errors">
            <?php echo "Tài khoản hoặc mật khẩu sai."; ?>
        </div>
        <?php
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<div class="container" >
    <div class="login-form">
        <form action="" method="post" style="border: none">
            <h1>Đăng nhập</h1>
            <div class="input-box">
                <input type="text" placeholder="Nhập username" name="Username">
            </div>
            <div class="input-box">
                <input type="password" placeholder="Nhập mật khẩu" name="Password">
            </div>
            <div class="btn-box">
                <button type="submit" name="submit" value="yes">
                    Đăng nhập
                </button>

            </div>
        </form>
    </div>
</div>
</body>
</html>
