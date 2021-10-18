<?php include('setup.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Driverless</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">


      <h1 class="logo me-auto"><a href="index.html">DRIVERLESS</a></h1>
  

<nav id="navbar" class="navbar">
      <ul>
          <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="faq.php">FAQ</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="signup.php" class="active">Sign Up</a></li>  
              <li><a href="login.php" class="login">Log In</a></li>
          </li>
      </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </li>
      </ul>
    </div>
  </div>
</nav>  


    </div>
  </header><!-- End Header -->

  <section id="about" class="about">
      <div class="container">

    <h2>Sign Up</h2>

		 <form method="post" action="signup.php">
		 	<!--display validation errors here --->
		 <?php include ("errors.php"); ?>
		 
		 <div class="input-group">
		 	<label>First Name</label>
		 	<input type="text" name="firstname">
		 </div>
		 <div class="input-group">
		 	<label>Last Name</label>
		 	<input type="text" name="lastname">
		 </div>
		 <div class="input-group">
		 	<label>Date of Birth</label>
		 	<input type="password" name="dateofbirth">
		 </div>
		 <div class="input-group">
		 	<label>Email Address</label>
		 	<input type="text" name="email" value="<?php echo $email; ?>">
		 </div>
		 <div class="input-group">
		 	<label>Username</label>
		 	<input type="text" name="username" value="<?php echo $username; ?>">
		 </div>
		 <div class="input-group">
		 	<label>Password</label>
		 	<input type="text" name="password_1">
		 </div>
		 <div class="input-group">
		 <label>Confirm password</label>
		 	<input type="password" name="password_2">
		 </div>
		 <div class="input-group">
		 	<button type="submit" class="btn" name="reg_user">Register</button>
		 </div>
		 		<p>
		 	Already a member? <a href="login.php">Log In</a>
		 		</p>
			</form>
	
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Driverless</h3>
              <p>
                P.O. Box 50 <br>
                Chichiri, Blantyre<br><br>
                <strong>Phone:</strong> +265 (9)98 054 954<br>
                <strong>Email:</strong> driverless@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="faq.php">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="signup.php">Sign Up</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Fleet Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tune Ups</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Computer Diagnostic</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Alignments</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">AC Services</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Sign Up Now! For exclusive content, discounts and new product announcements-plus a few suprises.</p>
            <form action="" method="POST">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Driverless</span></strong>. All Rights Reserved
      </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  
  <script src="assets/js/main.js"></script>


</body>

</html>

