<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <!-- Title -->
    <title>Bird Log Book</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
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
                        <img src="<?php echo base_url(); ?>img/applogo.png" alt="Logo"  height="100"  >                            </a>
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

                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_bird_glossary" class="fa-book ">Bird Glossary</a>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_map" class="fa-map-marker active">Map</a>
                        </li>
                        <li>
                            <span class="fa-copy ">Log Note Library</span>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(); ?>page_nav_controller/goto_my_log_notes">My Log Notes</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>page_nav_controller/goto_shared_lognotes">Shared Log Notes</a>
                                </li>
                            </ul>
                        </li><li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_gallery" class="fa-th ">Gallery</a>

                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_about_us" class="fa-group ">About Us</a>
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
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12">
                    <h2>Gallery</h2>
                    <!-- Filter Buttons -->
                    <div class="portfolio-filter-container margin-top-20">
                        <form action="<?php echo base_url(); ?>lognote_controller/search" method="post">
                            Search by
                            <select id="shape" name="shape">
                                <option value="shape">Category</option>
                                <option value="1"<?php  if ($shape_id == '1') echo ' selected="selected"';?>>Shearwater </option>
                                <option value="2"<?php  if ($shape_id == '2') echo ' selected="selected"';?>>Cormorant</option>
                                <option value="3"<?php  if ($shape_id == '3') echo ' selected="selected"';?>>Storks</option>
                                <option value="4"<?php  if ($shape_id == '4') echo ' selected="selected"';?>>Duck</option>
                                <option value="5"<?php  if ($shape_id == '5') echo ' selected="selected"';?>>Eagle</option>
                                <option value="6"<?php  if ($shape_id == '6') echo ' selected="selected"';?>>Quail</option>
                                <option value="7"<?php  if ($shape_id == '7') echo ' selected="selected"';?>>Rils</option>
                                <option value="8"<?php  if ($shape_id == '8') echo ' selected="selected"';?>>Shore Birds</option>
                                <option value="9"<?php  if ($shape_id == '9') echo ' selected="selected"';?>>Piegeons</option>
                                <option value="10"<?php if ($shape_id == '10') echo ' selected="selected"';?>>Cuckoos</option>
                                <option value="11"<?php if ($shape_id == '11') echo ' selected="selected"';?>>Owls</option>
                                <option value="12"<?php if ($shape_id == '12') echo ' selected="selected"';?>>Swifts</option>
                                <option value="13"<?php if ($shape_id == '13') echo ' selected="selected"';?>>Woodpeckers</option>
                                <option value="14"<?php if ($shape_id == '14') echo ' selected="selected"';?>>Larks</option>
                                <option value="15"<?php if ($shape_id == '15') echo ' selected="selected"';?>>Swallows</option>
                                <option value="16"<?php if ($shape_id == '16') echo ' selected="selected"';?>>Bulbuls</option>
                                <option value="17"<?php if ($shape_id == '17') echo ' selected="selected"';?>>Warblers</option>
                                <option value="18"<?php if ($shape_id == '18') echo ' selected="selected"';?>>Babbler</option>
                                <option value="19"<?php if ($shape_id == '19') echo ' selected="selected"';?>>Sun Birds</option>
                                <option value="20"<?php if ($shape_id == '20') echo ' selected="selected"';?>>Crows</option>
                                <option value="21"<?php if ($shape_id == '21') echo ' selected="selected"';?>>Small Brown Bird</option>
                            </select>
                            <select id="province" name="province">
                                <option value="province"<?php  if ($province == 'province') echo ' selected="selected"';?>>Province</option>
                                <option value="Central"<?php  if ($province == 'Central') echo ' selected="selected"';?>>Central</option>
                                <option value="Eastern"<?php  if ($province == 'Eastern') echo ' selected="selected"';?>>Eastern</option>
                                <option value="North Central"<?php  if ($province == 'North Central') echo ' selected="selected"';?>>North Central</option>
                                <option value="Northern"<?php  if ($province == 'Northern') echo ' selected="selected"';?>>Northern</option>
                                <option value="North Western"<?php  if ($province == 'North Western') echo ' selected="selected"';?>>North Western</option>
                                <option value="Sabaragamuwa"<?php  if ($province == 'Sabaragamuwa') echo ' selected="selected"';?>>Sabaragamuwa</option>
                                <option value="Uva"<?php  if ($province == 'Uva') echo ' selected="selected"';?>>Uva</option>
                                <option value="Western"<?php  if ($province == 'Western') echo ' selected="selected"';?>>Western</option>

                            </select>
                            <select id="habitat" name="habitat">
                                <option value="habitat"<?php  if ($habitat == '') echo ' selected="selected"';?>>Habitat</option>
                                <option value="Beach"<?php  if ($habitat == 'Beach') echo ' selected="selected"';?>>Beach</option>
                                <option value="Dry Zone Forest"<?php  if ($habitat == 'Dry Zone Forest') echo ' selected="selected"';?>>Dry Zone Forest</option>
                                <option value="Forest"<?php  if ($habitat == 'Forest') echo ' selected="selected"';?>>Forest</option>
                                <option value="Home Garden"<?php  if ($habitat == 'Home Garden') echo ' selected="selected"';?>>Home Garden</option>
                                <option value="Lake"<?php  if ($habitat == 'Lake') echo ' selected="selected"';?>>Lake</option>
                                <option value="Low Land Rainforest"<?php  if ($habitat == 'Low Land Rainforest') echo ' selected="selected"';?>>Low Land Rainforest</option>
                                <option value="Mountain"<?php  if ($habitat == 'Mountain') echo ' selected="selected"';?>>Mountain</option>
                                <option value="Mountain Rainforest"<?php  if ($habitat == 'Mountain Rainforest') echo ' selected="selected"';?>>Mountain Rainforest</option>
                                <option value="River"<?php  if ($habitat == 'River') echo ' selected="selected"';?>>River</option>
                                <option value="Riverine Forest"<?php  if ($habitat == 'Riverine Forest') echo ' selected="selected"';?>>Riverine Forest</option>
                                <option value="Scurbland"<?php  if ($habitat == 'Scurbland') echo ' selected="selected"';?>>Scurbland</option>
                                <option value="Tea Field"<?php  if ($habitat == 'Tea Field') echo ' selected="selected"';?>>Tea Field</option>
                                <option value="Paddy Field"<?php  if ($habitat == 'Paddy Field') echo ' selected="selected"';?>>Paddy Field</option>
                                <option value="Rubber Field"<?php  if ($habitat == 'Rubber Field') echo ' selected="selected"';?>>Rubber Field</option>
                                <option value="Vegitable Field"<?php  if ($habitat == 'Vegitable Field') echo ' selected="selected"';?>>Vegitable Field</option>
                                <option value="Other"<?php  if ($habitat == 'Other') echo ' selected="selected"';?>>Other</option>


                            </select>
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                    </div>
                    <!-- End Filter Buttons -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 portfolio-group no-padding">
                    <!-- Portfolio Item -->
                    <?php foreach($image as $bla){?>
                        <div class="col-md-4 portfolio-item margin-bottom-40 video">
                            <div>
                                    <figure>
                                        <img src="<?php echo base_url(); ?>uploads/<?php echo $bla->image_ID;?>.jpg" alt="image1">
                                        <figcaption>
                                            <h3 class="margin-top-20"><?php echo $bla->date ?></h3>
                                            <span><?php echo $bla->time ?></span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- End Portfolio Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- === END CONTENT === -->

    <!-- Footer -->
    <div id="footer" class="background-grey">
        <div class="container">
            <div class="row">
                <!-- Footer Menu -->
                <div id="footermenu" class="col-md-8">

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