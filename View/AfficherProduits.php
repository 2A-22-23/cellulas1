<?php

session_start();

include  "../Controller/CategorieC.php";
include  "../Controller/ProduitC.php";
include('database_connection.php');

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

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">


</head>

<body>


    <div class="box-layout">

    <?php include'header.php' ?>

        <!-- Start Collection Se Section -->
        <section class="bg-collection-section">
            <div class="container">
                <div class="row">
                    <div class="collection-option">
                        <div class="section-header">
                            <h2>Nos Produits</h2>
                            <p>Produits</p>
                        </div>

                        <div class="col-md-3">                				
                        <div class="list-group">
                            <h3>Price</h3>
                            <input type="hidden" id="hidden_minimum_price" value="100" />
                            <input type="hidden" id="hidden_maximum_price" value="10000" />
                            <p id="price_show">100 - 10000</p>
                            <div id="price_range"></div>
                        </div>				
                        <div class="list-group">
                        <h3>Categorie</h3>
                            <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                            <?php

                                $query = "SELECT DISTINCT(C.nom),C.id FROM produit P,categorie C WHERE C.id = P.id_categorie ORDER BY P.id DESC";
                                $statement = $connect->prepare($query);
                                $statement->execute();
                                $result = $statement->fetchAll();
                                foreach($result as $row)
                                {
                                ?>
                                <div class="list-group-item checkbox">
                                    <label><input type="checkbox" class="common_selector categorie" value="<?php echo $row['id']; ?>"  > <?php echo $row['nom']; ?></label>
                                </div>
                                <?php
                                }

                                ?>
                            </div>
                        </div>
                            </div>
                <div class="col-md-9">
                        <br />
                        <div class="row filter_data">
                        </div>
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
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <style>
    #loading
    {
        text-align:center; 
        background: url('loader.gif') no-repeat center; 
        height: 150px;
    }
    </style>

    <script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var categorie = get_filter('categorie');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, categorie:categorie},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:100,
        max:10000,
        values:[100, 10000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>


</body>

</html>
