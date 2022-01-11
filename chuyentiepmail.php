<?php
    //Kiểm tra thẻ làm việc
        session_start();
        if(!isset($_SESSION['isLoginOK']))
        {
            header("location:login.php");
        }
        $username = $_SESSION['isLoginOK'];

        //Lấy mã thư từ trang hộp thư truyền sang
        $noidung = $_GET['Noidung'];
        


    require ("./assets/template/khung_gmail.php");
?>
                    <!-- Phần hiển thị nội dung mail -->
                    <div class="container-noidunggamil ">
                        <div class="content row ms-3 overflow-auto ">
                            <div class="col-md-12 ">
                                <nav class="nav-3 navbar navbar-light bg-white border-bottom  ">
                                    <div class="btn-nav btn-group border ms-3" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                        <label class="btn-nav btn btn-outline-secondary text-dark px-5 py-2 fw-bold" for="btnradio1"><i class="bi bi-calendar2-fill me-4"></i>Chính</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                        <label class="btn-nav btn btn-outline-secondary text-dark px-5 py-2 fw-bold " for="btnradio2"><i class="bi bi-people-fill me-4"></i>Mạng Xã Hội</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                        <label class="btn-nav btn btn-outline-secondary text-dark px-5 py-2 fw-bold" for="btnradio3"><i class="bi bi-tag-fill me-4"></i>Quảng Cáo</label>
                                    </div>
                                </nav>

                                <div class="noidung-gmail container-fluid">
                                    <form action="process_soanthumoi.php" method="post">
                                        <div class="mb-3 mt-3">
                                            <label for="Emailnhan" class="form-label">Người nhận :</label>
                                            <input type="Emailnhan" class="form-control"  id="emailnhan" name="txtEmailnhan" placeholder="Enter email nhận" value= "">
                                            <?php 
                                                if(isset($_GET['error'])){
                                                    echo "<p style = 'color:red'>{$_GET['error']}</p>";
                                                }
                                            ?>
                                        </div>
                                        <div class="mb-3 mt-3">
                                            <label for="Chude" class="form-label">Chủ đề :</label>
                                            <input type="Chude" class="form-control"  id="chude" name="txtChude" placeholder="Chủ đề" value="" >
                                        </div>
                                        <label for="Noidung">Nội dung:</label>
                                        <textarea class="form-control" rows="7" id="noidung" readonly placeholder="Nhập nội dung ..." name="txtNoidung"  > *chuyển tiếp : <?php echo $noidung ?></textarea>


                                </div>
                                <div class="d-row col-6 mx-auto mt-3">
                                    <button type="submit" class="btn btn-primary me-4 btn-lg">Gửi</button>
                                    <a href="hopthuden.php" class="btn btn-primary btn-lg">Hủy</a>
                                </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>

    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>