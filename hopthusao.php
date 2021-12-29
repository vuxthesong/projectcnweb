<?php
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
                                    <table class="table table-hover table-ms table-responsive align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Người gửi</th>
                                                <th scope="col">Người nhận</th>
                                                <th scope="col ">Chủ đề thư</th>
                                                <th scope="col ">Ngày gửi</th>
                                                <th scope="col ">Bỏ Gắn sao</th>
                                                <th scope="col ">Đọc thư</th>
                                                <th scope="col">Xóa</th>
                                            </tr>
                                        </thead>
                                        <!--in nội dung vào đây-->
                                        <tbody>
                                            <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                                            <?php
                                            // Bước 01: Kết nối Database Server
                                            $conn = mysqli_connect('localhost', 'root', '', 'btlcnweb');
                                            if (!$conn) {
                                                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                                            }
                                            // Bước 02: Thực hiện truy vấn
                                            $sql = "SELECT `Mathu`,`emailgui`,`emailnhan`, `Chudethu`, `Ngaygui` FROM `db_hopthu` WHERE Sao = 1";
                                            $result = mysqli_query($conn, $sql);
                                            // Bước 03: Xử lý kết quả truy vấn
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                    
                                                    <tr>    
                                                        
                                                        <th scope="row"><?php echo $row['emailgui']; ?></th>
                                                        <td><?php echo $row['emailnhan']; ?></td>
                                                        <td><?php echo $row['Chudethu']; ?></td>
                                                        <td><?php echo $row['Ngaygui']; ?></td>
                                                        <td><a href="danhdausao_mail_hopthusao.php?Mathu=<?php echo $row['Mathu']; ?>"><i class="bi bi-star-fill text-warning ms-4"></i></a></td>
                                                        <td><a href="doc_mail.php?Mathu=<?php echo $row['Mathu']; ?>"><i class="bi bi-book ms-4"></i></a></td>
                                                        <td><a href="delete_mail.php?Mathu=<?php echo $row['Mathu']; ?>"><i class="bi bi-trash ms-2 "></i></a></td>
                                                        
                                                    </tr>
                                                    
                                            <?php
                                                }
                                            }
                                            ?>

                                        </tbody>

                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>

    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>