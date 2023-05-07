<?php
include '../Controller/DiagnostiqueC.php';
$diagnostiqueC = new DiagnostiqueC();
$list = $diagnostiqueC->listDiagnostique();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of Diagnostique</h1>
        <h2>
            <a href="addDiagnostique.php">Add Client</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>id_diag</th>
            <th>id_client</th>
            <th>id_terre</th>
            <th>Date of consultation</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $diagnostique) {
        ?>
            <tr>
                <td><?= $diagnostique['id_diag']; ?></td>
                <td><?= $diagnostique['id_client']; ?></td>
                <td><?= $diagnostique['id_terre']; ?></td>
                <td><?= $diagnostique['date_diag']; ?></td>
                <td align="center">
                    <form method="POST" action="updateDiagnostique.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $diagnostique['id_diag']; ?> name="id_diag">
                    </form>
                </td>
                <td>
                    <a href="deleteDiagnostique.php?id_diag=<?php echo $diagnostique['id_diag']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>