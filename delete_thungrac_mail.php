<?php
     //Kiểm tra thẻ làm việc
     session_start();
     if(!isset($_SESSION['isLoginOK']))
     {
         header("location:login.php");
     }
    // index.php TRUYỀN DỮ LIỆU SANG
    // delete_mail: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $ma_thu = $_GET['Mathu'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','btlcnweb');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    //Xoa khoi hom thu
    $sql3 = "DELETE FROM db_thungrac WHERE Mathu = '$ma_thu'";

    $number = mysqli_query($conn,$sql3);

    if($number > 0){
        header("location: thungrac.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }


    // Bước 03: Đóng kết nối
    mysqli_close($conn);
