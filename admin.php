<?php
//Kiểm tra thẻ làm việc của admin
session_start();
if (!isset($_SESSION['isLoginAdOK'])) {
    header("location: myadmin.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href="./assets/img/mail_black.png" type="image/x-icon" >
    <title>Danh sách người dùng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <main>

        <div class="container">
            <h5 class="text-center text-primary my-5">DANH SÁCH NGƯỜI DÙNG</h5>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Mã người dùng</th>
                        <th scope="col">Email</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Địa chỉ</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                    <?php
                    // Bước 01: Kết nối Database Server
                    $conn = mysqli_connect('localhost', 'root', '', 'btlcnweb');
                    if (!$conn) {
                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                    }
                    // Bước 02: Thực hiện truy vấn
                    $sql = "SELECT `mand`, `email`, `Hoten`, `GioiTinh`, `Ngaysinh`, `Diachi` FROM db_nguoidung";
                    $result = mysqli_query($conn, $sql);
                    // Bước 03: Xử lý kết quả truy vấn
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <th scope="row"><?php echo $row['mand']; ?></th>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['Hoten']; ?></td>
                                <td><?php echo $row['GioiTinh']; ?></td>
                                <td><?php echo $row['Ngaysinh']; ?></td>
                                <td><?php echo $row['Diachi']; ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>