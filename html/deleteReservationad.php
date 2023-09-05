<br>
    <br>
<center><h1>delete Reservation</h1></center>
<?php 
$id=$_POST['idd'];
include './ReservationC2.php';
$reservationC=new ReservationC();
$reservationC->deleteReservation($id);
header('Location:listRestaux.php');
?>