<?php
//Kiểm tra thẻ làm việc
session_start();
if (!isset($_SESSION['isLoginOK'])) {
    header("location:login.php");
}
    $username = $_SESSION['isLoginOK'];
    header("location:hopthuden.php");
?>

<?php
include("./assets/template/header1.php");



?>

<div id="main">

    <main class="container mt-5 ">
        <div class="main_about row">
            <div class="col-md-4 mt-lg-5">
                <h1 class="fs-0 pt-0 ">Email bảo mật, thông minh và dễ sử dụng</h1>
                <p>Hoàn thành nhiều việc hơn khi có Gmail. Gmail nay đã tích hợp Google Chat, Google Meet và nhiều ứng
                    dụng khác, tất cả đều ở cùng một nơi.</p>
            </div>
            <div class="col-md-8">
                <img class="img-fluid rounded mx-auto d-block" src="./assets/img/unnamed.webp" alt="" />
            </div>

        </div>
    </div>
    </main>
    <?php
include("./assets/template/footer.php");



?>