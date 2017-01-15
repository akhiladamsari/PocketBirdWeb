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
                    <a href="index.html">
                        <img src="<?php echo base_url(); ?>img/applogo.png" alt="Logo"  height="100"  >                            </a>
                </div>
                <!-- End Logo -->
            </div>
        </div>
    </div>
    <!-- End Header -->
 
                <!-- End Logo -->
            </div>
        </div>
    </div>
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

                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_bird_glossary" class="fa-gears ">Bird Glossary</a>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav_controller/goto_map" class="fa-home active">Map</a>
                        </li>
                        <li>
                            <span class="fa-font ">Log Note Library</span>
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
                <h2 class="margin-bottom-10">MAP</h2>
                
                <form method="post" action="<?php echo base_url(); ?>map/index">
                    <select style="width: 146px;" id="INS_TYPE" name="INS_TYPE">
                        <option value="allupload"<?php if ($type == 'allupload') echo ' selected="selected"';?>>All Upload</option>
                        <option value="recentupload"<?php if ($type == 'recentupload') echo ' selected="selected"';?>>Reasently Upload</option>
                        <option value="myupload"<?php if ($type == 'myupload') echo ' selected="selected"';?>>My Upload</option>
                    </select>
                    <select style="width: 146px;" id="INS_TYPE" name="shape">
                        <option value="All"<?php if ($shape == 'All') echo ' selected="selected"';?>>All Shapes</option>
                        <option value="1"<?php  if ($shape == '1') echo ' selected="selected"';?>>Shearwater </option>
                        <option value="2"<?php  if ($shape == '2') echo ' selected="selected"';?>>Cormorant</option>
                        <option value="3"<?php  if ($shape == '3') echo ' selected="selected"';?>>Storks</option> 
                        <option value="4"<?php  if ($shape == '4') echo ' selected="selected"';?>>Duck</option>
                        <option value="5"<?php  if ($shape == '5') echo ' selected="selected"';?>>Eagle</option>
                        <option value="6"<?php  if ($shape == '6') echo ' selected="selected"';?>>Quail</option>
                        <option value="7"<?php  if ($shape == '7') echo ' selected="selected"';?>>Rils</option>
                        <option value="8"<?php  if ($shape == '8') echo ' selected="selected"';?>>Shore Birds</option>
                        <option value="9"<?php  if ($shape == '9') echo ' selected="selected"';?>>Piegeons</option>
                        <option value="10"<?php if ($shape == '10') echo ' selected="selected"';?>>Cuckoos</option>
                        <option value="11"<?php if ($shape == '11') echo ' selected="selected"';?>>Owls</option>
                        <option value="12"<?php if ($shape == '12') echo ' selected="selected"';?>>Swifts</option>
                        <option value="13"<?php if ($shape == '13') echo ' selected="selected"';?>>Woodpeckers</option>
                        <option value="14"<?php if ($shape == '14') echo ' selected="selected"';?>>Larks</option>
                        <option value="15"<?php if ($shape == '15') echo ' selected="selected"';?>>Swallows</option>
                        <option value="16"<?php if ($shape == '16') echo ' selected="selected"';?>>Bulbuls</option>
                        <option value="17"<?php if ($shape == '17') echo ' selected="selected"';?>>Warblers</option>
                        <option value="18"<?php if ($shape == '18') echo ' selected="selected"';?>>Babbler</option>
                        <option value="19"<?php if ($shape == '19') echo ' selected="selected"';?>>Sun Birds</option>
                        <option value="20"<?php if ($shape == '20') echo ' selected="selected"';?>>Crows</option>
                        <option value="21"<?php if ($shape == '21') echo ' selected="selected"';?>>Small Brown Bird</option>
                        
                    </select> 
                    <button type="submit">SEARCH</button>
                 </form> 
                            
                            <!-- Intro / Why Us? -->
                <div class="row">
                    <div class="col-md-4 animate fadeIn">
                    </div>
                </div>
                <!-- End Intro / Why Us? -->
                <div class="row">
                    <hr class="margin-top-20 margin-bottom-30">
                </div>
                <div class="row">
                    <style>
                        #map {
                            width: 100%;
                            height: 500px;
                            background-color: grey;
                        }
                    </style>
                    <div id="map">
                        <script>
                            var map;
                            function initMap() {
                                map = new google.maps.Map(document.getElementById('map'), {
                                    center: {lat: 7.5, lng:80.7},
                                    zoom: 7
                                });
                                
                                
                                
                                   <?php 
                                        foreach ($mapdata as $data) {
                                            $lat = $data->latitude;
                                            $lng = $data->longitude;
                                            $desc = "<img src='".base_url()."/shape/" . $data->shape . ".jpg' height=64 width=64><br>";
                                            $desc .= "Village: " . $data->village . "<br/>";
                                            $desc .= "Nearest city: " . $data->nearest_city . "<br/>";
//                                            $desc .= "Size:" . $data->size . "<br/";
                                            $desc .= "Looks like: " . $data->looks_like . "<br/>";
//                                            $desc .= "Colors: " . $data->colors . "<br />";
                                            $desc .= "Behaviour: " . $data->behaviour . "<br />";
                                            $desc .= "Description: " . $data->Description;
                                            echo "addMarker($lat, $lng, \"$desc\");\n";
                                        }
                                    ?>
                            }
                            
                            function addMarker(lat, lng, desc) {
                                var pos = new google.maps.LatLng(lat,lng);
                                var marker = new google.maps.Marker({
                                    position: pos,
                                    map: map
                                });
//                                google.maps.event.addListener(marker,'click',function() {
//                                    var infowindow = new google.maps.InfoWindow({
//                                      content:desc
//                                    });
//                                    infowindow.open(map,marker);
//                                });
                            }
                        </script>
                    </div>




                    <hr class="margin-top-20 margin-bottom-30">
                    
                    <hr class="margin-top-3	0">
             
                    <hr>
<<<<<<< HEAD
=======

>>>>>>> origin/master
                </div>
            </div>
        </div>
    </div>
    <!-- === END CONTENT === -->
    <!-- === BEGIN FOOTER === -->
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
                    <p class="pull-right">(c) 2014 Your Copyright Info</p>
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
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBF6sm9P6osdPj78hemp75kNF5Dr-xOhD0&callback=initMap" async defer></script>
    <!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->