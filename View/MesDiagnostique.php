<?php
include  "../Controller/DiagnostiqueC.php";
include  "../Controller/TerreC.php";
include "../Model/Diagnostique.php";
session_start();

$terreC= new TerreC();
$diagnostiqueC= new DiagnostiqueC();

    $liste=$diagnostiqueC->MyDiagnostique($_SESSION['idclient']);


        
?>

        
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diagnostique</title>
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
        <div class="box-style">
            <div class="color-btn">
                <a href="#"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></a>
            </div>
            <div class="box-style-inner">
                <h3>Box Layout</h3>
                <div class="box-element">
                    <div class="box-heading">
                        <h5>HTML Layout</h5>
                    </div>
                    <div class="box-content">
                        <ul class="box-customize">
                            <li><a class="boxed-btn" href="#">Boxed</a></li>
                            <li><a class="wide-btn" href="#">Wide</a></li>
                            <li><a class="rtl-btn" href="#">Rtl</a></li>
                            <li><a class="ltl-btn" href="#">Ltl</a></li>
                        </ul>
                    </div>
                </div>
                <div class="box-element">
                    <div class="box-heading">
                        <h5>Backgroud Images</h5>
                    </div>
                    <div class="box-content">
                        <ul class="box-bg-img">
                            <li>
                                <a class="bg-1" href="#"><img src="assets/images/box-style/01.jpg" alt=""></a>
                            </li>
                            <li>
                                <a class="bg-2" href="#"><img src="assets/images/box-style/02.jpg" alt=""></a>
                            </li>
                            <li>
                                <a class="bg-3" href="#"><img src="assets/images/box-style/03.jpg" alt=""></a>
                            </li>
                            <li>
                                <a class="bg-4" href="#"><img src="assets/images/box-style/04.jpg" alt=""></a>
                            </li>
                            <li>
                                <a class="bg-5" href="#"><img src="assets/images/box-style/05.jpg" alt=""></a>
                            </li>
                            <li>
                                <a class="bg-6" href="#"><img src="assets/images/box-style/06.jpg" alt=""></a>
                            </li>
                            <li>
                                <a class="bg-7" href="#"><img src="assets/images/box-style/07.jpg" alt=""></a>
                            </li>
                            <li>
                                <a class="bg-8" href="#"><img src="assets/images/box-style/08.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-element">
                    <div class="box-heading">
                        <h5>Backgroud Pattern</h5>
                    </div>
                    <div class="box-content">
                        <ul class="box-pattern-img">
                        <li>
                            <a class="pt-1" href="#"><img src="https://www.codexcoder.com/images/auror/pt-image/01.png"" alt=""></a>
                        </li>
                        <li>
                            <a class="pt-2" href="#"><img src="https://www.codexcoder.com/images/auror/pt-image/02.png"" alt=""></a>
                        </li>
                        <li>
                            <a class="pt-3" href="#"><img src="https://www.codexcoder.com/images/auror/pt-image/03.png"" alt=""></a>
                        </li>
                        <li>
                            <a class="pt-4" href="#"><img src="https://www.codexcoder.com/images/auror/pt-image/04.png"" alt=""></a>
                        </li>
                        <li>
                            <a class="pt-5" href="#"><img src="https://www.codexcoder.com/images/auror/pt-image/05.png"" alt=""></a>
                        </li>
                        <li>
                            <a class="pt-6" href="#"><img src="https://www.codexcoder.com/images/auror/pt-image/06.png"" alt=""></a>
                        </li>
                        <li>
                            <a class="pt-7" href="#"><img src="https://www.codexcoder.com/images/auror/pt-image/07.png"" alt=""></a>
                        </li>
                        <li>
                            <a class="pt-8" href="#"><img src="https://www.codexcoder.com/images/auror/pt-image/08.png"" alt=""></a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include'header.php' ?>

        <!-- Start Page Header Section -->
        <section class="bg-page-header">
            <div class="page-header-overlay">
                <div class="container">
                    <div class="row">
                        <div class="page-header">
                            <div class="page-title">
                                <h2>Mes diagnostiques</h2>
                            </div>
                            <!-- .page-title -->
                            <div class="page-header-content">
                                <ol class="breadcrumb">
                                    <li>Diagnostique</li>
                                    <li>Diagnostique info</li>
                                </ol>
                            </div>
                            <!-- .page-header-content -->
                        </div>
                        <!-- .page-header -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .page-header-overlay -->
        </section>
        <!-- End Page Header Section -->


        <!-- Start Service Style2 Section -->        
        <section class="bg-servicesstyle2-section">
            <div class="container">
                <div class="row">
                    <div class="our-services-option">
                        <div class="section-header">
                            <h2>Diagnostique</h2>
                            <p>Diagnostique Disponible</p>
                        </div>
                        <!-- .section-header -->
                        <div class="row">
                            <?php  foreach($liste as $row){ ?>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="our-services-box">
                                    <div class="our-services-items">
                                        <i class="flaticon-greenhouse"></i>
                                        <div class="our-services-content">
                                            <h4><a href="AjouterDiagnostique.php"> Propriaitaire : <?php 
                                                    $resultaa = $diagnostiqueC->afficherUserName($row["id_client"]);
                                                    foreach($resultaa as $row2){
                                                        echo $row2['nom'].' '.$row2['prenom']; 
                                                    } ?>
                                            </a></h4>
                                            <p>Terre : <?php 
                                                            $resultaaa = $terreC->afficherTerreWithID($row["id_terre"]);
                                                            foreach($resultaaa as $row3){
                                                             echo $row3['nom'];
                                                            }
                                             ?></p>
                                            <p>Date : <?php echo $row['date_diag']; ?></p>
                                            <p>Status : <?php echo $row['status']; ?></p>
                                            <p>Description : <?php echo $row['description']; ?></p>
                                                            <?php if($row['status'] == "En Attente"){ ?>
                                                                <a class="btn btn-warning" href="ModifierDiagnostique.php?id=<?PHP echo $row['id']; ?>">Modifier</a>
                                                            <?php } ?>
                                                                <a class="btn btn-danger" href="supprimerDiagnostique.php?id=<?PHP echo $row['id']; ?>">Supprimer</a>

                                        </div>
                                        <!-- .our-services-content -->
                                    </div>
                                    <!-- .our-services-items -->
                                </div>
                                <!-- .our-services-box -->
                            </div>
                            <?php } ?>
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
    <script type="text/javascript" src="assets/js/plugins.isotope.js"></script>
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/js/lightcase.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nstSlider.js"></script>
    <script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/js/custom.isotope.js"></script>
    <script type="text/javascript" src="assets/js/custom.map.js"></script>

    <script type="text/javascript" src="assets/js/custom.js"></script>

    <!-- Map Api -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqVIkdttPNjl5c5hKlc_Hk3bfXQQlf2Rc&callback=initMap">


    </script>


</body>

</html>
