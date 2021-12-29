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
    $sql1 = "SELECT `Sao` FROM db_hopthu WHERE Mathu = '$ma_thu'";
    $result1 = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result1) > 0) 
    {
        while($row = mysqli_fetch_assoc($result1)){
        
        $Sao = $row['Sao'];
    } 
    }
    else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }
  

    if($Sao==0)
    {
         $sql2 = "UPDATE `db_hopthu` SET `Sao`=1 WHERE Mathu = '$ma_thu'";
        // echo $sql;
         $ketqua2 = mysqli_query($conn,$sql2);
         if(!$ketqua2){
        header("location: error.php"); //Chuyển hướng lỗi
        }
    }
    else
    {
        $sql3 = "UPDATE `db_hopthu` SET `Sao`=0 WHERE Mathu = '$ma_thu'";
        // echo $sql;
        $ketqua3 = mysqli_query($conn,$sql3);
        
        if(!$ketqua3){
        header("location: error.php"); //Chuyển hướng lỗi
        }
    }  
   
    header("location: hopthuden.php");

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>