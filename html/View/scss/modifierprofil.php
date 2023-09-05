<?php

include './ClientC.php';

$error = "";

// create client
$client = null;

// create an instance of the controller
$clientC = new ClientC();
if (
    isset($_POST["idClient"]) &&
    isset($_POST["user_name"]) &&
    isset($_POST["password"]) &&
    isset($_POST["date"])
) {
    if (
        !empty($_POST["idClient"]) &&
        !empty($_POST['user_name']) &&
        !empty($_POST["password"]) &&
        !empty($_POST["date"])
    ) {
        $client = new Client(
            $_POST['idClient'],
            $_POST['user_name'],
            $_POST['password'],
            $_POST['date'],
        );
        $clientC->updateClient($client, $_POST["idClient"]);
        header('Location:ListClients.php');
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
    
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idClient'])) {
        $client = $clientC->showClient($_POST['idClient']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                
                <tr>
                    <td>
                        <label for="user_name">user name:
                        </label>
                    </td>
                    <td><input type="text" name="user_name" id="user_name" value="<?php echo $client['user_name']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="password"> password:
                        </label>
                    </td>
                    <td><input type="text" name="password" id="password" value="<?php echo $client['password']; ?>" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="date">Date of Birth:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="date" id="date" value="<?php echo $client['date']; ?>">
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