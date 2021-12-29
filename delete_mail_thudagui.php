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

    // Bước 02: Thực hiện truy vấn

    // Lay thong tin cua mail bi xoa

    $sql1 = "SELECT * FROM db_hopthu WHERE Mathu = '$ma_thu'";
    $result1 = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result1) > 0) 
    {
        while($row = mysqli_fetch_assoc($result1)){
        
        $Mathu = $row['Mathu'];
        $email_gui = $row['emailgui'];
        $email_nhan = $row['emailnhan'];
        $Chude = $row['Chudethu'];
        $Noidung = $row['Noidung'];
        $Ngaygui = $row['Ngaygui'];
    } 
    }
    else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }



    // Them mail bi xoa vao thung rac
    $sql2 = "INSERT INTO `db_thungrac`(`Mathu`, `emailgui`, `emailnhan`, `Chudethu`, `Noidung`, `Ngaygui`) 
                VALUES ('$Mathu','$email_gui','$email_nhan','$Chude','$Noidung','$Ngaygui')";
    // echo $sql;
    $ketqua = mysqli_query($conn,$sql2);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }
    else
        echo "có chạy đến đây không";       

    //Xoa khoi hom thu
    $sql3 = "DELETE FROM db_hopthu WHERE Mathu = '$ma_thu'";

    $number = mysqli_query($conn,$sql3);

    if($number > 0){
        header("location: thudagui.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }


    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>
