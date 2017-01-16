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

<<<<<<< HEAD
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_bird_glossary" class="fa-gears ">Bird
                                Glossary</a>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_map" class="fa-home">Map</a>
                        </li>
                        <li>
                            <span class="fa-font ">Log Note Library</span>
=======
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_bird_glossary" class="fa-book ">Bird Glossary</a>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_map" class="fa-map-marker active">Map</a>
                        </li>
                        <li>
                            <span class="fa-copy ">Log Note Library</span>
>>>>>>> 86190403d8152e3d7c4d35304d171b903500d09b
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(); ?>page_nav_controller/goto_my_log_notes">My Log Notes</a>
                                </li>
                                <li>
<<<<<<< HEAD
                                    <a href="<?php echo base_url(); ?>page_nav_controller/goto_shared_lognotes">Shared Log
                                        Notes</a>
                                </li>
                            </ul>
                        </li>
                        <li>
=======
                                    <a href="<?php echo base_url(); ?>page_nav_controller/goto_shared_lognotes">Shared Log Notes</a>
                                </li>
                            </ul>
                        </li><li>
>>>>>>> 86190403d8152e3d7c4d35304d171b903500d09b
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_gallery" class="fa-th ">Gallery</a>

                        </li>
                        <li>
<<<<<<< HEAD
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_about_us" class="fa-comment ">About Us</a>
=======
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_about_us" class="fa-group ">About Us</a>
>>>>>>> 86190403d8152e3d7c4d35304d171b903500d09b
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
<<<<<<< HEAD

=======
>>>>>>> 86190403d8152e3d7c4d35304d171b903500d09b
                    </ul>
                </div>

            </div>
            <!-- </div> -->
        </div>
    </div>
    <!-- End Top Menu -->
    <!-- === END HEADER === -->
    <?php
    $username = $this->session->userdata('username');
    ?>
    <!-- === BEGIN CONTENT === -->
    <div id="content">
        <div class="container background-white">
            <?php
            foreach($lognote as $bla){
            ?>
            <div class="row margin-vert-30">
                <!-- Main Column -->
                <div class="col-md-9">
                    <div class="blog-post">
                        <div class="blog-item-header">
                            <h2>
                                <a href="#">
                                    <?php // echo $bla['note_ID'];?>
                                </a>
                            </h2>
                            <!-- Date -->
                            <div class="blog-post-date">
                                <a href="#"><?php echo $bla['exact_location'];?></a>
                            </div>
                            <!-- End Date -->
                        </div>
                        <div class="blog-post-details">
                            <!-- Author Name -->
                            <div class="blog-post-details-item blog-post-details-item-left user-icon">
                                <i class="fa fa-user color-gray-light"></i>
                                <a href="#"><?php// echo $bla['user_ID'];?></a>
                            </div>
                            <!-- End Author Name -->
                            <!-- Tags -->
                            <!--                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">-->
                            <!--                                <i class="fa fa-tag color-gray-light"></i>-->
                            <!--                                <a href="#">--><?php //echo $bla->province;?><!--</a>,-->
                            <!--                                <a href="#">Javascript</a>,-->
                            <!--                                <a href="#">CoffeeScript</a>-->
                            <!--                            </div>-->
                            <!-- End Tags -->
                            <!-- # of Comments -->
                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                                <a href="">
                                    <i class="fa fa-comments color-gray-light"></i>
                                    <?php //echo count($comment);?> comments
                                </a>
                            </div>
                            <!-- End # of Comments -->
                        </div>
                        <div class="blog-item">
                            <div class="clearfix"></div>
                            <div class="blog-post-body row margin-top-15">
                                <div class="col-md-5">
                                    <img class="margin-bottom-20" src="<?php echo base_url(); ?>uploads/<?php echo $bla['image_ID'];?>.jpg" alt="image1" >
                                    <p>
                                        <bold> Province : </bold>         <?php echo $bla['province'];?><br>
                                        <bold>Village :    </bold>       <?php echo $bla['village'];?><br>
                                        <bold>Exact Location :   </bold> <?php echo $bla['exact_location'];?><br>
                                        <bold>Nearest City :   </bold>   <?php echo $bla['nearest_city'];?><br>
                                        <bold>Confidence Level : </bold> <?php echo $bla['confidence_level'];?><br>
                                        <bold>Habitat :      </bold>     <?php echo $bla['habbitat'];?><br>
                                        <bold>Size :       </bold>       <?php echo $bla['size'];?><br>
                                        <bold>Looks Like :   </bold>     <?php echo $bla['looks_like'];?><br>
                                        <bold>Color :     </bold>        <?php echo $bla['colors'];?><br>
                                        <bold>Behaviour : </bold>        <?php echo $bla['behaviour'];?><br>
                                        <bold>Description :     </bold>  <?php echo $bla['Description'];?><br>
                                    </p>
                                </div>
                                <div class="col-md-7">

                                    <img class="margin-bottom-20" src="<?php echo base_url(); ?>shape/<?php echo $bla['shape'];?>.jpg" alt="image1" width="200" height="200">

                                </div>
                                <div class="col-md-12">
                                    <p>
                                    </p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-success btn-sm"><a
                                    href="<?php echo base_url(); ?>sign_up_controller/select_new_lognotes">OK</a>
                            </button>

                        </div>
                    </div>

                    <!-- End Blog Post -->
                </div>

                <?php } ?>
                <!-- End Main Column -->
            </div>
        </div>
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