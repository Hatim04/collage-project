
<?php

   session_start();
   if(!isset($_SESSION['username']))
   {
      header("Location:login.php");
   }

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div>
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo img1"><a href="home1.php">
               <img src="image/cover.png">
               <!-- <h1>Elite IT Counsultant</h1> -->
            </a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" align="center">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="services.php">Services</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="blog.php">Blog</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="events.php">Events</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  
               </ul>
               <!-- <form class="form-inline my-2 my-lg-0">
                  <div class="search_icon"><img src="images/search-icon.png"></div>
               </form> -->
            </div>
            <span>
               <!-- <a href="login.php">
            <div class="btn btn-success">
            Login/Signup
            </div></a> -->
            <a href="logout.php">
               <div class="btn btn-danger">
               Logout
               </div></a>
            </span>
         </nav>
      </div>
      <!--header section end -->
      <!--about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <h1 class="about_taital">About Us</h1>
            <p class="about_text">It is a long established fact that a reader will be distracted by the readable content of a page when</p>
            <div class="about_section_2">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="about_image"><img src="images/about-img.png"></div>
                  </div>
                  <div class="col-lg-6">
                     <div class="about_taital_main">
                        <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words </p>
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--about section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="location_main">
               <div class="location_text"><img src="images/map-icon.png"><span class="padding_left_10"><a href="https://goo.gl/maps/6VbkTHZjvvvYpoE28">Location</a></span></div>
               <div class="location_text center"><img src="images/call-icon.png"><span class="padding_left_10"><a href="tel : 918866442852">+91 88664 42852</a></span></div>
               <div class="location_text right"><img src="images/mail-icon.png"><span class="padding_left_10"><a href="mailto : ghiyavadwalahatim23@gmail.com">ghiyavadwalahatim23@gmail.com</a></span></div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-4">
                     <h2 class="footer_taital">About</h2>
                     <p class="footer_text">Welcome to Elite IT Consultant! We're your partners in transformative Information Technology. With expert minds, we offer tailored solutions in digital transformation, cloud services, cybersecurity, data analytics, and more. Join us to shape a successful digital future.</p>
                  </div>
                  <div class="col-lg-4">
                     <h2 class="footer_taital">Services Link</h2>
                     <p class="footer_text">
                        1. IT Infrastructure Design<br>
                        2. Network Security Solutions<br>
                        3. Cloud Migration Services<br>
                        4. Data Analytics Consulting<br>
                        5. Software Development Expertise<br>
                        6. IT Project Management<br>
                        7. Tech Support and Maintenance<br>
                        8. Virtual CTO/CIO Guidance</p>
                  </div>
                  <div class="col-lg-4">
                     <h2 class="footer_taital">Subscribe</h2>
                     <form action="f_email_insert.php" method="post"><input type="email" class="Enter_text" placeholder="Enter Your Email" name="footer_email">
                     <input type="submit" name="submit" class="subscribe_bt" value="subscribe"></form>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="images/fb-icon.png"></a></li>
                           <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                           <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                           <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                           <li><a href="#"><img src="images/youtub-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2020 All Rights Reserved.<a href="#"> &copy; Elite IT Consultant</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>