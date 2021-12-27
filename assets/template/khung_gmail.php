<?php
         // Bước 01: Kết nối Database Server
         $conn = mysqli_connect('localhost', 'root', '', 'btlcnweb');
         if (!$conn) {
             die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
         }
         // Bước 02: Thực hiện truy vấn lấy số thư đến
         $sql = "SELECT `Mathu`,`emailgui`, `Chudethu`, `Ngaygui` FROM `db_hopthu` WHERE emailnhan = 'song@gmail.com'";
         $result = mysqli_query($conn, $sql);
         // Bước 03: Xử lý kết quả truy vấn
         $counthopthuden =mysqli_num_rows($result);

         // Bước 02: Thực hiện truy vấn lấy số thư đã gửi
         $sql = "SELECT `Mathu`,`emailgui`, `Chudethu`, `Ngaygui` FROM `db_hopthu` WHERE emailgui = 'song@gmail.com'";
         $result = mysqli_query($conn, $sql);
         // Bước 03: Xử lý kết quả truy vấn
         $countthudagui =mysqli_num_rows($result);

         // Bước 02: Thực hiện truy vấn lấy số thư trong thùng rác
         $sql = "SELECT `Mathu`,`emailgui`, `Chudethu`, `Ngaygui` FROM `db_thungrac` WHERE emailnhan = 'song@gmail.com' or emailgui = 'song@gmail.com'";
         $result = mysqli_query($conn, $sql);
         // Bước 03: Xử lý kết quả truy vấn
         $countthungrac =mysqli_num_rows($result);

         // Bước 02: Thực hiện truy vấn lấy số thư gắn sao
         $sql = "SELECT `Mathu`,`emailgui`, `Chudethu`, `Ngaygui` FROM `db_hopthu` WHERE Sao = 1";
         $result = mysqli_query($conn, $sql);
         // Bước 03: Xử lý kết quả truy vấn
         $countsao =mysqli_num_rows($result);

          // Bước 04: Đóng kết nối
          mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!--Header-->

    <header class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!--Chen 1thanh dieu huong-->
                <nav class="navbar navbar-white bg-white border-bottom">
                    <div class="container-fluid">
                        <span>
                            <a class="text-muted fs-3 bg-white fw-bold" href="#"><i class="bi bi-list"></i></a>
                            <a href="#"><img class="ms-2 pb-2" src="./assets/img/logo_gmail.png" alt=""></a>
                        </span>

                        <form class="d-flex w-50 border-none">
                            <a class="nav-link active text-muted fs-4 ms-2 " href="#"><i class="bi bi-search"></i></a>
                            <input type="text" class="form-control" placeholder="Tìm kiếm trong thư" aria-label="Search" aria-describedby="basic-addon1">
                            <div class="nav-link active bg-white rounded-end text-muted fs-4 ms-2 " id="basic-addon1"><i class="bi bi-sliders "></i>
                            </div>
                            <a class="nav-link active text-muted fs-4 ms-2 " href="#"><i class="bi bi-person-circle"></i></a>
                        </form>
                    </div>

                </nav>
            </div>
        </div>
    </header>

    <!--Main-->
    <main class="container-fluid h-100">
        <div class="main-content row">
            <div class="col-md-2 bg-white  ">
                <!--Left-->
                <div class="left-nav w-100">

                    <div class="button text-decoration-underline rounded-pill hover-overlay hover-overlay ">
                        <a href="soanthumoi.php" type="button" class="btn btn-white rounded-pill shadow p-2 pe-3 mb-3 bg-body rounded mx-4 mt-3"><img src="./assets/img/img1/compose.png" alt=""> <span class="fw-bold">Soạn Thư mới</span>
                        </a>
                    </div>


                    <ul class="list-group mb-3 mt-2">
                
                        <li class="list-group-item d-flex justify-content-between align-items-center ">
                            <div class="d-grid gap-2">
                               <a href="hopthuden.php" class="btn btn-primary pe-4" type="button"><i class="bi bi-calendar2"></i><span class="header">Hộp thư đến</span></a>
                            </div>
                            <span class="badge bg-primary rounded-pill"><?php echo $counthopthuden ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="thudagui.php" class="btn btn-primary" type="button"><i class="bi bi-arrow-right-square-fill"></i><span class="header">Đã
                                    gửi</span></a>
                            <span class="badge bg-primary rounded-pill"><?php echo $countthudagui ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="thungrac.php" class="btn btn-primary" type="button"><i class="bi bi-trash"></i><span class="header">Thùng rác</span></a>
                            <span class="badge bg-primary rounded-pill"><?php echo $countthungrac ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="hopthusao.php" class="btn btn-primary" type="button"><i class="bi bi-star-fill"></i><span class="header">Có gắn sao</span></a>
                            <span class="badge bg-primary rounded-pill"><?php echo $countsao ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <button class="btn btn-primary" type="button"><i class="bi bi-clock-fill"></i><span class="header">Đã tạm ẩn</span></button>
                            <span class="badge bg-primary rounded-pill">...</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <button class="btn btn-primary" type="button"><i class="bi bi-arrow-down-square-fill"></i><span class="header">Danh sách mở
                                    rộng</span></button>
                        </li>
                    </ul>


                    <div class="meet">
                        <h5>Meet</h5>
                        <ul class="meetform list-group list-group-flush w-100 mb-3 ">

                            <li class="list-group-item">
                                <button type="button" class="btn btn-primary "><i class="bi bi-camera-video-fill"></i>
                                    <span class="header">Bắt đầu cuộc họp</span></button>
                            </li>
                            <li class="list-group-item">
                                <button type="button" class="btn btn-primary"><i class="bi bi-tv-fill"></i>
                                    <span class="header">Tham gia cuộc họp</span></button>
                            </li>

                        </ul>
                    </div>

                    <div class="hangout mt-2">
                        <h5>Hangouts</h5>
                        <div class="row ">
                            <div class="col-md-1 fs-4 text-muted">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="col-md-9 ms-2 fs-5">
                                <span>User name</span>
                                <i class="bi bi-chevron-compact-down"></i>
                            </div>
                            <div class="col-md-1 fs-4 mx-auto">
                                <i class="bi bi-plus"></i>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-md-10">
                <div class="row">

                    <div class="col-md-12">
                        <nav class="navbar navbar-light bg-white border-bottom">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">
                                    <button type="button" class="btn"><i class="bi bi-square"></i></button>
                                    <button type="button" class="btn"><i class="bi bi-arrow-clockwise"></i></button>
                                    <button type="button" class="btn"><i class="bi bi-three-dots-vertical"></i></button>
                                </a>
                                <a class="navbar-brand fs-6 " href="#">
                                    <span> 1-50 trong số 200</span>
                                    <span><i class="bi bi-chevron-left ms-4"></i></span>
                                    <span><i class="bi bi-chevron-right"></i></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                    <!--Khung web-->