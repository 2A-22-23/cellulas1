<?php 

include "../Model/client.php";
include "../Controller/ClientC.php";

session_start();

if(isset($_POST['connecter']))
{


   $email=$_POST["email"];
   $clientC = new ClientC();

   $liste=$clientC->recupereremail($email);

   //var_dump($res);
    foreach($liste as $row)
    {
        $mdp=$row['mdp'];
        $statut=$row['statut'];
    }
    if($statut == "Vérifé")
    {
        if (password_verify($_POST["mdp"],$mdp))
        {
        $liste=$clientC->recupereremail($email);
          foreach($liste as $row)
          {
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
    
        $_SESSION['idclient'] = $id;
        $_SESSION['client'] = $nom ." ".$prenom;
        $_SESSION['clientnom'] = $nom ;
        $_SESSION['clientprenom'] = $prenom;
        $_SESSION['clientemail'] = $email;
        $_SESSION['clienttel'] = $tel;
        $_SESSION['clientadresse'] = $adresse;
        $_SESSION['clientsexe'] = $sexe;
        $_SESSION['clientdate_naiss'] = $date_naiss;
        $_SESSION['clientimage'] = $image;
    
        header("location: index.php");
    
        }
       else
        {
          echo "<script type='text/javascript'>";
          echo "alert('Incorrect Email Or Password');
          window.location.href='SignIn.php';";
          echo "</script>";
        }    
    }
    else if($statut == "Non Vérifé")
    {
        echo "<script type='text/javascript'>";
        echo "alert('Validé votre email');
        window.location.href='SignIn.php';";
        echo "</script>";

    }
    else
    {
        echo "<script type='text/javascript'>";
        echo "alert('Votre compte est bloqué');
        window.location.href='SignIn.php';";
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
                                <h3 class="contact-title">Login</h3>
                                <form action="#" class="contact-form" method="post" enctype="multipart/form-data" >
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email"  class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="mdp" placeholder="Password" class="form-control"/>
                                    </div>
                                    <button type="submit" name="connecter" id="connecter" class="btn btn-default">Log In</button>
                                </form>
                                <a href="ForgetPassword.php">Mot de passe oublié ?</a>

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


    </script>


</body>

</html>
