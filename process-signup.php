<?php
use Componere\Value;
    if(!isset($_POST['ntnSignUp'])){
        header("location:signup.php");
    }
    $user =$_POST['txtUser'];
    $email =$_POST['txtEmail'];
    $pass1 =$_POST['txtPass1'];
    $pass2 =$_POST['txtPass2'];
     // Bước 01: Kết nối Database Server
     $conn = mysqli_connect('localhost','root','','btlcnweb');
     if(!$conn){
         die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
     }
     // Bước 02: Thực hiện truy vấn
     $sql01 = "SELECT * FROM db_taikhoan WHERE email = '$email' AND tennguoidung='$user'";
     // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
     // Nghiêm trọng: lỗi SQL Injection

     $result01 = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result01) > 0){
         // CẤP THẺ LÀM VIỆC
         $error = "Username or Email is existed";
         header("location: signup.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
     }else{
         $sql02 ="INSERT INTO db_nguoidung(tennguoidung,email,matkhau) VALUES('$user','$email','$pass1')";
         $result02 = mysqli_query($conn,$sql02);
         if ($result02 == true){
             header("location:login.php")
         }else {
             $error="Can not insert record. Please check..... ";
             header("location:sigup.php?error=$error");
         }
     }

     // Bước 03: Đóng kết nối
     mysqli_close($conn);
 
 
?>