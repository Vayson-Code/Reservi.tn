<br>
    <br>
<center><h1>delete Restaux</h1></center>
<?php 
$id=$_POST['idd'];
include '../Controller/ReservationC.php';
$reservationC=new ReservationC();
$reservationC->deleteReservation($id);
header('Location:listReservationad.php');
?>