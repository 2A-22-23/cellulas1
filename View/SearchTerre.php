<?php
include '../Controller/TerreC.php';
$terreC = new TerreC();

if (isset($_GET['label']) && !empty($_GET['label'])) {
    $list = $terreC->showTerre($_GET['label']);
} else {
    $list = $terreC->listTerre();
}
?>
<html>

<head></head>

<body>

    <div>
        <form action="" method="GET">
            <input type="text" name="label" id="label" placeholder="Enter terre name">
            <input type="submit" value="Search">
        </form>
    </div>

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
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>