<?php
//Kiểm tra thẻ làm việc
session_start();
if (!isset($_SESSION['isLoginOK'])) {
    header("location:login.php");
}
$username = $_SESSION['isLoginOK'];

$ma_thu = $_GET['Mathu'];
// Bước 01: Kết nối Database Server
$conn = mysqli_connect('localhost', 'root', '', 'btlcnweb');
if (!$conn) {
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
// Bước 02: Thực hiện truy vấn các mail sao
$sql = "SELECT `Mathu`,`emailgui`, `Chudethu`, `Ngaygui`,`Noidung` FROM `db_hopthu` WHERE Mathu = $ma_thu ";
$result = mysqli_query($conn, $sql);
// Bước 03: Xử lý kết quả truy vấn
if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_assoc($result)) {
       $Noidung = $row['Noidung'];
       $Chudethu = $row['Chudethu'];
       $emaigui = $row['emailgui'];
       $ngaygui = $row['Ngaygui'];
       
       
   }
}

require("./assets/template/khung_gmail.php");
?>
<main>
<div class="container-noidunggamil">
    <div class="content ps-4 fs-5 overflow-auto  ">
        <div class="col-md-12 ">
            <div><h3 class="text-uppercase my-3"><?php echo $Chudethu ?></h3></div>
            <div>Người gửi : <i class="bi bi-person-circle"> <?php echo $emaigui ?></i> <span><...></span></div> 
            <div>Ngày gửi : <?php echo $ngaygui ?></div>
        </div>
        <div class="col-md-12 mt-5">
            <p class="ps-3"><?php echo $Noidung ?></p>
           
        </div>
    </div>
</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>