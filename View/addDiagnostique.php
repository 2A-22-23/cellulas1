<?php

include '../Controller/DiagnostiqueC.php';

$error = "";

// create diagnostique
$diagnostique = null;

// create an instance of the controller
$diagnostiqueC = new DiagnostiqueC();
if (
  
    isset($_POST["id_client"]) &&
    isset($_POST["id_terre"]) &&
    
    isset($_POST["date_diag"])
) {
    if (
        
        !empty($_POST['id_client']) &&
        !empty($_POST["id_terre"]) &&
        
        !empty($_POST["date_diag"])
    ) {
        $diagnostique = new Diagnostique(
            null,
            $_POST['id_client'],
            $_POST['id_terre'],
           
            new DateTime($_POST['date_diag'])
        );
        $diagnostiqueC->addDiagnostique($diagnostique);
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
 <a href="ListDiagnostique.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="id_client">id client:
                    </label>
                </td>
                <td>
                    <input type="text" name="id_client" id="id_client" maxlength="20" pattern="[a-zA-Z]+" required="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id_terre">id terre:
                    </label>
                </td>
                <td><input type="text" name="id_terre" id="id_terre" maxlength="20" pattern="[a-zA-Z]+" required=>
                </td>
            </tr>
           
            <tr>
                <td>
                    <label for="date_diag">Date of consultation:
                    </label>
                </td>
                <td>
                
                 <input type="date" name="date_diag" id="date_diag">

                  
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>