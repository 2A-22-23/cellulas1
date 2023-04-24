<?php
include  "../Controller/DiagnostiqueC.php";
include  "../Controller/TerreC.php";
include "../Model/Diagnostique.php";

$terreC= new TerreC();
$diagnostiqueC= new DiagnostiqueC();
if (isset($_GET['id'])){

    $result=$terreC->afficherTerreWithID($_GET['id']);
    foreach($result as $row){
    $id=$row['id'];
    $nom=$row['nom'];
    $largeur=$row['largeur'];
    $longeur=$row['longeur'];
    $echantillon=$row['echantillon'];
      
        }
    }

    $liste=$diagnostiqueC->showDiagnostiqueApprouve($id);


        
if(isset($_POST['Ajouter']))
{
    $today = date("Y-m-d"); //Today
    $date_convert = $_POST['datediag'] ;


    if ($today <  $date_convert ) {

if( isset($_POST['datediag']) and isset($_POST['description'])){

    
    $diagnostique=new Diagnostique(1,$_GET['id'],$_POST['datediag'],"En Attente",$_POST['description']);

    //Partie3
    $diagnostiqueC = new DiagnostiqueC();
    $diagnostiqueC->addDiagnostique($diagnostique);

        header('Location: AjouterDiagnostique.php?id='.$_GET['id']);

    }   else
    {
     echo "<script type='text/javascript'>";
     echo "alert('Verifier champs');
     window.location.href='AjouterDiagnostique.php?id=".$_GET['id'].";";
     echo "</script>";
    }

} else {
    echo "<script type='text/javascript'>";
    echo "alert('Invalide Date')";
    echo "</script>";

}

 
}
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
                                <h2>Terre ==> <?php echo $nom ?></h2>
                            </div>
                            <!-- .page-title -->
                            <div class="page-header-content">
                                <ol class="breadcrumb">
                                    <li>Diagnostique</li>
                                    <li>Terre info</li>
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
                                            <h4> Propriaitaire : <?php 
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


        <!-- Start Contact us Section -->
        <section class="bg-contact-us">
            <div class="container">
                <div class="row">
                    <div class="contact-us">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="contact-title">Ajouter Diagnostique</h3>
                                <form class="forms-sample" method="POST" enctype="multipart/form-data" id="form_diag">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <label class="control-label">Date</label>
                                                <input  type="date" name="datediag" id="datediag"  class="form-control underlined"/>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label class="control-label">Description</label>
                                            <input type="text" class="form-control" name="description" id="description">
                                            </div>

                                        </div>
                                        <!-- .col-md-6 -->
                                    </div>
                                    <!-- .row -->
                                    <br>

                                    <button type="submit" class="btn btn-default" name="Ajouter" id="Ajouter">Ajouter</button>
                                </form>
                            </div>
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .contact-us -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- End Contact us Section -->

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
           
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
        <script src="assets/js/Diagnostique.js"></script>


    </script>


</body>

</html>
