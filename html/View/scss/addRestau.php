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
<center><h1>add Restau</h1></center>
<?php

include '../Controller/RestauC.php';
$restauC=new RestauC();
$restau= NULL;

//$list=$clientC->listClients();
if (
    isset($_POST["name"]) &&
    isset($_POST["numtable"]) &&
    isset($_POST["adress"])&&
    isset($_POST["tel"])&&
    isset($_POST["de"])&&
    isset($_POST["img"])&&
    isset($_POST["geo"])&&
    isset($_POST["vid"])
) {
    if (
        !empty($_POST["name"]) &&
        !empty($_POST["numtable"]) &&
        !empty($_POST["adress"]) &&
        !empty($_POST["tel"])&&
        !empty($_POST["de"])&&
        !empty($_POST["img"])&&
        !empty($_POST["geo"])&&
        !empty($_POST["vid"])
    ) {

    	$restau = new Restau(
            null,
            $_POST['name'],
            $_POST['numtable'],
            $_POST['adress'],
            $_POST['tel'],
            $_POST['de'],
            $_POST['img'],
            $_POST['geo'],
            $_POST['vid'],
        );
        //var_dump($client);
        $restauC->addRestau($restau);
     header('Location:listRestauad.php');
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
                    <label for="name">name:
                    </label>
                </td>
                <td><input type="text" name="name" id="name" maxlength="20"></td>
                <td>
                    <span id="error"></label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="numtable">numtable:
                    </label>
                </td>
<td><input type="text" name="numtable" id="numtable" maxlength="20"></td>
<td>
                    <span id="error1"></label>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="adress">Adress:
                    </label>
                </td>
                <td>
                    <input type="text" name="adress" id="adress">
                </td>
                <td>
                    <span id="error2"></label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tel">tel:
                    </label>
                </td
>
                <td>
                    <input type="text" name="tel" id="tel">
                </td>
                <td>
                    <span id="error3"></label>
                </td>
            </tr>
            <tr>
            <td>
                    <label for="name">des:
                    </label>
                </td>
            <td>
                    <input type="text" name="de" id="de">
                </td>
            
            </tr>
            <tr>
            <td>
                    <label for="name">img path:
                    </label>
                </td>
            <td>
                    <input type="text" name="img" id="img">
                </td>
              
            </tr>
            <tr>
            <td>
                    <label for="geo">geo:
                    </label>
                </td>
            <td>
                    <input type="text" name="geo" id="geo">
                </td>
              
            </tr>
            <tr>
            <td>
                    <label for="vid">vid path:
                    </label>
                </td>
            <td>
                    <input type="text" name="vid" id="vid">
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
