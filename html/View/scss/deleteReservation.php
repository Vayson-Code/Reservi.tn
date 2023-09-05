<br>
    <br>
<center><h1>delete Restaux</h1></center>
<?php 
$id=$_POST['idd'];
include '../Controller/ReservationC.php';
$reservationC=new ReservationC();
$reservationC->deleteReservation($id);
header('Location:listReservation.php?user_id=<?php echo $_POST["user_id"]; ?>');
?>