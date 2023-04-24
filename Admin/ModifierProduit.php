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
      $categorieid=$row['id_categorie'];
      $prix=$row['prix'];
      $informations=$row['informations'];
          }
      }

if(isset($_POST['Modifier']))
{
if( isset($_POST['nom']) and isset($_POST['prix'])  and isset($_POST['informations'])){

    $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];

    $folder = "./images/Produits/".$filename ;
    move_uploaded_file($tempname, $folder);
    
    if($filename!="")
    {
      move_uploaded_file($tempname, $folder);
      $prodC->UpdateImgProduitimg($_GET['id'],$folder);
    }    

    $prod=new Produit($_POST['nom'],$_POST['prix'],$folder,$_POST['informations'],$_POST['categorie']);

//Partie3
$produitC = new ProduitC();
$prodC->modifierProduit($prod,$_GET['id']);

        header('Location: AfficherProduits.php');

    }else{
        echo "vérifieer les champs";
        die();
    }
//*/
}

?>
<!doctype html>
<html class="no-js" lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Ajouter </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/vendor.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
            }
        </script>
    </head>
    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
            <?php include'header.php' ?>
                <?php include'asside.php' ?>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">
                    <div class="title-block">
                        <h3 class="title"> Produit </h3>
                        <p class="title-description"> Modifier Produit </p>
                    </div>
                    <div class="subtitle-block">
                        <h3 class="subtitle"> Modifier Produit </h3>
                    </div>
                    <section class="section">
                        <div class="row sameheight-container">
                           
                            <div class="col-md-12">
                                <div class="card card-block sameheight-item">
                                    <div class="card card-block sameheight-item">
                                    <div class="title-block">
                                        <h3 class="title"> Categorie </h3>
                                    </div>

                                    <form method="POST" enctype="multipart/form-data" id="form_prod">
                                    <div class="form-group">
                                    <select name="categorie">
                                    <?php
                                    foreach ($listeCat as $rowCat) {
                                        if($rowCat['id'] == $categorieid)
                                        {
                                        ?>
                                        <option selected value="<?php echo $rowCat['id']; ?>"> <?php echo $rowCat['nom']; ?> </option>
                                    <?php
                                    }
                                        else
                                        {
                                    ?>
                                            <option value="<?php echo $rowCat['id']; ?>"> <?php echo $rowCat['nom']; ?> </option>
                                        <?php
                                        }
                                    }
                                        ?>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputName1">Nom</label>
                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" value="<?PHP echo $nom ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail3">Prix</label>
                                    <input type="number" class="form-control" placeholder="Prix" name="prix" id="prix" value="<?PHP echo $prix ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword12">Information</label>
                                    <textarea class="form-control"  placeholder="Informations" name="informations" id="informations"><?PHP echo $informations ?></textarea>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Image</h4>
                                                                <label for="input-file-max-fs">Ajouter votre image</label>
                                                                <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" name="image" />
                                                            </div>
                                                        </div>
                                                    </div>
                                    <input type="submit" class="btn btn-primary mr-2" value="Modifier" name="Modifier" >

                                    
                                </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
                <?php include'footer.php' ?>
                <div class="modal fade" id="modal-media">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Media Library</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                            <div class="modal-body modal-tab-container">
                                <ul class="nav nav-tabs modal-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a>
                                    </li>
                                </ul>
                                <div class="tab-content modal-tab-content">
                                    <div class="tab-pane fade" id="gallery" role="tabpanel">
                                        <div class="images-container">
                                            <div class="row"> </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                        <div class="upload-container">
                                            <div id="dropzone">
                                                <form action="https://modularcode.io/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                                    <div class="dz-message-block">
                                                        <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Insert Selected</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <div class="modal fade" id="confirm-modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">
                                    <i class="fa fa-warning"></i> Alert</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure want to do this?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-80463319-4', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>

        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
        <script src="js/Produit.js"></script>

    </body>

</html>