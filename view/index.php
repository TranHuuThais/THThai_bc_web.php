<?php
include_once "../dbconnect.php";
include_once "../functions.php";
include "../view/includes/head.php"; 
$product = showAllproducts();

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





    <!-- top icons -->
    <div class="container" id="top-icons">
        <h1>OFFERS</h1>
        <div class="row">
            <div class="col-md-3 py-3 py-md-0">
                <i><img src="./public//images//router.jpg" alt=""></i>
                <h3>ROUTER 20% off</h3>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <i><img src="./public//images/offer2.png" alt=""></i>
                <h3>Free Delivery</h3>
            </div>
          
        </div>
    </div>
    <!-- top icons -->







    <!-- cards -->
    <div class="container" id="cards">
        <div class="row">
            <div class="col-md-6 py-3 py-md-0">
                <div class="card">
                    <img src="./public//images//router1.png" alt="">
                    <div class="card-img-overlay">
                        <h3>ROUTER</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <button id="rn">Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-3 py-md-0">
                <div class="card">
                    <img src="./public//images//moderm.png" alt="">
                    <div class="card-img-overlay">
                        <h3>MODERM</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <button id="rn">Order Now</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- cards -->







    <!-- burger -->

    <!-- burger -->





    <!-- banner -->
    <!-- <div class="banner">
        <img src="../public//images//ban.jpg">
        <h3>Other Product</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto, voluptatibus?</p>
        <button id="btnorder">Order Now</button>
    </div> -->
    <!-- banner -->


    <!-- product cards  hot-->
    <div class="container" id="tipcarts">
        <h1 class="b1">PRODUCT</h1>
        <h2 class="b2">NEW </h2>


        <div class="row" style="margin-top: 30px;">
            <?php foreach ($product as $products) {
            ?>

                <div class="col-md-3 pt-3 py-md-">
                    <div class="card">
                        <a href="./detail.php?id=<?php echo $products['id'] ?>">
                            <img src="<?php echo $products['image'] ?>" alt=""  height="200" width="305">
                        </a>
                        <div class="card-body">
                            <h3><?php echo $products['name'] ?></h3>
                            <p><?php echo $products['description'] ?></p>
                            <h5><?php echo $products['price'] ?> <span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
    <div class="container" id="tipcarts">
        <h2 class="b2">HOT </h2>
        <div class="row " style="margin-top: 30px; " id="product-hot">
            <?php foreach ($product as $products) {
            ?>

                <div class="col-md-3 pt-3 py-md-">
                    <div class="card">
                        <a href="./detail.php?id=<?php echo $products['id'] ?>">
                            <img src="<?php echo $products['image'] ?>" alt=""  height="200" width="305">
                        </a>
                        <div class="card-body">
                            <h3><?php echo $products['name'] ?></h3>
                            <p><?php echo $products['description'] ?></p>
                            <h5><?php echo $products['price'] ?> <span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>









        <!-- burger -->
        <!-- <div class="container" id="burger">
            <h1 class="b1">DAILY DISCOVER</h1>
            <div class="row" style="margin-top: 30px;" id="product-list">
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./public/images/p1.png" alt="">
                        <div class="card-body">
                            <h3>Italian Pizza</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <h5>$6.50 <span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- burger -->








        <!-- about -->
        <div class="container" id="about">
            <h1>ABOUT</h1>
            <center>
                <div class="col-md-6 py-5 py-md-5">
                    
                    <h2> WIFI</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam accusamus exercitationem ut. Non
                        assumenda nihil tempore minima consequatur corrupti numquam quia dolorum laborum praesentium vero
                        commodi ex velit expedita, omnis adipisci? Exercitationem consequatur ducimus praesentium dolores
                        rerum voluptatibus, nam illo quas modi deleniti iusto laboriosam adipisci enim excepturi, cupiditate
                        quidem neque tempora sunt animi natus aliquid. Fugiat eligendi molestiae magnam vero dicta est
                        praesentium unde ducimus eveniet commodi alias, pariatur quis quod saepe sed accusamus porro nemo
                        doloribus cumque quos quo nihil! Numquam explicabo odit accusamus laudantium molestiae. Ipsum culpa
                        dolor sequi dolore doloribus aperiam, earum maxime alias voluptates magni.</p>
                    <div id="readmorebtn"><button>Read More...</button></div>
                </div>
                </center>
        </div>
        <!-- about -->






        <!-- contact -->
        <div class="container">
            <h2 id="h2">CONTACT</h2>
        </div>
        <div class="container" id="contact">
            <div class="row">
                <div class="col-md-6 py-3 py-md-0">
                    <h3>CONTACT</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem sit excepturi, nemo
                        reiciendis animi?</p>
                    <input type="text" placeholder="Name"><br>
                    <input type="email" placeholder="Email"><br>
                    <input type="number" placeholder="Phone"><br>
                    <button id="btnmessage">Send</button>
                </div>
                <div class="col-md-6 py-3 py-md-0">
                    <h3>INFO</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, odio assumenda nostrum commodi at
                        corporis!</p>
                    <i class="fas fa-phone"> <span>+000000000000000</span></i><br>
                    <i class="fa-solid fa-envelope"> <span>example@gmail.com</span></i><br>
                    <i class="fa-solid fa-location-dot"> <span>Pakistan sindh Karachi</span></i><br>
                </div>
            </div>
        </div>

        <!-- contact -->







        <!-- footer -->
        <footer id="footer" style="margin-top: 50px;">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 footer-contact">
                            <a class="navbar-brand" href="#" id="logo2"><img src="./public/images/logo1.png" alt="" width="50px">ROUTER</a>
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