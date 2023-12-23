<?php
include_once "../dbconnect.php";
include_once "../functions.php";
include "../view/includes/head.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
  
    $product_detail = getProduct($id);
    
}

?>



<body>
    <!-- home section -->
    <div class="home-section">
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php" id="logo"><img src="./public/images/logo1.png" alt="" width="50px">ROUTER</a>
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
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="categories.html?categoryId=1">Pizza</a></li>
                                <li><a class="dropdown-item" href="categories.html?categoryId=2">Hamburger</a></li>
                                <li><a class="dropdown-item" href="categories.html?categoryId=3">Fried Chicken</a></li>
                                <li><a class="dropdown-item" href="categories.html?categoryId=4">Drink</a></li>
                                <li><a class="dropdown-item" href="categories.html?categoryId=5">Rice & Spaghetti</a></li>
                            </ul>
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
    </div>
    <section class="py-5">
        <div class="container">
            <main role="main">
                <div class="container mt-4">
                    <div class="cart">
                        <div class="container-fluid">
                            <div class="wrapper row">
                                <div class="preview col-md-6">
                                    <div class="preview-pic tab-content">
                                        <div class="tab-pane active" id="tipcarts">
                                        <img src="<?php echo "/doan2" .$product_detail['image'] ?> " alt="Product Image" height="350" width="305">
                                        </div>
                                    </div>

                                </div>
                                <div class="details col-md-6 mt-5">
                                    <h3 class="product-title"> <?php echo $product_detail['name'] ?></h3>
                                    <div class="rating">
                                        <div class="stars">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                    <p class="product-description"><?php echo $product_detail['description'] ?></p>

                                    <h4 class="price">Giá hiện tại: <span><?php echo $product_detail['price'] ?><span></span></h4>
                                    <div class="d-flex  mt-3">
                                        <h5 class="sizes mt-1">sizes:
                                            <span class="size" data-toggle="tooltip" title="cỡ Nhỏ">s</span>
                                            <span class="size" data-toggle="tooltip" title="cỡ Trung bình">m</span>
                                            <span class="size" data-toggle="tooltip" title="cỡ Lớn">l</span>
                                            <span class="size" data-toggle="tooltip" title="cỡ Đại">xl</span>
                                        </h5>
                                    </div>
                                    <div class="d-flex  mt-3" style="max-width: 300px ">
                                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>

                                        <input id="form1" min="0" name="" value="1" type="number" class="form-control form-control-sm" />

                                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="button">
                                        <form action="cart.php?id=<?php echo $product_detail['id']; ?>" method="POST">
                                            <button class=" btn btn-default bg-primary text-light mt-4" type="submit" name="app-to-cart">Thêm vào giỏ hàng</button>
                                        </form>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </section>

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

    


  
   
   

</body>