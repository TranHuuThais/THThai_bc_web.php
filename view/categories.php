<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger</title>
    <link rel="shortcut icon" type="image" href="./public/images/logo.png">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>

    <div class="home-section">
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" id="logo"><img src="./public/image/logo.png" alt=""
                        width="30px">BUR<span>GER</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fa-solid fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html" id="first-child">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#topcards">Product</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#categories" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                                style="background-color: #ffc800;">
                                <li><a class="dropdown-item" href="categories.html?categoryId=1">Pizza</a></li>
                                <li><a class="dropdown-item" href="categories.html?categoryId=2">Fries</a></li>
                                <li><a class="dropdown-item" href="categories.html?categoryId=3">Fried Chicken</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                    </ul>





                    <form class="d-flex" id="search" action="search.html">
                        <input name="key" type="search" class="form-control rounded" placeholder="Search"
                            aria-label="Search">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                        <div class="icons">
                            <a class="nav-link" href="login.html"><i class="fa-solid fa-user"></i></a>
                            <a class="nav-link" href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>

                        </div>
                    </form>
                </div>
            </div>
        </nav>


    </div>
    <div class="container" id="categories">
        <h1 class="b1">CATEGORIES</h1>
        <div class="row" style="margin-top: 30px;" id="categories-list">
       
            <!-- <?php foreach ($categories as $categoryID) {
            ?>

                <div class="col-md-3 pt-3 py-md-">
                    <div class="card">
                        <a href="./detail.php?id=<?php echo $categoryID['id'] ?>">
                            <img src="<?php echo $categoryID['image'] ?>" alt="" height="200" width="305">
                        </a>
                        <div class="card-body">
                            <h3><?php echo $categoryID['name'] ?></h3>
                            <p><?php echo $categoryID['description'] ?></p>
                            <h5><?php echo $categoryID['price'] ?> <span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                        </div>
                    </div>
                </div>
            <?php } ?> -->


        </div>

        </div>


    </div>
    </div>


    <!-- footer -->
    <footer id="footer" style="margin-top: 50px;">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <a class="navbar-brand" href="#" id="logo2"><img src="./image/logo.png" alt=""
                                width="30px">Burger</a>
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
    <script src="./public/js/category.js"></script>

</body>