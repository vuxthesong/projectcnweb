<?php
   //Kiểm tra thẻ làm việc
   session_start();
   if(!isset($_SESSION['isLoginAdOK']))
   {
       header("location:myadmin.php");
   }
       
 
    // NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $ma_nguoidung = $_GET['mand'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','btlcnweb');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }

    // Bước 02: Thực hiện truy vấn
    $sql1 = "SELECT `makhoa` FROM db_nguoidung WHERE mand = '$ma_nguoidung'";
    $result1 = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result1) > 0) 
    {
        while($row = mysqli_fetch_assoc($result1)){
        
        $makhoa = $row['makhoa'];
    } 
    }
    else{
        
       header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }
  

    if($makhoa==0)
    {
         $sql2 = "UPDATE `db_nguoidung` SET `makhoa`= 1 WHERE mand = '$ma_nguoidung'";
        // echo $sql;
         $ketqua2 = mysqli_query($conn,$sql2);
         if(!$ketqua2){
            
        header("location: error.php"); //Chuyển hướng lỗi
        }
    }
    else
    {
        $sql3 = "UPDATE `db_nguoidung` SET `makhoa`= 0 WHERE mand = '$ma_nguoidung'";
        // echo $sql;
        $ketqua3 = mysqli_query($conn,$sql3);
        
        if(!$ketqua3){
            
        header("location: error.php"); //Chuyển hướng lỗi
        }
    }  
   
    header("location: admin.php");

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>