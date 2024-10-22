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
<header>
    <div class="p-5 bg text-white text-center" style="background-color:#009999 ">
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
                            <a class="nav-link" href="bookborrower.php">Giới thiệu </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Danh
                                mục sách</a>
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
</header>
<main>
    <br>

    <div class="row">
        <div class="col-9">
            <div class="p bg text-white text-center" style="background-color:#009999 ">
                <h2>Tất cả sách</h2>

            </div>
            <div class="row" style="display: flex">
                <div class="col-4">
                    <div class="container ">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://www.reader.com.vn/uploads/images/2019/10/30/19/dac-nhan-tam_600x865.png"
                                 alt="Card image" style="width:100%;height: 400px">
                            <div class="card-body">
                                <h4 class="card-title">Đắc nhân tâm</h4>
                                <p class="card-text">How to Win Friends $ Influence People</p>
                                <button class="btn btn-light" type="button" style="margin-right: 10px"><a
                                        class="nav-link" href="muonsach.php">Đăng ký mượn sách</a></button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container ">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://www.reader.com.vn/uploads/images/2019/10/30/19/sach-dieu-y-nghia-nhat-trong-tung-khoanh-khac_600x1000.gif"
                                 alt="Card image" style="width:100%;height: 400px">
                            <div class="card-body">
                                <h4 class="card-title">The one thing</h4>
                                <p class="card-text">Điều ý nghĩa nhất trong từng khoảng khắc </p>
                                <button class="btn btn-light" type="button" style="margin-right: 10px"><a
                                        class="nav-link" href="muonsach.php">Đăng ký mượn sách</a></button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container ">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://www.reader.com.vn/uploads/images/2019/10/30/19/doi-thay-doi-khi-chung-ta-thay-doi_600x906.jpg"
                                 alt="Card image" style="width:100%;height: 400px">
                            <div class="card-body">
                                <h4 class="card-title">Happiness now</h4>
                                <p class="card-text">Đời thay đổi khi chúng ta thay đổi </p>
                                <button class="btn btn-light" type="button" style="margin-right: 10px"><a
                                        class="nav-link" href="muonsach.php">Đăng ký mượn sách</a></button>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <div class="row" style="display: flex">
                <div class="col-4">
                    <div class="container ">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://www.reader.com.vn/uploads/images/2019/10/30/19/dam-nghi-lon_600x890.jpg"
                                 alt="Card image" style="width:100%;height: 400px">
                            <div class="card-body">
                                <h4 class="card-title">Dám nghĩ lớn</h4>
                                <p class="card-text">The Magic of Thinking Big</p>
                                <button class="btn btn-light" type="button" style="margin-right: 10px"><a
                                        class="nav-link" href="muonsach.php">Đăng ký mượn sách</a></button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container ">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://www.reader.com.vn/uploads/images/2019/10/30/19/sach-nha-gia-kim_600x962.jpg"
                                 alt="Card image" style="width:100%;height: 400px">
                            <div class="card-body">
                                <h4 class="card-title">Nhà giả kim</h4>
                                <p class="card-text">Hành trình đi tìm vận mệnh </p>
                                <button class="btn btn-light" type="button" style="margin-right: 10px"><a
                                        class="nav-link" href="muonsach.php">Đăng ký mượn sách</a></button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container ">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://www.reader.com.vn/uploads/images/2019/10/30/19/thuc-tinh-muc-dich-song_600x849.jpg"
                                 alt="Card image" style="width:100%;height: 400px">
                            <div class="card-body">
                                <h4 class="card-title">Thức tỉnh mục đích sống </h4>
                                <p class="card-text">Một cuốn sách làm bừng tỉnh cả thế giới </p>
                                <button class="btn btn-light" type="button" style="margin-right: 10px"><a
                                        class="nav-link" href="muonsach.php">Đăng ký mượn sách</a></button>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container mt-3">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="bookborrower.php">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="bookborrower.php">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
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