<?php
session_start();
include "config.php";
if(isset($_POST['btn']) ){

    $fullname = $_POST['fullname'];
    $masach = $_POST['masach'];
    $date = $_POST['date'];
    $expira = $_POST['expira'];
    $sql = "INSERT INTO borrower ( fullname, masach, date, expira) VALUES ( '$fullname', '$masach','$date', '$expira')";
    if (mysqli_query($conn, $sql)) {

        header("location:/danhsachborrower.php");

    }
    mysqli_close($conn);
}
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors= array();
    if(!empty($_POST['fullname'])){
        $fullname = $_POST['fullname'];
    }else{
        $errors[]='fullname_err';
    }
    if(!empty($_POST['masach'])){
        $masach =$_POST['masach'];
    }else{
        $errors[]='masach_err';
    }
    if(!empty($_POST['date'])){
        $date =$_POST['date'];
    }else{
        $errors[]='date_err';
    }
    if(!empty($_POST['expira'])){
        $expira =$_POST['expira'];
    }else{
        $errors[]='expira_err';
    }
    if(!empty($errors)){
        $mess = 'Đã xảy ra lỗi. Vui lòng kiểm tra lại';
        ?>
        <div class="alert">
            <?php echo $mess; ?>
        </div>
        <?php

    }else{

        $sql = "INSERT INTO borrower ( fullname, masach, date, expira) VALUES ( '$fullname', '$masach','$date', '$expira')";
        if (mysqli_query($conn, $sql)) {

            header("location:/danhsachborrower.php");

        }
        mysqli_close($conn);
        }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mượn sách</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/register.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="container">
    <div class="register-form">
        <form action="" method="post">
            <h1>Đăng ký mượn sách</h1>
            <div class="input-box">
                <input type="text" placeholder="Nhập họ và tên" name="fullname" >
                <?php if(!empty($errors)&& in_array('fullname_err',$errors)): ?>
                    <span class="errors"> Họ và tên không được để trống</span>
                <?php endif; ?>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Nhập mã sách" name="masach" >
                <?php if(!empty($errors)&& in_array('masach_err',$errors)): ?>
                    <span class="errors"> Mã sách không được để trống</span>
                <?php endif; ?>
            </div>
            <div class="input-box">
                <input type="date" placeholder="Ngày mượn" name="date">
                <?php if(!empty($errors)&& in_array('date_err',$errors)): ?>
                    <span class="errors"> Ngày mượn không được để trống</span>
                <?php endif; ?>

            </div>
            <div class="input-box">
                <input type="date" placeholder="Ngày trả" name="expira">
                <?php if(!empty($errors)&& in_array('expira_err',$errors)): ?>
                    <span class="errors"> Ngày trả không được để trống</span>
                <?php endif; ?>
            </div>

            <div class="btn-box">
                <button type="submit" name="btn" value="yes">
                    Đăng ký
                </button>
                <button type="submit"  value="yes">
                    <a href="danhsachborrower.php" class="btn1" style="text-decoration: none;color: #ffffff">Danh sách người mượn</a>
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>