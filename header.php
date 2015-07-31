<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

    <!-- Document Title
    ============================================= -->
	<title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>

</head>

<body class="stretched no-transition">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Top Bar
        ============================================= -->
        <div id="top-bar">

            <div class="container clearfix">

                <div class="col_half nobottommargin hidden-xs">

                    <p class="nobottommargin"><strong>Call:</strong> 1-888-490-0520 | <strong>Email:</strong> info@huntcan.com</p>

                </div>

                <div class="col_half col_last fright nobottommargin">

                    <!-- Top Links
                    ============================================= -->
                    <div class="top-links">
                        <ul>
                            <li><a href="./customer-support">Customer Support</a></li>
                            <li><a href="./contact">Contact</a></li>
                            <li><a href="./about">About</a></li>
                        </ul>
                    </div><!-- .top-links end -->

                </div>

            </div>

        </div><!-- #top-bar end -->

        <!-- Header
        ============================================= -->
        <header id="header" class="sticky-style-2">

            <div class="container clearfix">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="./" class="standard-logo" data-dark-logo="images/huntcan-logo.png"><img src="images/huntcan-logo.png" alt="Camper Crate" style="height: 60px; margin-top: 14px;"></a>
                    <a href="./" class="retina-logo" data-dark-logo="images/huntcan-logo.png"><img src="images/huntcan-logo.png" alt="Camper Crate" style="60px; margin-top: 14px;"></a>
                </div><!-- #logo end -->

                <ul class="header-extras" style="margin: 30px 0 30px;">
                    <li>
                        <i class="i-medium i-circled i-bordered nomargin">1</i>
                        <div class="he-text">
                            Sign Up
                            <span>100% Satisfaction</span>
                        </div>
                    </li>
                    <li>
                        <i class="i-medium i-circled i-bordered nomargin">2</i>
                        <div class="he-text">
                            Have Fun
                            <span>with your can</span>
                        </div>
                    </li>
                    <li>
                        <i class="i-medium i-circled i-bordered nomargin">3</i>
                        <div class="he-text">
                            Let Us Know
                            <span>what you think</span>
                        </div>
                    </li>
                    <li>
                        <i class="i-medium i-circled i-bordered nomargin">4</i>
                        <div class="he-text">
                            Gain Points
                            <span>to spend</span>
                        </div>
                    </li>
                </ul>

            </div>

            <div id="header-wrap">

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="style-2">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                            <ul>
                            	<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'current'; }else { echo ''; } ?>"><a href="./">Home</a></li>
						        <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'how-it-works.php'){echo 'current'; }else { echo ''; } ?>"><a href="./how-it-works">How It Works</a></li>
						        <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'in-the-can.php'){echo 'current'; }else { echo ''; } ?>"><a href="./in-the-can">In The Can</a></li>
						        <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'get-started.php'){echo 'current'; }else { echo ''; } ?>"><a href="./get-started">Get Started</a></li>
						        <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'gift.php'){echo 'current'; }else { echo ''; } ?>"><a href="./gift">Gift</a></li>
						    </ul>

                        

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                            <form action="search.html" method="get">
                                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div><!-- #top-search end -->

                    </div>

                </nav><!-- #primary-menu end -->

            </div>

        </header><!-- #header end -->