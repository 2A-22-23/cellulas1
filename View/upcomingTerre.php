<?php
include '../Controller/TerreC.php';
$terreC = new TerreC();

$list = $terreC->upcomingTerre();

?>
<html>

<head></head>

<body>

    <center>
        <h1>List of terre</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id terre</th>
            <th>Largeur</th>
            <th>Longeur</th>
            <th>Agricole</th>
            <th>Labo</th>
            <td></td>
        </tr>
        <?php
        foreach ($list as $terre) {
        ?>
            <tr>
                <td><?= $terre['id_terre']; ?></td>
                <td><?= $terre['largeur']; ?></td>
                <td><?= $terre['longeur']; ?></td>
                <td><?= $terre['agricole']; ?></td>
                <td><?= $terre['labo']; ?></td>
                <td>
                    <?php
                    if ($terre['agricole'] != 0) {
                    ?>
                        <button><a href="bookTerre.php?id_terre=<?php echo $terre['id_terre']; ?>">Book</a></button>
                </td>
            <?php
                    } else
                        echo '<h3> try again </h3>'
            ?>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>