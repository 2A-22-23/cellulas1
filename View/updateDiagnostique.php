<?php

include '../Controller/DiagnostiqueC.php';

$error = "";

// create diagnostique
$diagnostique = null;

// create an instance of the controller
$diagnostiqueC = new DiagnostiqueC();
if (
    isset($_POST["id_diag"]) &&
    isset($_POST["id_client"]) &&
    isset($_POST["id_terre"]) &&
    
    isset($_POST["date_diag"])
) {
    if (
        !empty($_POST["id_diag"]) &&
        !empty($_POST['id_client']) &&
        !empty($_POST["id_terre"]) &&
       
        !empty($_POST["date_diag"])
    ) {
        $diagnostique= new Diagnostique(
            $_POST['id_diag'],
            $_POST['id_client'],
            $_POST['id_terre'],
            
            new DateTime($_POST['date_diag'])
        );
        $diagnostiqueC->updateDiagnostique($diagnostique, $_POST["id_diag"]);
        header('Location:ListDiagnostique.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <button><a href="ListDiagnostique.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id_diag'])) {
        $diagnostique = $diagnostiqueC->showDiagnostique($_POST['id_diag']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id_diag">id diag:
                        </label>
                    </td>
                    <td><input type="text" name="id_diag" id="id_diag" value="<?php echo $diagnostique['id_diag']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_client">id client:
                        </label>
                    </td>
                    <td><input type="text" name="id_client" id="id_client" value="<?php echo $diagnostique['id_client']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_terre">id terre:
                        </label>
                    </td>
                    <td><input type="text" name="id_terre" id="id_terre" value="<?php echo $diagnostique['id_terre']; ?>" maxlength="20"></td>
                </tr>
               
                <tr>
                    <td>
                        <label for="date_diag">Date of consultation:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="date_diag" id="date_diag" value="<?php echo $diagnostique['dob']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>