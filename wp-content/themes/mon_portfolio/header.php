<!DOCTYPE html>
<html lang="fr">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title><?php bloginfo('title'); ?></title>  
    <!--<meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">-->

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	<!-- Lightbox CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css">
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
            </li>
          </ul>
        </div>
      </div>
    </nav>
