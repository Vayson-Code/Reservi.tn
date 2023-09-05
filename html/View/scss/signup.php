

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body{
	background-color: orange;
}

.container{

	display: flex;
	height: 500px;
	width: 800px;
	border: 1px solid black;
	margin: auto;
	margin-top: 50px ;
	box-shadow: 15px 15px 20px black ;
}

.form{
	display: flex;
	flex-direction: column;
	width: 50%;
	align-items: center;
	background-color: whitesmoke;



}
.form h2{
	font-size:3rem ;
	font-family: Impact, Haettenschweiler, 'arial Narrow Bold', sans-serif;
	margin: 40px;

}
.box{
	padding: 12px;
	width: 65%;
	margin: 15px;
	border: 1px solid black;
	outline: none;
	border-radius: 20px;

}
#submit{

	padding: 12px 30px;
	width: 40%;
	margin-top: 40px;
	background-color: black;
	color: white;
	font-weight: bold;
	border: none;
	outline: none;
	border-radius: 20px;

}

#submit:hover{
	cursor: pointer;
	background-color: darkorange;

}

.form a{
	text-decoration: none;
	color: black;
	margin-top: 20px;

}

.form a:hover{
	color: darkorange;
}

.side{
	display: flex;
	justify-content: center;
	align-items:center ;
	width: 50%;
	background-color: darkorange;
	

}
.side img{
	width: 450px;
	height:450px ;
	-webkit-animation: spin 15s linear infinite;
	-moz-animation: spin 15s linear infinite;
	animation: spin 15s linear infinite;

}

@-webkit-keyframes spin{
	100%{-webkit-transform: rotate(360deg);}
}

@-moz-keyframes spin{
	100%{-webkit-transform: rotate(360deg);}
}

@keyframes spin{
	100%{-webkit-transform: rotate(360deg);}
}
	

	</style>

<div class="container">
		<form method="POST" action="createuser.php" class="form" id="formx">
			<h2> SIGN UP</h2>
			<p style="color: red" id="nomEr"></p>
			<input id="fname" type="text" name="user_name" class="box" placeholder="enter your name">

			<p style="color: red" id="passEr"></p>
			<input id="pass" type="password" name="password" class="box" placeholder="enter your password">

			<p style="color: red" id="dateEr"></p>
			<input id="date" type="text" name="date" class="box" placeholder="enter your Mail">

			<input type="submit" value="sign-up" id="submit" name="submit">
			<a href="login.php"> Click to login</a>
		</form>
		<div class="side">
			<img src="hero.png" alt="">
			
		</div>
	</div>
</body>
</html>
<script type="text/JavaScript">
var Erreur1=0;
var Erreur2=0;
var Erreur3=0;
var Erreur4=0;
var Erreur5=0;

document.getElementById('submit').addEventListener("click", function(){
  if (document.getElementById("fname").value == "") {
    document.getElementById("nomEr").innerHTML = "Erreur Nom";
	Erreur1=1;
  } else{
	Erreur1=0;
  }
  if (document.getElementById("fname").value.length < 5) {
    document.getElementById("nomEr").innerHTML = "Erreur Nom doit etre sup a 5 caracteres";
	Erreur2=1;
  } else{
	Erreur2=0;
  }

    if (document.getElementById("pass").value == "") {
    document.getElementById("passEr").innerHTML = "Erreur Password";
	Erreur4=1;
  } else{
	Erreur4=0;
  }
  if (document.getElementById("pass").value.length <8) {
    document.getElementById("passEr").innerHTML = "password to short";
	Erreur4=1;
  } else{
	Erreur4=0;
  }
 
   if (document.getElementById("date").value == "") {
    document.getElementById("dateEr").innerHTML = "Erreur date";
	Erreur3=1;

  }
  else{
	Erreur3=0;
  }
  if(!Erreur1 && !Erreur2 && !Erreur3 && !Erreur4){
	document.getElementById("formx").submit();
  }
  
});
</script>
