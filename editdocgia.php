<?php

include 'config.php';
$this_id = $_GET['this_id'];
$sql = "SELECT * FROM bookborrower WHERE id= ".$this_id;
$query= mysqli_query($conn, $sql);
$row= mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sửa thông tin độc giả</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/edit.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
If(isset($_POST['edit'])){
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];


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
        $Fullname =$_POST['fullname'];
    }else{
        $errors[]='fullname_err';
    }
    if(!empty($_POST['phone'])){
        $Phone =$_POST['phone'];
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
        $sql = "SELECT * FROM bookborrower WHERE email ='$email' and phone= '$Phone' and fullname='$fullname' and password= '$password'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            $_SESSION['btn']=$email;
            $_SESSION['btn']=$Phone;
            $_SESSION['btn']=$fullname;
            $_SESSION['btn']=$password;
            ?>
            <div class="alert">
                Bạn chưa thay đổi dữ liệu. Vui lòng thay đổi
            </div>
            <?php
        }else{
            $sql = "UPDATE bookborrower SET fullname='$fullname', email='$email', phone='$phone', password= '$password' WHERE id=".$this_id;
            if (mysqli_query($conn, $sql)) {
                header('location: danhsachdocgia.php');
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
                <label for="">Họ và tên :</label>
                <input type="text"  name="fullname" value="<?php echo $row['fullname']?>" >
                <?php if(!empty($errors)&& in_array('fullname_err',$errors)): ?>
                    <span class="errors"> Họ và tên không được để trống</span>
                <?php endif; ?>
            </div>
            <div class="input-box">
                <label for="">Email :</label>
                <input type="text" name="email" value="<?php echo $row['email']?>">
                <?php if(!empty($errors)&& in_array('email_err',$errors)): ?>
                    <span class="errors">Email không được để trống</span>
                <?php endif; ?>
            </div>
            <div class="input-box">
                <label for="">Số điện thoại :</label>
                <input type="text"name="phone"value="<?php echo $row['phone']?>">
                <?php if(!empty($errors)&& in_array('phone_err',$errors)): ?>
                    <span class="errors"> Số điện thoại không được để trống</span>
                <?php endif; ?>

            </div>
            <div class="input-box">
                <label for="">Password :</label>
                <input type="text" name="password"value="<?php echo $row['password']?>">
                <?php if(!empty($errors)&& in_array('password_err',$errors)): ?>
                    <span class="errors"> Password không được để trống</span>
                <?php endif; ?>
            </div>

            <div class="btn-box">
                <button type="submit" name="edit" value="yes">
                    Sửa thông tin
                </button>
                <button type="submit" name="edit" value="yes">
                    <a href="danhsachdocgia.php" class="btn1" style="text-decoration: none;color: #ffffff">Danh sách Độc giả</a>
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>


