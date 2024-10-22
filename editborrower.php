<?php

include 'config.php';
$this_id = $_GET['this_id'];
$sql = "SELECT * FROM borrower WHERE id= ".$this_id;
$query= mysqli_query($conn, $sql);
$row= mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sửa thông tin người mượn sách</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/edit.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
If(isset($_POST['edit'])){
    $fullname=$_POST['fullname'];
    $masach=$_POST['masach'];
    $date=$_POST['date'];
    $expira=$_POST['expira'];



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
    if(!empty($_POST['fullname'])){
        $fullname =$_POST['fullname'];
    }else{
        $errors[]='fullname_err';
    }
    if(!empty($_POST['date'])){
        $date =$_POST['date'];
    }else{
        $errors[]='date_err';
    }
    if(!empty($_POST['expira'])){
        $theloai =$_POST['expira'];
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
        $sql = "SELECT * FROM borrower WHERE fullname ='$fullname'and masach ='$masach'and date ='$date' and expira ='$expira'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            $_SESSION['edit']=$fullname;
            $_SESSION['edit']=$masach;
            $_SESSION['edit']=$date;
            $_SESSION['edit']=$expira;
            ?>
            <div class="alert">
                Bạn chưa sửa thông tin. Vui lòng sửa đổi
            </div>
            <?php
        }else{
            $sql = "UPDATE borrower SET fullname='$fullname', masach='$masach', date='$date', expira= '$expira' WHERE id=".$this_id;
            if (mysqli_query($conn, $sql)) {
                header('location: danhsachborrower.php');
            }
            mysqli_close($conn);
        }
    }

}
?>

<div class="container">
    <div class="edit">
        <form action="" method="post" enctype="multipart/form-data">
            <h1>Sửa thông tin người mượn</h1>
            <div class="input-box">
                <label for="">Họ và tên :</label>
                <input type="text"  name="fullname" value="<?php echo $row['fullname']?>" >
                <?php if(!empty($errors)&& in_array('fullname_err',$errors)): ?>
                    <span class="errors"> Họ và tên không được để trống</span>
                <?php endif; ?>
            </div>
            <div class="input-box">
                <label for="">Mã sách :</label>
                <input type="text" name="masach" value="<?php echo $row['masach']?>">
                <?php if(!empty($errors)&& in_array('masach_err',$errors)): ?>
                    <span class="errors"> Mã sách không được để trống</span>
                <?php endif; ?>
            </div>
            <div class="input-box">
                <label for="">Ngày mượn :</label>
                <input type="date"name="date" value="<?php echo $row['date']?>">
                <?php if(!empty($errors)&& in_array('date_err',$errors)): ?>
                    <span class="errors"> Ngày mượn không được để trống</span>
                <?php endif; ?>

            </div>
            <div class="input-box">
                <label for="">Ngày hết hạn :</label>
                <input type="date" name="expira" value="<?php echo $row['expira']?>">
                <?php if(!empty($errors)&& in_array('expira_err',$errors)): ?>
                    <span class="errors"> Ngày hết hạn không được để trống</span>
                <?php endif; ?>
            </div>

            <div class="btn-box">
                <button type="submit" name="edit" value="yes">
                    Sửa thông tin
                </button>
                <button type="submit" name="" value="yes">
                    <a href="danhsachborrower.php" class="btn1" style="text-decoration: none;color: #ffffff">Danh sách người mượn</a>
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>


