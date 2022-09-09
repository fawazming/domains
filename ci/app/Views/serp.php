<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>RayyanTech: The Leading Web App Designer & Developer in Nigeria</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="RayyanTech, Nigeria, Web App, web developer, web deeigner" />
        <meta name="description" content="We are the best and leading web designer & developer in Nigeria, powered by young and innovative mind. Offering cheap and affordable web hosting. " />
        <meta name="author" content="Fawaz Ibraheem" />
        <meta name="version" content="2.1.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap5.min.css">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css"> -->
        <!-- Css -->
        <link href="assets/css/style.min.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        
        <!-- Navbar Start -->
        <header id="topnav" class="defaultscroll sticky mb-5">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="https://rayyantech.sgm.ng/index.html">
                        <img src="assets/images/logo-dark.png" class="l-dark" width="150" alt="">
                        <img src="assets/images/logo-dark.png" class="l-light" width="160" alt="">
                    </a>
                </div>                 
                <div class="buy-button">
                    <a href="tel:08108097322" class="btn btn-primary">Support</a>
                </div><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="https://rayyantech.sgm.ng/index.html" class="sub-menu-item">Home</a></li>
                        <li><a href="https://rayyantech.sgm.ng/index.html#gallery" class="sub-menu-item">Projects</a></li>
                        <li><a href="https://rayyantech.sgm.ng/index.html#appointment" class="sub-menu-item">Book an appointment</a></li>
                        <li><a href="https://rayyantech.sgm.ng/index.html#contact" class="sub-menu-item">Contact</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->
        <!-- Services Start -->
        <section class="section py-5 mt-5" id="services">
            <div class="container ">
                <div class="row justify-content-center align-items-center">
                    <div class="section-title text-center mb-3">
                        <h4 class="title text-dark title-dark mb-3">Domain Search Result</h4>
                    </div>
                    <?php if ($data[0]['isAvailable']) : ?>
                    <div class="col-lg-6 col-md-6 col-12 mb-3 py-5">
                        <div class="card services serv-primary rounded p-4 bg-light position-relative overflow-hidden border-0 text-dark">
                            <div class="card-body p-0 content d-flex justify-content-between align-items-center my-3">
                                <div>
                                   <h5 class=""><?=$data[0]['dname']?></h5>
                                    <p class="para text-muted mb-0">✅ Domain is available</p> 
                                </div>
                                <p class="lead">😁 Congratulations 🎊</p>
                                
                            </div>
                            <div class="big-icon icon-right">
                                <span>✅</span>
                            </div>
                        </div>
                    </div><!--end col-->
                    <?php else: ?>
                    <div class="col-lg-6 col-md-6 col-12 mb-3 py-5">
                        <div class="card services serv-primary rounded p-4 bg-light position-relative overflow-hidden border-0 text-dark">
                            <div class="card-body p-0 content d-flex justify-content-between align-items-center my-3">
                                <div>
                                    <h5 class=""><?=$data[0]['dname']?></h5>
                                    <p class="para text-muted mb-0">❌ Domain is unavailable</p>
                                </div>


                                <p class="lead text-center">😔 Sorry!! <br> <a onclick="history.back()" href="#!" class="">Search for another keyword</a></p>
                            </div>
                            <div class="big-icon icon-right">
                                <span>❌ Sorry</span>
                            </div>
                        </div>
                    </div><!--end col-->
                    <?php endif; ?>
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Services End -->

        <section class="section mt-sm-0 pt-sm-0 pb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-6 mt-4">
                                <p class="text-dark">
                                    <div class="rounded shadow bg-white p-1 text-center">
                                        <h6 class="mb-0">.NG <br><span class="text-primary">₦5999</span>/year</h6>
                                    </div>
                                </p>
                            </div><!--end col-->
                            
                            <div class="col-lg-2 col-md-4 col-6 mt-4">
                                <p class="text-dark">
                                    <div class="rounded shadow bg-white p-1 text-center">
                                        <h6 class="mb-0">.com.ng <br><span class="text-primary">₦1999</span>/year</h6>
                                    </div>
                                </p>
                            </div><!--end col-->

                             <div class="col-lg-2 col-md-4 col-6 mt-4">
                                <p class="text-dark">
                                    <div class="rounded shadow bg-white p-1 text-center">
                                        <h6 class="mb-0">.org.ng <br><span class="text-primary">₦1999</span>/year</h6>
                                    </div>
                                </p>
                            </div><!--end col-->

                            <div class="col-lg-2 col-md-4 col-6 mt-4">
                                <p class="text-dark">
                                    <div class="rounded shadow bg-white p-1 text-center">
                                        <h6 class="mb-0">.com <br><span class="text-primary">₦7499</span>/year</h6>
                                    </div>
                                </p>
                            </div><!--end col-->

                            <div class="col-lg-2 col-md-4 col-6 mt-4">
                                <p class="text-dark">
                                    <div class="rounded shadow bg-white p-1 text-center">
                                        <h6 class="mb-0">.org <br><span class="text-primary">₦8999</span>/year</h6>
                                    </div>
                                </p>
                            </div><!--end col-->

                            <div class="col-lg-2 col-md-4 col-6 mt-4">
                                <p class="text-dark">
                                    <div class="rounded shadow bg-white p-1 text-center">
                                        <h6 class="mb-0">.net <br><span class="text-primary">₦9999</span>/year</h6>
                                    </div>
                                </p>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Search Hosting End -->
        <footer class="footer footer-line bg-footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-6 col-md-7">
                        <div class="text-sm-start">
                            <p class="mb-0 text-foot">© <script>document.write(new Date().getFullYear())</script> Rayyan Technologies</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- javascript -->
        <!-- <script src="assets/js/justlazy.js"></script> -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- SLIDER -->
        <!-- <script src="js/tiny-slider.js "></script> -->
        <!-- <script src="js/tiny-slider-init.js "></script> -->
        <!-- Icons -->
        <!-- <script src="js/feather.min.js"></script> -->
        <!-- Switcher -->
        <!-- <script src="js/switcher.js"></script> -->
        
        <!-- Main Js -->
        <script src="assets/js/app.js"></script>
        
    </body>

</html>