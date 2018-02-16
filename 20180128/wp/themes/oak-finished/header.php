<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>OAK - HTML Theme</title>
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="yes" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" />

    <!-- Google Web Font -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lekton:400,700,400italic' rel='stylesheet' type='text/css'>

    <!--  Bootstrap 3-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css">

    <!--  Slider -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.kenburnsy.css">

    <!-- Animate -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

    <!-- Web Icons Font -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/iconmoon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/et-line.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ionicons.css">

    <!-- Magnific PopUp -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">

    <!-- Tabs -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/tabstyles.css" />

    <!-- Loader Style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/loader-1.css">

    <!-- Costum Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <!-- Favicon -->
    <link rel="icon" type="image/ico" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico">

    <!-- Modernizer & Respond js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<?php wp_head(); ?>
</head>

<body>

    <!-- Preloader -->
    <div class="cover"></div>

    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="index.html">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
                </a>
            </div>
            
            <!-- Menu Hamburger (Default) -->
            <button class="main-menu-indicator" id="open-button">
                <span class="line"></span>
            </button>
            
            <div class="menu-wrap" style="background-image: url(img/nav_bg.jpg)">
                <div class="menu-content">
                    <div class="navigation">
                        <span class="pe-7s-close close-menu" id="close-button"></span>
                        <div class="search-wrap js-ui-search">
                            <input class="js-ui-text" type="text" placeholder="Search Here...">
                            <span class="eks js-ui-close"></span>
                        </div>
                    </div>
                    <nav class="menu">
                        <div class="menu-list">
                            <ul>
                            <?php wp_nav_menu( array(
                              'theme_location' => 'gnav',
                              'items_wrap' => '%3$s' 
                            ) ); ?>
                            </ul>
                        </div>
                    </nav>

                    <div class="hidden-xs">
                        <div class="menu-social-media">
                            <ul>
                               <li><a href="#"><i class="iconmoon-facebook"></i></a></li>
                               <li><a href="#"><i class="iconmoon-twitter"></i></a></li>
                               <li><a href="#"><i class="iconmoon-dribbble3"></i></a></li>
                               <li><a href="#"><i class="iconmoon-pinterest"></i></a></li>
                               <li><a href="#"><i class="iconmoon-linkedin2"></i></a></li>
                            </ul>
                        </div>

                        <div class="menu-information">
                            <ul>
                                <li><span>T:</span> 003 124 115</li>
                                <li><span>E:</span> info@mail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Menu Hamburger (Default) -->

        </div>
    </div>