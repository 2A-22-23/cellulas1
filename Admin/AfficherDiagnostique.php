<?php
include  "../Controller/DiagnostiqueC.php";
include  "../Controller/TerreC.php";

$terreC= new TerreC();
$diagnostiqueC= new DiagnostiqueC();
    $liste=$diagnostiqueC->listDiagnostique();

?>

<!doctype html>
<html class="no-js" lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Afficher </title>
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
                <article class="content responsive-tables-page">
                    <div class="title-block">
                        <h1 class="title"> Diagnostique </h1>
                        <p class="title-description"> Afficher Diagnostique </p>
                    </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Diagnostique </h3>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Client</th>
                                                            <th>Terre</th>
                                                            <th>Date diagnostique</th>
                                                            <th>status</th>
                                                            <th>description</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        foreach($liste as $row){
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $row['id']; ?></td>
                                                            
                                                            <td>

                                                            <?php
                                                            $resultaa = $diagnostiqueC->afficherUserName($row["id_client"]);
                                                            foreach($resultaa as $row2){
                                                            echo $row2['nom'].' '.$row2['prenom']; 

                                                            }
                                                            ?>

                                                            </td>
                                                            <td>

                                                            <?php
                                                            $resultaaa = $terreC->afficherTerreWithID($row["id_terre"]);
                                                            foreach($resultaaa as $row3){
                                                             echo $row3['nom'];
                                                            }
                                                            ?>

                                                            </td>
                                                            <td><?php echo $row['date_diag']; ?></td>
                                                            <td><?php echo $row['status']; ?></td>
                                                            <td><?php echo $row['description']; ?></td>
                                                            <td>
                                                            <?php if($row['status'] == "En Attente"){ ?>
                                                                <a class="btn btn-success" href="ApprouverDiag.php?id=<?PHP echo $row['id']; ?>">Approuvé</a>
                                                                <a class="btn btn-danger" href="RefuseDiag.php?id=<?PHP echo $row['id']; ?>">Refusé</a>
                                                            <?php } ?>
                                                            <?php if($row['status'] == "Refusé"){ ?>
                                                                <a class="btn btn-success" href="ApprouverDiag.php?id=<?PHP echo $row['id']; ?>">Approuvé</a>
                                                            <?php } ?>
                                                            <?php if($row['status'] == "Approuvé"){ ?>
                                                                <a class="btn btn-danger" href="RefuseDiag.php?id=<?PHP echo $row['id']; ?>">Refusé</a>
                                                            <?php } ?>

                                                            <form method="POST" action="ModifierDiagnostique.php?id=<?PHP echo $row['id']; ?>">
                                                                <input type="submit" class="btn btn-warning" value= "Modifier">
                                                            </form>
                                                            <form method="POST" action="supprimerDiagnostique.php">
                                                                <input type="submit" class="btn btn-danger" value= "supprimer">
                                                                <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                            </form>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                            }
                                                        ?>           
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
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
        <script>
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
    </body>

</html>