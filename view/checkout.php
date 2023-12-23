<?php
include_once "../dbconnect.php";
include_once "../functions.php";
include "../view/includes/head.php";
$product = showAllproducts();

?>

<body>
    <!-- home section -->
    <div class="home-section text-center">
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" id="logo"><img src="./public/images/logo1.png" alt="" width="50px">ROUTER</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fa-solid fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tipcarts">Product</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#categories" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                categories
                            </a>
                          
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                    </ul>





                    <form class="d-flex" id="search" action="./search.php">
                        <input name="key" type="search" class="form-control rounded" placeholder="Search" aria-label="Search">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                        <div class="icons">
                            <a class="nav-link" href="./login.php"><i class="fa-solid fa-user"></i></a>
                            <a class="nav-link" href="./cart.php"><i class="fa-solid fa-cart-shopping"></i></a>

                        </div>
                    </form>
                </div>
            </div>
        </nav>


        <main role="main">
            <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
            <div class="container mt-4">
                <form class="needs-validation" name="frmthanhtoan" method="post" action="#">
                    <input type="hidden" name="kh_tendangnhap" value="dnpcuong">

                    <div class="py-5 text-center">
                        <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                        <h2>Thanh toán</h2>
                        <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
                    </div>

                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Giỏ hàng</span>
                                <span class="badge badge-secondary badge-pill">2</span>
                            </h4>
                            <ul class="list-group mb-3">
                                <input type="hidden" name="sanphamg1[1][sp_ma]" value="2">
                                <input type="hidden" name="sanphamg2[1][gia]" value="11800000.00">
                                <input type="hidden" name="sanphamg[1][soluong]" value="2">

                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Apple Ipad 4 Wifi 16GB</h6>
                                        <small class="text-muted">11800000.00 x 2</small>
                                    </div>
                                    <span class="text-muted">23600000</span>
                                </li>
                                <input type="hidden" name="sanphamgiohang[2][sp_ma]" value="4">
                                <input type="hidden" name="sanphamgiohang[2][gia]" value="14990000.00">
                                <input type="hidden" name="sanphamgiohang[2][soluong]" value="8">

                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Apple iPhone 5 16GB White</h6>
                                        <small class="text-muted">14990000.00 x 8</small>
                                    </div>
                                    <span class="text-muted">119920000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Tổng thành tiền</span>
                                    <strong>143520000</strong>
                                </li>
                            </ul>


                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">Xác nhận</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Thông tin khách hàng</h4>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="kh_ten">Họ tên</label>
                                    <input type="text" class="form-control" name="kh_ten" id="kh_ten">
                                </div>
                                <div class="col-md-12">
                                    <label for="kh_gioitinh">Giới tính</label>
                                    <input type="text" class="form-control" name="kh_gioitinh" id="kh_gioitinh">
                                </div>
                                <div class="col-md-12">
                                    <label for="kh_diachi">Địa chỉ</label>
                                    <input type="text" class="form-control" name="kh_diachi" id="kh_diachi">
                                </div>
                                <div class="col-md-12">
                                    <label for="kh_dienthoai">Điện thoại</label>
                                    <input type="text" class="form-control" name="kh_dienthoai" id="kh_dienthoai">
                                </div>
                                <div class="col-md-12">
                                    <label for="kh_email">Email</label>
                                    <input type="text" class="form-control" name="kh_email" id="kh_email">
                                </div>
                                <div class="col-md-12">
                                    <label for="kh_ngaysinh">Ngày sinh</label>
                                    <input type="text" class="form-control" name="kh_ngaysinh" id="kh_ngaysinh">
                                </div>
                                <div class="col-md-12">
                                    <label for="kh_cmnd">CMND</label>
                                    <input type="text" class="form-control" name="kh_cmnd" id="kh_cmnd">
                                </div>
                            </div>

                            <h4 class="mb-3">Hình thức thanh toán</h4>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required="" value="1">
                                    <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required="" value="2">
                                    <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input" required="" value="3">
                                    <label class="custom-control-label" for="httt-3">Ship COD</label>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang">Đặt
                                hàng</button>
                        </div>
                    </div>
                </form>

            </div>
            <!-- End block content -->
        </main>

      <!-- footer -->
      <footer id="footer" style="margin-top: 50px;">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 footer-contact">
                            <a class="navbar-brand" href="#" id="logo2"><img src="../public/images/logo1.png" alt="" width="50px">ROUTER</a>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, libero.</p><br>
                            <p>
                                Karachi <br><br>
                                Sindh <br><br>
                                Pakistan <br><br>
                            </p>
                            <strong><i class="fa-solid fa-phone"></i> Phone: <strong>+0000000000000000</strong></strong><br>
                            <strong><i class="fa-solid fa-envelope"></i> Email: <strong>example@gmail.com</strong></strong>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Privacy policay</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Our Services</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, aperiam.</p>
                            <ul>
                                <li><a href="#">Pizza</a></li>
                                <li><a href="#">Fried chicken</a></li>
                                <li><a href="#">Fries</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Our Socail Links</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis, minus.</p>
                            <div class="socail-links mt-3">
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-google-plus"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <hr>
            <div class="container py-4">
                <div class="copyright">
                    &copy; Copyright <strong>Burger</strong>.All Rights reserved
                </div>
                <div class="credits">
                    Designed By <a href="#">SA coding</a>
                </div>
            </div>
        </footer>

        <!-- footer -->






        <a href="#" class="arrow"><i class="fa-solid fa-arrow-up"></i></a>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>