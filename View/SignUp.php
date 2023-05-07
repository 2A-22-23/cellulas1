<?php 

include "../Model/client.php";
include "../Controller/ClientC.php";

if(isset($_POST['inscri']))
{
if( isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['mdp']) and isset($_POST['tel']) and isset($_POST['adresse'])){
$client=new Client($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['mdp'],$_POST['tel'],$_POST['adresse'],$_POST['sexe'],$_POST['date_nais'],"Client","Non Vérifé");

    $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];

    $folder = "./images/client/".$filename ;
    move_uploaded_file($tempname, $folder);

//Partie3
$clientC = new ClientC();
$clientC->ajouterclients($client);
$clientC->ajouterClientimg($_POST['email'],$folder);

header("location: journal/VerifierMail.php?email=".$_POST['email']);
    
}else{
    echo "vérifieer les champs";
    die();
}
//*/
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
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


        <!-- Start Contact us Section -->
        <section class="bg-contact-us">
            <div class="container">
                <div class="row">
                    <div class="contact-us">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3 class="contact-title">Inscription</h3>
                                <form action="#" class="contact-form" method="post" enctype="multipart/form-data" id="form_client">

                                <div class="form-group">
                                        <input type="text" name="nom" placeholder="Last Name" id="nom" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="prenom" placeholder="First Name" id="prenom" class="form-control" />
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" id="email" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="mdp" placeholder="Password" id="mdp" class="form-control"  />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="tel" placeholder="Telephone" id="tel" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="adresse" placeholder="Address" id="adresse" class="form-control"  />
                                    </div>
                                    <div class="form-group">
                                        <input  type="date" name="date_nais" id="date_nais"  class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="image"  >Image</label>
                                        <input type="file"  id="image" name="image" class="form-control">
                                    </div>
                                    <div class="form-group">
                                    <label class="label-agree-term">
                                    <label for="sexe" id="icon" ></label>
                                        <input type="checkbox" name="sexe" id="sexe" class="agree-term" value="Male">
                                            <span class="label-text">Male</span>
                                        </label>
                                        
                                        <label class="label-agree-term" >
                                        <label for="sexe" id="icon" ></i></label>
                                        <input type="checkbox" name="sexe"  id="sexe" value="Female">
                                            <span class="label-text">Female</span>
                                        </label>
                                    </div>

                                    <button type="submit"  name="inscri" id="inscri" class="btn btn-default">Register</button>

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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>

    <script src="js/Client.js"></script>


    </script>


</body>

</html>