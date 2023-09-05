<?php
include '..\Controller\ReservationC.php';
$ReservationC=new ReservationC();
$list=$ReservationC->listReservation();
//var_dump($list->fetchALL());
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
<form method="POST" action="listReservationrad.php">
<center><h1>liste des Reservations</h1></center>
<center><label class="label">Choix :</label>
<input class=".tbl-content" type="text" name="r" default="Nom Reservation"></center>
</form> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="../css/style.css">

  <section>
  <!--for demo wrap-->
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
        <th> <center><button class=button><a href="addReservation.php">add Reservation</a></center></button></th>
        <th><center><form method="POST" action="listReservationad.php"> <input class="button" type="submit"value="tout les reservations" name="tout"></form></center></th>
</tr>
        <tr>
          <th>id_reservation</th>
          <th>date_reservation</th>
          <th>tel</th>
          <th>id_restau</th>
          <th>id_user</th>
          <th>nom_reservation</th>
          <th>req</th>
          <th>num</th>
          <th>update</th>
          <th>delete</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
      <?php
        foreach ($list as $reservation) {
        ?>
            <tr>
                <td><?= $reservation['id_reservation']; ?></td>
                <td><?= $reservation['date_reservation']; ?></td>
                <td><?= $reservation['tel']; ?></td>
                <td><?= $reservation['id_restau']; ?></td>
                <td><?= $reservation['id_user']; ?></td>
                <td><?= $reservation['nom_reservation']; ?></td>
                <td><?= $reservation['req']; ?></td>
                <td><?= $reservation['num']; ?></td>
                <td align="center">



<form method="POST" action="updateReservation.php">
    <input type="submit" name="update" value="Update">
    <input name="id" type="hidden" value=<?PHP echo $reservation['id_reservation']; ?> >
</form>
</td>
<td>
<form method="POST" action="deleteReservationad.php">
    <input type="submit" name="delete" value="delete" style="btn btn-primary">
    <input name="idd" type="hidden" value=<?PHP echo $reservation['id_reservation'];?> >
    </form>
</td>
            </tr>
        <?php
    }

    ?>
    </tbody>
</table>
</div>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="../js/index.js"></script>
<script src="./Table V01_files/jquery-3.2.1.min.js.téléchargé"></script>

<script src="./Table V01_files/popper.js.téléchargé"></script>
<script src="./Table V01_files/bootstrap.min.js.téléchargé"></script>

<script src="./Table V01_files/select2.min.js.téléchargé"></script>

<script src="./Table V01_files/main.js.téléchargé"></script>

<script async="" src="./Table V01_files/js"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer="" src="./Table V01_files/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon="{&quot;rayId&quot;:&quot;76cd6770891a0dbc&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2022.11.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>

