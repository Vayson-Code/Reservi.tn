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
<br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="../css/style.css">
<center><h1>add Reservation</h1></center>
<?php

include '../Controller/ReservationC.php';
$reservationC=new ReservationC();
$reservation= NULL;

//$list=$clientC->listClients();
if (
    isset($_POST["date_reservation"]) &&
    isset($_POST["tel"]) &&
    isset($_POST["id_restau"])&&
    isset($_POST["id_user"])&&
    isset($_POST["nom_reservation"])&&
    isset($_POST["req"])&&
    isset($_POST["num"])
) {
    if (
        !empty($_POST["date_reservation"]) &&
        !empty($_POST["tel"]) &&
        !empty($_POST["id_restau"]) &&
        !empty($_POST["id_user"])&&
        !empty($_POST["nom_reservation"])&&
        !empty($_POST["req"])&&
        !empty($_POST["num"])
    ) {

    	$reservation = new Reservation(
            null,
            $_POST['date_reservation'],
            $_POST['tel'],
            $_POST['id_restau'],
            $_POST['id_user'],
            $_POST['nom_reservation'],
            $_POST['req'],
            $_POST['num'],
        );
        //var_dump($client);
        $reservationC->addReservation($reservation);
     header('Location:listReservationad.php');
    } else
        $error = "Missing information";
}
//header('Location:listClients.php');
	?>
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
</style>
      <br>
    <br>
	<form action="" method="POST" id="f">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="date_reservation">date:
                    </label>
                </td>
                <td><input type="text" name="date_reservation" id="date_reservation" maxlength="20"></td>
                <td>
                    <span id="error"></label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tel">tel:
                    </label>
                </td>
<td><input type="text" name="tel" id="tel" maxlength="20"></td>
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
                    <input type="text" name="id_restau" id="id_restau">
                </td>
                <td>
                    <span id="error2"></label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id_user">id_user:
                    </label>
                </td
>
                <td>
                    <input type="text" name="id_user" id="id_user">
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
                    <input type="text" name="nom_reservation" id="nom_reservation">
                </td>
            
            </tr>
            <tr>
            <td>
                    <label for="req">img req:
                    </label>
                </td>
            <td>
                    <input type="text" name="req" id="req">
                </td>
              
            </tr>
            <tr>
            <td>
                    <label for="num">num:
                    </label>
                </td>
            <td>
                    <input type="text" name="num" id="num">
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
    <br>
    <br>
	<center><button class="button"><a href="listRestauad.php">afficher liste</a></button></center>
<script type="text/JavaScript">
var x =document.getElementById('f');
x.addEventListener('submit',function(e){
    var name =document.getElementById('name');
    var numtable =document.getElementById('numtable');
    var ad =document.getElementById('adress');
    var tel =document.getElementById('tel');

let ziw=/^[0-9]+$/;
if(name.value.length>8 ||name.value=="")
{
  let myError =document.getElementById('error');
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
});


</script>
