<!DOCTYPE html>
<html lang="fr">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
<<<<<<< HEAD
    <title><?php bloginfo('title'); ?></title>  
    <!--<meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">-->
=======
    <title><?php bloginfo('name'); ?></title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
>>>>>>> 7eb0f46a4620c685182b6663b903eeb0a8e53e84

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
<<<<<<< HEAD
	<!-- Lightbox CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css">
=======
>>>>>>> 7eb0f46a4620c685182b6663b903eeb0a8e53e84
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
            <div id="loader"></div>  
        </div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
<<<<<<< HEAD
              <a class="nav-link js-scroll-trigger <?php if (get_the_title()!="À propos" &&
															 get_the_title()!="Mon objectif" &&
															get_the_title()!="Curriculum vitae" &&
															get_the_title()!="Contact") { echo 'active'; }?>" href="<?=get_home_url()?>/">Index</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger <?php if (get_the_title()=="À propos") { echo 'active'; }?>" href="<?=get_home_url()?>/a-propos/">À propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger <?php if (get_the_title()=="Mon objectif") { echo 'active'; }?>" href="<?=get_home_url()?>/mon-objectif/">Mon objectif</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger <?php if (get_the_title()=="Curriculum vitae") { echo 'active'; }?>" href="<?=get_home_url()?>/curriculum-vitae/">Mon CV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger <?php if (get_the_title()=="Contact") { echo 'active'; }?>" href="<?=get_home_url()?>/contact/">Contact</a>
=======
              <a class="nav-link js-scroll-trigger active" href="http://localhost/wordpress/">Index</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/wordpress/index.php/a-propos/">À propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/wordpress/index.php/objectif/">Mon objectif</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/wordpress/index.php/mon-cv/">Mon CV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/wordpress/index.php/contact/">Contact</a>
>>>>>>> 7eb0f46a4620c685182b6663b903eeb0a8e53e84
            </li>
          </ul>
        </div>
      </div>
    </nav>
<<<<<<< HEAD
=======
    
	<section id="home" class="main-banner parallaxie" style="background: url('<?php echo get_template_directory_uri(); ?>/uploads/banner-01-bis.jpg')">
        <div class="heading">
			<h1><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
    </section>

    <svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>
>>>>>>> 7eb0f46a4620c685182b6663b903eeb0a8e53e84
