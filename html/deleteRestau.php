<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="./css/style.css">
      <br>
    <br>
<center><h1>delete Restaux</h1></center>
<?php 
$id=$_POST['idd'];
include './RestauC.php';
$restauC=new RestauC();
$restauC->deleteRestau($id);
header('Location:listRestaux.php');
?>