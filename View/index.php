<?php
include  "../Controller/CategorieC.php";
include  "../Controller/ProduitC.php";

$catC= new CategorieC();
$prodC= new ProduitC();
    $liste=$prodC->afficherProduits();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home 01</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <!-- Plugin css -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/lightcase.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.nstSlider.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/flexslider.css" media="all" />

    <!-- own style css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/rtl.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />

</head>

<body>

    <!-- Start Pre-Loader--
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>
     Start Pre-Loader -->


    <div class="box-layout">

    <?php include'header.php' ?>

        <!-- Start Slider Section -->
        <section class="bg-slider-option">
            <div class="slider-option slider-two">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="slider-item">
                                <img src="assets/images/home02/slider-img-2.jpg" alt="bg-slider-2">
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="slider-content">
                                                    <h3>Donate & help</h3>
                                                    <h2>For the Tree</h2>
                                                    <p>Greenforest html Template</p>
                                                    <div class="slider-btn">
                                                        <a href="#" class="btn btn-default">join now</a>
                                                        <a href="donate.html" class="btn btn-default">donate now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="slider-item">
                                <img src="assets/images/home02/slider-img-3.jpg" alt="bg-slider-2">
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="slider-content">
                                                    <h3>welcome to green forest</h3>
                                                    <h2>save the world</h2>
                                                    <p>By Planting Tree Tomorrow!</p>
                                                    <div class="slider-btn">
                                                        <a href="#" class="btn btn-default">join now</a>
                                                        <a href="donate.html" class="btn btn-default">donate now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="left carousel-control carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="right carousel-control carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- End Slider Section -->


        <!-- Start About Greenforest Section -->
        <section class="bg-about-greenforest">
            <div class="container">
                <div class="row">
                    <div class="about-greenforest">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="about-greenforest-content">
                                    <h2>about greenforest</h2>
                                    <p><span>Globaly eenable turnkey aplcations interndent awesome andbenefisa tional awesome ascenarios exceptional scenarios awesome theme strategies.</span></p>
                                    <p>Globally eenable turnkey applications via interdependent awesome andbenefitsa theme are awesome Uniquely formulate impacful bandwidth with client centered creative ianitiatives Interively productivate vertcal paradigms before resource maximg convergence. Efciey diseminate mtidisciplinary mindshare after clientcentered creative theme experienvertcal paradigms before resource maximg convergence. Efciey diseminate mindshare clientcentered creative theme experiences.</p>
                                    <a href="#" class="btn btn-default">join now</a>
                                    <a href="#" class="btn btn-default">donate now</a>
                                </div>
                                <!-- .about-greenforest-content -->
                            </div>
                            <!-- .col-lg-8 -->
                            <div class="col-lg-4">
                                <div class="about-greenforest-img">
                                    <img src="assets/images/home02/about-greenforet-img.jpg" alt="about-greenforet-img" class="img-responsive" />
                                </div>
                                <!-- .about-greenforest-img -->
                            </div>
                            <!-- .col-md-4 -->
                        </div>
                    </div>
                    <!-- .about-greenforest -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- End About Greenforest Section -->



        <!-- Start Recent Project Section -->
        <section class="bg-recent-project">
            <div class="container">
                <div class="row">
                    <div class="recent-project">
                        <div class="section-header">
                            <h2>recent project</h2>
                            <p>Professionally mesh enterprise wide imperatives without world class paradigms.Dynamically deliver ubiquitous leadership awesome skills.</p>
                        </div>
                        <!-- .section-header -->

                        <div id="filters" class="button-group ">
                            <button class="button is-checked" data-filter="*">show all</button>
                            <button class="button" data-filter=".cat-1">environment</button>
                            <button class="button" data-filter=".cat-2">recycling</button>
                            <button class="button" data-filter=".cat-3">ecology</button>
                            <button class="button" data-filter=".cat-4">climate</button>
                        </div>
                        <div class="portfolio-items">
                            <div class="item cat-1" data-category="transition">
                                <div class="item-inner">
                                    <div class="portfolio-img">
                                        <div class="overlay-project"></div>
                                        <!-- .overlay-project -->
                                        <img src="assets/images/home02/recent-project-img-1.jpg" alt="recent-project-img-1">
                                        <ul class="project-link-option">
                                            <li class="project-link"><a href="project_single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li class="project-search"><a href="assets/images/home02/recent-project-img-1.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- /.portfolio-img -->
                                    <div class="recent-project-content">
                                        <h4><a href="project_single.html">Sustainable Agriculture</a></h4>
                                        <p>By : <span><a href="#">Green Forest</a></span></p>
                                    </div>
                                    <!-- .latest-port-content -->
                                </div>
                                <!-- .item-inner -->
                            </div>
                            <!-- .items -->

                            <div class="item cat-2 " data-category="metalloid">
                                <div class="item-inner">
                                    <div class="portfolio-img">
                                        <div class="overlay-project"></div>
                                        <!-- .overlay-project -->
                                        <img src="assets/images/home02/recent-project-img-2.jpg" alt="recent-project-img-2">
                                        <ul class="project-link-option">
                                            <li class="project-link"><a href="project_single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li class="project-search"><a href="assets/images/home02/recent-project-img-2.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- /.portfolio-img -->
                                    <div class="recent-project-content">
                                        <h4><a href="project_single.html">Helping Young Planting</a></h4>
                                        <p>By : <span><a href="#">Green Forest</a></span></p>
                                    </div>
                                    <!-- .latest-port-content -->
                                </div>
                                <!-- .item-inner -->
                            </div>
                            <!-- .items -->

                            <div class="item cat-3 " data-category="post-transition">
                                <div class="item-inner">
                                    <div class="portfolio-img">
                                        <div class="overlay-project"></div>
                                        <!-- .overlay-project -->
                                        <img src="assets/images/home02/recent-project-img-3.jpg" alt="recent-project-img-3">
                                        <ul class="project-link-option">
                                            <li class="project-link"><a href="project_single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li class="project-search"><a href="assets/images/home02/recent-project-img-3.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- /.portfolio-img -->
                                    <div class="recent-project-content">
                                        <h4><a href="project_single.html">Need Solar Panels</a></h4>
                                        <p>By : <span><a href="#">Green Forest</a></span></p>
                                    </div>
                                    <!-- .latest-port-content -->
                                </div>
                                <!-- .item-inner -->
                            </div>
                            <!-- .items -->

                            <div class="item cat-2" data-category="post-transition">
                                <div class="item-inner">
                                    <div class="portfolio-img">
                                        <div class="overlay-project"></div>
                                        <!-- .overlay-project -->
                                        <img src="assets/images/home02/recent-project-img-4.jpg" alt="recent-project-img-4">
                                        <ul class="project-link-option">
                                            <li class="project-link"><a href="project_single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li class="project-search"><a href="assets/images/home02/recent-project-img-4.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- /.portfolio-img -->
                                    <div class="recent-project-content">
                                        <h4><a href="project_single.html">Save The Ozone Layer</a></h4>
                                        <p>By : <span><a href="#">Green Forest</a></span></p>
                                    </div>
                                    <!-- .latest-port-content -->
                                </div>
                                <!-- .item-inner -->
                            </div>
                            <!-- .items -->
                            <div class="item cat-4" data-category="transition">
                                <div class="item-inner">
                                    <div class="portfolio-img">
                                        <div class="overlay-project"></div>
                                        <!-- .overlay-project -->
                                        <img src="assets/images/home02/recent-project-img-5.jpg" alt="recent-project-img-5">
                                        <ul class="project-link-option">
                                            <li class="project-link"><a href="project_single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li class="project-search"><a href="assets/images/home02/recent-project-img-5.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- /.portfolio-img -->
                                    <div class="recent-project-content">
                                        <h4><a href="project_single.html">Save Water From Polution</a></h4>
                                        <p>By : <span><a href="#">Green Forest</a></span></p>
                                    </div>
                                    <!-- .latest-port-content -->
                                </div>
                                <!-- .item-inner -->
                            </div>
                            <!-- .items -->
                            <div class="item cat-1" data-category="alkali">
                                <div class="item-inner">
                                    <div class="portfolio-img">
                                        <div class="overlay-project"></div>
                                        <!-- .overlay-project -->
                                        <img src="assets/images/home02/recent-project-img-6.jpg" alt="recent-project-img-6">
                                        <ul class="project-link-option">
                                            <li class="project-link"><a href="project_single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li class="project-search"><a href="assets/images/home02/recent-project-img-6.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- /.portfolio-img -->
                                    <div class="recent-project-content">
                                        <h4><a href="project_single.html">Make Plants Alive</a></h4>
                                        <p>By : <span><a href="#">Green Forest</a></span></p>
                                    </div>
                                    <!-- .latest-port-content -->
                                </div>
                                <!-- .item-inner -->
                            </div>
                            <!-- .items -->
                        </div>
                        <!-- .isotope-items -->
                    </div>
                    <!-- .recent-project -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- End Recent Project Section -->


        <!-- Start Count Section -->
        <section class="bg-count2-section">
            <div class="count-overlay">
                <div class="container">
                    <div class="row">
                        <div class="count-option">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="count-items">
                                        <i class="flaticon-internet"></i>
                                        <span class="counter" data-to="25" data-speed="1500"></span><span>+</span>
                                        <h4>GLOBALIZATION WORK</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="count-items">
                                        <i class="flaticon-man"></i>
                                        <span class="counter" data-to="750" data-speed="1500"></span><span>+</span>
                                        <h4>HAPPY DONATORS</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="count-items">
                                        <i class="flaticon-rocket-launch"></i>
                                        <span class="counter" data-to="250" data-speed="1500"></span>
                                        <h4>SUCCESS MISSION</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="count-items">
                                        <i class="flaticon-people"></i>
                                        <span class="counter" data-to="1000" data-speed="1500"></span>
                                        <h4>VOLUNTEER REACHED</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Count Section -->



        <!-- Start Service Style2 Section -->
        <section class="bg-servicesstyle2-section">
            <div class="container">
                <div class="row">
                    <div class="our-services-option">
                        <div class="section-header">
                            <h2>what we do</h2>
                            <p>Professionally mesh enterprise wide imperatives without world class paradigms.Dynamically deliver ubiquitous leadership awesome skills.</p>
                        </div>
                        <!-- .section-header -->
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="our-services-box">
                                    <div class="our-services-items">
                                        <i class="flaticon-greenhouse"></i>
                                        <div class="our-services-content">
                                            <h4><a href="service_single.html">Young Planting</a></h4>
                                            <p>Credibly utcost efective an expertise and web enabled proces that improvements Completely seamless channels </p>
                                            <a href="service_single.html">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                        <!-- .our-services-content -->
                                    </div>
                                    <!-- .our-services-items -->
                                </div>
                                <!-- .our-services-box -->
                            </div>
                            <!-- .col-md-4 -->
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="our-services-box">
                                    <div class="our-services-items">
                                        <i class="flaticon-technology"></i>
                                        <div class="our-services-content">
                                            <h4><a href="service_single.html">Solar Panels</a></h4>
                                            <p>Credibly utcost efective an expertise and web enabled proces that improvements Completely seamless channels </p>
                                            <a href="service_single.html">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                        <!-- .our-services-content -->
                                    </div>
                                    <!-- .our-services-items -->
                                </div>
                                <!-- .our-services-box -->
                            </div>
                            <!-- .col-md-4 -->
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="our-services-box">
                                    <div class="our-services-items">
                                        <i class="flaticon-light-bulb"></i>
                                        <div class="our-services-content">
                                            <h4><a href="service_single.html">Wind Energy</a></h4>
                                            <p>Credibly utcost efective an expertise and web enabled proces that improvements Completely seamless channels </p>
                                            <a href="service_single.html">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                        <!-- .our-services-content -->
                                    </div>
                                    <!-- .our-services-items -->
                                </div>
                                <!-- .our-services-box -->
                            </div>
                            <!-- .col-md-4 -->
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="our-services-box">
                                    <div class="our-services-items">
                                        <i class="flaticon-recycling-symbol"></i>
                                        <div class="our-services-content">
                                            <h4><a href="service_single.html">Recycling</a></h4>
                                            <p>Credibly utcost efective an expertise and web enabled proces that improvements Completely seamless channels </p>
                                            <a href="service_single.html">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                        <!-- .our-services-content -->
                                    </div>
                                    <!-- .our-services-items -->
                                </div>
                                <!-- .our-services-box -->
                            </div>
                            <!-- .col-md-4 -->
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="our-services-box">
                                    <div class="our-services-items">
                                        <i class="flaticon-sprout"></i>
                                        <div class="our-services-content">
                                            <h4><a href="service_single.html">Saving Forests</a></h4>
                                            <p>Credibly utcost efective an expertise and web enabled proces that improvements Completely seamless channels </p>
                                            <a href="service_single.html">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                        <!-- .our-services-content -->
                                    </div>
                                    <!-- .our-services-items -->
                                </div>
                                <!-- .our-services-box -->
                            </div>
                            <!-- .col-md-4 -->
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="our-services-box">
                                    <div class="our-services-items">
                                        <i class="flaticon-droplet"></i>
                                        <div class="our-services-content">
                                            <h4><a href="service_single.html">Water Refining</a></h4>
                                            <p>Credibly utcost efective an expertise and web enabled proces that improvements Completely seamless channels </p>
                                            <a href="service_single.html">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                        <!-- .our-services-content -->
                                    </div>
                                    <!-- .our-services-items -->
                                </div>
                                <!-- .our-services-box -->
                            </div>
                            <!-- .col-md-4 -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .our-services-option -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- End Service Style2 Section -->


        <!-- Start Focus Cause Section -->
        <section class="bg-focus-cause-section2">
            <div class="container">
                <div class="row">
                    <div class="focus-cause">
                        <div class="section-header">
                            <h2>Focused Causes</h2>
                            <p>Professionally mesh enterprise wide imperatives without world class paradigms.Dynamically deliver ubiquitous leadership awesome skills.</p>
                        </div>
                        <!-- .section-header -->
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="cause-items">
                                    <a href="campaign_single.html"><img src="assets/images/home02/cause-img-1.jpg" alt="cause-img-1" class="img-responsive" /></a>
                                    <div class="cause-content">
                                        <div class="price-title">
                                            <div class="price-left">
                                                <h5>Raised:<span>$25.000</span></h5>
                                            </div>
                                            <!-- .price-left -->
                                            <div class="price-right">
                                                <h5>Raised:<span>$50.000</span></h5>
                                            </div>
                                            <!-- .price-left -->
                                        </div>
                                        <!-- .price-title -->
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                            </div>
                                            <!-- .progress-bar -->
                                        </div>
                                        <!-- .progress -->
                                        <h4><a href="campaign_single.html">Sustainable Agriculture</a></h4>
                                        <p>Credibly iplement interopriable that a just Continually cultivate awesome team.</p>
                                        <a href="donate.html" class="btn btn-default">donate Now</a>
                                    </div>
                                    <!-- .cause-content -->
                                </div>
                                <!-- .cause-items -->
                            </div>
                            <!-- .col-md-4 -->
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="cause-items">
                                    <a href="campaign_single.html"><img src="assets/images/home02/cause-img-2.jpg" alt="cause-img-2" class="img-responsive" /></a>
                                    <div class="cause-content">
                                        <div class="price-title">
                                            <div class="price-left">
                                                <h5>Raised:<span>$25.000</span></h5>
                                            </div>
                                            <!-- .price-left -->
                                            <div class="price-right">
                                                <h5>Raised:<span>$50.000</span></h5>
                                            </div>
                                            <!-- .price-left -->
                                        </div>
                                        <!-- .price-title -->
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                            </div>
                                            <!-- .progress-bar -->
                                        </div>
                                        <!-- .progress -->
                                        <h4><a href="campaign_single.html">Helping Young Planting</a></h4>
                                        <p>Credibly iplement interopriable that a just Continually cultivate awesome team.</p>
                                        <a href="donate.html" class="btn btn-default">donate Now</a>
                                    </div>
                                    <!-- .cause-content -->
                                </div>
                                <!-- .cause-items -->
                            </div>
                            <!-- .col-md-4 -->
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="cause-items">
                                    <a href="campaign_single.html"><img src="assets/images/home02/cause-img-3.jpg" alt="cause-img-3" class="img-responsive" /></a>
                                    <div class="cause-content">
                                        <div class="price-title">
                                            <div class="price-left">
                                                <h5>Raised:<span>$25.000</span></h5>
                                            </div>
                                            <!-- .price-left -->
                                            <div class="price-right">
                                                <h5>Raised:<span>$50.000</span></h5>
                                            </div>
                                            <!-- .price-left -->
                                        </div>
                                        <!-- .price-title -->
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                            </div>
                                            <!-- .progress-bar -->
                                        </div>
                                        <!-- .progress -->
                                        <h4><a href="campaign_single.html">Make Plants Alive</a></h4>
                                        <p>Credibly iplement interopriable that a just Continually cultivate awesome team.</p>
                                        <a href="donate.html" class="btn btn-default">donate Now</a>
                                    </div>
                                    <!-- .cause-content -->
                                </div>
                                <!-- .cause-items -->
                            </div>
                            <!-- .col-md-4 -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .focus-cause -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- End Focus Cause Section -->



        <!-- Start campaian video Section -->
        <section class="bg-compaian-video">
            <div class="compaian-video-overlay">
                <div class="container">
                    <div class="row">
                        <div class="compaian-video">
                            <a href="https://www.youtube.com/embed/imVlGxbHxEo" data-rel="lightcase:myCollection"><img src="assets/images/home02/video-icon.png" alt="video-icon" /></a>
                            <h3>WATCH OUR LATEST CAMPAIGN VIDEO</h3>
                        </div>
                        <!-- .compaian-video -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .compaian-video-overlay -->
        </section>
        <!-- End campaian video Section -->
        <!-- Start Collection Se Section -->
        <section class="bg-collection-section">
            <div class="container">
                <div class="row">
                    <div class="collection-option">
                        <div class="section-header">
                            <h2>Nos Produits</h2>
                            <p>Produits</p>
                        </div>
                        <!-- .section-header -->
                        <div class="row">

                                <?php
                        // connect to database
                        $con = mysqli_connect('localhost','root','');
                        mysqli_select_db($con, 'ecolayer');

                        // define how many results you want per page
                        $results_per_page = 4;

                        // find out the number of results stored in database
                        $sql='SELECT * FROM produit';
                        $result = mysqli_query($con, $sql);
                        $number_of_results = mysqli_num_rows($result);

                        // determine number of total pages available
                        $number_of_pages = ceil($number_of_results/$results_per_page);

                        // determine which page number visitor is currently on
                        if (!isset($_GET['page'])) {
                        $page = 1;
                        } else {
                        $page = $_GET['page'];
                        }

                        // determine the sql LIMIT starting number for the results on the displaying page
                        $this_page_first_result = ($page-1)*$results_per_page;

                        // retrieve selected results from database and display them on page
                        $sql='SELECT * FROM produit LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
                        $result = mysqli_query($con, $sql);

                        while($row = mysqli_fetch_array($result)) {
                            
                        echo '
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                <div class="collection-items">
                                                    <div class="collection-img">
                                                        <div class="collection-overlay"></div>
                                                        <img src="../Admin/'.$row['image'].'" alt="collection-img-1" />
                                                        <ul class="collection-icon">
                                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
                                                            <li><a href="../Admin/'.$row['image'].'" data-rel="lightcase:myCollection"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- .collection-img -->
                                                    <div class="collection-content">
                                                        <h4><a href="AfficherProd.php?id='.$row['id'].'">Nom : '.$row['nom'].'</a></h4>
                                                        <h5>Prix : '.$row['prix'].' TND</h5>
                                                        <h5>';
                                                                    $resultaa = $catC->afficherCategorieWithID($row["id_categorie"]);
                                                                    foreach($resultaa as $row2)
                                                                    { 
                                                                        echo "Categorie : ".$row2['nom'];
                                                                    }
                                                                    echo'
                                                                    </h5>
                                                        <h6>Info : '.$row['informations'].'</h6>
                                                    </div>
                                                    <!-- .collection-content -->
                                                </div>
                                                <!-- .collection-items -->
                                                </div>';
                                                }
                                                ?>
                                            <div class="pagination-option">
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination">
                                                            <?php 
                                                                // display the links to the pages
                                                            for ($page=1;$page<=$number_of_pages;$page++) {
                                                            $getpage = "";
                                                            if(isset($_GET['page']))
                                                            {
                                                            $getpage = $_GET['page'];
                                                            }
                                                            if($page==$getpage)
                                                            echo '<li class="active"><a href="index.php?page=' . $page . '"  >' . $page . '</a></li> ';
                                                            else
                                                            echo '<li><a href="index.php?page=' . $page . '" >' . $page . '</a></li>';
                                                        }
                                                        ?>    
                                                    </ul>
                                                </nav>
                                            </div>

                                                    <!-- .col-lg-3 -->
                                                    </div>
                                                <!-- .row -->
                                            </div>
                                            <!-- .collection-option -->
                                        </div>
                                        <!-- .row -->
                                    </div>
                                    <!-- .container -->


                                </section>
                                <!-- End Collection Section -->




        <!-- Start Upcoming Events Section -->
        <section class="bg-upcoming-events">
            <div class="container">
                <div class="row">
                    <div class="upcoming-events">
                        <div class="section-header">
                            <h2>upcoming events</h2>
                            <p>Professionally mesh enterprise wide imperatives without world class paradigms.Dynamically deliver ubiquitous leadership awesome skills.</p>
                        </div>
                        <!-- .section-header -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="event-items">
                                    <div class="event-img">
                                        <a href="event_single.html"><img src="assets/images/home02/upcoming-events-img-1.jpg" alt="upcoming-events-img-1" class="img-responsive" /></a>
                                        <div class="date-box">
                                            <h3>24</h3>
                                            <h5>july</h5>
                                        </div>
                                        <!-- .date-box -->
                                    </div>
                                    <!-- .event-img -->
                                    <div class="events-content">
                                        <h3><a href="event_single.html">Completely enable and before brcks</a></h3>
                                        <ul class="meta-post">
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 8:30am - 5:30pm</li>
                                            <li><i class="flaticon-placeholder"></i> Sahera Tropical Center Dhaka</li>
                                        </ul>
                                        <p>Uniquely initiate out ofthe-box channels vis and vis multidisciplnary Credbly orcahestrate granular scenarios for forward manufactured Assertively negotiate multimedia based total linkage rather.</p>
                                        <a href="event_single.html" class="btn btn-default">join now</a>
                                    </div>
                                    <!-- .events-content -->
                                </div>
                                <!-- .events-items -->
                            </div>
                            <!-- .col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="event-items">
                                    <div class="event-img">
                                        <a href="event_single.html"><img src="assets/images/home02/upcoming-events-img-2.jpg" alt="upcoming-events-img-2" class="img-responsive" /></a>
                                        <div class="date-box">
                                            <h3>29</h3>
                                            <h5>july</h5>
                                        </div>
                                        <!-- .date-box -->
                                    </div>
                                    <!-- .event-img -->
                                    <div class="events-content">
                                        <h3><a href="event_single.html">Completely enable and before brcks</a></h3>
                                        <ul class="meta-post">
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 8:30am - 5:30pm</li>
                                            <li><i class="flaticon-placeholder"></i> Sahera Tropical Center Dhaka</li>
                                        </ul>
                                        <p>Uniquely initiate out ofthe-box channels vis and vis multidisciplnary Credbly orcahestrate granular scenarios for forward manufactured Assertively negotiate multimedia based total linkage rather.</p>
                                        <a href="event_single.html" class="btn btn-default">join now</a>
                                    </div>
                                    <!-- .events-content -->
                                </div>
                                <!-- .events-items -->
                            </div>
                            <!-- .col-lg-6 -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .upcoming-events -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- End Upcoming Events Section -->



        <!-- Start Sponsors Section -->
        <section class="bg-sponsors-section">
            <div class="container">
                <div class="row">
                    <div class="sponsors-option">
                        <div class="section-header">
                            <h2>top sponsors</h2>
                            <p>Professionally mesh enterprise wide imperatives without world class paradigms.Dynamically deliver ubiquitous leadership awesome skills.</p>
                        </div>
                        <!-- .section-header -->
                        <div class="sponsors-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="sopnsors-items">
                                        <a href="#"><img src="assets/images/home01/sponsors-img-1.jpg" alt="sponsors-img-1" class="img-responsive" /></a>
                                    </div>
                                    <!-- .sponsors-items -->
                                </div>
                                <!-- .swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="sopnsors-items">
                                        <a href="#"><img src="assets/images/home01/sponsors-img-2.jpg" alt="sponsors-img-2" class="img-responsive" /></a>
                                    </div>
                                    <!-- .sponsors-items -->
                                </div>
                                <!-- .swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="sopnsors-items">
                                        <a href="#"><img src="assets/images/home01/sponsors-img-3.jpg" alt="sponsors-img-3" class="img-responsive" /></a>
                                    </div>
                                    <!-- .sponsors-items -->
                                </div>
                                <!-- .swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="sopnsors-items">
                                        <a href="#"><img src="assets/images/home01/sponsors-img-4.jpg" alt="sponsors-img-4" class="img-responsive" /></a>
                                    </div>
                                    <!-- .sponsors-items -->
                                </div>
                                <!-- .swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="sopnsors-items">
                                        <a href="#"><img src="assets/images/home01/sponsors-img-1.jpg" alt="sponsors-img-1" class="img-responsive" /></a>
                                    </div>
                                    <!-- .sponsors-items -->
                                </div>
                                <!-- .swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="sopnsors-items">
                                        <a href="#"><img src="assets/images/home01/sponsors-img-2.jpg" alt="sponsors-img-2" class="img-responsive" /></a>
                                    </div>
                                    <!-- .sponsors-items -->
                                </div>
                                <!-- .swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="sopnsors-items">
                                        <a href="#"><img src="assets/images/home01/sponsors-img-3.jpg" alt="sponsors-img-3" class="img-responsive" /></a>
                                    </div>
                                    <!-- .sponsors-items -->
                                </div>
                                <!-- .swiper-slide -->

                            </div>
                            <!-- .swiper-wrapper -->
                        </div>
                        <!-- .sponsors-container -->
                    </div>
                    <!-- .sponsors-option -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- End Sponsors Section -->


        <!-- Start Footer Section -->
        <?php include'footer.php' ?>
        <!-- End Footer Section -->


        <!-- Start Scrolling -->
        <div class="scroll-img"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
        <!-- End Scrolling -->


    </div>


    <script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/swiper.min.js"></script>
    <script type="text/javascript" src="assets/js/lightcase.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nstSlider.js"></script>
    <script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/js/custom.map.js"></script>
    <script type="text/javascript" src="assets/js/plugins.isotope.js"></script>
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/js/custom.isotope.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>



</body>

</html>
