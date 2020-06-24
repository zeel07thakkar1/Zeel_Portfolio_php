<?php

require 'dbcon.php';

$limit = 6;
$sql = "SELECT COUNT(pro_id) FROM project";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Zeel Thakkar</title>
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

  <style type="text/css" rel="stylesheet">
        .white{
            background-color: white !important;
            color: navy !important;
            font-weight: bold;
        }
    </style>

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/my.jpg" alt="profile" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Zeel Thakkar</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://github.com/zeel07thakkar1" class="twitter"><i class="bx bxl-github"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="index.html"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
          <li><a href="#services"><i class="bx bx-server"></i> Services</a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Zeel Thakkar</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer,Educator/Trainer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>I'm Web Designer having 6+ months of experience in IT industry.
          having a best Knowledge of all web design platforms like HTML, HTML5, CSS/CSS3.I have an excellent background as a Web Designer along with my academic education in Computer Science and Technology. The experience and my academic education have provided me with some outstanding and technical skills </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4 col-12" data-aos="fade-right">
            <img src="assets/img/my.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 col-md-8 col-12 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Web Designer &amp; IT Trainer.</h3>
            <p class="font-italic">
              Young IT Expert & Web Designer Educator
            </p>
            <div class="row">
              <div class="col-lg-5">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 7 Jan 1995</li>
                  <!-- <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.example.com</li> -->
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +91 9033345075</li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : Ahmedabad, India</li>
                </ul>
              </div>
              <div class="col-lg-7">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 25</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> M.Sc(IT & CA)</li>
                  <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> zeel07thakkar@gmail.com</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                </ul>
              </div>
            </div>
            <p>
              Furthermore, I have the excellence of creating upstanding designs of novelty. I firmly believe that these qualities make me different from the rest of the contestants.</p>

              <p>I am Web Designer having 6+ months of working experience in this field. I would like to inform you that I am highly skilled with HTML/HTML5, CSS/CSS3, Responsive Web Design, Bootstrap4, JQuery and JavaScript Libraries as I have a handsome experience over it. Still I am always eager to learn a new and make my skill sharper whenever I get any chance.</p>
          </div>
        </div>
    <hr>
    
     
      <!-- gallary -->
      <div class="row p-5 no-gutters">

        <div class="col-lg-4 col-md-4 col-sm-6" data-aos="fade-right">
          <div class="gallery_img">
            <img src="assets/img/g1.jpg">
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
          <div class="gallery_img">
              <img src="assets/img/g2.jpg">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="100">
          <div class="gallery_img">
            <img src="assets/img/pic3.jpg">
          </div>
        </div>
      </div>
    </div><!---container complete----->
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Your ability to discipline yourself to set clear goals, and then to work toward them every day, will do more to guarantee your success than any other single factor.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 col-sm-6 col-6" data-aos="fade-up">
            <div class="count-box">
              <p>
                <i class="icofont-simple-smile mr-3"></i>
                <span data-toggle="counter-up">3</span>
              </p>
              <p><strong>Industrial Seminars</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <p><i class="icofont-document-folder mr-3"></i>
                <span data-toggle="counter-up">30</span><span>+</span>
              </p>
              <p class="mb-0"><strong>Projects</strong></p>
                <p>[solutions & Eductaion]</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <p>
                <i class="icofont-live-support mr-3"></i>
                <span data-toggle="counter-up">1,463</span>
              </p>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <p>
                <i class="icofont-users-alt-5 mr-3"></i>
                <span data-toggle="counter-up">15</span>
            </p>
              <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>I am Web Designer having 6+ months of working experience in this field. I would like to inform you that I am highly skilled with HTML/HTML5, CSS/CSS3, Responsive Web Design, Bootstrap4, JQuery and JavaScript Libraries as I have a handsome experience over it.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar progress-bar-animated  progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar progress-bar-animated  progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar progress-bar-animated  progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
             <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar progress-bar-animated  progress-bar-striped" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">JQuery <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar progress-bar-animated  progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Bootstrap4 <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar progress-bar-animated  progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

           
             <div class="progress">
              <span class="skill">Adobe XD <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar progress-bar-animated  progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
             <div class="progress">
              <span class="skill">Figma <i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar progress-bar-animated  progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Zeel Thakkar</h4>
              <p><em>Team-oriented Web Designer and Educator with 6+ months of experience creating usable, responsive websites. Skilled in designing, and developing creative websites looks and works.</em></p>
              <ul>
                <li>Ahmedabad, Gujarat</li>
                <li>+91 9033345075</li>
                <li>zeel07thakkar@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>M.Sc(IT & CA)</h4>
              <h5>2015 - 2017</h5>
              <p><em>K.S School of Business Management , Ahmedabad</em></p>
              <p>M.Sc. (IT&CA) with a  4.25/5 GPA</p>
            </div>
            <div class="resume-item">
              <h4>B.Sc(IT & CA)</h4>
              <h5>2012 - 2015</h5>
              <p><em>K.S School of Business Management , Ahmedabad</em></p>
              <p>B.Sc. (IT&CA) with a  3.84/5 GPA</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Jr. Web designer & Educator</h4>
              <h5>Sept 2019 - Present</h5>
              <p><em>CreArt Solutions </em></p>
              <ul>
                <li>Create and design user interface for corporate websites using HTML, HTM5, CSS, CSS3, Bootstrap 4/3, Logos, JavaScript, and JQuery.</li>
                <li>Designed and developed Web Responsive Templates, layouts and web interfaces.
                      & Responsible for validation of links and Web forms.</li>
                <li>Take the Analysis sessions during the industrial visit of Students.</li>
                <li>Take regular batches of students on Web Designing which includes HTML, HTML5, CSS, CSS3, Bootstrap 4/3, JavaScript, and JQuery.
