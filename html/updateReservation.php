<br>
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #d86675;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
.button{
  background-color: #d86675;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="./css/style.css">
<center><h1>Update Reservation</h1></center>
<?php
$error = "";

include './ReservationC2.php';
$reservationC=new ReservationC();
$reservation= NULL;

//$list=$clientC->listClients();
if (
    isset($_POST["id"]) &&
    isset($_POST["date_reservation"]) &&
    isset($_POST["tel"]) &&
    isset($_POST["id_restau"])&&
    isset($_POST["id_user"])&&
    isset($_POST["nom_reservation"])&&
    isset($_POST["req"])&&
    isset($_POST["num"])
) {
    if (
        !empty($_POST["id"]) &&
        !empty($_POST["date_reservation"]) &&
        !empty($_POST["tel"]) &&
        !empty($_POST["id_restau"]) &&
        !empty($_POST["id_user"])&&
        !empty($_POST["nom_reservation"])&&
        !empty($_POST["req"])&&
        !empty($_POST["num"])
    ) {

    	$reservation = new Reservation(
            $_POST['id'],
            $_POST['date_reservation'],
            $_POST['tel'],
            $_POST['id_restau'],
            $_POST['id_user'],
            $_POST['nom_reservation'],
            $_POST['req'],
            $_POST['num'],
        );
        $reservationC->updateReservation($reservation, $_POST["id"]);
        header('Location:listRestaux.php');
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
    <button class="button"><a href="listRestaux.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id'])) {
        $reservation = $reservationC->showReservation($_POST['id']);

    ?>

        <form action="" method="POST" id="f">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">id_reservation:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" value="<?php echo $reservation['id_reservation']; ?>" maxlength="20"></td>
                    <td>
                    <span id="error4"></label>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="date_reservation">date_reservation:
                        </label>
                    </td>
                    <td><input type="text" name="date_reservation" id="date_reservation" value="<?php echo $reservation['date_reservation']; ?>" maxlength="20"></td>
                    <td>
                    <span id="error5"></label>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="tel">tel:
                        </label>
                    </td>
                    <td><input type="text" name="tel" id="tel" value="<?php echo $reservation['tel']; ?>" maxlength="20"></td>
                    <td>
                    <span id="error1"></label>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="id_restau">id_restau:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id_restau" value="<?php echo $reservation['id_restau']; ?>" id="id_restau">
                    </td>
                    <td>
                    <span id="error2"></label>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="id_user">id_user:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id_user" id="id_user" value="<?php echo $reservation['id_user']; ?>">
                    </td>
                    <td>
                    <span id="error3"></label>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="nom_reservation">nom_reservation:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nom_reservation" id="nom_reservation" value="<?php echo $reservation['nom_reservation']; ?>">
                    </td>
                    <td>
                    <span></label>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="req">req:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="req" id="req" value="<?php echo $reservation['req']; ?>">
                    </td>
                    <td>
                    <span ></label>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="num">num:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="num" id="num" value="<?php echo $reservation['num']; ?>">
                    </td>
                    <td>
                    <span ></label>
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
<script type="text/JavaScript">
var x =document.getElementById('f');
x.addEventListener('submit',function(e){
    var name =document.getElementById('name');
    var numtable =document.getElementById('numtable');
    var ad =document.getElementById('adress');
    var tel =document.getElementById('tel');
    var id =document.getElementById('id');

let ziw=/^[0-9]+$/;
if(name.value.length>8 ||name.value=="")
{
  let myError =document.getElementById('error5');
  myError.innerHTML="nom invalide";
  e.preventDefault();
}
if(ziw.test(numtable.value)==false || numtable.value.length>8 ||numtable.value=="")
{
  let myError1 =document.getElementById('error1');
  myError1.innerHTML="num table invalide";
  e.preventDefault();
}
if(ad.value=="")
{
  let myError2 =document.getElementById('error2');
  myError2.innerHTML="adress invalide";
  e.preventDefault();
}
if(ziw.test(tel.value)==false || tel.value.length>8 ||tel.value=="")
{
  let myError3 =document.getElementById('error3');
  myError3.innerHTML="tel invalide";
  e.preventDefault();
}
if(ziw.test(id.value)==false || id.value=="")
{
  let myError4 =document.getElementById('error4');
  myError4.innerHTML="id invalide";
  e.preventDefault();
}
});


</script>