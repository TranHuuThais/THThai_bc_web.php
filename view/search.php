<?php 
include_once "../dbconnect.php";
include_once "../functions.php";
include "../view/includes/head.php";
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
                            <a class="nav-link" href="#topcards">Product</a>
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


       <!-- home content -->
       <section class="home">
            <div class="content">
                <h1>Specializes in supplying
                    <br> <span>Buying and selling network equipment
                        ​ </span>
                </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, iste!</p>
               
            </div>
         
        </section>
        <!-- home content -->
    </div>
    <!-- home section -->


    <div class="container" id="burger">
        <div class="row" style="margin-top: 30px;" id="product-list">
            <!-- <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./public/images/p1.png" alt="">
                    <div class="card-body">
                        <h3>Italian Pizza</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <h5>$6.50 <span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    




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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
<script src="./public/js/search.js"></script>


</html>