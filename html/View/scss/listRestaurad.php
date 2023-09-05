<?php
include '../Controller/RestauC.php';
$r=$_POST["r"];
$RestauC=new RestauC();
$list=$RestauC->listRestauxr($r);
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
<form method="POST" action="listRestaurad.php">
<center><h1>liste des Restaux</h1></center>
<center><label class="label">Choix :</label>
<input class=".tbl-content" type="text" name="r" default="Nom Restau"></center>
</form> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="../css/style.css">

      <section>
  <!--for demo wrap-->
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
        <th> <center><button class=button><a href="addRestau.php">addRestau</a></center></button></th>
        <th><center><form method="POST" action="listRestauad.php"> <input type="submit"value="tout les restaux" name="tout"></form></center></th>
</tr>
        <tr>
          <th>id</th>
          <th>name</th>
          <th>table</th>
          <th>adress</th>
          <th>tel</th>
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
        foreach ($list as $restau) {
        ?>
            <tr>
                <td><?= $restau['id']; ?></td>
                <td><?= $restau['name']; ?></td>
                <td><?= $restau['numtable']; ?></td>
                <td><?= $restau['adress']; ?></td>
                <td><?= $restau['tel']; ?></td>
                <td align="center">



<form method="POST" action="updateRestau.php">
    <input type="submit" name="update" value="Update">
    <input name="id" type="hidden" value=<?PHP echo $restau['id']; ?> >
</form>
</td>
<td>
<form method="POST" action="deleteRestau.php">
    <input type="submit" name="delete" value="delete">
    <input name="idd" type="hidden" value=<?PHP echo $restau['id'];?> >
    </form>
</td>
            </tr>
        <?php
    }

    ?>
    </tbody>
</table>
</div>
</section>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="../js/index.js"></script>
