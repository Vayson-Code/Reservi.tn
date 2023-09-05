<?php

$u=$_GET["user_id"];
include '../Controller/ReservationC.php';
$ReservationC=new ReservationC();
$list=$ReservationC->listReservationUser($u);
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
<style>
    
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: rgba(255, 136, 0, 0.644);
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid rgba(255, 136, 0, 0.644);
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: rgba(255, 136, 0, 0.644);
}
    </style>

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
                                               </div>
                    </div>
                </div>
            </div>
        </div>
        <center><table class="styled-table"  >
        <thead>
        <tr>
        <th>nom restau</th>
        <th>geo localisation</th>
          <th>nom</th>
          <th>date</th>
          <th>Annuler</th>
        </tr>
</thead>
<tbody>
      <?php
        foreach ($list as $reservation) {
            

        ?>
            <tr class="active-row">
                <td><?php
                
                $idr=$reservation['id_restau'];
$wow=$ReservationC->nomR($idr);
 //var_dump($wow);
 echo($wow[0]['name']);
 ?></td>
   <td><?php
                
                $idr=$reservation['id_restau'];
$wow=$ReservationC->geoR($idr);
 //var_dump($wow);
 echo($wow[0]['geo']);
 ?></td>
                <td><?= $reservation['nom_reservation']; ?></td>
                <td><?= $reservation['date_reservation']; ?></td>
                <td align="center">
                <form method="POST" action="deleteReservation.php">
    <input type="submit" name="delete" value="delete" style="btn btn-primary">
    <input name="idd" type="hidden" value=<?PHP echo $reservation['id_reservation'];?> >
    <input name="user_id" type="hidden" value=<?PHP echo $user_id; ?> >
    </form>
</td>

            </tr>
        <?php
    }

    ?>
    </tbody>
</table></center>

        <!-- Navbar & Hero End -->


       

       

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">About Us</a>
                        <a class="btn btn-link" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">Contact Us</a>
                        <a class="btn btn-link" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">Reservation</a>
                        <a class="btn btn-link" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">Privacy Policy</a>
                        <a class="btn btn-link" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">Terms &amp; Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            © <a class="border-bottom" href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com/">HTML Codex</a><br><br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">Home</a>
                                <a href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">Cookies</a>
                                <a href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">Help</a>
                                <a href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="https://technext.github.io/restoran/index.html?_ga=2.217743574.1185720242.1666899791-1611977660.1656511782&amp;fbclid=IwAR2n-dhF9IeIpkS-L2m9orwaaOffYgwrOK-XcQcKY0tSvK4uN5uMV2XMgRg#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="display: none;"><i class="bi bi-arrow-up"></i></a>
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