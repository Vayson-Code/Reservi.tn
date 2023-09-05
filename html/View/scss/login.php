


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
		<form method="POST" action="loginuser.php" class="form" onsubmit="return submitUserForm();">
			<h2> LOGIN</h2>
			<input id="text" type="text" name="user_name" class="box" placeholder="enter your name">

			
			<input id="text" type="password" name="password" class="box" placeholder="enter your password">

			<div class="g-recaptcha" data-sitekey="6LdJ-EsjAAAAAJCG7osG9dOJVRCiv-ENU2QN0SMJ" data-callback="verifyCaptcha"></div>
			<div id="g-recaptcha-error"></div>
			<input type="submit" value="login" id="submit">
			<a href="signup.php"> Click to Sign-Up</a>
		</form>
		<div class="side">
			<img src="hero.png" alt="">
			
		</div>
	</div>
	<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
function submitUserForm() {
	var response = grecaptcha.getResponse();
		if(response.length == 0) {
			document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
			return false;
		}
		return true;
}

function verifyCaptcha() {
	document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script>
</body>
</html>


