<?php

include 'config.php';
$this_id = $_GET['this_id'];
$sql = "SELECT * FROM sach WHERE id= ".$this_id;
$query= mysqli_query($conn, $sql);
$row= mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sửa thông tin sách</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/edit.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
If(isset($_POST['edit'])){
    $masach=$_POST['masach'];
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
        $sql = "SELECT * FROM sach WHERE masach ='$masach' and tensach='$tensach' and tentacgia='$tentacgia' and theloai= '$theloai'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            $_SESSION['add']=$masach;
            $_SESSION['add']=$tensach;
            $_SESSION['add']=$tentacgia;
            $_SESSION['add']=$theloai;
            ?>
            <div class="alert">
                Bạn chưa sửa thông tin. Vui lòng sửa đổi
            </div>
            <?php
        }else{
            $sql = "UPDATE sach SET masach='$masach', tensach='$tensach', tentacgia='$tentacgia', theloai= '$theloai' WHERE id=".$this_id;
            if (mysqli_query($conn, $sql)) {
                header("location:/danhmucsach.php");
            }
            mysqli_close($conn);
        }
    }

}
?>

<div class="container">
    <div class="edit">
        <form action="" method="post" enctype="multipart/form-data">
            <h1>Sửa thông tin sách</h1>
            <div class="input-box">
                <label for="">Mã Sách :</label>
                <input type="text"  name="masach" value="<?php echo $row['masach']?>" >
                <?php if(!empty($errors)&& in_array('masach_err',$errors)): ?>
                    <span class="errors"> Mã sách không được để trống</span>
                <?php endif; ?>
            </div>
            <div class="input-box">
                <label for="">Tên Sách :</label>
                <input type="text" name="tensach" value="<?php echo $row['tensach']?>">
                <?php if(!empty($errors)&& in_array('tensach_err',$errors)): ?>
                    <span class="errors"> Tên sách không được để trống</span>
                <?php endif; ?>
            </div>
            <div class="input-box">
                <label for="">Tên Tác giả :</label>
                <input type="text"name="tentacgia"value="<?php echo $row['tentacgia']?>">
                <?php if(!empty($errors)&& in_array('tentacgia_err',$errors)): ?>
                    <span class="errors"> Tên tác giả không được để trống</span>
                <?php endif; ?>

            </div>
            <div class="input-box">
                <label for="">Tên thể loại :</label>
                <input type="text" name="theloai"value="<?php echo $row['theloai']?>">
                <?php if(!empty($errors)&& in_array('theloai_err',$errors)): ?>
                    <span class="errors"> Thể loại không được để trống</span>
                <?php endif; ?>
            </div>

            <div class="btn-box">
                <button type="submit" name="edit" value="yes">
                    Sửa thông tin
                </button>
                <button type="submit" name="edit" value="yes">
                    <a href="danhmucsach.php" class="btn1" style="text-decoration: none;color: #ffffff">Danh mục sách</a>
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>


