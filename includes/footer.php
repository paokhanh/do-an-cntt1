<footer class="bg-second">
        <div class="container">
            <div class="row">
                <div class="col-5 col-md-6 ">
                    <h3 class="footer-head">Lập trình web - VLUTE</h3>
                    <ul class="menu">
                        <li><a href="#">Sinh viên thực hiện: Huỳnh Bảo Duy-Ngô Duy Khánh-Lưu Đức Nguyên
                        </a></li>
                        <li><a href="#">MSV: 22004138,22004299,22004135</a></li>
                        <li><a href="#">Giảng viên giảng dạy: ThS.Trần Thị Tố Loan</a></li>
                    </ul>
                </div>

                <div class="col-5 col-md-6">
                    <h3 class="footer-head">Đại Học SPKT Vĩnh Long</h3>
                    <ul class="menu">
                        <li><a href="#">Địa chỉ: Phường 2, Vĩnh Long</a></li>
                    </ul>
                </div>
                <div class="col-2 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3 class="contact-header">
                            NKD
                        </h3>
                        <ul class="contact-socials">
                            <li><a href="#">
                                    <i class='bx bxl-facebook-circle'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-youtube'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-twitter'></i>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</footer>
<!-- app js -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
  <?php if(isset($_SESSION['message']))
  {
  ?>
    alertify.set('notifier','position', 'top-right');
    alertify.success('<?= $_SESSION['message'] ?>');
  <?php 
    unset($_SESSION['message']);
  }
  ?>
</script>
