<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Trang chủ website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/fontawesome-free-6.1.1-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<header><div class="p-5 bg text-white text-center" style="background-color:#009999 ">
        <h1>Thư viện sách online</h1>
        <p>Phần mềm quản lý thư viện</p>
    </div>
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
                            <a class="nav-link" href="index.php">Giới thiệu </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Danh mục sách</a>
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
                        <button class="btn btn-light" type="button" style="margin-right: 10px"><a class="nav-link" href="login.php">Đăng nhập</a></button>

                        <button class="btn btn-light" type="button"><a class="nav-link" href="register.php">Đăng ký</a></button>

                    </form>
                </div>
            </div>
        </nav>




    </section></header>
<main >
    <br>

    <div class="row">
        <div class="col-9"style="display: inline-block">
            <div class="p bg text-white text-center" style="background-color:#009999 ">
                <h2>Tất cả sách</h2>

            </div>

            <?php
            include 'config.php';
            $sql ="SELECT * FROM sach";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)){
            ?>
            <div class="row" >
                <div class="col-3">
                    <div class="container ">
                        <div class="card">
                            <td><img class="card-img-top" src="img/<?php echo $row['img']?>" alt="Card image" style="width:100%;height: 400px"></td>
                            <div class="card-body">
                                <td><h4 class="card-title"><?php echo $row['tensach']?></h4></td>
                                <td><p class="card-text"><?php echo $row['tentacgia']?></p></td>
                                <td><p class="card-text"><?php echo $row['theloai']?></p></td>
                                <button class="btn btn-light"  type="button" style="margin-right: 10px"><a class="nav-link" href="login.php">Đăng ký mượn sách</a></button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <?php }?>
            <br>

            <div class="container mt-3">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="index.php">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="index.php">1</a></li>
                    <li class="page-item"><a class="page-link" href="login.php">2</a></li>
                    <li class="page-item"><a class="page-link" href="login.php">3</a></li>
                    <li class="page-item"><a class="page-link" href="login.php">Next</a></li>
                </ul>
            </div>

        </div>
        <div class="col-3">

        </div>
    </div>
</main>



<div class="mt-5 p-4 bg-dark text-white text-center">

</div>
</body>
</html>