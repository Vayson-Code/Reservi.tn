<?php

include '../Controller/ClientC.php';

$error = "";

// create client
$client = null;

// create an instance of the controller
$clientC = new ClientC();
if (
    isset($_POST["user_name"]) &&
    isset($_POST["password"]) &&

    isset($_POST["date"])
) {
    if (
        !empty($_POST['user_name']) &&
        !empty($_POST["password"]) &&

        !empty($_POST["date"])
    ) {
        $client = new Client(
            null,
            $_POST['user_name'],
            $_POST['password'],

            $_POST['date'],
        ); var_dump($client);
        $clientC->addClient($client);
        //header('Location:ListClients.php');
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
    <a href="ListClients.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="user_name">user name:
                    </label>
                </td>
                <td><input type="text" name="user_name" id="user_name" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="password">password:
                    </label>
                </td>
                <td><input type="password" name="password" id="password" maxlength="20"></td>
            </tr>
            
            <tr>
                <td>
                    <label for="date">Date of Birth:
                    </label>
                </td>
                <td>
                    <input type="text" name="date" id="date">
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