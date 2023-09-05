

<?php
  session_start(); 

  include("functions.php");
  include("connection.php");

  $user_data = fetchResponses($_SESSION['user_id'])[0]; 
?>

<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon profil</title>
    <head>
    <body>
      <style>
        body{
	margin: 20px;
	background-color: lightgray ;

}

.main{
	padding: 15px;
	font-family: Arial, Helvetica, sans-serif;
}
.topbar{

	background-color: teal;
	overflow: hidden;
}

.topbar a{
	float: right;
	color: whitesmoke;
	text-align: center;
	padding: 20px 26px;
	text-decoration: none;
	font-size: 26px;
}

.sidebar{
	background-color: #333;
	color: white;
	height: 100%;
}

.sidebar a{
	margin-left: 10px;
	display: block;
	font-size: 30px;
  padding-button: 10px;
	text-decoration: none;

}

.card{
	position: relative;
	display: flex;
	flex-direction: column;

}

.content{
	background-color: whitesmoke;
}
      </style>
  



    <div class="container">
      <div class="main">

        <div class="topbar">
          <a href="logout.php">logout</a>
          <a href="listReservation.php?user_id=<?php echo $user_data['user_id']; ?>">Reservation</a>
          <a href="modifierprofil.php">setting</a>
          <a href="index.php">Home</a>
        </div>
        
          <div class="col-md-8 mt-1">
            <div class="card mb-3 content">
              <h1 class="m-3 pt-3"> ABOUT</h1>
              <div class="card-body">

              <div class="row">
                  <div class="col-md-3">
                    <h5>Id:</h5>
                  </div>
                  <div class="col-md-9 text-secondary">
                    <?php echo $user_data['user_id']; ?>
                  </div>
                </div>
                <hr>

                <div class="row">
                  <div class="col-md-3">
                    <h5>Name:</h5>
                  </div>
                  <div class="col-md-9 text-secondary">
                    <?php echo $user_data['user_name']; ?>
                  </div>
                </div>
                <hr>

                <div class="row">
                  <div class="col-md-3">
                    <h5>Password:</h5>
                  </div>
                  <div class="col-md-9 text-secondary">
                    <?php echo $user_data['password']; ?>
                  </div>
                </div>
                <hr>

                <div class="row">
                  <div class="col-md-3">
                    <h5>Date:</h5>
                  </div>
                  <div class="col-md-9 text-secondary">
                    <?php echo $user_data['date']; ?>
                  </div>
                </div>
                

              </div>
            </div>
            <div class="card mb-3 content">
              <h1>Recent Order</h1>
              <div class="card-body">
              <div class="row">
                  <div class="col-md-3">
                    <h5>Pizza Hut:</h5>
                  </div>
                  <div class="col-md-9 text-secondary">
                    24.500 dt
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>









  </div>
    </body>
</html>