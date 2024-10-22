<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký thêm sách</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/themsach.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
    require_once 'config.php';
    If(isset($_POST['add'])){
        $masach=$_POST['masach'];
        $img = $_FILES['img']['name'];
        $img_tmp_name = $_FILES['']['tmp_name'];
        $tensach=$_POST['tensach'];
        $tentacgia=$_POST['tentacgia'];
        $theloai=$_POST['theloai'];


    }
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $errors= array();
        if(!empty($_POST['masach'])){
            $masach = $_POST['masach'];
        }else{
            $errors[]='masach_err';
        }
        if(!empty($_POST['tensach'])){
            $tensach =$_POST['tensach'];
        }else{
            $errors[]='tensach_err';
        }
        if(!empty($_POST['tentacgia'])){
            $tentacgia =$_POST['tentacgia'];
        }else{
            $errors[]='tentacgia_err';
        }
        if(!empty($_POST['theloai'])){
            $theloai =$_POST['theloai'];
        }else{
            $errors[]='theloai_err';
        }
        if(!empty($errors)){
            $mess = 'Đã xảy ra lỗi. Vui lòng kiểm tra lại';
            ?>
            <div class="alert">
                <?php echo $mess; ?>
            </div>
            <?php

        }else{
            $sql = "SELECT * FROM sach WHERE masach ='$masach'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)==1){
                $_SESSION['add']=$masach;
                ?>
                <div class="alert">
                    Dữ liệu bị trùng. Vui lòng thay đổi
                </div>
                <?php
            }else{
                $sql = "INSERT INTO sach (masach, img, tensach, tentacgia, theloai) VALUES ('$masach', '$img','$tensach', '$tentacgia','$theloai')";
                if (mysqli_query($conn, $sql)) {
                    header("location:/danhmucsach.php");
                }
                mysqli_close($conn);
            }
        }

    }
?>

<div class="container">
    <div class="add1">
        <form action="" method="post" enctype="multipart/form-data">
            <h1>Đăng ký thêm sách</h1>
            <div class="input-box">
                <input type="text" placeholder="Mã sách" name="masach" >
                <?php if(!empty($errors)&& in_array('masach_err',$errors)): ?>
                <span class="errors"> Mã sách không được để trống</span>
                <?php endif; ?>
            </div>
            <div class="input-box">
                <input type="file" name="img" >
                <?php if(!empty($errors)&& in_array('masach_err',$errors)): ?>
                    <span class="errors"> Vui lòng thêm ảnh</span>
                <?php endif; ?>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Tên sách" name="tensach" >
                <?php if(!empty($errors)&& in_array('tensach_err',$errors)): ?>
                    <span class="errors"> Tên sách không được để trống</span>
                <?php endif; ?>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Tên tác giả" name="tentacgia">
                <?php if(!empty($errors)&& in_array('tentacgia_err',$errors)): ?>
                    <span class="errors"> Mã sách không được để trống</span>
                <?php endif; ?>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Thể loại" name="theloai">
                <?php if(!empty($errors)&& in_array('theloai_err',$errors)): ?>
                    <span class="errors"> Thể loại không được để trống</span>
                <?php endif; ?>
            </div>

            <div class="btn-box">
                <button type="submit" name="add">
                    Đăng ký
                </button>
                <button type="submit"  value="yes">
                    <a href="danhmucsach.php" class="btn1" style="text-decoration: none;color: #ffffff">Danh mục sách</a>
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>

