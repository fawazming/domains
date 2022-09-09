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
        
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="index.html">
                        <img src="assets/images/logo-dark.png" class="l-dark" width="150" alt="">
                        <img src="assets/images/logo-light.png" class="l-light" width="160" alt="">
                    </a>
                </div>                 
                <div class="buy-button">
                    <a href="#" class="text-dark h6 me-3 login" data-bs-toggle="modal" data-bs-target="#LoginForm">Login</a>
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
                    <ul class="navigation-menu nav-light">
                        <li><a href="#" class="sub-menu-item">Home</a></li>
                        <li><a href="#gallery" class="sub-menu-item">Projects</a></li>
                        <li><a href="#appointment" class="sub-menu-item">Book an appointment</a></li>
                        <li><a href="#contact" class="sub-menu-item">Contact</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        <!-- Home Start -->
        <section class=" d-table w-100 bg-primary py-5" style="background: url('images/bg/bg2.png') center center;" id="home">
            <div class="gradient-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="title-heading text-center">
                            <!-- <img src="images/designer.svg" class="img-fluid" style="width: 500px;" alt=""> -->
                            <div style="min-height: 8vh;"></div>
                            <h1 class="heading display-3 text-white title-dark mt-5 mb-3">We <b class="d-none">Design Graphics, Sell Domain, Build Websites</b> <span class="typer text-white" id="main" data-words="Design Graphics, Sell Domain Names, Build Web Apps, Optimize Websites, Train Developers, " data-delay="100" data-deleteDelay="1000"></span><span class="cursor" data-owner="main"></span> </h1>
                            <p class="text-white-50 para-desc mx-auto mb-0">At Rayyan Technologies, we build websites that are not only visually beautiful, but also functionally effective.</p>
                        
                            <div class="mt-4">
                                <a href="#appointment" class="btn btn-primary mx-1">Get Started</a>
                                <a href="#domains" class="btn btn-light mx-1">Buy Domain</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Home End -->

        <!-- Services Start -->
        <section class="section py-5" id="services">
            <div class="container ">
                <div class="row justify-content-center align-items-center">
                    <div class="section-title text-center mb-3">
                        <h4 class="title text-dark title-dark mb-3">Services we Offer</h4>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="card services serv-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                            <span class="h1 icon2 text-primary">
                                <img src="https://icongr.am/material/web.svg?size=50&color=0068BC">
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Website Design</h5>
                                <!-- <p class="para text-muted mb-0"></p> -->
                            </div>
                            <div class="big-icon icon-right">
                                <img src="https://icongr.am/material/web.svg?size=130&color=009BDE">
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card services serv-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                            <span class="h1 icon2 text-primary">
                                 <img src="https://icongr.am/material/domain.svg?size=50&color=0068BC">
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Domain Name</h5>
                            </div>
                            <div class="big-icon icon-right">
                                <img src="https://icongr.am/material/domain.svg?size=130&color=009BDE">
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card services serv-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                            <span class="h1 icon2 text-primary">
                                 <img src="https://icongr.am/material/email.svg?size=50&color=0068BC">
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Custom Emails</h5>
                            </div>
                            <div class="big-icon icon-right">
                                <img src="https://icongr.am/material/email.svg?size=130&color=009BDE">
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                        <div class="card services serv-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                            <span class="h1 icon2 text-primary">
                                <img src="https://icongr.am/material/google.svg?size=50&color=0068BC">
                            </span>
                            <div class="card-body p-0 content">
                                <h5>SEO</h5>
                            </div>
                            <div class="big-icon icon-right">
                                <img src="https://icongr.am/material/google.svg?size=130&color=009BDE">
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Services End -->

        <!-- Search Hosting Start -->
        <section class="section bg-primary py-5" id="domains">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-5 pb-lg-4">
                            <h4 class="title text-white title-dark mb-3">Find a personal or professional domain</h4>
                            <p class="text-white-50 para-desc mx-auto mb-0">Explore, collaborate, create, and get a name for your incredible idea with us.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <section class="section pb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card domain-name shadow border-0 rounded-pill overflow-hidden py-0">
                            <div class="py-5 px-4 bg-white">
                                <div class="input-group mb-3">
                                    <!-- <form> -->
                                    <form class="input-group" action="<?=base_url()?>/search" method='POST'>
                                        <input type="text" class="form-control" placeholder="Your domain name: " name="domain" required>
                                        <span>
                                            <select class="form-control form-select rounded-0" id="domain_list" name="tld">
                                                <option>.com.ng</option>
                                                <option>.ng</option>
                                                <option>.com</option>
                                                <option>.org</option>
                                                <option>.net</option>
                                                <option>.sgm</option>
                                                <option>.ijb</option>
                                                <option>.abk</option>
                                            </select>
                                        </span>
                                        <input class="btn btn-primary" type="submit" value="Search">
                                    <!-- </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

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
                                        <h6 class="mb-0">.com <br><span class="text-primary">₦6999</span>/year</h6>
                                    </div>
                                </p>
                            </div><!--end col-->
                            
                            <div class="col-lg-2 col-md-4 col-6 mt-4">
                                <p class="text-dark">
                                    <div class="rounded shadow bg-white p-1 text-center">
                                        <h6 class="mb-0">.org <br><span class="text-primary">₦7999</span>/year</h6>
                                    </div>
                                </p>
                            </div><!--end col-->
                            
                            <div class="col-lg-2 col-md-4 col-6 mt-4">
                                <p class="text-dark">
                                    <div class="rounded shadow bg-white p-1 text-center">
                                        <h6 class="mb-0">.sgm <br><span class="text-primary">₦499</span>/year</h6>
                                    </div>
                                </p>
                            </div><!--end col-->
                            
                            <div class="col-lg-2 col-md-4 col-6 mt-4">
                                <p class="text-dark">
                                    <div class="rounded shadow bg-white p-1 text-center">
                                        <h6 class="mb-0">.ijb <br><span class="text-primary">₦499</span>/year</h6>
                                    </div>
                                </p>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Search Hosting End -->

          <section class="section bg-light py-5" id="projects">
            <div class="container">
                <div class="section-title text-center mb-4 pb-4 pb-lg-4">
                            <h4 class="title text-dark title-dark ">Explore our Work</h4>
                            <p class="text-dark-50 para-desc mx-auto mb-0">We take pride in what we do and we will like to do more with you</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12 text-center">
                        <ul class="nav nav-pills bg-white nav-justified flex-column flex-sm-row rounded px-0" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link rounded active" id="pills-one-tab" data-bs-toggle="pill" href="#pills-one" role="tab" aria-controls="pills-one" aria-selected="false">
                                    <div class="text-center py-2">
                                        <h4 class="title fw-normal mb-0">Websites & Applications</h4>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item">
                                <a class="nav-link rounded" id="pills-two-tab" data-bs-toggle="pill" href="#pills-two" role="tab" aria-controls="pills-two" aria-selected="false">
                                    <div class="text-center py-2">
                                        <h4 class="title fw-normal mb-0">Wordpress Websites</h4>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item">
                                <a class="nav-link rounded" id="pills-three-tab" data-bs-toggle="pill" href="#pills-three" role="tab" aria-controls="pills-three" aria-selected="false">
                                    <div class="text-center py-2">
                                        <h4 class="title fw-normal mb-0">Domain Names</h4>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item">
                                <a class="nav-link rounded" id="pills-four-tab" data-bs-toggle="pill" href="#pills-four" role="tab" aria-controls="pills-four" aria-selected="false">
                                    <div class="text-center py-2">
                                        <h4 class="title fw-normal mb-0">Graphics Design</h4>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                        </ul><!--end nav pills-->
                    </div><!--end col-->
                </div><!--end row-->
                
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-12 mt-4 pt-2">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center">
                                            <div class="display-1 text-primary me-md-4 me-3">
                                                <!-- <span data-src="default/image" data-alt="some alt text"
                                                      data-srcset="small/image 600w, big/image 1000w"
                                                      data-title="some title"
                                                      class="justlazy-spinner">
                                                </span> -->
                                                <span data-src="https://icongr.am/material/shield-check.svg?size=130&color=009BDE" data-alt="..." class="lazy"></span>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page (layout or type area).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end row-->
                            </div><!--end teb pane-->
                            
                            <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center">
                                            <div class="display-1 text-primary me-md-4 me-3">
                                                <i class="uil uil-users-alt"></i>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page (layout or type area).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end row-->                    
                            </div><!--end teb pane-->

                            <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center">
                                            <div class="display-1 text-primary me-md-4 me-3">
                                                <i class="uil uil-monitor-heart-rate"></i>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page (layout or type area).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end row-->                     
                            </div><!--end teb pane-->

                            <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center">
                                            <div class="display-1 text-primary me-md-4 me-3">
                                                <i class="uil uil-tachometer-fast-alt"></i>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page (layout or type area).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end row-->                     
                            </div><!--end teb pane-->
                        </div><!--end tab content-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->

        <!-- CLient and faq Start -->
        <section class="section bg-dark text-white py-5" id="testimonial">
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center pb-2">
                            <h4 class="title mb-3">What People Say</h4>
                            <!-- <p class="text-muted para-desc mx-auto mb-0">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p> -->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 mt-2">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                        <div class="carousel-inner tiny-single-item">
                            <div class="carousel-item active">
                              <div class="tiny-slide">
                                <div class="card border-0 text-center client-bar m-2">
                                    <div class="card-body content rounded-pill  px-4 py-5 shadow position-relative">
                                        <i class="mdi mdi-format-quote-open icons text-primary"></i>
                                        <p class="text-muted mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces.</p>
                                    </div>
                                    <img src="images/client/01.jpg" class="avatar avatar-md-md mt-4 testi-img rounded-circle shadow mx-auto" alt="">
                                    <h6 class="text-primary mt-2 mb-0">Thomas Israel</h6>
                                    <small class="text-muted">C.E.O</small>
                                </div>
                            </div>
                            </div>
                            <div class="carousel-item">
                              <div class="tiny-slide">
                                <div class="card border-0 text-center client-bar m-2">
                                    <div class="card-body content rounded-pill  px-4 py-5 shadow position-relative">
                                        <i class="mdi mdi-format-quote-open icons text-primary"></i>
                                        <p class="text-muted mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces.</p>
                                    </div>
                                    <img src="images/client/02.jpg" class="avatar avatar-md-md mt-4 testi-img rounded-circle shadow mx-auto" alt="">
                                    <h6 class="text-primary mt-2 mb-0">Thomas Israel</h6>
                                    <small class="text-muted">C.E.O</small>
                                </div>
                            </div>
                            </div>
                            <div class="carousel-item">
                              <div class="tiny-slide">
                                <div class="card border-0 text-center client-bar m-2">
                                    <div class="card-body content rounded-pill  px-4 py-5 shadow position-relative">
                                        <i class="mdi mdi-format-quote-open icons text-primary"></i>
                                        <p class="text-muted mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces.</p>
                                    </div>
                                    <img src="images/client/03.jpg" class="avatar avatar-md-md mt-4 testi-img rounded-circle shadow mx-auto" alt="">
                                    <h6 class="text-primary mt-2 mb-0">Thomas Israel</h6>
                                    <small class="text-muted">C.E.O</small>
                                </div>
                            </div>
                            </div>
                          </div>
                    </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
        <section class="section py-5">
            <div class="container mt-100 mt-60">
                <div class="row align-items-center mb-4 pb-2">
                    <div class="col-md-6">
                        <div class="section-title">
                            <h4 class="title mb-md-0 mb-4">Frequently asked <br> questions</h4>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="section-title">
                            <p class="text-muted para-desc mb-0">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 col-12 mt-4 pt-2">
                        <div class="d-flex">
                            <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                            <div class="flex-1">
                                <h5 class="mt-0">How our <span class="text-primary">Hostick</span> work ?</h5>
                                <p class="answer text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-6 col-12 mt-4 pt-2">
                        <div class="d-flex">
                            <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                            <div class="flex-1">
                                <h5 class="mt-0"> What is the main process open account ?</h5>
                                <p class="answer text-muted mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-6 col-12 mt-4 pt-2">
                        <div class="d-flex">
                            <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                            <div class="flex-1">
                                <h5 class="mt-0"> How to make unlimited data entry ?</h5>
                                <p class="answer text-muted mb-0">Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-6 col-12 mt-4 pt-2">
                        <div class="d-flex">
                            <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                            <div class="flex-1">
                                <h5 class="mt-0"> Is <span class="text-primary">Hostick</span> safer to use with my account ?</h5>
                                <p class="answer text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row mt-5 pt-4 justify-content-center" id="appointment">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title mb-3">Book an appointment</h4>
                            <p class="text-muted para-desc mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4"><i class="mdi mdi-phone"></i> Contact us</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- CLient and faq End -->

        <!-- Footer Start -->
        <footer class="footer bg-footer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-md-center">
                            <h4 class="text-light title-dark mb-0">Have Question ? Get in touch!</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row mt-3 justify-content-center">
                    <div class="col-md-4 col-6 mt-4 pt-2">
                        <div class="text-md-center">
                            <div class="icon">
                                <i data-feather="mail" class="fea icon-md text-light title-dark"></i>
                            </div>
                            <div class="content mt-2">
                                <h5 class="title text-light title-dark">Email</h5>
                                <a href="mailto:contact@example.com" class="text-foot">contact@example.com</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 col-6 mt-4 pt-2">
                        <div class="text-md-center">
                            <div class="icon">
                                <i data-feather="phone" class="fea icon-md text-light title-dark"></i>
                            </div>
                            <div class="content mt-2">
                                <h5 class="title text-light title-dark">Phone</h5>
                                <a href="tel:+152534-468-854" class="text-foot">+152 534-468-854</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 mt-4 pt-2">
                        <div class="text-md-center">
                            <div class="icon">
                                <i data-feather="map-pin" class="fea icon-md text-light title-dark"></i>
                            </div>
                            <div class="content mt-2">
                                <h5 class="title text-light title-dark">Location</h5>
                                <a href="#" class="text-foot">Nigeria</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <footer class="footer footer-line bg-footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-6 col-md-7">
                        <div class="text-sm-start">
                            <p class="mb-0 text-foot">© <script>document.write(new Date().getFullYear())</script> Rayyan Technologies</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled terms-service text-sm-end mb-0">
                            <li class="list-inline-item mb-0"><a href="page-privacy.html" class="text-foot me-2">Domains</a></li>
                            <li class="list-inline-item mb-0"><a href="page-terms.html" class="text-foot me-2">Wordpress</a></li>
                            <li class="list-inline-item mb-0"><a href="page-faqs.html" class="text-foot me-2">Business Website</a></li>
                            <li class="list-inline-item mb-0"><a href="contact.html" class="text-foot">Contact</a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Login Modal Content Start -->
        <div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content rounded shadow border-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Login </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="login-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 position-relative">
                                        <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="email" required="" placeholder="Your Email :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-12">
                                    <div class="mb-3 position-relative">
                                        <label class="form-label">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" required="" placeholder="Password :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-12">
                                    <div class="d-flex justify-content-between">
                                        <div class="mb-3 d-inline-block">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                            </div>
                                        </div>
                                        <p class="forgot-pass mb-0"><a href="page-forgot-password.html" class="text-dark fw-bold">Forgot password ?</a></p>
                                    </div>
                                </div><!--end col-->
                                <div class="col-12 mb-0">
                                    <button class="btn btn-primary w-100">Sign in</button>
                                </div><!--end col-->
                                <div class="col-12 mt-4 text-center">
                                    <h6 class="mb-0">Or Login With</h6>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-6 mt-4">
                                            <a href="#" class="btn w-100 btn-light bg-facebook"><i class="mdi mdi-facebook"></i> Facebook</a>
                                        </div>
                                        <div class="col-sm-6 mt-4">
                                            <a href="#" class="btn w-100 btn-light"><i class="mdi mdi-google"></i> Google</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small> <a href="page-signup.html" class="text-dark fw-bold">Sign Up</a></p>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Modal Content End -->

        <!-- Back to top -->
        <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->
        
        <!-- javascript -->
        <script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
        <script src="assets/js/justlazy.js"></script>
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