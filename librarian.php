<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Trang chủ thủ thư</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/librarian.css" rel="stylesheet" type="text/css"/>
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
                            <a class="dropdown-item"  href="#"><i class="fa-solid fa-magnifying-glass"></i> Tra cứu sách</a>
                            <a class="dropdown-item"  href="#"><i class="fa-solid fa-magnifying-glass-plus"></i> Tra cứu độc giả</a>
                            <a class="dropdown-item"  href="#"><i class="fa-brands fa-searchengin"></i> Tra cứu tình hình mượn trả</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-9">
            <div class="p bg text-white text-center" style="background-color:#009999 ">
                <h2>Tất cả sách</h2>

            </div>
            <div class="row" style="display: flex">
                <div class="col-4">
                    <div class="container ">
                        <div class="card">
                            <img class="card-img-top" src="https://www.reader.com.vn/uploads/images/2019/10/30/19/dac-nhan-tam_600x865.png" alt="Card image" style="width:100%;height: 400px">
                            <div class="card-body">
                                <h4 class="card-title">Đắc nhân tâm</h4>
                                <p class="card-text">How to Win Friends $ Influence People</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container ">
                        <div class="card" >
                            <img class="card-img-top" src="https://www.reader.com.vn/uploads/images/2019/10/30/19/sach-dieu-y-nghia-nhat-trong-tung-khoanh-khac_600x1000.gif" alt="Card image" style="width:100%;height: 400px">
                            <div class="card-body">
                                <h4 class="card-title">The one thing</h4>
                                <p class="card-text">Điều ý nghĩa nhất trong từng khoảng khắc </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container ">
                        <div class="card">
                            <img class="card-img-top" src="https://www.reader.com.vn/uploads/images/2019/10/30/19/doi-thay-doi-khi-chung-ta-thay-doi_600x906.jpg" alt="Card image" style="width:100%;height: 400px">
                            <div class="card-body">
                                <h4 class="card-title">Happiness now</h4>
                                <p class="card-text">Đời thay đổi khi chúng ta thay đổi </p>

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
                            <img class="card-img-top" src="https://www.reader.com.vn/uploads/images/2019/10/30/19/dam-nghi-lon_600x890.jpg" alt="Card image" style="width:100%;height: 400px">
                            <div class="card-body">
                                <h4 class="card-title">Dám nghĩ lớn</h4>
                                <p class="card-text">The Magic of Thinking Big</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container ">
                        <div class="card" >
                            <img class="card-img-top" src="https://www.reader.com.vn/uploads/images/2019/10/30/19/sach-nha-gia-kim_600x962.jpg" alt="Card image" style="width:100%;height: 400px">
                            <div class="card-body">
                                <h4 class="card-title">Nhà giả kim</h4>
                                <p class="card-text">Hành trình đi tìm vận mệnh </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container ">
                        <div class="card">
                            <img class="card-img-top" src="https://www.reader.com.vn/uploads/images/2019/10/30/19/thuc-tinh-muc-dich-song_600x849.jpg" alt="Card image" style="width:100%;height: 400px">
                            <div class="card-body">
                                <h4 class="card-title">Thức tỉnh mục đích sống </h4>
                                <p class="card-text">Một cuốn sách làm bừng tỉnh cả thế giới </p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container mt-3">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="librarian.php">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="librarian.php">1</a></li>
                    <li class="page-item"><a class="page-link" href="">2</a></li>
                    <li class="page-item"><a class="page-link" href="">3</a></li>
                    <li class="page-item"><a class="page-link" href="">Next</a></li>
                </ul>
            </div>
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
