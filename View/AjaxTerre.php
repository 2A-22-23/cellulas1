<?php

include  "../Controller/TerreC.php";

$terreC= new TerreC();

if(!isset($_POST['str'])){
    $liste=$terreC->listTerre();
}
else{
    $liste = $terreC->rechercherTerre($_POST['str']);
}

                foreach ($liste as $row) {
                    ?>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="our-services-box">
                                    <div class="our-services-items">
                                        <i class="flaticon-greenhouse"></i>
                                        <div class="our-services-content">
                                            <h4><a href="AjouterDiagnostique.php?id=<?php echo $row['id']; ?>"> Nom : <?php echo $row['nom']; ?></a></h4>
                                            <p>Largeur : <?php echo $row['largeur']; ?></p>
                                            <p>Longeur : <?php echo $row['longeur']; ?></p>
                                            <p>Echantillon : <?php echo $row['echantillon']; ?></p>
                                            <a href="AjouterDiagnostique.php?id=<?php echo $row['id']; ?>">Diagnostique<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                        <!-- .our-services-content -->
                                    </div>
                                    <!-- .our-services-items -->
                                </div>
                                <!-- .our-services-box -->
                            </div>
                    <?php
                }

?>