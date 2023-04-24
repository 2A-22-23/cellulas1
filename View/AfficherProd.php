<?php
include "../Model/Produit.php";
include "../Controller/ProduitC.php";

include  "../Controller/CategorieC.php";

$catC= new CategorieC();
    $listeCat=$catC->afficherCategories();

    if (isset($_GET['id'])){

      $prodC = new ProduitC();
      $result=$prodC->afficherProduitWithID($_GET['id']);
      foreach($result as $row){
      $id=$row['id'];
      $nom=$row['nom'];
      $resultaa = $catC->afficherCategorieWithID($row["id_categorie"]);
      foreach($resultaa as $row2)
      { $nomcat = $row2['nom'];}
      
      $categorieid=$row['id_categorie'];
      $prix=$row['prix'];
      $informations=$row['informations'];
          }
      }
?>
      <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Single Project</title>
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

        <!-- Start Page Header Section -->
        <section class="bg-page-header">
            <div class="page-header-overlay">
                <div class="container">
                    <div class="row">
                        <div class="page-header">
                            <div class="page-title">
                                <h2>Produit <?php echo $nom; ?></h2>
                            </div>
                            <!-- .page-title -->
                            <div class="page-header-content">
                                <ol class="breadcrumb">
                                    <li>Categorie</li>
                                    <li><?php echo $nomcat; ?></li>
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


        <!-- Start Recent Project Section -->
        <section class="bg-single-project">
            <div class="container">
                <div class="row">
                    <div class="single-project">
                        <div class="row">
                            <div class="col-lg-9">
                                
                                <a class="navbar-brand" ><img src="../Admin/<?php echo $row['image']; ?>" alt="single-project-img-1" class="img-responsive"  style="object-fit:cover;
                                    width:620px;
                                    height:650px;
                                     #CCC"/></a>
                                <!-- .single-proj-main-content -->
                            </div>
                            <div class="col-lg-3">
                                <div class="single-right-content">
                                    
                                <div class="row">
                                                <ul class="single-left-content">
                                            <!-- .col-md-4 -->
                                            <div class="single-project-content">
                                                    <h3>Nom</h3>
                                                    <p><?php echo $nom ?></p>
                                                    <p></p>
                                                </div>
                                                <!-- .single-left-content -->
                                            <!-- .col-md-4 -->
                                            <div class="single-project-content">
                                                    <h3>Categorie</h3>
                                                    <p><?php echo $nomcat ?></p>
                                                    <p></p>
                                                </div>
                                                <!-- .single-left-content -->
                                            <!-- .col-md-4 -->
                                            <div class="single-project-content">
                                                    <h3>Prix</h3>
                                                    <p><?php echo $prix ?> TND</p>
                                                    <p></p>
                                                </div>
                                                <!-- .single-left-content -->
                                            <!-- .col-md-4 -->
                                            <div class="single-project-content">
                                                    <h3>Information</h3>
                                                    <p><?php echo $informations ?></p>
                                                    <p></p>
                                                </div>
                                                <!-- .single-left-content -->
                                            <!-- .col-md-8 -->
                                        </div>
                                    <!-- .social-option -->
                                </div>
                                <!-- .single-right-content -->
                            </div>
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .single-project -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- End Recent Project Section -->


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
</body>
</html>
