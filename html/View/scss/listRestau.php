<?php
include '../Controller/RestauC.php';
$RestauC=new RestauC();
$list=$RestauC->listRestaux();
//var_dump($list->fetchALL());
?>
<!DOCTYPE html>
<!-- saved from url=(0175)https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="https://technext.github.io/restoran/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./Restoran - Bootstrap Restaurant Template_files/css2" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="./Restoran - Bootstrap Restaurant Template_files/all.min.css" rel="stylesheet">
    <link href="./Restoran - Bootstrap Restaurant Template_files/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./Restoran - Bootstrap Restaurant Template_files/animate.min.css" rel="stylesheet">
    <link href="./Restoran - Bootstrap Restaurant Template_files/owl.carousel.min.css" rel="stylesheet">
    <link href="./Restoran - Bootstrap Restaurant Template_files/tempusdominus-bootstrap-4.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./Restoran - Bootstrap Restaurant Template_files/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./Restoran - Bootstrap Restaurant Template_files/style.css" rel="stylesheet">

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="menu.html" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.html" class="dropdown-item">Booking</a>
                                <a href="team.php" class="dropdown-item">team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <?php
                  $user_id = $_GET["user_id"];
    if (isset($user_id))
{
    
    ?>
    <a href="profil.php" class="btn btn-primary py-2 px-4">Profile</a>  
    <?php
    }
    else
    {
        ?>
<a href="login.php" class="btn btn-primary py-2 px-4">Connexion</a>
<?php
}
?>
                </div>
            </nav>
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                            <a href="listRestau.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="./Restoran - Bootstrap Restaurant Template_files/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
<!-- Service Start -->
<form method="POST" action="listRestaur.php">
<center><h1>liste des Restaux</h1></center>
<center><label class="label">Choix :</label>
<center><input type="text" class="form-control" name="r" id="r" placeholder="Restau name"></center>
</form>
<div class="container-xxl py-5">
            <div class="container">
            <div class="row g-4">
<?php

      
        +$i=0;
        foreach ($list as $restau) {
          $i++;
         
          if($i%5==0)
          {
            ?>
            <br>
                
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                            <center><img src=<?= $restau['img']; ?> width="250" height="150"></center>
                            <br>
                            <form method="POST" action="Reservation.php">
                            <center> <button class="btn btn-primary w-100 py-3" type="submit">check</button></center>
                            <input name="id" type="hidden" value=<?PHP echo $restau['id']; ?> >
                            <input name="user_id" type="hidden" value=<?PHP echo $user_id; ?> >
                        </form>
                        <hr>
                            <center> <h5><?= $restau['name']; ?></h5>
                                <p><?= $restau['de']; ?></p></center>
                            </div>
                        </div>
                    </div>
                
        <?php
          }
          else
          {
        ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                            <center><img src=<?= $restau['img']; ?> width="250" height="150"></center><br>
                            <form method="POST" action="Reservation.php">
                            <center> <button class="btn btn-primary w-100 py-3" type="submit">check</button></center>
                            <input name="id" type="hidden" value=<?PHP echo $restau['id']; ?> >
                            <input name="user_id" type="hidden" value=<?PHP echo $user_id; ?> >
                        </form>
                        <hr>
                            <center> <h5><?= $restau['name']; ?></h5>
                                <p><?= $restau['de']; ?></p></center>
                            </div>
                        </div>
                    </div>
              
         
        <?php
    }
  }

    ?>
    </div>
       </div>
        </div>

    <!-- JavaScript Libraries -->
    <script src="./Restoran - Bootstrap Restaurant Template_files/jquery-3.4.1.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/bootstrap.bundle.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/wow.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/easing.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/waypoints.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/counterup.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/owl.carousel.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/moment.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/moment-timezone.min.js.téléchargé"></script>
    <script src="./Restoran - Bootstrap Restaurant Template_files/tempusdominus-bootstrap-4.min.js.téléchargé"></script>

    <!-- Template Javascript -->
    <script src="./Restoran - Bootstrap Restaurant Template_files/main.js.téléchargé"></script>
    


</body></html>