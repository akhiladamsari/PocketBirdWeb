<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <!-- Title -->
    <title>Bird Log Book</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!-- Favicon -->
    <link href="favicon.ico" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/nexus.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    <style type="text/css">
    </style>
</head>
<body>
<div id="body-bg">
    <!-- Header -->
    <div id="header">
        <div class="container">
            <div class="row">
                <!-- Logo -->

                <div class="logo">
                    <a href="<?php echo base_url(); ?>page_nav_controller/goto_home">
                        <img src="<?php echo base_url(); ?>img/applogo.png" alt="Logo" height="100"> </a>
                </div>
                <!-- End Logo -->
            </div>
        </div>
    </div>
    <!-- End Header -->
    <!-- Top Menu -->
    <div id="hornav" class="bottom-border-shadow">
        <div class="container no-padding border-bottom">
            <div class="row">
                <!-- <div class="col-md-8 no-padding"> -->
                <div class="visible-lg">
                    <ul id="hornavmenu" class="nav navbar-nav">
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_home" class="fa-home active">Home</a>
                        </li>
                        <li>

                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_bird_glossary" class="fa-gears ">Bird
                                Glossary</a>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_map" class="fa-home">Map</a>
                        </li>
                        <li>
                            <span class="fa-font ">Log Note Library</span>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(); ?>page_nav_controller/goto_my_log_notes">My Log Notes</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>page_nav_controller/goto_shared_lognotes">Shared Log
                                        Notes</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_gallery" class="fa-th ">Gallery</a>

                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_about_us" class="fa-comment ">About Us</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_contact" class="fa-comment ">Contact Us</a>
                        </li>
                        <?php if ($this->session->has_userdata('username')) { ?>
                            <div class="login btn padding-horiz-20">
                                <p><?php echo $this->session->userdata('username') ?></p>
                                <button type="button" class="btn btn-success btn-sm"><a
                                        href="<?php echo base_url(); ?>sign_up_controller/logout">LogOut</a></button>
                            </div>
                        <?php } else { ?>
                            <div class="login btn padding-horiz-20">
                                <button type="button" class="btn btn-success btn-sm"><a
                                        href="<?php echo base_url(); ?>page_nav_controller/goto_login">Log In</a></button>
                                <button type="button" class="btn btn-success btn-sm"><a
                                        href="<?php echo base_url(); ?>page_nav_controller/goto_signup">Sign Up</a></button>
                            </div>
                        <?php } ?>

                    </ul>
                </div>

            </div>
            <!-- </div> -->
        </div>
    </div>
    <!-- End Top Menu -->
    <!-- === END HEADER === -->
    <!-- === BEGIN CONTENT === -->
    <div id="slideshow" class="bottom-border-shadow">
        <div class="container no-padding background-white bottom-border">
            <div class="row">
                <!-- Carousel Slideshow -->
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <!-- Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                    <div class="clearfix"></div>
                    <!-- End Carousel Indicators -->
                    <!-- Carousel Images -->
                    <div class="carousel-inner">
                        <div class="item ">
                            <img src="<?php echo base_url(); ?>img/slideshow/slide1.jpg">
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url(); ?>img/slideshow/slide2.jpg">
                        </div>
                        <div class="item active">
                            <img src="<?php echo base_url(); ?>img/slideshow/slide3.jpg">
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url(); ?>img/slideshow/slide4.jpg">
                        </div>
                    </div>
                    <!-- End Carousel Images -->
                    <!-- Carousel Controls -->
                    <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <!-- End Carousel Controls -->
                </div>
                <!-- End Carousel Slideshow -->
            </div>
        </div>
    </div>
</div>
<div id="content" class="bottom-border-shadow">
    <div class="container background-white bottom-border">
        <div class="row margin-vert-30">
            <!-- Main Text -->
            <div class="col-md-6">
                <h2>Introduction</h2>
                <p>Since the Pocket Bird can be used on mobile devices, it can go anywhere bird-watchers go and give a good solution for the inconvenient situations of the manual system. Pocket Bird makes it easy to record birds you see in the field, and build up unlimited links for your seamless observations with the Pocket Bird database. Pocket Bird makes it easy to keep track of what you see in the field.  This free resource can be used for the users within the Sri Lanka.</p>
                    One of the most valuable feature of the Pocket Bird mobile application is passing information from the mobile directly to your account on the Pocket Bird website. The birding community can reports and accesses information about birds through Pocket Bird.</p>
                    Pocket Bird provides worthy information openly available on the pocket Bird web application for scientific researches, education and conservation of bird resource in the country. There the professional bird watchers and the users can be able to access information with images taken from the Pocket Bird mobile application which filtered from twenty one bird categories exist in the bird world. A birder simply enters nearest location, habitat, behavior, shape, color, shape they looks like, what category they belongs to with images of the bird in the form of a log note.</p>
                    Furthermore we are willing to develop both the mobile application and the web application which will be able satisfy and cater the birders more user friendly manner and with more developed features in near future.</p>


                <p>There are electronic log books for birds such as eBird. But there is a need of an electronic logbook
                    for animals. Our system will help to three main parties. They are the Scientists, wildlife
                    researchers and the nature lovers who have interest about the animals.</p>


            </div>
            <!-- End Main Text -->
            <div class="col-md-6">
                <h3 class="padding-vert-10">Key Features</h3>
                <p>When we keep manual recordings the level of service is limited.
                    Since</p>

                <ul>•	Keep records of birds see in the field.</ul>
                <ul>•	Keep track of your bird list as images in the gallery.</ul>
                <ul>•	View the habitat location with a map</ul>
                <ul>•	Bird Glossary…………………………………………………………</ul>
                <ul>•	Share the log notes for the Pocket Bird community</ul>
                <ul>•	Conserve the birds and supports birders.</ul>


                Our electronic log book can serve for thousands of people interested about animals worldwide.
                So, the system may help to animal researches and to make people known about the animals and conserve the
                animal life.</p>
                <img src="<?php echo base_url(); ?>img/applogo.png" alt="Logo" height="100">
            </div>
        </div>
    </div>
