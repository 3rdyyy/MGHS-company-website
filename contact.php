<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact Us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/MGHS.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
 
  
</head>

 <body>

   <!-- Messenger Chat Plugin Code -->
   <div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "101955138926588");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v13.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

 </body>
</html>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<style type="text/css">
	.msg{
		background: #F2DEDE;
		color:#A94442;
		padding: 10px;
		width: 100%;
		border-radius: 5px;

	}
	.msg-success{
		background: #5fcf80;
		color:white;
    font-weight: bold;
		padding: 10px;
		width: 100%;
		border-radius: 5px;

	}
</style>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <a href="index.html" class="logo me-auto"><img src="assets/img/MGHS Logo.png" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li class="dropdown"><a href="services.html"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <!-- <ul>
              <li><a href="services_1.html">Consulation Services</a></li>
              <li><a href="#">Feasebility Studies</a></li>
              <li><a href="#">Branding Services</a></l    i>
              <li><a href="#">Financial Resources</a></li>
            </ul> -->
          </li>
          
          <li class="dropdown"><a href="career.html"><span>Careers</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="career_1.html">Careers at MGHS</a></li>
              <li><a href="internship_1">Internships at MGHS</a></li>
              
            </ul>
          </li>
          <li><a href="http://blog.themghs.com/">Blog</a></li>
          
          <li><a class="active" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="courses.html" class="get-started-btn">Get Started</a> -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact Us</h2>
        <p>We'd Love to Hear From You </p>
      </div>
    </div><!-- End Breadcrumbs -->
   <div class="container" style="background-image: url('assets/img/contact.jpg');  background-size:100%  ; background-position:center;background-repeat: no-repeat;height: 200px;" >
      </div>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
      
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
             
               

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@themghs.com</p>
            </div>
            <div class="email">
            
              </div>

            

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
          
            <form action="contact_form.php" method="post" role="form" class="php-email-form" id="formid" onsubmit="process(event)">
            		<?php if (isset($_GET['error'])) { ?>
          	   <p class="msg"> <?php echo $_GET['error'];?></p>
                 <?php }?>
                 	<?php if (isset($_GET['success'])) { ?>
          	   <p class="msg-success"> <?php echo $_GET['success'];?></p>
                 <?php }?>
            <div class="alert alert-info" style="display: none;"></div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="fname" class="form-control" id="name" placeholder="First Name"  required>		

                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="lname" class="form-control" id="name" placeholder="Last Name"  required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="number" name="phone_no" class="form-control" id="name" placeholder="Phone Number"  required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="form-group" >
      <div class="input-group" style="width:100% ">
        <div class="input-group-prepend">
          <span class="input-group-text">
             <img src="captcha.php?rand=<?php echo rand(); ?>" id='captcha_image' style="width: 90px;">
          </span>                    
        </div>
        <input type="text" class="form-control" name="captcha_input" placeholder="Enter Captcha" required="required" style="border-radius: 3px;">
        <div class="input-group-prepend">
          <span class="input-group-text" style="background: white; border:none; ">
             <a href='javascript: refreshCaptcha();' style="fon"><i class="fa fa-refresh" style="font-size: 20px;"></i></a>
          </span>                    
        </div>
     </div>
              <div class="form-group">
        </div> 
              	<div class="text-center">
                <button disabled type="submit" id="btn1" style="display: none">Submitting...</button>
                <button type="submit" name="submit" id="btn" style="width: 200px; height:50px; font-size: 15px;">Submit</button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>MGHS Services</h3>
        <p>

          <strong>Email:</strong> info@themghs.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="services.html">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="career.html">Careers</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
        </ul>
      </div>



      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>

    </div>
  </div>
</div>


</footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
 

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script>

//Refresh Captcha
function refreshCaptcha(){
    var img = document.images['captcha_image'];
    img.src = img.src.substring(
    0,img.src.lastIndexOf("?")
    )+"?rand="+Math.random()*1000;
}
$(document).ready(function($) {
    $('#formid').on('submit', function(evt) {
        $('#btn').hide();
    });
});
$(document).ready(function($) {
    $('#formid').on('submit', function(evt) {
        $('#btn1').show();
    });
});

  

</script>
</body>
</html>