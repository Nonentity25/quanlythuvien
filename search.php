
<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Danh mục sách</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/search.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/fontawesome-free-6.1.1-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<section>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid" id="cf">
            <a class="navbar-brand" href="javascript:void(0)">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="librarian.php">Giới thiệu </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Hồ sơ tài liệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Trợ giúp</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Danh mục
                            sách</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Tác giả</a></li>
                            <li><a class="dropdown-item" href="#">Thể loại</a></li>
                            <li><a class="dropdown-item" href="#">Sách mới</a></li>

                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Trợ giúp</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-light" type="button"><a class="nav-link" href="logout.php">Đăng xuất</a></button>

                </form>
            </div>
        </div>
    </nav>


</section>
<main>

    <section>
        <br>
        <div class="row">
            <div class="col-3">
                <div class="accordion" >
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Quản lý sách
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <a class="dropdown-item"  href="danhmucsach.php"><i class="fa-solid fa-book-medical"></i> Danh mục sách</a>
                                <a class="dropdown-item"  href="themsach.php"><i class="fa-solid fa-plus"></i> Thêm sách</a>
                                <a class="dropdown-item"  href="#"><i class="fa-solid fa-qrcode"></i> In mã vạch sách</a>


                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Quản lý độc giả
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <a class="dropdown-item"  href="danhsachdocgia.php"><i class="fa-solid fa-list-ul"></i> Thông tin độc giả</a>
                                <a class="dropdown-item"  href="danhsachborrower.php"><i class="fa-solid fa-list-ul"></i> Thông tin người mượn sách</a>
                                <a class="dropdown-item"  href="#"><i class="fa-solid fa-address-card"></i> In thẻ thư viện</a>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Quản lý mượn trả
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <a class="dropdown-item"  href="muonsach.php"><i class="fa-solid fa-share-from-square"></i> Mượn sách</a>
                                <a class="dropdown-item"  href="danhsachborrower.php"><i class="fa-solid fa-retweet"></i> Trả sách</a>
                                <a class="dropdown-item"  href="#"><i class="fa-solid fa-user"></i> Độc giả mượn quá hạn</a>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Tra cứu
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <a class="dropdown-item"  href="search.php"><i class="fa-solid fa-magnifying-glass"></i> Tra cứu sách</a>
                                <a class="dropdown-item"  href="search.php"><i class="fa-solid fa-magnifying-glass-plus"></i> Tra cứu độc giả</a>
                                <a class="dropdown-item"  href="search.php"><i class="fa-brands fa-searchengin"></i> Tra cứu tình hình mượn trả</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-9" >
                <form method='post'>
                    <input type="text" name="search" placeholder="Search..">
                    <button type="submit" name="submit" id="btn"><i class="fa fa-search"></i></button>
                </form>
                <br>
                <?php
                include 'config.php';
                if(isset($_POST['submit']) ) {
                    $search = $_POST['search'];
                    $sql1 = "SELECT * FROM sach WHERE tensach LIKE '%$search%' or masach LIKE '%$search%' or tentacgia LIKE '%$search%' or theloai LIKE '%$search%'";
                    $sql2 = "SELECT * FROM bookborrower WHERE fullname LIKE '%$search%' or phone LIKE '%$search%'";
                    $sql3 = "SELECT * FROM borrower WHERE fullname LIKE '%$search%' ";


                    $result1 = mysqli_query($conn,$sql1);
                    $result2 = mysqli_query($conn,$sql2);
                    $result3 = mysqli_query($conn,$sql3);
                    if(mysqli_num_rows($result1)==1){
                        $row1 = mysqli_fetch_array($result1);?>
                        <h1>Thông tin sách vừa tìm kiếm</h1>
                        <table class="table table-bordered">
                            <thead>
                            <tr>


                                <th >Mã sách</th>
                                <th>Tên sách</th>
                                <th>Tên tác giả</th>
                                <th>Thể loại</th>

                                <th >Xóa</th>
                                <th >Sửa</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $row1['masach'] ?></td>
                                    <td><?php echo $row1['tensach'] ?></td>
                                    <td><?php echo $row1['tentacgia'] ?></td>
                                    <td><?php echo $row1['theloai'] ?></td>
                                    <td style="background:#009999;"> <a href="xoasach.php?this_id=<?php echo $row1['id']?>" onclick="return confirm('Xóa Sách')"style="color:white;text-decoration: none;">Xóa</a></td>
                                    <td style="background:#009999;"> <a href="editsach.php?this_id=<?php echo $row1['id']?>" style="color:white;text-decoration: none;">Sửa</a></td>

                                </tr>
                            </tbody>
                        </table>
                    <?php }elseif(mysqli_num_rows($result2)==1){
                        $row2 = mysqli_fetch_array($result2);?>
                        <h1>Thông tin độc giả vừa tìm kiếm</h1>
                        <table class="table table-bordered">
                            <thead>
                            <tr>

                                <th>Tên độc giả</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Password</th>

                                <th >Xóa</th>
                                <th >Sửa</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $row2['fullname'] ?></td>
                                    <td><?php echo $row2['email'] ?></td>
                                    <td><?php echo $row2['phone'] ?></td>
                                    <td><?php echo $row2['password'] ?></td>
                                    <td style="background:#009999;"> <a href="xoadocgia.php.php?this_id=<?php echo $row2['id']?>" onclick="return confirm('Xóa độc giả')"style="color:white;text-decoration: none;">Xóa</a></td>
                                    <td style="background:#009999;"> <a href="editborrower.php?this_id=<?php echo $row2['id']?>" style="color:white;text-decoration: none;">Sửa</a></td>

                                </tr>
                            </tbody>
                        </table>
                    <?php }elseif(mysqli_num_rows($result3)==1){
                        $row3 = mysqli_fetch_array($result3);?>
                        <h1>Thông tin người mượn vừa tìm kiếm</h1>
                            <table class="table table-bordered">
                                    <thead>
                                    <tr>

                                        <th >Họ và tên</th>
                                        <th>Mã sách</th>
                                        <th>Ngày mượn</th>
                                        <th>Hạn trả sách</th>

                                        <th >Trả sách</th>
                                        <th>Sửa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td><?php echo $row3['fullname'] ?></td>
                                                <td><?php echo $row3['masach'] ?></td>
                                                <td><?php echo $row3['date'] ?></td>
                                                <td><?php echo $row3['expira'] ?></td>
                                                <td style="background:#009999;"> <a href="trasach.php?this_id=<?php echo $row3['id']?>" onclick="return confirm('Đã trả sách')"style="color:white;text-decoration: none;">Trả sách</a></td>
                                                <td style="background:#009999;"> <a href="editborrower.php?this_id=<?php echo $row3['id']?>" style="color:white;text-decoration: none;">Sửa</a></td>

                                            </tr>
                                    </tbody>
                            </table>
                    <?php
                    }
                    else{
                        ?>
                        <div class="errors">
                            <?php echo "Không tồn tại nội dung cần tìm. Vui lòng nhập lại"; ?>
                        </div>
                        <?php
                    }
                }else{
                    $search = false;
                }
                ?>


            </div>
        </div>

    </section>
</main>
<footer>
    <div class="container">

    </div>
</footer>
</body>
</html>