</div>
<!-- Portfolio -->
<div id="portfolio" class="bottom-border-shadow">
    <div class="container bottom-border">
        <div class="row padding-top-40">
            <ul class="portfolio-group">
                <!-- Portfolio Item -->
                <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                    <a href="#">
                        <figure class="animate fadeInLeft">
                            <img alt="image1" src="<?php echo base_url(); ?>img/frontpage/image1.jpg">
                            <figcaption>
                                <h3>Velit esse molestie</h3>
                            </figcaption>
                        </figure>
                    </a>
                </li>
                <!-- //Portfolio Item// -->
                <!-- Portfolio Item -->
                <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                    <a href="#">
                        <figure class="animate fadeIn">
                            <img alt="image2" src="<?php echo base_url(); ?>img/frontpage/image2.jpg">
                            <figcaption>
                                <h3>Quam nunc putamus</h3>
                            </figcaption>
                        </figure>
                    </a>
                </li>
                <!-- //Portfolio Item// -->
                <!-- Portfolio Item -->
                <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                    <a href="#">
                        <figure class="animate fadeInRight">
                            <img alt="image3" src="<?php echo base_url(); ?>img/frontpage/image3.jpg">
                            <figcaption>
                                <h3>Placerat facer possim</h3>
                            </figcaption>
                        </figure>
                    </a>
                </li>
                <!-- //Portfolio Item// -->
                <!-- Portfolio Item -->
                <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                    <a href="#">
                        <figure class="animate fadeInLeft">
                            <img alt="image4" src="<?php echo base_url(); ?>img/frontpage/image4.jpg">
                            <figcaption>
                                <h3>Nam liber tempor</h3>
                            </figcaption>
                        </figure>
                    </a>
                </li>
                <!-- //Portfolio Item// -->
                <!-- Portfolio Item -->
                <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                    <a href="#">
                        <figure class="animate fadeIn">
                            <img alt="image5" src="<?php echo base_url(); ?>img/frontpage/image5.jpg">
                            <figcaption>
                                <h3>Donec non urna</h3>
                            </figcaption>
                        </figure>
                    </a>
                </li>
                <!-- //Portfolio Item// -->
                <!-- Portfolio Item -->
                <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                    <a href="#">
                        <figure class="animate fadeInRight">
                            <img alt="image6" src="<?php echo base_url(); ?>img/frontpage/image6.jpg">
                            <figcaption>
                                <h3>Nullam consectetur</h3>
                            </figcaption>
                        </figure>
                    </a>
                </li>
                <!-- //Portfolio Item// -->
            </ul>
        </div>
    </div>
</div>
<!-- End Portfolio -->
<!-- === END CONTENT === -->
<!-- Footer -->
<div id="footer" class="background-grey">
    <div class="container">
        <div class="row">
            <!-- Footer Menu -->
            <div id="footermenu" class="col-md-8">
                <ul class="list-unstyled list-inline">
                    <li>
                        <a href="#" target="_blank">Sample Link</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">Sample Link</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">Sample Link</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">Sample Link</a>
                    </li>
                </ul>
            </div>
            <!-- End Footer Menu -->
            <!-- Copyright -->
            <div id="copyright" class="col-md-4">
                <p class="pull-right">(c)Copyrights by CURATRIX 2016</p>
            </div>
            <!-- End Copyright -->
        </div>
    </div>
</div>
<!-- End Footer -->
<!-- JS -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/scripts.js"></script>
<!-- Isotope - Portfolio Sorting -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.isotope.js" type="text/javascript"></script>
<!-- Mobile Menu - Slicknav -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.slicknav.js" type="text/javascript"></script>
<!-- Animate on Scroll-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.visible.js" charset="utf-8"></script>
<!-- Sticky Div -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.sticky.js" charset="utf-8"></script>
<!-- Slimbox2-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/slimbox2.js" charset="utf-8"></script>
<!-- Modernizr -->
<script src="<?php echo base_url(); ?>js/modernizr.custom.js" type="text/javascript"></script>
<!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->