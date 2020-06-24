<?php 

require 'dbcon.php';

$id=$_GET['id'];

$qry="SELECT * FROM project WHERE pro_id=$id";

$rs=mysqli_query($conn,$qry);

$row=mysqli_fetch_assoc($rs);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - iPortfolio Bootstrap Template</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/fevicon_zeel.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.2.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
 <!--  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button> -->

  <!-- ======= Header ======= -->
  <!-- <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/my.jpg" alt="profile" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Zeel Thakkar</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://github.com/zeel07thakkar1" class="twitter"><i class="bx bxl-github"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="index.php"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="index.php#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="index.php#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="index.php#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
          <li><a href="index.php#services"><i class="bx bx-server"></i> Services</a></li>
          <li><a href="index.php#contact"><i class="bx bx-envelope"></i> Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
 -->
    <!-- </div> -->
  <!-- </header> --> 


 <!--  <main id=""> -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 class="font-weight-bold" style="color: #173b6c"><i class="fa fa-id-card"></i> Portfoio Details</h2>
          <ol>
            <li><a href="index.php#portfolio">Portfolio</a></li>
            <li >Portfoio Details</li>
          </ol>
        </div>
        <hr>

      </div>
    </section><!-- End Breadcrumbs -->

    <div class="container mb-5">
      <div class="row ">
        <div class="col-lg-4 mb-2 ">
            <div class="card portfolio_img_div p-3 shadow-sm">
              <div class="portfolio_img pr-3">
                <a href="<?php echo $row['pic1']; ?>" data-gall="portfolioGallery" class="venobox">
                  <div class="temp">
                    <img src="<?php echo $row['pic1']; ?>" class="" alt="img1">
                  </div>
                </a>
                  
              </div>
              
                
            
            </div>
        </div>
        <div class="col-lg-4 mb-2">
             <div class="card portfolio_img_div p-3 shadow-sm">
              <div class="portfolio_img pr-3">
                  <a href="<?php echo $row['pic2']; ?>" data-gall="portfolioGallery" class="venobox">
                  <img src="<?php echo $row['pic2']; ?>" class="" alt="img2"></a>
              </div>
            </div>
        </div>
        <div class="col-lg-4 mb-2">
             <div class="card portfolio_img_div p-3 shadow-sm">
              <div class="portfolio_img pr-3">
                  <a href="<?php echo $row['pic3']; ?>" data-gall="portfolioGallery" class="venobox">
                  <img src="<?php echo $row['pic3']; ?>" class="" alt="img3"></a>
              </div>
            </div>
        </div>
      </div>
      <hr class="pt-5">

      <div class="row">
        <div class="col-lg-8">
            <div class="portfolio-description">
              <h1 class="font-weight-bold text-info"><?php echo $row['project_nm']; ?></h1>
              <p class="text-justify text-muted">
                <?php echo $row['pro_desc']; ?>
              </p>
            </div>
        </div>
         <div class="col-lg-4">
            <div class="pro_info p-4">
            <h3 class="text-info">Project information</h3>
            <hr>
            <ul class="list-unstyled">
              <li class="pb-1"><i class="fa fa-hand-o-right"></i> <strong>Category</strong>: <?php echo $row['cat_name']; ?></li>
              <li class="pb-1"><i class="fa fa-hand-o-right"></i> <strong>Client</strong>: <?php echo $row['client_nm']; ?></li>
              <li class="pb-1"><i class="fa fa-hand-o-right"></i> <strong>Project date</strong>: <?php echo $row['project_date']; ?></li>
              <li class="pb-1"><i class="fa fa-hand-o-right"></i> <strong>Project URL</strong>: <a href="#"><?php echo $row['project_url']; ?></a></li>
            </ul>
          </div>
         </div>
      </div>
    </div>

    <!-- ======= Portfolio Details Section ======= -->
<!--     <section id="portfolio-details" class="portfolio-details">
      <div class="container">



<div class="portfolio-details-container">


<div class="card-columns">
  <div class="card zoom_img">
    <a href="<?php echo $row['pic1']; ?>" data-gall="portfolioGallery" class="venobox">
    <img src="<?php echo $row['pic1']; ?>" style="height: 100%;width: 100%;object-fit: cover;" class="img-fluid card-img-top" alt="img1"></a>
    
  </div>

  <div class="card p-3 bg-info text-white">
   <h3>Project information</h3>
            <ul class="list-unstyled">
              <li class="p-2"><strong>Category</strong>: <?php echo $row['cat_name']; ?></li>
              <li class="p-2"><strong>Client</strong>: <?php echo $row['client_nm']; ?></li>
              <li class="p-2"><strong>Project date</strong>: <?php echo $row['project_date']; ?></li>
              <li class="p-2"><strong>Project URL</strong>: <a href="#"><?php echo $row['project_url']; ?></a></li>
            </ul>
  </div> -->

 <!--  <div class="card zoom_img">
    
    <a href="<?php echo $row['pic2']; ?>" data-gall="portfolioGallery" class="venobox">
    <img src="<?php echo $row['pic2']; ?>" style="height: 100%;width: 100%;" class="img-fluid card-img-top" alt=""></a>
  </div>
 -->
  <!-- <div class="card bg-primary text-white text-center p-3">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
      <footer class="blockquote-footer text-white">
        <small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div> -->
 

  
 <!--  <div class="card zoom_img">
    <a href="<?php echo $row['pic3']; ?>" data-gall="portfolioGallery" class="venobox">
    <img src="<?php echo $row['pic3']; ?>" style="height: 100%;width: 100%;" class="img-fluid card-img-top" alt=""></a>
  </div>
</div> -->

         <!--  <div class="owl-carousel portfolio-details-carousel">
            <img src="<?php echo $row['pic1']; ?>" style="height: 100%;width: 100%;object-fit: contain;" class="img-fluid" alt="">
            <img src="<?php echo $row['pic2']; ?>" style="height: 100%;width: 100%;" class="img-fluid" alt="">
            <img src="<?php echo $row['pic3']; ?>" style="height: 100%;width: 100%;" class="img-fluid" alt="">


          </div> -->

         <!--  <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: <?php echo $row['cat_name']; ?></li>
              <li><strong>Client</strong>: <?php echo $row['client_nm']; ?></li>
              <li><strong>Project date</strong>: <?php echo $row['project_date']; ?></li>
              <li><strong>Project URL</strong>: <a href="#"><?php echo $row['project_url']; ?></a></li>
            </ul>
          </div> -->

<!-- </div> -->

      <!--   <div class="portfolio-description">
          <h1 class="font-weight-bold text-info"><?php echo $row['project_nm']; ?></h1>
          <p>
            <?php echo $row['pro_desc']; ?>
          </p>
        </div> -->

      <!-- </div> -->
    <!-- </section>End Portfolio Details Section -->



  <!-- </main>End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Zeel Thakkar</span></strong>
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Zeel Thakkar</a>
      </div>
    </div>
  </footer> -->
  <!-- End  Footer -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>