& Handle the regular sessions of Analysis and Documentation phase of SDLC during students’ Project Training which includes Requirement gathering, R&D, Model and Design of Diagrams etc.
</li>
                <li>Providing first-hand support to all the Students’ Project Work.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Computer Operator [Lab Asst.]</h4>
              <h5>July 2018 – June 2019</h5>
              <p><em>K.S. School of Business Management, Ahmedabad</em></p>
              <ul>
                <li>Maintained Client – Server architecture during exams of students, such that,
                  <ul>
                    <li>Managed students’ accounts for exams.</li>
                    <li>Supervised the practical exam sessions.</li>
                    <li>Assisted in the recovery activities during failures to restore normal operations.</li>
                  </ul>
                </li>
                <li>Performing preventative measures and maintenance of all electronic devices related to computers such as keyboards, monitors, drives, etc.</li>
                <li>Participating in the planning, scheduling, implementation and testing of all hardware and software.</li>
                <li>Actively Performed in Admission Process of Gujarat University 2019-20 as a Technical person.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2 class="mb-5">Portfolio</h2>
          <!-- <p class="mb-5">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->

         <div id="target-content"><span class="text-info font-weight-bold">Data Loading...</span></div>
            
          <div class="row">
            
            <ul class="pagination nav" style="margin: 0px auto;">
              <?php
                if(!empty($total_pages)){
                for($i=1; $i<=$total_pages; $i++){
                  if($i == 1){
                    ?>
              <li class="page-item my_link" id="<?php echo $i;?>"><a href="JavaScript:Void(0);" data-id="<?php echo $i;?>" class="page-link" ><?php echo $i;?></a></li>
              
              <?php
              }
              else{
              ?>
              <li class="page-item my_link" id="<?php echo $i;?>"><a href="JavaScript:Void(0);" class="page-link" data-id="<?php echo $i;?>"><?php echo $i;?></a></li>
              <?php
              }
              }
              }
              ?>
            </ul>
            
          </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Without service, we would not have a strong quality of life. It’s important to the person who serves as well as the recipient. It’s the way in which we ourselves grow and develop.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="">Web Design</a></h4>
            <p class="description">Web Designing which includes HTML, HTML5, CSS, CSS3, Bootstrap 4/3, JavaScript, and JQuery.I will Provide a unique, creative Web Layouts Developed using Latest Technologies.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="">PSD to HTML</a></h4>
            <p class="description">PSD to HTML which includes HTML, HTML5, CSS, CSS3, Bootstrap 4/3, JavaScript, and JQuery using this latest Technologies make responsive abd All screen suppoted Templates using PSDs files.</p>
          </div>
          <!-- <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div> -->
          
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p class="font-weight-bold">Great feedback is a critical element of best-practice performance management.</p>
          <br>
          <q class="text-muted">No matter how good you think you are as a leader, my goodness, the people around you will have all kinds of ideas for how you can get better. So for me, the most fundamental thing about leadership is to have the humility to continue to get feedback and to try to get better – because your job is to try to help everybody else get better.</q>
        </div>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item" data-aos="fade-up">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              When I have any query related to front end design at a time you are guide me very well. 
              your front end knowledge is outstanding. It will lots of help to us. 
              Your suggestions are very helpful to us make a better project. Thank You :)
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
           
            <h3 class="text-primary">Harsh Thakkar</h3>
            <h4>K S School Of Business Management,A'bad</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              I am comfortable to teach with u and your teaching method.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
           
            <h3 class="text-primary">Yukta Patel</h3>
            <h4>Ganpat Collage,A'bad</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              A real one Teacher, very helpful person.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
           
            <h3 class="text-primary">Krishna Makwana</h3>
            <h4>K S School Of Business Management,A'bad</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Thank you for giving us the best of your knowledge and helping in every difficulty over the time.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
           
            <h3 class="text-primary">Shefali Chudasama</h3>
            <h4>Sonecha Collage,Somnath</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              I feel really good with your corporation at the time.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
           
            <h3 class="text-primary">Kriyanshi Patel</h3>
            <h4>Ganpat Collage,A'bad</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="500">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             Zeel mem teaches me Web Designing. Her way of teaching method is so amazing and unique...
              that's I understand very easily. She is very supportive in all ways and very good guider. 
              Thank you for all zeel mem.... 
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
           
            <h3 class="text-primary">Darshna Rangani</h3>
            <h4>Sunshine Collage,Rajkot</h4>
          </div>

           <div class="testimonial-item" data-aos="fade-up" data-aos-delay="500">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                You are excellent in designing 👍
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
           
            <h3 class="text-primary">Kirat Belim</h3>
            <h4>Sonecha,Somnath</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="500">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Mam aap ki designing skill is very powerful aap ne hame bahut acche se 
                design ka ek ek concept clear krvaya aap ki communication skills bahut best h..!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
           
            <h3 class="text-primary">Pooja Khushwaha</h3>
            <h4>Sonecha,Somnath</h4>
          </div>



        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>E-mail me with any questions and inquiries or call on below number.I would happy to answer your questions and set up a meeting with you.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>202 , Devrath Appartment,<br> Nr. Doon School , Radhavallabh Colony ,<br>Jayhind Cross Road , Maninagar.<br>Ahmedabad-08</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>zeel07thakkar@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91 9033345075</p>
              </div>


              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.800130243043!2d72.60479061426976!3d22.994376084967367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85ec9c9e92f5%3A0x6211c7f1fd1da22b!2sDevrath%20Apartment!5e0!3m2!1sen!2sin!4v1591622120185!5m2!1sen!2sin" width="100%" height="290px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="contactpr.php" method="post" role="form" class="info">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="uname" class="form-control" id="name" required="" />
                
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required="" />
                
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required=""/>
              
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required=""></textarea>
              
              </div>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" name="btn_sb">Send Message</button>
              </div> 
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Zeel Thakkar</span></strong>
      </div>
      <div class="credits">
        Designed by <a href="">Zeel Thakkar</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

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

  <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/plugin/owl/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/switcher.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>




<script>
  $(document).ready(function() {
    $("#target-content").load("pagination.php?page=1");
    $(".page-link").click(function(){
      var id = $(this).attr("data-id");
      var select_id = $(this).parent().attr("id");
      $.ajax({
        url: "pagination.php",
        type: "GET",
        data: {
          page : id
        },
        cache: false,
        success: function(dataResult){
          $("#target-content").html(dataResult);
          $(".page-item").removeClass("active");
          $("#"+select_id).addClass("active");
          
        }
      });
    });
    });
</script>

</body>

</html>