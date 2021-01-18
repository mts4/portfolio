<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<title>Portafolio - AmusDev</title>
<meta name="description" content="Kenil is creative Responsive Bootstrap 4 One Page Personal Portfolio Html Template.">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
============================== -->
<!-- Animate -->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.min.css" />
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
<!-- Owl Carousel -->
<link rel="stylesheet" type="text/css" href="vendor/owl.carousel/assets/owl.carousel.min.css" />
<!-- Magnific Popup -->
<link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.min.css" />
<!-- Custom Stylesheet -->
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="70">

<!-- Preloader -->
<div class="preloader">
  <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
=============================== -->
<div id="main-wrapper"> 
  <!-- Header
  ============================ -->
  <header id="header" class="sticky-top"> 
    <!-- Navbar -->
	<nav class="primary-menu navbar navbar-expand-none navbar-side-open navbar-text-light bg-transparent text-3 border-bottom-0">
      <div class="container-fluid position-relative px-0">
        <div class="col-3 d-none d-sm-block">
          <ul class="social-icons social-icons-sm social-icons-light">
            <li class="social-icons-linkedin">
              <a data-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="" data-original-title="Linkedin"><i class="fab fa-linkedin-in"></i>
              </a>
            </li>
            <li class="social-icons-github">
                <a data-toggle="tooltip" href="https://github.com/mts4" target="_blank" title="" data-original-title="GitHub"><i class="fab fa-github"></i></a>
            </li>
            <li class="social-icons-instagram">
                <a data-toggle="tooltip" href="https://www.instagram.com/mati__us/" target="_blank" title="" data-original-title="Instagram"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-6 d-flex justify-content-start justify-content-sm-center"> 
          <!-- Logo --> 
          <a class="logo" href="index.html" title="AMUSDEV"> <img src="images/logo-light.png" alt="AMUSDEV"/> </a> 
          <!-- Logo End --> 
        </div>
        <div class="col-3 navbar-accordion d-flex justify-content-end">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"><span></span><span></span><span></span></button>
          <div id="header-nav" class="collapse navbar-collapse d-flex flex-column">
            <ul class="navbar-nav my-auto text-center">
              <li class="nav-item"><a class="nav-link smooth-scroll active" href="#home">Inicio</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">Sobre Mí</a></li>
              <!-- <li class="nav-item"><a class="nav-link smooth-scroll" href="#services">Services</a></li> -->
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#why-choose">Why Choose</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portafolio</a></li>
              <!-- <li class="nav-item"><a class="nav-link smooth-scroll" href="#process">Process</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#clients">Clients</a></li> -->
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
            </ul>
            <div class="mt-auto text-center text-2">
              <ul class="social-icons social-icons-sm social-icons-light justify-content-center mr-n1 mr-lg-0">
                <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/" target="_blank" title="" data-original-title="Google"><i class="fab fa-google"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End --> 
  </header>
  <!-- Header End --> 
  
  <!-- Content
  ============================================= -->
  <div id="content" role="main"> 
    
    
    
    <?php include 'templates/intro.php'; ?>
    <?php include 'templates/about.php'; ?>
    <?php //include 'templates/services.php'; ?>
    <?php include 'templates/skills.php'; ?>
    <?php include 'templates/promo.php'; ?>
    <?php include 'templates/portfolio.php'; ?>
    <?php //include 'templates/process.php'; ?>
    <?php //include 'templates/clients.php'; ?>
    <?php include 'templates/contact.php'; ?>
    
  </div>
  <!-- Content end --> 
  
  <?php include 'footer.php'; ?>
  
</div>
<!-- Document Wrapper end --> 

<!-- Back to Top
============================================= --> 
<a id="back-to-top" class="rounded" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- About more Modal
================================== -->
<div id="about-us-details" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-2 text-light">
      <div class="modal-header border-secondary">
        <h5 class="modal-title text-white">About Me More</h5>
        <button type="button" class="close font-weight-400 text-white" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body p-4">
        <p>I combine our passion for design focused in people with advanced development technologies. <strong class="font-weight-600">350+ clients</strong> have procured exceptional results and happiness while working with me.</p>
        <div class="featured-box style-1">
          <div class="featured-box-icon text-primary"> <i class="far fa-paper-plane"></i></div>
          <h4 class="text-white">Our Mission</h4>
          <p>Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. lisque persius interesset his et, in quot quidam mea essent possim iriure.</p>
        </div>
        <div class="featured-box style-1">
          <div class="featured-box-icon text-primary"> <i class="far fa-eye"></i></div>
          <h4 class="text-white">Our Vision</h4>
          <p>Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. lisque persius interesset his et, in quot quidam mea essent possim iriure.</p>
        </div>
        <div class="featured-box style-1">
          <div class="featured-box-icon text-primary"> <i class="far fa-thumbs-up"></i></div>
          <h4 class="text-white">Our Goal</h4>
          <p>Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. lisque persius interesset his et, in quot quidam mea essent possim iriure.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About more Modal End --> 

<!-- Terms & Policy Modal
================================== -->
<div id="terms-policy" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-2 text-light">
      <div class="modal-header border-secondary">
        <h5 class="modal-title text-white">Terms & Policy</h5>
        <button type="button" class="close font-weight-400 text-white" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body p-4">
        <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <h3 class="text-white mb-3 mt-4 mt-4">Terms of Use</h3>
        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Simply dummy text of the printing and typesetting industry.</p>
        <h5 class="text-white text-4 mt-4">Part I – Information Kenil collects and controls</h5>
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <h5 class="text-white text-4 mt-4">Part II – Information that Kenil processes on your behalf</h5>
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <h5 class="text-white text-4 mt-4">Part III – General</h5>
        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <h3 class="text-white mb-3 mt-4">Privacy Policy</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
        <ol class="line-height-5">
          <li>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>In quot quidam persequeris vim, ad mea essent possim iriure. Quidam lisque persius interesset his et.</li>
          <li>Quidam lisque persius interesset his et, Lisque persius interesset his et.</li>
          <li>Interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Quot quidam persequeris vim Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Terms & Policy Modal End --> 

<!-- Disclaimer Modal
================================== -->
<div id="disclaimer" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-2 text-light">
      <div class="modal-header border-secondary">
        <h5 class="modal-title text-white">Copyright & Disclaimer</h5>
        <button type="button" class="close font-weight-400 text-white" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body p-4">
        <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
        <ul class="line-height-5">
          <li>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>In quot quidam persequeris vim, ad mea essent possim iriure. Quidam lisque persius interesset his et.</li>
          <li>Quidam lisque persius interesset his et, Lisque persius interesset his et.</li>
          <li>Interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Quot quidam persequeris vim Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Disclaimer Modal End -->


<!-- JavaScript --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- Easing --> 
<script src="vendor/jquery.easing/jquery.easing.min.js"></script> 
<!-- Appear --> 
<script src="vendor/jquery.appear/jquery.appear.min.js"></script> 
<!-- Counter --> 
<script src="vendor/jquery.countTo/jquery.countTo.min.js"></script> 
<!-- Parallax Bg --> 
<script src="vendor/parallaxie/parallaxie.min.js"></script> 
<!-- Typed --> 
<script src="vendor/typed/typed.min.js"></script> 
<!-- WOW animation --> 
<script src="vendor/wow/wow.min.js"></script> 
<!-- Owl Carousel --> 
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<!-- isotope Portfolio Filter --> 
<script src="vendor/isotope/isotope.pkgd.min.js"></script> 
<!-- Magnific Popup --> 
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script> 
<!-- Custom Script --> 
<script src="js/theme.js"></script>
</body>
</html>