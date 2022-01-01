<?php
    //Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK']))
    {
        header("location:login.php");
    }
    $username = $_SESSION['isLoginOK'];
    // Xử lý giá trị GỬI TỚI

    $email_gui     = $_POST['txtEmailgui'];
    $email_nhan     = $_POST['txtEmailnhan'];
    $Chude        = $_POST['txtChude'];
    $Noidung        = $_POST['txtNoidung'];

    //Lấy ngày tháng hiện tại
    $now = getdate();
    if($now ['month'] == 'December' ) $month = '12';
    if($now ['month'] == 'November' ) $month = '11';
    if($now ['month'] == 'October' ) $month = '10';
    if($now ['month'] == 'September' ) $month = '09';
    if($now ['month'] == 'August' ) $month = '08';
    if($now ['month'] == 'July' ) $month = '07';
    if($now ['month'] == 'June' ) $month = '06';
    if($now ['month'] == 'May' ) $month = '05';
    if($now ['month'] == 'April' ) $month = '04';
    if($now ['month'] == 'March' ) $month = '03';
    if($now ['month'] == 'February' ) $month = '02';
    if($now ['month'] == 'January' ) $month = '01';
    $Ngaygui = "$now[year]-$month-$now[mday]";
    echo $Ngaygui;

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','btlcnweb');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }

    // Bước 02: Thực hiện truy vấn
    $sql1 = "INSERT INTO `db_hopthu`(`Mathu`,`emailgui`, `emailnhan`, `Chudethu`, `Noidung`, `Ngaygui`,`mamail`) 
        VALUES ('NULL','$email_gui','$email_nhan','$Chude','$Noidung','$Ngaygui',1)";
    $sql2 = "INSERT INTO `db_hopthu`(`Mathu`,`emailgui`, `emailnhan`, `Chudethu`, `Noidung`, `Ngaygui`,`mamail`) 
    VALUES ('NULL','$email_gui','$email_nhan','$Chude','$Noidung','$Ngaygui',0)";

    $ketqua1 = mysqli_query($conn, $sql1);
    $ketqua2 = mysqli_query($conn, $sql2);
    
    if(!$ketqua1 or !$ketqua2){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: thudagui.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>
