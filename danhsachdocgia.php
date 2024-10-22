<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Danh sách độc giả</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/danhsachdocgia.css" rel="stylesheet" type="text/css"/>
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
                                 <a class="dropdown-item"  href="#"><i class="fa-solid fa-list-ul"></i> Thông tin độc giả</a>
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
            <div class="col-9">
                <h1 class="h11">Danh sách độc giả</h1>




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
                    <?php
                    include "config.php";
                    $sql= "SELECT * FROM bookborrower";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)){



                        ?>
                        <tr>

                            <td><?php echo $row['fullname'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['phone'] ?></td>
                            <td><?php echo $row['password'] ?></td>
                            <td style="background:#009999;"> <a href="xoadocgia.php?this_id=<?php echo $row['id']?>" onclick="return confirm('Xóa Sách')"style="color:white;text-decoration: none;">Xóa</a></td>
                            <td style="background:#009999;"> <a href="editdocgia.php?this_id=<?php echo $row['id']?>" style="color:white;text-decoration: none;">Sửa</a></td>

                        </tr>
                    <?php     }?>


                    </tbody>
                </table>


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

