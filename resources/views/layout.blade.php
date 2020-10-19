<!DOCTYPE html>
<html lang="en">
<head>

<title>Scenic HTML Template</title>

<!--

Template 2099 Scenic

http://www.tooplate.com/view/2099-scenic

-->


<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body>

<!-- PRE LOADER -->
<div class="preloader">
     <div class="spinner">
          <span class="sk-inner-circle"></span>
     </div>
</div>


<!-- MENU -->
<div class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <!-- NAVBAR HEADER -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <!-- lOGO -->
               <a href="index.html" class="navbar-brand">Scenic</a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">Studio</a></li>
                    <li><a href="#team" class="smoothScroll">Our People</a></li>  
                    <li><a href="#contact" class="smoothScroll">Let's talk</a></li>
               </ul>
          </div>

     </div>
</div>


<!-- HOME -->



<!-- ABOUT -->



<!-- PROJECT -->
@yield('project')
@yield('single')


<!-- TEAM -->



<!-- CONTACT -->
<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-3 col-md-6 col-sm-12">
                    <div class="section-title">
                         <h1>Talk to me!</h1>
                    </div>
               </div>

               <div class="clearfix"></div>

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <!-- CONTACT FORM HERE -->
                    <form id="contact-form" action="#" method="get" role="form">

                         <!-- IF MAIL SENT SUCCESSFULLY -->
                         <h6 class="text-success">Your message has been sent successfully. </h6>
                         
                         <!-- IF MAIL SENDING UNSUCCESSFULL -->
                         <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                         <div class="col-md-6 col-sm-6">
                              <input type="text" class="form-control" id="cf-name" name="cf-name" placeholder="Name">
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <input type="email" class="form-control" id="cf-email" name="cf-email" placeholder="Email Address">
                         </div>

                         <div class="col-md-12 col-sm-12">
                              <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">
                              <textarea class="form-control" rows="5" id="cf-message" name="cf-message" placeholder="Message"></textarea>
                         </div>

                         <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4">
                              <div class="section-btn">
                                   <button type="submit" class="form-control" id="cf-submit" name="submit"><span data-hover="Send Message">Send Message</span></button>
                              </div>
                         </div>
                    </form>
               </div>

          </div>
     </div>
</section>

<!-- FOOTER -->
<footer>
     <div class="container">
          <div class="row">

               <div class="col-md-5 col-sm-6">
                    <h2>Digital Studio</h2>
                    <p>321 Donec et justo id risus, Malesuada pharetra,<br> Tristique vestibulum,<br> Lorem ipsum dolor</p>
                    
                    
               </div>

               <div class="col-md-4 col-sm-6">
                    <div class="footer-info">
                    	<h2>Keep in touch</h2>
                         <p><a href="tel:010-090-0780">010-090-0780</a></p>
                         <p><a href="mailto:info@company.com">info@company.com</a></p>
                         <p><a href="#">Our Location</a></p>
                    </div>
               </div>

               <div class="col-md-3 col-sm-12">
               		
                    <h2>About Us</h2>
                    <p>Sed vestibulum posuere ante, eget blandit metus. Morbi sodales feugiat erat, et placerat sapien suscipit ut.</p>
                    <ul class="social-icon">
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                    
               </div>

               <div class="clearfix"></div>

               <div class="col-md-12 col-sm-12">
                    <div class="copyright-text">
                         <p>Copyright © 2018 Company Name 
                         
                         | Design: Tooplate</p>
                    </div>
               </div>
               
          </div>
     </div>
</footer>

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>