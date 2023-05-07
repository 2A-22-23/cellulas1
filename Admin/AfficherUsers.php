<?php
session_start();



if($_SESSION['login']=="")
{

    header("location: signup.php");
}



include  "../Model/client.php";
include  "../Controller/ClientC.php";

$clientc= new ClientC();
$liste=$clientc->afficherClients();

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

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Client', 'Etat'],
                ['Bloquer', <?php echo $clientc->recupererClientByEtat("Bloquer")->rowCount();  ?>],
                ['Vérifé', <?php echo $clientc->recupererClientByEtat("Vérifé")->rowCount();  ?>],
                ['Non Vérifé', <?php echo $clientc->recupererClientByEtat("Non Vérifé")->rowCount();  ?>]
            ]);

            var options = {
                title: 'Les Statistiques'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
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
                        <h1 class="title"> Users </h1>
                        <p class="title-description"> Afficher Users </p>
                    </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Users </h3>
                                        </div>
                                        <div id="piechart" style="width: 900px; height: 500px;"></div>

                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">Last Name</th>
                                                        <th scope="col" >First Name</th>
                                                        <th scope="col" >Email</th>
                                                        <th scope="col" >Telephone</th>
                                                        <th scope="col" >Adress</th>
                                                        <th scope="col" >Sexe</th>
                                                        <th scope="col" >Date Of Birth</th>
                                                        <th scope="col" >Photo</th>
                                                        <th scope="col" >Role</th>
                                                        <th scope="col" >Statut</th>
                                                        <th scope="col" >Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                        foreach($liste as $row){
                                            ?>
                                              <tr>
                                                  <td><?php echo $row['nom']; ?></td>
                                                  <td><?php echo $row['prenom']; ?></td>
                                                  <td><?php echo $row['email']; ?></td>
                                                  <td><?php echo $row['tel']; ?></td>
                                                  <td><?php echo $row['adresse']; ?></td>
                                                  <td><?php echo $row['sexe']; ?></td>
                                                  <td><?php echo $row['date_nais']; ?></td>
                                                  <td><img src="../View/<?php echo $row['image']; ?>" heigth="200" width=150></td>
                                                  <td><?php echo $row['role']; ?></td>
                                                  <td><?php echo $row['statut']; ?></td>
                                                  <td>
                                                      <?php if($row['statut'] == "Vérifé"){ ?>
                                                          <a class="btn btn-danger" href="BloquerClient.php?id=<?PHP echo $row['id']; ?>">Bloquer</a>
                                                      <?php } ?>
                                                      <?php if($row['statut'] == "Bloquer"){ ?>
                                                          <a class="btn btn-success" href="DebloquerClient.php?id=<?PHP echo $row['id']; ?>">Débloquer</a>
                                                      <?php } ?>
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