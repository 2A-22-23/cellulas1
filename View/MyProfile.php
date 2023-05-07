<?php

session_start();

if(!isset($_SESSION['idclient']))
{

    header("location: Connexion.php");
}

include "../Model/Client.php";
include "../Controller/ClientC.php";


$clientC = new ClientC();
$result=$clientC->recupererClient($_SESSION['idclient']);
foreach($result as $row){
    $id=$row['id'];
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $email=$row['email'];
    $mdp=$row['mdp'];
    $tel=$row['tel'];
    $adresse=$row['adresse'];
    $sexe=$row['sexe'];
    $date_naiss=$row['date_nais'];
    $image=$row['image'];
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My profile</title>
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
    <div class="box-layout">
        <?php include'header.php' ?>

        <!-- Start our Single Team Section -->
        <section class="bg-single-team">
            <div class="container">
                <div class="row">
                    <div class="single-team">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-team-img">
                                    <img src="./<?php echo $row['image']; ?>" alt="single-team-img-1" class="img-responsive" />
                                </div>
                                <!-- .single-team-img -->
                            </div>
                            <!-- .col-md-6 -->
                            <div class="col-md-6">
                                <div class="single-team-details">
                                    <h3><?php echo $row['nom']; ?> <?php echo $row['prenom']; ?></h3>
                                    <h5><?php echo $row['sexe']; ?></h5>
                                    <div class="team-address-box">
                                        <ul class="address">
                                            <li>
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <span><?php echo $row['adresse']; ?></span>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <span><?php echo $row['tel']; ?></span>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                <span><?php echo $row['email']; ?></span>

                                            </li>
                                            
                                        </ul>
                                        <a class="btn btn-default" href="ModifierProfil.php?id=<?PHP echo $id; ?>">Modifier</a>

                                    </div>
                                    <!-- .team-address-box -->


                                </div>
                                <!-- .single-team-content -->
                            </div>
                            <!-- .col-md-6 -->
                        </div>
                        <!-- .row -->

                    </div>
                    <!-- .single-team -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- End our Single Team Section -->


        <!-- Start Footer Section -->
        <footer>
            <div class="bg-footer-top">
                <div class="container">
                    <div class="row">
                        <div class="footer-top">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="footer-widgets">
                                        <div class="widgets-title">
                                            <h3>About us</h3>
                                        </div>
                                        <!-- .widgets-title -->
                                        <div class="widgets-content">
                                            <p>Distily enable team driven services through extensive is a relatonships platforms with interactive content. Enthusiastically scale effective.</p>
                                        </div>
                                        <!-- .widgets-content -->
                                        <div class="address-box">
                                            <ul class="address">
                                                <li>
                                                    <i class="fa fa-home" aria-hidden="true"></i>
                                                    <span>New Chokoya Road, USA.</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                    <span>+8801 923 970 698.</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                    <span>Contact@admin.com</span>

                                                </li>
                                                <li>
                                                    <i class="fa fa-globe" aria-hidden="true"></i>
                                                    <span>Emai@admin.com</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .address -->
                                    </div>
                                    <!-- .footer-widgets -->
                                </div>
                                <!-- .col-lg-3 -->
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="footer-widgets">
                                        <div class="widgets-title">
                                            <h3>Latest News</h3>
                                        </div>
                                        <!-- .widgets-title -->
                                        <ul class="latest-news">
                                            <li>
                                                <span class="thumbnail-img">
												<img src="assets/images/home01/small-bog-img-1.jpg" alt="small-bog-img-1" class="img-responsive" />
											</span>
                                                <div class="thumbnail-content">
                                                    <h5><a href="blog_single.html">Corem psum dolr them amectetuer adipiscing...</a></h5>
                                                    <span class="post-date">04 February 2017</span>
                                                </div>
                                                <!-- .thumbnail-content -->
                                            </li>
                                            <li>
                                                <span class="thumbnail-img">
												<img src="assets/images/home01/small-bog-img-2.jpg" alt="small-bog-img-2" class="img-responsive" />
											</span>
                                                <div class="thumbnail-content">
                                                    <h5><a href="blog_single.html">Mirum est notare quam littera gothica nunc...</a></h5>
                                                    <span class="post-date">28 January 2017</span>
                                                </div>
                                                <!-- .thumbnail-content -->
                                            </li>
                                            <li>
                                                <span class="thumbnail-img">
												<img src="assets/images/home01/small-bog-img-3.jpg" alt="small-bog-img-3" class="img-responsive" />
											</span>
                                                <div class="thumbnail-content">
                                                    <h5><a href="blog_single.html">Corem psum dolr them amectetuer adipiscing...</a></h5>
                                                    <span class="post-date">03 January 2017</span>
                                                </div>
                                                <!-- .thumbnail-content -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .footer-widgets -->
                                </div>
                                <!-- .col-lg-3 -->
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="footer-widgets">
                                        <div class="widgets-title">
                                            <h3>Twitter Widget</h3>
                                        </div>
                                        <!-- .widgets-title -->
                                        <ul class="twitter-widget">
                                            <li>
                                                <div class="twitter-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                                <div class="twitter-content">
                                                    <h5>Raritas etiam processus a theme dynamicus sequitur <a href="#">http://admin@gmail.com</a></h5>
                                                    <span class="post-date">03 January 2017</span>
                                                </div>
                                                <!-- .twitter-content -->
                                            </li>
                                            <li>
                                                <div class="twitter-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                                <div class="twitter-content">
                                                    <h5>Duis autem vel eum <a href="#">#iriure</a>dolor in hendrerit in vulputate </h5>
                                                    <span class="post-date">8 months ago</span>
                                                </div>
                                                <!-- .twitter-content -->
                                            </li>
                                            <li>
                                                <div class="twitter-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                                <div class="twitter-content">
                                                    <h5><a href="#">@frankdoe</a> am liber tempor cum soluta nobis eleifend</h5>
                                                    <span class="post-date">03 January 2017</span>
                                                </div>
                                                <!-- .twitter-content -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .footer-widgets -->
                                </div>
                                <!-- .col-lg-3 -->
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="footer-widgets">
                                        <div class="widgets-title">
                                            <h3>Recent Photos</h3>
                                        </div>
                                        <!-- .widgets-title -->
                                        <div class="footer-instagram">
                                            <a href="#"><img src="assets/images/home01/footer-instagram-img-1.jpg" alt="footer-instagram-img-1" /></a>
                                            <a href="#"><img src="assets/images/home01/footer-instagram-img-2.jpg" alt="footer-instagram-img-2" /></a>
                                            <a href="#"><img src="assets/images/home01/footer-instagram-img-3.jpg" alt="footer-instagram-img-3" /></a>
                                            <a href="#"><img src="assets/images/home01/footer-instagram-img-4.jpg" alt="footer-instagram-img-4" /></a>
                                            <a href="#"><img src="assets/images/home01/footer-instagram-img-5.jpg" alt="footer-instagram-img-5" /></a>
                                            <a href="#"><img src="assets/images/home01/footer-instagram-img-6.jpg" alt="footer-instagram-img-6" /></a>
                                            <a href="#"><img src="assets/images/home01/footer-instagram-img-7.jpg" alt="footer-instagram-img-7" /></a>
                                            <a href="#"><img src="assets/images/home01/footer-instagram-img-8.jpg" alt="footer-instagram-img-8" /></a>
                                            <a href="#"><img src="assets/images/home01/footer-instagram-img-9.jpg" alt="footer-instagram-img-9" /></a>
                                        </div>
                                        <!-- .footer-instagram -->
                                    </div>
                                    <!-- .footer-widgets -->
                                </div>
                                <!-- .col-lg-3 -->
                            </div>
                            <!-- .row -->
                        </div>
                        <!-- .footer-top -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .bg-footer-top -->

            <div class="bg-footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="footer-bottom">
                            <div class="copyright-txt">
                                <p>&copy; 2017. Designer By <a href="#" title="Al-Amin(Web Designer)">LabArtisan</a></p>
                            </div>
                            <!-- .copyright-txt -->
                            <div class="social-box">
                                <ul class="social-icon-rounded">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- .social-box -->

                        </div>
                        <!-- .footer-bottom -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .bg-footer-bottom -->

        </footer>
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
    <script type="text/javascript" src="assets/js/plugins.isotope.js"></script>
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/js/lightcase.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nstSlider.js"></script>
    <script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/js/custom.isotope.js"></script>
    <script type="text/javascript" src="assets/js/custom.map.js"></script>

    <script type="text/javascript" src="assets/js/custom.js"></script>
</body>
</html>
