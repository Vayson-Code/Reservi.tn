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
      <link rel="stylesheet" href="../css/style.css">
<center><h1>Update Restau</h1></center>
<?php
$error = "";

include '../Controller/RestauC.php';
$restauC=new RestauC();
$restau= NULL;

//$list=$clientC->listClients();
if (
    isset($_POST["id"]) &&
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
        !empty($_POST["id"]) &&
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
            $_POST['id'],
            $_POST['name'],
            $_POST['numtable'],
            $_POST['adress'],
            $_POST['tel'],
            $_POST['de'],
            $_POST['img'],
            $_POST['geo'],
            $_POST['vid'],
        );
        $restauC->updateRestau($restau, $_POST["id"]);
        header('Location:listRestauad.php');
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
    <button class="button"><a href="listRestauad.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id'])) {
        $restau = $restauC->showRestau($_POST['id']);

    ?>

        <form action="" method="POST" id="f">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" value="<?php echo $restau['id']; ?>" maxlength="20"></td>
                    <td>
                    <span id="error4"></label>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="name">Name:
                        </label>
                    </td>
                    <td><input type="text" name="name" id="name" value="<?php echo $restau['name']; ?>" maxlength="20"></td>
                    <td>
                    <span id="error5"></label>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="numtable">numtable:
                        </label>
                    </td>
                    <td><input type="text" name="numtable" id="numtable" value="<?php echo $restau['numtable']; ?>" maxlength="20"></td>
                    <td>
                    <span id="error1"></label>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="adress">Adresse:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="adress" value="<?php echo $restau['adress']; ?>" id="adress">
                    </td>
                    <td>
                    <span id="error2"></label>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="tel">tel:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="tel" id="tel" value="<?php echo $restau['tel']; ?>">
                    </td>
                    <td>
                    <span id="error3"></label>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="de">des:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="de" id="de" value="<?php echo $restau['de']; ?>">
                    </td>
                    <td>
                    <span></label>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="img">img:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="img" id="img" value="<?php echo $restau['img']; ?>">
                    </td>
                    <td>
                    <span ></label>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="geo">geo:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="geo" id="geo" value="<?php echo $restau['geo']; ?>">
                    </td>
                    <td>
                    <span ></label>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="vid">vid:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="vid" id="vid" value="<?php echo $restau['vid']; ?>">
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