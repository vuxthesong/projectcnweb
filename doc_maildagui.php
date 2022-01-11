<?php
//Kiểm tra thẻ làm việc
session_start();
if (!isset($_SESSION['isLoginOK'])) {
    header("location:login.php");
}
$username = $_SESSION['isLoginOK'];

//Lấy mã thư từ trang hộp thư truyền sang
$ma_thu = $_GET['Mathu'];
// Bước 01: Kết nối Database Server
$conn = mysqli_connect('localhost', 'root', '', 'btlcnweb');
if (!$conn) {
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
// Bước 02: Thực hiện truy vấn các mail sao
$sql = "SELECT `Mathu`,`emailgui`, `Chudethu`, `Ngaygui`,`Noidung`,`emailnhan` FROM `db_hopthu` WHERE Mathu = $ma_thu ";
$result = mysqli_query($conn, $sql);
// Bước 03: Xử lý kết quả truy vấn
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $Noidung = $row['Noidung'];
        $Chudethu = $row['Chudethu'];
        $emaigui = $row['emailgui'];
        $emailnhan = $row['emailnhan'];
        $ngaygui = $row['Ngaygui'];
    }
}

require("./assets/template/khung_gmail.php");
?>
<main>
    <div class="container-noidunggamil">
        <div class="content ps-4  overflow-auto  ">
            <div class="col-md-12 ">
                <div>
                    <h3 class="text-uppercase my-3"><?php echo $Chudethu ?></h3>
                </div>
                <div>Người gửi : <i class="bi bi-person-circle"> <?php echo $emaigui ?></i> </div>
                <div>Người nhận : <i class="bi bi-person-circle"> <?php echo $emailnhan ?></i> </div>
                <div>Ngày gửi : <?php echo $ngaygui ?></div>
                <hr>
            </div>
            <div class="col-md-12 mt-3">
                <p class="ps-3 text-break fs-5"><?php echo $Noidung ?></p>
            </div>

            <?php
            // Bước 01: Kết nối Database Server
            $conn = mysqli_connect('localhost', 'root', '', 'btlcnweb');
            if (!$conn) {
                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
            }
            // Bước 02: Thực hiện truy vấn
            $sql = "SELECT `Mathu`,`emailgui`, `Chudethu`, `Ngaygui`,`Noidung`,`emailnhan` FROM `db_hopthu` WHERE Mathu = $ma_thu ";
            $result = mysqli_query($conn, $sql);
            // Bước 03: Xử lý kết quả truy vấn
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-md-12 mt-5 ">
                        <a href="traloimaildagui.php?emailnhan=<?php echo $row['emailnhan']; ?>&Chudethu=<?php echo $row['Chudethu']; ?>" type="button" class="btn btn-secondary me-2"><i class="bi bi-arrow-90deg-left"></i> Trả lời </a>
                        <a href="chuyentiepmail.php?Noidung=<?php echo $row['Noidung']; ?>" type="button" class="btn btn-secondary me-2"><i class="bi bi-box-arrow-right"></i> Chuyển tiếp</a>
                    </div>

            <?php
                }
            }
            ?>


        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>